<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function category(Request $request)
    {
        $query = Category::query();

        $sort_by = $request->sort ?? 'name_asc';

        if ($request->category) {
            $query = $query->where('url_key', $request->category);
        } else {
            $query = $query->where('id', 1);
        }
        $category = $query->select(['id', 'name', 'url_key'])
            ->with(['childCategories'=>function($query){
                $query->withCount('products');
            }])
            ->firstOrFail();

        $products = \App\Models\Product::with(['categories' => function ($query) {
            $query->select(['name', 'url_key']);
        }])->front($sort_by, $category->id)
            ->paginate(18);

        return view('front.catalog.category', compact('category', 'products'));
    }
}
