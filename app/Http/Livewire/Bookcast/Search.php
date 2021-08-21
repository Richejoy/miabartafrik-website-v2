<?php

namespace App\Http\Livewire\Bookcast;

use Livewire\Component;
use App\Models\Country;
use App\Models\Module;
use App\Models\Menu;

class Search extends Component
{
    public function render()
    {
        $countries = Country::where('activated', true)->get()->sortBy('id')->pluck(null, 'id');

        $menus = Module::find(1)->menus()->get()->sortBy('id')->pluck(null, 'id');
        
        //$menus = Menu::where('module_id', 1)->get()->sortBy('id')->pluck(null, 'id');

        return view('livewire.bookcast.search', compact('countries', 'menus'));
    }
}
