<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('users.index');
    }

    public function show(Request $request, User $user)
    {
    	return view('users.show');
    }

    public function edit(Request $request, User $user)
    {
    	return view('users.edit');
    }
}
