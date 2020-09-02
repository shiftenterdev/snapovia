<?php

namespace App\Http\Livewire\Front\Category;

use App\Models\Category;
use Livewire\Component;

class Filter extends Component
{
    public $category_id = null;

    //protected $listeners = ['updateCategoryList'];

    protected $updatesQueryString = ['category_id'];

    public function mount()
    {
        $this->category_id = request('category_id',$this->category_id);
    }

    public function render()
    {
        $categories = Category::where('parent_id', $this->category_id)
            ->whereStatus(1)
            ->select(['id', 'name', 'url_key'])
            ->get();
//        dd($categories);
        return view('livewire.front.category.filter',compact('categories'));
    }

    public function updatedCategoryId($value)
    {
        $this->emit('updateProductList', $value);
    }
}
