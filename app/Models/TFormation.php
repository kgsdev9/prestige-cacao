<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TFormation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_ecole',
        'diplome',
        'domaine_etudes',
        'annee_debut',
        'annee_fin',
        'candidature_id'
    ];
} 
