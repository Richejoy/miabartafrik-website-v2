<?php

namespace App\Http\Livewire\Publications;

use Livewire\Component;
use App\Models\Publication;

class Form extends Component
{
    public function mount()
    {
        
    }

    public function save($formData)
    {

        $publication = Publication::create([
            'content' => $formData['publicationContent'],
            'user_id' => auth()->id(),
            'publication_state_id' => $formData['publicationStateId'],
            'start_date' => now(),
            'end_date' => now()->addYear(1),
            'published' => true,
        ]);

        //event(new PublicationEvent($newsletter, ['action' => 'subscribe']));

        //session()->flash('success', "Merci pour votre souscription.");

        $this->emit('publicationCreated');
    }

    public function render()
    {
        return view('livewire.publications.form');
    }
}
