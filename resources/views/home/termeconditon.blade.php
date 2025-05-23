@extends('layout.layout')
@section('title', 'Termes et Conditions - Moyo')
@section('content')
    <main class="page-wrapper">
        <section class="bg-secondary position-relative overflow-hidden pt-5">
            <div class="container position-relative z-2 pt-4 pt-sm-5 mt-2 mt-sm-0 mt-md-2 mt-lg-3 mt-xl-4 mt-xxl-5">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-11 col-xl-10 text-center pb-2 pb-sm-3 mb-lg-2 mb-xl-3">
                        <h1 class="display-2 fw-normal mb-0">
                            <span class="fw-bold">Termes et Conditions</span> de Moyo
                        </h1>
                        <p class="fs-lg mt-3">
                            Veuillez lire attentivement nos termes et conditions avant d'utiliser nos services.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-secondary py-5">
            <div class="container py-md-2 py-lg-3 py-xl-5 my-2 my-sm-3 my-md-4 my-xxl-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="accordion" id="terms">

                            <!-- Article 1 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleOne" aria-expanded="true" aria-controls="articleOne">
                                        Objet des Termes et Conditions
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse show" id="articleOne" aria-labelledby="headingOne"
                                    data-bs-parent="#terms">
                                    <div class="accordion-body fs-sm">
                                        Les présents termes et conditions définissent les règles et obligations relatives à
                                        l'utilisation des services proposés par Moyo, notamment la gestion des cotisations scolaires,
                                        le suivi des fournitures et l’accompagnement éducatif.
                                    </div>
                                </div>
                            </div>

                            <!-- Article 2 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleTwo" aria-expanded="false" aria-controls="articleTwo">
                                        Adhésion aux Services
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleTwo" aria-labelledby="headingTwo"
                                    data-bs-parent="#terms">
                                    <div class="accordion-body fs-sm">
                                        L'adhésion aux services de Moyo implique l'acceptation pleine et entière des
                                        termes et conditions décrits ici.
                                    </div>
                                </div>
                            </div>

                            <!-- Article 3 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleThree" aria-expanded="false" aria-controls="articleThree">
                                        Responsabilités et Obligations
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleThree" aria-labelledby="headingThree"
                                    data-bs-parent="#terms">
                                    <div class="accordion-body fs-sm">
                                        Les utilisateurs s'engagent à fournir des informations exactes et à respecter les
                                        conditions d'utilisation des services offerts par Moyo.
                                    </div>
                                </div>
                            </div>

                            <!-- Article 4 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleFour" aria-expanded="false" aria-controls="articleFour">
                                        Protection des Données
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleFour" aria-labelledby="headingFour"
                                    data-bs-parent="#terms">
                                    <div class="accordion-body fs-sm">
                                        Moyo s'engage à protéger la confidentialité et la sécurité des données personnelles
                                        des utilisateurs conformément aux lois en vigueur.
                                    </div>
                                </div>
                            </div>

                            <!-- Article 5 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleFive" aria-expanded="false" aria-controls="articleFive">
                                        Modifications des Conditions
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleFive" aria-labelledby="headingFive"
                                    data-bs-parent="#terms">
                                    <div class="accordion-body fs-sm">
                                        Moyo se réserve le droit de modifier ces termes et conditions à tout moment. Les
                                        utilisateurs seront informés de toute mise à jour importante.
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
