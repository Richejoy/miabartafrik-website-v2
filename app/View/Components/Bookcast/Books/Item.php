<?php

namespace App\View\Components\Bookcast\Books;

use Illuminate\View\Component;
use App\Models\Artist;

class Item extends Component
{
    public $artists;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($artists)
    {
        $this->artists = $artists;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bookcast.books.item');
    }
}
