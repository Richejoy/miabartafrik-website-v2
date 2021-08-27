<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Election;

class ElectionController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function show(Request $request, Election $election)
    {
        return view('elections.show', compact('election'));
    }
}
