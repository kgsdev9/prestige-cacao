<?php

namespace App\Http\Livewire;

use App\Models\TJob;
use App\Models\TLibelleSpecialite;
use App\Models\TVille;
use App\Models\TPays;
use Livewire\Component;

class HomeJob extends Component
{
    public $selectedCategories = [];
    public $selectedCountry;
    public $selectedCity;
    public $countries = [];
    public $cities = [];
    public $jobs = [];

    public function mount()
    {
        $this->countries = TPays::all();
        $this->cities = TVille::all();
        $this->jobs = TJob::all();
    }

    public function filterJobs()
    {
        // Filtrer les offres d'emploi en fonction des pays, villes et catégories sélectionnés
        $this->jobs = TJob::when($this->selectedCountry, function($query) {
                return $query->where('tpays_id', $this->selectedCountry);
            })
            ->when($this->selectedCity, function($query) {
                return $query->where('tville_id', $this->selectedCity);
            })
            ->when($this->selectedCategories, function($query) {
                return $query->whereIn('t_libellespecialite', $this->selectedCategories);
            })
            ->get();
    }

    public function render()
    {
        return view('livewire.home-job', [
            'jobs' => $this->jobs,
            'categories' => TLibelleSpecialite::all(),
            'countries' => $this->countries,
            'cities' => $this->cities,
        ])->extends('layout.layout');
    }

    public function updatedSelectedCategories($value)
    {
        // Cette méthode sera appelée lorsque les cases à cocher changent
        $this->filterJobs();
    }

    public function updatedSelectedCountry($value)
    {
        // Cette méthode est appelée lorsqu'un pays est sélectionné
        $this->filterJobs();
    }

    public function updatedSelectedCity($value)
    {
        // Cette méthode est appelée lorsqu'une ville est sélectionnée
        $this->filterJobs();
    }
}
