<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'matiere_id', 'description', 'url', 'enseignant_id', 'document'];


    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
