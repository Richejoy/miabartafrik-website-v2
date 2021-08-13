<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Package;

class ArtistController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('artists.index');
    }

    public function create(Request $request)
    {
        return view('artists.create');
    }

    public function store(Request $request)
    {
        return back();
    }

    public function show(Request $request, Artist $artist)
    {
        return view('artists.show', compact('artist'));
    }

    public function edit(Request $request, Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

    public function update(Request $request, Artist $artist)
    {
        return back();
    }

    public function package()
    {
        $packages = Package::where('user_type_id', 3)->get();

        return view('artists.package', compact('packages'));
    }
}
