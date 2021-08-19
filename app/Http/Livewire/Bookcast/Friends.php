<?php

namespace App\Http\Livewire\Bookcast;

use Livewire\Component;
use App\Models\UserFriend;

class Friends extends Component
{
    public $tab;

    public function mount($tab)
    {
        $this->tab = $tab;
    }

    public function render()
    {
        if ($this->tab == 'all') {
            //all friends
            $friends = UserFriend::where(['sender_id' => auth()->id(), 'confirmed' => true])->orWhere(['receiver_id' => auth()->id(), 'confirmed' => true])->get();
        } else {
            //favorites
            $friends = UserFriend::where(['sender_id' => auth()->id(), 'confirmed' => true, 'favorite' => true])->orWhere(['receiver_id' => auth()->id(), 'confirmed' => true, 'favorite' => true])->get();
        }

        return view('livewire.bookcast.friends', compact('friends'));
    }
}
