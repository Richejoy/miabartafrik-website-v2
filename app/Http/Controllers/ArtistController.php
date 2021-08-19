<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\ArtistArtisticArea;
use App\Models\ArtistLanguage;
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
                'artistic_area_id' => 'required|array|size:3',
                'language_id' => 'required',
                'language_level_id' => 'required',
                'language_accent' => 'required|min:3',
            ]);

            if ($artist->artistic_area_max == 0) {

                foreach($request->artistic_area_id as $key => $value) {
                    ArtistArtisticArea::create([
                        'artist_id' => $artist->id,
                        'artistic_area_id' => $value,
                    ]);
                }

                ArtistLanguage::create(array_merge(
                    $request->only('language_id', 'language_level_id', 'language_accent'),
                    [
                        'artist_id' => $artist->id,
                    ]
                ));

                $artist->update([
                    'artistic_area_max' => count($request->artistic_area_id),
                ]);
                            
                return redirect()->route('pictures.edit', ['image' => $artist->user->image]);
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

        $packages = Package::where('user_type_id', 3)->get();

        return view('artists.package', compact('artist', 'packages'));
    }
}
