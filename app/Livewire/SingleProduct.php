<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Détail du Produit")]
class SingleProduct extends Component
{
    public function render()
    {
        return view('livewire.single-product');
    }
}
