<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $products = \App\Models\Product::whereStatus(1)
            ->where('name','LIKE','%'.$request->search.'%')
            ->select(['name', 'id', 'price', 'sku'])
            ->paginate(18);
        $categories = [];
        return view('front.search.index', compact('products', 'categories'));
    }

    public function view(Request $request)
    {

    }
}
