<?php

namespace App\View\Components\Auth;

use Illuminate\View\Component;
use App\Models\Area;
use App\Models\Work;
use App\Models\Society;
use App\Models\PersonType;
use App\Models\PersonLevel;

class PartnerNextForm extends Component
{
    public $areas;

    public $works;

    public $personLevels;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->areas = Area::all()->sortBy('id')->pluck(null, 'id');
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
        return view('components.auth.partner-next-form');
    }
}
