<?php

namespace App\View\Components\Bookcast\Visuoshop;

use Illuminate\View\Component;

class Item extends Component
{
    public $photographer;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($photographer)
    {
        $this->photographer = $photographer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bookcast.visuoshop.item');
    }
}
