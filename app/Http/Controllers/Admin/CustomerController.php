<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

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

    public function edit(Customer $customer)
    {
        return view('admin.customer.edit',$customer);
    }

    public function update(Request $request,Customer $customer)
    {

    }
}
