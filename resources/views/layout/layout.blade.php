<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('layout.head')



<body>
    <a class="position-fixed top-50 bg-light text-dark fw-medium border rounded-pill shadow text-decoration-none"
        href="#customizer" data-bs-toggle="offcanvas"
        style="right: -1.75rem; margin-top: -1rem; padding: .25rem .75rem; transform: rotate(-90deg); font-size: calc(var(--ar-body-font-size) * .8125); letter-spacing: .075rem; z-index: 1030;">
        <i class="ai-chat text-body-secondary fs-4 me-2"></i>
        Chat live
    </a>
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
                        <p>Bonjour ! Comment pouvons-nous vous aider aujourd'hui ? ð</p>
                    </div>
                    <div class="chat-message system-message">
                        <p>Si vous avez une question fréquente, vous pouvez aussi consulter notre FAQ pour obtenir une
                            réponse rapide.</p>
                    </div>
                </div>
                <div class="d-flex">
                    <input id="message-input" type="text" class="form-control" placeholder="Tapez un message..." />
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
                        <a href="#" class="text-body-secondary" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Comment puis-je réinitialiser mon mot de passe ?
                        </a>
                        <div id="faq1" class="collapse">
                            <p>Vous pouvez réinitialiser votre mot de passe en cliquant sur "Mot de passe oublié" sur la
                                page de connexion.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="text-body-secondary" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Comment contacter le support ?
                        </a>
                        <div id="faq2" class="collapse">
                            <p>Vous pouvez nous contacter directement via ce chat en ligne ou par email à
                                support@moyo.com.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="text-body-secondary" data-bs-toggle="collapse" data-bs-target="#faq3">
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
                <a class="navbar-brand pe-sm-3" href="{{ URL::signedRoute('home') }}">
                    <span class="text-primary flex-shrink-0 me-2">
                        <img src="{{ asset('logo-m-moyo.png') }}" style="height:32px;width:35px;" alt="">
                    </span>
                    oyo
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


                @guest
                    <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex"
                        href="{{ URL::signedRoute('login.assurance') }}">
                        <i class="ai-user-plus fs-xl me-2 ms-n1"></i>
                        Connexion
                    </a>
                @else
                    <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex"
                        href="{{ route('dashboard') }}">
                        <i class="ai-home fs-xl me-2 ms-n1"></i>
                        Tableau de bord
                    </a>

                @endguest


                <!-- Mobile menu toggler (Hamburger) -->
                <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar collapse (Main navigation) -->
                <nav class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{ URL::signedRoute('home') }}">Accueil</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('conseils.scolaire') ? 'active' : '' }}"
                                href="{{ URL::signedRoute('conseils.scolaire') }}">Bank Finance</a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                href="{{ URL::signedRoute('about') }}">Pourquoi nous ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact.page') ? 'active' : '' }}"
                                href="{{ URL::signedRoute('contact.page') }}">Contact</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </header>


        @yield('content')

    </main>

    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container pt-md-2 pt-lg-3 pt-xl-4">
            <div class="row pb-4 pb-md-5 pt-sm-2 mb-lg-2">
                <div class="col-md-4 col-lg-3 pb-2 pb-md-0 mb-4 mb-md-0">
                    <a class="navbar-brand text-nav py-0 mb-3 mb-md-4" href="{{ URL::signedRoute('home') }}">
                        <span class="text-primary flex-shrink-0 me-2">
                            <img src="{{ asset('logo-m-moyo.png') }}" style="height:60px;" alt="">
                        </span>
                        <span>oyo</span>
                    </a>
                    <p class="fs-sm pb-2 pb-md-3 mb-3">Moyo vous accompagne avec des solutions adaptées à vos besoins
                        d'assurance.</p>
                    <div class="d-flex gap-3">
                        <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle"
                            href="https://www.facebook.com/share/1XA7hsYVpJ/" target="" aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>

                        <a class="btn btn-icon btn-sm btn-success btn-whatsapp rounded-circle"
                            href="https://whatsapp.com/channel/0029Vb4oJ7DDTkK6Pv3XDh2h" target="_blank"
                            aria-label="WhatsApp">
                            <i class="ai-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-7 col-xl-6 offset-lg-2 offset-xl-3">
                    <div class="row row-cols-1 row-cols-sm-3">
                        <div class="col mb-3 mb-md-0">
                            <ul class="nav flex-column">
                              
                                <li><a class="nav-link fw-normal py-1 px-0"
                                        href="{{ URL::signedRoute('home.promoteur') }}">Devenir promoteur</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0"
                                        href="{{ URL::signedRoute('emploi') }}">Offre d'emploi</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0"
                                        href="{{ URL::signedRoute('comment.ca.marche') }}">Comment ça marche</a></li>
                              

                            </ul>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <ul class="nav flex-column">
                                <li><a class="nav-link fw-normal py-1 px-0"
                                        href="{{ URL::signedRoute('faq') }}">Faq</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0"
                                        href="{{ URL::signedRoute('condition.utilisation') }}">Conditions
                                        générales</a>
                                </li>
                                <li><a class="nav-link fw-normal py-1 px-0"
                                        href="{{ URL::signedRoute('terme.conditon') }}">Termes
                                        et condition</a>
                                </li>
                               
                            </ul>
                        </div>
                        <div class="col">
                            <a class="btn btn-secondary px-3 py-2 mb-3 me-3 me-md-0" href="">
                                <img class="ms-sm-auto" src="{{ asset('orange-logo.png') }}" width="120"
                                    alt="Orange Bank logo">
                                <img class="mx-1 d-none" src="assets/img/market/appstore-light.svg" width="120"
                                    alt="App Store">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="nav fs-sm mb-0">
                <span class="text-body-secondary">&copy; Tous droits réservés</span>
                <a class="nav-link d-inline fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Moyo CI
                    </a>
            </p>
        </div>
    </footer>

    <a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5"
                stroke-miterlimit="10"></circle>
        </svg>
        <i class="ai-arrow-up"></i>
    </a>
    @include('layout.script')
    @stack('script')
</body>

</html>
