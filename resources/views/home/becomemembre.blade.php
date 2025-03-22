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
        <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5" x-data="formSteps()">
            <div class="w-100 mt-auto" style="max-width: 526px;">
                <h1>Moyo Assurance L'Assurance Scolaire N°1</h1>
                <p class="pb-3 mb-3 mb-lg-4">
                    Protégez l'avenir de vos enfants avec Moyo Assurance, le leader de l'assurance scolaire en Côte
                    d'Ivoire.
                    Inscrivez-vous dès maintenant et bénéficiez d'une couverture complète pour leur sécurité et leur
                    éducation.
                </p>


                <div>
                    <div x-show="step === 1">
                        <h3 class="pb-3">Étape 1 : Informations personnelles</h3>
                        <div class="row row-cols-1 row-cols-sm-2">
                            <div class="col mb-4">
                                <input type="text" class="form-control form-control-lg" placeholder="Nom"
                                    x-model="formData.nom" required>
                            </div>
                            <div class="col mb-4">
                                <input type="text" class="form-control form-control-lg" placeholder="Prénom"
                                    x-model="formData.prenom" required>
                            </div>
                            <div class="col mb-4">
                                <input type="email" class="form-control form-control-lg" placeholder="Email"
                                    x-model="formData.email" required>
                            </div>
                            <div class="col mb-4">
                                <input type="tel" class="form-control form-control-lg" placeholder="Téléphone"
                                    x-model="formData.telephone" required>
                            </div>
                            <div class="col mb-4">
                                <input type="text" class="form-control form-control-lg" placeholder="Adresse"
                                    x-model="formData.adresse" required>
                            </div>
                            <div class="col mb-4">
                                <input type="number" class="form-control form-control-lg"
                                    placeholder="Nbre d'enfant au secondaire" x-model="formData.nb_enfant" required>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary w-100 mb-4" @click="nextStep()">Suivant</button>
                    </div>

                    <!-- Step 2 -->
                    <div x-show="step === 2" style="display: none;">
                        <h3 class="pb-3">Étape 2 : Téléchargement des photos</h3>
                        <div class="row row-cols-1 row-cols-sm-2">
                            <div class="col mb-4">
                                <label for="piece_avant" class="form-label">Photo de la pièce d'identité (avant)</label>
                                <div class="upload-box" @click="triggerFileInput('piece_avant')">
                                    <template x-if="formData.piece_avantPreview">
                                        <img :src="formData.piece_avantPreview" alt="Image Preview"
                                            class="image-preview">
                                    </template>
                                    <template x-if="!formData.piece_avantPreview">
                                        <div class="image-placeholder">Ajouter une image</div>
                                    </template>
                                    <input type="file" class="d-none" id="piece_avant" accept="image/*"
                                        @change="handleFileChange($event, 'piece_avant')">
                                </div>
                            </div>

                            <div class="col mb-4">
                                <label for="piece_arriere" class="form-label">Photo de la pièce d'identité
                                    (arrière)</label>
                                <div class="upload-box" @click="triggerFileInput('piece_arriere')">
                                    <template x-if="formData.piece_arrierePreview">
                                        <img :src="formData.piece_arrierePreview" alt="Image Preview"
                                            class="image-preview">
                                    </template>
                                    <template x-if="!formData.piece_arrierePreview">
                                        <div class="image-placeholder">Ajouter une image</div>
                                    </template>
                                    <input type="file" class="d-none" id="piece_arriere" accept="image/*"
                                        @change="handleFileChange($event, 'piece_arriere')">
                                </div>
                            </div>

                            <div class="col mb-4">
                                <label for="photo_assure" class="form-label">Photo de l'assuré</label>
                                <div class="upload-box" @click="triggerFileInput('photo_assure')">
                                    <template x-if="formData.photo_assurePreview">
                                        <img :src="formData.photo_assurePreview" alt="Image Preview"
                                            class="image-preview">
                                    </template>
                                    <template x-if="!formData.photo_assurePreview">
                                        <div class="image-placeholder">Ajouter une image</div>
                                    </template>
                                    <input type="file" class="d-none" id="photo_assure" accept="image/*"
                                        @change="handleFileChange($event, 'photo_assure')">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary w-100 mb-4"
                            @click="previousStep()">Précédent</button>
                        <button type="button" class="btn btn-primary w-100 mb-4"
                            @click="nextStep()">Suivant</button>
                    </div>

                    <div x-show="step === 3" style="display: none;">
                        <h3 class="pb-3">Étape 3 : Conditions d'utilisation</h3>
                        <div class="mb-4">
                            <p>Avant de finaliser votre inscription à l'assurance scolaire, vous devez accepter les
                                conditions suivantes :</p>
                            <ul>
                                <li><strong>Droit d'adhésion</strong> : Un montant de 1000 FCFA (environ 1,52 €) est
                                    requis pour l'inscription.</li>
                                <li><strong>Participation aux programmes de suivi scolaire</strong> : Vous pouvez
                                    choisir de participer à un programme de suivi scolaire.</li>
                                <li><strong>Participation à l'assurance scolaire</strong> : Vous pouvez souscrire à
                                    l'assurance scolaire, qui couvre les frais scolaires.</li>
                                <li><strong>Prêts sous condition</strong> : Les prêts sont accordés en fonction de vos
                                    cotisations mensuelles.</li>
                            </ul>
                            <textarea readonly rows="5" class="form-control" style="resize: none;">Les conditions générales de Moyo Assurance peuvent être consultées en détail sur notre site web.</textarea>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="acceptConditions"
                                x-model="formData.acceptConditions">
                            <label class="form-check-label" for="acceptConditions">J'accepte les conditions
                                d'utilisation de Moyo Assurance.</label>
                        </div>
                        <button type="button" class="btn btn-secondary w-100 mb-4"
                            @click="previousStep()">Précédent</button>

                        <button type="button" @click="submitForm()" class="btn btn-success w-100 mb-4"
                            :disabled="!formData.acceptConditions || formData.loading">
                            <span x-show="formData.loading" class="spinner-border spinner-border-sm" role="status"
                                aria-hidden="true"></span>
                            <span x-show="!formData.loading">Confirmer l'inscription</span>
                        </button>

                        <p x-show="message" x-text="message" class="alert" :class="messageType"></p>
                    </div>
                </div>

            </div>

            <!-- Copyright -->
            <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;">
                <span class="text-body-secondary">&copy; Tous droits réservés. Fait par</span>
                <a class="nav-link d-inline-block p-0 ms-1" href="https://myoo.com" target="_blank"
                    rel="noopener">Moyo Assurance</a>
            </p>

        </div>

        <!-- Cover image -->
        <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center"
            style="background-image: url(education-2.jpg);">
        </div>
    </div>
</main>

@include('layout.script')

<script>
    function formSteps() {
        return {
            step: 1,
            formData: {
                nom: '',
                prenom: '',
                email: '',
                telephone: '',
                piece_avant: null,
                piece_arriere: null,
                photo_assure: null,
                piece_avantPreview: null,
                piece_arrierePreview: null,
                photo_assurePreview: null,
                acceptConditions: false,
                loading: false,
            },

            message: '',
            messageType: '',

            nextStep() {
                if (this.step === 1) {
                    if (this.formData.nom && this.formData.prenom && this.formData.email && this.formData.telephone) {
                        this.step = 2;
                    } else {
                        alert("Veuillez remplir tous les champs.");
                    }
                } else if (this.step === 2) {
                    this.step = 3;
                } else if (this.step === 3) {
                    this.step = 3;
                }
            },
            previousStep() {
                if (this.step > 1) this.step--;
            },
            handleFileChange(event, type) {
                const file = event.target.files[0];
                const reader = new FileReader();

                reader.onloadend = () => {
                    if (type === 'piece_avant') {
                        this.formData.piece_avantPreview = reader.result;
                    } else if (type === 'piece_arriere') {
                        this.formData.piece_arrierePreview = reader.result;
                    } else if (type === 'photo_assure') {
                        this.formData.photo_assurePreview = reader.result;
                    }
                };

                if (file) {
                    reader.readAsDataURL(file);
                }
            },
            triggerFileInput(type) {
                document.getElementById(type).click();
            },

            async submitForm() {
                this.formData.loading = true; // Active le loader
                const formData = new FormData();
                formData.append('nom', this.formData.nom);
                formData.append('prenom', this.formData.prenom);
                formData.append('email', this.formData.email);
                formData.append('telephone', this.formData.telephone);
                formData.append('adresse', this.formData.adresse);
                formData.append('nb_enfant', this.formData.nb_enfant);

                if (this.formData.piece_avant) {
                    formData.append('piece_avant', this.formData.piece_avant);
                }
                if (this.formData.piece_arriere) {
                    formData.append('piece_arriere', this.formData.piece_arriere);
                }
                if (this.formData.photo_assure) {
                    formData.append('photo_assure', this.formData.photo_assure);
                }

                try {
                    const response = await fetch('{{ route('clients.store') }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: formData,
                    });

                    const result = await response.json();

                    if (response.ok) {
                        this.message = result.message;
                        if (result.existe) {
                            this.messageType = 'alert-danger';
                        } else {
                            this.messageType = 'alert-success';
                            window.location.href = result.signature;
                        }

                    } else {
                        this.message =
                            'Désolé, notre serveur rencontre un problème. Veuillez réessayer dans 2 minutes.';
                        this.messageType = 'alert-danger';
                    }
                } catch (error) {
                    this.message = 'Erreur lors de la soumission.';
                    this.messageType = 'alert-danger';
                    console.error('Erreur:', error);
                } finally {
                    this.formData.loading = false; // Désactive le loader
                }
            }




        };
    }
</script>

<style>
    .upload-box {
        position: relative;
        width: 100%;
        height: 150px;
        border: 2px dashed #ddd;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        background-color: #f9f9f9;
    }

    .upload-box .image-preview {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 5px;
    }

    .upload-box .image-placeholder {
        text-align: center;
        font-size: 14px;
        color: #888;
    }
</style>
