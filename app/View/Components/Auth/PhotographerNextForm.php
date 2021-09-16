<?php

namespace App\View\Components\Auth;

use Illuminate\View\Component;
use App\Models\Area;
use App\Models\Work;
use App\Models\PersonLevel;
use App\Models\Photographer;
use App\Models\PhotographerRay;
use App\Models\PhotographerCategory;

class PhotographerNextForm extends Component
{
    public $photographer;

    public $photographerRays;

    public $photographerCategories;

    public $areas;

    public $works;

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

        $this->areas = Area::where('user_type_id', $photographer->user->user_type_id)->get()->sortBy('id')->pluck(null, 'id');
        $this->works = Work::all()->sortBy('id')->pluck(null, 'id');
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
