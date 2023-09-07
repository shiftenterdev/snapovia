<?php

namespace App\Http\Controllers\Admin\ExportImport;

use App\Http\Controllers\Controller;

class ExportController extends Controller
{
    public function index()
    {
        return view('admin.export.index');
    }
}
