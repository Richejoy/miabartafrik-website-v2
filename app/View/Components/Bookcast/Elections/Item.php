<?php

namespace App\View\Components\Bookcast\Elections;

use Illuminate\View\Component;

class Item extends Component
{
    public $artist;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($artist)
    {
        $this->artist = $artist;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bookcast.elections.item');
    }
}
