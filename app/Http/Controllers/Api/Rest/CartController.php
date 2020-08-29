<?php

namespace App\Http\Controllers\Api\Rest;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admin\Product;
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
        $quote = Quote::where('quote_id', $request->quote_id)->firstOrFail();
        if ($quote) {
            $product = Product::whereSku($request->sku)->firstOrFail();
            if ($product) {
                $quote = Quote::items()->create([
                    'quote_id'     => $request->quote_id,
                    'id'           => $product->id,
                    'sku'          => $product->sku,
                    'name'         => $product->name,
                    'qty'          => $request->qty,
                    'product_type' => $product->product_type,
                    'row_total'    => $request->qty * $product->price,
                    'unit_price'   => $product->price,
                ]);
                return response()->json(['response'=>$quote],200);
            }
            return response()->json(['error' => 'Product not found'], 500);
        }
        return response()->json(['error' => 'Quote not found'], 500);
    }

    public function removeItem(Request $request)
    {
        $quote = Quote::where('quote_id', $request->quote_id)->firstOrFail();
        if ($quote) {
            $product = Product::whereSku($request->sku)->firstOrFail();
            if ($product) {
                $quote = Quote::items()->create();
                return response()->json(['response'=>$quote],200);
            }
            return response()->json(['error' => 'Product not found'], 500);
        }
        return response()->json(['error' => 'Quote not found'], 500);
    }
}
