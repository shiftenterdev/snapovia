<?php

namespace App\Http\Livewire\Front\Category;

use App\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public function render()
    {
        $products = \App\Models\Product::front();
        return view('livewire.front.category.product-list', compact('products'));
    }

    public function addToCart($sku)
    {
        Cart::addToCart($sku);
        $this->emit('updateMiniCart');
        session()->flash('message', 'Product added to cart 😀');
    }
}
