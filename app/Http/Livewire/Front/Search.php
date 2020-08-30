<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        $response = \App\Models\Product::search($this->search);

        return view('livewire.front.search',compact('response'));
    }
}
