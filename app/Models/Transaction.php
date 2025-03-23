<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'codetransaction',
        'montant',
        'user_id',
        'modereglement_id',
        'qr_code',
        'statut',
        'ip_address',
        'user_agent',
        'device_name',
        'session_id',
        'geo_lat',
        'geo_lon',
    ];

    /**
     * Relation avec l'utilisateur (User).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation avec le mode de règlement (ModeReglement).
     */
    public function modereglement()
    {
        return $this->belongsTo(ModeReglement::class, 'modereglement_id');
    }
}
