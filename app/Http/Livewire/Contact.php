<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $successMessage;

    public function render()
    {
        return view('livewire.contact')->with('successMessage', $this->successMessage);
    }
}
