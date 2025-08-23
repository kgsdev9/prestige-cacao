<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        // Nom de l'article
        'image',       // Chemin ou URL de l'image
        'description', // Description de l'article
        'pu',          // Prix unitaire
        'stock',       // Quantité en stock
    ];
}
