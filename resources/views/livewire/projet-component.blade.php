@section('title', 'Mes réalisations')
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
                                <h3 class="h4 mb-0">Liste de vos projets</h3>
                                <button wire:click="toggleForm" class="btn btn-primary btn-sm">
                                    {{ $showForm ? 'Annuler' : 'Ajouter un projet' }}
                                </button>
                            </div>

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            @if($showForm)
                                <div class="card p-3 mt-3 mx-2">
                                    <h5 class="mb-3">{{ $projectId ? 'Modifier le projet' : 'Nouveau Projet' }}</h5>
                                    <form wire:submit.prevent="{{ $projectId ? 'updateProject' : 'saveProject' }}">
                                        <div class="row">
                                            <div class="col-md-6 mb-3 form-floating">
                                                <input type="text" class="form-control" id="title" placeholder=" " wire:model="title">
                                                <label for="title">Titre du projet</label>
                                                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="col-md-6 mb-3 form-floating">
                                                <input type="text" class="form-control" id="lien_projet" placeholder=" " wire:model="lien_projet">
                                                <label for="lien_projet">Lien du projet</label>
                                                @error('lien_projet') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="col-12 mb-3 form-floating">
                                                <textarea class="form-control" placeholder=" " id="description" wire:model="description" style="height: 100px;"></textarea>
                                                <label for="description">Description</label>
                                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="col-md-6 mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="is_published" wire:model="is_published">
                                                <label class="form-check-label" for="is_published">Publié</label>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-3">
                                            <button type="button" class="btn btn-secondary me-2" wire:click="toggleForm">Annuler</button>
                                            <button type="submit" class="btn btn-primary">{{ $projectId ? 'Mettre à jour' : 'Enregistrer' }}</button>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="table-responsive mt-3">
                                    <table class="table mb-0 table-hover table-centered text-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Titre</th>
                                                <th>Description</th>
                                                <th>Lien</th>
                                                <th>Publié</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($this->listeProjet as $project)
                                                <tr>
                                                    <td>{{ $project->title }}</td>
                                                    <td>{{ $project->description }}</td>
                                                    <td><a href="{{ $project->lien_projet }}" target="_blank">{{ $project->lien_projet }}</a></td>
                                                    <td>{{ $project->is_published ? 'Oui' : 'Non' }}</td>

                                                    <td>
                                                        <span class="dropdown dropstart">
                                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="dropdownMenu-{{ $project->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <span class="dropdown-menu" aria-labelledby="dropdownMenu-{{ $project->id }}">
                                                                <span class="dropdown-header">Options</span>
                                                                <a class="dropdown-item" href="#" wire:click="editProject({{ $project->id }})">
                                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                                    Modifier
                                                                </a>
                                                                <a class="dropdown-item" href="#" wire:click="deleteProject({{ $project->id }})">
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
