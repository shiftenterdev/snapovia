<?php

namespace App\Http\Livewire\Front;

use App\Facades\Cart;
use Livewire\Component;

class CheckoutCart extends Component
{
    public function render()
    {
        $cart = Cart::get();

        return view('livewire.front.checkout-cart',compact('cart'));
    }

    public function removeFromCart($sku)
    {
        Cart::removeFromCart($sku);
        $this->emit('updateMiniCart');
    }
}
