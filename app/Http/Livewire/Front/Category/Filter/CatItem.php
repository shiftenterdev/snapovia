<?php

namespace App\Http\Livewire\Front\Category\Filter;

use Livewire\Component;

class CatItem extends Component
{
    public $category;

    public $category_id;

    protected $updatesQueryString = ['category_id'];

    public function mount($category)
    {
        $this->category = $category;
        $this->category_id = request('category_id',$this->category_id);
    }

    public function render()
    {
        return view('livewire.front.category.filter.cat-item');
    }

    public function updatedCategoryId($value)
    {
        $this->emit('updateProductList',$value);
        $this->emit('updateCategoryList',$value);
    }
}
