<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function store(Request $request)
    {
        // dd($request->all());
        // Générer un codesecret unique (par exemple, avec un UUID ou un random string)
        $codesecret = User::generateUniqueCodeSecret();

        // Générer le QR code à partir du code secret
        // $qrcode = User::generateUniqueQRCode($codesecret);

        // Création de l'utilisateur sans validation
        $user = User::create([
            'name' => $request->name ?? 'MOYOASSURANCE' . rand(100, 9998),
            'codesecret' => $codesecret,  // Ajouter le code secret
            'qrcode' => rand(190, 99998),          // Ajouter le QR code généré
            'email' => "dd" . rand(999, 9909),
            'password' => Hash::make($request->password), // Assurez-vous que le mot de passe est haché
            'role_id' => 1,
        ]);

        // Création du parent sans validation
        $client = Parents::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'code_affiliation' => rand(100, 34544),
            'piece_parent' => $request->piece_parent,
            'nombre_enfant' => $request->nb_enfant,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'telephone_1' => $request->telephone_1,
            // 'piece_avant' => $request->piece_avant,
            // 'piece_arriere' => $request->piece_arriere,
            'photo' => $request->photo,
            'user_id' => $user->id,
        ]);

        // Retourner une réponse ou rediriger
        return response()->json([
            'message' => 'Parent créé avec succès!',
        ], 201);
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
