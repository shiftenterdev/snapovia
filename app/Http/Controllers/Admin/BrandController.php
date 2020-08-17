<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        try {
            Brand::create($request->except('_token'));
            return redirect()->route('admin.brand')->with('success', 'Brand created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        return view('admin.brand.edit')->with([
            'brand' => Brand::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        Brand::where('id', $id)->update($request->except('_token'));
        return redirect()->route('admin.brand')->with('success', 'Brand updated successfully');
    }

    public function destroy($id)
    {
        Brand::destroy($id);
        return redirect()->route('admin.brand')->with('success', 'Brand updated successfully');
    }
}
