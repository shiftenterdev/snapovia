<?php

namespace App\Http\Controllers\Front;

use App\Facades\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Models\Quote;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('front.cart.index');
    }

    public function addToCart(Request $request)
    {
        Cart::addToCart($request->sku);
        return redirect()->back()->with('success','Product Added to cart');
    }
}
