<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout.index');
    }

    public function cart()
    {
        return view('checkout.cart');
    }

    public function success()
    {
        return view('checkout.success');
    }
}
