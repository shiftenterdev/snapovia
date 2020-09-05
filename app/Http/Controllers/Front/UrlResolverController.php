<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CmsPage;
use App\Models\Product;
use App\Models\UrlResolver;
use Illuminate\Http\Request;

class UrlResolverController extends Controller
{
    public function __invoke(Request $request)
    {
        $entity = UrlResolver::redirect($request->path());
        if ($entity == 'product') {
            return $this->product($request, $request->path());
        }
        if ($entity == 'category') {
            return $this->category($request, $request->path());
        }
        if ($entity == 'page') {
            return $this->page($request, $request->path());
        }
        return view('errors.404');
    }

    public function product(Request $request, $url_key)
    {
        $product = Product::whereUrlKey($url_key)->firstOrFail();
        $popular_products = cache()->remember('popular_products', 60 * 60, function () {
            return Product::home(4);
        });
        return view('front.catalog.product', compact('product', 'popular_products'));
    }

    public function category(Request $request, $url_key)
    {
        $sort_by = $request->sort_by ?? 'name_asc';
        $category = Category::where('url_key', $url_key)
            ->select(['id', 'name', 'url_key'])
            ->firstOrFail();

        $products = \App\Models\Product::with(['categories' => function ($query) {
            $query->select(['name', 'url_key']);
        }])
            ->front($sort_by, $category->id)
            ->paginate(18);

        return view('front.catalog.category', compact('category', 'products'));
    }

    public function page(Request $request, $url_key)
    {
        $page = CmsPage::where('url_key', $url_key)->firstOrFail();
        return view('front.cms-page.view', compact('page'));
    }
}
