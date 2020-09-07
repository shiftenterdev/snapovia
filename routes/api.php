<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('Api')->group(function () {

    Route::apiResource('product', 'ProductController');
    Route::apiResource('category', 'CategoryController');

    Route::post('customer/login','CustomerController@login');
    Route::post('customer/create','CustomerController@registration');

    Route::middleware('auth:api')->group(function(){
        Route::post('cart/self', 'CartController@create');
        Route::post('cart/self/items', 'CartController@addItem');
        Route::delete('cart/self/items', 'CartController@removeItem');
        Route::post('cart/self/shipping-method', 'CheckoutController@shippingMethod');
        Route::post('cart/self/shipping-information', 'CheckoutController@shippingInformation');
        Route::post('cart/self/payment-information', 'CheckoutController@paymentInformation');
        Route::post('order/{order_id}/invoice', 'InvoiceController@create');
        Route::post('order/{order_id}/ship', 'ShippingController@create');
        Route::post('order/{order_id}/refund', 'RefundController@order');
        Route::post('invoice/{order_id}/refund', 'RefundController@invoice');
    });

});
