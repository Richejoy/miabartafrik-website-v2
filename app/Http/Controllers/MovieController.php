<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('bookcast.movies.index');
    }

    public function create(Request $request)
    {
        return view('bookcast.movies.create');
    }

    public function show(Request $request, Movie $movie)
    {
        return view('bookcast.movies.show', compact('movie'));
    }

    public function edit(Request $request, Movie $movie)
    {
        return view('bookcast.movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        return back();
    }
}
