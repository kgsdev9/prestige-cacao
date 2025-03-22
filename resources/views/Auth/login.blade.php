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
                    <div>
                        <h3 class="pb-3">Étape 1 : Choisir la méthode de connexion</h3>
                        <div class="mb-4">
                            <label for="connexion-email" class="form-label">Connexion par Email et Mot de Passe</label>
                            <div>
                                <input type="email" class="form-control form-control-lg" placeholder="Email"
                                    x-model="formData.email" required>
                                <input type="password" class="form-control form-control-lg mt-3"
                                    placeholder="Mot de passe" x-model="formData.password" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="connexion-code" class="form-label">Ou Connexion par Code d'accès</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Code d'accès"
                                x-model="formData.code" required>
                        </div>

                        <button type="button" class="btn btn-primary w-100 mb-4" @click="nextStep()">Se
                            connecter</button>

                        <p x-show="message" x-text="message" class="alert" :class="messageType"></p>
                    </div>




                </form>

            </div>

            <!-- Copyright -->
            <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;">
                <span class="text-body-secondary">&copy; Tous droits réservés. Fait par</span>
                <a class="nav-link d-inline-block p-0 ms-1" href="https://moyo-ci.com" target="_blank"
                    rel="noopener">Moyo Assurance</a>
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
                code: '', // Ajoute ici la logique pour le code d'accès
            },
            message: '',
            messageType: '',

            nextStep() {
                // Vérification de l'étape choisie
                if (this.step === 1) {
                    this.loginWithEmailPassword();
                }
            },

            loginWithEmailPassword() {

                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                
                fetch('/login', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken, // Ajouter le token CSRF dans les en-têtes
                        },
                        body: JSON.stringify({
                            email: this.formData.email,
                            password: this.formData.password,
                        }),
                    })
                    .then(response => response.json())
                    .then(result => {
                        // Vérifier si la connexion a réussi (message de succès)
                        if (result.message === 'Connexion réussie') {
                            // Message de succès
                            this.message = result.message;
                            this.messageType = 'alert-success';

                            // Redirection après 10 secondes
                            setTimeout(() => {
                                window.location.href =
                                    "/dashboard"; // Remplace par l'URL du tableau de bord
                            }, 10000);
                        } else {
                            // Message d'erreur si la connexion échoue
                            this.message = result.message;
                            this.messageType = 'alert-danger';
                        }
                    })
                    .catch(error => {
                        this.message = 'Une erreur est survenue';
                        this.messageType = 'alert-danger';
                    });
            }


        }
    }
</script>
