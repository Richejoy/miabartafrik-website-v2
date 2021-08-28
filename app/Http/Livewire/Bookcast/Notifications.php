<?php

namespace App\Http\Livewire\Bookcast;

use Livewire\Component;
use App\Models\Notification;

class Notifications extends Component
{
    public function render()
    {
        $notifications = Notification::where(['receiver_id' => auth()->id(), 'readed' => false])->get();

        return view('livewire.bookcast.notifications', compact('notifications'));
    }
}
