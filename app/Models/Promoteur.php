<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promoteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'commune_id',
    ];

    /**
     * Relation avec la table Commune.
     */
    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
}
