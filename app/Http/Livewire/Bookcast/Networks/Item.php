<?php

namespace App\Http\Livewire\Bookcast\Networks;

use Livewire\Component;
use App\Models\Partner;

class Item extends Component
{
    public $fetch = 'all';

    public $partners = null;

    public $partner = null;

    public function mount($fetch = 'all')
    {
        $this->fetch = $fetch;
    }

    public function render()
    {
        if ($this->fetch == 'all') {
            $this->partners = Partner::where('paid', true)->get();
        } else {
            $this->partner = Partner::find(1);
        }

        return view('livewire.bookcast.networks.item');
    }
}
