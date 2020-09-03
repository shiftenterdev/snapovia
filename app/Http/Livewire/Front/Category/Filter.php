<?php

namespace App\Http\Livewire\Front\Category;

use App\Models\Category;
use Livewire\Component;

class Filter extends Component
{
    public $category_id = 1;

    protected $listeners = ['updateCategoryList'];

    protected $updatesQueryString = ['category_id'];

    public function mount()
    {
        $this->category_id = request('category_id', $this->category_id);
    }

    public function render()
    {
        $category = Category::where('id', $this->category_id)
            ->select(['id', 'name', 'url_key'])
            ->first();
        return view('livewire.front.category.filter')->with([
            'category'=>$category
        ]);
    }

    public function updateCategoryList($value)
    {
        $this->category_id = $value;
    }
}
