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

        extract($event->params);

        switch ($action) {
            case 'subscribe':

                Mail::to($subscriber->email)->send(new SubscriberMail($subscriber, 'subscribe_user', "Subscriber Mail"));
                    
                Mail::to(Helper::EMAIL_CONTACT, config('app.name', 'Laravel'))->send(new SubscriberMail($subscriber, 'subscribe_admin', "Subscriber Mail", [], ['address' => $subscriber->email]));

                Mail::to('miabartafrik@gmail.com', config('app.name', 'Laravel'))->send(new SubscriberMail($subscriber, 'subscribe_admin', "Subscriber Mail", [], ['address' => $subscriber->email]));

                break;

            case 'unsubscribe':

                Mail::to($subscriber->email)->send(new SubscriberMail($subscriber, 'unsubscribe_user', "Subscriber Mail"));
                
                Mail::to(Helper::EMAIL_CONTACT, config('app.name', 'Laravel'))->send(new SubscriberMail($subscriber, 'unsubscribe_admin', "Subscriber Mail", [], ['address' => $subscriber->email]));

                Mail::to('miabartafrik@gmail.com', config('app.name', 'Laravel'))->send(new SubscriberMail($subscriber, 'unsubscribe_admin', "Subscriber Mail", [], ['address' => $subscriber->email]));

                break;

            default:
                # code...
                break;
        }
    }
}
