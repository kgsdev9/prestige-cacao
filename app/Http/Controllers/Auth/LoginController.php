<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class LoginController extends Controller
{

    public function loginForm(Request $request)
    {

        // Si le token n'existe pas ou n'est pas valide, afficher le formulaire de connexion
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Connexion réussie
            return response()->json([
                'message' => 'Connexion réussie',
            ]);
        }
        // return redirect()->back()->withErrors(['email' => 'Identifiants incorrects']);
    }
}
