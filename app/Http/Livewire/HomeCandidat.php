<?php

namespace App\Http\Livewire;

use App\Models\TCandidat;
use App\Models\TLibelleSpecialite;
use Livewire\Component;

class HomeCandidat extends Component
{
    public $selectedCategories = [];

    public function render()
    {


        // Filtrer les candidats en fonction des catégories sélectionnées
        $filteredCandidats = TCandidat::when($this->selectedCategories, function ($query) {
            return $query->whereIn('specialite_id', $this->selectedCategories);
        })->get();

     

        return view('livewire.home-candidat', [
            'allCourses' => $filteredCandidats,
            'categories' => TLibelleSpecialite::all(),
        ])->extends('layout.layout');
    }

    public function updatedSelectedCategories($value)
    {
        // Cette méthode sera appelée lorsque les cases à cocher changent
        $this->render();
    }
}
