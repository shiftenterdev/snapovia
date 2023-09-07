<?php

namespace App\Listeners;

use App\Events\OrderSubmitted;
use App\Mail\OrderCompleteMail;
use App\Mail\OrderSubmittedMail;
use Illuminate\Support\Facades\Mail;

class SendOrderSubmissionNotification
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
    public function handle(OrderSubmitted $event)
    {
        // To Customer
        Mail::to($event->order->email)
            ->queue(new OrderCompleteMail($event->order));
        // To Admin
        Mail::to(config('site.admin.email'))
            ->queue(new OrderSubmittedMail($event->order));
        // To Vendor
    }
}
