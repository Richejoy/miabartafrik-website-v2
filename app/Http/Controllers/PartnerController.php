<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Individual;
use App\Models\Society;
use App\Models\Package;
use App\Models\Library;

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
                            'g-recaptcha-response' => 'required|captcha',
                        ]);

                        //very important
                        if (!is_null($partner->society)) {
                            return back()->withWarning("Désolé, vous ne pouvez pas être à la fois personne morale et personne physique.");
                        }

                        if ($partner->areas->count() == 0) {

                            try {

                                DB::beginTransaction();

                                $individual = Individual::create($request->except('person_level_id', 'area_id'));

                                $partner->update([
                                    'individual_id' => $individual->id,
                                    'person_type_id' => 1,
                                    'person_level_id' => $request->person_level_id,
                                ]);

                                $partner->areas()->attach(
                                    $request->area_id
                                );

                                auth()->user()->update([
                                    'completed' => 2,
                                ]);

                                DB::commit();

                                flashy()->success("Modifications éffectuées");

                                return redirect()->route('library.edit', ['library' => $partner->user->library]);
                            } catch (\Exception $ex) {
                                DB::rollback();

                                session()->flash('danger', "Impossible de vous inscrire " . $ex);
                            }
                        }

                        return back()->withDanger("Vous avez atteind la limite exigée des domaines artistique");

                        break;

                    case 'corporation':
                        $this->validate($request, [
                            'name' => 'required|min:3',
                            'rccm' => 'required|min:3',
                            'nif' => 'required|min:3',
                            'person_level_id' => 'required',
                            'area_id' => 'required|array|size:3',
                            'g-recaptcha-response' => 'required|captcha',
                        ]);

                        //very important
                        if (!is_null($partner->individual)) {
                            return back()->withWarning("Désolé, vous ne pouvez pas être à la fois personne physique et personne morale.");
                        }

                        if ($partner->areas->count() == 0) {

                            try {

                                DB::beginTransaction();

                                $society = Society::create($request->except('person_level_id', 'area_id'));

                                $partner->update([
                                    'society_id' => $society->id,
                                    'person_type_id' => 2,
                                    'person_level_id' => $request->person_level_id,
                                ]);
                            
                                $partner->areas()->attach(
                                    $request->area_id
                                );

                                auth()->user()->update([
                                    'completed' => 2,
                                ]);

                                DB::commit();

                                flashy()->success("Modifications éffectuées");

                                return redirect()->route('library.edit', ['library' => $partner->user->library]);
                            } catch (\Exception $ex) {
                                DB::rollback();

                                session()->flash('danger', "Impossible de vous inscrire " . $ex);
                            }
                        }

                        return back()->withDanger("Vous avez atteind la limite exigée des domaines artistique");

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
        abort_if(auth()->user()->blocked, 403, self::VIEW_BLOCKED_MESSAGE);
        
        return view('partners.show', compact('partner'));
    }

    public function edit(Request $request, Partner $partner)
    {
        return view('partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        if ($request->isMethod('PUT')) {
            
        }
        
        return back();
    }

    public function package(Request $request, Package $package = null)
    {
        $partner = Partner::where('user_id', auth()->id())->firstOrFail();

        $library = Library::create($this->getDefaultBackImage('partners'));

        if (!is_null($package)) {
            $partner->update([
                'library_id' => $library->id,
                'package_id' => $package->id,
                'paid' => (bool) ($package->price == 0),
            ]);

            auth()->user()->update([
                'activated' => true,
                'can_login' => true,
                'completed' => 4,
            ]);

            return redirect()->route('bookcast.index');
        }
        
        $packages = Package::where('user_type_id', $partner->user->user_type_id)->get();

        return view('partners.package', compact('partner', 'packages'));
    }
}
