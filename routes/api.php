<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('home/product-section',[HomeController::class,'product']);
Route::post('search',[SearchController::class,'quickSearch']);
Route::get('search',[SearchController::class,'search']);

Route::apiResource('product', ProductController::class);
Route::apiResource('category', CategoryController::class);

Route::middleware('rest.auth')->prefix('v1')->group(function () {
//    Route::post('customers', 'Api\Rest\CustomerController@create');
//    Route::post('cart/self', 'Api\Rest\CartController@create');
//    Route::post('cart/self/items', 'Api\Rest\CartController@addItem');
//    Route::delete('cart/self/items', 'Api\Rest\CartController@removeItem');
//    Route::post('cart/self/shipping-method', 'Api\Rest\CheckoutController@shippingMethod');
//    Route::post('cart/self/shipping-information', 'Api\Rest\CheckoutController@shippingInformation');
//    Route::post('cart/self/payment-information', 'Api\Rest\CheckoutController@paymentInformation');
//    Route::post('order/{order_id}/invoice', 'Api\Rest\InvoiceController@create');
//    Route::post('order/{order_id}/ship', 'Api\Rest\ShippingController@create');
//    Route::post('order/{order_id}/refund', 'Api\Rest\RefundController@order');
//    Route::post('invoice/{order_id}/refund', 'Api\Rest\RefundController@invoice');
});
