<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable  implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'codesecret',
        'qrcode',
        'email',
        'email_verified_at',
        'password',
        'role_id',
        'confirmated_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'confirmated_at' => 'boolean',
    ];

    // Relation avec le rôle
    // public function role()
    // {
    //     return $this->belongsTo(Role::class);
    // }
}
