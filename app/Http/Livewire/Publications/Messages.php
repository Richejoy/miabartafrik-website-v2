<?php

namespace App\Http\Livewire\Publications;

use Livewire\Component;
use App\Models\Publication;

class Messages extends Component
{
    protected $listerners = [
        'publicationCreated' => 'refresh',
        'handleRefresh' => 'refresh',
    ];

    public function refresh()
    {
        return;
    }

    /**
     * Delete the publication and relationship
    */
    public function deletePublication(Publication $publication)
    {
        $publication->delete();

        $this->emitSelf('handleRefresh');
    }

    /**
     * Change the user connected publication state
    */
    public function setPublicationState(Publication $publication, int $publicationStateId)
    {
        $publication->update([
            'publication_state_id' => $publicationStateId,
        ]);

        $this->emitSelf('handleRefresh');
    }

    /**
     * Attach or Detach the connected user to publication likes users
    */
    public function toggleLikeUser(Publication $publication)
    {
        $publication->users()->toggle(auth()->id());

        $this->emitSelf('handleRefresh');
    }

    public function render()
    {
        $userPublications = Publication::with(['user', 'publicationState', 'users', 'libraries'])
        ->where([
            'user_id' => auth()->id(),
            'published' => true,
        ])->latest()->get();

        $publicPublications = Publication::with(['user', 'publicationState', 'users', 'libraries'])->publicly()->latest()->get();

        $publications = $userPublications->merge($publicPublications);

        return view('livewire.publications.messages', compact('userPublications', 'publicPublications', 'publications'));
    }
}
