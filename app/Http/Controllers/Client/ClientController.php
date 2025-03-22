<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Notifications\NotificationSuccesRegister;
use Illuminate\Support\Facades\URL;

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
        // dd($request->all());
    }

    public function store(Request $request)
    {
        $codesecret = User::generateUniqueCodeSecret();
        $codepromotion = Parents::generateUniquePromotion();
        $user = User::where('email', $request->email)->first();
        $telephone = Parents::where('telephone', $request->telephone)->first();
        // Générer le QR code à partir du code secret
        // $qrcode = User::generateUniqueQRCode($codesecret);

        if (!$user && !$telephone) {
            $user = User::create([
                'name' => $request->nom,
                'codesecret' => $codesecret,
                'qrcode' => rand(190, 99998),
                'email' => $request->email,
                'password' => Hash::make($codesecret),
                'role_id' => 1,
            ]);

            $client = Parents::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'code_affiliation' => $codepromotion,
                'piece_parent' => $request->piece_parent,
                'nombre_enfant' => $request->nb_enfant,
                'adresse' => $request->adresse,
                'telephone' => $request->telephone,
                'telephone_1' => $request->telephone_1,
                'piece_avant' => $request->piece_avant,
                'piece_arriere' => $request->piece_arriere,
                'photo' => $request->photo,
                'user_id' => $user->id,
            ]);

            $client->user->notify(new NotificationSuccesRegister($client));

            return response()->json([
                'message' => 'Parent créé avec succès!',
                'existe' => false,
                'user_id' => $user->id,
                'signature' => URL::signedRoute('register.success', ['user' => $user->id])
            ], 201);
        } else {
            return response()->json([
                'message' => 'Vous êtes déjà enregistré dans notre base de données. Veuillez contacter notre service client pour toute assistance.!',
                'existe' => true
            ], 201);
        }
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
