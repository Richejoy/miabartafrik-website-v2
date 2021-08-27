<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('messages.index');
    }

    public function show(Request $request, Message $message)
    {
        return view('messages.show', compact('message'));
    }
}
