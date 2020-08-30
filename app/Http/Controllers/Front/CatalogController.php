<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function category()
    {
        $products = \App\Models\Product::whereStatus(1)
            ->select(['name', 'id', 'price', 'sku'])
            ->paginate(18);
        $categories = [];
        return view('front.catalog.category', compact('products', 'categories'));
    }
}
