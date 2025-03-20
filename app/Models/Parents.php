<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'code_affiliation',
        'piece_parent',
        'nombre_enfant',
        'fiche_adhesion',
        'adresse',
        'telephone',
        'telephone_1',
        'telephone_2',
        'contact',
        'contact_urgent',
        'commune_id',
        'user_id',
        'adhesion'
    ];

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    // Relation avec l'utilisateur (créateur du dossier)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
