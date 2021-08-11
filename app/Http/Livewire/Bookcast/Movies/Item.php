<?php

namespace App\Http\Livewire\Bookcast\Movies;

use Livewire\Component;
use App\Models\Movie;

class Item extends Component
{
    public $movie;

    public function mount(Movie $movie)
    {
        $this->movie = $movie;
    }

    public function render()
    {
        return view('livewire.bookcast.movies.item');
    }
}
