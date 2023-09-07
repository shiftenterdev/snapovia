<?php

namespace App\Http\Controllers\Front\Customer;

use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function index()
    {
        return view('front.customer.order.index');
    }
}
