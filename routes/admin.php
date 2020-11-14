<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CmsBlockController;
use App\Http\Controllers\Admin\CmsPageController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CustomerGroupController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExportImport\ExportController;
use App\Http\Controllers\Admin\ExportImport\ImportController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\Marketing\AbandonCartController;
use App\Http\Controllers\Admin\Marketing\CartPriceRuleController;
use App\Http\Controllers\Admin\Marketing\CatalogPriceRuleController;
use App\Http\Controllers\Admin\Marketing\EmailTemplateController;
use App\Http\Controllers\Admin\Marketing\UrlRewriteController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RefundController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ShipmentController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\VendorOrderController;
use App\Http\Controllers\Admin\VendorProductController;
use App\Http\Controllers\Admin\VendorSettlementController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'login'])
    ->name('login');

Route::post('login', [AuthController::class, 'loginPost'])
    ->name('login.post');

Route::get('forgot-password', [AuthController::class, 'forgotPassword'])
    ->name('forgot.password');

Route::post('forgotpassword', [AuthController::class, 'forgotPasswordPost'])
    ->name('forgot.password.post');

Route::get('createpassword/{token}', [AuthController::class, 'createPassword'])
    ->name('create.password');

Route::post('createpassword', [AuthController::class, 'createPasswordPost'])
    ->name('create.password.post');

Route::get('logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::middleware('backend.auth')->group(function () {

    Route::redirect('/', '/adminportal/dashboard');

    Route::get('dashboard', DashboardController::class)
        ->name('dashboard');

    Route::get('data', [ProductController::class, 'data'])
        ->name('product.data');

    Route::resource('product', ProductController::class);

    Route::resource('media', MediaController::class);

    Route::get('data', [CategoryController::class, 'data'])
        ->name('category.data');

    Route::resource('category', CategoryController::class);

    Route::post('brand/media', [BrandController::class, 'storeMedia'])
        ->name('brand.media');

    Route::resource('brand', BrandController::class);

    Route::resource('cms-page', CmsPageController::class);

    Route::resource('cms-block', CmsBlockController::class);

    Route::resource('customer/group', CustomerGroupController::class);

    Route::resource('customer', CustomerController::class);

    Route::resource('blog', AdminBlogController::class);

    Route::resource('vendor', VendorController::class);

    Route::resource('vendor-product', VendorProductController::class);

    Route::resource('vendor-order', VendorOrderController::class);

    Route::resource('vendor-settlement', VendorSettlementController::class);

    Route::resource('user', UserController::class);

    Route::resource('role', RoleController::class);

    Route::resource('permission', PermissionController::class);

    Route::resource('catalog-price-rule', CatalogPriceRuleController::class);

    Route::resource('cart-price-rule', CartPriceRuleController::class);

    Route::resource('abandon-cart', AbandonCartController::class);

    Route::resource('email-template', EmailTemplateController::class);

    Route::resource('subscribers', SubscriberController::class);

    Route::resource('url-rewrite', UrlRewriteController::class);

    Route::resource('order', OrderController::class);

    Route::resource('invoice', InvoiceController::class);

    Route::resource('shipment', ShipmentController::class);

    Route::resource('refund', RefundController::class);

    Route::resource('export/export', ExportController::class);

    Route::resource('import/import', ImportController::class);

    Route::resource('configuration', ConfigurationController::class);

});
