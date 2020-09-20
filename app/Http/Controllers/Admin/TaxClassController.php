<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TaxClass;
use Illuminate\Http\Request;

class TaxClassController extends Controller
{
    public function index()
    {
        $tax = TaxClass::get();
        return view('admin.tax.index',compact('tax'));
    }

    public function create()
    {
        return view('admin.tax.create');
    }

    public function store(Request $request)
    {

    }

    public function edit(TaxClass $taxClass)
    {
        return view('admin.tax.edit',compact('taxClass'));
    }

    public function update(Request $request,TaxClass $taxClass)
    {

    }
}
