<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Connexion')]
class Login extends Component
{
    public $title = 'Connexion';
    public $statut = 0;

    public function changeStatut()
    {
        if ($this->statut == 0) {
            $this->statut = 1;
            $this->title = 'Inscription';
        }else{
            $this->statut = 0;
            $this->title = 'Connexion';
        }

        $this->redirect(route('dashboard'));
        // $this->redirect(route('dashboard'), navigate:true);
    }
    public function render()
    {
        return view('livewire.login');
    }
}
