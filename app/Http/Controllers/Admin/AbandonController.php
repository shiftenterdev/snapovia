<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbandonController extends Controller
{
    public function index()
    {
        return view('admin.marketing.abandon-cart.index');
    }
}
