@section('title', 'Mes Spécialités')

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
                                <h3 class="h4 mb-0">Liste de vos spécialités</h3>
                                <button wire:click="toggleForm" class="btn btn-primary btn-sm">
                                    {{ $specialiteId ? 'Annuler' : 'Ajouter une spécialité' }}
                                </button>
                            </div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif
                            @if($showForm)
                                <div class="card p-3 mt-3 mx-2">
                                    <h5 class="mb-3">{{ $specialiteId ? 'Modifier' : 'Ajouter' }} la spécialité</h5>
                                    <!-- Formulaire dynamique, appelant soit saveSpecialite, soit updateSpecialite -->
                                    <form wire:submit.prevent="{{ $specialiteId ? 'updateSpecialite' : 'saveSpecialite' }}">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="name" placeholder=" " wire:model="name">
                                            <label for="name">Nom de la spécialité</label>
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="d-flex justify-content-end mt-3">
                                            <button type="button" class="btn btn-secondary me-2" wire:click="resetForm">Annuler</button>
                                            <button type="submit" class="btn btn-primary">{{ $specialiteId ? 'Mettre à jour' : 'Ajouter' }}</button>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="table-responsive mt-3">
                                    <table class="table mb-0 table-hover table-centered text-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Nom de la spécialité</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($specialites as $specialite)
                                                <tr>
                                                    <td>{{ $specialite->libellespecialite }}</td>
                                                    <td>
                                                        <span class="dropdown dropstart">
                                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="dropdownMenu-{{ $specialite->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <span class="dropdown-menu" aria-labelledby="dropdownMenu-{{ $specialite->id }}">
                                                                <span class="dropdown-header">Options</span>
                                                                <a class="dropdown-item" href="#" wire:click="editSpecialite({{ $specialite->id }})">
                                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                                    Modifier
                                                                </a>
                                                                <a class="dropdown-item" href="#" wire:click="deleteSpecialite({{ $specialite->id }})">
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
                                    <div class="mt-3">
                                        {{ $specialites->links() }}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
