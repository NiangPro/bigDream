<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Agences")]
class Agences extends Component
{
    public $statut = 0;

    public function changeStatut($statut)
    {
        $this->statut = $statut;
    }
    public function render()
    {
        return view('livewire.superadmin.agence.agences')->layout('components.layouts.superadmin',[
            'icon' => 'bank'
        ]);
    }
}
