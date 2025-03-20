<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pret extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'montant',
        'date_remboursement',
        'taux_interet',
        'total_rembourser',
        'statut',
        'description',
    ];

    /**
     * Relation avec l'utilisateur (User).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
