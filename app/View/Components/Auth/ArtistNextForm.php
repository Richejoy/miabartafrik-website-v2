<?php

namespace App\View\Components\Auth;

use Illuminate\View\Component;
use App\Models\Area;
use App\Models\Language;
use App\Models\LanguageLevel;
use App\Models\Artist;

class ArtistNextForm extends Component
{
    public $artist;

    public $areas;

    public $languages;

    public $languageLevels;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($artist)
    {
        $this->artist = $artist;
        
        $this->areas = Area::where('user_type_id', $artist->user->user_type_id)->get()->sortBy('id')->pluck(null, 'id');
        $this->languages = Language::all()->sortBy('id')->pluck(null, 'id');
        $this->languageLevels = LanguageLevel::all()->sortBy('id')->pluck(null, 'id');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.artist-next-form');
    }
}
