@extends('layout.layout')
@section('title', 'Liste des cours')
@section('content')
    <main x-data="courseManagement()" x-init="init()" class="bg-light">


        <div class="position-relative">
            <nav class="navbar navbar-expand-lg sidenav sidenav-navbar">
                <a class="d-xl-none d-lg-none d-block text-inherit fw-bold" href="#">Menu</a>
                <button class="navbar-toggler d-lg-none icon-shape icon-sm rounded bg-primary text-light" type="button"
                    data-bs-toggle="collapse" data-bs-target="#sidenavNavbar" aria-controls="sidenavNavbar"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fe fe-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="sidenavNavbar">
                    @include('profiledashboard.nav-bar')
                </div>
            </nav>
        </div>

        <div class="db-content">
            <div class="container mb-4">

                <!-- Button to create new course -->
                <div class="d-flex justify-content-between mb-3">
                    <h3>Liste des Cours</h3>
                    <button class="btn btn-primary" @click="openModal()">Ajouter un nouveau cours</button>
                </div>

                <!-- Course List Section -->
                <div class="container mb-4">
                    <div class="row">
                        <!-- Loop through each course and display in a card -->
                        <template x-for="course in paginatedCourses" :key="course.id">
                            <div class="col-md-4 mb-4">
                                <div class="card shadow-sm">
                                    <!-- Document Icon -->
                                    <svg class="card-img-top" width="100" height="100" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor"
                                            d="M14 2H6C5.44772 2 5 2.44772 5 3V21C5 21.5523 5.44772 22 6 22H18C18.5523 22 19 21.5523 19 21V8L14 2ZM14 3.41421L18.5858 8H14V3.41421ZM13 4V8H16.5858L13 4ZM12 9V15H8V9H12Z" />
                                    </svg>

                                    <div class="card-body">
                                        <h5 class="card-title" x-text="course.title"></h5>
                                        <h6 class="card-subtitle mb-2 text-muted" x-text="course.matiere.title"></h6>
                                        <p class="card-text" x-text="course.description"></p>

                                        <!-- Actions Buttons -->
                                        <div class="d-flex justify-content-between">
                                            <a :href="course.url" target="_blank" class="btn btn-primary btn-sm">
                                                Voir le cours
                                            </a>
                                            <div>
                                                <button class="btn btn-warning btn-sm me-2"
                                                    @click="openModal(course)">Éditer</button>
                                                <button class="btn btn-danger btn-sm"
                                                    @click="deleteCourse(course.id)">Supprimer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-wrapper mt-4">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
                                    <button class="page-link" @click="goToPage(currentPage - 1)">Précédent</button>
                                </li>
                                <li class="page-item" :class="{ 'disabled': currentPage === totalPages }">
                                    <button class="page-link" @click="goToPage(currentPage + 1)">Suivant</button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Modal for Creating or Editing Course -->
                <template x-if="showModal">
                    <div class="modal fade show d-block" tabindex="-1" aria-modal="true"
                        style="background-color: rgba(0,0,0,0.5)">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" x-text="isEdit ? 'Modifier Cours' : 'Créer Cours'"></h5>
                                    <button type="button" class="btn-close" @click="hideModal()"></button>
                                </div>
                                <div class="modal-body">
                                    <form @submit.prevent="submitForm">
                                        <div class="mb-3">
                                            <label for="courseTitle" class="form-label">Titre du Cours</label>
                                            <input type="text" id="courseTitle" class="form-control"
                                                x-model="formData.title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="matiereId" class="form-label">Matière</label>
                                            <select id="classe_id" x-model="formData.matiere_id" class="form-select"
                                                required>
                                                <option value="">Choisir une Classe</option>
                                                @foreach ($matieres as $matiere)
                                                    <option value="{{ $matiere->id }}">{{ $matiere->title }}</option>
                                                @endforeach
                                            </select>


                                        </div>

                                        <div class="mb-3">
                                            <label for="courseDescription" class="form-label">Description</label>
                                            <textarea id="courseDescription" class="form-control" x-model="formData.description" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="courseUrl" class="form-label">URL</label>
                                            <input type="url" id="courseUrl" class="form-control" x-model="formData.url"
                                                required>
                                        </div>

                                        <button type="submit" class="btn btn-primary"
                                            x-text="isEdit ? 'Mettre à jour' : 'Enregistrer'"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <!-- Scroll top -->
        <div class="btn-scroll-top">
            <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
                <path
                    d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z">
                </path>
            </svg>
        </div>

    </main>
@endsection

@push('script')
    <script>
        function courseManagement() {
            return {
                courses: @json($listecourse),
                matieres: @json($matieres),
                enseignants: @json($enseignants),
                searchTerm: '',
                currentPage: 1,
                coursesPerPage: 5,
                totalPages: 0,
                showModal: false,
                isEdit: false,
                formData: {
                    title: '',
                    matiere_id: '',
                    description: '',
                    url: '',
                    enseignant_id: ''
                },
                currentCourse: null,

                hideModal() {
                    this.showModal = false;
                    this.currentCourse = null;
                    this.resetForm();
                    this.isEdit = false;
                },

                openModal(course = null) {
                    this.isEdit = course !== null;

                    if (this.isEdit) {
                        this.currentCourse = {
                            ...course
                        };

                        this.formData = {
                            title: this.currentCourse.title,
                            matiere_id: this.currentCourse.matiere_id,
                            description: this.currentCourse.description,
                            url: this.currentCourse.url,
                            enseignant_id: this.currentCourse.enseignant_id,
                        };
                    } else {
                        this.resetForm();
                    }

                    this.showModal = true;
                },

                resetForm() {
                    this.formData = {
                        title: '',
                        matiere_id: '',
                        description: '',
                        url: '',
                        enseignant_id: ''
                    };
                },

                async submitForm() {
                    try {
                        this.isLoading = true;

                        const formData = new FormData();

                        formData.append('title', this.formData.title);
                        formData.append('matiere_id', this.formData.matiere_id);
                        formData.append('description', this.formData.description);
                        formData.append('url', this.formData.url);
                        formData.append('enseignant_id', this.formData.enseignant_id);
                        formData.append('course_id', this.currentCourse ? this.currentCourse.id : null);

                        const response = await fetch('{{ route('cours.store') }}', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            body: formData,
                        });

                        if (response.ok) {
                            const data = await response.json();
                            const course = data.course;

                            if (course) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Le cours a été enregistré avec succès !',
                                    showConfirmButton: false,
                                    timer: 1500,
                                });

                                if (this.isEdit) {
                                    const index = this.courses.findIndex(c => c.id === course.id);
                                    if (index !== -1) {
                                        this.courses[index] = course;
                                    }
                                } else {
                                    this.courses.push(course);
                                }

                                this.filterCourses();
                                this.resetForm();
                                this.hideModal();
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur lors de l\'enregistrement.',
                                showConfirmButton: true,
                            });
                        }
                    } catch (error) {
                        console.error('Erreur réseau :', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Une erreur est survenue.',
                            showConfirmButton: true,
                        });
                    } finally {
                        this.isLoading = false;
                    }
                },

                get paginatedCourses() {
                    let start = (this.currentPage - 1) * this.coursesPerPage;
                    let end = start + this.coursesPerPage;
                    return this.courses.slice(start, end);
                },

                filterCourses() {
                    this.totalPages = Math.ceil(this.courses.length / this.coursesPerPage);
                    this.currentPage = 1;
                },

                deleteCourse(courseId) {
                    Swal.fire({
                        title: 'Êtes-vous sûr?',
                        text: "Vous ne pourrez pas récupérer ce cours !",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Oui, supprimer!',
                        cancelButtonText: 'Annuler',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Call the delete API
                            fetch('{{ route('cours.store') }}', {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    },
                                    body: JSON.stringify({
                                        id: courseId
                                    }),
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        Swal.fire(
                                            'Supprimé!',
                                            'Le cours a été supprimé.',
                                            'success'
                                        );
                                        this.courses = this.courses.filter(c => c.id !== courseId);
                                    }
                                });
                        }
                    });
                },
            };
        }
    </script>
@endpush
