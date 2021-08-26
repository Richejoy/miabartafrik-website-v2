<?php

namespace App\View\Components\Bookcast\Networks;

use Illuminate\View\Component;

class Item extends Component
{
    public $partner;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($partner)
    {
        $this->partner = $partner;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bookcast.networks.item');
    }
}
