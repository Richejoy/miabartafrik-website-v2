<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;

class ImageController extends Controller
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
        if ($request->isMethod('POST')) {
            if ($request->has('form')) {
                if ($request->form == 'local') {

                                $this->validate($request, [
                                    'photo' => 'required|mimes:jpeg,png,jpg,gif|max:10000',
                                    'description' => 'required|min:6',
                                ]);

                                //upload file
                                if ($request->hasFile('photo') && $request->file('photo')->isValid()) {

                                    //$uploadPath = $request->file('photo')->path();

                                    //$extension = $request->file('photo')->extension();

                                    //$name = $request->file('photo')->getClientOriginalName();

                                    $filename = time() . '.' . $request->file('photo')->extension();

                                    $storePath = $request->file('photo')->storeAs("public_html/libraries/uploads/users/{$library->folder}", $filename, 'ftp');

                                    $library->update([
                                        'description' => $request->description,
                                        'local' => $filename,
                                        'remote' => "http://miabartafrik.com/libraries/uploads/users/{$library->folder}/" . $filename,
                                    ]);

                                    flashy()->success("Modifications éffectuées");
                                }

                }elseif ($request->form == 'remote') {
                                    
                                $this->validate($request, [
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

                switch ($library->folder) {
                    case 'admins':
                        return redirect()->route('bookcast.index');
                        break;

                    case 'members':
                        return redirect()->route('member.package');
                        break;

                    case 'artists':
                        return redirect()->route('artist.package');
                        break;

                    case 'partners':
                        return redirect()->route('partner.package');
                        break;

                    case 'photographers':
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