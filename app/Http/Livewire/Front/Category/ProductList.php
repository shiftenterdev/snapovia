<?php

namespace App\Http\Livewire\Front\Category;

use App\Facades\Cart;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $sort_by = 'name_asc',
        $category_id = null,
        $categoryTitle = 'All products';

    protected $updatesQueryString = ['sort_by'];

    protected $listeners = ['updateProductList'];

    public function mount()
    {
        $this->category_id = request('category_id', $this->category_id);
    }

    public function render()
    {
        $products = \App\Models\Product::front($this->sort_by, $this->category_id)
            ->paginate(18);
        return view('livewire.front.category.product-list', compact('products'));
    }

    public function addToCart($sku)
    {
        Cart::addToCart($sku);
        $this->emit('updateMiniCart');
        session()->flash('message', 'Product added to cart 😀');
    }

    public function updateProductList($category_id = null)
    {
        if ($category_id)
            $category = Category::find($category_id);
        $this->categoryTitle = $category->name ?? 'All products';
        $this->category_id = $category_id;
    }
}
