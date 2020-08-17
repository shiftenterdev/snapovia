<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index')->with([
            'blocks'=>Blog::get()
        ]);
    }

    public function create()
    {
        return view('admin.cms_block.create');
    }

    public function store(Request $request)
    {
        Blog::create($request->except('_token'));
        return redirect()->route('admin.blog.index')->with([
            'success' => "Blog Created successfully"
        ]);
    }

    public function edit($id)
    {
        return view('admin.blog.edit')->with([
            'block' => Blog::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        Blog::where('id', $id)->update($request->except('_token'));
        return redirect()->route('admin.blog.index')->with([
            'success' => "Blog Updated successfully"
        ]);
    }
}
