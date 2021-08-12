<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\UserType;
use App\Models\Country;
use App\Models\Civility;

class Informations extends Component
{
    public $userTypes;

    public $countries;

    public $civilities;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->userTypes = UserType::where('id', '>', 1)->get()->sortBy('id')->pluck(null, 'id');
        $this->countries = Country::all()->sortBy('id')->pluck(null, 'id');
        $this->civilities = Civility::all()->sortBy('id')->pluck(null, 'id');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.informations');
    }
}
