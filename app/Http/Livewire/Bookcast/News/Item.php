<?php

namespace App\Http\Livewire\Bookcast\News;

use Livewire\Component;
use App\Models\News;

class Item extends Component
{
    public $item;

    public function mount(News $item)
    {
        $this->item = $item;
    }

    public function render()
    {
        return view('livewire.bookcast.news.item');
    }
}
