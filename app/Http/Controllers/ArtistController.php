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
            
            if ($request->has('form')) {
                switch ($request->form) {
                    case 'artisticArea':
                        
                        $this->validate($request, [
                            'artistic_area_id' => 'required|array|size:3',
                        ]);

                        if ($artist->artistic_area_max == 0) {
                            if (is_array($request->artistic_area_id)) {
                                foreach($request->artistic_area_id as $key => $value) {
                                    ArtistArtisticArea::create([
                                        'artist_id' => $artist->id,
                                        'artistic_area_id' => $value,
                                    ]);
                                }

                                $artist->update([
                                    'artistic_area_max' => count($request->artistic_area_id),
                                ]);
                            }

                            return back()->withSuccess("Informations pris en compte");
                        }

                        return back()->withDanger("Vous avez atteind la limite exigée");

                        break;

                    case 'language':
                        $this->validate($request, [
                            'language_id' => 'required',
                            'language_level_id' => 'required',
                            'language_accent' => 'required|min:3',
                        ]);
                        
                        ArtistLanguage::create(array_merge(
                            $request->all(),
                            [
                                'artist_id' => $artist->id,
                            ]
                        ));

                        if ($request->leave_page || ($request->leave_page == 'on')) {
                            return redirect()->route('pictures.edit', ['image' => $artist->user->image]);
                        }

                        return back()->withSuccess("Informations pris en compte");

                        break;
                    
                    default:
                        // code...
                        break;
                }
            }
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

        return view('artists.package', compact('packages'));
    }
}
