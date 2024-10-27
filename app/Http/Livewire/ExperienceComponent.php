<?php

namespace App\Http\Livewire;

use App\Models\TCandidat;
use App\Models\TExperience;
use App\Models\TTypeEmploi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ExperienceComponent extends Component
{
    public $showForm = false;

    // Champs de formulaire
    public $experienceId; // Ajoutez cette ligne
    public $intitule;
    public $typeemploi_id;
    public $nom_entreprise;
    public $localisation;
    public $current_position;
    public $mois_debut;
    public $mois_fin;
    public $annee_debut;
    public $annee_fin;
    public $description;

    protected $rules = [
        'intitule' => 'required|string',
        'typeemploi_id' => 'required|integer',
        'nom_entreprise' => 'required|string',
        'localisation' => 'nullable|string',
        'current_position' => 'required|boolean',
        'mois_debut' => 'required|integer',
        'mois_fin' => 'nullable|integer',
        'annee_debut' => 'required|integer',
        'annee_fin' => 'nullable|integer',
        'description' => 'nullable|string',
    ];

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function saveExperience()
    {
        $iduser = Auth::user()->id;
        $candidat = TCandidat::where('user_id', $iduser)->first();

        // $this->validate();

        TExperience::create([
            'intitule' => $this->intitule,
            'typeemploi_id' => $this->typeemploi_id,
            'nom_entreprise' => $this->nom_entreprise,
            'localisation' => $this->localisation,
            'current_position' => $this->current_position ?? 0,
            'mois_debut' => $this->mois_debut,
            'annee_debut' => $this->annee_debut,
            'mois_fin' => $this->mois_fin,
            'annee_fin' => $this->annee_fin,
            'description' => $this->description,
            't_candidat_id' => $candidat->id,
        ]);

        // Réinitialisez les champs du formulaire après l'enregistrement
        $this->reset(['intitule', 'typeemploi_id', 'nom_entreprise', 'localisation', 'current_position', 'mois_debut', 'annee_debut', 'mois_fin', 'annee_fin', 'description']);
        $this->showForm = false;

        session()->flash('message', 'Expérience ajoutée avec succès.');
    }

    public function getListeExperienceProperty()
    {
        $iduser = Auth::user()->id;
        $candidat = TCandidat::where('user_id', $iduser)->first();

        return TExperience::where('t_candidat_id', $candidat->id)->get();
    }

    public function getListetypeemploiProperty()
    {
        return TTypeEmploi::all();
    }

    public function editExperience($id)
    {
        $this->experienceId = $id;
        $experience = TExperience::find($this->experienceId);

        // Pré-remplir les champs avec les données de l'expérience à modifier
        $this->intitule = $experience->intitule;
        $this->nom_entreprise = $experience->nom_entreprise;
        $this->typeemploi_id = $experience->typeemploi_id;
        $this->localisation = $experience->localisation;
        $this->mois_debut = $experience->mois_debut;
        $this->annee_debut = $experience->annee_debut;
        $this->mois_fin = $experience->mois_fin;
        $this->annee_fin = $experience->annee_fin;
        $this->description = $experience->description;

        // Afficher le formulaire
        $this->showForm = true;
    }

    public function updateExperience()
    {
        // $this->validate();

        $experience = TExperience::find($this->experienceId);

        $experience->update([
            'intitule' => $this->intitule,
            'typeemploi_id' => $this->typeemploi_id,
            'nom_entreprise' => $this->nom_entreprise,
            'localisation' => $this->localisation,
            'mois_debut' => $this->mois_debut,
            'annee_debut' => $this->annee_debut,
            'mois_fin' => $this->mois_fin,
            'annee_fin' => $this->annee_fin,
            'description' => $this->description,
        ]);

        // Réinitialiser le formulaire
        $this->resetInputFields();
        $this->showForm = false;

        session()->flash('message', 'Expérience mise à jour avec succès.');
    }

    protected function resetInputFields()
    {
        $this->experienceId = null; // Assurez-vous que cela est réinitialisé
        $this->intitule = '';
        $this->nom_entreprise = '';
        $this->typeemploi_id = '';
        $this->localisation = '';
        $this->mois_debut = '';
        $this->annee_debut = '';
        $this->mois_fin = '';
        $this->annee_fin = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.experience-component')->extends('layout.layout');
    }
}
