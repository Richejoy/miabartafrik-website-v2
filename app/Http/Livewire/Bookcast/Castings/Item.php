<?php

namespace App\Http\Livewire\Bookcast\Castings;

use Livewire\Component;
use App\Models\Casting;

class Item extends Component
{
    public $fetch = 'all';

    public $castings = null;

    public $casting = null;

    public function mount($fetch = 'all')
    {
        $this->fetch = $fetch;
    }

    public function render()
    {
        if ($this->fetch == 'all') {
            $this->castings = Casting::all();
        } else {
            $this->casting = Casting::find(1);
        }

        return view('livewire.bookcast.castings.item');
    }
}
