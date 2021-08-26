<?php

namespace App\Http\Livewire\Bookcast\Movies;

use Livewire\Component;
use App\Models\Movie;

class Item extends Component
{
    public $fetch = 'all';

    public $movies = null;

    public $movie = null;

    public function mount($fetch = 'all')
    {
        $this->fetch = $fetch;
    }

    public function render()
    {
        if ($this->fetch == 'all') {
            $this->movies = Movie::all();
        } else {
            $this->movie = Movie::find(1);
        }

        return view('livewire.bookcast.movies.item');
    }
}
