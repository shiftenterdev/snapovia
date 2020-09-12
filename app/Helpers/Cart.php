<?php

/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */

namespace App\Helpers;


use App\Models\Order;
use App\Models\Product;
use App\Models\Quote;
use App\Models\QuoteItems;
use App\Models\Shipping;


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
//        if ($this->get() === null)
//            $this->create();
    }

    public function addCustomerToQuote($customer_id): void
    {
        Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->update(['customer_id' => $customer_id]);
    }

    public function merge($customer_quote_id): void
    {
        if (session(self::QUOTE_SESSION_KEY)) {
            $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
                ->first();
            $items = QuoteItems::where('quote_id', $quote->id)->get();
            foreach ($items as $item) {
                $item->update(['quote_id' => $customer_quote_id]);
            }
            $quote->delete();
        }
        $new_quote = Quote::find($customer_quote_id);
        $this->set($new_quote);
    }

    /**
     * @param $cart
     */
    private function set($cart): void
    {
        $cart = $this->refreshCart($cart->id);
        session([self::QUOTE_SESSION_KEY => $cart]);
    }

    private function refreshCart($quote_id): ?Quote
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

    public function count(): int
    {
        return count(session(self::QUOTE_SESSION_KEY)->items) ?? 0;
    }

    public function addToCart($sku, $qty = 1): void
    {
        if (!$this->check()) {
            $this->create();
        }
        $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->first();
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
                    'qty' => $item->qty + $qty,
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

    public function remove(): void
    {
        session()->remove(self::QUOTE_SESSION_KEY);
    }

    public function create(): void
    {
        $customer_id = 0;
        if (\App\Facades\Customer::check()) {
            $customer_id = \App\Facades\Customer::user()->customer_id;
            $quote = Quote::where('customer_id', $customer_id)->first();
            if (!$quote) {
                $quote = Quote::create(['customer_ip' => request()->ip(), 'customer_id' => $customer_id]);
            }
        } else {
            $quote = Quote::create(['customer_ip' => request()->ip(), 'customer_id' => $customer_id]);
        }
        $this->set($quote);
    }

    public function applyShipping($shipping_id)
    {
        $shipping = Shipping::find($shipping_id);
        $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->first();
        $shipping_amount = $shipping->amount;
        $shipping_amount_incl_tax = $shipping->amount;
        $quote->update([
            'shipping_amount'          => $shipping_amount,
            'shipping_amount_incl_tax' => $shipping_amount_incl_tax,
            'grand_total'              => $quote->grand_total,
            'grand_total_incl_tax'     => $quote->grand_total,
        ]);
        $this->set($quote);
    }

    public function updateQty($sku, $qty = 1)
    {
        $qty = abs($qty);
        if ($qty < 1) {
            $qty = 1;
        }
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

    /**
     * @param $coupon_id
     */
    public function applyCoupon($coupon_id): void
    {
        if ($this->check()) {
            Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
                ->update(['coupon_id' => $coupon_id]);
        }
    }

    public function toOrder(): ?Order
    {
        if ($this->check()) {
            $quote = $this->get();

            $order = new Order();
            $order->customer_ip = request()->ip();
            $order->customer_id = \App\Facades\Customer::check() ? \App\Facades\Customer::user()->id : 0;
            $order->status = 'processing';
            $order->payment_status = 'processing';
            $order->email = request('email');
            $order->delivery_status = 'pending';
            $order->shipping_amount = $quote->shipping_amount;
            $order->shipping_amount_incl_tax = $quote->shipping_amount_incl_tax;
            $order->delivery_status = 'pending';
            $order->payment_method = request('payment_method', 'cod');
            $order->shipping_method = request('shipping_method', 'free');
            $order->notes = request('order_notes');
            $order->save();
            $grand_total = 0;
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

                $grand_total += $item->qty * $item->price;
            }
            $tax = config('site.sales.tax');
            $order->update([
                'grand_total'          => $grand_total,
                'grand_total_incl_tax' => $grand_total + $grand_total / 100 * $tax,
                'tax'                  => $grand_total / 100 * $tax,
            ]);
            $quote->items()->delete();
            $quote->delete();
            $this->remove();
            return $order;

        }
        return null;
    }

    public function get()
    {
        if (!$this->check()) {
            $this->create();
        }
        return session(self::QUOTE_SESSION_KEY) ?? null;
    }

}
