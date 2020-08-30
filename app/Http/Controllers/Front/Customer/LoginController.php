<?php

namespace App\Http\Controllers\Front\Customer;

use App\Facades\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('front.customer.auth.login');
    }

    public function login(CustomerLoginRequest $request)
    {
        $request->validated();
        if(Customer::attempt($request)){
            return redirect()->route('customer.dashboard');
        }
        return redirect()->back()->withError('Invalid Login attempt');
    }

    public function logout()
    {
        Customer::logout();
        return redirect()->route('welcome');
    }
}
