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
                        <div class="">
                            <h2 class="mb-0 fw-semibold">Questions Fréquemment Posées</h2>
                        </div>
                        <div class="accordion accordion-flush" id="accordionFAQ">
                            <div class="border p-3 rounded-3 mb-2" id="headingOne">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span class="me-auto">1. Comment puis-je m'inscrire sur Carrière Pro Plus ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Pour vous inscrire, cliquez sur le bouton "S'inscrire" sur la page d'accueil, remplissez le formulaire avec vos informations personnelles et validez votre inscription.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingTwo">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="me-auto">2. Quelles informations dois-je fournir lors de l'inscription ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Vous devez fournir votre nom, adresse e-mail, et vos expertises ou compétences. Ces informations nous aident à personnaliser votre expérience sur la plateforme.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingThree">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="me-auto">3. Comment puis-je modifier mes informations personnelles ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Vous pouvez modifier vos informations personnelles en vous rendant dans votre profil et en sélectionnant l'option "Modifier mes informations".
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingFour">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span class="me-auto">4. Que faire si j'oublie mon mot de passe ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Si vous oubliez votre mot de passe, cliquez sur "Mot de passe oublié ?" sur la page de connexion et suivez les instructions pour réinitialiser votre mot de passe.
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded-3 mb-2" id="headingFive">
                                <h3 class="mb-0 fs-4">
                                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span class="me-auto">5. Comment puis-je contacter le support ?</span>
                                        <span class="collapse-toggle ms-4">
                                            <i class="fe fe-chevron-down"></i>
                                        </span>
                                    </a>
                                </h3>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                    <div class="pt-2">
                                        Vous pouvez contacter notre support en envoyant un e-mail à support@carriereproplus.com ou en utilisant le formulaire de contact sur notre site.
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
