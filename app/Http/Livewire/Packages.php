<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Package;

class Packages extends Component
{
    public function render()
    {
        $packages = Package::where('user_type_id', 3)->get();

        return view('livewire.packages', compact('packages'));
    }
}
