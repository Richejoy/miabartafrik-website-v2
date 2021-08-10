<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class Informations extends Component
{
    public $userTypes;

    public $countries;

    public $civilities;

    public $user;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($user, $userTypes, $countries, $civilities)
    {
        //dd($user instanceof User);

        $this->userTypes = $userTypes;
        $this->countries = $countries;
        $this->civilities = $civilities;
        $this->user = $user;
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
