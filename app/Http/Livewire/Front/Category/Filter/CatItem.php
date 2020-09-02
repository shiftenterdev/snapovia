<?php

namespace App\Http\Livewire\Front\Category\Filter;

use Livewire\Component;

class CatItem extends Component
{
    public $category;

    public $cat_id;

    protected $updatesQueryString = ['cat_id'];

    public function mount($category)
    {
        $this->category = $category;
        $this->cat_id = request('cat_id',$this->cat_id);
    }

    public function render()
    {
        return view('livewire.front.category.filter.cat-item');
    }

    public function updatedCatId($value)
    {
        $this->emit('updateProductList',$value);
        $this->emit('updateCategoryList',$value);
    }
}
