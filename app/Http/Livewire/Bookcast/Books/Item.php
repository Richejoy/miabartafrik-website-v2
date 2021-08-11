<?php

namespace App\Http\Livewire\Bookcast\Books;

use Livewire\Component;
use App\Models\Artist;

class Item extends Component
{
    public $artist;

    public function mount(Artist $artist)
    {
        $this->artist = $artist;
    }

    public function render()
    {
        return view('livewire.bookcast.books.item');
    }
}
