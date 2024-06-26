<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */

namespace App\Livewire\Front;

use App\Facades\Cart;
use App\Models\CartPriceRule;
use Livewire\Component;

class CheckoutCart extends Component
{
    public $coupon_amount = 0;

    public $coupon_type = '';

    public $coupon_code = '';

    public $cart = [];

    public $sub_total = 0;

    public $sub_total_incl_tax = 0;

    public $tax_amount = 0;

    public $tax = 0;

    //    public function updated($field)
    //    {
    //        $this->validateOnly($field, [
    //            'coupon_code' => 'required|min:2'
    //        ]);
    //    }

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

    public function updateQty($sku, $qty)
    {
        Cart::updateQty($sku, $qty);
        $this->cart = Cart::get();
        $this->cartCalculate();
    }

    public function applyCoupon()
    {
        $rule = CartPriceRule::where('coupon_code', $this->coupon_code)
            ->where('status', 1)
            ->first();

        if ($rule) {
            $this->coupon_type = $rule->discount_type;
            $this->coupon_amount = $rule->discount_amount;
            Cart::applyCoupon($rule->id);
            $this->cart = Cart::get();
            $this->cartCalculate();
            session()->flash('success', 'Coupon code: <strong>' . $this->coupon_code . '</strong> Applied successfully');
        } else {
            session()->flash('error', 'Sorry, Invalid Coupon applied');
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
