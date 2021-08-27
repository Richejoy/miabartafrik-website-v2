<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('notifications.index');
    }

    public function show(Request $request, Notification $notification)
    {
        return view('notifications.show', compact('notification'));
    }
}
