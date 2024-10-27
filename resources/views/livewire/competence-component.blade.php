@section('title', 'Mon compétences')
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
                                <h3 class="h4 mb-0">Liste de vos compétences</h3>
                                <button wire:click="toggleForm" class="btn btn-primary btn-sm">
                                    {{ $showForm ? 'Annuler' : 'Ajouter une compétence' }}
                                </button>
                            </div>

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            @if($showForm)
                                <div class="card p-3 mt-3 mx-2">
                                    <h5 class="mb-3">{{ $competenceId ? 'Modifier la compétence' : 'Nouvelle Compétence' }}</h5>
                                    <form wire:submit.prevent="{{ $competenceId ? 'updateCompetence' : 'saveCompetence' }}">
                                        <div class="mb-3 form-floating">
                                            <input type="text" class="form-control" id="libellecompetence" placeholder=" " wire:model="libellecompetence">
                                            <label for="libellecompetence">Libellé de la compétence</label>
                                            @error('libellecompetence') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="d-flex justify-content-end mt-3">
                                            <button type="button" class="btn btn-secondary me-2" wire:click="toggleForm">Annuler</button>
                                            <button type="submit" class="btn btn-primary">{{ $competenceId ? 'Mettre à jour' : 'Enregistrer' }}</button>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="table-responsive mt-3">
                                    <table class="table mb-0 table-hover table-centered text-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Libellé de la compétence</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($this->listeCompetences as $competence)
                                                <tr>
                                                    <td>{{ $competence->libellecompetence }}</td>
                                                    <td>
                                                        <button wire:click="editCompetence({{ $competence->id }})" class="btn btn-sm btn-info">Modifier</button>
                                                        <button wire:click="deleteCompetence({{ $competence->id }})" class="btn btn-sm btn-danger">Supprimer</button>
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
