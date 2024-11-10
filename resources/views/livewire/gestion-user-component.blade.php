@section('title', 'Gestion des Utilisateurs')

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
                                <h3 class="h4 mb-0">Liste des utilisateurs</h3>
                                <button wire:click="toggleForm" class="btn btn-primary btn-sm">
                                    {{ $userId ? 'Annuler' : 'Ajouter un utilisateur' }}
                                </button>
                            </div>

                            <!-- Formulaire d'ajout / modification -->
                            @if($showForm)
                                <div class="card p-3 mt-3 mx-2">
                                    <h5 class="mb-3">{{ $userId ? 'Modifier' : 'Ajouter' }} un utilisateur</h5>
                                    <form wire:submit.prevent="{{ $userId ? 'saveUser' : 'saveUser' }}">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="name" placeholder=" " wire:model="name">
                                            <label for="name">Nom</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" placeholder=" " wire:model="email">
                                            <label for="email">Email</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="password" placeholder=" " wire:model="password">
                                            <label for="password">Mot de passe</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="role_id" wire:model="role_id">
                                                <option value="">Choisir un rôle</option>
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="role_id">Rôle</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="suscribe_id" placeholder=" " wire:model="suscribe_id">
                                            <label for="suscribe_id">Suscribe ID</label>
                                        </div>

                                        <div class="d-flex justify-content-end mt-3">
                                            <button type="button" class="btn btn-secondary me-2" wire:click="resetForm">Annuler</button>
                                            <button type="submit" class="btn btn-primary">{{ $userId ? 'Mettre à jour' : 'Ajouter' }}</button>
                                        </div>
                                    </form>
                                </div>
                            @endif

                            <!-- Liste des utilisateurs -->
                            <div class="table-responsive mt-3">
                                <table class="table mb-0 table-hover table-centered text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Rôle</th> <!-- Ajout de la colonne pour afficher le rôle -->
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role->name ?? 'Aucun rôle' }}</td> <!-- Affichage du rôle -->
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="dropdownMenu-{{ $user->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="dropdownMenu-{{ $user->id }}">
                                                            <span class="dropdown-header">Options</span>
                                                            <a class="dropdown-item" href="#" wire:click="editUser({{ $user->id }})">
                                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                                Modifier
                                                            </a>
                                                            <a class="dropdown-item" href="#" wire:click="deleteUser({{ $user->id }})">
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

                                <!-- Pagination -->
                                <div class="mt-3">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
