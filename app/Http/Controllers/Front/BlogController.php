<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('front.blog.index');
    }

    public function view(Blog $blog)
    {
        return view('front.blog.view',compact('blog'));
    }
}
