<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Library;
use App\Events\PublicationEvent;

class PublicationController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {

            return response()->json($request->all());

            $request->validate([
                'message' => ['required', 'min:10'],
                'state' => ['required'],
                #'media' => ['file', 'max:1024', 'mimes:jpeg,jpg,png,mp3,mp4,pdf,wav,gif'],
            ]);

            $publication = Publication::create([
                'user_id' => auth()->id(),
                'start_date' => now(),
                'end_date' => now()->addYear(1),
                'published' => true,
                'publication_state_id' => $request->input('state'),
                'content' => $request->input('message'),
            ]);

            //upload file
            if ($request->hasFile('media') && $request->file('media')->isValid()) {

                //$uploadPath = $request->file('media')->path();

                //$extension = $request->file('media')->extension();

                //$name = $request->file('media')->getClientOriginalName();

                $filename = time() . '.' . $request->file('media')->extension();

                $storePath = $request->file('media')->storeAs(env('FTP_UPLOADS_PATH') . "publications", $filename, 'ftp');

                $library = Library::create([
                    'description' => 'Pulication file',
                    'local' => $filename,
                    'remote' => self::ONLINE_URL . "libraries/publications/" . $filename,
                ]);

                $publication->libraries()->attach([$library->id]);
            }

            event(new PublicationEvent(
                $publication->publication_state_id,
                $publication->content
            ));

            return response()->json($publication);
        }

        return back()->withDanger('Error');
    }
}
