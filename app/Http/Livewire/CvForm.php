<?php

namespace App\Http\Livewire;

use App\Models\TCandidat;
use App\Models\TCompetenceCandidat;
use App\Models\TExperience;
use App\Models\TFormation;
use App\Models\TLibelleSpecialite;
use App\Models\TTypeEmploi;
use App\Models\User;
use App\Notifications\AccountConfirmation;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
class CvForm extends Component
{
    use WithFileUploads;
    public $currentStep = 1;

    // Étape 1: Informations du Profil
    public $nom, $prenom, $email, $telephone, $whatsapp, $description, $specialite_id, $photo, $password;
    public $isWhatsApp = false; // Propriété pour le checkbox
    public $listespecialie;
    // Étape 2: Expérience
    public $experiences = [];
    public $job_title, $company_name, $employment_type, $location, $start_year, $end_year, $current_position;

    // Étape 3: Formation
    public $formations = [];
    public $school_name, $degree, $field_of_study, $start_year_formation, $end_year_formation;

    // Étape 4: Compétences
    public $competences = [];
    public $competence;

    protected function validationRules()
    {
        $rules = [];

        if ($this->currentStep === 1) {
            $rules = [
                'nom' => 'required|string|max:255',
                'password' => 'required',
                'specialite_id' => 'required',
                'prenom' => 'required|string|max:255',
                'description' => 'required|string',
                'email' => 'required|email|max:255|unique:users,email',
                'telephone' => 'required|string|max:15',
                'photo' => 'nullable|image|max:2048', // Optionnel : validation de l'image
            ];
        } elseif ($this->currentStep === 2) {
            $rules = [
                'job_title' => 'nullable|string|max:255',
                'company_name' => 'nullable|string|max:255',
                'employment_type' => 'nullable',
                'location' => 'nullable|string|max:255',
                'start_year' => 'nullable|digits:4',
                'end_year' => 'nullable|digits:4',
            ];
        } elseif ($this->currentStep === 3) {
            $rules = [
                'school_name' => 'nullable|string|max:255',
                'degree' => 'nullable|string|max:255',
                'field_of_study' => 'nullable|string|max:255',
                'start_year_formation' => 'nullable|digits:4',
                'end_year_formation' => 'nullable|digits:4',
            ];
        } elseif ($this->currentStep === 4) {
            $rules = [
                'competence' => 'nullable|string|max:255',
            ];
        }

        return $rules;
    }

    public function mount()
    {
        // Récupérer la liste des spécialités
        $this->listespecialie = TLibelleSpecialite::all();
    }


    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function nextStep()
    {
        $this->validate($this->validationRules());
        if ($this->currentStep < 4) {
            $this->currentStep++;
        }
    }


    private function getExperienceData()
    {
        return [
            'job_title' => $this->job_title,
            'company_name' => $this->company_name,
            'employment_type' => $this->employment_type,
            'location' => $this->location,
            'start_year' => $this->start_year,
            'end_year' => $this->end_year,
            'current_position' => $this->current_position,
        ];
    }
    private function validateExperience()
    {
        $validator = Validator::make($this->getExperienceData(), [
            'job_title' => 'required',
            'company_name' => 'required',
            'employment_type' => 'required',
            'location' => 'required',
            'start_year' => 'required|date_format:Y|before_or_equal:end_year',
            'end_year' => 'required|date_format:Y|after_or_equal:start_year',
            // 'current_position' => 'boolean',
        ]);

        // Ajouter des messages d'erreur personnalisés
        $validator->setAttributeNames([
            'job_title' => 'Titre du poste',
            'company_name' => 'Nom de l\'entreprise',
            'employment_type' => 'Type d\'emploi',
            'location' => 'Emplacement',
            'start_year' => 'Année de début',
            'end_year' => 'Année de fin',
            'current_position' => 'Poste actuel',
        ]);

        $validator->validate();
    }


    public function addExperience()
    {

        $this->validateExperience();


        $this->experiences[] = [
            'job_title' => $this->job_title,
            'company_name' => $this->company_name,
            'employment_type' => $this->employment_type,
            'location' => $this->location,
            'start_year' => $this->start_year,
            'end_year' => $this->end_year,
            'current_position' => $this->current_position,
        ];

        $this->reset(['job_title', 'company_name', 'employment_type', 'location', 'start_year', 'end_year', 'current_position']);

        $this->resetErrorBag(); // Efface les messages d'erreur
    }

    public function addFormation()
    {
        $this->validateFormation();

        $this->formations[] = [
            'school_name' => $this->school_name,
            'degree' => $this->degree,
            'field_of_study' => $this->field_of_study,
            'start_year_formation' => $this->start_year_formation,
            'end_year_formation' => $this->end_year_formation,
        ];

        $this->reset(['school_name', 'degree', 'field_of_study', 'start_year_formation', 'end_year_formation']);

        $this->resetErrorBag(); // Efface les messages d'erreur
    }


    public function generateUniqueCodeProfile()
    {
        // Génère un identifiant unique avec le préfixe "c-" au lieu de "c/"
        $code = 'c-' . Str::uuid();

        // Assurez-vous que le code est unique dans la base de données
        while (TCandidat::where('codeprofile', $code)->exists()) {
            $code = 'c-' . Str::uuid();
        }

        return $code;
    }

    public function addCompetence()
    {
        $this->competences[] = $this->competence;
        $this->reset('competence');
    }


    public function removeCompetence($index)
    {
        unset($this->competences[$index]);
        // Réindexer le tableau si nécessaire
        $this->competences = array_values($this->competences);
    }


    public function saveProfile()
    {
        $this->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email',
            'telephone' => 'nullable|string|max:20',
        ]);

        if ($this->isWhatsApp) {
            $whatsappNumber = $this->telephone;
        } else {
            $whatsappNumber = $this->whatsapp;
        }


        $user = User::create([
            'name' => $this->nom,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_id' => 2,
        ]);


        // Save Candidate
        $candidat = TCandidat::create([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'photo' => $this->photo ? $this->photo->store('photos', 'public') : null,
            'codeprofile' => $this->generateUniqueCodeProfile(),
            'email' => 'ss'.rand(100,34343),
            'telephone' => $this->telephone,
            'whattssap' => $whatsappNumber,
            'ville_id' =>1,
            'pays_id' =>1,
            'description'=> $this->description,
            'specialite_id'=> $this->specialite_id,
            'user_id'=> $user->id
        ]);

        // Save Experiences
        foreach ($this->experiences as $experience) {
            TExperience::create([
                'intitule' => $experience['job_title'], // Assurez-vous d'utiliser les bons noms de champs
                'typeemploi_id' => $experience['employment_type'], // ID du type d'emploi
                'nom_entreprise' => $experience['company_name'],
                'localisation' => $experience['location'],
                'current_position' => $experience['current_position'] ? 1 : 0, // Convertir en binaire
                'mois_debut' => $experience['start_month'] ?? null, // Si vous avez un champ pour le mois de début
                'mois_fin' => $experience['end_month'] ?? null, // Idem pour la fin
                'annee_debut' => $experience['start_year'],
                'annee_fin' => $experience['end_year'] ?? null, // Utiliser null si non spécifié
                'description' => $experience['description'] ?? '', // Si vous avez un champ de description
                't_candidat_id' => $candidat->id, // ID de la candidature
            ]);
        }

        // Save Formations

        foreach ($this->formations as $formation) {

            TFormation::create([
                'nom_ecole' => $formation['school_name'], // Nom de l'école
                'diplome' => $formation['degree'], // Diplôme obtenu
                'domaine_etudes' => $formation['field_of_study'], // Domaine d'étude
                'annee_debut' => $formation['start_year_formation'], // Année de début
                'annee_fin' => $formation['end_year_formation'] ?? null, // Année de fin, avec null par défaut
                'candidature_id' => $candidat->id, // ID de la candidature
            ]);
        }


        foreach ($this->competences as $competence)
        {
            TCompetenceCandidat::create([
                'libellecompetence' => $competence,
                'candidature_id' => $candidat->id,
            ]);
        }

        $token = Str::random(60);
        $user->notify(new AccountConfirmation($token));

        return redirect()->route('confirmated.compte');

        // session()->flash('message', 'Candidature soumise avec succès.');
        // $this->resetForm();
    }

    private function resetForm()
    {
        $this->currentStep = 1;
        $this->nom = '';
        $this->prenom = '';
        $this->photo = null;
        $this->codeprofile = '';
        $this->email = '';
        $this->telephone = '';
        $this->experiences = [];
        $this->formations = [];
        $this->competences = [];
    }


    public function removeFormation($index)
    {
        // Vérifier si l'index est valide
        if (isset($this->formations[$index])) {
            // Supprimer la formation à l'index donné
            unset($this->formations[$index]);

            // Réindexer le tableau
            $this->formations = array_values($this->formations);
        }
    }

    public function removeExperience($index)
    {
        // Vérifiez si l'index est valide
        if (isset($this->experiences[$index])) {
            // Supprimez l'expérience de la liste
            unset($this->experiences[$index]);

            // Réindexez le tableau pour éviter les trous
            $this->experiences = array_values($this->experiences);
        }
    }


    private function validateFormation()
    {
        $data = [
            'school_name' => $this->school_name,
            'degree' => $this->degree,
            'field_of_study' => $this->field_of_study,
            'start_year_formation' => $this->start_year_formation,
            'end_year_formation' => $this->end_year_formation,
        ];

        $validator = Validator::make($data, [
            'school_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'field_of_study' => 'required|string|max:255',
            'start_year_formation' => 'required|date_format:Y|before_or_equal:end_year_formation',
            'end_year_formation' => 'nullable|date_format:Y|after_or_equal:start_year_formation',
        ]);

        // Ajouter des messages d'erreur personnalisés
        $validator->setAttributeNames([
            'school_name' => 'Nom de l\'école',
            'degree' => 'Diplôme',
            'field_of_study' => 'Domaine d\'étude',
            'start_year_formation' => 'Année de début',
            'end_year_formation' => 'Année de fin',
        ]);

        $validator->validate();
    }



    public function render()
    {
        $listetypeemploi = TTypeEmploi::all();
        return view('livewire.cv-form', compact('listetypeemploi'));
    }
}
