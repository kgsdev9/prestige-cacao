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
                                <h3 class="h4 mb-0">Liste des formations </h3>
                                <button wire:click="toggleForm" class="btn btn-primary btn-sm">
                                    {{ $tJobId ? 'Annuler' : 'Ajouter une formation' }}
                                </button>
                            </div>

                            <!-- Affichage des messages de succès -->
                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif


                            @if ($showForm)
                                <div class="card p-3 mt-3">
                                    <h5 class="mb-3">
                                        {{ $tJobId ? 'Modifier une formation' : 'Ajouter une Formation' }}
                                    </h5>
                                    <form wire:submit.prevent="saveTJob">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="name" placeholder=" "
                                                wire:model="name">
                                            <label for="name">Titre</label>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="file" class="form-control" id="image"
                                                wire:model="image">
                                            <label for="image">Titre</label>
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div wire:ignore>
                                            <input id="description" type="hidden" name="content"
                                                wire:model.defer="description">
                                            <trix-editor input="description"></trix-editor>
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
                                                    <input type="search" class="form-control"
                                                        placeholder="Search by Name">
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
                                                    <th>Libelle</th>
                                                    <th>Image</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tJobs as $job)
                                                    <tr>
                                                        <td>{{ $job->id }}</td>
                                                        <td>{{ $job->name }}</td>
                                                        <td>{{ $job->name }}</td>
                                                        <td>
                                                            @can('is_progresss')
                                                                <button wire:click="editTJob({{ $job->id }})"
                                                                    class="btn btn-warning btn-sm">Modifier</button>
                                                            @endcan

                                                            <button wire:click="deleteTJob({{ $job->id }})"
                                                                class="btn btn-danger btn-sm">Supprimer</button>
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
<script>
    document.addEventListener('trix-change', function(event) {
        @this.set('description', event.target.value);
    });
</script>
