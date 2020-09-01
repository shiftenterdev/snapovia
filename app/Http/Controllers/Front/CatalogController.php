<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function category()
    {
        $categories = [];
        return view('front.catalog.category', compact( 'categories'));
    }
}
