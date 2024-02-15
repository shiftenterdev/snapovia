<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class RefundController extends Controller
{
    public function index()
    {
        $orders = collect([]);
        return view('admin.sales.order.index')
            ->with(compact('orders'));
    }
}
