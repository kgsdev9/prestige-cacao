<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('layout.head') <!-- Inclure le fichier de la tête, CSS, JS, etc. -->

<body>
    <!-- Wrapper principal de la page -->
    <main class="page-wrapper">
        <div class="d-lg-flex position-relative h-100">

            <!-- Logo visible on screens < 992px -->
            <div class="d-flex d-lg-none justify-content-center pt-4 px-3 mx-auto" style="max-width: 420px;">
                <a class="navbar-brand pe-sm-3" href="/">
                    <span class="text-primary flex-shrink-0 me-2">

                        <img src="http://localhost:8000/logo-m-moyo.png" style="height:32px;width:35px;" alt="">


                    </span>
                    oyo
                </a>
            </div>

            <!-- Parallax gfx -->
            <div class="w-sm-75 w-lg-100 p-4 overflow-hidden mx-auto mx-lg-0 order-lg-2" style="max-width: 1047px;">
                <div class="p-sm-3 h-100">
                    <div class="position-relative h-80">


                        <div class="parallax h-100 z-2 overflow-hidden"
                            style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                            <div class="parallax-layer d-flex align-items-end mb-n2 mb-lg-0"
                                style="margin-top: 4.4%; transform: translate3d(-5.3px, 0.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"
                                data-depth="0.1">
                                <img src="{{ asset('moyo-card-jaune.jpg') }}" alt="Girl">
                            </div>
                        </div>
                        <div class="parallax position-absolute top-0 start-0 w-100 h-100 z-2"
                            style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">

                            <div class="parallax-layer d-flex align-items-end"
                                style="padding: 0px 59.35% 70.4% 30.4%; transform: translate3d(-10.7px, 1.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"
                                data-depth="0.2">
                                <svg class="text-white" width="100" height="90" viewBox="0 0 100 90"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M25.8715 89.2559L28.5411 88.5681L25.5817 77.117L38.7756 75.0037L35.4411 62.0913L48.6485 59.9721L45.3139 47.0597L58.5079 44.9464L55.1673 32.0206L68.3747 29.9013L65.0402 16.989L78.2551 14.8502L74.553 0.457076L71.8699 1.15091L74.8352 12.6155L61.6008 14.7467L64.9549 27.6666L51.7339 29.7918L55.082 42.6982L41.8746 44.8175L45.2091 57.7299L32.0017 59.8491L35.3497 72.7555L22.1423 74.8748L25.8715 89.2559Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="parallax-layer d-flex align-items-end"
                                style="padding: 0px 11.58% 89.64% 81.28%; transform: translate3d(8px, -1.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"
                                data-depth="-0.15">
                                <svg class="text-warning" width="69" height="55" viewBox="0 0 69 55"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M56.2836 55L68.9438 53.6761L68.704 51.3308L58.6187 52.3774L58.5303 40.9663L47.1702 42.1515L47.0692 30.7279L35.709 31.9131L35.6207 20.4895L24.2479 21.6747L24.1469 10.251L12.7741 11.4363L12.6731 0L0.000184965 1.29872L0.240014 3.64399L10.338 2.61004L10.4389 14.0463L21.8117 12.8611L21.9001 24.2847L33.2729 23.1121L33.3612 34.5232L44.734 33.3379L44.8224 44.7616L56.1952 43.5764L56.2836 55Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="parallax-layer d-flex align-items-end"
                                style="padding: 0px 70.94% 54.29% 24.4%; transform: translate3d(18.7px, -3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"
                                data-depth="-0.35">
                                <svg class="text-warning" width="45" height="45" viewBox="0 0 45 45"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.5089 45C34.9147 45 45 34.9187 45 22.5C45 10.0991 34.9147 0 22.5089 0C10.1031 0 -1.8272e-06 10.0813 -1.8272e-06 22.5C-1.8272e-06 34.9187 10.1031 45 22.5089 45ZM22.5089 3.35449C33.0762 3.35449 41.662 11.9548 41.662 22.5178C41.662 33.0809 33.0583 41.6812 22.5089 41.6812C11.9417 41.6812 3.33795 33.0809 3.33795 22.5178C3.33795 11.9548 11.9417 3.35449 22.5089 3.35449Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="parallax-layer d-flex align-items-end"
                                style="padding: 0px 69.6% 92.57% 26.37%; transform: translate3d(13.4px, -2.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"
                                data-depth="-0.25">
                                <svg class="text-white" width="39" height="38" viewBox="0 0 39 38"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.6989 38L39 11.0113L11.3011 0L7.10921e-07 26.9886L27.6989 38ZM35.6207 12.4013L26.2724 34.7074L3.37926 25.5987L12.7276 3.2926L35.6207 12.4013Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="parallax-layer d-flex align-items-end"
                                style="padding: 0px 17.48% 74.58% 79.94%; transform: translate3d(-10.7px, 1.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"
                                data-depth="0.2">
                                <div class="ratio ratio-1x1 border border-white border-2 rounded-circle"></div>
                            </div>
                            <div class="parallax-layer d-flex align-items-end"
                                style="padding: 0px 87.38% 66.96% 11.27%; transform: translate3d(-8px, 1.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"
                                data-depth="0.15">
                                <div class="ratio ratio-1x1 bg-white rounded-circle"></div>
                            </div>
                            <div class="parallax-layer d-flex align-items-end"
                                style="padding: 0px 46.23% 91.84% 52.43%; transform: translate3d(-18.7px, 3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"
                                data-depth="0.35">
                                <div class="ratio ratio-1x1 bg-warning rounded-circle"></div>
                            </div>
                            <div class="parallax-layer d-flex align-items-end"
                                style="padding: 0px 3.6% 56.17% 94.93%; transform: translate3d(-21.4px, 3.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"
                                data-depth="0.4">
                                <div class="ratio ratio-1x1 bg-warning rounded-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Page content -->
            <div class="d-flex flex-column align-items-center w-lg-50 px-3 px-sm-4 px-xl-5 pt-lg-5 order-lg-1">

                <!-- Logo visible on screens > 991px -->
                <div class="w-100 d-none d-lg-block" style="max-width: 420px;">
                    <a class="navbar-brand pe-sm-3" href="/">
                        <span class="text-primary flex-shrink-0 me-2">

                            <img src="{{ asset('logo-m-moyo.png') }}" style="height:32px;width:35px;" alt="">
                        </span>
                        oyo
                    </a>
                </div>

                <!-- Text + Countdown + Form -->
                <div class="w-100 text-center text-lg-start mt-auto pt-lg-5 pb-5" style="max-width: 420px;">
                    <h1 class="display-3 mb-4">Bienvenue sur Moyo Assurance</h1>
                    <p class="fs-lg pb-3 mb-4 mb-xl-5">
                        Nous sommes heureux de vous accueillir. Découvrez toutes nos offres et restez à l'écoute pour
                        plus de mises à jour !
                    </p>



                    <!-- Formulaire de notification -->
                    <a href="{{route('login.assurance')}}" class="btn btn-primary">Connexion</a>
                </div>


                <!-- Social links -->
                <div class="w-100 mt-auto pb-5" style="max-width: 420px;">
                    <div class="d-flex justify-content-center justify-content-lg-start gap-3">
                        <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle" href="#"
                            aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle" href="#"
                            aria-label="Instagram">
                            <i class="ai-instagram"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle" href="#"
                            aria-label="LinkedIn">
                            <i class="ai-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layout.script') <!-- Footer inclus -->

</body>

</html>
