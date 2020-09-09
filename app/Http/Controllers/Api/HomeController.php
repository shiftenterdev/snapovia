<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function product()
    {
        $data = Product::select(['name', 'product_type', 'special_price', 'price', 'sku', 'id', 'url_key', 'visibility'])
            ->whereStatus(1)
            ->whereIn('visibility', Product::CATALOG)
            ->with('categories')
            ->orderBy('id', 'desc')
            ->limit(8)
            ->get();
        return response()->json($data, 200);
    }
}
