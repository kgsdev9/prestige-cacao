<main x-data="courseManagement()" x-init="init()">
    <section class="pt-5 pb-5 bg-light">
        <div class="container">
            <div class="row mt-0 mt-md-4">
                @include('profiledashboard.nav-bar')

                <div class="col-lg-9 col-md-8 col-12">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-12">
                            <!-- Card header -->
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="mb-0">Liste des Cours</h3>
                                    <span>Gestion des Cours.</span>
                                </div>

                                <div class="nav btn-group flex-nowrap" role="tablist">
                                    <button class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                        @click="showModal = true">
                                        <i class="fa fa-add"></i>
                                        Création
                                    </button>
                                </div>
                            </div>

                            <!-- Recherche -->
                            <div class="p-4 row">
                                <form class="d-flex align-items-center col-12 col-md-8 col-lg-3">
                                    <span class="position-absolute ps-3 search-icon">
                                        <i class="fe fe-search"></i>
                                    </span>
                                    <input type="search" class="form-control ps-6" x-model="searchTerm"
                                        @input="filterCourses">
                                </form>
                            </div>

                            <!-- Tableau des Cours -->
                            <div class="table-invoice table-responsive">
                                <table class="table mb-0 text-nowrap table-centered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Matière</th>
                                            <th scope="col">Enseignant</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <template x-for="course in paginatedCourses" :key="course.id">
                                            <tr>
                                                <td x-text="truncateText(course.title, 20)"></td>
                                                <td x-text="course.matiere.name"></td>
                                                <td x-text="course.enseignant.name"></td>
                                                <td>
                                                    <button @click="openModal(course)">Éditer</button>
                                                    <button @click="deleteCourse(course.id)">Supprimer</button>
                                                </td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="row mt-4">
                                <div class="col-sm-12 col-md-7 offset-md-5 d-flex justify-content-end">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
                                                <button class="page-link"
                                                    @click="goToPage(currentPage - 1)">Précedent</button>
                                            </li>
                                            <li class="page-item" :class="{ 'disabled': currentPage === totalPages }">
                                                <button class="page-link"
                                                    @click="goToPage(currentPage + 1)">Suivant</button>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Modal pour Création/Modification -->
    <template x-if="showModal">
        <div class="modal fade show d-block" tabindex="-1" aria-modal="true" style="background-color: rgba(0,0,0,0.5)">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" x-text="isEdite ? 'Modification' : 'Création'"></h5>
                        <button type="button" class="btn-close" @click="hideModal()"></button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="submitForm">
                            <div class="mb-3">
                                <label for="title" class="form-label">Titre</label>
                                <input type="text" id="title" class="form-control" x-model="formData.title"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="matiere" class="form-label">Matière</label>
                                <select id="matiere" class="form-control" x-model="formData.matiere_id" required>
                                    <option value="">Sélectionner une matière</option>
                                    <template x-for="matiere in matieres" :key="matiere.id">
                                        <option :value="matiere.id" x-text="matiere.name"></option>
                                    </template>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="enseignant" class="form-label">Enseignant</label>
                                <select id="enseignant" class="form-control" x-model="formData.enseignant_id" required>
                                    <option value="">Sélectionner un enseignant</option>
                                    <template x-for="enseignant in enseignants" :key="enseignant.id">
                                        <option :value="enseignant.id" x-text="enseignant.name"></option>
                                    </template>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary"
                                x-text="isEdite ? 'Mettre à jour' : 'Enregistrer'"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </template>
</main>
