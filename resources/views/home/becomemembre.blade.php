@include('layout.head')
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
                            <input class="form-control form-control-lg" type="text" placeholder="Prénom" required>
                        </div>
                        <div class="col mb-4">
                            <input class="form-control form-control-lg" type="email" placeholder="Email" required>
                        </div>
                        <div class="col mb-4">
                            <input class="form-control form-control-lg" type="tel" placeholder="Téléphone" required>
                        </div>
                        <div class="col mb-4">
                            <input class="form-control form-control-lg" type="number" placeholder="Nombre d'enfants"
                                required>
                        </div>

                        <div class="col mb-4">
                            <input class="form-control form-control-lg" type="text" placeholder="Profession"
                                required>
                        </div>
                        <div class="col mb-4">
                            <input class="form-control form-control-lg" type="text" placeholder="Adresse" required>
                        </div>
                        <div class="col mb-4">
                            <input class="form-control form-control-lg" type="text" placeholder="Commune" required>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary w-100 mb-4" type="submit">S'inscrire</button>
                </form>

            </div>

            <!-- Copyright -->
            <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;">
                <span class="text-body-secondary">&copy; Tous droits réservés. Propulsé par</span>
                <a class="nav-link d-inline-block p-0 ms-1" href="https://moyo-ci.com/" target="_blank" rel="noopener">
                    Moyo Assurance
                </a>
            </p>

        </div>


        <!-- Cover image -->
        <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url(education-2.jpg);">
        </div>
    </div>
</main>

@include('layout.script')
