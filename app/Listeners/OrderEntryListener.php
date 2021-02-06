<?php

namespace App\Listeners;

use App\Notifications\OrderEntryNotification;
use Illuminate\Support\Facades\Notification;
use Revolution\Ordering\Events\OrderEntry;

class OrderEntryListener
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
     * @param  OrderEntry  $event
     *
     * @return void
     */
    public function handle(OrderEntry $event)
    {
        info($event->table.' : '.$event->memo, $event->items);

        // Notification::route('line-notify', config('line.notify.personal_access_token'))
        //             ->notify(new OrderEntryNotification($event->items, $event->table, $event->memo, $event->options));
    }
}
