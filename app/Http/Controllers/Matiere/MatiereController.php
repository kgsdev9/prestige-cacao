<?php

namespace App\Http\Controllers\Matiere;

use App\Models\Matiere;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatiereController extends Controller
{


    public function store(Request $request)
    {
        // Récupérer l'ID de la matière si elle est présente dans la requête
        $matiereId = $request->input('matiere_id');

        if ($matiereId) {
            // Si l'ID de la matière existe, on tente de récupérer la matière
            $matiere = Matiere::find($matiereId);

            // Si la matière n'existe pas, on la crée
            if (!$matiere) {
                return $this->createMatiere($request);
            }

            // Sinon, on la met à jour
            return $this->updateMatiere($matiere, $request);
        } else {
            // Si il n'y a pas d'ID de matière dans la requête, on crée une nouvelle matière
            return $this->createMatiere($request);
        }
    }

    private function updateMatiere($matiere, Request $request)
    {
        $data = [
            'title' => $request->title,
            'filiere_id' => $request->filiere_id,
        ];

        // Mise à jour des données de la matière
        $matiere->update($data);

        // Retourner la réponse JSON avec la matière mise à jour
        return response()->json(['message' => 'Matière mise à jour avec succès', 'matiere' => $matiere], 200);
    }

    private function createMatiere(Request $request)
    {
        // Créer une nouvelle matière avec les données de la requête
        $matiere = Matiere::create([
            'title' => $request->title,
            'filiere_id' => $request->filiere_id,
        ]);

        // Retourner la réponse JSON avec la matière créée
        return response()->json(['message' => 'Matière créée avec succès', 'matiere' => $matiere], 201);
    }


    public function destroy(Matiere $matiere)
    {
        $matiere->delete();

        return response()->json(['message' => 'Matière supprimée']);
    }
}
