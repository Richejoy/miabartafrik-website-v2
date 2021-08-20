<?php

namespace App\Listeners;

use App\Events\SubscriberEvent;
use App\Mail\SubscriberMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Helper;

class SubscriberListener
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
     * @param  SubscriberEvent  $event
     * @return void
     */
    public function handle(SubscriberEvent $event)
    {
        $subscriber = $event->subscriber;

        Mail::to($subscriber->email)->send(new SubscriberMail($subscriber, 'subscription', "Subscriber Mail"));
    }
}
