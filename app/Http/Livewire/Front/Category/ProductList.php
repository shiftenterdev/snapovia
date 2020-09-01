<?php

namespace App\Http\Livewire\Front\Category;

use App\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $products;

    public function mount()
    {
        $this->products = \App\Models\Product::front();
    }

    public function render()
    {
        return view('livewire.front.category.product-list');
    }

    public function addToCart($sku)
    {
        Cart::addToCart($sku);
        $this->emit('updateMiniCart');
        session()->flash('message', 'Product added to cart 😀');
    }

    public function updateProductList()
    {
        
    }
}
