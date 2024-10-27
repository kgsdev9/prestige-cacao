
@section('title', 'Mes Competences')
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
                                <h3 class="h4 mb-0">Liste de vos expériences</h3>
                                <button wire:click="toggleForm" class="btn btn-primary btn-sm">
                                    {{ $showForm ? 'Annuler' : 'Ajouter une expérience' }}
                                </button>
                            </div>

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            @if($showForm)
                                <div class="card p-3 mt-3 mx-2">
                                    <h5 class="mb-3">{{ $experienceId ? 'Modifier l\'expérience' : 'Nouvelle Expérience' }}</h5>
                                    <form wire:submit.prevent="{{ $experienceId ? 'updateExperience' : 'saveExperience' }}">
                                        <div class="row">
                                            <div class="col-md-6 mb-3 form-floating">
                                                <input type="text" class="form-control" id="intitule" placeholder=" " wire:model="intitule">
                                                <label for="intitule">Intitulé</label>
                                                @error('intitule') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="col-md-6 mb-3 form-floating">
                                                <input type="text" class="form-control" id="nom_entreprise" placeholder=" " wire:model="nom_entreprise">
                                                <label for="nom_entreprise">Nom de l'entreprise</label>
                                                @error('nom_entreprise') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="col-md-6 mb-3 form-floating">
                                                <select class="form-select" id="typeemploi_id" wire:model="typeemploi_id" aria-label="Type d'Emploi">
                                                    <option value="" selected>Sélectionnez un type d'emploi</option>
                                                    @foreach($this->listetypeemploi as $typeemploi)
                                                        <option value="{{ $typeemploi->id }}">{{ $typeemploi->libelletypeemploi }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="typeemploi_id">Type d'Emploi</label>
                                                @error('typeemploi_id') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="col-md-6 mb-3 form-floating">
                                                <input type="text" class="form-control" id="localisation" placeholder=" " wire:model="localisation">
                                                <label for="localisation">Localisation</label>
                                                @error('localisation') <span class="text-danger">{{ $message }}</span> @enderror
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

                                            <div class="col-12 mb-3 form-floating">
                                                <textarea class="form-control" placeholder=" " id="description" wire:model="description" style="height: 100px;"></textarea>
                                                <label for="description">Description</label>
                                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-3">
                                            <button type="button" class="btn btn-secondary me-2" wire:click="toggleForm">Annuler</button>
                                            <button type="submit" class="btn btn-primary">{{ $experienceId ? 'Mettre à jour' : 'Enregistrer' }}</button>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="table-responsive mt-3">
                                    <table class="table mb-0 table-hover table-centered text-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Intitulé</th>
                                                <th>Nom de l'entreprise</th>
                                                <th>Localisation</th>
                                                <th>Période</th>

                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($this->listeExperience as $experience)
                                                <tr>
                                                    <td>{{ $experience->intitule }}</td>
                                                    <td>{{ $experience->nom_entreprise }}</td>
                                                    <td>{{ $experience->localisation }}</td>
                                                    <td>{{ $experience->mois_debut }}/{{ $experience->annee_debut }} - {{ $experience->mois_fin }}/{{ $experience->annee_fin }}</td>

                                                    <td>
                                                        <span class="dropdown dropstart">
                                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="dropdownMenu-{{ $experience->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <span class="dropdown-menu" aria-labelledby="dropdownMenu-{{ $experience->id }}">
                                                                <span class="dropdown-header">Options</span>
                                                                <a class="dropdown-item" href="#" wire:click="editExperience({{ $experience->id }})">
                                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                                    Modifier
                                                                </a>
                                                                <a class="dropdown-item" href="#" wire:click="deleteExperience({{ $experience->id }})">
                                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                                    Supprimer
                                                                </a>
                                                            </span>
                                                        </span>
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
