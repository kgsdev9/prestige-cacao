<?php

namespace App\Http\Livewire;

use App\Models\TCandidat;
use App\Models\TLibelleSpecialite;
use App\Models\TVille;
use Livewire\Component;


class HomeCandidat extends Component
{
    public $selectedCategories = [];
    public $selectedCountry;
    public $selectedCity;
    public $countries = [];
    public $cities = [];
    public function mount()
    {
        $this->countries = TVille::all(); // Assurez-vous d'importer le modèle Country
        $this->cities = TVille::all(); // Assurez-vous d'importer le modèle City
    }


    public function filterCandidates()
    {
      
        // Logique pour filtrer les candidats en fonction des pays, villes et catégories sélectionnés
        $this->allCourses = TCandidat::when($this->selectedCountry, function($query) {
                return $query->where('country_id', $this->selectedCountry);
            })
            ->when($this->selectedCity, function($query) {
                return $query->where('city_id', $this->selectedCity);
            })
            ->when($this->selectedCategories, function($query) {
                return $query->whereIn('category_id', $this->selectedCategories);
            })
            ->get();
    }

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
