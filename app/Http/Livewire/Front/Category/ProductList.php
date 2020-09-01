<?php

namespace App\Http\Livewire\Front\Category;

use App\Facades\Cart;
use Livewire\Component;

class ProductList extends Component
{
    public function render()
    {
        $products = \App\Models\Product::whereStatus(1)
            ->select(['name', 'id', 'price', 'sku'])
            ->paginate(18);
        return view('livewire.front.category.product-list',compact('products'));
    }

    public function addToCart($sku)
    {
        Cart::addToCart($sku);
        $this->emit('updateMiniCart');
        session()->flash('message', 'Product added to cart 😀');
    }
}
