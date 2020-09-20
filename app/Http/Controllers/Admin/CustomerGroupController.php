<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerGroup;
use Illuminate\Http\Request;

class CustomerGroupController extends Controller
{
    public function index()
    {
        $customerGroups = CustomerGroup::get();
        return view('admin.customer.group.index',compact('customerGroups'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit(CustomerGroup $customerGroup)
    {
        return view('admin.customer.group.edit',compact($customerGroup));
    }

    public function update(CustomerGroup $customerGroup,Request $request)
    {

    }

    public function delete(CustomerGroup $customerGroup)
    {
        $customerGroup->delete();
        return redirect()->back();
    }
}
