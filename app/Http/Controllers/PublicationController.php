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
        /*if ($request->isMethod('POST')) {

            $request->validate([
                'publication_state_id' => ['required'],
                'content' => ['required', 'min:10'],
                'media' => ['nullable', 'file', 'max:1048576', 'mimes:jpeg,jpg,png,mp3,mp4,pdf,wav,gif'],
            ]);

            $publication = Publication::create([
                'user_id' => auth()->id(),
                'start_date' => now(),
                'end_date' => now()->addYear(1),
                'published' => true,
                'publication_state_id' => $request->input('publication_state_id'),
                'content' => $request->input('content'),
            ]);

            //upload file
            if ($request->hasFile('media') && $request->file('media')->isValid()) {

                $mimeType = $request->file('media')->getMimeType();
                $libraryTypeId = $this->getLibraryType($mimeType);

                //$uploadPath = $request->file('media')->path();

                //$extension = $request->file('media')->extension();

                //$name = $request->file('media')->getClientOriginalName();

                $filename = time() . '.' . $request->file('media')->extension();

                $storePath = $request->file('media')->storeAs(env('FTP_UPLOADS_PATH') . "publications", $filename, 'ftp');

                $library = Library::create([
                    'folder' => 'publications',
                    'local' => $filename,
                    'remote' => self::ONLINE_URL . "libraries/publications/" . $filename,
                    'description' => 'Pulication file',
                    'mime_type' => $mimeType,
                    'library_type_id' => $libraryTypeId,
                ]);

                $publication->libraries()->attach([$library->id]);
            }

            event(new PublicationEvent(
                $publication->publication_state_id,
                $publication->content
            ));

            return response()->json($publication);
        }*/

        return [];

        //return back()->withDanger('Error');
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
