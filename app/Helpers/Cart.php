<?php

/**
 * @author Iftakharul Alam Bappa <iftakharul@strativ.se> 
 */

namespace App\Helpers;


use App\Models\Product;
use App\Models\Quote;

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
        $quote = Quote::create(['customer_ip' => request()->ip()]);
        $this->set($quote);
    }

    /**
     * @param $cart
     */
    private function set($cart): void
    {
        session([self::QUOTE_SESSION_KEY => $cart]);
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
            ['qty' => $qty, 'unit_price' => $product->price, 'discount_price' => 0]
        );
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

    private function check()
    {
        return session(self::QUOTE_SESSION_KEY) ?? null;
    }

}