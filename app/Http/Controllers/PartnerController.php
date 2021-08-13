<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

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
        return view('partners.create');
    }

    public function store(Request $request)
    {
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
}
