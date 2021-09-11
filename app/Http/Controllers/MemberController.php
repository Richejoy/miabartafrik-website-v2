<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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

    public function create(Request $request)
    {
        $member = Member::where('user_id', auth()->id())->firstOrFail();

        return view('members.create', compact('member'));
    }

    public function store(Request $request)
    {
        $member = Member::where('user_id', auth()->id())->firstOrFail();

        if ($request->isMethod('POST')) {
            
            $this->validate($request, [
                'work_id' => 'required',
            ]);

            try {

                DB::beginTransaction();

                $member->update($request->all());

                auth()->user()->update([
                    'completed' => 2,
                ]);

                DB::commit();

                flashy()->success("Modifications éffectuées");
                        
                return redirect()->route('library.edit', ['library' => $member->user->library]);
            } catch (\Exception $ex) {
                DB::rollback();

                session()->flash('danger', "Impossible de vous inscrire " . $ex);
            }
        }

        return back();
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

    public function update(Request $request, Member $member)
    {
        if ($request->isMethod('PUT')) {
            
        }
        
        return back();
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
                'completed' => 4,
            ]);

            return redirect()->route('bookcast.index');
        }
        
        $packages = Package::where('user_type_id', $member->user->user_type_id)->get();

        return view('members.package', compact('member', 'packages'));
    }
}
