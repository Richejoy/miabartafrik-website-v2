<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\ArtistArea;
use App\Models\UserLanguage;
use App\Models\Package;

class ArtistController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('artists.index');
    }

    public function create(Request $request)
    {
        $artist = Artist::where('user_id', auth()->id())->firstOrFail();

        return view('artists.create', compact('artist'));
    }

    public function store(Request $request)
    {
        $artist = Artist::where('user_id', auth()->id())->firstOrFail();

        if ($request->isMethod('POST')) {
            
            $this->validate($request, [
                'area_id' => 'required|array|size:3',
                'language_id' => 'required',
                'language_level_id' => 'required',
                'language_accent' => 'required|min:3',
            ]);

            if ($artist->area_max == 0) {

                try {

                    DB::beginTransaction();

                    foreach($request->area_id as $key => $value) {
                        ArtistArea::create([
                            'artist_id' => $artist->id,
                            'area_id' => $value,
                        ]);
                    }

                    UserLanguage::create(array_merge(
                        $request->only('language_id', 'language_level_id', 'language_accent'),
                        [
                            'user_id' => $artist->user_id,
                        ]
                    ));

                    $artist->update([
                        'area_max' => count($request->area_id),
                    ]);

                    DB::commit();

                    flashy()->success("Modifications éffectuées");
                            
                    return redirect()->route('pictures.edit', ['image' => $artist->user->image]);
                } catch (\Exception $ex) {
                    DB::rollback();

                    session()->flash('danger', "Impossible de vous inscrire " . $ex);
                }
            }

            return back()->withDanger("Vous avez atteind la limite exigée");
        }

        return back();
    }

    public function show(Request $request, Artist $artist)
    {
        return view('artists.show', compact('artist'));
    }

    public function edit(Request $request, Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

    public function update(Request $request, Artist $artist)
    {
        return back();
    }

    public function package(Request $request, Package $package = null)
    {
        $artist = Artist::where('user_id', auth()->id())->firstOrFail();

        if (!is_null($package)) {
            $artist->update([
                'package_id' => $package->id,
            ]);

            return redirect()->route('bookcast.index');
        }

        $packages = Package::where('user_type_id', $artist->user->user_type_id)->get();

        return view('artists.package', compact('artist', 'packages'));
    }
}