<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ShipmentController extends Controller
{
    public function index()
    {
        return view('admin.sales.shipment.index');
    }
}
