<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('admins.index');
    }

    public function show(Request $request, Admin $admin)
    {
        abort_if(auth()->user()->blocked, 403, self::VIEW_BLOCKED_MESSAGE);
        
        return view('admins.show', compact('admin'));
    }

    public function edit(Request $request, Admin $admin)
    {
        return view('admins.edit', compact('admin'));
    }
}
