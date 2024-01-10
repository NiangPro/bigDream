<div wire:ignore.self class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="loginModalLabel">{{$title}}</h1>
          <button type="button" wire:click='changeStatut' class="btn btn-outline-primary"> @if($statut == 0) Créer un compte @else Connexion @endif</button>
        </div>
        <div class="modal-body" >
          @if($statut == 0)
            <form>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Email</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="recipient-password">
                </div>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-outline-primary">Se connecter</button>
            </form>
          @else 

          @endif
        </div>
      </div>
    </div>
  </div>