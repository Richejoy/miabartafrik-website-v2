<?php

namespace App\Http\Livewire\Bookcast\Castings;

use Livewire\Component;
use App\Models\Casting;

class Item extends Component
{
    public $casting;

    public function mount(casting $casting)
    {
        $this->casting = $casting;
    }

    public function render()
    {
        return view('livewire.bookcast.castings.item');
    }
}
