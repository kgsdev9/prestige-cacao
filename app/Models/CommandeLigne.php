<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeLigne extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id',  // ID de la commande
        'article_id',   // ID de l'article
        'pu',           // Prix unitaire HT
        'qte',          // Quantité commandée
        'montant_ht',   // Montant HT de la ligne (pu * qte)
        'montant_ttc',  // Montant TTC de la ligne (HT + TVA)
    ];
}
