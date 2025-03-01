<?php

namespace App\Http\Controllers\Cours;

use App\Http\Controllers\Controller;
use App\Models\Cours;
use App\Models\Enseignant;
use App\Models\Matiere;
use Illuminate\Http\Request;

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

        // Si 'course_id' existe, nous mettons à jour le cours
        if ($courseId) {
            $course = Cours::find($courseId);

            // Si le cours n'existe pas, on le crée
            if (!$course) {
                return $this->createCourse($request);
            }

            // Si le cours existe, on le met à jour
            return $this->updateCourse($course, $request);
        } else {
            // Si 'course_id' n'existe pas, nous créons un nouveau cours
            return $this->createCourse($request);
        }
    }

    private function updateCourse($course, Request $request)
    {
        // Mise à jour du cours avec les données envoyées dans la requête
        $course->update([
            'title' => $request->input('title'),
            'matiere_id' => $request->input('matiere_id'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
           
        ]);

        $course->load('matiere');
        // Réponse JSON après mise à jour
        return response()->json([
            'message' => 'Cours mis à jour avec succès',
            'course' => $course
        ], 200);
    }

    private function createCourse(Request $request)
    {
        // Création du cours avec les données envoyées dans la requête
        $course = Cours::create([
            'title' => $request->input('title'),
            'matiere_id' => $request->input('matiere_id'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            'enseignant_id' => $request->input('enseignant_id'),
        ]);

        $course->load('matiere');
        // Réponse JSON après création
        return response()->json([
            'message' => 'Cours créé avec succès',
            'course' => $course
        ], 201);
    }
}
