<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Partner;
use App\Models\Photographer;
use App\Models\Event;
use App\Models\News;
use App\Models\Movie;
use App\Models\Casting;
use App\Models\Sponsor;

class BookCastController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
        $sponsors = Sponsor::all();

        $movie = Movie::find(1);
        $artist = Artist::find(1);
        $casting = Casting::find(1);
        $election = Artist::find(1);

    	return view('bookcast.index', compact('sponsors', 'movie', 'artist', 'casting', 'election'));
    }

    public function books(Request $request)
    {
        $artists = Artist::all();

    	return view('bookcast.books', compact('artists'));
    }

    public function visuoshop(Request $request)
    {
        $photographers = Photographer::all();

        return view('bookcast.visuoshop', compact('photographers'));
    }

    public function networks(Request $request)
    {
        $partners = Partner::all();

        return view('bookcast.networks', compact('partners'));
    }

    public function castings(Request $request)
    {
        $castings = Casting::all();

    	return view('bookcast.castings', compact('castings'));
    }

    public function notebook(Request $request)
    {
        $events = Event::all();

        return view('bookcast.notebook', compact('events'));
    }

    public function elections(Request $request)
    {
        $artists = Artist::all();

        return view('bookcast.elections', compact('artists'));
    }

    public function movies(Request $request)
    {
        $movies = Movie::all();

    	return view('bookcast.movies', compact('movies'));
    }

    public function news(Request $request)
    {
        $news = News::all();

        return view('bookcast.news', compact('news'));
    }
}
