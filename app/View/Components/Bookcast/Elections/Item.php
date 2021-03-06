<?php

namespace App\View\Components\Bookcast\Elections;

use Illuminate\View\Component;

class Item extends Component
{
    public $electionUser;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($eu)
    {
        $this->electionUser = $eu;
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
