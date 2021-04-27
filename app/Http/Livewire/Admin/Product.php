<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Product extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = [
        'sku'          => '',
        'name'         => '',
        'status'       => '',
        'price'        => '',
        'visibility'   => '',
        'id'           => '',
        'product_type' => ''
    ];

    protected $updatesQueryString = ['search'];

//    protected $updatesQueryString = [
//        'search[name]' => ['except' => ''],
//    ];

    public function mount()
    {
        $this->search = request()->query('search', $this->search) + $this->search;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = \App\Models\Product::grid($this->search);

        return view('livewire.admin.product', compact('products'));
    }

    public function resetSearch()
    {
        $this->reset();
    }
}
