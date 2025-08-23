<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'codeCommande',   // Code unique de la commande
        'nom',            // Nom du client
        'prenom',         // Prénom du client
        'telephone',      // Téléphone du client
        'email',          // Email du client
        'user_id',        // ID de l'utilisateur lié
        'adresse',        // Adresse de livraison ou facturation
        'montant_ht',     // Montant hors taxe
        'montant_tva',    // Montant TVA
        'montant_ttc',    // Montant TTC
        'payment_status', // Statut du paiement : en_attente, paye, annule
    ];
}
