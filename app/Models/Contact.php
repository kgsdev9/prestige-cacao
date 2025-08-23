<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

      protected $fillable = [
        'nom',       // Nom du contact
        'prenom',    // Prénom du contact
        'email',     // Email du contact
        'adresse',   // Adresse du contact
        'telephone', // Numéro de téléphone du contact
    ];
}
