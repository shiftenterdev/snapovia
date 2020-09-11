<?php

namespace App\Http\Livewire\Front;

use App\Facades\Cart;
use App\Facades\Customer;
use Livewire\Component;

class Checkout extends Component
{

    public $tax = 0,
        $shipping = 0,$customer = (object)[];

    protected $listeners = ['refreshCheckout'];

    public function render()
    {
        $cart = Cart::get();
        return view('livewire.front.checkout', compact('cart'));
    }


    public function refreshCheckout()
    {
        $this->customer = Customer::user();
    }


}
