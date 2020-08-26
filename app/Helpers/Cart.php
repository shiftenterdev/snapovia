<?php

/**
 * @author Iftakharul Alam Bappa <iftakharul@strativ.se> 
 */
namespace App\Helpers;


use App\Models\Product;

class Cart
{
    /**
     * Cart constructor.
     */
    public function __construct()
    {
        if ($this->get() === null)
            $this->set($this->empty());
    }

    /**
     * @return array|null
     */
    public function get(): ?array
    {
        return request()->session()->get('cart');
    }

    /**
     * @param $cart
     */
    private function set($cart): void
    {
        request()->session()->put('cart', $cart);
    }

    /**
     * @return array|array[]
     */
    public function empty(): array
    {
        return [
            'products' => [],
        ];
    }

    /**
     * @param Product $product
     */
    public function add(Product $product): void
    {
        $cart = $this->get();
        array_push($cart['products'], $product);
        $this->set($cart);
    }

    /**
     * @param int $productId
     */
    public function remove(int $productId): void
    {
        $cart = $this->get();
        array_splice($cart['products'], array_search($productId, array_column($cart['products'], 'id')), 1);
        $this->set($cart);
    }

    /**
     * clear all
     */
    public function clear(): void
    {
        $this->set($this->empty());
    }
}