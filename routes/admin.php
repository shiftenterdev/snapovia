<?php

use Illuminate\Support\Facades\Route;

Route::get('forgot-password', 'AuthController@forgotPassword')->name('admin.forgot.password');
Route::get('login', 'AuthController@login')->name('admin.login');
Route::post('login', 'AuthController@loginPost')->name('admin.login.post');
Route::get('logout', 'AuthController@logout')->name('admin.logout');

Route::middleware('backend.auth')->group(function () {

    Route::redirect('/', '/adminportal/dashboard');

    Route::get('dashboard', 'DashboardController')->name('admin.dashboard');

    Route::get('data', 'ProductController@data')->name('admin.product.data');
    Route::resource('product', 'ProductController', ['as' => 'admin']);

    Route::resource('media', 'MediaController', ['as' => 'admin']);

    Route::get('data', 'CategoryController@data')->name('admin.category.data');
    Route::resource('category', 'CategoryController', ['as' => 'admin']);

    Route::post('brand/media', 'BrandController@storeMedia')->name('admin.brand.media');
    Route::resource('brand', 'BrandController', ['as' => 'admin']);

    Route::resource('cms-page', 'CmsPageController', ['as' => 'admin']);

    Route::resource('cms-block', 'CmsBlockController', ['as' => 'admin']);

    Route::resource('customer/group', 'CustomerGroupController', ['as' => 'admin']);

    Route::resource('customer', 'CustomerController', ['as' => 'admin']);

    Route::resource('blog', 'BlogController', ['as' => 'admin']);

    Route::resource('vendor', 'VendorController', ['as' => 'admin']);

    Route::resource('vendor-product', 'VendorProductController', ['as' => 'admin']);

    Route::resource('vendor-order', 'VendorOrderController', ['as' => 'admin']);

    Route::resource('vendor-settlement', 'VendorSettlementController', ['as' => 'admin']);

    Route::resource('user', 'UserController', ['as' => 'admin']);

    Route::resource('role', 'RoleController', ['as' => 'admin']);

    Route::resource('permission', 'PermissionController', ['as' => 'admin']);

    Route::resource('catalog-price-rule', 'Marketing\CatalogPriceRuleController', ['as' => 'admin']);

    Route::resource('cart-price-rule', 'Marketing\CartPriceRuleController', ['as' => 'admin']);

    Route::resource('abandon-cart', 'Marketing\AbandonCartController', ['as' => 'admin']);

    Route::resource('email-template', 'Marketing\EmailTemplateController', ['as' => 'admin']);

    Route::resource('url-rewrite', 'Marketing\UrlRewriteController', ['as' => 'admin']);

    Route::resource('order', 'OrderController', ['as' => 'admin']);

    Route::resource('invoice', 'InvoiceController', ['as' => 'admin']);

    Route::resource('shipment', 'ShipmentController', ['as' => 'admin']);

    Route::resource('refund', 'RefundController', ['as' => 'admin']);

    Route::resource('export/export', 'ExportImport\ExportController', ['as' => 'admin']);

    Route::resource('import/import', 'ExportImport\ImportController', ['as' => 'admin']);

    Route::resource('configuration', 'ConfigurationController', ['as' => 'admin']);

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});