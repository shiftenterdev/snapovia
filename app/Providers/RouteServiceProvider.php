<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers\Front';
    protected $admin_namespace = 'App\Http\Controllers\Admin';
    protected $customer_namespace = 'App\Http\Controllers\Front\Customer';
    protected $vendor_namespace = 'App\Http\Controllers\Vendor';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapCustomerRoutes();

        $this->mapAdminRoutes();

        $this->mapVendorRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }


    protected function mapAdminRoutes()
    {
        Route::prefix('adminportal')
            ->namespace($this->admin_namespace)
            ->group(base_path('routes/admin.php'));
    }


    protected function mapCustomerRoutes()
    {
        Route::namespace($this->customer_namespace)
            ->group(base_path('routes/customer.php'));
    }


    protected function mapVendorRoutes()
    {
        Route::namespace($this->vendor_namespace)
            ->group(base_path('routes/vendor.php'));
    }
}
