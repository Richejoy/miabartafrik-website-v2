<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Country;
use App\Models\Civility;
use App\Models\Subscriber;

class Informations extends Component
{
    public $countries;

    public $civilities;

    public $subscriber;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subscriber)
    {
        $this->countries = Country::all()->sortBy('id')->pluck(null, 'id');
        $this->civilities = Civility::all()->sortBy('id')->pluck(null, 'id');
        $this->subscriber = $subscriber;
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
