<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page;

class Navbar extends Component
{
    public function render()
    {
        $pages = Page::all();

        return view('livewire.navbar', ['pages'=>$pages]);
    }
}
