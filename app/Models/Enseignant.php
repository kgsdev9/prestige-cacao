<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Enseignant extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'email', 'filiere_id'];

    // public static function generateUniqueSlug($fullname)
    // {
    //     // Créer un slug de base à partir du fullname
    //     $slug = Str::slug($fullname);
    //     $originalSlug = $slug;

    //     // Vérifier si le slug existe déjà dans la table
    //     $count = 1;
    //     while (self::where('slug', $slug)->exists()) {
    //         // Ajouter un suffixe pour générer un nouveau slug unique
    //         $slug = $originalSlug . '-' . $count;
    //         $count++;
    //     }

    //     // Retourner le slug unique
    //     return $slug;
    // }
}
