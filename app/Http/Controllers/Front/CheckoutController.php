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
        if(!count($cart->items)){
            return redirect()->route('cart');
        }
        return view('front.checkout.index',compact('cart'));
    }

    public function submit(OrderSubmitRequest $request)
    {
        dd($request->except('_token'));



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
