<?php

namespace App\View\Components\Auth;

use Illuminate\View\Component;
use App\Models\Member;
use App\Models\Work;

class MemberNextForm extends Component
{
    public $member;

    public $works;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($member)
    {
        $this->member = $member;
        
        $this->works = Work::all()->sortBy('id')->pluck(null, 'id');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.member-next-form');
    }
}
