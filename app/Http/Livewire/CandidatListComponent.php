<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TCandidat;
use App\Models\Specialite;
use App\Models\Ville;
use App\Models\Pays;

class CandidatListComponent extends Component
{
    use WithPagination;

    public $searchTerm = '';
    protected $paginationTheme = 'bootstrap';

    // Récupérer la liste des candidats avec recherche et pagination
    public function getCandidatsQueryProperty()
    {
        $query = TCandidat::with(['specialite', 'ville', 'pays']); // On charge les relations
            // ->where('is_active', true); // On filtre par les candidats actifs

        // Si un terme de recherche est entré, on applique le filtre sur le nom, prénom ou email
        if ($this->searchTerm) {
            $query->where(function($q) {
                $q->where('nom', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('prenom', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('email', 'like', '%' . $this->searchTerm . '%');
            });
        }

        return $query->paginate(10);
    }

    // Méthode pour exporter les candidats en CSV (fonctionnalité de base)
    public function exportCSV()
    {
        $candidats = TCandidat::with(['specialite', 'ville', 'pays'])->get();
        $filename = "candidats_" . now()->format('Y-m-d_H-i-s') . ".csv";
        $handle = fopen('php://output', 'w');
        fputcsv($handle, ['Nom', 'Prénom', 'Email', 'Téléphone', 'Spécialité', 'Ville', 'Pays', 'Statut']);

        foreach ($candidats as $candidat) {
            fputcsv($handle, [
                $candidat->nom,
                $candidat->prenom,
                $candidat->email,
                $candidat->telephone,
                $candidat->specialite->name ?? 'Non spécifié',
                $candidat->ville->name ?? 'Non spécifié',
                $candidat->pays->name ?? 'Non spécifié',
                $candidat->is_active ? 'Actif' : 'Inactif',
            ]);
        }

        fclose($handle);

        // Définir les en-têtes pour le téléchargement du fichier CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        exit();
    }

    public function render()
    {
        return view('livewire.candidat-list-component', [
            'candidats' => $this->candidatsQuery,
        ])->extends('layout.layout');;
    }
}
