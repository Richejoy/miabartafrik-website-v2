<?php

namespace App\Http\Livewire\Bookcast\Visuoshop;

use Livewire\Component;
use App\Models\Photographer;

class Item extends Component
{
    public $photographer;

    public function mount(Photographer $photographer)
    {
        $this->photographer = $photographer;
    }

    public function render()
    {
        return view('livewire.bookcast.visuoshop.item');
    }
}
