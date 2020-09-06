<?php

use Illuminate\Support\Facades\Route;

Route::get('/customer/login', 'LoginController@index')->name('customer.login');
Route::post('/customer/login', 'LoginController@login')->name('customer.login.post');
Route::get('/customer/create', 'RegisterController@index')->name('customer.create');
Route::post('/customer/create', 'RegisterController@createPost')->name('customer.create.post');
Route::get('/customer/logout', 'LoginController@logout')->name('customer.logout');

Route::get('/customer/forgotpassword', 'PasswordController@forgotPassword')->name('forgot.password');
Route::post('/customer/forgotpasswordpost', 'PasswordController@forgotPasswordPost')->name('forgot.password.post');
Route::get('/customer/{customer_id}/password/resetLinkToken/{token}', 'PasswordController@createPassword')->name('create.password');
Route::post('/customer/createpasswordpost', 'PasswordController@createPasswordPost')->name('create.password.post');

Route::middleware('customer')->group(function () {
    Route::get('/customer/wishlist', 'WishlistController@index')->name('customer.wishlist');
    Route::get('/customer/wishlist/{product_sku}', 'WishlistController@store')->name('add.to.wishlist');
    Route::get('/customer/wishlist/{product_sku}/remove', 'WishlistController@remove')->name('remove.from.wishlist');
    Route::get('/customer/info', 'HomeController@index')->name('customer.info');
    Route::get('/customer/order', 'OrderController@index')->name('customer.order');
    Route::resource('/customer/address', 'AddressController',['as' => 'customer']);
    Route::resource('/customer/payment-methods', 'PaymentMethodsController',['as' => 'customer']);
    Route::get('/customer/review', 'ReviewController@index')->name('customer.review');
});