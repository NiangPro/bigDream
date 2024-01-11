<div>

    @if($statut == 1)
        <button type="button" wire:click='changeStatut(0)' class="btn btn-warning">
            <i class="bi bi-reply-fill"></i> Retour 
        </button>
        @include('livewire.superadmin.agence.add')
    @elseif($statut == 2)
        @include('livewire.superadmin.agence.info')
    @else
        <button type="button" wire:click='changeStatut(1)' class="btn btn-info">
            <i class="bi bi-plus-square"></i>Ajouter
        </button>
        @include('livewire.superadmin.agence.list')
    @endif
</div>
