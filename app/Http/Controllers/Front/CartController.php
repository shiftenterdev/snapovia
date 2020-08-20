<?php

namespace App\Http\Controllers\Front;

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

    public function store(CartRequest $request)
    {

    }

    public function update(Quote $quote)
    {

    }
}
