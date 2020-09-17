<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = cache()->remember('blogs',60*60*14,function (){
            return Blog::paginate(10);
        });
        return view('front.blog.index',compact('blogs'));
    }

    public function view(Blog $blog)
    {
        return view('front.blog.view',compact('blog'));
    }
}
