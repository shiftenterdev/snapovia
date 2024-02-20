<?php

namespace App\Livewire\Front;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public string $search = '';

    public function render()
    {
        $response = Product::search($this->search);

        return view('livewire.front.search', compact('response'));
    }
}
