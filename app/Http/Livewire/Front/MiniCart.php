<?php

namespace App\Http\Livewire\Front;

use App\Facades\Cart;
use Livewire\Component;

class MiniCart extends Component
{

    protected $listeners = ['updateMiniCart'];

    public function render()
    {
        $cart = Cart::get();
        return view('livewire.front.mini-cart',compact('cart'));
    }

    public function updateMiniCart()
    {

    }
}
