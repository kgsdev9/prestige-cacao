@extends('layout.layout')
@section('title', 'Conditions Générales d\'Utilisation - Moyo')
@section('content')
    <main class="page-wrapper">
        <!-- Hero -->
        <section class="bg-secondary position-relative overflow-hidden pt-5">
            <div class="container position-relative z-2 pt-4 pt-sm-5 mt-2 mt-sm-0 mt-md-2 mt-lg-3 mt-xl-4 mt-xxl-5">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-11 col-xl-10 text-center pb-2 pb-sm-3 mb-lg-2 mb-xl-3">
                        <h1 class="display-2 fw-normal mb-0">
                            <span class="fw-bold">Conditions Générales d'Utilisation</span> de Moyo
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- CGU Accordion -->
        <section class="bg-secondary py-5">
            <div class="container py-md-2 py-lg-3 py-xl-5 my-2 my-sm-3 my-md-4 my-xxl-5">
                <div class="row">
                    <div class="col-md-4 text-center text-md-start">
                        <h2 class="h1">Conditions Générales d'Utilisation</h2>
                        <p class="pb-3 pb-sm-4">
                            Moyo est une solution éducative innovante qui accompagne les familles avec des services de cotisation scolaire flexible, d’achat groupé de fournitures et de coaching parental.
                        </p>
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
                                      L’adhésion à Moyo est ouverte à tous les parents souhaitant bénéficier d’un accompagnement scolaire et financier. Le coût de l’adhésion est de 2000 FCFA (soit environ 3,05 €) pour couvrir les frais administratifs.
                                    </div>
                                </div>
                            </div>

                            <!-- Services -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingServices">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#services" aria-expanded="false" aria-controls="services">
                                        Services Inclus
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="services" aria-labelledby="headingServices"
                                     data-bs-parent="#cgu">
                                    <div class="accordion-body fs-sm">
                                        <ul>
                                            <li><strong>Encadrement scolaire</strong> : Suivi des enfants dans leur parcours éducatif.</li>
                                            <li><strong>Coaching parental</strong> : Accompagnement pour aider les parents à mieux suivre la scolarité de leurs enfants.</li>
                                            <li><strong>Service financier</strong> : Cotisations flexibles pour préparer sereinement la rentrée scolaire.</li>
                                            <li><strong>Suivi des cotisations</strong> : Rapports mensuels et journaliers, avec alertes automatiques après chaque versement.</li>
                                            <li><strong>Achat groupé de fournitures</strong> : Accès à du matériel scolaire de qualité à prix réduit.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Diaspora -->
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
                                        Les parents vivant à l’étranger peuvent souscrire aux services de Moyo pour accompagner la scolarité de leurs enfants en Côte d’Ivoire.
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
                                        En adhérant à Moyo, vous acceptez les conditions suivantes :
                                        <ul>
                                            <li>Fournir des informations exactes et à jour lors de l’inscription.</li>
                                            <li>Utiliser les services exclusivement pour l'accompagnement éducatif de votre enfant.</li>
                                            <li>Respecter les engagements liés au service de cotisation.</li>
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
