<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page;

class Navbar2 extends Component
{
    public $successMessage;

    public function render()
    {
        $pages = Page::all();

        return view('livewire.navbar2', ['pages'=>$pages])->with('successMessage', $this->successMessage);
    }
}
