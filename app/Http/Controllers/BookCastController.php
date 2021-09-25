<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;
use App\Models\Election;
use App\Models\User;
use Illuminate\Support\Str;

class BookCastController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
        $sponsors = Sponsor::with('library')->take(6)->get();

    	return view('bookcast.index', compact('sponsors'));
    }

    public function books(Request $request)
    {
    	return view('bookcast.books');
    }

    public function visuoshop(Request $request)
    {
        return view('bookcast.visuoshop');
    }

    public function networks(Request $request)
    {
        return view('bookcast.networks');
    }

    public function castings(Request $request)
    {
    	return view('bookcast.castings');
    }

    public function notebook(Request $request)
    {
        return view('bookcast.notebook');
    }

    public function elections(Request $request)
    {
        $elections = Election::all();

        return view('bookcast.elections', compact('elections'));
    }

    public function movies(Request $request)
    {
    	return view('bookcast.movies');
    }

    public function news(Request $request)
    {
        return view('bookcast.news');
    }
}
