<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Photographer;
use App\Models\PhotographerCategory;
use App\Models\Individual;
use App\Models\Society;
use App\Models\Package;
use App\Models\Library;

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
            
            if ($request->has('form')) {
                switch ($request->form) {
                    case 'individual':
                        $this->validate($request, [
                            'name' => 'required|min:5',
                            'person_level_id' => 'required',
                            'photographer_category_id' => 'required|array|size:3',
                            'g-recaptcha-response' => 'required|captcha',
                        ]);

                        //very important
                        if (!is_null($photographer->society)) {
                            return back()->withWarning("Désolé, vous ne pouvez pas être à la fois personne morale et personne physique.");
                        }

                        if ($photographer->photographerCategories->count() == 0) {

                            try {

                                DB::beginTransaction();

                                $individual = Individual::create($request->only('name'));

                                $photographer->update([
                                    'individual_id' => $individual->id,
                                    'person_type_id' => 1,
                                    'person_level_id' => $request->person_level_id,
                                ]);

                                $photographer->photographerCategories()->attach(
                                    $request->photographer_category_id
                                );

                                auth()->user()->update([
                                    'completed' => 2,
                                ]);

                                DB::commit();

                                flashy()->success("Modifications éffectuées");

                                return redirect()->route('library.edit', ['library' => $photographer->user->library]);
                            } catch (\Exception $ex) {
                                DB::rollback();

                                session()->flash('danger', "Impossible de vous inscrire " . $ex);
                            }
                        }

                        return back()->withDanger("Vous avez atteind la limite exigée");

                        break;

                    case 'corporation':
                        $this->validate($request, [
                            'name' => 'required|min:3',
                            'rccm' => 'required|min:3',
                            'nif' => 'required|min:3',
                            'person_level_id' => 'required',
                            'photographer_category_id' => 'required|array|size:3',
                            'g-recaptcha-response' => 'required|captcha',
                        ]);

                        //very important
                        if (!is_null($photographer->individual)) {
                            return back()->withWarning("Désolé, vous ne pouvez pas être à la fois personne physique et personne morale.");
                        }

                        if ($photographer->photographerCategories->count() == 0) {

                            try {

                                DB::beginTransaction();

                                $society = Society::create($request->only('name', 'rccm', 'nif'));

                                $photographer->update([
                                    'society_id' => $society->id,
                                    'person_type_id' => 2,
                                    'person_level_id' => $request->person_level_id,
                                ]);
                            
                                $photographer->photographerCategories()->attach(
                                    $request->photographer_category_id
                                );

                                auth()->user()->update([
                                    'completed' => 2,
                                ]);

                                DB::commit();

                                flashy()->success("Modifications éffectuées");

                                return redirect()->route('library.edit', ['library' => $photographer->user->library]);
                            } catch (\Exception $ex) {
                                DB::rollback();

                                session()->flash('danger', "Impossible de vous inscrire " . $ex);
                            }
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

    public function show(Request $request, Photographer $photographer)
    {
        abort_if(auth()->user()->blocked, 403, self::VIEW_BLOCKED_MESSAGE);

        return view('photographers.show', compact('photographer'));
    }

    public function edit(Request $request, Photographer $photographer)
    {
        return view('photographers.edit', compact('photographer'));
    }

    public function update(Request $request, Photographer $photographer)
    {
        if ($request->isMethod('PUT')) {
            
        }
        
        return back();
    }

    public function package(Request $request, Package $package = null)
    {
        $photographer = Photographer::where('user_id', auth()->id())->firstOrFail();

        $library = Library::create($this->getDefaultBackImage('photographers'));
        
        if (!is_null($package)) {
            $photographer->update([
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
        
        $packages = Package::where('user_type_id', $photographer->user->user_type_id)->get();

        return view('photographers.package', compact('photographer', 'packages'));
    }

    /* AJAX REQUEST */
    public function ray(Request $request)
    {
        if ($request->isMethod('POST')) {
            if ($request->ajax()) {
                $photographerCategories = PhotographerCategory::where('photographer_ray_id', $request->input('rayId'))->get();

                return response()->json($photographerCategories);
            }
        }

        return response()->json(['message' => 'Method not allowed']);
    }
}
