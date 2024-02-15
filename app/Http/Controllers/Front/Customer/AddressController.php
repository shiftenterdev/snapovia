<?php

namespace App\Http\Controllers\Front\Customer;

use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function index()
    {
        return view('front.customer.address.index');
    }
}
