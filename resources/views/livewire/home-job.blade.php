
@section('title','Liste des candidats')
<div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <aside class="sidebar-fixed">
                    <nav class="navbar sidebar-courses navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
                        <div class="navbar-collapse collapse" id="navbarNav">
                            <div class="side-nav me-auto flex-column navbar-nav">
                                <p class="navbar-header nav-item mb-2 p-0 text-dark mt-4">Specialites</p>

                                <!-- Sélecteur de pays -->
                                @can('admin')


                                <div class="my-3">
                                    <label for="countrySelect" class="form-label">Choisir un pays</label>
                                    <select id="countrySelect" class="form-select" wire:model="selectedCountry">
                                        <option value="">Sélectionner un pays</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Sélecteur de ville -->
                                <div class="my-3">
                                    <label for="citySelect" class="form-label">Choisir une ville</label>
                                    <select id="citySelect" class="form-select" wire:model="selectedCity" wire:change="filterCandidates">
                                        <option value="">Sélectionner une ville</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endcan
                                @foreach ($categories as $value)
                                    <div class="form-check my-1">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="{{ $value->id }}"
                                            wire:model="selectedCategories"
                                            id="category-{{ $value->id }}"
                                        >
                                        <label class="form-check-label ps-1" for="category-{{ $value->id }}">
                                            {{ $value->libellespecialite }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </nav>
                </aside>
            </div>


            <div class="col-lg-9 col-sm-12">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <h3 class="pb-0 fw-bold text-dark m-0">Tous les emplois disponibles</h3>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-5">
                    @foreach ($jobs as $job)

                    <div class="col-lg-4 col-12 mb-4">
                        <!-- Job Grid Start -->
                        <div class="card card-bordered card-hover cursor-pointer h-100">
                          <!-- card body -->
                          <div class="card-body">
                            <div class="mb-3 mb-md-0">
                              <img src="../../assets/images/job/job-brand-logo/job-list-logo-1.svg" alt="Geeks Bootstrap 5 Template" class="icon-shape border rounded-circle">
                            </div>
                            <div class="w-100 mt-3">
                              <div class="d-flex justify-content-between mb-4">
                                <div>
                                  <h3 class="mb-1 fs-4">
                                    <a href="job-single.html" class="text-inherit">{{$job->title}}</a>
                                    <span class="badge bg-danger-soft">{{ $job->created_at->diffForHumans() }}</span>
                                  </h3>
                                  <div>
                                    <span>Contrat {{$job->ttypejob->libelletypeemploi}} </span>
                                  </div>
                                </div>
                                <div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                                  </svg>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="mb-4">
                                <div class="mb-2 mb-md-0">
                                  <div class="mt-1">
                                    <i class="fe fe-briefcase"></i>
                                    <span class="ms-1">{{$job->specialite->libellespecialite}}</span>
                                  </div>

                                  <div class="mt-1">
                                    <i class="fe fe-map-pin"></i>
                                    <span class="ms-1">{{$job->ville->libelleville}}, {{$job->pays->libellepays}}</span>
                                  </div>
                                </div>
                              </div>
                              <div class="d-grid">
                               <button class="btn btn-outline-dark btn-sm">Consulter</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
