<?php

namespace App\Listeners;

use App\Events\InvoiceCreated;

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
     * @return void
     */
    public function handle(InvoiceCreated $event)
    {
        //
    }
}
