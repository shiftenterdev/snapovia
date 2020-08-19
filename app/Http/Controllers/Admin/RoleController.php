<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.role.index')->with([
            'roles'=>Role::get()
        ]);
    }

    public function create()
    {
        $permissions = Permission::get();
        return view('admin.role.create',compact('permissions'));
    }

    public function store(Request $request)
    {

    }

    public function edit(Role $role)
    {
        $permissions = Permission::get();
        return view('admin.role.edit',compact('role','permissions'));
    }

    public function update(Request $request,Role $role)
    {

    }
}
