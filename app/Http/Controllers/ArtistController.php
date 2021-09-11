<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\AreaArtist;
use App\Models\LanguageUser;
use App\Models\Package;
use App\Models\Library;

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
                'name' => 'required|min:3',
                'area_id' => 'required|array|size:3',
                'language_id' => 'required',
                'language_level_id' => 'required',
            ]);

            if ($artist->area_max == 0) {

                try {

                    DB::beginTransaction();

                    foreach($request->area_id as $key => $value) {
                        AreaArtist::create([
                            'artist_id' => $artist->id,
                            'area_id' => $value,
                        ]);
                    }

                    LanguageUser::create(array_merge(
                        $request->only('language_id', 'language_level_id', 'language_accent'),
                        [
                            'user_id' => $artist->user_id,
                        ]
                    ));

                    $artist->update([
                        'name' => $request->name,
                        'area_max' => count($request->area_id),
                    ]);

                    auth()->user()->update([
                        'completed' => 2,
                    ]);

                    DB::commit();

                    flashy()->success("Modifications éffectuées");
                            
                    return redirect()->route('library.edit', ['library' => $artist->user->library]);
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
        abort_if(auth()->user()->blocked, 403, self::VIEW_BLOCKED_MESSAGE);
        
        return view('artists.show', compact('artist'));
    }

    public function edit(Request $request, Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

    public function update(Request $request, Artist $artist)
    {
        if ($request->isMethod('PUT')) {
            
        }
        
        return back();
    }

    public function package(Request $request, Package $package = null)
    {
        $artist = Artist::where('user_id', auth()->id())->firstOrFail();

        $library = Library::create($this->getDefaultBackImage('artists'));

        if (!is_null($package)) {
            $artist->update([
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

        $packages = Package::where('user_type_id', $artist->user->user_type_id)->get();

        return view('artists.package', compact('artist', 'packages'));
    }
}
