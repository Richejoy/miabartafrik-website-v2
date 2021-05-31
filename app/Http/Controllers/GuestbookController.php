<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}
	
    public function index(Request $request)
    {
        return view('newsletters.index');
    }

    public function create(Request $request)
    {
        session()->put('verificationCode', $this->getFormVerificationCode());

        return view('newsletters.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'email' => 'required|email|min:3|max:40',
                'verification_code' => 'required',
            ]);

            Flashy::success("OK");

            return back()->withSuccess("OK");
        }

        return back();
    }
}
