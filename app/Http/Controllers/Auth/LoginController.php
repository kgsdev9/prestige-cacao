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
            return response()->json([
                'success' => true, // ✅ Utilisation de 'success' au lieu de 'message'
                'message' => 'Connexion réussie',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Email ou mot de passe incorrect',
        ], 401);
    }
}
