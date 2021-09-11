<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;

class LibraryController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('libraries.index');
    }

    public function show(Request $request, Library $library)
    {
        return view('libraries.show', compact('library'));
    }

    public function edit(Request $request, Library $library)
    {
        abort_if((auth()->user()->library_id != $library->id), 403, 'Non autoriser');

        if ($request->isMethod('POST')) {
            if ($request->has('form')) {
                if ($request->form == 'local') {

                    $request->validate([
                        'photo' => 'required|mimes:jpeg,png,jpg,gif|max:10000',
                        'description' => 'required|min:6',
                    ]);

                    //upload file
                    if ($request->hasFile('photo') && $request->file('photo')->isValid()) {

                        //$uploadPath = $request->file('photo')->path();

                        //$extension = $request->file('photo')->extension();

                        //$name = $request->file('photo')->getClientOriginalName();

                        $filename = time() . '.' . $request->file('photo')->extension();

                        $storePath = $request->file('photo')->storeAs(env('FTP_UPLOADS_PATH') . "images/users/{$library->folder}", $filename, 'ftp');

                        $library->update([
                            'description' => $request->description,
                            'local' => $filename,
                            'remote' => self::ONLINE_URL . "libraries/images/users/{$library->folder}/" . $filename,
                        ]);

                        flashy()->success("Modifications éffectuées");
                    }

                }elseif ($request->form == 'remote') {
                                    
                    $request->validate([
                        'description' => 'required|min:6',
                        'remote' => 'required|url',
                    ]);

                    $library->update(array_merge(
                        $request->all(),
                        [
                            'local' => $request->remote,
                        ]
                    ));

                    flashy()->success("Modifications éffectuées");

                }

                auth()->user()->update([
                    'completed' => 3,
                ]);

                switch (auth()->user()->user_type_id) {
                    case 1:
                        return redirect()->route('bookcast.index');
                        break;

                    case 2:
                        return redirect()->route('member.package');
                        break;

                    case 3:
                        return redirect()->route('artist.package');
                        break;

                    case 4:
                        return redirect()->route('partner.package');
                        break;

                    case 5:
                        return redirect()->route('photographer.package');
                        break;
                    
                    default:
                        // code...
                        break;
                }
            }

            return back();
        }

        return view('libraries.edit', compact('library'));
    }
}