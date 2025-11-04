<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- Description optimisée -->
    <meta name="description"
        content="Prestige Cacao est une boisson pétillante à base de cacao, alliant raffinement, tradition ivoirienne et élégance moderne. Découvrez nos événements, nos ambassadeurs et notre univers.">
    <meta name="keywords"
        content="Prestige Cacao, boisson cacao, champagne ivoirien, boisson pétillante, marque ivoirienne, boisson de luxe, cacao, ambassadeur, événement, Côte d'Ivoire">
    <meta name="author" content="Prestige Cacao Officiel">

    <!-- Titre de la page -->
    <title>Prestige Cacao – L'élégance en bouteille</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('flaticons.jpeg') }}">

    <!-- Google Fonts Css -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
</head>



<body>



    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand d-flex align-items-center" href="/">
                        <img src="{{ asset('logo-prestige-cacao.png') }}" alt="Logo" class="img-fluid"
                            style="max-height: 80px;">
                    </a>
                    <!-- Logo End -->

                    <!-- Burger Button for Mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu" id="navbarContent">
                        <div class="nav-menu-wrapper ms-auto">
                            <!-- Menu supprimé -->
                        </div>

                        <!-- Header Contact Box Start -->
                        <div class="header-contact-box d-flex align-items-center ms-3">
                            <!-- Header Social List Start -->
                            <div class="header-social-list me-3">
                                <ul class="d-flex list-unstyled mb-0">
                                    <li>
                                        <a href="https://www.instagram.com/prestige_chocolat?igsh=MXJya2RyN2YzM3gxZQ=="><i
                                                class="fa-brands fa-instagram text-dark"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Header Social List End -->

                            <!-- Header Contact Btn Start -->
                            <div class="header-contact-btn">
                                <a href="https://wa.me/33761773364" target="_blank" class="btn btn-outline-dark">
                                    Contact
                                </a>
                            </div>

                            <!-- Header Contact Btn End -->
                        </div>
                        <!-- Header Contact Box End -->
                    </div>
                    <!-- Main Menu End -->
                </div>
            </nav>
        </div>
    </header>

    @yield('content')


    <!-- Main Footer Start -->
    <footer class="main-footer bg-light text-dark py-5">
        <div class="container text-center">
            <!-- Logo -->
            <div class="mb-3">
                <img src="{{ asset('logo-prestige-cacao.png') }}" alt="Prestige Cacao" style="max-height:80px;">
            </div>

            <!-- Slogan ou courte description -->
            <p class="mb-3">L'élégance en bouteille. Découvrez l'expérience Prestige Cacao.</p>


            <!-- Contact rapide -->
            <p class="mb-1"><a href="mailto:prestigechocolat.laho@gmail.com"
                    class="text-dark">prestigechocolat.laho@gmail.com</a></p>

            <p class="mb-1"><a href="#" class="text-dark">5 rue Saint Louis - 78100
                    Saint Germain en Laye
                </a></p>
            <p class="mb-3"><a href="tel:+33761773364" class="text-dark">+33761773364</a></p>

            <!-- Copyrigh
                t -->
            <p class="small text-muted">&copy; 2025 Prestige Cacao. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Main Footer End -->
   

    <script src="{{asset('alpine.js')}}" defer></script>
    <!-- Jquery Library File -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('js/SplitText.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('js/function.js') }}"></script>

</body>

</html>
