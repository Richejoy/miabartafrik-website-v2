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

            case 'photographer':

                Mail::to($user->email)->send(new PaymentMail($user, 'photographer', "Mise à jour du profil"));

                break;

            case 'artistic_network':

                Mail::to($user->email)->send(new PaymentMail($user, 'artistic_network', "Mise à jour du profil"));

                break;

            default:
                # code...
                break;
        }
    }
}
