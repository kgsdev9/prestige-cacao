@extends('layout.layout')
@section('title', 'Bienvenue sur Carriere pro plus')
@section('content')
<main>
        @livewire('section-recherche')
    <section>
        <div class="container">
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
            <div class="row g-4">
                @foreach($listecanddiat as $candidat)
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
                                            <span class="fs-6">{{$candidat->visiteur?? 0}}</span>
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
                @endforeach
            </div>
        </div>
    </section>


    <section class="bg-dark py-lg-8 py-6 mt-4">
        <div class="container py-lg-6">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-12">
                    <div class="text-center mb-6 d-flex flex-column gap-2">
                        <h2 class="mb-0 text-white h1">Les mentorés témoignent</h2>
                        <p class="mb-0 text-white">
                            Nous avons accompagné des milliers de personnes dans leur carrière.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4 col-12 d-flex flex-column gap-4">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card card-light-primary rounded-4">
                            <!--card body-->
                            <div class="card-body d-flex flex-column gap-3">
                                <!--img-->
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <h5 class="mb-0">Carrierre pro plus </h5>
                                </div>
                                <div>
                                    <!--comment-->
                                    <p class="mb-0 fst-italic fs-5 pe-xxl-5">
                                        “Grâce à Carrière Pro Plus, j'ai obtenu un poste de responsable commercial au Sénégal.”
                                    </p>
                                </div>
                                <div class="d-flex flex-xl-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <div>
                                        <h4 class="mb-0">Jean Serge AKE</h4>
                                        <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Commercial</span>
                                        <span class="fs-6">Responsable Commercial</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <!--card-->
                        <div class="card card-light-primary rounded-4">
                            <div class="card-body d-flex flex-column gap-3">
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <h5 class="mb-0">Carrierre pro plus </h5>
                                </div>
                                <div>
                                    <p class="mb-0 fst-italic fs-5 pe-xxl-5">
                                        “Avec Carrière Pro Plus, j'ai décroché un poste d'assistant support.”
                                    </p>
                                </div>
                                <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <div>
                                        <h4 class="mb-0">Jessica Lupien</h4>
                                        <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                                        <span class="fs-6">Assistant Support</span>
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
                            <div class="card-body d-flex flex-column gap-3">
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <h5 class="mb-0">Carrierre pro plus </h5>
                                </div>
                                <div>
                                    <p class="mb-0 fst-italic fs-5 pe-xxl-5">
                                        “Grâce à Carrière Pro Plus, j'ai trouvé un stage rémunéré.”
                                    </p>
                                </div>
                                <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <div>
                                        <h4 class="mb-0">Koamenan Ange Djibi</h4>
                                        <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                                        <span class="fs-6">Stagiaire à Ecobank</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card card-light-primary rounded-4">
                            <div class="card-body d-flex flex-column gap-3">
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <h5 class="mb-0">Carrierre pro plus </h5>
                                </div>
                                <div>
                                    <p class="mb-0 fst-italic fs-5 pe-xxl-5">
                                        “Cet accompagnement m'a permis de décrocher un poste de Directeur Technique.”
                                    </p>
                                </div>
                                <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <div>
                                        <h4 class="mb-0">Marc Yvan Betti </h4>
                                        <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                                        <span class="fs-6">UI/UX Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-12 d-flex flex-column gap-4">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card card-light-primary rounded-4">
                            <div class="card-body d-flex flex-column gap-3">
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <h5 class="mb-0">Carrierre pro plus </h5>
                                </div>
                                <div>
                                    <p class="mb-0 fst-italic fs-5 pe-xxl-5">
                                        “Grâce à leurs conseils, j'ai obtenu un emploi en tant que carriste.”
                                    </p>
                                </div>
                                <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill py-2 px-3">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <div>
                                        <h4 class="mb-0">Pacou Ange Jonas</h4>
                                        <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                                        <span class="fs-6">Carriste Chez Banaci</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card card-light-primary rounded-4">
                            <div class="card-body d-flex flex-column gap-3">
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <h5 class="mb-0">Carrierre pro plus </h5>
                                </div>
                                <div>
                                    <p class="mb-0 fst-italic fs-5 pe-xxl-5">
                                        “Les formations de Carrière Pro Plus m'ont aidé à évoluer dans mon domaine.”
                                    </p>
                                </div>
                                <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill py-2 px-3">
                                    <img src="{{ asset('avatar.png') }}" alt="avatar user" class="avatar avatar-md rounded-circle">
                                    <div>
                                        <h4 class="mb-0">Patrice Long</h4>
                                        <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                                        <span class="fs-6">Consultant en entreprise</span>
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
