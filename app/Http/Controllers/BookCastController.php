<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	return view('bookcast.books');
    }

    public function castings(Request $request)
    {
    	return view('bookcast.castings');
    }

    public function network(Request $request)
    {
    	return view('bookcast.network');
    }

    public function news(Request $request)
    {
    	return view('bookcast.news');
    }

    public function notebook(Request $request)
    {
    	return view('bookcast.notebook');
    }

    public function movies(Request $request)
    {
    	return view('bookcast.movies');
    }

    public function elections(Request $request)
    {
    	return view('bookcast.elections');
    }
}
