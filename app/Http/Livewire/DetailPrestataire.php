<?php

namespace App\Http\Livewire;

use App\Models\NotePrestataire;
use Livewire\Component;
use App\Models\Prestataire;
use App\Models\PerfomancePrestataire;
use App\Models\Prestation;
use App\Models\TCandidat;
use Illuminate\Support\Facades\Auth;

class DetailPrestataire extends Component
{
    public $candidatureId;
    public $rating;

    public $ratingevaluation ;
    public $editingEvaluationId = null;
    public $comment;
    public $candidat;
    public $codeprofile;
    // Règles de validation
    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|max:500',
    ];

    public function mount($codeprofile)
    {

        $this->codeprofile = $codeprofile;

        $this->candidat = TCandidat::where('codeprofile', $this->codeprofile)->firstOrFail();

      
    }

    public function submitRating()
    {
        $this->validate();

        if(Auth::check())
        {
            // Enregistrement dans la base de données
            NotePrestataire::create([
                'user_id' => Auth::user()->id,
                'note' => $this->rating,
                'prestataire_id'=> $this->prestataireId,
                'commentaire' => $this->comment,
            ]);

            // Réinitialisation du formulaire
            $this->reset(['rating', 'comment']);

            // Message de succès
            session()->flash('message', 'Merci pour votre évaluation !');
        } else {
            return redirect()->route('auth.login');
        }


    }

    public function updateEvaluation()
    {
        // Validation des données
        $this->validate();

        // Trouver l'évaluation à mettre à jour
        $evaluation = NotePrestataire::find($this->editingEvaluationId);

        if ($evaluation) {
            // Mise à jour de l'évaluation
            $evaluation->update([
                'user_id' => Auth::user()->id,
                'note' => $this->rating,
                'prestataire_id'=> $this->prestataireId,
                'commentaire' => $this->comment,
            ]);

            // Réinitialisation des champs
            $this->reset(['rating', 'comment', 'editingEvaluationId']);

            // Rafraîchir les évaluations
            $this->ratingevaluation = NotePrestataire::where('prestataire_id', $this->prestataireId)->get();

            // Message de succès
            session()->flash('message', 'Évaluation mise à jour avec succès.');
        }
    }


    public function deleteEvaluation($evaluationId)
    {
        $evaluation = NotePrestataire::find($evaluationId);
        if ($evaluation) {
            $evaluation->delete();
            $this->ratingevaluation = NotePrestataire::where('prestataire_id', $this->prestataireId)->get(); // Rafraîchir les évaluations
            session()->flash('message', 'Évaluation supprimée avec succès.');
        }
    }

    public function editEvaluation($evaluationId)
    {
        $evaluation = NotePrestataire::find($evaluationId);
        if ($evaluation) {
            $this->editingEvaluationId = $evaluationId;
            $this->comment = $evaluation->commentaire;
            $this->rating = $evaluation->note;
        }
    }

    public function resetForm()
    {

        $this->rating = null;
        $this->comment = null;
        $this->editingEvaluationId = null;
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
