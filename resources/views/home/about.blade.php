@extends('layout.layout')
@section('title', 'À propos - Institut Roosevelt')
@section('content')
<main class="page-wrapper">

    <!-- Hero -->
    <section class="bg-secondary position-relative overflow-hidden pt-5">
        <div class="container position-relative z-2 pt-4 pt-sm-5 mt-2 mt-sm-0 mt-md-2 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="row justify-content-center py-4">
                <div class="col-lg-11 col-xl-10 text-center pb-2 pb-sm-3 mb-lg-2 mb-xl-3">
                    <h1 class="display-2 fw-normal mb-0">
                        <span class="fw-bold">Moyo Éducation</span>,
                        la startup qui révolutionne le parcours scolaire en Côte d'Ivoire
                    </h1>
                    <p class="lead mt-3">
                        Simplifiez la vie scolaire de vos enfants avec <strong>Moyo</strong> : paiements numériques, suivi éducatif et accompagnement parental réunis dans une seule plateforme.
                    </p>
                </div>

            </div>
        </div>
    </section>



    <!-- Clients -->
    <section class="container pt-5 mt-xl-3 mt-xxl-4">
        <h2 class="h4 text-center pb-3 pb-md-4 mb-lg-4">
            Orange Banque nous accompagne pour une gestion simplifiée de vos paiements
        </h2>

        <div
            class="row row-cols-3 row-cols-sm-4 row-cols-lg-5 row-cols-xl-6 justify-content-center align-items-center g-4">
            <div class="col text-center">
                <a class="swap-image my-1 my-sm-2" href="#">
                    <img class="swap-to" src="{{ asset('orange-logo.png') }}" width="145" alt="Foster">
                    <div class="swap-from">
                        <img class="d-dark-mode-none" src="{{ asset('orange-logo.png') }}" width="145"
                            alt="Foster">
                        <img class="d-none d-dark-mode-block" src="{{ asset('orange-logo.png') }}" width="145"
                            alt="Foster">
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section class="overflow-hidden py-5 my-md-2 my-xl-4 my-xxl-5">
        <div class="container py-2 py-sm-4 py-lg-5">
            <h2 class="h1 text-center pb-3 mb-3 mb-lg-4 mt-xxl-2">Pourquoi choisir Moyo ?</h2>

            <!-- Étape 1 -->
            <div class="row align-items-center position-relative pb-5 mb-4">
                <div class="col-md-6 col-xl-5 offset-lg-1 order-md-2 mb-4 mb-md-0" data-aos="fade-left">
                    <img src="{{ asset('moyo-card-jaune.jpg') }}" width="525" alt="Image">
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 offset-xl-1 order-md-1" data-aos="fade-right">
                    <div class="pe-md-4 pe-lg-0">
                        <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3">Étape 01</span>
                        <h3 class="h2 mb-3">Cotisez en toute simplicité pour la scolarité</h3>
                        <p class="mb-4">Avec Moyo, les parents peuvent cotiser chaque mois pour couvrir les frais de scolarité, sans stress. Tout est planifié à l’avance pour que la rentrée ne soit plus un fardeau.</p>
                        <a class="btn btn-outline-primary rounded-pill" href="{{route('sondages.scolaire')}}">Commencer à cotiser</a>
                    </div>
                </div>
            </div>

            <!-- Flèche (conservée) -->

            <!-- Étape 2 -->
            <div class="row align-items-center position-relative pb-5 mb-4">
                <div class="col-md-6 col-xl-5 offset-xl-1 mb-4 mb-md-0" data-aos="fade-right">
                    <img src="{{ asset('moyo-green-card.jpg') }}" width="473" alt="Image">
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1" data-aos="fade-left">
                    <div class="ps-md-4 ps-lg-0">
                        <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3">Étape 02</span>
                        <h3 class="h2 mb-3">Profitez d'achats groupés de fournitures scolaires</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex pt-1 mt-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Fournitures de qualité à prix négociés
                            </li>
                            <li class="d-flex pt-1 mt-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Kits livrés à domicile avant la rentrée
                            </li>
                            <li class="d-flex pt-1 mt-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Possibilité de paiement échelonné
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Flèche (conservée) -->

            <!-- Étape 3 -->
            <div class="row align-items-center position-relative">
                <div class="col-md-6 col-xl-5 offset-lg-1 order-md-2 d-md-flex justify-content-end mb-4 mb-md-0" data-aos="fade-left">
                    <img src="{{ asset('banner.png') }}" width="473" alt="Image">
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 offset-xl-1 order-md-1" data-aos="fade-right">
                    <div class="pe-md-4 pe-lg-0">
                        <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3">Étape 03</span>
                        <h3 class="h2 mb-3">Bénéficiez d’un accompagnement éducatif</h3>
                        <p class="mb-4">Suivi personnalisé des enfants, conseils pédagogiques pour les parents, plateforme intuitive : Moyo vous aide à construire un vrai cadre de réussite scolaire, même à distance.</p>
                        <a class="btn btn-outline-primary rounded-pill" href="{{route('sondages.scolaire')}}">Créer un compte</a>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="container pt-5 mt-lg-2 mt-xl-4 mt-xxl-5">
        <div class="row align-items-center pt-2 pt-sm-4 pt-md-5 mt-xl-2 mt-xxl-3 aos-init" data-aos="fade-up"
            data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">

            <div class="col-md-7 offset-xl-1 pb-3 pb-md-0 mb-3 mb-md-0 order-md-2">
                <img class="d-dark-mode-none" src="{{asset('image-1.jpg')}}" width="500" alt="Image">
                <img class="d-none d-dark-mode-block" src="assets/img/about/product/features/02-dark.png" width="744" alt="Image">
            </div>

            <div class="col-md-5 col-xl-4 order-md-1 aos-init" data-aos="fade-up" data-aos-duration="850"
                data-aos-offset="200" data-disable-parallax-down="md">

                <h2 class="mb-lg-4">Votre carte Moyo, un accès simple à tous vos services</h2>
                <p class="pb-1 pb-md-2 mb-xl-4">
                    La carte ou application Moyo vous permet de gérer facilement vos cotisations, vos achats de fournitures et le suivi éducatif de vos enfants, à tout moment et en toute transparence.
                </p>

                <ul class="list-unstyled">
                    <li class="d-flex pt-1 mt-2">
                        <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                        Suivi en temps réel de vos cotisations scolaires.
                    </li>
                    <li class="d-flex pt-1 mt-2">
                        <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                        Accès instantané à votre tableau de bord et aux fournitures commandées.
                    </li>
                    <li class="d-flex pt-1 mt-2">
                        <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                        Suivi éducatif : progression scolaire, alertes et conseils personnalisés.
                    </li>
                </ul>

                <a class="btn btn-outline-primary rounded-pill" href="{{route('sondages.scolaire')}}">Découvrir la carte Moyo</a>
            </div>
        </div>
    </section>



</main>
@endsection