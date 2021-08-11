<?php

namespace App\Http\Livewire\Bookcast\Notebook;

use Livewire\Component;
use App\Models\Event;

class Item extends Component
{
    public $event;

    public function mount(Event $event)
    {
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.bookcast.notebook.item');
    }
}
