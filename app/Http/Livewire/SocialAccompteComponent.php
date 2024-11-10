<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\TSocialProfile;
use App\Models\TCandidat;

class SocialAccompteComponent extends Component
{
    public $candidature_id;
    public $facebook;
    public $linkedin;
    public $twitter;
    public $instagram;
    public $github;
    public $portfolio;

    public function mount()
    {
        // Récupérer l'utilisateur connecté
        $idUser = Auth::user()->id;

        // Récupérer le candidat associé
        $candidat = TCandidat::where('user_id', $idUser)->first();


        // Récupérer candidature_id pour les profils sociaux
        if ($candidat) {
            $this->candidature_id = $candidat->id;
            $socialProfile = TSocialProfile::where('candidature_id', $this->candidature_id)->first();

            // Initialiser les champs du profil social
            if ($socialProfile) {
                $this->facebook = $socialProfile->facebook;
                $this->linkedin = $socialProfile->linkedin;
                $this->twitter = $socialProfile->twitter;
                $this->instagram = $socialProfile->instagram;
                $this->github = $socialProfile->github;
                $this->portfolio = $socialProfile->portfolio;
            }
        }
    }

    public function saveSocialProfiles()
    {
        // Validation des champs
        $this->validate([
            'facebook' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'github' => 'nullable|string|max:255',
            'portfolio' => 'nullable|url',
        ]);

        // Sauvegarde ou mise à jour du profil social
        TSocialProfile::updateOrCreate(
            ['candidature_id' => $this->candidature_id],
            [
                'facebook' => $this->facebook,
                'linkedin' => $this->linkedin,
                'twitter' => $this->twitter,
                'instagram' => $this->instagram,
                'github' => $this->github,
                'portfolio' => $this->portfolio,
            ]
        );

        // Confirmation de sauvegarde
        session()->flash('message', 'Profils sociaux mis à jour avec succès.');
    }

    public function render()
    {
        return view('livewire.social-accompte-component')->extends('layout.layout');
    }
}
