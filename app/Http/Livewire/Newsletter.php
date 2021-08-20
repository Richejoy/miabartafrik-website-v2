<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Newsletter extends Component
{
    public function render()
    {
        return view('livewire.newsletter');
    }

    public function save(Request $request)
    {
        dd($request->all());
    }
}
