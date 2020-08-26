<?php

namespace App\Http\Controllers\Admin\Marketing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbandonCartController extends Controller
{
    public function index()
    {
    	return view('admin.marketing.abandon-cart.index');
    }
}
