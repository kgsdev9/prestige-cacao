<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <!-- Barre de progression -->
            <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: {{ ($currentStep - 1) * 25 }}%;" aria-valuenow="{{ ($currentStep - 1) * 25 }}" aria-valuemin="0" aria-valuemax="100">{{ ($currentStep - 1) * 25 }}%</div>
            </div>
        </div>
    </div>

    <!-- Étape 1: Informations du Profil -->
    <div class="card mb-4 position-relative" style="{{ $currentStep === 1 ? '' : 'display: none;' }}">
        <div class="card-body">
            <h5 class="card-title">Informations du Profil</h5>
            <p class="card-text">Veuillez remplir vos informations pour enrichir votre profil.</p>
            <div class="row">
                @foreach(['nom', 'prenom', 'email', 'telephone'] as $field)
                    <div class="col-md-6 mb-3">
                        <div class="form-floating">
                            <input type="{{ $field === 'email' ? 'email' : 'text' }}" wire:model="{{ $field }}" class="form-control" id="{{ $field }}" placeholder="{{ ucfirst($field) }}" required>
                            <label for="{{ $field }}">{{ ucfirst($field) }}</label>
                            @error($field) <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                @endforeach

                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="password" wire:model="password" class="form-control" id="password" placeholder="Mot de passe" required>
                        <label for="password">Mot de passe</label>
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-check">
                        <input type="checkbox" wire:model="isWhatsApp" class="form-check-input" id="isWhatsApp">
                        <label class="form-check-label" for="isWhatsApp">Mon téléphone fonctionne avec WhatsApp</label>
                    </div>
                </div>

                <div class="col-md-6 mb-3" style="{{ $isWhatsApp ? 'display: none;' : '' }}">
                    <div class="form-floating">
                        <input type="text" wire:model="whatsapp" class="form-control" id="whatsapp" placeholder="Numéro WhatsApp">
                        <label for="whatsapp">Numéro WhatsApp</label>
                        @error('whatsapp') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <select wire:model="specialite_id" class="form-select" id="specialite_id" required>
                            <option value="" selected>Sélectionnez une spécialité</option>
                            @foreach($listespecialie as $specialite)
                                <option value="{{ $specialite->id }}">{{ $specialite->libellespecialite }}</option>
                            @endforeach
                        </select>
                        <label for="specialite_id">Spécialité</label>
                        @error('specialite_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="file" wire:model="photo" class="form-control" id="photo">
                        <label for="photo">Photo</label>
                        <span class="text-muted small">(Facultatif)</span>
                        @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Champ Description -->
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <textarea wire:model="description" class="form-control" id="description" placeholder="Description" required></textarea>
                        <label for="description">Description</label>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mt-2" wire:click="nextStep">Suivant</button>
        </div>
    </div>





    <!-- Étape 2: Expérience -->
    <div class="card mb-4 position-relative" style="{{ $currentStep === 2 ? '' : 'display: none;' }}">
        <div class="card-body">
            <h5 class="card-title">Expérience</h5>
            <p class="card-text">Mettez en valeur vos réalisations et ajoutez une nouvelle expérience.</p>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="job_title" class="form-control" id="job_title" placeholder="Intitulé du poste" required>
                        <label for="job_title">Intitulé du poste</label>
                        @error('job_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="company_name" class="form-control" id="company_name" placeholder="Nom de l'entreprise" required>
                        <label for="company_name">Nom de l'entreprise</label>
                        @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <select wire:model="employment_type" class="form-select" id="employment_type" required>
                            <option value="" selected>Type d'emploi</option>
                            @foreach($listetypeemploi as $type)
                                <option value="{{ $type->id }}">{{ $type->libelletypeemploi }}</option>
                            @endforeach
                        </select>
                        <label for="employment_type">Type d'emploi</label>
                        @error('employment_type') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="location" class="form-control" id="location" placeholder="Lieu" required>
                        <label for="location">Lieu</label>
                        @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="start_year" class="form-control" id="start_year" placeholder="Année de début" required>
                        <label for="start_year">Année de début</label>
                        @error('start_year') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="end_year" class="form-control" id="end_year" placeholder="Année de fin">
                        <label for="end_year">Année de fin</label>
                        @error('end_year') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="form-check">
                        <input type="checkbox" wire:model="current_position" class="form-check-input" id="current_position">
                        <label class="form-check-label" for="current_position">J'occupe actuellement ce poste</label>
                    </div>
                </div>
            </div>
            <button wire:click="addExperience" class="btn btn-primary btn-sm mt-2">Ajouter une expérience</button>

            <div class="row mt-4">
                @foreach($experiences as $index => $experience)
                    <div class="col-md-4 mb-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-start">
                                <!-- Icone de l'entreprise (SVG) -->
                                <div class="me-3">
                                    <svg width="40" height="40" viewBox="0 0 16 16" fill="#6c757d" class="bi bi-building">
                                        <rect width="8" height="8" x="4" y="4" rx="1" ry="1" />
                                        <rect width="3" height="3" x="6.5" y="6.5" rx="0.5" ry="0.5" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="card-title m-0">{{ $experience['job_title'] }}</h5>
                                    <p class="text-muted m-0">{{ $experience['company_name'] }}</p>
                                    <small class="text-muted">{{ $experience['start_year'] }} - {{ $experience['end_year'] }}</small>
                                </div>
                                <!-- Bouton supprimer -->
                                <button wire:click="removeExperience({{ $index }})" class="btn btn-light btn-sm ms-auto" title="Supprimer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 1 1 .708.707L8.707 8l2.647 2.646a.5.5 0 0 1-.707.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.707L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <button class="btn btn-secondary mt-2" wire:click="previousStep">Précédent</button>
            <button class="btn btn-primary mt-2" wire:click="nextStep">Suivant</button>
        </div>
    </div>

    <!-- Étape 3: Formation -->
    <div class="card mb-4 position-relative" style="{{ $currentStep === 3 ? '' : 'display: none;' }}">
        <div class="card-body">
            <h5 class="card-title">Formation</h5>
            <p class="card-text">Ajoutez vos informations de formation.</p>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="school_name" class="form-control" id="school_name" placeholder="Nom de l'école" required>
                        <label for="school_name">Nom de l'école</label>
                        @error('school_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="degree" class="form-control" id="degree" placeholder="Diplôme" required>
                        <label for="degree">Diplôme</label>
                        @error('degree') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="field_of_study" class="form-control" id="field_of_study" placeholder="Domaine d'étude" required>
                        <label for="field_of_study">Domaine d'étude</label>
                        @error('field_of_study') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="start_year_formation" class="form-control" id="start_year_formation" placeholder="Année de début" required>
                        <label for="start_year_formation">Année de début</label>
                        @error('start_year_formation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="end_year_formation" class="form-control" id="end_year_formation" placeholder="Année de fin">
                        <label for="end_year_formation">Année de fin</label>
                        @error('end_year_formation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <button wire:click="addFormation" class="btn btn-primary btn-sm mt-2">Ajouter une formation</button>

            <div class="d-flex flex-column gap-2">
                <!-- Heading -->
                <h3 class="mb-0">Formations</h3>
                <div class="row mt-4">
                    @foreach($formations as $index => $formation)
                        <div class="col-md-4 mb-3">
                            <div class="card p-3">
                                <div class="d-flex align-items-start">
                                    <!-- Icone de l'institution (SVG) -->
                                    <div class="me-3">
                                        <svg width="40" height="40" viewBox="0 0 16 16" fill="#6c757d" class="bi bi-school">
                                            <rect width="8" height="8" x="4" y="4" rx="1" ry="1" />
                                            <rect width="3" height="3" x="6.5" y="6.5" rx="0.5" ry="0.5" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="card-title m-0">{{ $formation['degree'] }}</h5>
                                        <p class="text-muted m-0">{{ $formation['school_name'] }}</p>
                                        <small class="text-muted">{{ $formation['start_year_formation'] }} - {{ $formation['end_year_formation'] }}</small>
                                        <small class="text-muted d-block">{{ $formation['field_of_study'] }}</small>
                                    </div>
                                    <!-- Bouton supprimer -->
                                    <button wire:click="removeFormation({{ $index }})" class="btn btn-light btn-sm ms-auto" title="Supprimer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 1 1 .708.707L8.707 8l2.647 2.646a.5.5 0 0 1-.707.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.707L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>


            <button class="btn btn-secondary mt-2" wire:click="previousStep">Précédent</button>
            <button class="btn btn-primary mt-2" wire:click="nextStep">Suivant</button>
        </div>
    </div>

    <!-- Étape 4: Compétences -->
    <div class="card mb-4 position-relative" style="{{ $currentStep === 4 ? '' : 'display: none;' }}">
        <div class="card-body">
            <h5 class="card-title">Compétences</h5>
            <p class="card-text">Ajoutez vos compétences.</p>
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="form-floating">
                        <input type="text" wire:model="competence" class="form-control" id="competence" placeholder="Compétence">
                        <label for="competence">Compétence</label>
                        @error('competence') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <button wire:click="addCompetence" class="btn btn-primary btn-sm mt-2">Ajouter une compétence</button>

            <div class="d-flex flex-column gap-2 mt-4">

                <div class="gap-2 d-flex flex-wrap mb-4">
                    @foreach($competences as $index => $comp)
                        <div class="d-flex align-items-center">
                            <a href="#!" class="btn btn-tag btn-sm me-2">{{ $comp }}</a>
                            <button wire:click="removeCompetence({{ $index }})" class="btn btn-light btn-sm ms-auto" title="Supprimer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.5 1.5a.5.5 0 0 1 .708 0L8 7.293 14.793 1.5a.5.5 0 1 1 .707.707L8.707 8l6.793 6.793a.5.5 0 1 1-.707.707L8 8.707l-6.793 6.793a.5.5 0 1 1-.707-.707L7.293 8 1.5 1.5z"/>
                                </svg>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>

            <button class="btn btn-secondary mt-2" wire:click="previousStep">Précédent</button>
            <button class="btn btn-primary mt-2" wire:click="saveProfile()">Soumettre</button>
        </div>
    </div>
</div>
