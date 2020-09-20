<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configurations;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function index()
    {
        return view('admin.configuration.index');
    }

    public function store(Request $request)
    {
        foreach ($request->except('_token') as $title => $input) {
            Configurations::where('title', $title)->update(['value' => $input]);
        }
    }
}
