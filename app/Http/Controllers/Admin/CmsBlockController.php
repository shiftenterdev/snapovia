<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmsBlock;
use Illuminate\Http\Request;

class CmsBlockController extends Controller
{
    public function index()
    {
        return view('admin.cms_block.index')->with([
            'blocks'=>CmsBlock::get()
        ]);
    }

    public function create()
    {
        return view('admin.cms_block.create');
    }

    public function store(Request $request)
    {
        CmsBlock::create($request->except('_token'));
        return redirect()->route('admin.cms-block')->with([
            'success' => "Block Created successfully"
        ]);
    }

    public function edit($id)
    {
        return view('admin.cms_block.edit')->with([
            'block' => CmsBlock::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        CmsBlock::where('id', $id)->update($request->except('_token'));
        return redirect()->route('admin.cms-block')->with([
            'success' => "Block Updated successfully"
        ]);
    }
}
