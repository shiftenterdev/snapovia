<?php

namespace App\Http\Livewire\Front\Category;

use App\Models\Category;
use Livewire\Component;

class Filter extends Component
{
    public $categories;

    public $cat_id;

    protected $updatesQueryString = ['cat_id'];

    public function render()
    {
        $this->categories = Category::where('parent_id',null)
            ->whereStatus(1)
            ->select(['id','name','url_key'])
            ->get();

        return view('livewire.front.category.filter')->with([
            'categories'=>$this->categories
        ]);
    }

    public function filterByCategory($cat_id)
    {
        $this->emit('updateProductList',$cat_id);
    }
}
