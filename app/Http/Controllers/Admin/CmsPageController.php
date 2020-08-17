<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CmsPageRequest;
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

    public function store(CmsPageRequest $request)
    {
        CmsPage::create($request->except('_token'));
        return redirect()->route('admin.cms-page')->with([
            'success' => "Page Created successfully"
        ]);
    }

    public function edit(CmsPage $cmsPage)
    {
        return view('admin.cms_page.edit')->with([
            'page' => $cmsPage
        ]);
    }

    public function update(CmsPageRequest $request, CmsPage $cmsPage)
    {
        $cmsPage->update($request->except('_token'));
        return redirect()->route('admin.cms-page')->with([
            'success' => "Page Updated successfully"
        ]);
    }
}
