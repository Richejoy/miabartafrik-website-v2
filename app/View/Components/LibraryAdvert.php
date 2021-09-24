<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Advert;

class LibraryAdvert extends Component
{
    public $type = 'all';

    public $isGold = false;

    public $advert = null;

    public $adverts = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type)
    {
        $this->type = $type;

        $this->isGold = (bool) ($this->type == 'gold');

        $query = Advert::with('library')->where(['published' => true]);

        if ($this->isGold) {

            $this->advert = $query->where(['is_gold' => $this->isGold])->first();

        } else {

            $this->adverts = $query->get();

        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.library-advert');
    }
}
