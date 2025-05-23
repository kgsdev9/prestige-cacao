@extends('layout.layout')
@section('title', 'Comment ça marche ?')
@section('content')

    <section class="container py-5 mt-2 mt-sm-3 mt-md-4">
        <h2 class="h1 text-center pt-lg-3">Comment fonctionne Moyo ?</h2>
        <p class="pb-3 pb-md-4 mb-0 mb-sm-2 mb-lg-3 text-center">Découvrez les étapes simples pour bénéficier de notre accompagnement éducatif et financier.</p>

        <div class="row align-items-lg-center">
            <!-- Accordion -->
            <div class="col-md-6 col-lg-5 pb-2 pb-lg-0 mb-4 mb-md-0">
                <div class="accordion accordion-alt" id="moyoProcess">
                    <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#step1"
                                aria-expanded="true" aria-controls="step1">1. Inscription</button>
                        </h3>
                        <div class="accordion-collapse collapse show" id="step1" data-bs-parent="#moyoProcess">
                            <div class="accordion-body">Rendez-vous sur notre site ou contactez un agent pour vous inscrire à nos services éducatifs et financiers.</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#step2" aria-expanded="false" aria-controls="step2">2. Cotisation</button>
                        </h3>
                        <div class="accordion-collapse collapse" id="step2" data-bs-parent="#moyoProcess">
                            <div class="accordion-body">Effectuez vos cotisations en ligne, via mobile money ou en agence pour activer votre accès aux services.</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#step3" aria-expanded="false" aria-controls="step3">3. Accès aux services</button>
                        </h3>
                        <div class="accordion-collapse collapse" id="step3" data-bs-parent="#moyoProcess">
                            <div class="accordion-body">Accédez à l’accompagnement scolaire, au coaching parental, et à l’achat groupé de fournitures via notre plateforme.</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#step4" aria-expanded="false" aria-controls="step4">4. Suivi personnalisé</button>
                        </h3>
                        <div class="accordion-collapse collapse" id="step4" data-bs-parent="#moyoProcess">
                            <div class="accordion-body">Suivez l’évolution de vos cotisations et bénéficiez d’un accompagnement continu pour la réussite scolaire de votre enfant.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image d'illustration -->
            <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
                <div class="ps-lg-4 ps-xl-0">
                    <img class="rounded-5 w-100" src="{{asset('moyo-image.png')}}" alt="Processus Moyo">
                </div>
            </div>
        </div>
    </section>
@endsection
