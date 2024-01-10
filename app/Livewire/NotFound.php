<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Page introuvable')]
class NotFound extends Component
{
    public function render()
    {
        return view('livewire.not-found');
    }
}
