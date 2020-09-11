<?php

namespace App\Http\Livewire\Front;

use App\Facades\Cart;
use App\Facades\Customer;
use App\Models\Shipping;
use Livewire\Component;

class Checkout extends Component
{

    public $tax = 0,
        $cart = [],
        $sub_total = 0,
        $sub_total_incl_tax = 0,
        $tax_amount = 0,
        $grand_total = 0,
        $grand_total_incl_tax = 0,
        $shipping_amount = 0,
        $shipping_id = null,
        $customer = null;

    protected $listeners = ['refreshCheckout'];

    public function mount()
    {
        $this->tax = config('site.sales.tax');
        $this->cart = Cart::get();
        $this->cartCalculate();
    }

    public function render()
    {
        $shippingMethods = Shipping::get();
        return view('livewire.front.checkout', compact('shippingMethods'));
    }


    public function updatedShippingId($value)
    {
        Cart::applyShipping($value);
        $this->cart = Cart::get();
        $this->cartCalculate();
    }


    public function refreshCheckout()
    {
        $this->customer = Customer::user();
    }

    private function cartCalculate()
    {
        $this->sub_total = _a($this->cart->grand_total);
        $this->sub_total_incl_tax = _a($this->cart->grand_total + $this->cart->grand_total/100*$this->tax);
        $this->tax_amount = _a(($this->sub_total/100)*$this->tax);
        $this->shipping_amount = _a($this->cart->shipping_amount);
        $this->grand_total = _a($this->cart->grand_total + $this->cart->grand_total/100*$this->tax + $this->cart->shipping_amount);
        $this->grand_total_incl_tax = _a($this->cart->grand_total + $this->cart->grand_total/100*$this->tax + $this->cart->shipping_amount);
    }


}
