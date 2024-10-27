@extends('layout.layout')
@section('content')

<main>
        @livewire('section-recherche')
    <section class="py-4 py-lg-8 bg-">
        <div class="container ">
            <!--row-->
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="text-center mb-6 d-flex flex-column gap-2">
                        <h2 class="mb-0 mx-xl-8 h1 text-dark">Les candidats récemment inscrits</h2>
                        <p class="text-muted mx-xl-8">
                            Nos nouveaux talents, prêts pour leur prochaine opportunité !
                        </p>

                    </div>
                </div>
            </div>
            <!--row-->
            <div class="row g-4">

                @foreach($listecanddiat as $candidat)
                <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                    <!--card-->
                    <div class="card rounded-4 card-bordered card-lift">
                        <div class="p-3 d-flex flex-column gap-3">
                            <!--img-->
                            <a href="{{route('detail.candidat', $candidat->codeprofile)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" fill="black" class="img-fluid w-100 rounded-4" viewBox="0 0 16 16">
                                    <path d="M13 7a5 5 0 1 0-10 0 5 5 0 0 0 10 0zM1 14s1-1.5 4-1.5S8 14 8 14H1zm12 0s-1-1.5-4-1.5S8 14 8 14h5z"/>
                                </svg>

                            </a>
                            <!--content-->
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column gap-2">
                                    <div>
                                        <div class="d-flex align-items-center gap-2">
                                            <h3 class="mb-0">
                                                <a href="../candidate/candidate-single.html" class="text-reset">{{ $candidat->nom }} {{ $candidat->prenom }}</a>
                                            </h3>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <span class="text-gray-800">{{ $candidat->specialite->libellespecialite }}</span>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between fs-6">
                                        <div>
                                            <span>@ {{ $candidat->ville->libelleville }}</span>
                                            <div class="vr mx-2 text-gray-200"></div>
                                            <span>{{ count($candidat->experiences) }} ans d'expérience</span>
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
                                            <h4 class="mb-0">Visiteurs</h4>
                                            <span class="fs-6">{{rand(1, 90)}}</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="{{route('detail.candidat', $candidat->codeprofile)}}" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#signupModal">Consulter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="bg-dark-primary py-lg-8 py-6">
        <div class="container py-lg-6">
          <!--row-->
          <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-12">
              <div class="text-center mb-6 d-flex flex-column gap-2">
                <!--heading-->
                <h2 class="mb-0 text-white h1">Les mentorés témoignent pour Carrière Pro Plus</h2>
                <!--para-->
                <p class="mb-0 text-white">
                    Nous avons déjà offert un accompagnement personnalisé à des milliers d'étudiants, professionnels, managers et cadres. Mieux encore, ils ont attribué une note de 4,9 sur 5 à nos mentors.
                </p>
              </div>
            </div>
          </div>
          <div class="row gy-4">
            <div class="col-lg-4 col-12 d-flex flex-column gap-4">
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar 1" class="avatar avatar-md rounded-circle">
                      <h5 class="mb-0">Carrierre pro plus </h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                        “Grâce à Carrière Pro Plus, j'ai obtenu un poste de responsable commercial au Sénégal.

                    </p>

                    </div>
                    <div class="d-flex flex-xl-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-10.jpg" alt="avatar 2" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">Jean Serge AKE</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Commercial</span>
                        </div>
                        <span class="fs-6">Responsable Commercial </span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-7.jpg" alt="avatar 3" class="avatar avatar-md rounded-circle">
                      <h5 class="mb-0">Brou Serge </h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                        “Grâce aux précieux conseils de Carrière Pro Plus, j'ai décroché un poste d'assistant support.
                        <span class="text-primary">Leur accompagnement a été essentiel dans cette réussite.</span>
                        Je recommande vivement leurs services à tous ceux qui cherchent à progresser dans leur carrière.”
                    </p>
                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-8.jpg" alt="avatar 4" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">Jessica Lupien</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                        </div>
                        <span class="fs-6">Assistant Support </span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-12 d-flex flex-column gap-4">
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-2.jpg" alt="avatar 5" class="avatar avatar-md rounded-circle">
                      <h5 class="mb-0">Bev Robertson</h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                        “J'avais du mal à trouver une opportunité. En contactant Carrière Pro Plus pour un accompagnement,
                        <span class="text-primary">j'ai réussi à obtenir un stage rémunéré.</span>
                        Leur soutien a vraiment fait la différence dans ma recherche !”
                    </p>

                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-4.jpg" alt="avatar 6" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">Andrew Lupien</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                        </div>
                        <span class="fs-6">Stagaire A ECOBANK</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-9.jpg" alt="avatar 7" class="avatar avatar-md rounded-circle">
                      <h5 class="mb-0">Doris Esparza</h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                        “Grâce à l'accompagnement de Carrière Pro Plus, j'ai pu renforcer mes compétences en management et en technologies émergentes.
                        <span class="text-primary">Cet accompagnement m'a permis de décrocher le poste de Directeur Technique</span>
                        dans une entreprise innovante, où je peux maintenant diriger des projets passionnants et contribuer à la transformation numérique !”
                    </p>

                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-10.jpg" alt="avatar 8" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">James Anderson</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                        </div>
                        <span class="fs-6">UI/UX Designer at Figma</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-12 d-flex flex-column gap-4">
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-5.jpg" alt="avatar 9" class="avatar avatar-md rounded-circle">
                      <h5 class="mb-0">Marlene Turner</h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                        “Avant de rejoindre Carrière Pro Plus, j'avais des difficultés à trouver un emploi en tant que carriste.
                        <span class="text-primary">Grâce à leur expertise et à leurs conseils personnalisés,</span>
                        j'ai non seulement amélioré mes compétences en conduite de chariot élévateur, mais j'ai aussi décroché un poste dans une entreprise logistique réputée.
                        C'est un véritable tournant dans ma carrière !”
                    </p>

                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill py-2 px-3">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-6.jpg" alt="avatar 10" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">Bernice Perry</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                        </div>
                        <span class="fs-6">Senior business analyst at InstaCart</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-11.jpg" alt="avatar 11" class="avatar avatar-md rounded-circle">
                      <h5 class="mb-0">Daniel Groleau</h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                        “J'ai énormément apprécié les programmes de formation informatique proposés par Carrière Pro Plus.
                        <span class="text-primary">Leur approche pratique et interactive, associée à l'expertise de leurs conseillers techniques réputés,</span>
                        m'a permis d'acquérir des compétences précieuses et de me sentir prêt à relever de nouveaux défis dans le domaine.
                        Je recommande vivement leurs formations à tous ceux qui souhaitent se perfectionner !”
                    </p>

                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill py-2 px-3">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-12.jpg" alt="avatar 12" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">Patrice Long</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                        </div>
                        <span class="fs-6">Software Engineer at Microsoft</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>


      <section class="py-lg-8 py-6">
        <div class="container py-lg-6">
          <!--row-->
          <div class="row">
            <div class="col-md-12">
              <!--text-->
              <div class="d-flex justify-content-center text-center mb-6">
                <h4 class="mb-0">Fiers d'accompagner ces entreprises dans leurs recrutements..</h4>
              </div>
            </div>
          </div>
          <!--row-->
          <div class="row row-cols-xl-7 gy-6">
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-slack.svg" alt="logo 1">
            </div>
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-linkedin.svg" alt="logo 2">
            </div>
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-zoom.svg" alt="logo 3">
            </div>
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-nvidia.svg" alt="logo 4">
            </div>
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-microsoft.svg" alt="logo 5">
            </div>
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-google.svg" alt="logo 6">
            </div>
            <!--logo-->
            <div class="text-center col">
              <img src="../assets/images/mentor/brand-netflix.svg" alt="logo 7">
            </div>
          </div>
        </div>
      </section>

</main>

@endsection
