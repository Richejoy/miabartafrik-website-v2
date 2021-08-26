<?php

namespace App\Http\Livewire\Bookcast\Notebook;

use Livewire\Component;
use App\Models\Event;

class Item extends Component
{
    public $fetch = 'all';

    public $events = null;

    public $event = null;

    public function mount($fetch = 'all')
    {
        $this->fetch = $fetch;
    }

    public function render()
    {
        if ($this->fetch == 'all') {
            $this->events = Event::all();
        } else {
            $this->event = Event::find(1);
        }

        return view('livewire.bookcast.notebook.item');
    }
}
