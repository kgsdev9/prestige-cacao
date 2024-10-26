
<div>
    <section class="py-xl-8 py-6">
        <div class="container">
          <!--row-->
          <div class="row gy-4">
            <div class="col-xl-8 col-12">
              <div class="d-flex flex-column gap-4">
                <!--card-->
                <div class="card">
                  <!--img-->
                  <div class="rounded-top-3" style="background-image: url(asset('mentor-background.png')); background-position: center; background-size: cover; background-repeat: no-repeat; height: 228px"></div>
                  <div class="card-body p-md-5">
                    <div class="d-flex flex-column gap-5">
                      <!--img-->
                      <div class="mt-n8">
                        <img src="{{asset('assets/images/avatar/avatar-11.jpg')}}" alt="mentor 1" class="img-fluid rounded-4 mt-n8">
                      </div>
                      <div class="d-flex flex-column gap-5">
                        <div class="d-flex flex-column gap-3">
                          <div class="d-flex flex-md-row flex-column justify-content-between gap-2">
                            <!--heading-->
                            <div>
                              <h1 class="mb-0">{{$candidat->nom}} {{$candidat->prenom}}</h1>
                              <!--content-->
                              <div class="d-flex flex-lg-row flex-column gap-2">
                                <small class="fw-medium text-gray-800">{{$candidat->specialite->libellespecialite}}</small>
                                {{-- <small class="fw-medium text-success">7+ years in UX Design &amp; Brand Design.</small> --}}
                              </div>
                            </div>
                            <!--button-->
                            <div class="d-flex flex-row gap-3 align-items-center">
                              <a href="#!" class="btn btn-outline-white">
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill me-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"></path>
                                  </svg>
                                </span>
                               Partager
                              </a>
                              <a href="#!" class="btn btn-outline-white">Contacter</a>
                            </div>
                          </div>
                          <div class="d-flex flex-md-row flex-column gap-md-4 gap-2">

                            <div class="d-flex flex-row gap-2 align-items-center lh-1">
                              <!--icon-->
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-people-fill text-primary align-baseline" viewBox="0 0 16 16">
                                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"></path>
                                </svg>
                              </span>
                              <!--text-->
                              <span>
                                <span class="text-gray-800 fw-bold">40+</span>
                                Abonnées
                              </span>
                            </div>
                            <div class="d-flex flex-row gap-2 align-items-center lh-1">
                              <!--icon-->
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"></path>
                                </svg>
                              </span>
                              <!--text-->
                              <span>  {{$candidat->ville->libelleville}}, {{$candidat->pays->libellepays}}</span>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex flex-column gap-2">
                          <!--heading-->
                          <h3 class="mb-0">Skills</h3>
                            <div class="gap-2 d-flex flex-wrap">
                                @foreach($candidat->competences as $competence)
                                    <a href="#!" class="btn btn-tag btn-sm">{{ $competence->libellecompetence }}</a>
                                @endforeach
                          </div>
                        <div>
                          <span class="badge rounded-pill text-success-emphasis bg-success-subtle border border-success align-items-center">
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-reply-fill me-1 align-text-top" viewBox="0 0 16 16">
                                <path d="M5.921 11.9 1.353 8.62a.72.72 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"></path>
                              </svg>
                            </span>
                           Whattssap
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--card-->
                <div class="card">
                  <!--card body-->
                  <div class="card-body p-md-5 d-flex flex-column gap-3">
                    <!--heading-->
                    <h3 class="mb-0">A propos</h3>
                    <div class="d-flex flex-column">
                      <!--para-->
                      <p class="mb-1">
                            {{$candidat->description}}
                      </p>
                      <div class="collapse" id="collapseAbout">
                        <p class="my-3">
                          I've helped businesses in US, Europe and Japan generate $200M+ in revenue, through my product design and branding skills. My top 3 industries are web3, AI and edtech.
                        </p>
                      </div>
                      <div>
                        <a class="btn-link" data-bs-toggle="collapse" href="#collapseAbout" role="button" aria-expanded="false" aria-controls="collapseAbout">Lire plus</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!--card-->
                <div class="card">
                  <!--card body-->
                  <div class="card-body p-md-5">
                    <div class="d-flex flex-column gap-3">
                      <!--heading-->
                      <h3 class="mb-0">Competences</h3>

                      <div class="gap-2 d-flex flex-wrap">
                        @foreach($candidat->competences as $competence)
                            <a href="#!" class="btn btn-tag btn-sm">{{ $competence->libellecompetence }}</a>
                        @endforeach
                    </div>

                    </div>
                  </div>
                </div>
                <!--card-->
                <div class="card">
                  <!--card body-->
                  <div class="card-body p-md-5">
                    <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-between gap-2">
                      <!--heading-->
                      <div>
                        <h3 class="mb-0">Experience Professionelle</h3>
                      </div>

                    </div>
                    <hr>
                    <div class="row">
                        @foreach($candidat->experiences as $index => $experience)
                            <div class="col-md-12 mb-3">
                                <div class="card p-3">
                                    <div class="d-flex align-items-start">
                                        <!-- Icône de l'entreprise (SVG) -->
                                        <div class="me-3">
                                            <svg width="40" height="40" viewBox="0 0 16 16" fill="#6c757d" class="bi bi-building">
                                                <rect width="8" height="8" x="4" y="4" rx="1" ry="1" />
                                                <rect width="3" height="3" x="6.5" y="6.5" rx="0.5" ry="0.5" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="card-title m-0">{{ $experience->intitule }}</h5>
                                            <p class="text-muted m-0">{{ $experience->nom_entreprise }}</p>
                                            <small class="text-muted">{{ $experience->mois_debut }} {{ $experience->annee_debut }} - {{ $experience->mois_fin }} {{ $experience->annee_fin }}</small>
                                        </div>
                                        <!-- Bouton supprimer -->
                                        <button wire:click="removeExperience({{ $index }})" class="btn btn-light btn-sm ms-auto" title="Supprimer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 1 1 .708.707L8.707 8l2.647 2.646a.5.5 0 0 1-.707.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.707L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <p class="mb-0">{{ $experience->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                  </div>
                </div>


                <div class="card">
                    <!--card body-->
                    <div class="card-body p-md-5">
                      <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-between gap-2">
                        <!--heading-->
                        <div>
                          <h3 class="mb-0">FORMATION</h3>
                        </div>

                      </div>
                      <hr>
                      <div class="row">
                        @foreach($candidat->formations as $index => $formation)
                            <div class="col-md-12 mb-3">
                                <div class="card p-3">
                                    <div class="d-flex align-items-start">

                                        <div class="me-3">
                                            <svg width="40" height="40" viewBox="0 0 16 16" fill="#6c757d" class="bi bi-building">
                                                <rect width="8" height="8" x="4" y="4" rx="1" ry="1" />
                                                <rect width="3" height="3" x="6.5" y="6.5" rx="0.5" ry="0.5" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="card-title m-0">{{ $formation->nom_ecole }}</h5>
                                            <p class="text-muted m-0">{{ $formation->diplome }}</p>
                                            <small class="text-muted">{{ $formation->annee_debut }} - {{ $formation->annee_fin }}</small>
                                        </div>
                                        <!-- Bouton supprimer -->
                                        <button wire:click="removeFormation({{ $index }})" class="btn btn-light btn-sm ms-auto" title="Supprimer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 1 1 .708.707L8.707 8l2.647 2.646a.5.5 0 0 1-.707.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.707L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <p class="mb-0">{{ $formation->domaine_etudes }}</p>
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
        </div>
      </section>
</div>

