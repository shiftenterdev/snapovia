<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CustomerGroupController;
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
use App\Http\Controllers\Admin\RefundController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ShipmentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\Customer\AddressController;
use App\Http\Controllers\Front\Customer\LoginController;
use App\Http\Controllers\Front\Customer\OrderController as CustomerOrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\VendorOrderController;
use App\Http\Controllers\Admin\VendorProductController;
use App\Http\Controllers\Admin\VendorSettlementController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CatalogController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\CmsController;
use App\Http\Controllers\Front\Customer\HomeController;
use App\Http\Controllers\Front\Customer\PasswordController;
use App\Http\Controllers\Front\Customer\PaymentMethodsController;
use App\Http\Controllers\Front\Customer\RegisterController;
use App\Http\Controllers\Front\Customer\WishlistController;
use App\Http\Controllers\Front\LanguageController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\UrlResolverController as UrlResolverControllerAlias;
use App\Http\Controllers\Front\Customer\ReviewController;
use App\Http\Controllers\Front\WelcomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CmsPageController;
use App\Http\Controllers\Admin\CmsBlockController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/locale/{p}', LanguageController::class)
    ->name('lang');

Route::get('/', WelcomeController::class)
    ->name('welcome');

Route::get('category', [CatalogController::class, 'category'])
    ->name('category');

Route::resource('search', SearchController::class)
    ->only(['index', 'show']);

Route::post('product/variants', [CatalogController::class, 'getVariant'])
    ->name('product.variant');

Route::get('checkout/cart', [CheckoutController::class, 'cart'])
    ->name('cart');

Route::post('add-to-cart', [CartController::class, 'addToCart'])
    ->name('add.to.cart');

Route::get('checkout/mini-cart', [CartController::class, 'miniCartInfo'])
    ->name('mini.cart.info');

Route::get('checkout', [CheckoutController::class, 'index'])
    ->name('checkout');

Route::post('checkout', [CheckoutController::class, 'submit'])
    ->name('checkout.submit');

Route::get('checkout/success', [CheckoutController::class, 'success'])
    ->name('checkout.success');

Route::post('cart/remove-item', [CartController::class, 'removeItem'])
    ->name('cart.remove.item');

Route::post('cart/update-item', [CartController::class, 'updateItem'])
    ->name('cart.update.item');

Route::get('contact', [CmsController::class, 'contact'])
    ->name('contact');

Route::get('faq', [CmsController::class, 'faq'])
    ->name('faq');

Route::get('shipping-and-returns', [CmsController::class, 'shippingReturns'])
    ->name('shipping-and-returns');

Route::get('about-us', [CmsController::class,'aboutUs'])
    ->name('about.us');

Route::get('career', [CmsController::class,'career'])
    ->name('career');

Route::get('terms', [CmsController::class,'terms'])
    ->name('terms');

Route::get('privacy-policy', [CmsController::class,'privacy'])
    ->name('privacy');

Route::get('discount', [CatalogController::class,'discount'])
    ->name('discount');

Route::resource('blog', BlogController::class)
    ->only(['index', 'show']);

Route::prefix('customer')->group(function () {

    Route::get('login', [LoginController::class,'index'])
        ->name('customer.login');

    Route::post('login', [LoginController::class,'login'])
        ->name('customer.login.post');

    Route::get('create', [RegisterController::class,'index'])
        ->name('customer.create');

    Route::post('create', [RegisterController::class,'createPost'])
        ->name('customer.create.post');

    Route::get('create/direct', [RegisterController::class,'createDirect'])
        ->name('customer.create.direct');

    Route::post('create/direct', [RegisterController::class,'createDirectPost'])
        ->name('customer.create.direct.post');

    Route::get('logout', [LoginController::class,'logout'])
        ->name('customer.logout');

    Route::get('forgotpassword', [PasswordController::class,'forgotPassword'])
        ->name('forgot.password');

    Route::post('forgotpasswordpost', [PasswordController::class,'forgotPasswordPost'])
        ->name('forgot.password.post');

    Route::get('{customer_id}/password/resetLinkToken/{token}', [PasswordController::class,'createPassword'])
        ->name('create.password');

    Route::post('createpasswordpost', [PasswordController::class,'createPasswordPost'])
        ->name('create.password.post');

    Route::middleware('customer')->group(function () {

        Route::get('wishlist', [WishlistController::class,'index'])
            ->name('customer.wishlist');

        Route::get('wishlist/{product_sku}', [WishlistController::class,'store'])
            ->name('add.to.wishlist');

        Route::get('wishlist/{product_sku}/remove', [WishlistController::class,'remove'])
            ->name('remove.from.wishlist');

        Route::get('info', [HomeController::class,'index'])
            ->name('customer.info');

        Route::get('order', [CustomerOrderController::class,'index'])
            ->name('customer.order');

        Route::resource('address', AddressController::class, ['as' => 'customer']);

        Route::resource('payment-methods', PaymentMethodsController::class, ['as' => 'customer']);

        Route::get('review', [ReviewController::class,'index'])
            ->name('customer.review');
    });

});

Route::prefix('adminportal')->name('admin.')->group(function () {

    Route::get('forgot-password', [AuthController::class,'forgotPassword'])
        ->name('forgot.password');

    Route::get('login', [AuthController::class,'login'])
        ->name('login');

    Route::post('login', [AuthController::class,'loginPost'])
        ->name('login.post');

    Route::get('logout', [AuthController::class,'logout'])
        ->name('logout');

    Route::middleware('backend.auth')->group(function () {

        Route::redirect('/', '/adminportal/dashboard');

        Route::get('dashboard', DashboardController::class)
            ->name('dashboard');

        Route::get('data', [ProductController::class,'data'])
            ->name('product.data');

        Route::resource('product', ProductController::class);

        Route::resource('media', MediaController::class);

        Route::get('data', [CategoryController::class,'data'])
            ->name('category.data');

        Route::resource('category', CategoryController::class);

        Route::post('brand/media', [BrandController::class,'storeMedia'])
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

        Route::resource('url-rewrite', UrlRewriteController::class);

        Route::resource('order', OrderController::class);

        Route::resource('invoice', InvoiceController::class);

        Route::resource('shipment', ShipmentController::class);

        Route::resource('refund', RefundController::class);

        Route::resource('export/export', ExportController::class);

        Route::resource('import/import', ImportController::class);

        Route::resource('configuration', ConfigurationController::class);

    });
});

//Test routes
Route::get('test-mail',function (){
    event(new \App\Events\CustomerRegistered(\App\Models\Customer::find(1)));
    return 'event processed successfully';
});

// Url resolver
Route::get('/{url}/{suburl?}/{producturl?}', UrlResolverControllerAlias::class)
    ->name('resolve');

/**
 * Vue page
 */
//Route::get('{path}', function () {
//    return view('front.layouts.vue');
//})->where('path', '(.*)');
