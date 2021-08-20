<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Image;

class Avatar extends Component
{
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image)
    {
        $this->image = $image; 
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