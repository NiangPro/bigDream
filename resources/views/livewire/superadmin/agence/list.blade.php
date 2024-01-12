<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 mt-3">
    @foreach($depots as $d)
    <div class="col-md-4">
        <div class="card card-cover rounded-4" style="background-image: url('storage/images/{{$d->image}}')">
            <div class="p-5 text-white">
                <h4 class="fw-bold mb-4">
                    {{str($d->nom)->limit(14)}}
                </h4>
                <button wire:click='getAgence({{$d->id}})' class="btn btn-purple"><i class="bi bi-eye-fill"></i></button>
                <button wire:click='changeStatut(2)' class="btn btn-success"><i class="bi bi-key"></i></button>
                <button wire:click='changeStatut(2)' class="btn btn-warning"><i class="bi bi-lock-fill"></i></button>
                <button wire:click='changeStatut(2)' class="btn btn-danger"><i class="bi bi-trash"></i></button>
            </div>
        </div>
    </div>
    @endforeach 

    {{ $depots->links() }}

</div>