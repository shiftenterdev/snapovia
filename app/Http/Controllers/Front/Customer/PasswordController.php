<?php

namespace App\Http\Controllers\Front\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function createPassword($token)
    {
        $customer = Customer::where('reset_token', $token)->first();
        if($customer) {
            return view('front.customer.auth.create-password')->with([
                'token' => $customer->reset_token
            ]);
        }else{
            session()->flash('message','Password reset link expired');
            return redirect()->route('customer.login');
        }
    }

    public function createPasswordPost(Request $request)
    {
        $request->validate([
            'password' => 'min:6|required|confirmed'
        ]);
        Customer::where('token', $request->token)->update(['password' => bcrypt($request->password)]);

    }
}
