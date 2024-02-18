<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $products = Product::whereStatus(1)
            ->where('name', 'LIKE', '%' . $request->search . '%')
            ->select(['name', 'id', 'price', 'sku'])
            ->paginate(18);
        $categories = [];

        return view('front.search.index', compact('products', 'categories'));
    }
}
