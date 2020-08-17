<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/forgot-password', 'Admin\AuthController@forgotPassword')->name('admin.forgot.password');
Route::get('/admin/login', 'Admin\AuthController@login')->name('admin.login');
Route::post('/admin/login', 'Admin\AuthController@loginPost')->name('admin.login.post');
Route::get('/admin/logout', 'Admin\AuthController@logout')->name('admin.logout');
Route::middleware('auth')->prefix('adminportal')->group(function () {

    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

    Route::get('product', 'Admin\ProductController@index')->name('admin.product');
    Route::get('product/create', 'Admin\ProductController@create')->name('admin.product.create');
    Route::post('product/create', 'Admin\ProductController@store')->name('admin.product.store');
    Route::get('product/{id}', 'Admin\ProductController@edit')->name('admin.product.edit');
    Route::post('product/{id}', 'Admin\ProductController@update')->name('admin.product.update');
    Route::get('product/delete/{id}', 'Admin\ProductController@destroy')->name('admin.product.delete');

    Route::get('category', 'Admin\CategoryController@index')->name('admin.category');
    Route::get('category/create', 'Admin\CategoryController@create')->name('admin.category.create');
    Route::post('category/create', 'Admin\CategoryController@store')->name('admin.category.store');
    Route::get('category/{id}', 'Admin\CategoryController@edit')->name('admin.category.edit');
    Route::post('category/{id}', 'Admin\CategoryController@update')->name('admin.category.update');
    Route::get('category/delete/{id}', 'Admin\CategoryController@destroy')->name('admin.category.delete');

    Route::resource('brand', 'Admin\BrandController',['as'=>'admin']);

    Route::resource('cms-page', 'Admin\CmsPageController',['as'=>'admin']);

    Route::resource('cms-block', 'Admin\CmsBlockController',['as'=>'admin']);

    Route::resource('customer', 'Admin\CustomerController',['as'=>'admin']);

    Route::resource('blog', 'Admin\BlogController',['as'=>'admin']);

    Route::get('order', 'Admin\OrderController@index')->name('admin.order');
    Route::get('invoice', 'Admin\InvoiceController@index')->name('admin.invoice');
    Route::get('refund', 'Admin\RefundController@index')->name('admin.refund');
//    Route::get('customer/create', 'Admin\CustomerController@create')->name('admin.customer.create');
    Route::resource('customer/group', 'Admin\CustomerGroupController',['as'=>'admin']);

    Route::get('configuration', 'Admin\ConfigurationController@index')->name('admin.configuration');
});
Route::get('counter',function (){
    return response()->json(['total_hit'=>session('gq_count')],200);
});
//Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'admin']], function () {
//    \UniSharp\LaravelFilemanager\Lfm::routes();
//});


//Route::get('/{url}/{suburl?}/{producturl?}', 'Front\CatalogController@getUrlResolver');
