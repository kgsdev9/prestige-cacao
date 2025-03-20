<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'classe_id',
        'parent_id',
        'etablissement_id',
        'nom_etablissement',
    ];

    // Relation avec la classe
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    // Relation avec le parent
    public function parent()
    {
        return $this->belongsTo(Parents::class); // Assure-toi que le modèle Parent existe bien sous ce nom
    }

    // Relation avec l'établissement
    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }
}
