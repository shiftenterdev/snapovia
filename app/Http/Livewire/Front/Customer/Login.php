<?php

namespace App\Http\Livewire\Front\Customer;

use App\Facades\Customer;
use Livewire\Component;

class Login extends Component
{
    public $email = '', $password = '';


    public function render()
    {
        return view('livewire.front.customer.login');
    }

    public function login()
    {
        $validatedField = $this->validate([
            'email'    => 'email|required',
            'password' => 'min:6|required'
        ]);
        if (Customer::attempt($validatedField)) {
//            if($request->source){
//                return redirect($request->source);
//            }
            return redirect()->route('customer.info');
        }
        session()->flash('error', 'Invalid Login attempt');
    }
}
