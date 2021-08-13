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
            if ($request->has('avatar')) {
                if ($request->avatar == 'url') {

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

                }elseif ($request->avatar == 'link') {
                                    
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

                return redirect()->route('bookcast.index');
            }

            return back();
        }

        return view('images.edit', compact('image'));
    }
}