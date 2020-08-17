<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmsPage;
use Illuminate\Http\Request;

class CmsPageController extends Controller
{
    public function index()
    {
        return view('admin.cms_page.index')->with([
            'pages' => CmsPage::get()
        ]);
    }

    public function create()
    {
        return view('admin.cms_page.create');
    }

    public function store(Request $request)
    {
        CmsPage::create($request->except('_token'));
        return redirect()->route('admin.cms-page')->with([
            'success' => "Page Created successfully"
        ]);
    }

    public function edit($id)
    {
        return view('admin.cms_page.edit')->with([
            'page' => CmsPage::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        CmsPage::where('id', $id)->update($request->except('_token'));
        return redirect()->route('admin.cms-page')->with([
            'success' => "Page Updated successfully"
        ]);
    }
}
