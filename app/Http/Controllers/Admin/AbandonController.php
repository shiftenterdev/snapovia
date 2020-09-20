<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class AbandonController extends Controller
{
    public function index()
    {
        $quotes = Quote::get();
        return view('admin.marketing.abandon-cart.index',compact('quotes'));
    }
}
