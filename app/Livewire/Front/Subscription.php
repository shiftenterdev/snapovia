<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */

namespace App\Livewire\Front;

use App\Mail\SubscriptionMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Subscription extends Component
{
    public $email;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'email' => 'email|unique:subscriptions',
        ], [
            'email.unique' => 'This email already subscribed',
            'email.required' => 'Email Address required',
            'email.email' => 'Please check your email address.',
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
        Mail::to($this->email)->queue(new SubscriptionMail);
        $this->reset();
        session()->flash('success', 'Subscription completed successfully');

    }
}
