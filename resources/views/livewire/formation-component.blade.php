@section('title', 'Mes Formations')
<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header')

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="h4 mb-0">Liste de vos formations</h3>
                                <button wire:click="toggleForm" class="btn btn-primary btn-sm">
                                    {{ $showForm ? 'Annuler' : 'Ajouter une formation' }}
                                </button>
                            </div>

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            @if($showForm)
                                <div class="card p-3 mt-3 mx-2">
                                    <h5 class="mb-3">{{ $formationId ? 'Modifier la formation' : 'Nouvelle Formation' }}</h5>
                                    <form wire:submit.prevent="{{ $formationId ? 'updateFormation' : 'saveFormation' }}">
                                        <div class="row">
                                            <div class="col-md-6 mb-3 form-floating">
                                                <input type="text" class="form-control" id="nom_ecole" placeholder=" " wire:model="nom_ecole">
                                                <label for="nom_ecole">Nom de l'école</label>
                                                @error('nom_ecole') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="col-md-6 mb-3 form-floating">
                                                <input type="text" class="form-control" id="diplome" placeholder=" " wire:model="diplome">
                                                <label for="diplome">Diplôme</label>
                                                @error('diplome') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="col-md-6 mb-3 form-floating">
                                                <input type="text" class="form-control" id="domaine_etudes" placeholder=" " wire:model="domaine_etudes">
                                                <label for="domaine_etudes">Domaine d'études</label>
                                                @error('domaine_etudes') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="col-md-6 mb-3 form-floating">
                                                <input type="number" class="form-control" id="annee_debut" placeholder=" " wire:model="annee_debut">
                                                <label for="annee_debut">Année de début</label>
                                                @error('annee_debut') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="col-md-6 mb-3 form-floating">
                                                <input type="number" class="form-control" id="annee_fin" placeholder=" " wire:model="annee_fin">
                                                <label for="annee_fin">Année de fin</label>
                                                @error('annee_fin') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-3">
                                            <button type="button" class="btn btn-secondary me-2" wire:click="toggleForm">Annuler</button>
                                            <button type="submit" class="btn btn-primary">{{ $formationId ? 'Mettre à jour' : 'Enregistrer' }}</button>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="table-responsive mt-3">
                                    <table class="table mb-0 table-hover table-centered text-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Nom de l'école</th>
                                                <th>Diplôme</th>
                                                <th>Domaine d'études</th>
                                                <th>Période</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($this->listeFormation as $formation)
                                                <tr>
                                                    <td>{{ $formation->nom_ecole }}</td>
                                                    <td>{{ $formation->diplome }}</td>
                                                    <td>{{ $formation->domaine_etudes }}</td>
                                                    <td>{{ $formation->annee_debut }} - {{ $formation->annee_fin }}</td>
                                                    <td>
                                                        <button wire:click="editFormation({{ $formation->id }})" class="btn btn-sm btn-info">Modifier</button>
                                                        <button wire:click="deleteFormation({{ $formation->id }})" class="btn btn-sm btn-danger">Supprimer</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
