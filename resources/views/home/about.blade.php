@extends('layout.layout')
@section('title', 'À propos - Institut Roosevelt')
@section('content')
<main>
    <div class="py-8 bg-light">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <h1 class="fw-bold mb-1 display-4">INSTITUT ROOSEVELT - FORMATION SUPÉRIEURE</h1>
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
                            <h2 class="mb-0 fw-semibold">À propos de l'Institut Roosevelt</h2>
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
                                        <strong>Institut Roosevelt</strong> est un établissement de formation supérieure reconnu, spécialisé dans l'éducation de qualité dans divers domaines, y compris les sciences, les technologies, et les sciences humaines. Nous offrons des programmes éducatifs adaptés aux besoins des étudiants, pour leur permettre de se préparer à un avenir professionnel réussi.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingTwo">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="me-auto">2. Quels programmes proposez-vous ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Nous proposons une gamme variée de programmes de formation, allant des diplômes de bac +2 à bac +5, couvrant des domaines tels que le management, l'ingénierie, les sciences informatiques, et bien d'autres. Nos formations sont dispensées par des experts dans chaque domaine.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingThree">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="me-auto">3. Quels sont les avantages d'étudier à l'Institut Roosevelt ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        À l'Institut Roosevelt, nous mettons l'accent sur la réussite de nos étudiants. Nous offrons des équipements modernes, un environnement d'apprentissage dynamique, des partenariats avec des entreprises et des stages professionnels qui vous préparent à entrer dans le monde du travail.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingFour">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span class="me-auto">4. Comment puis-je m'inscrire ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        L'inscription à l'Institut Roosevelt se fait en ligne via notre site web. Il vous suffit de remplir le formulaire d'admission, de soumettre les documents requis et de suivre les étapes indiquées pour compléter votre inscription.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingFive">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span class="me-auto">5. Comment puis-je contacter l'Institut Roosevelt ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Vous pouvez nous contacter par email à <a href="mailto:contact@institutroosevelt.com">contact@institutroosevelt.com</a> ou via notre formulaire de contact disponible sur notre site internet.
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
