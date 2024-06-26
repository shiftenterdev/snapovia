<?php

namespace App\Http\Controllers\Front\Customer;

use App\Facades\Customer;
use App\Http\Controllers\Controller;
use App\Models\Product;

class WishlistController extends Controller
{
    public function index()
    {
        return view('front.customer.wishlist');
    }

    public function store($product_sku)
    {
        $product = Product::whereSku($product_sku)->firstOrFail();
        Customer::user()->wishlist()->attach($product->id);

        return redirect()->route('customer.wishlist');
    }

    public function remove($product_sku)
    {
        $product = Product::whereSku($product_sku)->firstOrFail();
        Customer::user()->wishlist()->detach($product->id);

        return redirect()->route('customer.wishlist');
    }
}
