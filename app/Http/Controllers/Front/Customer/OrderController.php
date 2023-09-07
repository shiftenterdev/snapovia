<?php

namespace App\Http\Controllers\Front\Customer;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return view('front.customer.order.index');
    }
}
