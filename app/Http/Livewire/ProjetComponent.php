<?php

namespace App\Http\Livewire;

use App\Models\TProjet;
use App\Models\TCandidat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProjetComponent extends Component
{
    public $showForm = false;

    // Champs de formulaire
    public $projectId;
    public $title;
    public $description;
    public $lien_projet;
    public $is_published = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'lien_projet' => 'required|url',
        'is_published' => 'boolean',
    ];

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function saveProject()
    {
        $iduser = Auth::user()->id;
        $candidat = TCandidat::where('user_id', $iduser)->first();

        $this->validate();


        $slug =TProjet::generateUniqueSlug($this->title);

        TProjet::create([
            'title' => $this->title,
            'slug' => $slug,
            'description' => $this->description,
            'lien_projet' => $this->lien_projet,
            'candidature_id' => $candidat->id,
            'is_published' => $this->is_published,
        ]);

        // Réinitialisez les champs du formulaire après l'enregistrement
        $this->resetInputFields();
        $this->showForm = false;

        session()->flash('message', 'Projet ajouté avec succès.');
    }

    public function getListeProjetProperty()
    {
        $iduser = Auth::user()->id;
        $candidat = TCandidat::where('user_id', $iduser)->first();

        return TProjet::where('candidature_id', $candidat->id)->get();
    }

    public function editProject($id)
    {
        $this->projectId = $id;
        $project = TProjet::find($this->projectId);

        // Pré-remplir les champs avec les données du projet à modifier
        $this->title = $project->title;
        $this->description = $project->description;
        $this->lien_projet = $project->lien_projet;
        $this->is_published = $project->is_published;

        // Afficher le formulaire
        $this->showForm = true;
    }

    public function updateProject()
    {
        $this->validate();

        $project = TProjet::find($this->projectId);

        $project->update([
            'title' => $this->title,
            'description' => $this->description,
            'lien_projet' => $this->lien_projet,
            'is_published' => $this->is_published,
        ]);

        // Réinitialiser le formulaire
        $this->resetInputFields();
        $this->showForm = false;

        session()->flash('message', 'Projet mis à jour avec succès.');
    }

    public function deleteProject($id)
    {
        $project = TProjet::find($id);
        $project->delete();

        session()->flash('message', 'Projet supprimé avec succès.');
    }

    protected function resetInputFields()
    {
        $this->projectId = null;
        $this->title = '';
        $this->description = '';
        $this->lien_projet = '';
        $this->is_published = false;
    }

    public function render()
    {
           return view('livewire.projet-component')->extends('layout.layout');
    }

}
