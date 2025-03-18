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
                            <span class="fw-bold">Moyo Assurance</span>,
                            le leader de l'assurance scolaire en Côte d'Ivoire
                        </h1>
                        <p class="lead mt-3">
                            Offrez à votre enfant la meilleure protection scolaire avec
                            <strong>Moyo Assurance</strong>, le partenaire de confiance des familles et des établissements
                            scolaires.
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
                <h2 class="h1 text-center pb-3 mb-3 mb-lg-4 mt-xxl-2">Pourquoi choisir Moyo Assurance CI ?</h2>

                <!-- Étape 1 -->
                <div class="row align-items-center position-relative pb-5 pb-lg-0 mb-1 mb-sm-2 mb-md-4 mb-lg-0">
                    <div class="col-md-6 col-xl-5 offset-lg-1 order-md-2 pb-2 pb-md-0 mb-4 mb-md-0 aos-init"
                        data-aos="fade-left" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
                        <img class="d-dark-mode-none" src="{{ asset('moyo-card-jaune.jpg') }}" width="525"
                            alt="Image">
                        <img class="d-none d-dark-mode-block" src="{{ asset('moyo-card-jaune.jpg') }}" width="525"
                            alt="Image">
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 offset-xl-1 order-md-1 aos-init" data-aos="fade-right"
                        data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
                        <div class="pe-md-4 pe-lg-0">
                            <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3 mb-lg-4">Étape 01</span>
                            <h3 class="h2 mb-3 mb-lg-4">Moyo Assurance : l’assurance scolaire de confiance</h3>
                            <p class="pb-1 pb-lg-0 mb-4 mb-lg-5">Moyo Assurance CI est l'assurance scolaire numéro une en
                                Côte d'Ivoire. Elle offre une couverture complète et adaptée aux besoins des parents et des
                                étudiants, garantissant ainsi une sécurité optimale à chaque étape de la scolarité.</p>
                            <a class="btn btn-outline-primary rounded-pill" href="#">En savoir plus</a>
                        </div>
                    </div>
                </div>

                <!-- Flèche -->
                <div class="d-none d-lg-flex justify-content-center aos-init aos-animate" data-aos="fade-in"
                    data-aos-duration="500" data-aos-offset="250">
                    <svg class="d-block text-primary" width="339" height="365" viewBox="0 0 339 365" fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        style="margin-left: -150px; margin-top: -140px; margin-bottom: -108px;">
                        <path d="M324 291.371C120.111 291.37 240.756 58.7225 1.00032 73.2606" stroke="url(#arrow1)"
                            stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"></path>
                        <path
                            d="M337.375 290.62C338.074 290.998 338.074 292.001 337.375 292.379L328.476 297.196C327.81 297.557 327 297.074 327 296.317L327 286.683C327 285.925 327.81 285.443 328.476 285.803L337.375 290.62Z"
                            fill="currentColor"></path>
                        <defs>
                            <linearGradient id="arrow1" x1="324" y1="291.5" x2="-2.99974" y2="72.4997"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="currentColor"></stop>
                                <stop offset="1" stop-color="currentColor" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <!-- Étape 2 -->
                <div class="row align-items-center position-relative pb-5 pb-lg-0 mb-1 mb-sm-2 mb-md-4 mb-lg-0">
                    <div class="col-md-6 col-xl-5 offset-xl-1 pb-2 pb-md-0 mb-4 mb-md-0 aos-init" data-aos="fade-right"
                        data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
                        <img class="d-dark-mode-none" src="{{ asset('moyo-green-card.jpg') }}" width="473"
                            alt="Image">
                        <img class="d-none d-dark-mode-block" src="assets/img/landing/saas-2/steps/02-dark.png"
                            width="473" alt="Image">
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 aos-init" data-aos="fade-left"
                        data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
                        <div class="ps-md-4 ps-lg-0">
                            <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3 mb-lg-4">Étape 02</span>
                            <h3 class="h2 mb-3 mb-lg-4">Bénéficiez d’une couverture complète des frais scolaires</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex pt-1 mt-2">
                                    <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                    Couverture des frais de **scolarité**, **fournitures scolaires** et autres **frais liés
                                    à l'école**
                                </li>
                                <li class="d-flex pt-1 mt-2">
                                    <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                    Possibilité de **cotiser de manière échelonnée** avant la rentrée académique
                                </li>
                                <li class="d-flex pt-1 mt-2">
                                    <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                    Garantissez une rentrée scolaire **sans stress** et bien préparée
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Flèche -->
                <div class="d-none d-lg-flex justify-content-center aos-init aos-animate" data-aos="fade-in"
                    data-aos-duration="500" data-aos-offset="250">
                    <svg class="d-block text-primary" width="263" height="275" viewBox="0 0 263 275"
                        fill="none" xmlns="http://www.w3.org/2000/svg"
                        style="margin-top: -60px; margin-left: -120px; margin-bottom: -80px;">
                        <path
                            d="M8.13678 249.647C7.47108 250.081 6.59001 249.602 6.59106 248.808L6.60444 238.689C6.60544 237.931 7.4158 237.45 8.08162 237.811L16.5478 242.408C17.2136 242.77 17.2512 243.712 16.6163 244.125L8.13678 249.647Z"
                            fill="currentColor"></path>
                        <path
                            d="M261.961 37.8891C216.908 65.6243 128.226 135.486 133.916 193.05C141.029 265.005 265.134 173.468 173.666 148.634C89.2542 125.715 30.9125 210.547 13.9796 236.702"
                            stroke="url(#arrow2)" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"></path>
                        <defs>
                            <linearGradient id="arrow2" x1="13.9797" y1="234.5" x2="276.704" y2="60.1939"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="currentColor"></stop>
                                <stop offset="1" stop-color="currentColor" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <!-- Étape 3 -->
                <div class="row align-items-center position-relative">
                    <div class="col-md-6 col-xl-5 offset-lg-1 order-md-2 d-md-flex justify-content-end pb-2 pb-md-0 mb-4 mb-md-0 aos-init"
                        data-aos="fade-left" data-aos-duration="500" data-aos-offset="250"
                        data-disable-parallax-down="md">
                        <img class="d-dark-mode-none" src="assets/img/landing/saas-2/steps/03-light.png" width="473"
                            alt="Image">
                        <img class="d-none d-dark-mode-block" src="assets/img/landing/saas-2/steps/03-dark.png"
                            width="473" alt="Image">
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 offset-xl-1 order-md-1 aos-init" data-aos="fade-right"
                        data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
                        <div class="pe-md-4 pe-lg-0">
                            <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3 mb-lg-4">Étape 03</span>
                            <h3 class="h2 mb-3 mb-lg-4">Souscrivez facilement en ligne</h3>
                            <p class="pb-1 pb-lg-0 mb-4 mb-lg-5">Souscrivez à notre assurance scolaire en toute simplicité
                                grâce à notre plateforme en ligne. Recevez instantanément vos documents d'assurance et
                                accédez à un service client dédié à vos besoins.</p>
                            <a class="btn btn-outline-primary rounded-pill" href="#">Souscrire maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section class="container pt-5 mt-lg-2 mt-xl-4 mt-xxl-5">
            <div class="row align-items-center pt-2 pt-sm-4 pt-md-5 mt-xl-2 mt-xxl-3 aos-init" data-aos="fade-up"
                data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
                <div class="col-md-7 offset-xl-1 pb-3 pb-md-0 mb-3 mb-md-0 order-md-2">
                    <img class="d-dark-mode-none" src="assets/img/about/product/features/02-light.png" width="744"
                        alt="Image">
                    <img class="d-none d-dark-mode-block" src="assets/img/about/product/features/02-dark.png"
                        width="744" alt="Image">
                </div>
                <div class="col-md-5 col-xl-4 order-md-1 aos-init" data-aos="fade-up" data-aos-duration="850"
                    data-aos-offset="200" data-disable-parallax-down="md">
                    <h2 class="mb-lg-4">Avantages de la Carte d'Assurance Moyo</h2>
                    <p class="pb-1 pb-md-2 mb-xl-4">
                        La carte d'assurance Moyo Assurance CI vous permet de scanner et visualiser vos cotisations
                        automatiquement, en accédant directement à vos informations en ligne. Grâce à cette carte, vous
                        bénéficiez de plusieurs avantages :
                    </p>
                    <ul class="list-unstyled">
                        <li class="d-flex pt-1 mt-2">
                            <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                            Suivi en temps réel de vos cotisations et de votre couverture d'assurance.
                        </li>
                        <li class="d-flex pt-1 mt-2">
                            <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                            Accès immédiat à vos documents d'assurance et à votre compte personnel.
                        </li>
                        <li class="d-flex pt-1 mt-2">
                            <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                            Possibilité de scanner la carte pour voir instantanément les informations actualisées.
                        </li>
                    </ul>
                    <a class="btn btn-outline-primary rounded-pill" href="#">En savoir plus sur la carte</a>
                </div>
            </div>
        </section>


    </main>
@endsection
