<?php

namespace App\View\Components\Auth;

use Illuminate\View\Component;
use App\Models\PersonLevel;
use App\Models\Photographer;
use App\Models\PhotographerRay;
use App\Models\PhotographerCategory;

class PhotographerNextForm extends Component
{
    public $photographer;

    public $photographerRays;

    public $photographerCategories;

    public $personLevels;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($photographer)
    {
        $this->photographer = $photographer;

        $this->photographerRays = PhotographerRay::all()->sortBy('id')->pluck(null, 'id');

        $this->photographerCategories = PhotographerCategory::all()->sortBy('id')->pluck(null, 'id');

        $this->personLevels = PersonLevel::all()->sortBy('id')->pluck(null, 'id');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.photographer-next-form');
    }
}
