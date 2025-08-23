<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable  implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;


   protected $fillable = [
        'name',            // Nom d'utilisateur
        'nom',             // Nom réel
        'prenom',          // Prénom
        'adresse',         // Adresse
        'email',           // Email unique
        'password',        // Mot de passe (hashé)
        'role',            // Rôle : user ou admin
        'confirmated_at',  // Statut de confirmation
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'confirmated_at' => 'boolean',
    ];
}
