<?php

namespace App\Http\Livewire;

use App\Models\TCompetenceCandidat;
use App\Models\TCandidat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CompetenceComponent extends Component
{
    public $showForm = false;
    public $competenceId; // Pour stocker l'ID de la compétence à modifier

    // Champ de formulaire
    public $libellecompetence;

    protected $rules = [
        'libellecompetence' => 'required|string|max:255',
    ];

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function saveCompetence()
    {
        $iduser = Auth::user()->id;
        $candidat = TCandidat::where('user_id', $iduser)->first();

        $this->validate();

        TCompetenceCandidat::create([
            'libellecompetence' => $this->libellecompetence,
            'candidature_id' => $candidat->id,
        ]);

        // Réinitialisez les champs du formulaire après l'enregistrement
        $this->resetInputFields();
        $this->showForm = false;

        session()->flash('message', 'Compétence ajoutée avec succès.');
    }

    public function getListeCompetencesProperty()
    {
        $iduser = Auth::user()->id;
        $candidat = TCandidat::where('user_id', $iduser)->first();

        return TCompetenceCandidat::where('candidature_id', $candidat->id)->get();
    }

    public function editCompetence($id)
    {
        $this->competenceId = $id;
        $competence = TCompetenceCandidat::find($this->competenceId);

        // Pré-remplir les champs avec les données de la compétence à modifier
        $this->libellecompetence = $competence->libellecompetence;

        // Afficher le formulaire
        $this->showForm = true;
    }

    public function updateCompetence()
    {
        $this->validate();

        $competence = TCompetenceCandidat::find($this->competenceId);

        $competence->update([
            'libellecompetence' => $this->libellecompetence,
        ]);

        // Réinitialiser le formulaire
        $this->resetInputFields();
        $this->showForm = false;

        session()->flash('message', 'Compétence mise à jour avec succès.');
    }

    protected function resetInputFields()
    {
        $this->competenceId = null;
        $this->libellecompetence = '';
    }

    public function deleteCompetence($id)
    {
        TCompetenceCandidat::find($id)->delete();
        session()->flash('message', 'Compétence supprimée avec succès.');
    }

    public function render()
    {
        return view('livewire.competence-component')->extends('layout.layout');
    }
}
