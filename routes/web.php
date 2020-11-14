<?php

use App\Events\OrderSubmitted;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CatalogController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\CmsController;
use App\Http\Controllers\Front\LanguageController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\UrlResolverController as UrlResolverControllerAlias;
use App\Http\Controllers\Front\WelcomeController;
use Illuminate\Support\Facades\Route;


// Blade view
if (config('site.frontend') == 'blade') {

    Route::get('/locale/{p}', LanguageController::class)
        ->name('lang');

    Route::get('/', WelcomeController::class)
        ->name('welcome');

    Route::get('category', [CatalogController::class, 'category'])
        ->name('category');

    Route::resource('search', SearchController::class)
        ->only(['index', 'show']);

    Route::post('product/variants', [CatalogController::class, 'getVariant'])
        ->name('product.variant');

    Route::get('checkout/cart', [CheckoutController::class, 'cart'])
        ->name('cart');

    Route::post('add-to-cart', [CartController::class, 'addToCart'])
        ->name('add.to.cart');

    Route::get('checkout/mini-cart', [CartController::class, 'miniCartInfo'])
        ->name('mini.cart.info');

    Route::get('checkout', [CheckoutController::class, 'index'])
        ->name('checkout');

    Route::get('checkout/payment', [CheckoutController::class, 'submitWithPayment'])
        ->name('checkout.payment');

    Route::post('checkout', [CheckoutController::class, 'submit'])
        ->name('checkout.submit');

    Route::get('checkout/success', [CheckoutController::class, 'success'])
        ->name('checkout.success');

    Route::post('cart/remove-item', [CartController::class, 'removeItem'])
        ->name('cart.remove.item');

    Route::post('payment-intent', [CheckoutController::class, 'paymentIntent'])
        ->name('cart.update.item');

    Route::post('cart/update-item', [CartController::class, 'updateItem'])
        ->name('cart.update.item');

    Route::get('contact', [CmsController::class, 'contact'])
        ->name('contact');

    Route::get('faq', [CmsController::class, 'faq'])
        ->name('faq');

    Route::get('shipping-and-returns', [CmsController::class, 'shippingReturns'])
        ->name('shipping-and-returns');

    Route::get('about-us', [CmsController::class, 'aboutUs'])
        ->name('about.us');

    Route::get('career', [CmsController::class, 'career'])
        ->name('career');

    Route::get('terms', [CmsController::class, 'terms'])
        ->name('terms');

    Route::get('privacy-policy', [CmsController::class, 'privacy'])
        ->name('privacy');

    Route::get('discount', [CatalogController::class, 'discount'])
        ->name('discount');

    Route::resource('blog', BlogController::class)
        ->only(['index', 'show']);

    Route::prefix('customer')->group(function () {

        include __DIR__ . '/customer.php';

    });

    Route::prefix('vendor')->group(function () {

        include __DIR__ . '/vendor.php';

    });

}

Route::prefix(config('site.admin_url'))->name('admin.')->group(function () {

    include __DIR__.'/admin.php';

});

//Test routes
Route::get('test-mail', function () {
    //event(new \App\Events\CustomerRegistered(\App\Models\Customer::find(1)));
    event(new OrderSubmitted(\App\Models\Order::find(1)));
    return 'event processed successfully';
});

if (config('site.frontend') == 'blade') {
// Url resolver
    Route::get('/{url}/{suburl?}/{producturl?}', UrlResolverControllerAlias::class)
        ->name('resolve');
}

// Vue Frontend
if (config('site.frontend') == 'vue') {
    Route::get('{path}', function () {
        return view('front.layouts.vue');
    })->where('path', '(.*)');
}
