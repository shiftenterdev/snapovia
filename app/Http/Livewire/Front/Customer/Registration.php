<?php

namespace App\Http\Livewire\Front\Customer;

use App\Events\CustomerRegistered;
use App\Facades\Customer;
use Livewire\Component;

class Registration extends Component
{
    public $first_name = '',
        $last_name = '',
        $email = '',
        $password = '',
        $password_confirmation = '';

    public function render()
    {
        return view('livewire.front.customer.registration');
    }

    public function registration()
    {
        $validated_fields = $this->validate([
            'email'      => 'email|required|unique:customers',
            'first_name' => 'alpha_num|required',
            'last_name'  => 'alpha_num|required',
            'password'   => 'min:6|required'
        ]);
        $customer = Customer::create($validated_fields);
        event(new CustomerRegistered($customer));
        Customer::attempt($validated_fields);
        session()->flush('success','Your registration completed successfully');
        return redirect()->route('customer.info');
    }
}
