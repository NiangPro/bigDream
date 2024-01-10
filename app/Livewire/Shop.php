<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Boutique')]
class Shop extends Component
{
    public function render()
    {
        return view('livewire.shop');
    }
}
