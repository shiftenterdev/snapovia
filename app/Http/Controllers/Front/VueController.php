<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VueController extends Controller
{
    public function __invoke()
    {
        return view('front.layouts.vue');
    }
}
