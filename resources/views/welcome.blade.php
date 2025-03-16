<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO meta tags -->
    <title>Moyo | Assurance Cote d'ivoire </title>
    <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
    <meta name="keywords"
        content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, light and dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">

    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Import Google font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" id="google-font">

    <!-- Vendor styles -->
    <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen" href="assets/vendor/aos/dist/aos.css">

    <!-- Font icons -->
    <link rel="stylesheet" href="assets/icons/around-icons.min.css">

    <!-- Theme styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">

    <!-- Customizer generated styles -->
    <style id="customizer-styles"></style>

    <!-- Page loading styles -->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
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
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            display: block;
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
            vertical-align: text-bottom;
            background-color: #d7dde2;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        [data-bs-theme="dark"] .page-spinner {
            background-color: rgba(255, 255, 255, .25);
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
    </style>



</head>


<!-- Body -->

<body>

    <!-- Customizer modal -->
    <div class="modal fade" id="customizer-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Your custom styles</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-4">
                    <p class="mb-3">Grab the generated styles below. Wrap them inside <code>&lt;style&gt;</code> tag
                        and put in the <code>&lt;head&gt;</code> section of your HTML document.</p>
                    <p class="mb-4"><span class="fw-medium">IMPORTANT:</span> In order for these styles to take effect
                        you have to placed them below:<br><code>&lt;link rel=&quot;stylesheet&quot;
                            media=&quot;screen&quot; href=&quot;assets/css/theme.min.css&quot;&gt;</code></p>
                    <div class="bg-secondary overflow-hidden rounded-4">
                        <pre class="text-wrap bg-transparent border-0 text-dark p-4" id="custom-generated-styles"></pre>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button"
                        data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button" id="copy-styles-btn">
                        <i class="ai-copy me-2 ms-n1"></i>
                        Copy styles
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Customizer toggler -->
    <a class="position-fixed top-50 bg-light text-dark fw-medium border rounded-pill shadow text-decoration-none"
        href="#customizer" data-bs-toggle="offcanvas"
        style="right: -1.75rem; margin-top: -1rem; padding: .25rem .75rem; transform: rotate(-90deg); font-size: calc(var(--ar-body-font-size) * .8125); letter-spacing: .075rem; z-index: 1030;">
        <i class="ai-chat text-body-secondary fs-4 me-2"></i>
        Chat live
    </a>

    <!-- Customizer offcanvas -->
    <div class="offcanvas offcanvas-end" id="customizer" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1">
        <div class="offcanvas-header border-bottom">
            <h4 class="offcanvas-title">Moyo Support</h4>
            <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Message de bienvenue -->
            <div class="alert alert-info mb-3">
                <strong>Bienvenue dans notre support en ligne !</strong> Si vous avez des questions ou si vous avez
                besoin d'aide, n'hésitez pas à discuter avec nous.
            </div>

            <!-- Section Chat en Live -->
            <div class="d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                    <i class="ai-chat text-body-secondary fs-4 me-2"></i>
                    <h5 class="mb-0">Support en ligne</h5>
                </div>
                <div id="chat-box" class="mb-3" style="max-height: 300px; overflow-y: auto;">
                    <!-- Exemple de message de bienvenue dans le chat -->
                    <div class="chat-message system-message">
                        <p>Bonjour ! Comment pouvons-nous vous aider aujourd'hui ? 😊</p>
                    </div>
                    <div class="chat-message system-message">
                        <p>Si vous avez une question fréquente, vous pouvez aussi consulter notre FAQ pour obtenir une
                            réponse rapide.</p>
                    </div>
                </div>
                <div class="d-flex">
                    <input id="message-input" type="text" class="form-control"
                        placeholder="Tapez un message..." />
                    <button id="send-message" class="btn btn-primary ms-2">Envoyer</button>
                </div>
            </div>

            <!-- Section FAQ -->
            <div class="d-flex flex-column mt-4">
                <div class="d-flex align-items-center mb-3">
                    <i class="ai-question-circle text-body-secondary fs-4 me-2"></i>
                    <h5 class="mb-0">Questions Fréquentes</h5>
                </div>
                <ul class="list-unstyled">
                    <li>
                        <a href="#" class="text-body-secondary" data-bs-toggle="collapse"
                            data-bs-target="#faq1">
                            Comment puis-je réinitialiser mon mot de passe ?
                        </a>
                        <div id="faq1" class="collapse">
                            <p>Vous pouvez réinitialiser votre mot de passe en cliquant sur "Mot de passe oublié" sur la
                                page de connexion.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="text-body-secondary" data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            Comment contacter le support ?
                        </a>
                        <div id="faq2" class="collapse">
                            <p>Vous pouvez nous contacter directement via ce chat en ligne ou par email à
                                support@moyo.com.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="text-body-secondary" data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                            Que faire si je rencontre un problème technique ?
                        </a>
                        <div id="faq3" class="collapse">
                            <p>Si vous rencontrez un problème technique, veuillez décrire le problème dans ce chat, et
                                notre équipe vous aidera à le résoudre rapidement.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="offcanvas-header border-top d-none" id="customizer-btns">
            <button class="btn btn-secondary w-100 me-3" type="button" id="customizer-reset-btn">
                <i class="ai-undo fs-lg me-2 ms-n1"></i>
                Reset
            </button>
            <button class="btn btn-primary w-100" type="button" data-bs-toggle="modal"
                data-bs-target="#customizer-modal">
                <i class="ai-code-curly fs-lg me-2 ms-n1"></i>
                Show styles
            </button>
        </div>
    </div>



    <!-- Page wrapper -->
    <main class="page-wrapper">

        <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page -->
        <header class="navbar navbar-expand-lg fixed-top">
            <div class="container">

                <!-- Navbar brand (Logo) -->
                <a class="navbar-brand pe-sm-3" href="index.html">
                    <span class="text-primary flex-shrink-0 me-2">
                        <svg width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z">
                            </path>
                        </svg>
                    </span>
                    Moyo
                </a>

                <!-- Theme switcher -->
                <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
                    <input class="form-check-input" type="checkbox" id="theme-mode">
                    <label class="form-check-label" for="theme-mode">
                        <i class="ai-sun fs-lg"></i>
                    </label>
                    <label class="form-check-label" for="theme-mode">
                        <i class="ai-moon fs-lg"></i>
                    </label>
                </div>

                <!-- Bouton d'action -->
                <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="#">
                    <i class="ai-user-plus fs-xl me-2 ms-n1"></i>
                    Partenaire
                </a>

                <!-- Mobile menu toggler (Hamburger) -->
                <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar collapse (Main navigation) -->
                <nav class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Nos
                                services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Assurance scolaire</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Encadrement</a></li>
                                <li><a class="dropdown-item" href="#">Coaching</a></li>
                                <li><a class="dropdown-item" href="#">Cotisation rentrée</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>



        <section class="bg-secondary py-5">
            <div class="container text-center pt-5 mt-lg-4 mt-xl-5">
                <div class="position-relative mx-auto my-3" style="max-width: 850px;">
                    <h1 class="display-3 position-relative z-2 mb-0">Moyo,votre assurance scolaire pour la vie </h1>
                    <div class="text-warning position-absolute top-0 start-50 translate-middle-x w-100 mt-md-3">
                        <svg width="608" height="66" viewBox="0 0 608 66" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity=".35"
                                d="M45.66 63.0651C48.1682 62.8708 50.692 62.5736 53.2046 62.482C55.5493 62.3949 57.8918 62.3033 60.232 62.2161C73.0671 61.7358 85.8977 61.1192 98.7394 60.9293C112.169 60.7304 125.603 60.402 139.035 60.3663C152.743 60.3328 166.446 60.2747 180.152 60.3417C206.867 60.4757 231.522 59.2366 258.233 59.3013C290.201 57.8797 306.797 56.9045 334.904 55.6546C348.07 55.5876 361.243 55.2681 374.408 55.0111C387.336 54.7632 399.538 53.6311 412.46 53.1396C415.299 53.0323 418.137 52.8201 420.972 52.6548C423.774 52.4894 426.583 52.3576 429.383 52.1432C436.572 51.5913 444.461 51.7091 451.639 51.0545C464.138 49.9061 476.595 48.378 489.11 47.4218C502.221 46.4209 515.361 45.8534 528.486 45.0379C534.408 44.6715 540.366 44.2135 546.249 43.4048C552.974 42.4865 559.639 41.3762 566.288 39.991C572.715 38.6505 579.137 37.2743 585.567 35.9584C588.655 35.3261 591.757 34.7497 594.873 34.2984C598.4 33.7868 601.894 33.2618 605.377 32.5044C607.052 32.138 607.381 29.8927 607.381 28.4494C607.388 27.6273 607.258 26.8297 606.995 26.0567C606.749 25.4065 606.232 24.3676 605.377 24.3967C599.094 24.6089 592.816 24.8234 586.535 25.1205C580.2 25.4177 573.853 25.6009 567.51 25.6903C555.192 25.8578 542.852 25.4311 530.548 24.9172C532.645 24.6335 534.742 24.3498 536.839 24.0638C544.371 23.0361 551.882 21.7448 559.453 21.0522C563.482 20.6813 567.524 20.373 571.541 19.8971C573.579 19.6581 575.599 19.381 577.614 18.9744C579.777 18.5365 581.91 17.9378 584.036 17.339C584.719 17.2653 585.234 16.9212 585.587 16.3158C586.213 15.4489 586.5 14.2872 586.608 13.1746C588.761 12.511 589.194 9.31622 589.194 7.39709C589.207 6.20853 589.022 5.05348 588.635 3.93417C588.261 2.94892 587.55 1.55034 586.297 1.53694C579.758 1.46321 573.23 1.01862 566.691 0.938188C565.93 0.931485 565.163 0.927017 564.397 0.927017C558.77 0.927017 553.155 1.17501 547.535 1.47885C535.016 2.1558 522.495 2.96679 509.989 3.87832C504.175 4.29834 498.369 4.79655 492.551 5.15178C485.435 5.58297 478.335 5.91139 471.212 6.19066C459.296 6.65536 447.361 6.83632 435.438 7.05527C421.763 7.3122 408.106 7.67189 394.447 8.31756C381.795 8.91631 369.155 9.7139 356.512 10.4757C343.816 11.2354 331.122 11.9905 318.427 12.7613C305.415 13.5499 292.394 14.1353 279.373 14.7206C272.783 15.02 266.185 15.1071 259.593 15.297C253.354 15.4758 247.107 15.5227 240.864 15.6143C228.574 15.7952 216.287 15.9069 203.998 16.0343C179.21 16.2867 154.428 16.6934 129.642 17.1067C116.025 17.3346 102.412 17.587 88.7943 17.8439C81.8486 17.9758 74.9007 18.2506 67.9594 18.4539C62.0236 18.6259 56.0901 19.0303 50.1565 19.3364C43.8406 19.6625 37.5247 20.0222 31.2089 20.3886C27.4542 20.6076 23.6952 20.8332 19.9362 21.0522C18.3053 21.1505 16.67 21.2443 15.0346 21.3426C13.5474 21.4297 12.0579 21.5415 10.5729 21.6554C9.51432 21.7358 8.47346 21.89 7.42818 22.0687C6.26798 22.2631 5.11442 22.7859 4.00063 23.1657C3.33545 23.7019 2.87138 24.381 2.61503 25.2099C2.24156 26.3002 2.05814 27.4217 2.0714 28.5768C2.05814 29.7341 2.24156 30.8556 2.61503 31.9459C2.81834 32.3569 3.02165 32.768 3.22496 33.1769C3.60506 33.8292 4.15974 34.1979 4.88901 34.2783C6.1818 34.6492 7.4547 35.0156 8.78063 35.2367C9.50548 35.1563 10.0602 34.7922 10.4381 34.142C10.5817 33.9432 10.7077 33.7309 10.8182 33.5075C11.5121 33.4896 12.2082 33.4919 12.9043 33.4919C13.5695 33.4919 14.2369 33.4874 14.9043 33.4718C16.407 33.4383 17.9053 33.4003 19.4058 33.3645C23.2709 33.2729 27.136 33.1791 31.0011 33.0875C35.1889 32.987 39.3766 32.911 43.5622 32.8373C43.129 32.8753 42.6981 32.9132 42.265 32.9467C32.3735 33.7242 22.4886 34.5062 12.606 35.3931C11.0038 35.5741 9.79056 36.3784 8.95301 37.806C7.71768 39.5129 7.04366 41.7135 6.70996 43.9231C4.97299 43.9075 3.2338 43.8873 1.49682 43.8739C0.28359 43.865 0.0449219 46.0031 0.0449219 46.8252C0.0449219 47.6608 0.28359 49.7564 1.50345 49.7698C3.1675 49.7855 4.83376 49.8145 6.49781 49.8369C6.64146 51.6934 7.01272 53.5098 7.62265 55.2882C8.06905 56.1908 8.51545 57.0934 8.96184 57.9937C9.79719 59.4213 15.9944 65.1786 17.5966 65.3596C26.9466 64.5218 36.3011 63.789 45.66 63.0651Z">
                            </path>
                        </svg>
                    </div>
                </div>
                <p class="fs-lg pb-3 mb-2 mb-sm-3 mb-lg-4 mx-auto" style="max-width: 640px;">
                    Une couverture adaptée à vos besoins, pour une tranquillité d'esprit totale.
                </p>
                <a class="btn btn-lg btn-primary" href="#">Commencer maintenant </a>
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
                            <path class="text-warning"
                                d="M38.0625 6.25C19.9063 6.25 6.75 21.0625 6.75 37.5C6.75 42.75 8.28125 48.1562 10.9688 53.0938C11.4688 53.9062 11.5312 54.9375 11.1875 55.9062L9.09375 62.9062C8.625 64.5937 10.0625 65.8438 11.6562 65.3438L17.9688 63.4688C19.6875 62.9062 21.0312 63.625 22.6281 64.5938C27.1906 67.2812 32.875 68.6562 38 68.6562C53.5 68.6562 69.25 56.6875 69.25 37.4062C69.25 20.7812 55.8125 6.25 38.0625 6.25Z"
                                fill="currentColor"></path>
                            <path class="text-primary" fill-rule="evenodd" clip-rule="evenodd"
                                d="M37.9411 41.5306C35.7224 41.4993 33.9411 39.7181 33.9411 37.4993C33.9411 35.3118 35.7536 33.4993 37.9411 33.5305C40.1599 33.5305 41.9411 35.3118 41.9411 37.5306C41.9411 39.7181 40.1599 41.5306 37.9411 41.5306ZM23.5312 41.5303C21.3438 41.5303 19.5312 39.7178 19.5312 37.5303C19.5312 35.3115 21.3125 33.5303 23.5312 33.5303C25.75 33.5303 27.5312 35.3115 27.5312 37.5303C27.5312 39.7178 25.75 41.499 23.5312 41.5303ZM48.3458 37.5303C48.3458 39.7178 50.1271 41.5303 52.3458 41.5303C54.5646 41.5303 56.3458 39.7178 56.3458 37.5303C56.3458 35.3115 54.5646 33.5303 52.3458 33.5303C50.1271 33.5303 48.3458 35.3115 48.3458 37.5303Z"
                                fill="currentColor"></path>
                        </svg>
                        <h3 class="h4 mb-2">Assurances scolaires</h3>
                        <p>Nous proposons des services d'assurance scolaire pour couvrir tous les risques liés à la
                            scolarité de vos enfants. Soyez sereins avec notre couverture complète.</p>
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
                        <h3 class="h4 mb-2">Encadrement scolaire</h3>
                        <p>Nous proposons des services d'encadrement scolaire adaptés pour chaque élève, afin de les
                            aider à progresser dans leurs études avec un suivi personnalisé.</p>
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
                        <h3 class="h4 mb-2">Contribution de la diaspora</h3>
                        <p>Les membres de la diaspora peuvent également cotiser pour financer les frais scolaires de
                            leurs proches en Afrique. Une manière simple et efficace de soutenir la scolarité à
                            distance.</p>
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
                                        data-bs-target="#questionOne" aria-expanded="true"
                                        aria-controls="questionOne">
                                        Qu'est-ce que l'assurance scolaire proposée par Moyo ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse show" id="questionOne"
                                    aria-labelledby="headingOne" data-bs-parent="#faq">
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#questionTwo" aria-expanded="false"
                                        aria-controls="questionTwo">
                                        Qu'est-ce que le coaching parental de Moyo ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionTwo"
                                    aria-labelledby="headingTwo" data-bs-parent="#faq">
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#questionThree"
                                        aria-expanded="false" aria-controls="questionThree">
                                        Quels types d'applications éducatives Moyo propose-t-il ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionThree"
                                    aria-labelledby="headingThree" data-bs-parent="#faq">
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#questionFour"
                                        aria-expanded="false" aria-controls="questionFour">
                                        Comment puis-je payer les cotisations scolaires ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionFour"
                                    aria-labelledby="headingFour" data-bs-parent="#faq">
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#questionFive"
                                        aria-expanded="false" aria-controls="questionFive">
                                        Est-il possible de bénéficier de prêts avec Moyo ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionFive"
                                    aria-labelledby="headingFive" data-bs-parent="#faq">
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#questionSix" aria-expanded="false"
                                        aria-controls="questionSix">
                                        Comment bénéficier des services de Moyo ?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="questionSix"
                                    aria-labelledby="headingSix" data-bs-parent="#faq">
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#questionSeven"
                                        aria-expanded="false" aria-controls="questionSeven">
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#questionEight"
                                        aria-expanded="false" aria-controls="questionEight">
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

            <section class="container mt-n3 mt-sm-n2 pb-5 mb-md-2 mb-lg-3 mb-xl-4 mb-xxl-5 mt-4">
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
                                        <img class="rounded-circle" src="assets/img/avatar/22.jpg" width="60"
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
                                        <img class="rounded-circle" src="assets/img/avatar/23.jpg" width="60"
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
                                        <img class="rounded-circle" src="assets/img/avatar/24.jpg" width="60"
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
                                        <img class="rounded-circle" src="assets/img/avatar/25.jpg" width="60"
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
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                            role="button" aria-label="Go to slide 1" aria-current="true"></span>
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
    </main>

    <!-- Footer -->
    <footer class="footer bg-white py-5">
        <div class="container pt-md-2 pt-lg-3 pt-xl-4">
            <div class="row pb-4 pb-md-5 pt-sm-2 mb-lg-2">
                <div class="col-md-4 col-lg-3 pb-2 pb-md-0 mb-4 mb-md-0">
                    <a class="navbar-brand text-nav py-0 mb-3 mb-md-4" href="index.html">
                        <span class="text-primary flex-shrink-0 me-2">
                            <svg version="1.1" width="35" height="32" viewBox="0 0 36 33"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z">
                                </path>
                            </svg>
                        </span>
                        <span>Moyo</span>
                    </a>
                    <p class="fs-sm pb-2 pb-md-3 mb-3">Moyo vous accompagne avec des solutions adaptées à vos besoins
                        d'assurance.</p>
                    <div class="d-flex gap-3">
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
                <div class="col-md-8 col-lg-7 col-xl-6 offset-lg-2 offset-xl-3">
                    <div class="row row-cols-1 row-cols-sm-3">
                        <div class="col mb-3 mb-md-0">
                            <ul class="nav flex-column">
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Nos services</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Comment ça marche</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Avis clients</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <ul class="nav flex-column">
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Centre d'aide</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Conditions générales</a>
                                </li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Mentions légales</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Politique de
                                        confidentialité</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <a class="btn btn-secondary px-3 py-2 mb-3 me-3 me-md-0" href="#">
                                <img class="mx-1 d-dark-mode-none" src="assets/img/market/appstore-dark.svg"
                                    width="120" alt="App Store">
                                <img class="mx-1 d-none d-dark-mode-block" src="assets/img/market/appstore-light.svg"
                                    width="120" alt="App Store">
                            </a>
                            <a class="btn btn-secondary px-3 py-2 mb-3 me-3 me-md-0" href="#">
                                <img class="mx-1 d-dark-mode-none" src="assets/img/market/googleplay-dark.svg"
                                    width="119" alt="Google Play">
                                <img class="mx-1 d-none d-dark-mode-block"
                                    src="assets/img/market/googleplay-light.svg" width="119" alt="Google Play">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="nav fs-sm mb-0">
                <span class="text-body-secondary">&copy; Tous droits réservés</span>
                <a class="nav-link d-inline fw-normal p-0 ms-1" href="#" target="_blank" rel="noopener">Moyo
                    Assurance</a>
            </p>
        </div>
    </footer>



    <!-- Back to top button -->
    <a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5"
                stroke-miterlimit="10"></circle>
        </svg>
        <i class="ai-arrow-up"></i>
    </a>


    <!-- Vendor scripts: JS libraries and plugins -->
    <script src="assets/vendor/parallax-js/dist/parallax.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>

    <!-- Customizer -->
    <script src="assets/js/customizer.min.js"></script>
</body>

</html>
