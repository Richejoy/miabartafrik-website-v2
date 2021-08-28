<?php

namespace App\Http\Livewire\Bookcast;

use Livewire\Component;
use App\Models\Message;

class Messages extends Component
{
    public function render()
    {
        $messages = Message::where(['receiver_id' => auth()->id(), 'readed' => false])->get();

        return view('livewire.bookcast.messages', compact('messages'));
    }
}
