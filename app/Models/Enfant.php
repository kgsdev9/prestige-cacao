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
        'etablissement',
        'role_id',
        'parent_id',
        'classe_id',
    ];
}
