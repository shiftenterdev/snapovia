<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        \App\Events\OrderShipped::class => [
            \App\Listeners\SendShipmentNotification::class,
        ],
        \App\Events\OrderSubmitted::class => [
            \App\Listeners\SendOrderSubmissionNotification::class,
        ],
        \App\Events\PaymentSuccess::class => [
            \App\Listeners\SendPaymentSuccessNotification::class,
        ],
        \App\Events\OrderRefunded::class => [
            \App\Listeners\SendOrderRefundNotification::class,
        ],
        \App\Events\InvoiceCreated::class => [
            \App\Listeners\SendInvoiceCreationNotification::class,
        ],
        \App\Events\CustomerRegistered::class => [
            \App\Listeners\SendCustomerRegistrationNotification::class,
        ],
        \App\Events\VendorRegistered::class => [
            \App\Listeners\SendVendorRegistrationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
