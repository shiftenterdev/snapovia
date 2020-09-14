<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function data(Request $request)
    {

    }

    public function create()
    {
        $categories = Category::get();
        $attributes = Attribute::product();
        return view('admin.product.create')->with([
            'categories' => $categories,
            'attributes' => $attributes,
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

    public function edit(Product $product)
    {
        $categories = Category::get();
        $attributes = Attribute::product();
        return view('admin.product.edit', compact('product', 'categories','attributes'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request);
        return redirect()->route('admin.product.index')
            ->with('message', 'Product updated successfully');
    }
}
