<?php

namespace App\Http\Livewire\Bookcast;

use Livewire\Component;
use App\Models\Country;
use App\Models\Menu;

class Search extends Component
{
    public $countries;

    public $menus;

    public function mount()
    {
        $this->countries = Country::all()->sortBy('id')->pluck(null, 'id');

        $this->menus = Menu::where('module_id', 1)->get()->sortBy('id')->pluck(null, 'id');
    }

    public function render()
    {
        return view('livewire.bookcast.search');
    }
}
