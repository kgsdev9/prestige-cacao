<?php

namespace App\Http\Controllers\Cours;

use App\Http\Controllers\Controller;
use App\Models\Cours;
use App\Models\Enseignant;
use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoursController extends Controller
{
    public function index()
    {
        $listecourse = Cours::with('matiere')->get();
        $matieres = Matiere::all();
        $enseignants = Enseignant::all();

        return view('admin.cours.index', compact('listecourse', 'matieres', 'enseignants'));
    }


    public function store(Request $request)
    {
        // Vérification si un 'course_id' est présent dans la requête
        $courseId = $request->input('course_id');

        // Récupérer le fichier 'document' s'il existe
        $document = $request->file('document');

        // Si un fichier est fourni, on le stocke
        if ($document) {
            // Récupère le nom original du fichier
            $originalName = $document->getClientOriginalName();

            // Crée un nom unique pour le fichier en utilisant un hash
            $hashedName = $this->generateHashedName($originalName);

            // Stocke le fichier dans le dossier 'sauvegarde/cours' avec le nom hashé
            $path = $document->storeAs('cours', $hashedName);
        }

        // Si 'course_id' existe, nous mettons à jour le cours
        if ($courseId) {
            $course = Cours::find($courseId);

            // Si le cours n'existe pas, on le crée
            if (!$course) {
                return $this->createCourse($request, $path ?? null);  // Passe le chemin du document
            }

            // Si le cours existe, on le met à jour
            return $this->updateCourse($course, $request, $path ?? null);
        } else {
            // Si 'course_id' n'existe pas, nous créons un nouveau cours
            return $this->createCourse($request, $path ?? null);
        }
    }

    // Fonction pour générer un nom de fichier hashé unique
    private function generateHashedName($originalName)
    {
        // On utilise hash('sha256') pour obtenir un nom unique
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);
        $hashedName = hash('sha256', uniqid('', true)) . '.' . $extension;  // Crée un hash unique avec l'extension du fichier
        return $hashedName;
    }

    private function updateCourse($course, Request $request, $documentPath = null)
    {
        // Si un nouveau fichier a été téléchargé, on supprime l'ancien fichier
        if ($documentPath) {
            $oldDocumentPath = $course->document;
            // Supprimer l'ancien fichier s'il existe
            if ($course->document && Storage::exists($oldDocumentPath)) {
                
                if (Storage::exists($oldDocumentPath)) {
                    Storage::delete($oldDocumentPath);
                }
            }

            // Met à jour le nom du document avec le nouveau nom hashé
            $course->document = basename($documentPath);
        }

        // Mise à jour du cours avec les données envoyées dans la requête
        $course->update([
            'title' => $request->input('title'),
            'matiere_id' => $request->input('matiere_id'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            // Si un document a été téléchargé, on met à jour le champ 'document'
            'document' => $documentPath ?? $course->document,  // Si pas de nouveau fichier, garder l'ancien
        ]);

        $course->load('matiere');
        // Réponse JSON après mise à jour
        return response()->json([
            'message' => 'Cours mis à jour avec succès',
            'course' => $course
        ], 200);
    }

    private function createCourse(Request $request, $documentPath = null)
    {
        // Création du cours avec les données envoyées dans la requête
        $course = Cours::create([
            'title' => $request->input('title'),
            'matiere_id' => $request->input('matiere_id'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            'enseignant_id' => $request->input('enseignant_id'),
            // Si un document a été téléchargé, on l'ajoute au cours
            'document' => $documentPath ? basename($documentPath) : null,  // Sauvegarde uniquement le nom du fichier hashé
        ]);

        $course->load('matiere');
        // Réponse JSON après création
        return response()->json([
            'message' => 'Cours créé avec succès',
            'course' => $course
        ], 201);
    }
}
