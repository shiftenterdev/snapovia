<?php


namespace App\Http\Controllers\Front\Customer;


use App\Facades\Customer;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.customer.dashboard')->with([
            'customer' => Customer::user()
        ]);
    }

    public function info()
    {
        return view('front.customer.info');
    }
}