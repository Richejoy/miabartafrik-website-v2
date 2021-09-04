<?php

namespace App\Http\Livewire\Bookcast;

use Livewire\Component;
use App\Models\Notification;

class Notifications extends Component
{
    public function render()
    {
        $notifications = Notification::unReaded(auth()->id())->get();

        return view('livewire.bookcast.notifications', compact('notifications'));
    }
}
