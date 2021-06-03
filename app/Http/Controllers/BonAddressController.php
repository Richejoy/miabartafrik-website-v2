<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonAddressController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('bonaddress.index');
    }
}
