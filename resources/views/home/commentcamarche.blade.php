@extends('layout.layout')
@section('title', 'Comment ça marche ?')
@section('content')

    <section class="container py-5 mt-2 mt-sm-3 mt-md-4">
        <h2 class="h1 text-center pt-lg-3">Comment fonctionne Moyo Assurance CI ?</h2>
        <p class="pb-3 pb-md-4 mb-0 mb-sm-2 mb-lg-3 text-center">Découvrez les étapes simples pour bénéficier de nos services
            d’assurance.</p>

        <div class="row align-items-lg-center">
            <!-- Accordion -->
            <div class="col-md-6 col-lg-5 pb-2 pb-lg-0 mb-4 mb-md-0">
                <div class="accordion accordion-alt" id="moyoProcess">
                    <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#step1"
                                aria-expanded="true" aria-controls="step1">1. Souscription</button>
                        </h3>
                        <div class="accordion-collapse collapse show" id="step1" data-bs-parent="#moyoProcess">
                            <div class="accordion-body">Rendez-vous sur notre site ou contactez un agent agréé pour choisir
                                l’assurance qui correspond à vos besoins.</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#step2" aria-expanded="false" aria-controls="step2">2. Paiement</button>
                        </h3>
                        <div class="accordion-collapse collapse" id="step2" data-bs-parent="#moyoProcess">
                            <div class="accordion-body">Effectuez votre paiement en ligne, via mobile money ou en agence
                                pour activer votre couverture.</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#step3" aria-expanded="false" aria-controls="step3">3. Réception de votre
                                attestation</button>
                        </h3>
                        <div class="accordion-collapse collapse" id="step3" data-bs-parent="#moyoProcess">
                            <div class="accordion-body">Recevez votre attestation d’assurance instantanément par email ou
                                via notre application mobile.</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#step4" aria-expanded="false" aria-controls="step4">4. Assistance et Gestion
                                des Sinistres</button>
                        </h3>
                        <div class="accordion-collapse collapse" id="step4" data-bs-parent="#moyoProcess">
                            <div class="accordion-body">En cas de sinistre, contactez-nous 24/7 pour une assistance rapide
                                et efficace.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image d'illustration -->
            <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
                <div class="ps-lg-4 ps-xl-0">
                    <img class="rounded-5 w-100" src="{{asset('moyo-image.png')}}" alt="Processus Moyo Assurance">
                </div>
            </div>
        </div>
    </section>
@endsection
