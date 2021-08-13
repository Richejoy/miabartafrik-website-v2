<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photographer;
use App\Models\Package;

class PhotographerController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('photographers.index');
    }

    public function create(Request $request)
    {
        return view('photographers.create');
    }

    public function store(Request $request)
    {
        return back();
    }

    public function show(Request $request, Photographer $photographer)
    {
        return view('photographers.show', compact('photographer'));
    }

    public function edit(Request $request, Photographer $photographer)
    {
        return view('photographers.edit', compact('photographer'));
    }

    public function update(Request $request, Photographer $photographer)
    {
        return back();
    }

    public function package()
    {
        $packages = Package::where('user_type_id', 5)->get();

        return view('photographers.package', compact('packages'));
    }
}
