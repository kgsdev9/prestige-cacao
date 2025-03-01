@extends('layout.layout')

@section('content')
    <main x-data="filiereMaterie()" class="bg-light">
        <div class="position-relative">
            <nav class="navbar navbar-expand-lg sidenav sidenav-navbar">
                <!-- Menu -->
                <a class="d-xl-none d-lg-none d-block text-inherit fw-bold" href="#">Menu</a>
                <!-- Button -->
                <button class="navbar-toggler d-lg-none icon-shape icon-sm rounded bg-primary text-light" type="button"
                    data-bs-toggle="collapse" data-bs-target="#sidenavNavbar" aria-controls="sidenavNavbar"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fe fe-menu"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenavNavbar">
                    @include('profiledashboard.nav-bar')
                </div>
            </nav>
        </div>

        <div class="db-content">
            <div class="container mb-4">
                <div class="row mb-5 g-4 gy-lg-0">
                    <div class="col-xxl-12 col-lg-7 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-5">
                                    <div class="card-body p-lg-6">
                                        <div class="row align-items-center gy-5 gy-lg-0">
                                            <div class="col-xl-9 col-lg-6">
                                                <div class="d-flex flex-column gap-5 py-xl-3">
                                                    <div class="pe-xl-8">
                                                        <h2 class="mb-0">Gestion des filières et matières</h2>
                                                        <p class="mb-0">
                                                            Organiser et gérer dynamiquement les filières et les matières
                                                            pour faciliter l'enseignement et l'apprentissage.
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <button @click="openFiliereModal()"
                                                            class="btn btn-dark">Création</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6">
                                                <div class="text-center">
                                                    <img src="{{ asset('projects.svg') }}" alt="project">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gy-4">
                    <template x-for="(filiere, index) in filieres" :key="index">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column gap-3">
                                    <!-- Add Matière Button -->
                                    <div>
                                        <button @click="openMatiereModal(filiere.id)" class="btn btn-primary mb-3">
                                            Ajouter Matière
                                        </button>
                                    </div>

                                    <div>
                                        <span class="badge bg-warning-subtle rounded-pill text-warning">Filière</span>
                                    </div>
                                    <h3 class="mb-0" x-text="filiere.title"></h3>

                                    <!-- Display matieres inline with d-flex flex-row -->
                                    <div class="gap-2 d-flex flex-wrap">
                                        <template x-for="(matiere, id) in filteredMatieres(filiere.id)"
                                            :key="id">
                                            <span class="badge bg-light-subtle border rounded-pill text-secondary">
                                                <span x-text="matiere.title"></span>
                                                <button @click="openEditMatiereModal(filiere.id, matiere.id)"
                                                    class="btn btn-light btn-sm mx-1"><i
                                                        class="fe fe-edit nav-icon"></i></button>
                                                <button @click="deleteMatiere(filiere.id, matiere.id)"
                                                    class="btn btn-danger btn-sm mx-1"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                        <path
                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 1 1 .708.707L8.707 8l2.647 2.646a.5.5 0 0 1-.707.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.707L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                        </path>
                                                    </svg></button>
                                            </span>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <!-- Filière Modal -->
        <template x-if="showFiliereModal">
            <div class="modal fade show d-block" tabindex="-1" aria-modal="true" style="background-color: rgba(0,0,0,0.5)">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"
                                x-text="isFiliereEdit ? 'Modification de la filière' : 'Création de la filière'"></h5>
                            <button type="button" class="btn-close" @click="closeFiliereModal"></button>
                        </div>
                        <div class="modal-body">
                            <form @submit.prevent="submitFiliereForm">
                                <div class="mb-3">
                                    <label for="filiere-name" class="form-label">Libellé de la filière</label>
                                    <input type="text" id="filiere-name" class="form-control"
                                        x-model="filiereFormData.title" required>
                                </div>
                                <button type="submit" class="btn btn-primary"
                                    x-text="isFiliereEdit ? 'Mettre à jour' : 'Enregistrer'"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <!-- Matière Modal -->
        <template x-if="showMatiereModal">
            <div class="modal fade show d-block" tabindex="-1" aria-modal="true" style="background-color: rgba(0,0,0,0.5)">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"
                                x-text="isMatiereEdit ? 'Modification de la matière' : 'Création de la matière'"></h5>
                            <button type="button" class="btn-close" @click="closeMatiereModal"></button>
                        </div>
                        <div class="modal-body">
                            <form @submit.prevent="submitMatiereForm">
                                <div class="mb-3">
                                    <label for="matiere-name" class="form-label">Libellé de la matière</label>
                                    <input type="text" id="matiere-name" class="form-control"
                                        x-model="matiereFormData.title" required>
                                </div>
                                <button type="submit" class="btn btn-primary"
                                    x-text="isMatiereEdit ? 'Mettre à jour' : 'Enregistrer'"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </template>

    </main>
@endsection

@push('script')
    <script>
        function filiereMaterie() {
            return {
                filieres: @json($listefilieres),
                matieres: @json($listematieres),
                showFiliereModal: false,
                showMatiereModal: false,
                isFiliereEdit: false,
                isMatiereEdit: false,
                filiereFormData: {
                    title: ''
                },
                matiereFormData: {
                    title: ''
                },
                currentFiliereId: null,
                currentMatiereId: null,

                // Open modal for filière
                openFiliereModal(filiere = null) {
                    this.isFiliereEdit = filiere !== null;
                    if (this.isFiliereEdit) {
                        this.filiereFormData = {
                            title: filiere.title
                        };
                        this.currentFiliereId = filiere.id;
                    } else {
                        this.filiereFormData = {
                            title: ''
                        };
                    }
                    this.showFiliereModal = true;
                },

                // Close filière modal
                closeFiliereModal() {
                    this.showFiliereModal = false;
                },

                // Open modal for matière
                openMatiereModal(filiereId, matiere = null) {
                    this.isMatiereEdit = matiere !== null;
                    if (this.isMatiereEdit) {
                        this.matiereFormData = {
                            title: matiere.title
                        };
                        this.currentMatiereId = matiere.id;
                    } else {
                        this.matiereFormData = {
                            title: ''
                        };
                    }
                    this.currentFiliereId = filiereId;
                    this.showMatiereModal = true;
                },

                // Close matière modal
                closeMatiereModal() {
                    this.showMatiereModal = false;
                    this.currentMatiereId = null;
                    this.currentFiliereId = null;
                },

                // Open edit matière modal
                openEditMatiereModal(filiereId, matiereId) {
                    let matiere = this.matieres.find(m => m.id === matiereId && m.filiere_id === filiereId);
                    if (matiere) {
                        this.matiereFormData = {
                            title: matiere.title
                        };
                        this.currentMatiereId = matiere.id;
                        this.currentFiliereId = filiereId;
                        this.isMatiereEdit = true;
                        this.showMatiereModal = true;
                    }
                },

                // Filter matieres for a specific filiere
                filteredMatieres(filiereId) {
                    return this.matieres.filter(matiere => matiere.filiere_id === filiereId);
                },

                // Submit filière form
                async submitFiliereForm() {
                    if (!this.filiereFormData.title) {
                        alert('Le libellé de la filière est requis.');
                        return;
                    }

                    const formData = new FormData();
                    formData.append('title', this.filiereFormData.title);

                    const url = this.isFiliereEdit ?
                        '{{ route('filieres.update', '') }}/' + this.currentFiliereId :
                        '{{ route('filieres.store') }}';

                    const method = this.isFiliereEdit ? 'PUT' : 'POST';

                    try {
                        const response = await fetch(url, {
                            method: method,
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            body: formData,
                        });

                        const data = await response.json();
                        if (data.filiere) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Filière enregistrée avec succès!',
                                showConfirmButton: false,
                                timer: 1500
                            });

                            if (this.isFiliereEdit) {
                                const index = this.filieres.findIndex(f => f.id === data.filiere.id);
                                if (index !== -1) {
                                    this.filieres[index] = data.filiere;
                                }
                            } else {
                                this.filieres.push(data.filiere);
                                this.filieres.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
                            }

                            this.resetFiliereForm();
                            this.closeFiliereModal();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur lors de la création de la filière.',
                                text: data.message || 'Veuillez réessayer.',
                            });
                        }
                    } catch (error) {
                        console.error(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Erreur serveur.',
                            text: 'Une erreur s\'est produite. Veuillez réessayer.',
                        });
                    }
                },

                // Reset filière form data
                resetFiliereForm() {
                    this.filiereFormData = {
                        title: ''
                    };
                },

                // Submit matière form
                async submitMatiereForm() {

                    if (!this.matiereFormData.title) {
                        alert('Le libellé de la matière est requis.');
                        return;
                    }

                    const formData = new FormData();
                    formData.append('title', this.matiereFormData.title);
                    formData.append('matiere_id', this.currentMatiereId ? this.currentMatiereId : null);
                    formData.append('filiere_id', this.currentFiliereId ? this.currentFiliereId : null);

                    try {
                        const response = await fetch('{{ route('matieres.store') }}', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            body: formData,
                        });



                        if (response.ok) {

                            const data = await response.json();
                            const matiere = data.matiere;

                            Swal.fire({
                                icon: 'success',
                                title: 'Matière enregistrée avec succès!',
                                showConfirmButton: false,
                                timer: 1500
                            });



                            if (this.isMatiereEdit) {
                                const index = this.matieres.findIndex(m => m.id === data.matiere.id);
                                if (index !== -1) {
                                    this.matieres[index] = matiere;
                                }
                            } else {
                                this.matieres.push(data.matiere);
                                this.matieres.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
                            }

                            this.resetMatiereForm();
                            this.closeMatiereModal();


                            window.location.href =
                                '{{ route('filieres.index') }}';
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur lors de la création de la matière.',
                                text: data.message || 'Veuillez réessayer.',
                            });
                        }
                    } catch (error) {
                        console.error(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Erreur serveur.',
                            text: 'Une erreur s\'est produite. Veuillez réessayer.',
                        });
                    }
                },

                // Reset matière form data
                resetMatiereForm() {
                    this.matiereFormData = {
                        title: ''
                    };
                },

                // Delete matière
                async deleteMatiere(filiereId, matiereId) {
                    const confirmation = confirm('Êtes-vous sûr de vouloir supprimer cette matière?');


                    const url = '{{ route('matieres.destroy', ':matiere') }}'.replace(':matiere', matiereId);

                    if (confirmation) {
                        try {
                            const response = await fetch(url, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                },
                                body: JSON.stringify({
                                    filiere_id: filiereId,
                                    matiere_id: matiereId
                                })
                            });

                            const data = await response.json();
                            if (response.ok) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Matière supprimée avec succès!',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                this.matieres = this.matieres.filter(matiere => matiere.id !== matiereId);

                                window.location.href =
                                    '{{ route('filieres.index') }}';
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Erreur lors de la suppression.',
                                    text: data.message || 'Veuillez réessayer.',
                                });


                            }
                        } catch (error) {
                            console.error(error);
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur serveur.',
                                text: 'Une erreur s\'est produite. Veuillez réessayer.',
                            });
                        }
                    }
                },
            };
        }
    </script>
@endpush
