<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">

@include('layout.head')

<main class="page-wrapper">
    <div class="d-flex flex-column align-items-center position-relative h-100 px-3 pt-5" x-data="formSteps()">

        <!-- Home button -->
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4"
            href="/" data-bs-toggle="tooltip" data-bs-placement="left" title="Retourner à la page d'accueil"
            aria-label="Retourner à la page d'accueil">
            <i class="ai-home"></i>
        </a>

        <!-- Content -->
        <div class="mt-auto" style="max-width: 700px;">
            <h1 class="pt-3 pb-2 pb-lg-3">Assurance Scolaire - Moyo</h1>
            <p class="pb-2">Complétez ces étapes pour finaliser votre inscription à l'assurance scolaire.</p>

            <!-- Multi-step form -->
            <form id="multiStepForm" method="POST" enctype="multipart/form-data">

                <!-- Step 1 -->
                <div x-show="step === 1">
                    <h3 class="pb-3">Étape 1 : Informations personnelles</h3>
                    <div class="row">
                        <!-- Nom -->
                        <div class="col-md-6 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nom" x-model="formData.nom" required>
                                <label for="nom">Nom</label>
                            </div>
                        </div>

                        <!-- Prénom -->
                        <div class="col-md-6 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="prenom" x-model="formData.prenom" required>
                                <label for="prenom">Prénom</label>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-4">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" x-model="formData.email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <!-- Téléphone -->
                        <div class="col-md-6 mb-4">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="telephone" x-model="formData.telephone" required>
                                <label for="telephone">Téléphone</label>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="adresse" x-model="formData.adresse" required>
                                <label for="adresse">Adresse</label>
                            </div>
                        </div>

                          <div class="col-md-6 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nb_enfant" x-model="formData.nb_enfant" required>
                                <label for="nb_enfant">Nombre d'enfant</label>
                            </div>
                        </div>


                    </div>
                    <button type="button" class="btn btn-primary" @click="nextStep()">Suivant</button>
                </div>

                <!-- Step 2 -->
                <div x-show="step === 2" style="display: none;">
                    <h3 class="pb-3">Étape 2 : Téléchargement des photos</h3>
                    <div class="row">
                        <!-- Photo de la pièce d'identité avant -->
                        <div class="col-md-6 mb-4">
                            <label for="piece_avant" class="form-label">Photo de la pièce d'identité (avant)</label>
                            <div class="upload-box" @click="triggerFileInput('piece_avant')">
                                <template x-if="formData.piece_avantPreview">
                                    <img :src="formData.piece_avantPreview" alt="Image Preview" class="image-preview">
                                </template>
                                <template x-if="!formData.piece_avantPreview">
                                    <div class="image-placeholder">Ajouter une image</div>
                                </template>
                                <input type="file" class="d-none" id="piece_avant" accept="image/*" @change="handleFileChange($event, 'piece_avant')">
                            </div>
                        </div>

                        <!-- Photo de la pièce d'identité arrière -->
                        <div class="col-md-6 mb-4">
                            <label for="piece_arriere" class="form-label">Photo de la pièce d'identité (arrière)</label>
                            <div class="upload-box" @click="triggerFileInput('piece_arriere')">
                                <template x-if="formData.piece_arrierePreview">
                                    <img :src="formData.piece_arrierePreview" alt="Image Preview" class="image-preview">
                                </template>
                                <template x-if="!formData.piece_arrierePreview">
                                    <div class="image-placeholder">Ajouter une image</div>
                                </template>
                                <input type="file" class="d-none" id="piece_arriere" accept="image/*" @change="handleFileChange($event, 'piece_arriere')">
                            </div>
                        </div>

                        <!-- Photo de l'assuré -->
                        <div class="col-md-6 mb-4">
                            <label for="photo_assure" class="form-label">Photo de l'assuré</label>
                            <div class="upload-box" @click="triggerFileInput('photo_assure')">
                                <template x-if="formData.photo_assurePreview">
                                    <img :src="formData.photo_assurePreview" alt="Image Preview" class="image-preview">
                                </template>
                                <template x-if="!formData.photo_assurePreview">
                                    <div class="image-placeholder">Ajouter une image</div>
                                </template>
                                <input type="file" class="d-none" id="photo_assure" accept="image/*" @change="handleFileChange($event, 'photo_assure')">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" @click="previousStep()">Précédent</button>
                    <button type="button" class="btn btn-primary" @click="nextStep()">Suivant</button>
                </div>

                <!-- Step 3 -->
                <div x-show="step === 3" style="display: none;">
                    <h3 class="pb-3">Étape 3 : Ajout des enfants</h3>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Enfants</h4>
                                <button type="button" class="btn btn-success" @click="addChild()">Ajouter un enfant</button>
                            </div>
                        </div>

                        <template x-for="(child, index) in formData.children" :key="index">
                            <div class="col-md-6 mb-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" :id="'enfant_nom_' + index" x-model="child.nom" placeholder="Nom" required>
                                    <label :for="'enfant_nom_' + index">Nom de l'enfant</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" :id="'enfant_prenom_' + index" x-model="child.prenom" placeholder="Prénom" required>
                                    <label :for="'enfant_prenom_' + index">Prénom de l'enfant</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" :id="'enfant_classe_' + index" x-model="child.classe" placeholder="Classe" required>
                                    <label :for="'enfant_classe_' + index">Classe</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" :id="'enfant_etablissement_' + index" x-model="child.etablissement" placeholder="Établissement" required>
                                    <label :for="'enfant_etablissement_' + index">Établissement</label>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm mt-2" @click="removeChild(index)">
                                    Retirer cet enfant
                                </button>
                            </div>
                        </template>
                    </div>
                    <button type="button" class="btn btn-secondary" @click="previousStep()">Précédent</button>
                    <button type="button" class="btn btn-primary" @click="nextStep()">Suivant</button>
                </div>

                <!-- Step 4 -->
                <div x-show="step === 4" style="display: none;">
                    <h3 class="pb-3">Étape 4 : Conditions d'utilisation</h3>
                    <div class="mb-4">
                        <p>Avant de finaliser votre inscription à l'assurance scolaire, vous devez accepter les conditions suivantes :</p>
                        <ul>
                            <li><strong>Droit d'adhésion</strong> : Un montant de 1000 FCFA (environ 1.22 €) est requis pour l'inscription.</li>
                            <li><strong>Participation aux programmes de suivi scolaire</strong> : Vous pouvez choisir de participer à un programme de suivi scolaire, qui inclut :</li>
                            <ul>
                                <li>Rapports réguliers sur vos enfants</li>
                                <li>Bulletins scolaires</li>
                                <li>Attribution d'un répétiteur si nécessaire (en cas d'absence de répétiteur).</li>
                            </ul>
                            <li><strong>Participation à l'assurance scolaire</strong> : Vous pouvez également souscrire à l'assurance scolaire, qui couvre :</li>
                            <ul>
                                <li>Les fournitures scolaires</li>
                                <li>Les frais de scolarité</li>
                                <li>Les autres frais scolaires annexes.</li>
                            </ul>
                            <li><strong>Prêts sous condition</strong> : Les prêts sont accordés en fonction de vos cotisations mensuelles et sont soumis à des conditions spécifiques.</li>
                        </ul>
                        <textarea readonly rows="5" class="form-control" style="resize: none;">Les conditions générales de Moyo Assurance peuvent être consultées en détail sur notre site web.</textarea>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="acceptConditions" x-model="formData.acceptConditions">
                        <label class="form-check-label" for="acceptConditions">J'accepte les conditions d'utilisation de Moyo Assurance.</label>
                    </div>
                    <button type="button" class="btn btn-secondary" @click="previousStep()">Précédent</button>
                    <button type="submit" class="btn btn-success" :disabled="!formData.acceptConditions">Confirmer l'inscription</button>
                </div>


            </form>
        </div>

        <!-- Copyright -->
        <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 700px;">
            <span class="text-body-secondary">&copy; Tous droits réservés. Fait par</span>
            <a class="nav-link d-inline-block p-0 ms-1" href="https://myoo.com" target="_blank" rel="noopener">Myoo Assurance</a>
        </p>
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
                children: [],
                acceptConditions: false,
            },
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
                    this.step = 4;
                }
            },
            previousStep() {
                if (this.step > 1) this.step--;
            },
            addChild() {
                this.formData.children.push({
                    nom: '',
                    prenom: '',
                    classe: '',
                    etablissement: ''
                });
            },
            removeChild(index) {
                this.formData.children.splice(index, 1);
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
            removeImage(type) {
                this.formData[`${type}Preview`] = null;
                this.formData[type] = null;
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

</html>
