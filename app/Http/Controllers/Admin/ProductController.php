<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query();
        $products->when(request('sku') != '', function ($q) {
            return $q->where('sku', request('sku'));
        });
        $products->when(request('name') != '', function ($q) {
            return $q->where('name', request('name'));
        });
        $products->when(request('status') != '', function ($q) {
            return $q->where('status', request('status'));
        });
        $products->when(request('visibility') != '', function ($q) {
            return $q->where('visibility', request('visibility'));
        });
        $products = $products->select(['name', 'visibility', 'product_type', 'id', 'special_price', 'price', 'sku', 'status', 'qty'])
            ->paginate(20);
        return view('admin.product.index')->with([
            'products' => $products
        ]);
    }

    public function create()
    {
        $categories = Category::get();
        return view('admin.product.create')->with([
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        try {
            Product::create($request->except('_token'));
            return redirect()->route('admin.product')->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
