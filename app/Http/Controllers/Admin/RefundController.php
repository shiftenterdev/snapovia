<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class RefundController extends Controller
{
    public function index()
    {
        return view('admin.sales.order.index');
    }
}
