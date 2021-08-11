<?php

namespace App\Http\Livewire\Bookcast\Networks;

use Livewire\Component;
use App\Models\Partner;

class Item extends Component
{
    public $partner;

    public function mount(Partner $partner)
    {
        $this->partner = $partner;
    }

    public function render()
    {
        return view('livewire.bookcast.networks.item');
    }
}
