@section('title', 'Liste des Candidats')

<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header')

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')

                    <div class="col-lg-9 col-md-8 col-12">
                        <!-- Tableau des Candidats -->
                        <div class="card">
                            <div class="card-header border-bottom-0">
                                <div class="row">
                                    <div class="col pe-0">
                                        <form wire:submit.prevent="search">
                                            <input type="search" class="form-control" placeholder="Rechercher par Nom" wire:model="searchTerm">
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-secondary" wire:click="exportCSV">Exporter CSV</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-hover table-centered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Nom</th>
                                            <th>Téléphone</th>
                                            <th>Spécialité</th>
                                            <th>Ville</th>
                                            <th>Pays</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidats as $candidat)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('avatar.png')}}" alt="" class="rounded-circle avatar-md me-2">
                                                        <h5 class="mb-0">{{ $candidat->nom }} {{ $candidat->prenom }} {{ $candidat->email }}</h5>
                                                    </div>
                                                </td>
                                                <td>{{ $candidat->telephone }}</td>
                                                <td>{{ $candidat->specialite->libellespecialite ?? 'Non spécifié' }}</td>
                                                <td>{{ $candidat->ville->libelleville ?? 'Non spécifié' }}</td>
                                                <td>{{ $candidat->pays->libellepays ?? 'Non spécifié' }}</td>
                                                <td>
                                                    <a href="{{asset('sauvegarde/cv/candidat/'. $candidat->photo)}}" class="btn btn-outline-secondary btn-sm">cv</a>
                                                </td>
                                                <td class="pe-0 align-middle border-top-0">
                                                    <a href="{{route('detail.candidat', $candidat->codeprofile)}}" class="btn btn-outline-secondary btn-sm" target="_blank">Voir</a>
                                                    <button wire:click="destroy({{$candidat->id}})" class="btn btn-outline-danger btn-sm">Supprimer</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="pt-2 pb-4">
                                <nav>
                                    <ul class="pagination justify-content-center mb-0">
                                        {{ $candidats->links() }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
