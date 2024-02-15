<?php

namespace App\Listeners;

use App\Events\PaymentSuccess;

class SendPaymentSuccessNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle(PaymentSuccess $event)
    {
        //
    }
}
