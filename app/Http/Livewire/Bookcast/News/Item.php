<?php

namespace App\Http\Livewire\Bookcast\News;

use Livewire\Component;
use App\Models\News;

class Item extends Component
{
    public $fetch = 'all';

    public $news = null;

    public $item = null;

    public function mount($fetch = 'all')
    {
        $this->fetch = $fetch;
    }

    public function render()
    {
        if ($this->fetch == 'all') {
            $this->news = News::all();
        } else {
            $this->item = News::find(1);
        }

        return view('livewire.bookcast.news.item');
    }
}
