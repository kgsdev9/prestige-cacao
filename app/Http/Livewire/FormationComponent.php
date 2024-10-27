<?php

namespace App\Http\Livewire;

use App\Models\TFormation;
use App\Models\TCandidat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormationComponent extends Component
{
    public $showForm = false;
    public $formationId; // Pour stocker l'ID de la formation à modifier

    // Champs de formulaire
    public $nom_ecole;
    public $diplome;
    public $domaine_etudes;
    public $annee_debut;
    public $annee_fin;

    protected $rules = [
        'nom_ecole' => 'required|string',
        'diplome' => 'required|string',
        'domaine_etudes' => 'required|string',
        'annee_debut' => 'required|integer',
        'annee_fin' => 'nullable|integer',
    ];

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function saveFormation()
    {
        $iduser = Auth::user()->id;
        $candidat = TCandidat::where('user_id', $iduser)->first();

        $this->validate();

        TFormation::create([
            'nom_ecole' => $this->nom_ecole,
            'diplome' => $this->diplome,
            'domaine_etudes' => $this->domaine_etudes,
            'annee_debut' => $this->annee_debut,
            'annee_fin' => $this->annee_fin,
            'candidature_id' => $candidat->id,
        ]);

        // Réinitialisez les champs du formulaire après l'enregistrement
        $this->resetInputFields();
        $this->showForm = false;

        session()->flash('message', 'Formation ajoutée avec succès.');
    }

    public function getListeFormationProperty()
    {
        $iduser = Auth::user()->id;
        $candidat = TCandidat::where('user_id', $iduser)->first();

        return TFormation::where('candidature_id', $candidat->id)->get();
    }

    public function editFormation($id)
    {
        $this->formationId = $id;
        $formation = TFormation::find($this->formationId);

        // Pré-remplir les champs avec les données de la formation à modifier
        $this->nom_ecole = $formation->nom_ecole;
        $this->diplome = $formation->diplome;
        $this->domaine_etudes = $formation->domaine_etudes;
        $this->annee_debut = $formation->annee_debut;
        $this->annee_fin = $formation->annee_fin;

        // Afficher le formulaire
        $this->showForm = true;
    }

    public function updateFormation()
    {
        $this->validate();

        $formation = TFormation::find($this->formationId);

        $formation->update([
            'nom_ecole' => $this->nom_ecole,
            'diplome' => $this->diplome,
            'domaine_etudes' => $this->domaine_etudes,
            'annee_debut' => $this->annee_debut,
            'annee_fin' => $this->annee_fin,
        ]);

        // Réinitialiser le formulaire
        $this->resetInputFields();
        $this->showForm = false;

        session()->flash('message', 'Formation mise à jour avec succès.');
    }

    protected function resetInputFields()
    {
        $this->formationId = null;
        $this->nom_ecole = '';
        $this->diplome = '';
        $this->domaine_etudes = '';
        $this->annee_debut = '';
        $this->annee_fin = '';
    }

    public function render()
    {
        return view('livewire.formation-component')->extends('layout.layout');
    }
}
