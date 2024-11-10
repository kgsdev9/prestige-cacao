@extends('layout.layout')
@section('title', 'FAQ - K&H MULTI-SERVICES GROUP')
@section('content')
<main>
    <div class="py-8 bg-light">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <h1 class="fw-bold mb-1 display-4">CARRIERE PRO PLUS FILLALE DU GROUP KHMS GROUP </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- container  -->

    <section class="py-8">
        <div class="container">
            <div class="row mb-6">
                <div class="offset-md-2 col-md-8 col-12">
                    <div class="d-flex flex-column gap-4">
                        <div class="">
                            <h2 class="mb-0 fw-semibold">Questions Fréquemment Posées</h2>
                        </div>
                        <div class="accordion accordion-flush" id="accordionFAQ">
                            <div class="border p-3 rounded-3 mb-2" id="headingOne">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span class="me-auto">1. Qui sommes-nous ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        <strong>K&H MULTI-SERVICES GROUP SARAL</strong> (CI-ABJ-03-2022-B12-01-947) est une SARL au capital de 1 million de francs CFA. Située à Abidjan, nous offrons des solutions complètes et innovantes dans divers secteurs afin de répondre aux besoins de nos clients en Afrique.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingTwo">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="me-auto">2. Quels services offrez-vous en matière de placement de personnel ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Nous fournissons des services de placement de personnel adaptés aux besoins spécifiques des entreprises, en nous assurant de recruter et placer des talents qualifiés et compétents pour chaque mission.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingThree">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="me-auto">3. Quelles solutions informatiques proposez-vous ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Nous proposons des solutions informatiques robustes et sur mesure, de la conception de sites web modernes aux systèmes de gestion d'entreprise, pour optimiser les opérations de nos clients.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingFour">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span class="me-auto">4. Proposez-vous un service de livraison de documents en ligne ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Oui, nous offrons un service de livraison en ligne de courrier et de documents partout en Afrique, garantissant une distribution rapide et sécurisée de vos documents.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingFive">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span class="me-auto">5. Comment puis-je contacter votre support ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Vous pouvez nous contacter via email à <a href="mailto:support@khmultiservices.com">support@khmultiservices.com</a> ou remplir le formulaire de contact sur notre site web.
                                    </div>
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
