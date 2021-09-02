<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Events\NewsletterEvent;
use App\Models\Newsletter as NewsletterModel;

class Newsletter extends Component
{
    public $email;

    public function save()
    {
        $this->validate([
            'email' => ['required', 'email', 'unique:newsletters', 'max:40'],
        ]);

        $newsletter = NewsletterModel::create([
            'email' => $this->email,
            'token' => sha1(uniqid()),
        ]);

        event(new NewsletterEvent($newsletter, ['action' => 'subscribe']));

        session()->flash('success', "Merci pour votre souscription.");

        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.newsletter');
    }
}
