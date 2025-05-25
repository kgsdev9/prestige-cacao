<?php

namespace App\Http\Controllers\Sondage;

use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\Sondage;
use Illuminate\Http\Request;

class SondageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communes = Commune::all();
     
       return view('home.sondage', compact('communes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        // Récupérer directement les données du request
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $telephone = $request->input('telephone');
        $commune = $request->input('commune_id');
        $profession = $request->input('profession');

        // Créer le sondage en précisant chaque champ
        Sondage::create([
            'nom' => $nom,
            'prenom' => $prenom,
            'profession' => $profession,
            'telephone' => $telephone,
            'commune_id' => $commune,
        ]);
        // Retourner la réponse JSON
        return response()->json([
            'success' => true,
            'step' => 2,
            'message' => 'Félicitations, votre inscription a été prise en compte !',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
