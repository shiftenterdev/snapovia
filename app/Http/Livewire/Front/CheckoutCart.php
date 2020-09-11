<?php

namespace App\Http\Livewire\Front;

use App\Facades\Cart;
use App\Models\CartPriceRule;
use Livewire\Component;

class CheckoutCart extends Component
{
    public $coupon_amount = 0,
        $coupon_code = '',
        $cart = [],
        $sub_total = 0,
        $sub_total_incl_tax = 0,
        $tax_amount = 0,
        $tax = 0;


    public function updated($field)
    {
        $this->validateOnly($field, [
            'coupon_code' => 'required|min:2'
        ]);
    }

    public function mount()
    {
        $this->tax = config('site.sales.tax');
        $this->cart = Cart::get();
        $this->cartCalculate();
    }

    private function cartCalculate()
    {
        $this->sub_total = _a($this->cart->grand_total);
        $this->tax_amount = _a($this->cart->grand_total / 100 * $this->tax);
        $this->sub_total_incl_tax = _a($this->cart->grand_total + $this->cart->grand_total / 100 * $this->tax);
    }

    public function render()
    {
        return view('livewire.front.checkout-cart');
    }

    public function applyCoupon()
    {
        $rule = CartPriceRule::where('coupon_code', $this->coupon_code)
            ->where('status', 1)
            ->first();

        if ($rule) {
            $this->coupon_amount = $rule->discount_amount;
            Cart::applyCoupon($rule->id);
            $this->cart = Cart::get();
            $this->cartCalculate();
            session()->flash('success', 'Coupon code: <strong>' . $this->coupon_code . '</strong> Applied successfully');
        }
    }

    public function removeFromCart($sku)
    {
        Cart::removeFromCart($sku);
        $this->cart = Cart::get();
        $this->cartCalculate();
        $this->emit('updateMiniCart');
    }
}
