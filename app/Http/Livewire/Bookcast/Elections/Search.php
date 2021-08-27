<?php

namespace App\Http\Livewire\Bookcast\Elections;

use Livewire\Component;
use App\Models\Country;
use App\Models\AreaRay;
use App\Models\Area;

class Search extends Component
{
    public $countries;

    public $areaRays;

    public $areas;

    public function mount()
    {
        $this->countries = Country::all()->sortBy('id')->pluck(null, 'id');
        $this->areaRays = AreaRay::all()->sortBy('id')->pluck(null, 'id');
        $this->areas = Area::all()->sortBy('id')->pluck(null, 'id');
    }

    public function render()
    {
        return view('livewire.bookcast.elections.search');
    }
}
