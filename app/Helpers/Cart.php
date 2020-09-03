<?php

/**
 * @author Iftakharul Alam Bappa <iftakharul@strativ.se> 
 */

namespace App\Helpers;


use App\Models\Product;
use App\Models\Quote;
use App\Models\QuoteItems;

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

    private function create()
    {
        $customer_id = 0;
        if(\App\Facades\Customer::check()){
            $customer_id = \App\Facades\Customer::user()->customer_id;
        }
        $quote = Quote::create(['customer_ip' => request()->ip(),'customer_id'=>$customer_id]);
        $this->set($quote);
    }

    public function addCustomerToQuote($customer_id)
    {
        $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->update(['customer_id'=>$customer_id]);
    }

    public function merge($customer_quote_id)
    {
        $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->firstOrFail();
        QuoteItems::where('quote_id',$quote->id)->update(['quote_id'=>$customer_quote_id]);
        $this->refreshCart($customer_quote_id);
    }

    /**
     * @param $cart
     */
    private function set($cart): void
    {
        $cart = $this->refreshCart($cart->id);
        session([self::QUOTE_SESSION_KEY => $cart]);
    }

    private function refreshCart($quote_id)
    {
        $quote = Quote::findOrFail($quote_id);
        $subtotal = 0;
        $tax = 0;
        foreach ($quote->items as $item){
            $subtotal += $item->qty * $item->price;
        }
        $grand_total_incl_tax = $subtotal + $tax;
        $quote->update(['grand_total'=>$subtotal,'grand_total_incl_tax'=>$grand_total_incl_tax]);
        return $quote;
    }

    public function count()
    {
        return $this->get()?count($this->get()->items):0;
    }

    public function addToCart($sku, $qty = 1)
    {
        $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->firstOrFail();
        $product = Product::whereSku($sku)->firstOrFail();
        $quote->items()->updateOrCreate(
            [
                'product_id'   => $product->id,
                'name'         => $product->name,
                'sku'          => $product->sku,
                'product_type' => $product->product_type,
                'row_total'    => (int)($product->price * $qty)
            ],
            ['qty' => $qty, 'price' => $product->price, 'discount_price' => 0]
        );
        $this->set($quote);
    }

    public function updateQty($sku,$qty)
    {
        $quote = Quote::where('quote_id', session(self::QUOTE_SESSION_KEY)->quote_id)
            ->firstOrFail();
        $quote->items()->where('sku',$sku)->update([
            'qty'=>$qty
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

    public function remove()
    {
        session()->remove(self::QUOTE_SESSION_KEY);
    }

    private function check()
    {
        return session(self::QUOTE_SESSION_KEY) ?? null;
    }

}
