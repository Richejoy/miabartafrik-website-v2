<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('images.index');
    }

    public function show(Request $request, Image $image)
    {
        return view('images.show', compact('image'));
    }

    public function edit(Request $request, Image $image)
    {
        if ($request->isMethod('POST')) {
            if ($request->has('form')) {
                if ($request->form == 'url') {

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

                                    $storePath = $request->file('photo')->storeAs("public_html/images/uploads/users/{$image->folder}", $filename, 'ftp');

                                    $image->update([
                                        'description' => $request->description,
                                        'url' => $filename,
                                        'link' => "http://miabartafrik.com/images/uploads/users/{$image->folder}/" . $filename,
                                    ]);

                                    flashy()->success("Modifications éffectuées");
                                }

                }elseif ($request->form == 'link') {
                                    
                                $this->validate($request, [
                                    'description' => 'required|min:6',
                                    'link' => 'required|url',
                                ]);

                                $image->update(array_merge(
                                    $request->all(),
                                    [
                                        'url' => $request->link,
                                    ]
                                ));

                                flashy()->success("Modifications éffectuées");

                }

                switch ($image->folder) {
                    case 'admins':
                    case 'members':
                        return redirect()->route('bookcast.index');
                        break;

                    case 'artists':
                        return redirect()->route('artists.package');
                        break;

                    case 'partners':
                        return redirect()->route('partners.package');
                        break;

                    case 'photographers':
                        return redirect()->route('photographers.package');
                        break;
                    
                    default:
                        // code...
                        break;
                }
            }

            return back();
        }

        return view('images.edit', compact('image'));
    }
}