<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Accueil')]
class Super extends Component
{
    public function render()
    {
        return view('livewire.superadmin.super')->layout('components.layouts.superadmin',[
            'icon' => 'house'
        ]);
    }
}
