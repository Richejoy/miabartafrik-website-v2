<?php

namespace App\Listeners;

use App\Events\PaymentEvent;
use App\Mail\PaymentMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Helper;

class PaymentListener
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
     * @param  UserEvent  $event
     * @return void
     */
    public function handle(PaymentEvent $event)
    {
        $user = $event->user;

        extract($event->params);

        switch ($action) {
            case 'artist':

                Mail::to($user->email)->send(new PaymentMail($user, 'artist', "Mise à jour du profil"));

                break;

            default:
                # code...
                break;
        }
    }
}
