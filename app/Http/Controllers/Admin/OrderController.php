<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::grid();
        return view('admin.sales.order.index',compact('orders'));
    }

    public function show(Order $order)
    {
        return view('admin.sales.order.view',compact('order'));
    }

    public function edit(Order $order)
    {
        return view('admin.sales.order.view',compact('order'));
    }

    public function update(Request $request,Order $order)
    {
        return redirect()->back()->withErrors('admin.order.index');
    }
}
