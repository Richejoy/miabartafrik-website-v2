<?php

namespace App\Http\Livewire\Bookcast;

use Livewire\Component;
use App\Models\Message;

class Messages extends Component
{
    public function render()
    {
        $messages = Message::where(['readed' => false])->get();

        return view('livewire.bookcast.messages', compact('messages'));
    }
}
