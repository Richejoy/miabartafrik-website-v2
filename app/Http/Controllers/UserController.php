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
        abort_if($user->id != auth()->id(), 403, "Error...");

    	return view('users.show', compact('user'));
    }

    public function edit(Request $request, User $user)
    {
        abort_if($user->id != auth()->id(), 403, "Error...");

    	return view('users.edit', compact('user'));
    }
}
