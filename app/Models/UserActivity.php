<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'navigateur',
        'adresse_ip',
        'page_visitee',
        'action',
    ];

    /**
     * Relation avec l'utilisateur.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
