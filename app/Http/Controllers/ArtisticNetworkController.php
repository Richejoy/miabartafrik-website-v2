<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisticNetworkController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('artistic_network.index');
    }
}
