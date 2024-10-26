<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TExperience extends Model
{
    use HasFactory;

    protected $table  = "experiences";

    protected $fillable = [
        'intitule',
        'typeemploi_id',
        'nom_entreprise',
        'localisation',
        'current_position',
        'mois_debut',
        'mois_fin',
        'annee_debut',
        'annee_fin',
        'description',
        't_candidat_id'
    ];
}
