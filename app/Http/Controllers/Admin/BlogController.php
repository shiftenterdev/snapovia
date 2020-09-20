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
            'blogs'=>Blog::get()
        ]);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        Blog::create($request->except('_token'));
        return redirect()->route('admin.blog.index')->with([
            'success' => "Blog Created successfully"
        ]);
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit',compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->except('_token'));
        return redirect()->route('admin.blog.index')->with([
            'success' => "Blog Updated successfully"
        ]);
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
        session()->flush('success','Blog deleted successfully');
        return redirect()->back();
    }
}
