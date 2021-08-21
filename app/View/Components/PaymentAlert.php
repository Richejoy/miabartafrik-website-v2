<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Admin;
use App\Models\Member;
use App\Models\Artist;
use App\Models\Partner;
use App\Models\Photographer;

class PaymentAlert extends Component
{
    public $paid;

    public $tableName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        switch (intval(auth()->user()->user_type_id)) {
            case 1:
                $this->paid = Admin::where('user_id', auth()->id())->first()->paid;

                $this->tableName = 'admin';
                break;

            case 2:
                $this->paid = Member::where('user_id', auth()->id())->first()->paid;

                $this->tableName = 'member';
                break;

            case 3:
                $this->paid = Artist::where('user_id', auth()->id())->first()->paid;

                $this->tableName = 'artist';
                break;

            case 4:
                $this->paid = Partner::where('user_id', auth()->id())->first()->paid;

                $this->tableName = 'partner';
                break;

            case 5:
                $this->paid = Photographer::where('user_id', auth()->id())->first()->paid;

                $this->tableName = 'photographer';
                break;
            
            default:
                $this->paid = false;
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.payment-alert');
    }
}
