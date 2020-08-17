<?php

use Illuminate\Support\Facades\Route;

/**
 * Frontend routes
 */

Route::namespace('Front')->group(function(){
    Route::get('/', 'WelcomeController')->name('welcome');

    Route::get('category', 'CatalogController@allProducts')->name('category');

    Route::get('search', 'SearchController@index')->name('search');
    Route::post('search', 'SearchController@search')->name('search.post');

    Route::post('product/variants', 'CatalogController@getVariant')->name('product.variant');

    Route::get('checkout/cart', 'CartController@cart')->name('cart');
    Route::post('checkout/cart', 'CartController@addToCart')->name('add.to.cart');
    Route::get('checkout/mini-cart', 'CartController@miniCartInfo')->name('mini.cart.info');
    Route::get('checkout', 'CartController@checkout')->name('checkout');
    Route::post('cart/remove-item', 'CartController@removeItem')->name('cart.remove.item');
    Route::post('cart/update-item', 'CartController@updateItem')->name('cart.update.item');
    Route::get('cart/checkout/success', 'CartController@success')->name('cart.checkout.success');

    Route::get('contact', 'CmsController@contact')->name('contact');
    Route::get('faq', 'CmsController@faq')->name('faq');
    Route::get('shipping-and-returns', 'CmsController@shippingReturns')->name('shipping-and-returns');
    Route::get('about-us', 'CmsController@aboutUs')->name('about.us');
    Route::get('career', 'CmsController@career')->name('career');
    Route::get('terms', 'CmsController@terms')->name('terms');
    Route::get('privacy-policy', 'CmsController@privacy')->name('privacy');

    Route::get('blog', 'BlogController@index')->name('blog');


    Route::namespace('Customer')->group(function(){
        Route::get('/customer/account/login', 'AuthController@login')->name('customer.login');
        Route::post('/customer/account/login', 'AuthController@loginPost')->name('customer.login.post');
        Route::post('/customer/account/create', 'AuthController@createPost')->name('customer.create.post');
        Route::get('/customer/account/logout', 'AuthController@logout')->name('customer.logout');
        Route::get('/customer/account/forgotpassword', 'AuthController@forgotPassword')->name('forgot.password');
        Route::post('/customer/account/forgotpasswordpost', 'AuthController@forgotPasswordPost')->name('forgot.password.post');
        Route::get('/customer/{customer_id}/password/resetLinkToken/{token}', 'AuthController@createPassword')->name('create.password');
        Route::post('/customer/account/createpasswordpost', 'AuthController@createPasswordPost')->name('create.password.post');

        Route::middleware('customer')->group(function () {
            Route::get('/customer/dashboard', 'DashboardController@index')->name('customer.dashboard');
            Route::get('/customer/wishlist', 'WishlistController@index')->name('customer.wishlist');
            Route::get('/customer/info', 'DashboardController@info')->name('customer.info');
            Route::get('/customer/order', 'OrderController@index')->name('customer.order');
            Route::get('/customer/review', 'ReviewController@index')->name('customer.review');
        });
    });

});

/**
 * Customer Routes
 */



/**
 * Vendor routes
 */


/**
 * Backend Routes
 */


Route::prefix('adminportal')->namespace('Admin')->group(function () {

    Route::get('forgot-password', 'AuthController@forgotPassword')->name('admin.forgot.password');
    Route::get('login', 'AuthController@login')->name('admin.login');
    Route::post('login', 'AuthController@loginPost')->name('admin.login.post');
    Route::get('logout', 'AuthController@logout')->name('admin.logout');

    Route::middleware('backend.auth')->group(function (){
        Route::redirect('/','/adminportal/dashboard' );
        Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

        Route::get('product', 'ProductController@index')->name('admin.product');
        Route::get('product/create', 'ProductController@create')->name('admin.product.create');
        Route::post('product/create', 'ProductController@store')->name('admin.product.store');
        Route::get('product/{id}', 'ProductController@edit')->name('admin.product.edit');
        Route::post('product/{id}', 'ProductController@update')->name('admin.product.update');
        Route::get('product/delete/{id}', 'ProductController@destroy')->name('admin.product.delete');

        Route::get('category', 'CategoryController@index')->name('admin.category');
        Route::get('category/create', 'CategoryController@create')->name('admin.category.create');
        Route::post('category/create', 'CategoryController@store')->name('admin.category.store');
        Route::get('category/{id}', 'CategoryController@edit')->name('admin.category.edit');
        Route::post('category/{id}', 'CategoryController@update')->name('admin.category.update');
        Route::get('category/delete/{id}', 'CategoryController@destroy')->name('admin.category.delete');

        Route::resource('brand', 'BrandController',['as'=>'admin']);

        Route::resource('cms-page', 'CmsPageController',['as'=>'admin']);

        Route::resource('cms-block', 'CmsBlockController',['as'=>'admin']);

        Route::resource('customer', 'CustomerController',['as'=>'admin']);

        Route::resource('blog', 'BlogController',['as'=>'admin']);

        Route::resource('vendor', 'VendorController',['as'=>'admin']);

        Route::get('order', 'OrderController@index')->name('admin.order');
        Route::get('invoice', 'InvoiceController@index')->name('admin.invoice');
        Route::get('refund', 'RefundController@index')->name('admin.refund');
//    Route::get('customer/create', 'CustomerController@create')->name('admin.customer.create');
        Route::resource('customer/group', 'CustomerGroupController',['as'=>'admin']);

        Route::get('configuration', 'ConfigurationController@index')->name('admin.configuration');
    });

});
//Route::get('counter',function (){
//    return response()->json(['total_hit'=>session('gq_count')],200);
//});
//Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'admin']], function () {
//    \UniSharp\LaravelFilemanager\Lfm::routes();
//});


//Route::get('/{url}/{suburl?}/{producturl?}', 'Front\CatalogController@getUrlResolver');
