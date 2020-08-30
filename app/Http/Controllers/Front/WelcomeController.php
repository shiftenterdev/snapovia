<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $women = Product::home();
        $men = Product::home();;
        $gadget = Product::home();;
        return view('front.welcome',compact('women','men','gadget'));
    }
}
