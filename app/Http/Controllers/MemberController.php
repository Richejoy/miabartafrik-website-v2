<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Package;
use App\Models\Library;

class MemberController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('members.index');
    }

    public function show(Request $request, Member $member)
    {
        abort_if(auth()->user()->blocked, 403, self::VIEW_BLOCKED_MESSAGE);
        
        return view('members.show', compact('member'));
    }

    public function edit(Request $request, Member $member)
    {
        return view('members.edit', compact('member'));
    }

    public function package(Request $request, Package $package = null)
    {
        $member = Member::where('user_id', auth()->id())->firstOrFail();

        $library = Library::create($this->getDefaultBackImage('members'));
        
        if (!is_null($package)) {
            $member->update([
                'library_id' => $library->id,
                'package_id' => $package->id,
                'paid' => (bool) ($package->price == 0),
            ]);

            auth()->user()->update([
                'activated' => true,
                'can_login' => true,
            ]);

            return redirect()->route('bookcast.index');
        }
        
        $packages = Package::where('user_type_id', $member->user->user_type_id)->get();

        return view('members.package', compact('member', 'packages'));
    }
}
