@include('layout.head')

<main class="page-wrapper" x-data="waitlistForm()">
    <div class="d-lg-flex position-relative h-100">

        <!-- Home button -->
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4"
            href="/" data-bs-toggle="tooltip" data-bs-placement="left" title="Retourner à la page d'accueil">
            <i class="ai-home"></i>
        </a>

        <!-- Waitlist form and confirmation -->
        <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
            <div class="w-100 mt-auto" style="max-width: 526px;">

                <!-- Step 1 : Formulaire -->
                <div x-show="step === 1" style="display: none;">
                    <h1>Rejoignez la file d’attente de Moyo</h1>
                    <p class="fs-lg pb-3 mb-2 mb-sm-3 mb-lg-4 mx-auto" style="max-width: 640px;">
                        Moyo aide les familles à mieux gérer les frais scolaires grâce à des cotisations flexibles, des fournitures accessibles et un accompagnement éducatif pour la réussite des enfants.
                    </p>

                    <div>
                        <div class="mb-4">
                            <input type="text" class="form-control form-control-lg mb-1" placeholder="Nom"
                                x-model="formData.nom">
                            <span class="text-danger" x-text="errors.nom"></span>

                            <input type="text" class="form-control form-control-lg mb-1 mt-3" placeholder="Prénom"
                                x-model="formData.prenom">
                            <span class="text-danger" x-text="errors.prenom"></span>

                            <input type="tel" class="form-control form-control-lg mb-1 mt-3" placeholder="Téléphone"
                                x-model="formData.telephone">
                            <span class="text-danger" x-text="errors.telephone"></span>

                            <input type="text" class="form-control form-control-lg mb-1 mt-3" placeholder="Profession"
                                x-model="formData.profession">
                            <span class="text-danger" x-text="errors.profession"></span>

                            <select class="form-control form-control-lg mb-1 mt-3" x-model="formData.commune_id">
                                <option value="">Choisissez une commune</option>
                                @foreach ($communes as $commune)
                                    <option value="{{ $commune->id }}">{{ $commune->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" x-text="errors.commune_id"></span>
                        </div>

                        <button type="button" class="btn btn-primary w-100 mb-4" @click="submit()" :disabled="formData.loading">
                            <template x-if="formData.loading">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            </template>
                            <template x-if="!formData.loading">
                                <span>Rejoindre la file d’attente</span>
                            </template>
                        </button>

                        <p x-show="message" x-text="message" class="alert" :class="messageType"></p>
                    </div>
                </div>

                <!-- Step 2 : Confirmation -->
                <div x-show="step === 2" style="display: none;" class="text-center py-5">
                    <h2>Félicitations !</h2>
                    <p x-text="message" class="fs-5 mb-4"></p>
                    <button class="btn btn-secondary" @click="resetForm()">Revenir au formulaire</button>
                </div>

            </div>

            <!-- Copyright -->
            <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;">
                <span class="text-body-secondary">&copy; Tous droits réservés. Fait par</span>
                <a class="nav-link d-inline-block p-0 ms-1" href="https://moyo-ci.com" target="_blank" rel="noopener">Moyo CI</a>
            </p>
        </div>

        <!-- Cover image -->
        <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center"
            style="background-image: url('{{ asset('education-2.jpg') }}');">
        </div>
    </div>
</main>

@include('layout.script')

<script>
    function waitlistForm() {
        return {
            step: 1,
            formData: {
                nom: '',
                prenom: '',
                telephone: '',
                profession: '',
                commune_id: '',
                loading: false,
            },
            message: '',
            messageType: '',
            errors: {
                nom: '',
                prenom: '',
                telephone: '',
                profession: '',
                commune_id: '',
            },

            validate() {
                this.errors = {
                    nom: '',
                    prenom: '',
                    telephone: '',
                    profession: '',
                    commune_id: '',
                };

                let valid = true;

                if (!this.formData.nom.trim()) {
                    this.errors.nom = 'Le nom est requis.';
                    valid = false;
                }

                if (!this.formData.prenom.trim()) {
                    this.errors.prenom = 'Le prénom est requis.';
                    valid = false;
                }

                if (!this.formData.telephone.trim()) {
                    this.errors.telephone = 'Le téléphone est requis.';
                    valid = false;
                } else {
                    const phoneRegex = /^\d{10}$/;
                    if (!phoneRegex.test(this.formData.telephone)) {
                        this.errors.telephone = 'Le téléphone doit contenir 10 chiffres.';
                        valid = false;
                    }
                }

                if (!this.formData.profession.trim()) {
                    this.errors.profession = 'La profession est requise.';
                    valid = false;
                }

                if (!this.formData.commune_id) {
                    this.errors.commune_id = 'La commune est requise.';
                    valid = false;
                }

                return valid;
            },

            submit() {
                if (!this.validate()) {
                    return;
                }

                this.formData.loading = true;
                this.message = '';
                this.messageType = '';

                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch('/sondage', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: JSON.stringify(this.formData),
                })
                .then(response => response.json())
                .then(result => {
                    if (result.success && result.step === 2) {
                        this.message = result.message;
                        this.messageType = 'alert-success';
                        this.step = 2;
                    } else {
                        this.message = "Une erreur est survenue. Veuillez réessayer.";
                        this.messageType = 'alert-danger';
                    }
                })
                .catch(() => {
                    this.message = "Nos serveurs sont occupés. Réessayez plus tard.";
                    this.messageType = 'alert-danger';
                })
                .finally(() => {
                    this.formData.loading = false;
                });
            },

            resetForm() {
                this.step = 1;
                this.message = '';
                this.messageType = '';
                this.errors = {
                    nom: '',
                    prenom: '',
                    telephone: '',
                    profession: '',
                    commune_id: '',
                };
                this.formData = {
                    nom: '',
                    prenom: '',
                    telephone: '',
                    profession: '',
                    commune_id: '',
                    loading: false,
                };
            }
        }
    }
</script>
