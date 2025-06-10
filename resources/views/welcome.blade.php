@extends('layout.layout')
@section('content')
<section class="bg-secondary py-5">
    <div class="container text-center pt-5 mt-lg-4 mt-xl-5">
        <div class="position-relative mx-auto my-3" style="max-width: 850px;">
            <h1 class="display-3 position-relative z-2 mb-0">
                Moyo, la fintech qui révolutionne l’éducation
            </h1>
            <div class="text-warning position-absolute top-0 start-50 translate-middle-x w-100 mt-md-3">
                <!-- Décoration SVG conservée -->
                <svg width="608" height="66" viewBox="0 0 608 66" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <!-- ... (le SVG reste inchangé) ... -->
                </svg>
            </div>
        </div>
        <p class="fs-lg pb-3 mb-2 mb-sm-3 mb-lg-4 mx-auto" style="max-width: 640px;">
            Une solution intelligente et accessible pour accompagner les élèves et leurs familles vers la réussite scolaire.
        </p>
        <a class="btn btn-lg btn-primary" href="{{ URL::signedRoute('sondages.scolaire') }}">
            Rejoindre Moyo
        </a>
    </div>
    <div class="container-fluid overflow-hidden px-4 pt-3 pt-sm-4 pb-sm-2 pb-md-3 py-lg-4 py-xl-5 mt-4">
        <div class="parallax mx-auto"
            style="max-width: 1440px; transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
            <div class="parallax-layer" data-depth="0.1"
                style="transform: translate3d(-0.9px, -0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </div>
        </div>
    </div>
</section>



<section class=" container py-5 my-sm-2 my-md-4 my-lg-5">
    <h2 class="h1 text-center pt-sm-3 mt-xxl-3 mx-auto" style="max-width: 40rem;">Que propose Moyo ?</h2>
    <p class="fs-lg text-center pb-3 mb-lg-4 mx-auto" style="max-width: 30rem;">Découvrez nos services pour
        améliorer l'encadrement scolaire et le bien-être de vos enfants tout au long de l'année scolaire.</p>
    <div
        class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gy-3 gy-sm-4 gy-xl-5 gx-4 gx-md-5 pb-xxl-4 mb-sm-2 mb-lg-0 mb-xl-2">
        <div class="col">
            <div class="text-center px-xxl-4">
                <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Bouclier -->
                    <path class="text-warning" d="M38 6L14 17V35C14 50 23 60 38 68C53 60 62 50 62 35V17L38 6Z"
                        fill="currentColor" />
                    <!-- Livre ouvert (symbole d'éducation) -->
                    <path class="text-primary" d="M28 30H36V44H28V30ZM40 30H48V44H40V30Z" fill="currentColor" />
                    <!-- Chapeau de graduation -->
                    <path class="text-dark" d="M38 16L52 22L38 28L24 22L38 16ZM38 30V36" stroke="currentColor"
                        stroke-width="2" />
                </svg>
                <h3 class="h4 mb-2">Fournitures scolaires</h3>
                <p>Chez Moyo, les fournitures sont remises dès la livraison. À la réception, les parents règlent une partie du montant + l’adhésion, le reste étant payable sur deux mois.</p>

            </div>
        </div>


        <div class="col">
            <div class="text-center px-xxl-4">
                <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="text-warning"
                        d="M41.0509 9.73004L48.0087 23.7122C48.5213 24.7252 49.4996 25.4287 50.628 25.585L66.2564 27.8611C67.1691 27.9893 67.9974 28.4708 68.5569 29.2056C69.1101 29.9309 69.3476 30.8502 69.2132 31.7537C69.0779 32.6572 68.5746 33.3539 67.9451 33.5219C62.7439 35.4756 57.0775 37.2228 51.0626 39.0853C45.1985 41.1067 39.2902 43.5323 33.2175 45.9521C27.1346 48.3722 21.6907 51.3852 16.0804 54.7806L11.2096 49.9324C10.7626 49.4245 11.1218 48.7017 11.6516 48.3036L21.8998 41.6814L18.6906 30.1589C18.4473 29.2903 18.7769 28.3796 19.6357 28.2828C26.7639 26.7672 34.2868 24.8199 41.0509 9.73004Z"
                        fill="currentColor"></path>
                    <path class="text-primary"
                        d="M23.719 29.6179L17.0009 33.9344L20.3478 45.8032L30.5159 43.9441L34.907 31.0164C35.1438 29.6983 33.8291 28.2963 32.5116 28.5329L23.719 29.6179Z"
                        fill="currentColor"></path>
                </svg>
                <h3 class="h4 mb-2">Encadrement scolaire</h3>
                <p>Nous proposons des services d'encadrement scolaire adaptés pour chaque élève, afin de les
                    aider à progresser dans leurs études avec un suivi personnalisé.</p>
            </div>
        </div>

        <div class="col">
            <div class="text-center px-xxl-4">
                <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Icône représentant une tirelire avec une pièce -->
                    <path class="text-warning"
                        d="M38 6C21 6 8 17 8 31C8 38 12 44 18 48V56H28V48H48V56H58V48C64 44 68 38 68 31C68 17 55 6 38 6ZM38 42C32 42 28 38 28 34C28 30 32 26 38 26C44 26 48 30 48 34C48 38 44 42 38 42Z"
                        fill="currentColor" />
                    <!-- Pièce qui tombe dans la tirelire -->
                    <circle class="text-primary" cx="38" cy="20" r="5" fill="currentColor" />
                </svg>
                <h3 class="h4 mb-2">Cotisations scolaires</h3>
                <p>Épargnez progressivement pour les frais scolaires de vos enfants et planifiez vos dépenses à l’avance
                    pour éviter le stress de la rentrée !</p>
            </div>
        </div>

        <div class="col">
            <div class="text-center px-xxl-4">
                <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="text-primary"
                        d="M32.2274 17.3606C32.3865 17.6845 32.4916 18.0315 32.5387 18.3881L33.4088 31.3253L33.8407 37.8279C33.8452 38.4966 33.9501 39.161 34.1521 39.7997C34.6737 41.0388 35.9286 41.8263 37.2939 41.7714L58.0979 40.4106C58.9988 40.3958 59.8688 40.7327 60.5164 41.3473C61.0561 41.8594 61.4045 42.5294 61.5143 43.25L61.5511 43.6876C60.6902 55.6086 51.9349 65.5516 40.0386 68.1183C28.1424 70.685 15.9433 65.263 10.0647 54.7961C8.36996 51.7552 7.31141 48.4128 6.95119 44.9651C6.80071 43.9445 6.73445 42.9136 6.75306 41.8825C6.73448 29.1018 15.8358 18.0525 28.576 15.3888C30.1094 15.1501 31.6126 15.9618 32.2274 17.3606Z"
                        fill="currentColor"></path>
                    <path class="text-warning"
                        d="M40.7178 6.25268C54.9674 6.6152 66.9438 16.862 69.249 30.6635L69.227 30.7654L69.1641 30.9135L69.1729 31.32C69.1402 31.8586 68.9323 32.3768 68.5739 32.7954C68.2006 33.2314 67.6906 33.5283 67.129 33.6436L66.7865 33.6906L42.7841 35.2458C41.9857 35.3245 41.1907 35.0671 40.597 34.5375C40.1022 34.0962 39.7859 33.5004 39.6965 32.8585L38.0855 8.89094C38.0574 8.8099 38.0574 8.72204 38.0855 8.641C38.1075 7.98035 38.3983 7.35587 38.8929 6.90709C39.3876 6.45831 40.0448 6.22262 40.7178 6.25268Z"
                        fill="currentColor"></path>
                </svg>


                <h3 class="h4 mb-2">Contribution de la diaspora</h3>
                <p>Les membres de la diaspora peuvent cotiser pour les frais scolaires de leurs proches en Côte
                    d'Ivoire. Avec nous, évitez les arnaques et bénéficiez d'une gestion transparente et d'états de
                    paiement clairs pour garantir la bonne réception des fonds.</p>

            </div>
        </div>

        <div class="col">
            <div class="text-center px-xxl-4">
                <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="text-warning"
                        d="M38.0625 6.25C19.9063 6.25 6.75 21.0625 6.75 37.5C6.75 42.75 8.28125 48.1562 10.9688 53.0938C11.4688 53.9062 11.5312 54.9375 11.1875 55.9062L9.09375 62.9062C8.625 64.5937 10.0625 65.8438 11.6562 65.3438L17.9688 63.4688C19.6875 62.9062 21.0312 63.625 22.6281 64.5938C27.1906 67.2812 32.875 68.6562 38 68.6562C53.5 68.6562 69.25 56.6875 69.25 37.4062C69.25 20.7812 55.8125 6.25 38.0625 6.25Z"
                        fill="currentColor"></path>
                    <path class="text-primary" fill-rule="evenodd" clip-rule="evenodd"
                        d="M37.9411 41.5306C35.7224 41.4993 33.9411 39.7181 33.9411 37.4993C33.9411 35.3118 35.7536 33.4993 37.9411 33.5305C40.1599 33.5305 41.9411 35.3118 41.9411 37.5306C41.9411 39.7181 40.1599 41.5306 37.9411 41.5306ZM23.5312 41.5303C21.3438 41.5303 19.5312 39.7178 19.5312 37.5303C19.5312 35.3115 21.3125 33.5303 23.5312 33.5303C25.75 33.5303 27.5312 35.3115 27.5312 37.5303C27.5312 39.7178 25.75 41.499 23.5312 41.5303ZM48.3458 37.5303C48.3458 39.7178 50.1271 41.5303 52.3458 41.5303C54.5646 41.5303 56.3458 39.7178 56.3458 37.5303C56.3458 35.3115 54.5646 33.5303 52.3458 33.5303C50.1271 33.5303 48.3458 35.3115 48.3458 37.5303Z"
                        fill="currentColor"></path>
                </svg>
                <h3 class="h4 mb-2">Communication </h3>
                <p>Nous favorisons une communication fluide entre les parents et les élèves. En cas de litige, nous
                    facilitons les échanges pour résoudre les problèmes, renforçant ainsi la relation parent-enfant et
                    garantissant un environnement éducatif harmonieux.</p>
            </div>
        </div>


        <div class="col">
            <div class="text-center px-xxl-4">
                <svg class="d-inline-block mb-3 mb-md-4" width="76" height="75" viewBox="0 0 76 75"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="text-primary"
                        d="M62.2797 36.3917C59.9969 33.7259 58.9596 31.4158 58.9596 27.4911V26.1567C58.9596 21.0423 57.7825 17.7471 55.2233 14.4519C51.2789 9.33435 44.6387 6.25 38.1382 6.25H37.8618C31.498 6.25 25.0658 9.19272 21.0531 14.1025C18.3542 17.4638 17.0404 20.9007 17.0404 26.1567V27.4911C17.0404 31.4158 16.0714 33.7259 13.7203 36.3917C11.9903 38.3556 11.4375 40.8797 11.4375 43.6116C11.4375 46.3466 12.3351 48.9368 14.1365 51.0423C16.4876 53.5665 19.8077 55.1779 23.1992 55.458C28.1095 56.0182 33.0198 56.2291 38.0016 56.2291C42.9802 56.2291 47.8905 55.8766 52.8039 55.458C56.1923 55.1779 59.5124 53.5665 61.8635 51.0423C63.6618 48.9368 64.5625 46.3466 64.5625 43.6116C64.5625 40.8797 64.0097 38.3556 62.2797 36.3917Z"
                        fill="currentColor"></path>
                    <path class="text-warning"
                        d="M44.277 60.0886C42.7148 59.755 33.1954 59.755 31.6332 60.0886C30.2977 60.397 28.8535 61.1146 28.8535 62.6883C28.9312 64.1895 29.8101 65.5145 31.0276 66.3549L31.0245 66.358C32.5991 67.5855 34.4471 68.366 36.382 68.6461C37.4131 68.7877 38.4629 68.7814 39.5313 68.6461C41.4631 68.366 43.3111 67.5855 44.8857 66.358L44.8826 66.3549C46.1001 65.5145 46.9791 64.1895 47.0567 62.6883C47.0567 61.1146 45.6125 60.397 44.277 60.0886Z"
                        fill="currentColor"></path>
                </svg>
                <h3 class="h4 mb-2">Rapports Détailés</h3>
                <p>Les parents reçoivent des rapports réguliers sur les résultats, le comportement et la progression de
                    leur enfant, favorisant ainsi une meilleure collaboration et un suivi personnalisé.</p>

            </div>
        </div>


    </div>
</section>






<!-- FAQ (Accordion) -->
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
                                Qu’est-ce que Moyo et en quoi est-ce utile pour l’éducation ?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse show" id="questionOne" aria-labelledby="headingOne"
                            data-bs-parent="#faq">
                            <div class="accordion-body fs-sm">
                                Moyo est une fintech qui propose des solutions éducatives innovantes, incluant le paiement échelonné
                                des frais de scolarité, l’achat facilité de fournitures scolaires et un accompagnement pédagogique
                                pour les élèves et leurs familles.
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="accordion-item bg-light">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#questionTwo" aria-expanded="false" aria-controls="questionTwo">
                                En quoi consiste le coaching parental de Moyo ?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="questionTwo" aria-labelledby="headingTwo"
                            data-bs-parent="#faq">
                            <div class="accordion-body fs-sm">
                                Le coaching parental de Moyo accompagne les parents avec des conseils personnalisés, des outils pratiques
                                et des ateliers éducatifs pour mieux soutenir la scolarité et le développement de leurs enfants.
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="accordion-item bg-light">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#questionThree" aria-expanded="false" aria-controls="questionThree">
                                Quels outils éducatifs propose Moyo ?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="questionThree" aria-labelledby="headingThree"
                            data-bs-parent="#faq">
                            <div class="accordion-body fs-sm">
                                Moyo propose des applications et ressources interactives pour renforcer les apprentissages scolaires,
                                adaptées au niveau des élèves et accessibles via notre plateforme.
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="accordion-item bg-light">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#questionFour" aria-expanded="false" aria-controls="questionFour">
                                Comment fonctionne le paiement des frais de scolarité ?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="questionFour" aria-labelledby="headingFour"
                            data-bs-parent="#faq">
                            <div class="accordion-body fs-sm">
                                Grâce à Moyo, vous pouvez payer les frais scolaires en plusieurs fois de manière simple et sécurisée
                                via notre application mobile, incluant les fournitures et services éducatifs.
                            </div>
                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="accordion-item bg-light">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#questionFive" aria-expanded="false" aria-controls="questionFive">
                                Proposez-vous des facilités de financement ?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="questionFive" aria-labelledby="headingFive"
                            data-bs-parent="#faq">
                            <div class="accordion-body fs-sm">
                                Oui. Moyo offre des solutions de financement accessibles, après évaluation, pour aider les familles
                                à couvrir les frais liés à l’éducation de leurs enfants.
                            </div>
                        </div>
                    </div>

                    <!-- Question 6 -->
                    <div class="accordion-item bg-light">
                        <h3 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#questionSix" aria-expanded="false" aria-controls="questionSix">
                                Comment accéder aux services de Moyo ?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="questionSix" aria-labelledby="headingSix"
                            data-bs-parent="#faq">
                            <div class="accordion-body fs-sm">
                                Vous pouvez vous inscrire directement sur notre application mobile ou notre site web,
                                puis choisir les services qui correspondent à vos besoins éducatifs.
                            </div>
                        </div>
                    </div>

                    <!-- Question 7 -->
                    <div class="accordion-item bg-light">
                        <h3 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#questionSeven" aria-expanded="false"
                                aria-controls="questionSeven">
                                Existe-t-il des plans de paiement flexibles ?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="questionSeven"
                            aria-labelledby="headingSeven" data-bs-parent="#faq">
                            <div class="accordion-body fs-sm">
                                Oui, nous proposons des formules de paiement mensuel, trimestriel ou annuel afin de s’adapter
                                au rythme et aux capacités de chaque famille.
                            </div>
                        </div>
                    </div>

                    <!-- Question 8 -->
                    <div class="accordion-item bg-light">
                        <h3 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#questionEight" aria-expanded="false"
                                aria-controls="questionEight">
                                Comment annuler ou modifier un service ?
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="questionEight"
                            aria-labelledby="headingEight" data-bs-parent="#faq">
                            <div class="accordion-body fs-sm">
                                Vous pouvez contacter notre support client via l’application ou le site web pour demander une modification
                                ou une annulation de service, selon les conditions de votre contrat.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container mt-5 mt-sm-4 pb-5 mb-md-2 mb-lg-3 mb-xl-4 mb-xxl-5 mt-4">
        <h2 class="h1 text-center pb-3 pb-lg-4">Témoignages </h2>

        <!-- Swiper slider -->
        <div class="swiper pb-1 pb-md-2 pb-lg-3 pb-xl-4 swiper-initialized swiper-horizontal swiper-autoheight swiper-backface-hidden"
            data-swiper-options="{
          &quot;spaceBetween&quot;: 24,
          &quot;loop&quot;: true,
          &quot;autoHeight&quot;: true,
          &quot;pagination&quot;: {
            &quot;el&quot;: &quot;.swiper-pagination&quot;,
            &quot;clickable&quot;: true
          },
          &quot;breakpoints&quot;: {
            &quot;576&quot;: { &quot;slidesPerView&quot;: 2 },
            &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }
          }
        }">
            <div class="swiper-wrapper" id="swiper-wrapper-3678906c8f89dc44" aria-live="polite"
                style="height: 530px; transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); transition-delay: 0ms;">

                <!-- Témoignage 1 -->
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4"
                    style="width: 380px; margin-right: 24px;" data-swiper-slide-index="0">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img class="rounded-circle" src="{{ asset('avis-moyo/avatr-home-A.jpg') }}" width="60"
                                    alt="Kouadio N’guessan">
                                <div class="ps-3">
                                    <div class="h6 mb-1">Kouadio N’guessan</div>
                                    <div class="fs-sm text-body-secondary">Client de la diaspora</div>
                                </div>
                            </div>
                            <p class="card-text">Moyo m'a permis de soutenir mes enfants en Côte d'Ivoire sans
                                souci. Je peux envoyer de l'argent rapidement pour leur scolarité et suivre leur
                                progrès scolaire grâce aux rapports que je reçois régulièrement. Je suis très
                                satisfait.</p>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 2 -->
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4"
                    style="width: 380px; margin-right: 24px;" data-swiper-slide-index="1">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img class="rounded-circle" src="{{ asset('avis-moyo/image-avis-1.jpg') }}" width="60"
                                    alt="Awa Traoré">
                                <div class="ps-3">
                                    <div class="h6 mb-1">Awa Traoré</div>
                                    <div class="fs-sm text-body-secondary">Client en Côte d'Ivoire</div>
                                </div>
                            </div>
                            <p class="card-text">Grâce à Moyo, ma famille a bénéficié d'un soutien pour les
                                frais scolaires. Nous avons aussi accès aux rapports sur la scolarité de mes
                                enfants, ce qui nous permet de mieux suivre leurs progrès. C’est une solution
                                fiable et pratique pour nous.</p>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 3 -->
                <div class="swiper-slide" role="group" aria-label="3 / 4"
                    style="width: 380px; margin-right: 24px;" data-swiper-slide-index="2">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img class="rounded-circle" src="{{ asset('avis-moyo/avatar-home-3.jpg') }}" width="60"
                                    alt="Brahima Coulibaly">
                                <div class="ps-3">
                                    <div class="h6 mb-1">Brahima Coulibaly</div>
                                    <div class="fs-sm text-body-secondary">Client ivoirien</div>
                                </div>
                            </div>
                            <p class="card-text">Moyo a vraiment changé la donne pour ma famille. En tant que
                                parent d'élève, je peux envoyer de l'argent pour la scolarité de mes enfants et
                                suivre leur évolution scolaire grâce aux rapports. Moyo est une solution moderne
                                et sécurisée.</p>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 4 -->
                <div class="swiper-slide" role="group" aria-label="4 / 4"
                    style="width: 380px; margin-right: 24px;" data-swiper-slide-index="3">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img class="rounded-circle" src="{{ asset('avatarfemme.png') }}" width="60"
                                    alt="Mariam Diomandé">
                                <div class="ps-3">
                                    <div class="h6 mb-1">Mariam Diomandé</div>
                                    <div class="fs-sm text-body-secondary">Assurée en Côte d'Ivoire</div>
                                </div>
                            </div>
                            <p class="card-text">Moyo m'a donné la tranquillité d'esprit. Non seulement j'ai pu
                                envoyer de l'argent pour la scolarité de mes enfants, mais j'ai aussi la
                                possibilité de suivre leur rendement scolaire grâce aux rapports détaillés
                                envoyés. Une très belle initiative pour les familles en Côte d'Ivoire.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination (bullets) -->
            <div
                class="swiper-pagination position-relative bottom-0 mt-2 mt-md-3 mt-lg-4 pt-4 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                    aria-label="Go to slide 1" aria-current="true"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 2"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 3"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 4"></span>
            </div>
        </div>
    </section>
</section>
@endsection 
