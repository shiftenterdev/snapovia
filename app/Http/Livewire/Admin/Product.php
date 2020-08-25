<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Product extends Component
{

    public $search = ['sku'=>'','name'=>'','status'=>'','visibility'=>''];

    protected $updatesQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        $products = \App\Models\Product::search($this->search)
            ->select(['name', 'visibility', 'product_type', 'id', 'special_price', 'price', 'sku', 'status', 'qty'])
            ->paginate(20);

        return view('livewire.admin.product',compact('products'));
    }
}
