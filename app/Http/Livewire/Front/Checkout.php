<?php

namespace App\Http\Livewire\Front;

use App\Facades\Cart;
use App\Facades\Customer;
use Livewire\Component;

class Checkout extends Component
{

    public $tax = 0,
        $shipping = 0, $email = '', $password = '',$customer = [];

    public function render()
    {
        $cart = Cart::get();
        return view('livewire.front.checkout', compact('cart'));
    }


    public function CustomerLogin()
    {
        $credentials = [
            'email'    => $this->email,
            'password' => $this->password
        ];

        if (Customer::attempt($credentials)) {
            $this->customer = Customer::user();
        }
        session()->flash('error', 'Login failed');
    }


}
