<?php

namespace App\Http\Livewire\Front;

use App\Facades\Cart;
use App\Models\CartPriceRule;
use Livewire\Component;

class CheckoutCart extends Component
{
    public $coupon_amount = 0;
    public $coupon_code   = '';


    protected $rules = [
        'coupon_code' => 'required|min:2'
    ];

    public function render()
    {
        $cart = Cart::get();

        return view('livewire.front.checkout-cart', compact('cart'));
    }

    public function applyCoupon()
    {
        $rule = CartPriceRule::where('coupon_code',$this->coupon_code)
            ->where('status',1)
            ->first();

        if($rule){
            $this->coupon_amount = $rule->discount_amount;
            Cart::applyCoupon($rule->id);
            session()->flash('success','Coupon code: <strong>'.$this->coupon_code.'</strong> Applied successfully');
        }
    }

    public function removeFromCart($sku)
    {
        Cart::removeFromCart($sku);
        $this->emit('updateMiniCart');
    }
}
