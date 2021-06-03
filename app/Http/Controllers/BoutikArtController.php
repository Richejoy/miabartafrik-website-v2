<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoutikArtController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('boutikart.index');
    }
}
