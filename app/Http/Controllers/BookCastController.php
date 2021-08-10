<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Partner;
use App\Models\Event;
use App\Models\News;
use App\Models\Movie;
use App\Models\Casting;

class BookCastController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('bookcast.index');
    }

    public function books(Request $request)
    {
        $artists = Artist::all();

    	return view('bookcast.books', compact('artists'));
    }

    public function castings(Request $request)
    {
        $castings = Casting::all();

    	return view('bookcast.castings', compact('castings'));
    }

    public function networks(Request $request)
    {
        $partners = Partner::all();

    	return view('bookcast.networks', compact('partners'));
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
