<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(20);
        return view('admin.brand.index')->with([
            'brands' => $brands
        ]);
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(BrandRequest $request)
    {
        try {
            Brand::create($request->except('_token'));
            return redirect()->route('admin.brand')->with('success', 'Brand created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand.edit')->with([
            'brand' => $brand
        ]);
    }

    public function update(BrandRequest $request, Brand $brand)
    {
        $brand->update($request->except('_token'));
        return redirect()->route('admin.brand')->with('success', 'Brand updated successfully');
    }

    public function destroy($id)
    {
        Brand::destroy($id);
        return redirect()->route('admin.brand')->with('success', 'Brand updated successfully');
    }
}
