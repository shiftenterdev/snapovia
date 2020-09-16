<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        return view('front.welcome');
    }
}
