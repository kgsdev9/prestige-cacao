<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header')

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="card">

                            <div class="card-body">
                                <div>
                                    <h4 class="mb-0">Détails Personnels</h4>
                                    <p class="mb-4">Modifiez vos informations personnelles et votre adresse.</p>
                                    <form wire:submit.prevent="updateProfile" class="row gx-3 needs-validation">
                                        <div class="form-floating mb-3 col-12 col-md-6">
                                            <input type="text" id="profileEditFname" wire:model="prenom" class="form-control" placeholder="Prénom" required="">
                                            <label for="profileEditFname">Prénom</label>
                                            <div class="invalid-feedback">Veuillez entrer le prénom.</div>
                                        </div>

                                        <div class="form-floating mb-3 col-12 col-md-6">
                                            <input type="text" id="profileEditLname" wire:model="nom" class="form-control" placeholder="Nom" required="">
                                            <label for="profileEditLname">Nom</label>
                                            <div class="invalid-feedback">Veuillez entrer le nom.</div>
                                        </div>

                                        <div class="form-floating mb-3 col-12 col-md-6">
                                            <input type="text" id="profileEditPhone" wire:model="telephone" class="form-control" placeholder="Téléphone" required="">
                                            <label for="profileEditPhone">Téléphone</label>
                                            <div class="invalid-feedback">Veuillez entrer le numéro de téléphone.</div>
                                        </div>

                                        <div class="form-floating mb-3 col-12 col-md-6">
                                            <input type="email" id="profileEditEmail" wire:model="email" class="form-control" placeholder="Email" required="">
                                            <label for="profileEditEmail">Email</label>
                                            <div class="invalid-feedback">Veuillez entrer l'email.</div>
                                        </div>

                                        <div class="form-floating mb-3 col-12 col-md-6">
                                            <input type="text" id="profileEditWhatsapp" wire:model="whattssap" class="form-control" placeholder="WhatsApp">
                                            <label for="profileEditWhatsapp">WhatsApp</label>
                                        </div>

                                        <div class="form-floating mb-3 col-6">
                                            <input type="file" id="profileEditPhoto" wire:model="photo" class="form-control" placeholder="Photo" accept="image/*">
                                            <label for="profileEditPhoto">Photo</label>
                                        </div>
                                        <div class="form-floating mb-3 col-12 col-md-6">
                                            <select id="profileEditVille" wire:model="ville_id" class="form-select">
                                                <option value="" disabled selected>Sélectionnez une ville</option>
                                                @foreach($listevilles as $ville)
                                                    <option value="{{ $ville->id }}">{{ $ville->libelleville }}</option>
                                                @endforeach
                                            </select>
                                            <label for="profileEditVille">Ville</label>
                                        </div>

                                        <div class="form-floating mb-3 col-12 col-md-6">
                                            <select id="profileEditPays" wire:model="pays_id" class="form-select">
                                                <option value="" disabled selected>Sélectionnez un pays</option>
                                                @foreach($listepays as $pays)
                                                    <option value="{{ $pays->id }}">{{ $pays->libellepays }}</option>
                                                @endforeach
                                            </select>
                                            <label for="profileEditPays">Pays</label>
                                        </div>


                                        <div class="form-floating mb-3 col-12">
                                            <select id="profileEditSpecialite" wire:model="specialite_id" class="form-select">
                                                <option value="" disabled>Sélectionnez une spécialité</option>
                                                @foreach($specialites as $specialite)
                                                    <option value="{{ $specialite->id }}">{{ $specialite->libellespecialite }}</option>
                                                @endforeach
                                            </select>
                                            <label for="profileEditSpecialite">Spécialité</label>
                                        </div>

                                        <div class="form-floating mb-3 col-12">
                                            <textarea id="profileEditDescription" wire:model="description" class="form-control" rows="4" placeholder="Description"></textarea>
                                            <label for="profileEditDescription">Description</label>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Mettre à jour le profil</button>
                                        </div>

                                        @if (session()->has('message'))
                                            <div class="alert alert-success mt-3">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    </form>






                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
</div>
