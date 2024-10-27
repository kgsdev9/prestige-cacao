<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TCandidat;

class SectionRecherche extends Component
{
    public $search = ''; // Propriété pour stocker la valeur de la recherche
    public $loading = false; // Propriété pour gérer l'état de chargement
    public $results; // Propriété pour stocker les résultats de recherche

    public function mount() {
        $this->results = collect(); // Initialisation comme collection vide
    }

    public function updatedSearch()
    {
        // Effectuer la recherche dans les candidats
        $this->results = TCandidat::query()
            ->where('nom', 'like', "%{$this->search}%")
            ->orWhere('prenom', 'like', "%{$this->search}%")
            ->orWhere('email', 'like', "%{$this->search}%")
            ->orWhereHas('ville', function($query) {
                $query->where('libelleville', 'like', "%{$this->search}%");
            })
            ->orWhereHas('pays', function($query) {
                $query->where('libellepays', 'like', "%{$this->search}%");
            })
            ->orWhereHas('specialite', function($query) {
                $query->where('libellespecialite', 'like', "%{$this->search}%");
            })
            ->get();
    }


    public function render()
    {
        return view('livewire.section-recherche');
    }
}
