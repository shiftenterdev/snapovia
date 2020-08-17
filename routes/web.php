<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/forgot-password', 'Admin\AuthController@forgotPassword')->name('admin.forgot.password');
Route::get('/admin/login', 'Admin\AuthController@login')->name('admin.login');
Route::post('/admin/login', 'Admin\AuthController@loginPost')->name('admin.login.post');
Route::get('/admin/logout', 'Admin\AuthController@logout')->name('admin.logout');
Route::middleware('admin')->group(function () {
    Route::get('/admin', 'Admin\DashboardController@index')->name('admin.dashboard');

    Route::get('/admin/product', 'Admin\ProductController@index')->name('admin.product');
    Route::get('/admin/product/create', 'Admin\ProductController@create')->name('admin.product.create');
    Route::post('/admin/product/create', 'Admin\ProductController@store')->name('admin.product.store');
    Route::get('/admin/product/{id}', 'Admin\ProductController@edit')->name('admin.product.edit');
    Route::post('/admin/product/{id}', 'Admin\ProductController@update')->name('admin.product.update');
    Route::get('/admin/product/delete/{id}', 'Admin\ProductController@destroy')->name('admin.product.delete');

    Route::get('/admin/category', 'Admin\CategoryController@index')->name('admin.category');
    Route::get('/admin/category/create', 'Admin\CategoryController@create')->name('admin.category.create');
    Route::post('/admin/category/create', 'Admin\CategoryController@store')->name('admin.category.store');
    Route::get('/admin/category/{id}', 'Admin\CategoryController@edit')->name('admin.category.edit');
    Route::post('/admin/category/{id}', 'Admin\CategoryController@update')->name('admin.category.update');
    Route::get('/admin/category/delete/{id}', 'Admin\CategoryController@destroy')->name('admin.category.delete');

    Route::get('/admin/brand', 'Admin\BrandController@index')->name('admin.brand');
    Route::get('/admin/brand/create', 'Admin\BrandController@create')->name('admin.brand.create');
    Route::post('/admin/brand/create', 'Admin\BrandController@store')->name('admin.brand.store');
    Route::get('/admin/brand/{id}', 'Admin\BrandController@edit')->name('admin.brand.edit');
    Route::post('/admin/brand/{id}', 'Admin\BrandController@update')->name('admin.brand.update');
    Route::get('/admin/brand/delete/{id}', 'Admin\BrandController@destroy')->name('admin.brand.delete');

    Route::get('/admin/cms-page', 'Admin\CmsPageController@index')->name('admin.cms-page');
    Route::get('/admin/cms-page/create', 'Admin\CmsPageController@create')->name('admin.cms-page.create');
    Route::post('/admin/cms-page/create', 'Admin\CmsPageController@store')->name('admin.cms-page.store');
    Route::get('/admin/cms-page/{id}', 'Admin\CmsPageController@edit')->name('admin.cms-page.edit');
    Route::post('/admin/cms-page/{id}', 'Admin\CmsPageController@update')->name('admin.cms-page.update');
    Route::get('/admin/cms-page/delete/{id}', 'Admin\CmsPageController@destroy')->name('admin.cms-page.delete');

    Route::get('/admin/cms-block', 'Admin\CmsBlockController@index')->name('admin.cms-block');
    Route::get('/admin/cms-block/create', 'Admin\CmsBlockController@create')->name('admin.cms-block.create');
    Route::post('/admin/cms-block/create', 'Admin\CmsBlockController@store')->name('admin.cms-block.store');
    Route::get('/admin/cms-block/{id}', 'Admin\CmsBlockController@edit')->name('admin.cms-block.edit');
    Route::post('/admin/cms-block/{id}', 'Admin\CmsBlockController@update')->name('admin.cms-block.update');
    Route::get('/admin/cms-block/delete/{id}', 'Admin\CmsBlockController@destroy')->name('admin.cms-block.delete');

    Route::get('/admin/customer', 'Admin\CustomerController@index')->name('admin.customer');
    Route::get('/admin/customer/create', 'Admin\CustomerController@create')->name('admin.customer.create');
    Route::post('/admin/customer/create', 'Admin\CustomerController@store')->name('admin.customer.store');
    Route::get('/admin/customer/{id}', 'Admin\CustomerController@edit')->name('admin.customer.edit');
    Route::post('/admin/customer/{id}', 'Admin\CustomerController@update')->name('admin.customer.update');
    Route::get('/admin/customer/delete/{id}', 'Admin\CustomerController@destroy')->name('admin.customer.delete');


    Route::get('/admin/order', 'Admin\OrderController@index')->name('admin.order');
    Route::get('/admin/invoice', 'Admin\InvoiceController@index')->name('admin.invoice');
    Route::get('/admin/refund', 'Admin\RefundController@index')->name('admin.refund');
    Route::get('/admin/customer/create', 'Admin\CustomerController@create')->name('admin.customer.create');
    Route::get('/admin/customer/group', 'Admin\CustomerGroupController@index')->name('admin.customer.group');
    Route::get('/admin/configuration', 'Admin\ConfigurationController@index')->name('admin.configuration');
});
Route::get('counter',function (){
    return response()->json(['total_hit'=>session('gq_count')],200);
});
Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


//Route::get('/{url}/{suburl?}/{producturl?}', 'Front\CatalogController@getUrlResolver');
