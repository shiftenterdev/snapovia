<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CmsBlockRequest;
use App\Models\CmsBlock;

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

    public function store(CmsBlockRequest $request)
    {
        CmsBlock::create($request->except('_token'));
        return redirect()->route('admin.cms-block')->with([
            'success' => "Block Created successfully"
        ]);
    }

    public function edit(CmsBlock $cmsBlock)
    {
        return view('admin.cms_block.edit')->with([
            'block' => $cmsBlock
        ]);
    }

    public function update(CmsBlockRequest $request, CmsBlock $cmsBlock)
    {
        $cmsBlock->update($request->except('_token'));
        return redirect()->route('admin.cms-block')->with([
            'success' => "Block Updated successfully"
        ]);
    }
}
