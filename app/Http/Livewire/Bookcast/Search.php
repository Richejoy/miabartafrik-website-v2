<?php

namespace App\Http\Livewire\Bookcast;

use Livewire\Component;
use App\Models\Country;

class Search extends Component
{
    public function render()
    {
        $countries = Country::all()->sortBy('id')->pluck(null, 'id');

        return view('livewire.bookcast.search', compact('countries'));
    }
}
