<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TSocialProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidature_id',
        'facebook',
        'linkedin',
        'twitter',
        'instagram',
        'github',
        'portfolio',
    ];

    public function candidature()
    {
        return $this->belongsTo(TCandidat::class, 'candidature_id');
    }
}
