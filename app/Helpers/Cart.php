<?php

/**
 * @author Iftakharul Alam Bappa <iftakharul@strativ.se> 
 */

namespace App\Helpers;


use App\Models\Order;
use App\Models\Product;
use App\Models\Quote;
use App\Models\QuoteItems;


/**
 * Class Cart
 * @package App\Helpers
 */
class Cart
{

    const QUOTE_SESSION_KEY = '_quote';

    /**
     * Cart constructor.
     */
    public function __construct()
    {
        if ($this->get() === null)
            $this->create();
    }


    public function get()
    {
        return session(self::QUOTE_SESSION_KEY) ?? null;
    }

    private function create(): void
    {
        $customer_id = 0;
        if (\App\Facades\Customer::check()) {
            $customer_id = \App\Facades\Customer::user()->customer_id;
        }
        $quote = Quote::create(['customer_ip' => request()->ip(), 'customer_id' => $customer_id]);
        $this->set($quote);
    }

    /**
     * @param $cart
     */
    private function set($cart): void
    {
        $cart = $this->refreshCart($cart->id);
        session([self::QUOTE_SESSION_KEY => $cart]);
    }

    private function refreshCart($quote_id): Quote
    {
        $quote = Quote::find($quote_id);
        if (isset($quote->items)) {
            $subtotal = 0;
            $tax = 0;
            foreach ($quote->items as $item) {
                $subtotal += $item->qty * $item->price;
            }
            $grand_total_incl_tax = $subtotal + $tax;
            $quote->update(['grand_total' => $subtotal, 'grand_total_incl_tax' => $grand_total_incl_tax]);
        }
        return $quote;
    }

    public function addCustomerToQuote($customer_id): void
    {
        Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->update(['customer_id' => $customer_id]);
    }

    public function merge($customer_quote_id): void
    {
        $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->first();
        $items = QuoteItems::where('quote_id', $quote->id)->get();
        foreach ($items as $item) {
            $item->update(['quote_id' => $customer_quote_id]);
        }
        $quote->delete();
        $new_quote = Quote::find($customer_quote_id);
        $this->refreshCart($new_quote);
    }

    public function count(): int
    {
        return $this->get() ? count($this->get()->items) : 0;
    }

    public function addToCart($sku, $qty = 1): void
    {
        if (!$this->check()) {
            $this->create();
        }
        $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->firstOrFail();
        $product = Product::whereSku($sku)->first();

        $item = QuoteItems::where('quote_id', $quote->id)
            ->where('product_id', $product->id)
            ->first();

        if (empty($item)) {
            $quote->items()->Create(
                [
                    'product_id'     => $product->id,
                    'name'           => $product->name,
                    'sku'            => $product->sku,
                    'product_type'   => $product->product_type,
                    'qty'            => $qty,
                    'price'          => $product->price,
                    'discount_price' => 0
                ]
            );
        } else {
            $quote->items()->where('product_id', $product->id)->Update(
                [
                    'qty'       => $item->qty + $qty,
                ]
            );
        }
        $this->set($quote);
    }

    public function check()
    {
        if (session(self::QUOTE_SESSION_KEY)) {
            $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
                ->first();
            if (!$quote) {
                $this->remove();
                return false;
            }
            return true;
        }
        return false;
    }

    public function updateQty($sku, $qty)
    {
        $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->firstOrFail();
        $quote->items()->where('sku', $sku)->update([
            'qty' => $qty,
        ]);
        $this->set($quote);
    }

    /**
     * @param $productSku
     */
    public function removeFromCart($productSku): void
    {
        $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->firstOrFail();
        $quote->items()->where('sku', $productSku)->delete();
        $this->set($quote);
    }

    public function remove(): void
    {
        session()->remove(self::QUOTE_SESSION_KEY);
    }

    public function toOrder(): ?Order
    {
        if ($this->check()) {
            $quote = $this->get();

            $order = new Order();
            $order->order_id = $quote->quote_id;
            $order->invoice_id = $quote->quote_id;
            $order->customer_ip = request()->ip();
            $order->customer_id = \App\Facades\Customer::check()?\App\Facades\Customer::user()->id:0;
            $order->quote_id = $quote->quote_id;
            $order->status = 'processing';
            $order->save();
            foreach ($quote->items as $item) {
                $order->items()->create([
                    'product_id'         => $item->product_id,
                    'sku'                => $item->sku,
                    'name'               => $item->name,
                    'price'              => $item->price,
                    'qty'                => $item->qty,
                    'product_attributes' => $item->product_attributes,
                    'discount_price'     => $item->discount_price,
                    'product_type'       => $item->product_type,
                ]);
            }
            $quote->items()->delete();
            $quote->delete();

            return $order;

        }
        return null;
    }

}
