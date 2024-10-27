@section('title', $candidat->nom)

<div>
    <main>
        <!--hero section-->
        <section class="py-xl-8 py-6">
          <div class="container">
            <!--row-->
            <div class="row gy-4">
              <div class="col-xl-8 col-12">
                <div class="d-flex flex-column gap-4">
                  <!--card-->
                  <div class="card">
                    <!--img-->
                    <div class="rounded-top-3" style="background-image: url('{{ asset('mentor-background.png') }}'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 228px"></div>
                    <div class="card-body p-md-5">
                      <div class="d-flex flex-column gap-5">
                        <!--img-->
                        <div class="mt-n8">
                          <img src="{{asset('avatar.png')}}" alt="mentor 1" class="img-fluid rounded-4 mt-n8" style="height:80px;">
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
                                  <small class="fw-medium text-success">{{count($candidat->experiences)}}+{{$candidat->specialite->libellespecialite}}.</small>
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

                              </div>
                            </div>
                            <div class="d-flex flex-md-row flex-column gap-md-4 gap-2">
                              <div class="d-flex flex-row gap-2 align-items-center lh-1">
                                <!--icon-->
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                </span>
                                <span>
                                  <!--text-->
                                  <span class="text-gray-800 fw-bold">5.0</span>
                                  (16&nbsp;Reviews)
                                </span>
                              </div>
                              <div class="d-flex flex-row gap-2 align-items-center lh-1">
                                <!--icon-->
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-people-fill text-primary align-baseline" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"></path>
                                  </svg>
                                </span>
                                <!--text-->
                                <span>
                                  <span class="text-gray-800 fw-bold">0+</span>
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
                                <span>{{$candidat->ville->libelleville}}, {{$candidat->pays->libellepays}}</span>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex flex-column gap-2">
                            <!--heading-->
                            <h3 class="mb-0">Compétences</h3>

                            <div class="gap-2 d-flex flex-wrap">
                                @foreach($candidat->competences as $competence)
                                    <a href="#!" class="btn btn-tag btn-sm">{{ $competence->libellecompetence }}</a>
                                @endforeach
                          </div>
                          </div>
                          <div>
                            <span class="badge rounded-pill text-success-emphasis bg-success-subtle border border-success align-items-center">
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-reply-fill me-1 align-text-top" viewBox="0 0 16 16">
                                  <path d="M5.921 11.9 1.353 8.62a.72.72 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"></path>
                                </svg>
                              </span>
                              Réponse automatique
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
                      <h3 class="mb-0">A Propos</h3>
                      <div class="d-flex flex-column">
                        <!--para-->
                        <p class="mb-1">
                            {{$candidat->description}}
                        </p>
                      </div>
                    </div>
                  </div>

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
              <div class="col-xl-4 col-12">
                <!--card-->
                <div class="card">
                  <!--card body-->
                  <div class="card-body px-md-5 pt-2">
                    <!--nav tab-->
                    <ul class="nav nav-lb-tab mb-4" id="tab" role="tablist">
                      <li class="nav-item ms-0" role="presentation">
                        <a class="nav-link active" id="membership-tab" data-bs-toggle="pill" href="#membership" role="tab" aria-controls="membership" aria-selected="true">Information sur le profile</a>
                      </li>

                    </ul>
                    <div class="tab-content" id="tabContent">
                        <!-- Section Liste des Projets -->
                        <div class="tab-pane fade active show" id="projects" role="tabpanel" aria-labelledby="projects-tab">
                            <div class="d-flex flex-column gap-4">
                                <!--heading-->
                                <h3 class="mb-0">
                                    Liste des
                                    <span class="text-success">Projets</span>
                                    :
                                </h3>
                                <div class="d-flex flex-column gap-3">
                                    <!-- Liste des projets -->
                                    <div class="d-flex flex-column gap-4">

                                        <div class="d-flex flex-column gap-1 border rounded p-3">
                                            <h4 class="mb-1">Projet : Application de gestion des tâches</h4>
                                            <div class="d-flex flex-row align-items-center gap-1">
                                                <h3 class="mb-0 h2">1500.00</h3>
                                                <small class="text-gray-800 fw-medium">/ Budget</small>
                                            </div>
                                            <ul class="list-unstyled mb-0 d-flex flex-column gap-2 mt-2">
                                                <li class="d-flex flex-row gap-2">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video text-primary" viewBox="0 0 16 16">
                                                            <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"></path>
                                                            <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 0 0 0 2-2V4a2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z"></path>
                                                        </svg>
                                                    </span>
                                                    <span>Suivi en temps réel</span>
                                                </li>
                                                <li class="d-flex flex-row gap-2">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill text-primary" viewBox="0 0 16 16">
                                                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"></path>
                                                        </svg>
                                                    </span>
                                                    <span>Collaboration d'équipe</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-4 mt-4">
                                <h3 class="mb-0">
                                   Mes
                                    <span class="text-dark">Comptes Réseaux Sociaux</span> :
                                </h3>
                                <div class="d-flex gap-3">
                                    <!-- Facebook -->
                                    <a href="https://www.facebook.com/votreprofil" target="_blank" class="text-decoration-none">
                                        <span class="d-flex justify-content-center align-items-center rounded-circle bg-light" style="width: 40px; height: 40px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook text-primary" viewBox="0 0 16 16">
                                                <path d="M5 8V6h2V4a2 2 0 0 1 2-2h1v3h-1a1 1 0 0 0-1 1v2h2l-1 3H8v8H5V8z"/>
                                            </svg>
                                        </span>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="https://twitter.com/votreprofil" target="_blank" class="text-decoration-none">
                                        <span class="d-flex justify-content-center align-items-center rounded-circle bg-light" style="width: 40px; height: 40px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter text-info" viewBox="0 0 16 16">
                                                <path d="M5 8V6h2V4a2 2 0 0 1 2-2h1v3h-1a1 1 0 0 0-1 1v2h2l-1 3H8v8H5V8z"/>
                                            </svg>
                                        </span>
                                    </a>

                                    <!-- LinkedIn -->
                                    <a href="https://www.linkedin.com/in/votreprofil" target="_blank" class="text-decoration-none">
                                        <span class="d-flex justify-content-center align-items-center rounded-circle bg-light" style="width: 40px; height: 40px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin text-primary" viewBox="0 0 16 16">
                                                <path d="M0 1.146C0 .513.324 0 .72 0h14.56c.397 0 .72.513.72 1.146v13.708c0 .632-.324 1.146-.72 1.146H.72A.715.715 0 0 1 0 14.854V1.146zM5.625 5.291H3.49V12.72h2.134V5.291zm-1.067-3.067c-.713 0-1.292.58-1.292 1.292 0 .713.58 1.291 1.292 1.291.713 0 1.292-.578 1.292-1.291 0-.712-.579-1.292-1.292-1.292zm9.408 3.067h-2.007c-.935 0-1.385.53-1.385 1.236v1.378h2.476V9.9h-2.476v4.82h-2.134V9.9H6.6V7.91h1.454V7.527c0-2.01 1.226-3.117 3.027-3.117.878 0 1.633.065 1.85.094v2.138z"/>
                                            </svg>
                                        </span>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="https://www.instagram.com/votreprofil" target="_blank" class="text-decoration-none">
                                        <span class="d-flex justify-content-center align-items-center rounded-circle bg-light" style="width: 40px; height: 40px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram text-danger" viewBox="0 0 16 16">
                                                <path d="M8 5.667A2.333 2.333 0 1 0 8 10.333a2.333 2.333 0 0 0 0-4.666zM8 1.333c-1.875 0-2.125.008-2.862.041-.732.034-1.24.148-1.672.316a3.626 3.626 0 0 0-1.364.825 3.626 3.626 0 0 0-.825 1.364c-.168.432-.282.94-.316 1.672-.033.737-.041.987-.041 2.862s.008 2.125.041 2.862c.034.732.148 1.24.316 1.672a3.626 3.626 0 0 0 .825 1.364 3.626 3.626 0 0 0 1.364.825c.432.168.94.282 1.672.316.737.033.987.041 2.862.041s2.125-.008 2.862-.041c.732-.034 1.24-.148 1.672-.316a3.626 3.626 0 0 0 1.364-.825 3.626 3.626 0 0 0 .825-1.364c.168-.432.282-.94.316-1.672.033-.737.041-.987.041-2.862s-.008-2.125-.041-2.862c-.034-.732-.148-1.24-.316-1.672a3.626 3.626 0 0 0-.825-1.364 3.626 3.626 0 0 0-1.364-.825c-.432-.168-.94-.282-1.672-.316C10.125 1.34 9.875 1.333 8 1.333zm0 12.667c-1.758 0-2.017-.008-2.733-.041-.684-.033-.946-.142-1.167-.23-.352-.136-.604-.29-.846-.532a2.829 2.829 0 0 1-.532-.846c-.088-.221-.197-.483-.23-1.167-.033-.716-.041-.975-.041-2.733s.008-2.017.041-2.733c.033-.684.142-.946.23-1.167.136-.352.29-.604.532-.846a2.829 2.829 0 0 1 .846-.532c.221-.088.483-.197 1.167-.23.716-.033.975-.041 2.733-.041s2.017.008 2.733.041c.684.033.946.142 1.167.23.352.136.604.29.846.532.295.295.396.487.532.846.088.221.197.483.23 1.167.033.716.041.975.041 2.733s-.008 2.017-.041 2.733c-.033.684-.142.946-.23 1.167-.136.352-.29.604-.532.846a2.829 2.829 0 0 1-.846.532c-.221.088-.483.197-1.167.23-.716.033-.975.041-2.733.041z"/>
                                            </svg>
                                        </span>


                  </div>
                </div>
                        </div>

                        <!-- Section Comptes Réseaux Sociaux -->

            </div>
          </div>
        </section>
        <!--mentor-->
        <section class="pb-xl-8 pb-6">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="mb-4">Candidat Similaire</h2>
              </div>
            </div>
            <div class="row gy-4">
                @foreach ($candidatsSimilar as $candidat)

                @endforeach
                <div class="col-xxl-3 col-xl-3 col-md-6 col-12">
                    <div class="card rounded-4 card-bordered card-lift">
                        <div class="p-3 d-flex flex-column gap-3">
                            <div class="d-flex align-items-center">
                                <a href="{{ route('detail.candidat', $candidat->codeprofile) }}" class="me-3">
                                    <img src="{{ asset('avatar.png') }}" alt="candidat 1" class="rounded-circle avatar-xl mb-3" style="width:70px; height:75px;">
                                </a>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                        <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"></path>
                                    </svg>

                                </div>
                            </div>
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column gap-2">
                                    <div>
                                        <div class="d-flex align-items-center gap-2">
                                            <h3 class="mb-0">
                                                <a href="" class="text-reset">{{ $candidat->nom }} {{ $candidat->prenom }}</a>
                                            </h3>
                                        </div>
                                        <span class="text-gray-800">{{ $candidat->specialite->libellespecialite }}</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between fs-6">
                                        <div>
                                            <span>{{ $candidat->ville->libelleville }}</span>
                                            <div class="vr mx-2 text-gray-200"></div>
                                            <span>{{ count($candidat->experiences) }} ans d'exp</span>
                                        </div>
                                        <div class="d-flex gap-1 align-items-center lh-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                            </svg>
                                            <span class="fw-bold text-dark">{{ $candidat->rating }}</span>
                                            <span>({{ $candidat->reviews }} Avis)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div>

                                        <div class="d-flex flex-row gap-1 align-items-center">
                                            <h4 class="mb-0"><i class="fe fe-eye"></i></h4>
                                            <span class="fs-6">{{rand(1, 90)}}</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="{{route('detail.candidat', $candidat->codeprofile)}}" class="btn btn-outline-dark btn-sm">Consulter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </section>
        <!--mentor-->
      </main>
</div>
