<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Panier')]
class Cart extends Component
{
    public function render()
    {
        return view('livewire.cart');
    }
}
