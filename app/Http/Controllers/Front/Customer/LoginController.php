<?php

namespace App\Http\Controllers\Front\Customer;

use App\Facades\Cart;
use App\Facades\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerLoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        if(Customer::check()){
            return redirect()->route('customer.info');
        }
        return view('front.customer.auth.login');
    }

    public function login(CustomerLoginRequest $request)
    {
        if(Customer::check()){
            return redirect()->route('customer.info');
        }
        $request->validated();
        if(Customer::attempt($request)){
            if($request->source){
                return redirect($request->source);
            }
            return redirect()->route('customer.info');
        }
        return redirect()->back()->withError('Invalid Login attempt');
    }

    public function logout()
    {
        Customer::logout();
        Cart::remove();
        return redirect()->route('customer.login');
    }
}
