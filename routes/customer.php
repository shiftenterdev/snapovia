<?php

use App\Http\Controllers\Front\Customer\AddressController;
use App\Http\Controllers\Front\Customer\HomeController;
use App\Http\Controllers\Front\Customer\LoginController;
use App\Http\Controllers\Front\Customer\PasswordController;
use App\Http\Controllers\Front\Customer\PaymentMethodsController;
use App\Http\Controllers\Front\Customer\RegisterController;
use App\Http\Controllers\Front\Customer\ReviewController;
use App\Http\Controllers\Front\Customer\WishlistController;
use App\Http\Controllers\Front\Customer\OrderController as CustomerOrderController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'index'])
    ->name('customer.login');

Route::post('login', [LoginController::class, 'login'])
    ->name('customer.login.post');

Route::get('create', [RegisterController::class, 'index'])
    ->name('customer.create');

Route::post('create', [RegisterController::class, 'createPost'])
    ->name('customer.create.post');

Route::get('create/direct', [RegisterController::class, 'createDirect'])
    ->name('customer.create.direct');

Route::post('create/direct', [RegisterController::class, 'createDirectPost'])
    ->name('customer.create.direct.post');

Route::get('logout', [LoginController::class, 'logout'])
    ->name('customer.logout');

Route::get('forgotpassword', [PasswordController::class, 'forgotPassword'])
    ->name('forgot.password');

Route::post('forgotpasswordpost', [PasswordController::class, 'forgotPasswordPost'])
    ->name('forgot.password.post');

Route::get('password/resetLinkToken/{token}', [PasswordController::class, 'createPassword'])
    ->name('create.password');

Route::post('createpasswordpost', [PasswordController::class, 'createPasswordPost'])
    ->name('create.password.post');

Route::middleware('customer')->group(function () {

    Route::get('wishlist', [WishlistController::class, 'index'])
        ->name('customer.wishlist');

    Route::get('wishlist/{product_sku}', [WishlistController::class, 'store'])
        ->name('add.to.wishlist');

    Route::get('wishlist/{product_sku}/remove', [WishlistController::class, 'remove'])
        ->name('remove.from.wishlist');

    Route::get('info', [HomeController::class, 'index'])
        ->name('customer.info');

    Route::get('order', [CustomerOrderController::class, 'index'])
        ->name('customer.order');

    Route::resource('address', AddressController::class, ['as' => 'customer']);

    Route::resource('payment-methods', PaymentMethodsController::class, ['as' => 'customer']);

    Route::get('review', [ReviewController::class, 'index'])
        ->name('customer.review');
});
