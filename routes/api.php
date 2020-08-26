<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('product','Api\ProductController');
Route::apiResource('category','Api\CategoryController');

Route::middleware('rest:api')->prefix('rest/v1')->group(function () {
    Route::post('customers','Api\Rest\CustomerController@create');
    Route::post('cart/self','Api\Rest\CartController@create');
    Route::post('cart/self/items','Api\Rest\CartController@addItem');
    Route::post('cart/self/{item_id}/items','Api\Rest\CartController@removeItem');
    Route::post('cart/self/shipping-method','Api\Rest\CheckoutController@shippingMethod');
    Route::post('cart/self/shipping-information','Api\Rest\CheckoutController@shippingInformation');
    Route::post('cart/self/payment-information','Api\Rest\CheckoutController@paymentInformation');
    Route::post('order/{order_id}/invoice','Api\Rest\InvoiceController@create');
    Route::post('order/{order_id}/ship','Api\Rest\ShippingController@create');
    Route::post('order/{order_id}/refund','Api\Rest\RefundController@order');
    Route::post('invoice/{order_id}/refund','Api\Rest\RefundController@invoice');
});