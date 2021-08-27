<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casting;

class CastingController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('bookcast.castings.index');
    }

    public function create(Request $request)
    {
        return view('bookcast.castings.create');
    }

    public function show(Request $request, Casting $casting)
    {
        return view('bookcast.castings.show', compact('casting'));
    }

    public function edit(Request $request, Casting $casting)
    {
        return view('bookcast.castings.edit', compact('casting'));
    }

    public function update(Request $request, Casting $casting)
    {
        return back();
    }
}
