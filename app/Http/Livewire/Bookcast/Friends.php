<?php

namespace App\Http\Livewire\Bookcast;

use Livewire\Component;
use App\Models\UserFriend;

class Friends extends Component
{
    protected $listerners = [
        'handleRefresh' => 'refresh',
    ];

    public function refresh()
    {
        return;
    }

    /**
     * Toggle user in favorite
    */
    public function toggleFavoriteFriend(int $id)
    {
        $userFriend = UserFriend::find($id);

        $userFriend->update([
            'favorite' => !$userFriend->favorite,
        ]);
        
        $this->emitSelf('handleRefresh');
    }

    public function render()
    {
        $allFriends = UserFriend::with('receiver')
        ->allFriends(auth()->id())
        ->latest()
        ->get();

        $favoriteFriends = UserFriend::with('receiver')
        ->favoriteFriends(auth()->id())
        ->latest()
        ->get();

        return view('livewire.bookcast.friends', compact('allFriends', 'favoriteFriends'));
    }
}
