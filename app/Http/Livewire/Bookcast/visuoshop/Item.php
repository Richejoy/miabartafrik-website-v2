<?php

namespace App\Http\Livewire\Bookcast\Visuoshop;

use Livewire\Component;
use App\Models\Photographer;

class Item extends Component
{
    public $fetch = 'all';

    public $photographers = null;

    public $photographer = null;

    public function mount($fetch = 'all')
    {
        $this->fetch = $fetch;
    }

    public function render()
    {
        if ($this->fetch == 'all') {
            $this->photographers = Photographer::where('paid', true)->get();
        } else {
            $this->photographer = Photographer::find(1);
        }

        return view('livewire.bookcast.visuoshop.item');
    }
}
