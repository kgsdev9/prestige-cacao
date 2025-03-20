<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntrepriseInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'numero_registre',
        'adresse',
        'telephone',
        'telephone_2',
        'telephone_3',
        'fax',
        'email',
        'site_web',
        'secteur_activite',
        'type_entreprise',
        'capital_social',
        'date_creation',
    ];
}
