<?php

namespace App\Http\Controllers\Front\Customer;

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
    }
}
