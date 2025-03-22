<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function home()
    {



        return view('welcome', [
            'listeformations' => [],
        ]);
    }


    public function becomeMembre()
    {
        return view('home.becomemembre');
    }

    public function successRegister($user)
    {
        $user = User::findOrFail($user);
        return view('success.register', compact('user'));
    }
}
