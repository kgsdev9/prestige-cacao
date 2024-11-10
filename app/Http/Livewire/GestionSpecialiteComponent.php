<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TLibelleSpecialite;
use Livewire\WithPagination;

class GestionSpecialiteComponent extends Component
{
    use WithPagination;

    public $name;
    public $specialiteId = null;
    public $showForm = false;  // Contrôle l'affichage du formulaire
    protected $paginationTheme = 'bootstrap';

    // Fonction pour réinitialiser le formulaire
    public function resetForm()
    {
        $this->name = '';
        $this->specialiteId = null;
        $this->showForm = false;  // Cacher le formulaire après réinitialisation
    }

    // Fonction pour enregistrer ou mettre à jour la spécialité
    public function saveSpecialite()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        TLibelleSpecialite::create([
            'libellespecialite' => $this->name,
        ]);
        $this->emit('toast', 'Spécialité ajoutée avec succès');
        $this->resetForm();
    }

    // Fonction pour mettre à jour une spécialité existante
    public function updateSpecialite()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        $specialite = TLibelleSpecialite::find($this->specialiteId);
        $specialite->update([
            'libellespecialite' => $this->name,
        ]);
        $this->emit('toast', 'Spécialité mise à jour avec succès');
        $this->resetForm();
    }

    // Fonction pour modifier une spécialité existante
    public function editSpecialite($id)
    {
        $specialite = TLibelleSpecialite::find($id);
        $this->specialiteId = $specialite->id;
        $this->name = $specialite->libellespecialite;
        $this->showForm = true;  // Afficher le formulaire en mode modification
    }

    // Fonction pour supprimer une spécialité
    public function deleteSpecialite($id)
    {
        TLibelleSpecialite::find($id)->delete();
        $this->emit('toast', 'Spécialité supprimée avec succès');
    }

    // Fonction pour afficher ou masquer le formulaire d'ajout
    public function toggleForm()
    {
        $this->showForm = !$this->showForm;

    }

    public function render()
    {
        $specialites = TLibelleSpecialite::paginate(10);
        return view('livewire.gestion-specialite-component', compact('specialites'))->extends('layout.layout');
    }
}
