<?php

namespace App\Http\Livewire\Bookcast\Books;

use Livewire\Component;
use App\Models\Artist;

class Item extends Component
{
    //protected $listerners = ['emitMethod' => 'thisMethod'];

    public $artist;

    public function mount(Artist $artist)
    {
        $this->artist = $artist;
    }

    public function render()
    {
        return view('livewire.bookcast.books.item');
    }

    public function like($artist_id)
    {
        dd($artist_id);
    }

    public function friend($artist_id)
    {
        dd($artist_id);
    }
}
