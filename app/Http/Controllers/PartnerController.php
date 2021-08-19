<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\PartnerArea;
use App\Models\Individual;
use App\Models\Society;
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
            
            if ($request->has('form')) {
                switch ($request->form) {
                    case 'individual':
                        $this->validate($request, [
                            'name' => 'required|min:5',
                            'person_level_id' => 'required',
                            'work_id' => 'required',
                            'area_id' => 'required|array|size:3',
                        ]);

                        //very important
                        if (!is_null($partner->society)) {
                            return back()->withWarning("Désolé, vous ne pouvez pas être à la fois personne morale et personne physique.");
                        }

                        if ($partner->area_max == 0) {

                            $individual = Individual::create($request->except('area_id'));

                            $partner->update([
                                'individual_id' => $individual->id,
                                'person_type_id' => 1,
                                'area_max' => count($request->area_id),
                            ]);

                            foreach($request->area_id as $key => $value) {
                                PartnerArea::create([
                                    'partner_id' => $partner->id,
                                    'area_id' => $value,
                                ]);
                            }

                            return redirect()->route('pictures.edit', ['image' => $partner->user->image]);
                        }

                        return back()->withDanger("Vous avez atteind la limite exigée");

                        break;

                    case 'corporation':
                        $this->validate($request, [
                            'name' => 'required|min:3',
                            'rccm' => 'required|min:3',
                            'nif' => 'required|min:3',
                            'area_id' => 'required|array|size:3',
                        ]);

                        //very important
                        if (!is_null($partner->individual)) {
                            return back()->withWarning("Désolé, vous ne pouvez pas être à la fois personne physique et personne morale.");
                        }

                        if ($partner->area_max == 0) {

                            $society = Society::create($request->except('area_id'));

                            $partner->update([
                                'society_id' => $society->id,
                                'person_type_id' => 2,
                                'area_max' => count($request->area_id),
                            ]);
                            
                            foreach($request->area_id as $key => $value) {
                                PartnerArea::create([
                                    'partner_id' => $partner->id,
                                    'area_id' => $value,
                                ]);
                            }

                            return redirect()->route('pictures.edit', ['image' => $partner->user->image]);
                        }

                        return back()->withDanger("Vous avez atteind la limite exigée");

                        break;

                    default:
                        // code...
                        break;
                }
            }
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
        $partner = Partner::where('user_id', auth()->id())->firstOrFail();

        if (!is_null($package)) {
            $partner->update([
                'package_id' => $package->id,
            ]);

            return redirect()->route('bookcast.index');
        }
        
        $packages = Package::where('user_type_id', 4)->get();

        return view('partners.package', compact('partner', 'packages'));
    }
}
