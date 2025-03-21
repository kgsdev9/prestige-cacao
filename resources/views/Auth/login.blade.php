@include('layout.head')

<main class="page-wrapper">
    <div class="d-lg-flex position-relative h-100">

        <!-- Home button -->
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4"
            href="/" data-bs-toggle="tooltip" data-bs-placement="left" title="Retourner à la page d'accueil"
            aria-label="Retourner à la page d'accueil">
            <i class="ai-home"></i>
        </a>

        <!-- Login form -->
        <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5" x-data="loginForm()">
            <div class="w-100 mt-auto" style="max-width: 526px;">
                <h1>Moyo Assurance L'Assurance Scolaire N°1</h1>
                <p class="pb-3 mb-3 mb-lg-4">
                    Connectez-vous pour accéder à votre espace et gérer votre assurance scolaire.
                </p>

                <form id="loginForm" method="POST">
                    <div x-show="step === 1">
                        <h3 class="pb-3">Étape 1 : Choisir la méthode de connexion</h3>
                        <div class="mb-4">
                            <label for="connexion-email" class="form-label">Connexion par Email et Mot de Passe</label>
                            <div>
                                <input type="email" class="form-control form-control-lg" placeholder="Email" x-model="formData.email" required>
                                <input type="password" class="form-control form-control-lg mt-3" placeholder="Mot de passe" x-model="formData.password" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="connexion-code" class="form-label">Ou Connexion par Code d'accès</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Code d'accès" x-model="formData.code" required>
                        </div>

                        <button type="button" class="btn btn-primary w-100 mb-4" @click="nextStep()">Se connecter</button>
                    </div>

                    <!-- Step 2 -->
                    <div x-show="step === 2" style="display: none;">
                        <h3 class="pb-3">Bienvenue dans votre espace</h3>
                        <p class="pb-3">Vous êtes maintenant connecté avec succès. Vous pouvez maintenant gérer vos informations et votre assurance scolaire.</p>
                        <button type="button" class="btn btn-success w-100 mb-4" @click="logout()">Se déconnecter</button>
                    </div>

                </form>

            </div>

            <!-- Copyright -->
            <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;">
                <span class="text-body-secondary">&copy; Tous droits réservés. Fait par</span>
                <a class="nav-link d-inline-block p-0 ms-1" href="https://moyo-ci.com" target="_blank" rel="noopener">Moyo Assurance</a>
            </p>

        </div>

        <!-- Cover image -->
        <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url(education-2.jpg);">
        </div>
    </div>
</main>

@include('layout.script')

<script>
    function loginForm() {
        return {
            step: 1,
            formData: {
                email: '',
                password: '',
                code: '',
            },
            nextStep() {
                if (this.formData.email && this.formData.password || this.formData.code) {
                    this.step = 2;
                } else {
                    alert("Veuillez remplir un champ de connexion.");
                }
            },
            logout() {
                this.step = 1;
                this.formData.email = '';
                this.formData.password = '';
                this.formData.code = '';
            }
        };
    }
</script>


