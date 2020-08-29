<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index')->with([
            'categories' => Category::grid()
        ]);
    }

    public function create()
    {
        $categories = Category::get();
        return view('admin.category.create')->with([
            'categories' => $categories
        ]);
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->except('_token'));
        return redirect()->route('admin.category')->with([
            'success' => 'Category created successfully'
        ]);
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit')->with([
            'category'   => $category,
            'categories' => Category::get()
        ]);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->except('_token'));
        return redirect()->route('admin.category')->with('success', 'Category updated successfully');
    }
}
