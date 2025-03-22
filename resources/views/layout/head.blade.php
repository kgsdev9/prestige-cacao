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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon et icônes -->
  
    <link rel="icon" type="image/png" href="{{ asset('flaticon-moyo.png') }}" sizes="32x32">
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
