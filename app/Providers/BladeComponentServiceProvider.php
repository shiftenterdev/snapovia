<?php

namespace App\Providers;

use App\View\Components\Admin\CardComponent;
use App\View\Components\Admin\ContentComponent;
use App\View\Components\Admin\HeaderComponent;
use App\View\Components\Admin\TableComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('admin-table', TableComponent::class);
        Blade::component('admin-card', CardComponent::class);
        Blade::component('admin-content', ContentComponent::class);
        Blade::component('admin-header', HeaderComponent::class);
    }
}
