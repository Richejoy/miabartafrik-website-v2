<?php

namespace App\Http\Livewire\Bookcast;

use Livewire\Component;
use App\Models\Message;

class Messages extends Component
{
    public function render()
    {
        $messages = Message::with('sender')->unReaded(auth()->id())->get();

        return view('livewire.bookcast.messages', compact('messages'));
    }
}
