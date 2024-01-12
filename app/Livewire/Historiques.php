<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Historiques")]
class Historiques extends Component
{
    public function render()
    {
        return view('livewire.superadmin.historiques')->layout('components.layouts.superadmin',[
            'icon' => 'archive-fill'
        ]);
    }
}
