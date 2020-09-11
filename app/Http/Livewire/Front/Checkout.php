<?php

namespace App\Http\Livewire\Front;

use App\Facades\Cart;
use App\Facades\Customer;
use App\Models\Shipping;
use Livewire\Component;

class Checkout extends Component
{

    public $tax = 0,
        $shipping = 0,$customer = null;

    protected $listeners = ['refreshCheckout'];

    public function render()
    {
        $cart = Cart::get();
        $shippingMethods = Shipping::get();
        return view('livewire.front.checkout', compact('cart','shippingMethods'));
    }


    public function refreshCheckout()
    {
        $this->customer = Customer::user();
    }


}
