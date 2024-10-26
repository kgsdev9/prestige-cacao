<?php

namespace App\Http\Livewire;

use App\Models\TTypeEmploi;
use Livewire\Component;

class CvForm extends Component
{
    public $currentStep = 1;

    // Étape 1: Informations
    public $nom, $prenom, $photo, $codeprofile, $email, $telephone;

    // Étape 2: Expérience
    public $experiences = [];
    public $job_title, $company_name, $employment_type, $location, $start_year, $end_year, $current_position;

    // Étape 3: Formation
    public $formations = [];
    public $school_name, $degree, $field_of_study, $start_year_formation, $end_year_formation;

    // Étape 4: Compétences
    public $competences = [];
    public $competence;

    protected function stepValidationRules()
    {
        $rules = [];

        if ($this->currentStep === 1) {
            $rules = [
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'email' => 'required|email',
                'telephone' => 'required|string|max:15',
            ];
        } elseif ($this->currentStep === 2) {
            $rules = [
                'job_title' => 'required|string|max:255',
                'company_name' => 'required|string|max:255',
                'employment_type' => 'required',
                'location' => 'required|string|max:255',
                'start_year' => 'required|digits:4',
                'end_year' => 'nullable|digits:4',
            ];
        } elseif ($this->currentStep === 3) {
            $rules = [
                'school_name' => 'required|string|max:255',
                'degree' => 'required|string|max:255',
                'field_of_study' => 'required|string|max:255',
                'start_year_formation' => 'required|digits:4',
                'end_year_formation' => 'nullable|digits:4',
            ];
        } elseif ($this->currentStep === 4) {
            $rules = [
                'competence' => 'required|string|max:255',
            ];
        }

        return $rules;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function nextStep()
    {
        $this->validate($this->stepValidationRules());
        $this->currentStep++;
    }

    public function addExperience()
    {
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
    }

    public function addFormation()
    {
        $this->formations[] = [
            'school_name' => $this->school_name,
            'degree' => $this->degree,
            'field_of_study' => $this->field_of_study,
            'start_year_formation' => $this->start_year_formation,
            'end_year_formation' => $this->end_year_formation,
        ];

        $this->reset(['school_name', 'degree', 'field_of_study', 'start_year_formation', 'end_year_formation']);
    }

    public function addCompetence()
    {
        $this->competences[] = $this->competence;
        $this->reset('competence');
    }

    public function render()
    {
        $listetypeemploi = TTypeEmploi::all();
        return view('livewire.cv-form', compact('listetypeemploi'));
    }
}
