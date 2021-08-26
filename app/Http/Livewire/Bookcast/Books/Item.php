<?php

namespace App\Http\Livewire\Bookcast\Books;

use Livewire\Component;
use App\Models\Artist;

class Item extends Component
{
    //protected $listerners = ['emitMethod' => 'thisMethod'];

    public $fetch = 'all';

    public $artists = null;

    public $artist = null;

    public function mount($fetch = 'all')
    {
        $this->fetch = $fetch;
    }

    public function render()
    {
        if ($this->fetch == 'all') {
            $this->artists = Artist::where('paid', true)->get();
        } else {
            $this->artist = Artist::find(1);
        }

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
