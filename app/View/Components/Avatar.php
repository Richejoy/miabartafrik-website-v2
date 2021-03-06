<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Library;

class Avatar extends Component
{
    public $library;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($library)
    {
        $this->library = $library; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.avatar');
    }
}
