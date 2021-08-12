<?php

namespace App\Http\Livewire\Bookcast\Books;

use Livewire\Component;

class Search extends Component
{
    public function render()
    {
        //$this->emit('', ['data' => $data]);   1 = event, 2 data

        return view('livewire.bookcast.books.search');
    }
}
