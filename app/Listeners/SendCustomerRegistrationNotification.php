<?php

namespace App\Listeners;

use App\Events\CustomerRegistered;
use App\Mail\CustomerRegistrationMail;
use Illuminate\Support\Facades\Mail;

class SendCustomerRegistrationNotification
{
    /**
     * Create the event listener.
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
    public function handle(CustomerRegistered $event)
    {
        Mail::to($event->customer->email)
            ->queue(new CustomerRegistrationMail($event->customer));
    }
}
