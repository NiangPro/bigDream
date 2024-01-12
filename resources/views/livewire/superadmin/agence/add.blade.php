<div class="card mt-3">
    <div class="card-header">
        <div class="card-title ">Formulaire d'ajout dépôt</div>
    </div>
    <div class="card-body">
        <form wire:submit='store'>
            <div class="row">
                <div class="col-md-6  has-validation">
                    <label for="nom" class="form-label">Nom <span class="text-danger">*</span></label>
                    <input type="text" wire:model='nom' class="form-control  @error('nom') is-invalid @enderror" id="nom">
                    @error('nom') <span class="text-red">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6  has-validation">
                    <label for="adresse" class="form-label">Adresse <span class="text-danger">*</span></label>
                    <input type="text" wire:model='adresse' class="form-control  @error('adresse') is-invalid @enderror"  id="adresse">
                    @error('adresse') <span class="text-red">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 has-validation">
                    <label for="tel" class="form-label">Téléphone <span class="text-danger">*</span></label>
                    <input type="text" wire:model='tel'  class="form-control @error('tel') is-invalid @enderror" >
                    @error('tel') <span class="text-red">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6  has-validation">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" wire:model='email'  class="form-control @error('email') is-invalid @enderror" >
                    @error('email') <span class="text-red">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-8 mt-2  has-validation">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control @error('image') is-invalid @enderror" wire:model='image' type="file" id="image_depot">
                    <div wire:loading wire:target="image" class="text-success">Téléchargement...</div>
                    @error('image') <span class="text-red">{{ $message }}</span> @enderror
                </div>
                
                @if ($isImage) 
                    <div class="col-md-4 mt-3">
                        <img src="{{ $image->temporaryUrl() }}" id="img_uploaded" height="200" class="img-fluid border rounded-5 shadow-lg" alt="Image depot">
                    </div>
                @endif
                
            </div>
            <button type="submit"  class="btn btn-info mt-3">
                <i class="bi bi-clipboard-plus"></i>Ajouter
            </button>
        </form>
    </div>
</div>
