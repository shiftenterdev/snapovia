<?php

namespace App\Http\Controllers\Front\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('front.customer.auth.login');
    }

    public function post(CustomerRegisterRequest $request)
    {

    }

    public function createDirect()
    {
        return view('front.customer.auth.create');
    }

    public function createDirectPost(Request $request)
    {
        
    }
}
