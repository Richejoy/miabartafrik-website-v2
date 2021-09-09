<?php

namespace App\Http\Livewire\Publications;

use Livewire\Component;
use App\Models\Publication;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $publicationStateId;

    public $content;

    public $media = null;

    public function mount()
    {
        $this->fill([
            'publicationStateId' => 1,
        ]);
    }

    public function setPublicationState(int $value)
    {
        $this->publicationStateId = $value;
    }

    public function updatedMedias()
    {
        $this->validate([
            'media' => ['file', 'max:1024', 'mimes:jpeg,jpg,png,mp3,mp4,pdf,wav,gif'],
        ]);
    }

    public function save()
    {
        $this->validate([
            'content' => ['required', 'min:10'],
            'media' => ['file', 'max:1024', 'mimes:jpeg,jpg,png,mp3,mp4,pdf,wav,gif'],
        ]);

        $publication = Publication::create([
            'content' => $this->content,
            'user_id' => auth()->id(),
            'publication_state_id' => $this->publicationStateId ?? 1,
            'start_date' => now(),
            'end_date' => now()->addYear(1),
            'published' => true,
        ]);

        //event(new PublicationEvent($newsletter, ['action' => 'subscribe']));

        //session()->flash('success', "Merci pour votre souscription.");

        $this->emitTo('publications.messages', 'publicationCreated');

        $this->reset(['publicationStateId', 'content']);
    }

    public function render()
    {
        return view('livewire.publications.form');
    }
}
