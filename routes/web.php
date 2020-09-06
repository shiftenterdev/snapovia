<?php

use Illuminate\Support\Facades\Route;

Route::get('/locale/{p}',LanguageController::class)->name('lang');


    Route::get('/', WelcomeController::class)->name('welcome');

    Route::get('category', 'CatalogController@category')->name('category');

    Route::resource('search', SearchController::class)->only(['index','show']);

    Route::post('product/variants', 'CatalogController@getVariant')->name('product.variant');

    Route::get('checkout/cart', 'CheckoutController@cart')->name('cart');
    Route::post('add-to-cart', 'CartController@addToCart')->name('add.to.cart');
    Route::get('checkout/mini-cart', 'CartController@miniCartInfo')->name('mini.cart.info');
    Route::get('checkout', 'CheckoutController@index')->name('checkout');
    Route::post('checkout', 'CheckoutController@submit')->name('checkout.submit');
    Route::get('checkout/success', 'CheckoutController@success')->name('checkout.success');

    Route::post('cart/remove-item', 'CartController@removeItem')->name('cart.remove.item');
    Route::post('cart/update-item', 'CartController@updateItem')->name('cart.update.item');

    Route::get('contact', 'CmsController@contact')->name('contact');
    Route::get('faq', 'CmsController@faq')->name('faq');
    Route::get('shipping-and-returns', 'CmsController@shippingReturns')->name('shipping-and-returns');
    Route::get('about-us', 'CmsController@aboutUs')->name('about.us');
    Route::get('career', 'CmsController@career')->name('career');
    Route::get('terms', 'CmsController@terms')->name('terms');
    Route::get('privacy-policy', 'CmsController@privacy')->name('privacy');
    Route::get('discount', 'CatalogController@discount')->name('discount');

    Route::resource('blog', BlogController::class)->only(['index','show']);

    Route::get('/{url}/{suburl?}/{producturl?}', 'UrlResolverController')->name('resolve');
