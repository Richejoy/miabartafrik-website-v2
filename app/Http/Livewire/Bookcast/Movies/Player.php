<?php

namespace App\Http\Livewire\Bookcast\Movies;

use Livewire\Component;
use App\Models\Movie;

class Player extends Component
{
    public function render()
    {
        $movie = Movie::find(1);

        return view('livewire.bookcast.movies.player', compact('movie'));
    }
}
