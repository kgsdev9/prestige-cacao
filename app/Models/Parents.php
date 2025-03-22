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
        'piece_avant',
        'piece_arriere',
        'photo',
        'commune_id',
        'user_id',
        'adhesion'
    ];


    public static function generateUniquePromotion()
    {
        // On commence avec la génération d'un code de 4 chiffres
        do {
            // Générer un code secret aléatoire de 4 chiffres
            $codepromotion = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT); // Exemple: 0001, 0999, etc.
        } while (self::where('code_affiliation', $codepromotion)->exists()); // Vérifie l'unicité du code

        return $codepromotion; // Retourne le code secret unique
    }



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
