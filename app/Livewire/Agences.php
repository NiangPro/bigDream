<?php

namespace App\Livewire;

use App\Models\Depot;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

#[Title("Agences")]
class Agences extends Component
{
    use WithFileUploads,  WithPagination;
    
    public $statut = 0;
    public $isImage = false;
    public $depot = null;

    #[Rule('required', message:'Le nom est requis')]
    public $nom = '';

    #[Rule('nullable')]
    public $email = '';

    #[Rule('required', message:'L\'adresse est requise')]
    public $adresse = '';

    #[Rule('required', message:'Le téléphone est requis')]
    #[Rule('min:9', message:'Le téléphone doit avoir au minimum 9 chiffres')]
    #[Rule('max:9', message:'Le téléphone doit avoir au maximum 9 chiffres')]
    #[Rule('regex:/^[33|70|75|76|77|78|88]+[0-9]{7}$/', message:'Le téléphone doit commencer par  70, 75, 76, 77, 78, 33 ou 88')]
    public $tel = '';

    #[Rule('nullable')]
    #[Rule('image', message:'Veuillez sélectionner une image')]
    #[Rule('max:1024', message:'La taille maximale est de 1024 Mo')]
    public $image = null;
    

    public function updatedImage() {
        
        $name = explode('.', $this->image->path());
        $ext = array_pop($name);
        $ext = strtolower($ext);
        $this->isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'jfif']);

    }

    public function store()
    {
        $this->validate();

        if ($this->image) {
            $img_name = uniqid().".jpg";

            $this->image->storeAs("public/images", $img_name);

        }else{
            $img_name = "agence.jpeg";
        }

        Depot::create([
            'nom' => $this->nom,
            'adresse' => $this->adresse,
            'tel' => $this->tel,
            'email' => $this->email,
            'image' => $img_name,
            'statut' => $this->statut,
        ]);

        $this->dispatch('addAgence');
        $this->changeStatut(0);
    }

    public function getAgence(Depot $depot) {
        $this->depot = $depot;
        $this->changeStatut(2);
        $this->dispatch('test');
    }
    public function changeStatut($statut)
    {
        $this->statut = $statut;
        $this->reset('image', 'nom', 'adresse', 'tel', 'email');
    }
    public function render()
    {
        return view('livewire.superadmin.agence.agences',[
            "depots" => Depot::orderBy('nom', 'ASC')->paginate(6),
        ])->layout('components.layouts.superadmin',[
            'icon' => 'bank'
        ]);
    }
}
