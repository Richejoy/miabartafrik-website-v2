<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('bookcast.events.index');
    }

    public function create(Request $request)
    {
        return view('bookcast.events.create');
    }

    public function show(Request $request, Event $event)
    {
        return view('bookcast.events.show', compact('event'));
    }

    public function edit(Request $request, Event $event)
    {
        return view('bookcast.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        return back();
    }
}
