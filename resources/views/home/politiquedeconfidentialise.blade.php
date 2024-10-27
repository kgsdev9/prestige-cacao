@extends('layout.layout')
@section('title', 'Politique de Confidentialité')
@section('content')
<main>
    <div class="py-8 bg-light">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <h1 class="fw-bold mb-1 display-4">Politique de Confidentialité</h1>
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
                            <h2 class="mb-0 fw-semibold">Introduction</h2>
                        </div>
                        <div class="accordion accordion-flush" id="accordionPrivacyPolicy">
                            <div class="border p-3 rounded-3 mb-2" id="headingOne">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span class="me-auto">1. Collecte des Informations</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionPrivacyPolicy">
                                    <div class="pt-2">
                                        Nous collectons des informations personnelles lorsque vous vous inscrivez sur notre plateforme, y compris votre nom, adresse e-mail, et votre expertise. Ces informations sont nécessaires pour fournir nos services.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingTwo">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="me-auto">2. Utilisation des Informations</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionPrivacyPolicy">
                                    <div class="pt-2">
                                        Les informations collectées peuvent être utilisées pour améliorer nos services, personnaliser votre expérience, et vous contacter à propos de votre compte ou de notre plateforme.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingThree">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="me-auto">3. Protection des Informations</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPrivacyPolicy">
                                    <div class="pt-2">
                                        Nous mettons en œuvre des mesures de sécurité appropriées pour protéger vos informations personnelles contre toute divulgation non autorisée ou utilisation abusive.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingFour">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span class="me-auto">4. Vos Droits</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionPrivacyPolicy">
                                    <div class="pt-2">
                                        Vous avez le droit d'accéder à vos informations personnelles, de les corriger ou de demander leur suppression. Si vous souhaitez exercer ces droits, veuillez nous contacter.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingFive">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span class="me-auto">5. Modifications de la Politique</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionPrivacyPolicy">
                                    <div class="pt-2">
                                        Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Les modifications seront publiées sur cette page, et nous vous encourageons à la consulter régulièrement.
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
