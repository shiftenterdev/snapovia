<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Subscription extends Component
{
    public $email;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'email' => 'email|unique:subscriptions',
        ], [
            'email.unique'   => 'This email already subscribed',
            'email.required' => 'Email Address required',
            'email.email'    => 'Please check your email address.'
        ]);
    }

    public function render()
    {
        return view('livewire.front.subscription');
    }

    public function subscribe()
    {

        $this->validate([
            'email' => 'required|email|unique:subscriptions',
        ]);

        \App\Models\Subscription::create(['email' => $this->email]);
        $this->reset();
        session()->flash('success', 'Subscription completed successfully');

    }
}
