@section('title', 'Gestion des Astuces')

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
                                <h3 class="h4 mb-0">Liste des Astuces</h3>
                                <button wire:click="toggleForm" class="btn btn-primary btn-sm">
                                    {{ $tJobId ? 'Annuler' : 'Ajouter une Astuce' }}
                                </button>
                            </div>

                            <!-- Affichage des messages de succès -->
                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            <!-- Formulaire pour ajouter ou modifier une astuce -->
                            @if ($showForm)
                                <div class="card p-3 mt-3">
                                    <h5 class="mb-3">{{ $tJobId ? 'Modifier l\'Astuce' : 'Ajouter une Astuce' }}</h5>
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

                                        <div class="form-group mb-3">
                                            <button class="btn btn-primary btn-sm">Enregistrer</button>
                                        </div>
                                    </form>
                                </div>
                            @endif

                            <!-- Tableau des Astuces -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titre</th>
                                            <th>Description</th>
                                            <th>Visiteur</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tJobs as $job)
                                            <tr>
                                                <td>{{ $job->id }}</td>
                                                <td>{{ $job->title }}</td>
                                                <td>{!! Str::limit($job->description, 100) !!}</td> <!-- Limiter la description affichée -->
                                                <td>{{ $job->visiteur ? 'Oui' : 'Non' }}</td>
                                                <td>
                                                    <button wire:click="editTJob({{ $job->id }})" class="btn btn-warning btn-sm">Modifier</button>
                                                    <button wire:click="deleteTJob({{ $job->id }})" class="btn btn-danger btn-sm">Supprimer</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Pagination -->
                                {{ $tJobs->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
