<?php

namespace App\Mail;

use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriberMail extends Mailable
{
    use Queueable, SerializesModels;

    public $view;

    public $subscriber;

    public $params;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Subscriber $subscriber, string $view, string $subject, array $params = array(), array $from = array())
    {
        $this->view = $view;
        $this->subscriber = $subscriber;
        $this->params = $params;

        $this->subject($subject);
        $this->from($from);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.html.subscribers.' . $this->view);
    }
}
