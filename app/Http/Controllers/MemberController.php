<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Package;
use App\Models\Image;

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

        $image = Image::create([
            'folder' => 'members',
            'url' => 'https://miabartafrik.com/images/members/cover.jpg',
            'link' => 'https://miabartafrik.com/images/members/cover.jpg',
            'description' => 'Photo de couverture',
        ]);
        
        if (!is_null($package)) {
            $member->update([
                'image_id' => $image->id,
                'package_id' => $package->id,
                'paid' => (bool) ($package->price == 0),
            ]);

            return redirect()->route('bookcast.index');
        }
        
        $packages = Package::where('user_type_id', $member->user->user_type_id)->get();

        return view('members.package', compact('member', 'packages'));
    }
}
