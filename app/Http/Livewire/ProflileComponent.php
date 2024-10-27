<?php

namespace App\Http\Livewire;

use App\Models\TCandidat;
use App\Models\TLibelleSpecialite;
use App\Models\Tpays;
use App\Models\TVille;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProflileComponent extends Component
{
    public $prenom;
    public $nom;
    public $telephone;
    public $email;
    public $candidat; // Ajout de la variable
    public $description; // Ajout de la variable
    public $specialite_id;
    public $whattssap;
    public $ville_id;
    public $pays_id;

    public function mount()
    {
        // Récupérer l'utilisateur connecté
        $iduser = Auth::user()->id;

        // Récupérer le candidat associé à l'utilisateur
        $this->candidat = TCandidat::where('user_id', $iduser)->first();

        // Initialiser les propriétés publiques avec les valeurs du modèle
        if ($this->candidat) {
            $this->prenom = $this->candidat->prenom;
            $this->nom = $this->candidat->nom;
            $this->telephone = $this->candidat->telephone;
            $this->email = $this->candidat->email;
            $this->description = $this->candidat->description;
            $this->specialite_id = $this->candidat->specialite_id;
            $this->whattssap = $this->candidat->whattssap;
            $this->ville_id = $this->candidat->ville_id;
            $this->pays_id = $this->candidat->pays_id ;


        }

    }

    public function updateProfile()
    {
        // Logique pour mettre à jour le profil du candidat
        $this->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        // Mise à jour du candidat dans la base de données
        $candidat = TCandidat::where('user_id', Auth::user()->id)->first();
        if ($candidat) {
            $candidat->nom = $this->nom;
            $candidat->prenom = $this->prenom;
            $candidat->telephone = $this->telephone;
            $candidat->email = $this->email;
            $candidat->save();
        }

        // Optionnel: Ajouter un message de succès
        session()->flash('message', 'Profil mis à jour avec succès.');
    }

    public function render()
    {
        // Passer la variable $candidat à la vue
        return view('livewire.proflile-component', [
            'candidat' => $this->candidat,
            'specialites' => TLibelleSpecialite::all(),
            'listevilles'=> TVille::all(),
            'listepays'=>Tpays::all()
        ])->extends('layout.layout');
    }
}
