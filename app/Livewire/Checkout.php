<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Commander')]
class Checkout extends Component
{
    public function render()
    {
        return view('livewire.checkout');
    }
}
