<?php

namespace App\Http\Livewire\Bookcast\Elections;

use Livewire\Component;
use App\Models\Artist;

class Item extends Component
{
    public $fetch = 'all';

    public $artists = null;

    public $artist = null;

    public function mount($fetch = 'all')
    {
        $this->fetch = $fetch;
    }

    public function render()
    {
        if ($this->fetch == 'all') {
            $this->artists = Artist::where('paid', true)->get();
        } else {
            $this->artist = Artist::find(1);
        }
        
        return view('livewire.bookcast.elections.item');
    }
}
