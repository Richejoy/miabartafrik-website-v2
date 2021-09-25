<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Library;
use App\Events\PublicationEvent;
use Illuminate\Support\Str;

class PublicationController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {

            $request->validate([
                'stateId' => ['required'],
                'content' => ['required', 'min:10'],
                'image' => ['nullable', 'file', 'max:1048576', 'mimes:jpeg,jpg,png,gif'],
                'audio' => ['nullable', 'file', 'max:1048576', 'mimes:mp3,wav'],
                'video' => ['nullable', 'file', 'max:1048576', 'mimes:mp3,mp4'],
            ]);

            $publication = Publication::create([
                'user_id' => auth()->id(),
                'start_date' => now(),
                'end_date' => now()->addYear(1),
                'published' => true,
                'publication_state_id' => $request->input('stateId'),
                'content' => $request->input('content'),
            ]);

            //upload file
            if ($request->hasFile('image') && $request->file('image')->isValid()) {

                //$mimeType = $request->file('media')->getMimeType();
                //$libraryTypeId = $this->getLibraryType($mimeType);

                //$uploadPath = $request->file('media')->path();

                //$extension = $request->file('media')->extension();

                //$name = $request->file('media')->getClientOriginalName();

                /*$filename = time() . '.' . $request->file('media')->extension();

                $storePath = $request->file('media')->storeAs(env('FTP_UPLOADS_PATH') . "publications", $filename, 'ftp');

                $library = Library::create([
                    'folder' => 'publications',
                    'local' => $filename,
                    'remote' => self::ONLINE_URL . "libraries/publications/" . $filename,
                    'description' => 'Pulication file',
                    'mime_type' => $mimeType,
                    'library_type_id' => $libraryTypeId,
                ]);

                $publication->libraries()->attach([$library->id]);*/
            }

            broadcast(new PublicationEvent($publication->load(['user.library', 'publicationState', 'users.library', 'libraries'])));

            return response()->json($publication);
        }

        return back()->withDanger('Error');
    }

    public function messages(Request $request)
    {
        $publicPublications = Publication::with(['user.library', 'publicationState', 'users.library', 'libraries'])
        ->publicly()
        ->latest()
        ->get();

        return $this->userMessages($request)
            ->merge($publicPublications);
    }

    public function userMessages(Request $request)
    {
        return Publication::with(['user.library', 'publicationState', 'users.library', 'libraries'])
        ->where([
            'user_id' => auth()->id(),
            'published' => true,
        ])
        ->latest()
        ->get();
    }
}
