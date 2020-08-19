<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        return view('admin.vendor.index');
    }

    public function create()
    {
        return view('admin.vendor.create');
    }
}
