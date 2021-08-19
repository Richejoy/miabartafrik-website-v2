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
        $photographer = Photographer::where('user_id', auth()->id())->firstOrFail();

        return view('photographers.create', compact('photographer'));
    }

    public function store(Request $request)
    {
        $photographer = Photographer::where('user_id', auth()->id())->firstOrFail();

        if ($request->isMethod('POST')) {
            dd($request->all());
        }

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

    public function package(Request $request, Package $package = null)
    {
        $photographer = Photographer::where('user_id', auth()->id())->firstOrFail();
        
        if (!is_null($package)) {
            $photographer->update([
                'package_id' => $package->id,
            ]);

            return redirect()->route('bookcast.index');
        }
        
        $packages = Package::where('user_type_id', 5)->get();

        return view('photographers.package', compact('photographer', 'packages'));
    }
}
