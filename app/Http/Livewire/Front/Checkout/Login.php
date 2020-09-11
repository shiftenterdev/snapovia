<?php

namespace App\Http\Livewire\Front\Checkout;

use App\Facades\Cart;
use App\Facades\Customer;
use Livewire\Component;

class Login extends Component
{
    public $email = '',$password = '';

    public function updated($field)
    {
        $this->validateOnly($field,[
           'email'=>'email|required',
           'password'=>'min:6|required'
        ]);
    }

    public function render()
    {
        return view('livewire.front.checkout.login');
    }

    public function login()
    {
        try{
            $this->validate([
                'email'=>'email|required',
                'password'=>'min:6|required'
            ]);

            if(Customer::attempt(['email'=>$this->email,'password'=>$this->password])){
                $this->updateStatus();
            }
        }catch (\Exception $e) {
            session()->flash('error', 'Customer Login failed');
        }
    }

    private function updateStatus()
    {
        $this->dispatchBrowserEvent('closeLoginModal');
        $this->dispatchBrowserEvent('cart-updated', ['count' => Cart::count()]);
        $this->emitUp('refreshCheckout');
    }
}
