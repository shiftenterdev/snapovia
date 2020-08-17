<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('admin.category.index')->with([
            'categories' => $categories
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

    public function edit($id)
    {
        return view('admin.category.edit')->with([
            'c' => Category::find($id),
            'categories' => Category::get()
        ]);
    }

    public function update(CategoryRequest $request, $id)
    {
        Category::where('id', $id)->update($request->except('_token'));
        return redirect()->route('admin.category')->with('success', 'Category updated successfully');
    }
}
