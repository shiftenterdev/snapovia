<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function quickSearch(Request $request){
        $response = \App\Models\Product::search($request->search);
        return response()->json($response, 200);
    }

    public function search(Request $request){
        $response = \App\Models\Product::search($request->search);
        return response()->json($response, 200);
    }
}
