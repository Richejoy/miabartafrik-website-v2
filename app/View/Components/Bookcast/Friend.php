<?php

namespace App\View\Components\Bookcast;

use Illuminate\View\Component;

class Friend extends Component
{
    public $tab;

    public $friend;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tab, $friend)
    {
        $this->tab = $tab;

        $this->friend = $friend;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bookcast.friend');
    }
}
