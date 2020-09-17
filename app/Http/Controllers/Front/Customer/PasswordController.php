<?php

namespace App\Http\Controllers\Front\Customer;

use App\Http\Controllers\Controller;
use App\Mail\CustomerForgotPasswordMail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordController extends Controller
{

    public function forgotPassword()
    {
        return view('front.customer.auth.forgot-password');
    }

    public function forgotPasswordPost(Request $request)
    {
        $request->validate([
            'email'=>'email|required'
        ]);

        $customer = Customer::where('email',$request->email)->first();
        if($customer) {
            if ($customer->reset_token == null) {
                $reset_token = Str::random('60');
                Mail::to($request->email)->queue(new CustomerForgotPasswordMail($reset_token));
                session()->flash('success', 'Password reset instruction sent to your mail');
                $customer->update(['reset_token' => $reset_token]);
            } else {
                session()->flash('error', 'Your previous request still pending');
            }
        }
        return redirect()->back();
    }

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
