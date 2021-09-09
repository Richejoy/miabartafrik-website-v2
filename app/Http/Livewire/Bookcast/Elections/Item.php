<?php

namespace App\Http\Livewire\Bookcast\Elections;

use Livewire\Component;
use App\Models\ElectionUser;
use App\Models\Election;

class Item extends Component
{
    public $fetch = 'all';

    public $electionsUsers = null;

    public $electionUser = null;

    private $_election = null;

    public function mount($fetch = 'all', Election $election = null)
    {
        $this->fetch = $fetch;

        $this->_election = $election;
    }

    public function render()
    {
        if ($this->fetch == 'all') {
            $this->electionsUsers = ElectionUser::with(['user', 'election', 'library'])->where('election_id', $this->_election->id)->get();
        } else {
            $this->electionUser = ElectionUser::with(['user', 'election', 'library'])->find(1);
        }
        
        return view('livewire.bookcast.elections.item');
    }
}
