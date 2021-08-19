<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Package;

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

    public function package(Request $request, Package $package = null)
    {
        $member = Member::where('user_id', auth()->id())->firstOrFail();
        
        if (!is_null($package)) {
            $member->update([
                'package_id' => $package->id,
            ]);

            return redirect()->route('bookcast.index');
        }
        
        $packages = Package::where('user_type_id', 2)->get();

        return view('members.package', compact('member', 'packages'));
    }
}
