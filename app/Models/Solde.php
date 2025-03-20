<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solde extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant',
        'user_id',
    ];

    /**
     * Relation avec l'utilisateur (User).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
