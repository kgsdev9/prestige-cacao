<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCompetenceCandidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'libellecompetence',
        'candidature_id',
    ];
}
