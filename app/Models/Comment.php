<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'description',
        'note'
    ];

    // Définir la relation avec le modèle Course
    public function course()
    {
        return $this->belongsTo(Cours::class);
    }
}
