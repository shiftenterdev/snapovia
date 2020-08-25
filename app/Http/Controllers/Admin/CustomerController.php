<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(20);
        return view('admin.customer.index')->with([
            'customers' => $customers
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
