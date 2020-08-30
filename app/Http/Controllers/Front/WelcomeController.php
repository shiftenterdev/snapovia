<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $women = [];
        $men = [];
        $gadget = [];
        return view('front.welcome',compact('women','men','gadget'));
    }
}
