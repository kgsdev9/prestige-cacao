<?php

namespace App\Http\Controllers\Filiere;

use App\Http\Controllers\Controller;
use App\Models\Filiere;
use App\Models\Matiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listefilieres = Filiere::all();
        $listematieres = Matiere::all();
        return view('admin.filieres.filiere', compact('listefilieres', 'listematieres'));
    }


    public function store(Request $request)
    {


        $filiere = Filiere::create([
            'title' => $request->title,
        ]);

        return response()->json(['filiere' => $filiere]);
    }

    public function update(Request $request, Filiere $filiere)
    {

        $filiere->update([
            'title' => $request->title,
        ]);

        return response()->json(['filiere' => $filiere]);
    }

    public function destroy(Filiere $filiere)
    {
        $filiere->delete();
        return response()->json(['message' => 'Filière supprimée']);
    }
}
