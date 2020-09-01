<?php

namespace App\Http\Livewire\Front\Category;

use App\Facades\Cart;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $sort_by = 'name_asc',
        $categoryTitle = 'All category';

    protected $updatesQueryString = ['sort_by'];

    protected $listeners = ['updateProductList'];

    public function render()
    {
        return view('livewire.front.category.product-list')->with([
            'products'=>\App\Models\Product::front()
                ->sort($this->sort_by)
                ->paginate(18)
        ]);
    }

    public function addToCart($sku)
    {
        Cart::addToCart($sku);
        $this->emit('updateMiniCart');
        session()->flash('message', 'Product added to cart 😀');
    }

    public function updateProductList($cat_id)
    {
        $category = Category::find($cat_id);
        $this->categoryTitle = $category->name;
        $this->products = $category->products()->paginate(18);
    }
}
