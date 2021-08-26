<?php

namespace App\View\Components\Bookcast\Castings;

use Illuminate\View\Component;

class Item extends Component
{
    public $casting;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($casting)
    {
        $this->casting = $casting;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bookcast.castings.item');
    }
}
