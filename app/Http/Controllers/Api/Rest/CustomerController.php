<?php

namespace App\Http\Controllers\Api\Rest;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create(Request $request): Customer
    {
        $customer = Customer::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => bcrypt($request->password),

        ]);

        $customer->address()->create([
            'first_name'       => $request->address->first_name,
            'last_name'        => $request->address->last_name,
            'address_line_1'   => $request->address->address_line_1,
            'address_line_2'   => optional($request->address)->address_line_2,
            'city'             => $request->address->city,
            'postcode'         => $request->address->postcode,
            'telephone'        => $request->address->telephone,
            'default_billing'  => $request->address->default_billing,
            'default_shipping' => $request->address->default_shipping,
        ]);

        return $customer;
    }
}
