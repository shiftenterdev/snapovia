<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.permission.index')->with([
            'permissions'=>Permission::get()
        ]);
    }

    public function create()
    {
        return view('admin.permission.create');
    }

    public function store(Request $request)
    {
        Permission::create(['name'=>$request->name]);
        return redirect()->route('admin.permission.index')
            ->withSuccess('Permission created successfully');
    }

    public function edit(Permission $permission)
    {
        return view('admin.permission.edit',compact('permission'));
    }

    public function update(Request $request,Permission $permission)
    {
        $permission->update(['name'=>$request->name]);
        return redirect()->route('admin.permission.index')
            ->withSuccess('Permission created successfully');
    }
}
