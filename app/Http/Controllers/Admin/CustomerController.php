<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerLoginRequest;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\User;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customer.index')->with([
            'customers' => Customer::grid()
        ]);
    }



    public function create()
    {
        return view('admin.customer.create');
    }

    public function store(CustomerRequest $request)
    {

    }

    public function edit(User $user)
    {

    }
}
