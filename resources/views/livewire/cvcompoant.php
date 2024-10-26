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
    <div class="container mt-4">

        <!-- Étape 1: Informations du Profil -->
        <div class="card mb-4 position-relative" style="{{ $currentStep === 1 ? '' : 'display: none;' }}">
            <div class="card-body">
                <h5 class="card-title">Informations du Profil</h5>
                <p class="card-text">Veuillez remplir vos informations pour enrichir votre profil.</p>
                <div class="row">
                    @foreach(['nom', 'prenom', 'codeprofile', 'email', 'telephone'] as $field)
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
                            <input type="file" wire:model="photo" class="form-control" id="photo">
                            <label for="photo">Photo</label>
                            @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-2" wire:click="nextStep">Suivant</button>
            </div>
        </div>

        <!-- Étapes suivantes... -->
        <!-- Ajoute tes autres étapes ici en suivant le même modèle avec `form-floating` -->
    </div>


    <!-- Étape 2: Expérience -->
    <div class="card mb-4 position-relative" style="{{ $currentStep === 2 ? '' : 'display: none;' }}">
        <div class="card-body">
            <h5 class="card-title">Expérience</h5>
            <p class="card-text">Mettez en valeur vos réalisations et ajoutez une nouvelle expérience.</p>
            <div class="row">
                <div class="col-md-6 mb-2">
                    <input type="text" wire:model="job_title" placeholder="Intitulé du poste" class="form-control form-control-sm mb-2">
                    @error('job_title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" wire:model="company_name" placeholder="Nom de l'entreprise" class="form-control form-control-sm mb-2">
                    @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-2">
                    <select wire:model="employment_type" class="form-control form-control-sm mb-2">
                        <option value="" selected>Type d'emploi</option>
                        @foreach($listetypeemploi as $type)
                            <option value="{{ $type->id }}">{{ $type->libelletypeemploi }}</option>
                        @endforeach
                    </select>
                    @error('employment_type') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" wire:model="location" placeholder="Lieu" class="form-control form-control-sm mb-2">
                    @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" wire:model="start_year" placeholder="Année de début" class="form-control form-control-sm mb-2">
                    @error('start_year') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" wire:model="end_year" placeholder="Année de fin" class="form-control form-control-sm mb-2">
                    @error('end_year') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-12 mb-2">
                    <input type="checkbox" wire:model="current_position"> J'occupe actuellement ce poste
                </div>
            </div>
            <button wire:click="addExperience" class="btn btn-primary btn-sm mt-2">Ajouter une expérience</button>

            <ul class="list-group mt-4">
                @foreach($experiences as $experience)
                    <li class="list-group-item">
                        <strong>{{ $experience['job_title'] }}</strong> chez {{ $experience['company_name'] }}
                        <br>{{ $experience['start_year'] }} - {{ $experience['end_year'] }}
                        <br><small>{{ $experience['employment_type'] }} - {{ $experience['location'] }}</small>
                    </li>
                @endforeach
            </ul>

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
                <div class="col-md-6 mb-2">
                    <input type="text" wire:model="school_name" placeholder="Nom de l'école" class="form-control form-control-sm mb-2">
                    @error('school_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" wire:model="degree" placeholder="Diplôme" class="form-control form-control-sm mb-2">
                    @error('degree') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" wire:model="field_of_study" placeholder="Domaine d'étude" class="form-control form-control-sm mb-2">
                    @error('field_of_study') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" wire:model="start_year_formation" placeholder="Année de début" class="form-control form-control-sm mb-2">
                    @error('start_year_formation') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" wire:model="end_year_formation" placeholder="Année de fin" class="form-control form-control-sm mb-2">
                    @error('end_year_formation') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <button wire:click="addFormation" class="btn btn-primary btn-sm mt-2">Ajouter une formation</button>

            <ul class="list-group mt-4">
                @foreach($formations as $formation)
                    <li class="list-group-item">
                        <strong>{{ $formation['degree'] }}</strong> à {{ $formation['school_name'] }}
                        <br>{{ $formation['start_year_formation'] }} - {{ $formation['end_year_formation'] }}
                        <br><small>{{ $formation['field_of_study'] }}</small>
                    </li>
                @endforeach
            </ul>

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
                    <input type="text" wire:model="competence" placeholder="Compétence" class="form-control form-control-sm mb-2">
                    @error('competence') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <button wire:click="addCompetence" class="btn btn-primary btn-sm mt-2">Ajouter une compétence</button>

            <ul class="list-group mt-4">
                @foreach($competences as $comp)
                    <li class="list-group-item">{{ $comp }}</li>
                @endforeach
            </ul>

            <button class="btn btn-secondary mt-2" wire:click="previousStep">Précédent</button>
            <button class="btn btn-primary mt-2" wire:click="nextStep">Soumettre</button>
        </div>
    </div>
</div>
