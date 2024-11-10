<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TCandidat;


class DetailPrestataire extends Component
{
    public $candidatureId;

    public $candidat;
    public $codeprofile;
    public $candidatsSimilar;


    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|max:500',
    ];

    public function mount($codeprofile)
    {

        $this->codeprofile = $codeprofile;
        $this->candidat = TCandidat::where('codeprofile', $this->codeprofile)->firstOrFail();
        $this->candidatsSimilar = TCandidat::where('specialite_id', $this->candidat->specialite_id)
                                            ->where('codeprofile', '!=', $this->codeprofile) // Exclure le candidat actuel
                                            ->get();

    }
    public function render()
    {
        // Récupérer les données associées au prestataire
        // $candidat = TCandidat::find($this->candidatureId);

        // $listeskills = PerfomancePrestataire::where('prestataire_id', $prestataire->id)->get();
        // $listeprestations = Prestation::where('prestaire_id', $prestataire->id)->get();
        // $evaluations = NotePrestataire::where('prestataire_id', $this->prestataireId)->get();

        // Retourner la vue avec les données
        return view('livewire.detail-prestataire', [
            // 'candidat' => $candidat,
            // 'listeskills' => $listeskills,
            // 'listeprestations' => $listeprestations,
            // 'evaluations' => $evaluations, // Utilise les évaluations récupérées ici
        ])->extends('layout.layout');
    }
}
