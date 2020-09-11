<?php

namespace App\Http\Livewire\Front;

use App\Facades\Cart;
use Livewire\Component;

class Checkout extends Component
{

    public $tax = 0,
        $shipping = 0;

    public function render()
    {
        $cart = Cart::get();
        return view('livewire.front.checkout', compact('cart'));
    }


}
