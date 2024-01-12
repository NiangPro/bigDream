<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Administrateurs')]
class Admin extends Component
{
    public function render()
    {
        return view('livewire.superadmin.admin')->layout('components.layouts.superadmin',[
            'icon' => 'sunglasses'
        ]);
    }
}
