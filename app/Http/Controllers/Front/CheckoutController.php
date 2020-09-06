<?php

namespace App\Http\Controllers\Front;

use App\Facades\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderSubmitRequest;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Cart::get();
        if(!count($cart->items) || !Cart::check()){
            return redirect()->route('cart');
        }
        return view('front.checkout.index',compact('cart'));
    }

    public function submit(OrderSubmitRequest $request)
    {
        try{
            $order = Cart::toOrder();
            if($order){
                return view('front.checkout.success',compact('order'));
            }
            return redirect()->back()->with('error',__('Order cannot complete at this moment'));
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }

    }

    public function cart()
    {
        return view('front.checkout.cart');
    }

    public function success()
    {
        return view('front.checkout.success');
    }
}
