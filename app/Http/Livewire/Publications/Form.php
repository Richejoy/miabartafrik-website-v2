<?php

namespace App\Http\Livewire\Publications;

use Livewire\Component;
use App\Models\Publication;

class Form extends Component
{
    public $content;

    public function save()
    {
        $this->validate([
            'content' => ['required', 'min:10'],
        ]);

        $publication = Publication::create([
            'content' => $this->content,
            'user_id' => auth()->id(),
            'publication_state_id' => 1,
            'start_date' => now(),
            'end_date' => now(),
        ]);

        //event(new PublicationEvent($newsletter, ['action' => 'subscribe']));

        //session()->flash('success', "Merci pour votre souscription.");

        $this->emit('publications.messages.created');

        $this->reset('content');
    }

    public function render()
    {
        return view('livewire.publications.form');
    }
}
