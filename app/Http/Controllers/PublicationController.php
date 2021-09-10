<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

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
                'content' => ['required', 'min:10'],
                'publication_state_id' => ['required'],
                #'media' => ['file', 'max:1024', 'mimes:jpeg,jpg,png,mp3,mp4,pdf,wav,gif'],
            ]);

            $publication = Publication::create(array_merge(
                $request->except('_token'),
                [
                'user_id' => auth()->id(),
                'start_date' => now(),
                'end_date' => now()->addYear(1),
                'published' => true,
            ]));

            //event(new PublicationEvent($newsletter, ['action' => 'subscribe']));

            //session()->flash('success', "Merci pour votre souscription.");

            if ($request->ajax()) {
                return response()->json($request->except('_token'));
            }

            return back()->withSuccess("OK");
        }

        return back()->withDanger('Error');
    }
}
