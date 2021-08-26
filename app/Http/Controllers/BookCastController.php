<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('bookcast.elections');
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
