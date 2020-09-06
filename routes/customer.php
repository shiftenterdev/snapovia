<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Front\Customer')->group(function() {
    Route::get('login', 'LoginController@index')->name('customer.login');
    Route::post('login', 'LoginController@login')->name('customer.login.post');
    Route::get('create', 'RegisterController@index')->name('customer.create');
    Route::post('create', 'RegisterController@createPost')->name('customer.create.post');
    Route::get('logout', 'LoginController@logout')->name('customer.logout');

    Route::get('forgotpassword', 'PasswordController@forgotPassword')->name('forgot.password');
    Route::post('forgotpasswordpost', 'PasswordController@forgotPasswordPost')->name('forgot.password.post');
    Route::get('{customer_id}/password/resetLinkToken/{token}', 'PasswordController@createPassword')->name('create.password');
    Route::post('createpasswordpost', 'PasswordController@createPasswordPost')->name('create.password.post');

    Route::middleware('customer')->group(function () {
        Route::get('wishlist', 'WishlistController@index')->name('customer.wishlist');
        Route::get('wishlist/{product_sku}', 'WishlistController@store')->name('add.to.wishlist');
        Route::get('wishlist/{product_sku}/remove', 'WishlistController@remove')->name('remove.from.wishlist');
        Route::get('info', 'HomeController@index')->name('customer.info');
        Route::get('order', 'OrderController@index')->name('customer.order');
        Route::resource('address', 'AddressController', ['as' => 'customer']);
        Route::resource('payment-methods', 'PaymentMethodsController', ['as' => 'customer']);
        Route::get('review', 'ReviewController@index')->name('customer.review');
    });
});