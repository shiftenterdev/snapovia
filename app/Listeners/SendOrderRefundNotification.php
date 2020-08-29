<?php

namespace App\Listeners;

use App\Events\OrderRefunded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendOrderRefundNotification
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
     * @param  OrderRefunded  $event
     * @return void
     */
    public function handle(OrderRefunded $event)
    {
        //
    }
}
