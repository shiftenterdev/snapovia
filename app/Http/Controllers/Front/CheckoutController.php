<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = [];
        if(!count($cartItems)){
            return redirect()->route('cart');
        }
        return view('front.checkout.index',compact('cartItems'));
    }

    public function cart()
    {
        $cartItems = [];
        return view('front.checkout.cart',compact('cartItems'));
    }

    public function success()
    {
        return view('front.checkout.success');
    }
}
