<?php

namespace App\Listeners;

use App\Events\OrderSubmitted;
use App\Mail\CustomerRegistrationMail;
use App\Mail\OrderCompleteMail;
use App\Mail\OrderSubmittedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
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
     * @param  OrderSubmitted  $event
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
