<?php

namespace App\View\Components\Auth;

use Illuminate\View\Component;
use App\Models\ArtisticArea;
use App\Models\Language;
use App\Models\LanguageLevel;
use App\Models\Artist;

class ArtistNextForm extends Component
{
    public $artist;

    public $artisticAreas;

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
        
        $this->artisticAreas = ArtisticArea::all()->sortBy('id')->pluck(null, 'id');
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
