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
        $this->candidat->increment('visiteur');

    }
    public function render()
    {
        return view('livewire.detail-prestataire', [
        ])->extends('layout.layout');
    }
}
