<?php

namespace App\Listeners;

use App\Events\InvoiceCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendInvoiceCreationNotification
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
     * @param  InvoiceCreated  $event
     * @return void
     */
    public function handle(InvoiceCreated $event)
    {
        //
    }
}
