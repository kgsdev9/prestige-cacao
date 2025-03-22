<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

  
    public static function generateUniqueCodeSecret()
    {
        // On commence avec la génération d'un code de 4 chiffres
        do {
            // Générer un code secret aléatoire de 4 chiffres
            $codeSecret = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT); // Exemple: 0001, 0999, etc.
        } while (self::where('codesecret', $codeSecret)->exists()); // Vérifie l'unicité du code

        return $codeSecret; // Retourne le code secret unique
    }


    /**
     * Génère un QR code unique basé sur le code secret.
     *
     * @param  string  $codeSecret
     * @return string
     */
    public static function generateUniqueQRCode($codeSecret)
    {
        // Générer un QR code à partir du codesecret
        $qrcode = QrCode::format('png')->size(200)->generate($codeSecret); // QR code au format PNG

        // Vérifie si ce QR code existe déjà dans la base de données (par son codesecret)
        do {
            $qrcode = QrCode::format('png')->size(200)->generate($codeSecret); // Générer un nouveau QR code
        } while (self::where('qrcode', $qrcode)->exists()); // Vérifie si ce QR code est déjà présent

        return $qrcode;
    }

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
