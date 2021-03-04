<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page;

class PageDetails extends Component
{
    public $pageId;

    public function render()
    {
        //$page = Page::where('id', $this->id)->first();
        $page = Page::find($this->pageId);

        return view('livewire.page-details', ['page'=>$page]);
    }
}
