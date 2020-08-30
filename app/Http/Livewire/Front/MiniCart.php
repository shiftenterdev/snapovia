<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class MiniCart extends Component
{
    public function render()
    {
        $response = [];
        return view('livewire.front.mini-cart',compact('response'));
    }
}
