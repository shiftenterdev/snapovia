<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\UrlResolver;
use Illuminate\Http\Request;

class UrlResolverController extends Controller
{
    public function __invoke(Request $request)
    {
        $entity = UrlResolver::redirect($request->path());
        if($entity == 'product'){
            return $this->product($request->path());
        }
        abort(404);
    }

    public function product($url_key)
    {
        $product = Product::whereUrlKey($url_key)->firstOrFail();
        $popular_products = Product::home(4);
        return view('front.catalog.product',compact('product','popular_products'));
    }
}
