<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO meta tags -->
    <title>Moyo Assurance | Assurance Scolaire en Côte d'Ivoire</title>
    <meta name="description"
        content="Moyo Assurance vous accompagne avec une couverture complète pour la sécurité et l'éducation de vos enfants : assurance scolaire, coaching parental et encadrement éducatif.">
    <meta name="keywords"
        content="assurance scolaire, coaching parental, paiement frais scolaires, encadrement scolaire, Côte d'Ivoire">
    <meta name="author" content="Moyo Assurance">

    <!-- Favicon et icônes -->
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/img/apple-icon-180x180.png">

    <!-- Import Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles CSS Vendor (Swiper, AOS, Icons) -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

    {{-- <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/icons/around-icons.min.css') }}">

    <!-- Theme Bootstrap + Personnalisation -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

    <!-- Script pour gestion du mode sombre/clair -->
    <script src="{{ asset('assets/js/theme-switcher.js') }}"></script>

    <!-- Style de chargement -->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            transition: all .4s .2s ease-in-out;
            z-index: 9999;
        }

        [data-bs-theme="dark"] .page-loading {
            background-color: #121519;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            transform: translateY(-50%);
            opacity: 0;
            transition: opacity .2s ease-in-out;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            font-family: "Inter", sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #6f788b;
        }

        [data-bs-theme="dark"] .page-loading-inner>span {
            color: #fff;
            opacity: .6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            background-color: #d7dde2;
            border-radius: 50%;
            opacity: 0;
            animation: spinner .75s linear infinite;
        }

        [data-bs-theme="dark"] .page-spinner {
            background-color: rgba(255, 255, 255, .25);
        }

        @keyframes spinner {
            0% {
                transform: scale(0);
            }

            50% {
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>


<!-- Body -->

<body>







    <!-- Page wrapper -->
    <main class="page-wrapper">
        <div class="d-lg-flex position-relative h-100">

            <!-- Home button -->
            <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4"
                href="/" data-bs-toggle="tooltip" data-bs-placement="left" title="Retourner à la page d'accueil"
                aria-label="Retourner à la page d'accueil">
                <i class="ai-home"></i>
            </a>

            <!-- Sign up form -->
            <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
                <div class="w-100 mt-auto" style="max-width: 526px;">
                    <h1>Moyo Assurance L'Assurance Scolaire N°1</h1>
                    <p class="pb-3 mb-3 mb-lg-4">
                        Protégez l'avenir de vos enfants avec Moyo Assurance, le leader de l'assurance scolaire en Côte
                        d'Ivoire.
                        Inscrivez-vous dès maintenant et bénéficiez d'une couverture complète pour leur sécurité et leur
                        éducation.
                    </p>

                    <form class="needs-validation" novalidate>
                        <div class="row row-cols-1 row-cols-sm-2">
                            <div class="col mb-4">
                                <input class="form-control form-control-lg" type="text" placeholder="Nom" required>
                            </div>
                            <div class="col mb-4">
                                <input class="form-control form-control-lg" type="text" placeholder="Prénom"
                                    required>
                            </div>
                            <div class="col mb-4">
                                <input class="form-control form-control-lg" type="email" placeholder="Email" required>
                            </div>
                            <div class="col mb-4">
                                <input class="form-control form-control-lg" type="tel" placeholder="Téléphone"
                                    required>
                            </div>
                            <div class="col mb-4">
                                <input class="form-control form-control-lg" type="number"
                                    placeholder="Nombre d'enfants" required>
                            </div>
                            <div class="col mb-4">
                                <input class="form-control form-control-lg" type="text" placeholder="Établissement"
                                    required>
                            </div>
                            <div class="col mb-4">
                                <input class="form-control form-control-lg" type="text" placeholder="Profession"
                                    required>
                            </div>
                            <div class="col mb-4">
                                <input class="form-control form-control-lg" type="text" placeholder="Adresse"
                                    required>
                            </div>
                            <div class="col mb-4">
                                <input class="form-control form-control-lg" type="text" placeholder="Commune"
                                    required>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary w-100 mb-4" type="submit">S'inscrire</button>
                    </form>

                </div>

                <!-- Copyright -->
                <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;">
                    <span class="text-body-secondary">&copy; Tous droits réservés. Propulsé par</span>
                    <a class="nav-link d-inline-block p-0 ms-1" href="https://moyo-ci.com/" target="_blank"
                        rel="noopener">
                        Moyo Assurance
                    </a>
                </p>

            </div>


            <!-- Cover image -->
            <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center"
                style="background-image: url(education-2.jpg);"></div>
        </div>
    </main>


    <!-- Back to top button -->
    <a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5"
                stroke-miterlimit="10"></circle>
        </svg>
        <i class="ai-arrow-up"></i>
    </a>


    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>

    <!-- Customizer -->
    <script src="assets/js/customizer.min.js"></script>
</body>

</html>
