@section('title', 'Gestion des Emplois')

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
                                <h3 class="h4 mb-0">Liste des Emplois</h3>
                                <button wire:click="toggleForm" class="btn btn-primary btn-sm">
                                    {{ $tJobId ? 'Annuler' : 'Ajouter un Emploi' }}
                                </button>
                            </div>

                            <!-- Affichage des messages de succès -->
                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            <!-- Formulaire pour ajouter ou modifier un emploi -->
                            @if ($showForm)
                                <div class="card p-3 mt-3">
                                    <h5 class="mb-3">{{ $tJobId ? 'Modifier l\'Emploi' : 'Ajouter un Emploi' }}</h5>
                                    <form wire:submit.prevent="saveTJob">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="title" placeholder=" " wire:model="title">
                                            <label for="title">Titre</label>
                                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="description" placeholder=" " wire:model="description"></textarea>
                                            <label for="description">Description</label>
                                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="slug" placeholder=" " wire:model="slug">
                                            <label for="slug">Slug</label>
                                            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                      <!-- Sélecteur pour Spécialité -->
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="t_libellespecialite" wire:model="t_libellespecialite">
                                                <option value="">Sélectionnez une spécialité</option>
                                                @foreach ($specialites as $specialite)
                                                    <option value="{{ $specialite->id }}">{{ $specialite->libellespecialite }}</option>
                                                @endforeach
                                            </select>
                                            <label for="t_libellespecialite">Spécialité</label>
                                            @error('t_libellespecialite') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>


                                        <!-- Select pour Pays -->
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="tpays_id" wire:model="tpays_id">
                                                <option value="">Sélectionnez un pays</option>
                                                @foreach ($pays as $paysItem)
                                                    <option value="{{ $paysItem->id }}">{{ $paysItem->libellepays }}</option>
                                                @endforeach
                                            </select>
                                            <label for="tpays_id">Pays</label>
                                            @error('tpays_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <!-- Select pour Ville -->
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="tville_id" wire:model="tville_id">
                                                <option value="">Sélectionnez une ville</option>
                                                @foreach ($villes as $villeItem)
                                                    <option value="{{ $villeItem->id }}">{{ $villeItem->libelleville }}</option>
                                                @endforeach
                                            </select>
                                            <label for="tville_id">Ville</label>
                                            @error('tville_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <!-- Select pour Type d'Emploi -->
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="typeemploi_id" wire:model="typeemploi_id">
                                                <option value="">Sélectionnez un type d'emploi</option>
                                                @foreach ($typesEmploi as $typeEmploiItem)
                                                    <option value="{{ $typeEmploiItem->id }}">{{ $typeEmploiItem->libelletypeemploi }}</option>
                                                @endforeach
                                            </select>
                                            <label for="typeemploi_id">Type d'emploi</label>
                                            @error('typeemploi_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <button class="btn btn-primary btn-sm">Enregistrer</button>
                                        </div>
                                    </form>
                                </div>
                            @endif

                            <!-- Tableau des Emplois -->
                            <div class="table-responsive">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <div class="row">
                                            <div class="col pe-0">
                                                <form>
                                                    <input type="search" class="form-control" placeholder="Search by Name">
                                                </form>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="btn btn-secondary">Export CSV</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Table -->
                                    <div class="table-responsive">
                                        <table class="table table-hover table-centered">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Titre</th>
                                                    <th>Spécialité</th>
                                                    <th>Description</th>
                                                    <th>Pays</th>
                                                    <th>Ville</th>
                                                    <th>Type d'Emploi</th>
                                                    <th>Visiteur</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tJobs as $job)
                                                    <tr>
                                                        <td>{{ $job->id }}</td>
                                                        <td>{{ $job->title }}</td>
                                                        <td>{{ $job->specialite->libellespecialite ?? 'Non spécifié' }}</td>
                                                        <td>{!! Str::limit($job->description, 100) !!}</td>
                                                        <td>{{ $job->pays->libellepays ?? 'Non spécifié' }}</td>
                                                        <td>{{ $job->ville->libelleville?? 'rien'}}</td>
                                                        <td>{{ $job->typeEmploi->libelletypeemploi ?? 'Non spécifié' }}</td>
                                                        <td>{{ $job->visiteur ?? 0}}</td>
                                                        <td>
                                                            <button wire:click="editTJob({{ $job->id }})" class="btn btn-warning btn-sm">Modifier</button>
                                                            <button wire:click="deleteTJob({{ $job->id }})" class="btn btn-danger btn-sm">Supprimer</button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pt-2 pb-4">
                                        {{ $tJobs->links() }}
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
