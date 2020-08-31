<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        return view('front.welcome');
    }
}
