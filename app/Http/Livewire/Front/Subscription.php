<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Subscription extends Component
{
    public $email;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'email' => 'email|required',
        ]);
    }

    public function render()
    {
        return view('livewire.front.subscription');
    }

    public function submit()
    {
        try {
            $this->validate([
                'email' => 'required|email',
            ]);

            \App\Models\Subscription::create(['email' => $this->email]);
            session()->flush('success', 'Subscription completed successfully');
        }catch (\Exception $e){
            session()->flush('error', 'you are already subscribed');
        }
    }
}
