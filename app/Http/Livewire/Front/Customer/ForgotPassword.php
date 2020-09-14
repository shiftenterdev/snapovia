<?php

namespace App\Http\Livewire\Front\Customer;

use App\Mail\CustomerForgotPasswordMail;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class ForgotPassword extends Component
{
    public $reset_email = '';

    public function render()
    {
        return view('livewire.front.customer.forgot-password');
    }

    public function submit()
    {
        $this->validate([
            'reset_email'=>'email|required'
        ]);

        $customer = Customer::where('email',$this->reset_email)->first();
        if($customer){
            if($customer->reset_token==null){
                $reset_token = Str::random('60');
                Mail::to($this->reset_email)->queue(new CustomerForgotPasswordMail($reset_token));
                session()->flash('success','Password reset instruction sent to your mail');
                $customer->update(['reset_token'=>$reset_token]);
            }else{
                session()->flash('error','Your previous request still pending');
            }
        }

    }
}
