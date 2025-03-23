@extends('layout.layout')
@section('title', 'Conditions Générales d\'Utilisation - Moyo Assurance')
@section('content')
    <main class="page-wrapper">
        <!-- Hero -->
        <section class="bg-secondary position-relative overflow-hidden pt-5">
            <div class="container position-relative z-2 pt-4 pt-sm-5 mt-2 mt-sm-0 mt-md-2 mt-lg-3 mt-xl-4 mt-xxl-5">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-11 col-xl-10 text-center pb-2 pb-sm-3 mb-lg-2 mb-xl-3">
                        <h1 class="display-2 fw-normal mb-0">
                            <span class="fw-bold">Conditions Générales d'Utilisation</span> de Moyo Assurance
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Conditions Générales d'Utilisation (Accordion) -->
        <section class="bg-secondary py-5">
            <div class="container py-md-2 py-lg-3 py-xl-5 my-2 my-sm-3 my-md-4 my-xxl-5">
                <div class="row">
                    <div class="col-md-4 text-center text-md-start">
                        <h2 class="h1">Conditions Générales d'Utilisation</h2>
                        <p class="pb-3 pb-sm-4">Moyo Assurance CI est une assurance scolaire offrant une couverture adaptée
                            aux enfants en milieu scolaire. En adhérant à nos services, vous bénéficiez également d’un
                            encadrement scolaire, d’un coaching parental et d’un service financier facilitant la rentrée
                            académique.</p>
                    </div>
                    <div class="col-md-8 col-lg-7 offset-lg-1">
                        <div class="accordion" id="cgu">
                            <!-- Adhésion -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingAdhesion">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#adhesion" aria-expanded="true" aria-controls="adhesion">
                                        Adhésion et Tarification
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse show" id="adhesion"
                                    aria-labelledby="headingAdhesion" data-bs-parent="#cgu">
                                    <div class="accordion-body fs-sm">
                                        L’adhésion à Moyo Assurance CI est ouverte à tous les parents souhaitant assurer la
                                        protection scolaire de leur enfant. Le coût de l’adhésion est de 1€ (soit 655 FCFA).
                                        Ce montant couvre les frais administratifs et permet d’accéder aux services
                                        d’assurance, d’encadrement scolaire et de coaching parental.
                                    </div>
                                </div>
                            </div>

                            <!-- Couverture et Services -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingServices">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#services" aria-expanded="false" aria-controls="services">
                                        Couverture et Services Inclus
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="services" aria-labelledby="headingServices"
                                    data-bs-parent="#cgu">
                                    <div class="accordion-body fs-sm">
                                        <ul>
                                            <li><strong>Assurance scolaire</strong> : Protection en cas d’accident survenant
                                                durant les activités scolaires.</li>
                                            <li><strong>Encadrement scolaire</strong> : Accompagnement des enfants dans leur
                                                parcours éducatif.</li>
                                            <li><strong>Coaching parental</strong> : Conseils et soutien aux parents pour
                                                mieux suivre la scolarité de leur enfant.</li>
                                            <li><strong>Service financier</strong> : Système de cotisation pour une rentrée
                                                académique sereine.</li>
                                            <li><strong>Suivi des cotisations</strong> : Les parents recevront des rapports
                                                mensuels et journaliers de leurs cotisations ainsi que des notifications
                                                automatiques à chaque versement pour une fiabilité optimale.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Disponibilité Internationale -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingDispo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#dispo" aria-expanded="false" aria-controls="dispo">
                                        Disponibilité pour la Diaspora
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="dispo" aria-labelledby="headingDispo"
                                    data-bs-parent="#cgu">
                                    <div class="accordion-body fs-sm">
                                        Les parents vivant à l’étranger peuvent également souscrire à Moyo Assurance CI pour
                                        assurer la protection scolaire de leurs enfants restés au pays. Nos services restent
                                        accessibles aux familles de la diaspora souhaitant garantir une scolarité sereine à
                                        leurs enfants en Côte d’Ivoire.
                                    </div>
                                </div>
                            </div>

                            <!-- Conditions d'Utilisation -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingConditions">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#conditions" aria-expanded="false" aria-controls="conditions">
                                        Conditions d’Utilisation
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="conditions" aria-labelledby="headingConditions"
                                    data-bs-parent="#cgu">
                                    <div class="accordion-body fs-sm">
                                        En adhérant à Moyo Assurance CI, vous acceptez les conditions suivantes :
                                        <ul>
                                            <li>Fournir des informations exactes et à jour lors de l’inscription.</li>
                                            <li>Utiliser les services exclusivement pour la protection scolaire et le suivi
                                                éducatif de votre enfant.</li>
                                            <li>Respecter les règles et engagements liés au service financier de cotisation.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
