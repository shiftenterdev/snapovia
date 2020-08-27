<?php

namespace App\Http\Controllers\Api\Rest;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function create()
    {
        $quote_id = Quote::create()->quote_id;

        return response()->json(['cart_id' => $quote_id], 200);
    }

    public function addItem(Request $request)
    {

    }

    public function removeItem(Request $request)
    {

    }
}
