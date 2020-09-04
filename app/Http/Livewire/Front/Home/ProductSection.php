<?php

namespace App\Http\Livewire\Front\Home;

use App\Facades\Cart;
use App\Models\Product;
use Livewire\Component;

class ProductSection extends Component
{

    public function render()
    {
        $women = Product::home();
        $men = Product::home();;
        $gadget = Product::home();;
        return view('livewire.front.home.product-section')
            ->with(compact('women','men','gadget'));
    }

    public function addToCart($sku)
    {
        Cart::addToCart($sku);
        $this->emit('updateMiniCart');
        session()->flash('success', 'Product added to cart 😀');
//        $this->dispatchBrowserEvent('show-minicart');
    }
}
