<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */

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
        $email = '',
        $guest_notify = '',
        $grand_total_incl_tax = 0,
        $shipping_amount = 0,
        $payment_method = 'cod',
        $shipping_id = null,
        $customer = null;

    protected $listeners = ['refreshCheckout'];

    public function mount()
    {
        $this->tax = config('site.sales.tax');
        $this->cart = Cart::get();
        $this->cartCalculate();
    }

    private function cartCalculate()
    {
        $this->sub_total = _a($this->cart->grand_total);
        $this->sub_total_incl_tax = _a($this->cart->grand_total + $this->cart->grand_total / 100 * $this->tax);
        $this->tax_amount = _a(($this->sub_total / 100) * $this->tax);
        $this->shipping_amount = _a($this->cart->shipping_amount);
        $this->grand_total = _a($this->cart->grand_total + $this->cart->grand_total / 100 * $this->tax + $this->cart->shipping_amount);
        $this->grand_total_incl_tax = _a($this->cart->grand_total + $this->cart->grand_total / 100 * $this->tax + $this->cart->shipping_amount);
    }

    public function render()
    {
        $shippingMethods = cache()->remember('shipping_method', 60 * 60, function () {
            return Shipping::get();
        });
        return view('livewire.front.checkout', compact('shippingMethods'));
    }

    public function updatedShippingId($value)
    {
        Cart::applyShipping($value);
        $this->cart = Cart::get();
        $this->cartCalculate();
    }

    public function updatePaymentMethod($value)
    {
        $this->show_card = false;
        if ($value == 'card') {
            $this->show_card = true;
        }
    }

    public function updatedEmail($value)
    {
        $exists = \App\Models\Customer::where('email', $value)
            ->first();
        if ($exists) {
            $this->guest_notify = 'You are already registered. Do you want to login ? <a data-toggle="modal"
                               href="#modalCustomerLogin"><ins>Click  to Login</ins></a>';
        } else {
            $this->guest_notify = '';
        }
    }

    public function refreshCheckout()
    {
        $this->customer = Customer::user();
    }


}
