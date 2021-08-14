<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Package;

class PartnerController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('partners.index');
    }

    public function create(Request $request)
    {
        $partner = Partner::where('user_id', auth()->id())->firstOrFail();

        return view('partners.create', compact('partner'));
    }

    public function store(Request $request)
    {
        $partner = Partner::where('user_id', auth()->id())->firstOrFail();

        if ($request->isMethod('POST')) {
            dd($request->all());
        }

        return back();
    }

    public function show(Request $request, Partner $partner)
    {
        return view('partners.show', compact('partner'));
    }

    public function edit(Request $request, Partner $partner)
    {
        return view('partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        return back();
    }

    public function package(Request $request, Package $package = null)
    {
        if (!is_null($package)) {
            dd($package->id);
        }
        
        $packages = Package::where('user_type_id', 4)->get();

        return view('partners.package', compact('packages'));
    }
}
