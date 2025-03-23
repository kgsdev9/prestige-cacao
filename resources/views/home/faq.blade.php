@extends('layout.layout')
@section('title', 'Conditions Générales d\'Utilisation - Moyo Assurance')
@section('content')
    <main class="page-wrapper">
        <!-- Hero -->


        <section class="bg-secondary position-relative overflow-hidden pt-5">
            <div class="container position-relative z-2 pt-4 pt-sm-5 mt-2 mt-sm-0 mt-md-2 mt-lg-3 mt-xl-4 mt-xxl-5">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-11 col-xl-10 text-center pb-2 pb-sm-3 mb-lg-2 mb-xl-3">
                        <h1 class="display-2 fw-normal mb-0 ">
                            <span class="fw-bold">Foire Aux Questions (FAQ)</span> de Moyo Assurance CI
                        </h1>

                        <p class="fs-lg  mt-3">
                            Retrouvez ici les réponses aux questions les plus fréquentes sur nos services d'assurance
                            scolaire.
                        </p>
                    </div>
                </div>
            </div>
        </section>





        <!-- Conditions Générales d'Utilisation (Accordion) -->
        <section class="bg-secondary py-5">
            <div class="container py-md-2 py-lg-3 py-xl-5 my-2 my-sm-3 my-md-4 my-xxl-5">
                <div class="row">
                    <div class="col-md-4 text-center text-md-start">
                        <h2 class="h1">Questions fréquentes (FAQ)</h2>
                        <p class="pb-3 pb-sm-4">Découvrez tout ce qu'il faut savoir sur nos services d'assurance
                            scolaire, de coaching parental, d'applications éducatives, ainsi que de paiement des
                            cotisations et des prêts.</p>
                        <div class="d-none d-md-flex justify-content-center">
                            <svg class="text-warning ms-n4" width="200" height="211" viewBox="0 0 200 211"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-7 offset-lg-1">
                        <div class="accordion" id="faq">
                            <!-- Question 1 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#questionOne" aria-expanded="true" aria-controls="questionOne">
                                        Qu'est-ce que l'assurance scolaire proposée par Moyo ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse show" id="questionOne" aria-labelledby="headingOne"
                                    data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm">
                                        Moyo propose une couverture d'assurance scolaire adaptée aux besoins des enfants
                                        en milieu scolaire, garantissant leur protection en cas d'incident ou d'accident
                                        pendant leurs activités scolaires.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#questionTwo" aria-expanded="false" aria-controls="questionTwo">
                                        Qu'est-ce que le coaching parental de Moyo ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionTwo" aria-labelledby="headingTwo"
                                    data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm">
                                        Le coaching parental proposé par Moyo comprend des conseils personnalisés, des
                                        ateliers et des ressources pédagogiques pour aider les parents à mieux
                                        accompagner leurs enfants et renforcer leur réussite scolaire.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#questionThree" aria-expanded="false" aria-controls="questionThree">
                                        Quels types d'applications éducatives Moyo propose-t-il ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionThree" aria-labelledby="headingThree"
                                    data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm">
                                        Moyo met à disposition des applications éducatives interactives, conçues pour
                                        améliorer l'apprentissage des élèves, adaptées à leur niveau et à leurs besoins
                                        pédagogiques.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#questionFour" aria-expanded="false" aria-controls="questionFour">
                                        Comment puis-je payer les cotisations scolaires ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionFour" aria-labelledby="headingFour"
                                    data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm">
                                        Moyo propose une interface applicative simple et sécurisée pour payer les
                                        cotisations scolaires, y compris les frais de scolarité, les fournitures et
                                        autres dépenses liées à l'éducation de vos enfants.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 5 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#questionFive" aria-expanded="false" aria-controls="questionFive">
                                        Est-il possible de bénéficier de prêts avec Moyo ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionFive" aria-labelledby="headingFive"
                                    data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm">
                                        Oui, Moyo propose des prêts sous certaines conditions pour aider les familles à
                                        financer les frais scolaires ou les besoins éducatifs. Ces prêts sont
                                        accessibles via notre plateforme après évaluation de la situation.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 6 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#questionSix" aria-expanded="false" aria-controls="questionSix">
                                        Comment bénéficier des services de Moyo ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionSix" aria-labelledby="headingSix"
                                    data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm">
                                        Pour bénéficier de nos services, vous pouvez vous inscrire directement sur notre
                                        site web et choisir l'offre qui correspond le mieux à vos besoins en tant que
                                        parent ou élève.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 7 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#questionSeven" aria-expanded="false"
                                        aria-controls="questionSeven">
                                        Y a-t-il des options de paiement mensuel ou annuel ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionSeven"
                                    aria-labelledby="headingSeven" data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm">
                                        Oui, Moyo propose des options de paiement mensuel et annuel pour ses services
                                        d'assurance scolaire et de coaching parental, afin de s'adapter aux besoins et
                                        au budget de chaque famille.
                                    </div>
                                </div>
                            </div>

                            <!-- Question 8 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#questionEight" aria-expanded="false"
                                        aria-controls="questionEight">
                                        Que faire si je souhaite annuler un service ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionEight"
                                    aria-labelledby="headingEight" data-bs-parent="#faq">
                                    <div class="accordion-body fs-sm">
                                        Si vous souhaitez annuler un service, vous pouvez contacter notre équipe via
                                        l'interface de support. Nous vous guiderons à travers le processus d'annulation
                                        selon nos conditions générales.
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
