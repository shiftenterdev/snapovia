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
        $products = Product::paginate(20);
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
