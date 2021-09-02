<?php

namespace App\Http\Livewire\Publications;

use Livewire\Component;
use App\Models\Publication;

class Messages extends Component
{
    protected $listerners = [
        'publications.messages.created' => 'refreshPublications',
    ];

    public function mount()
    {
        
    }

    public function refreshPublications()
    {
        
    }

    public function render()
    {
        $publications = Publication::latest()->get();

        return view('livewire.publications.messages', compact('publications'));
    }
}
