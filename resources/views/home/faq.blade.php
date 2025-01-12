@extends('layout.layout')
@section('title', 'FAQ - Carrière Pro Plus')
@section('content')
<main>
    <div class="py-8 bg-light">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <h1 class="fw-bold mb-1 display-4">Foire Aux Questions (FAQ)</h1>
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
                        <div class="mb-4">
                            <h2 class="mb-0 fw-semibold">Questions Fréquemment Posées</h2>
                        </div>
                        <div class="accordion accordion-flush" id="accordionFAQ">
                            <div class="border p-3 rounded-3 mb-2" id="headingOne">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span class="me-auto">1. Comment puis-je postuler pour le BTS à l'Institut Roosevelt ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Pour postuler au BTS à l'Institut Roosevelt, vous devez remplir le formulaire de candidature disponible sur notre site et fournir les documents requis, tels que vos relevés de notes et votre pièce d'identité.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingTwo">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="me-auto">2. Quelles sont les conditions d'admission pour le BTS ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Les candidats doivent avoir un niveau équivalent au baccalauréat ou un diplôme reconnu, et satisfaire aux critères d’admission spécifiques à chaque filière du BTS.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingThree">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="me-auto">3. Comment suivre l'évolution de ma candidature BTS ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Vous pouvez suivre l'évolution de votre candidature en vous connectant à votre espace candidat sur notre site, où vous trouverez les informations relatives à votre statut de candidature.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingFour">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span class="me-auto">4. Quand commence le processus d'inscription pour le BTS ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Le processus d'inscription pour le BTS commence chaque année au mois de juin. Les dates exactes sont publiées sur notre site officiel.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingFive">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span class="me-auto">5. Comment puis-je contacter l'Institut Roosevelt pour des questions sur la candidature ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Vous pouvez contacter notre équipe en envoyant un e-mail à contact@institutroosevelt.ci ou en appelant notre service client pour toute question concernant votre candidature.
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
