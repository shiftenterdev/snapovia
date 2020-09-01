<?php

namespace App\Http\Livewire\Front\Category;

use App\Models\Category;
use Livewire\Component;

class Filter extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::where('parent_id',null)
            ->whereStatus(1)
            ->select(['id','name','url_key'])
            ->withCount('products')
            ->get();
    }

    public function render()
    {
        return view('livewire.front.category.filter');
    }
}
