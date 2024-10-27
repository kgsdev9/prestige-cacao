<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCandidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'photo',
        'codeprofile',
        'email',
        'telephone',
        'whattssap',
        'specialite_id',
        'ville_id',
        'pays_id',
        'description',
        'user_id',
        'visiteur',
        'is_active'

    ];


    public function profilesocial() {
        return $this->belongsTo(TSocialProfile::class);
       }

    public function specialite() {
        return $this->belongsTo(TLibelleSpecialite::class, 'specialite_id');
       }


       public function  ville()  {
        return $this->belongsTo(TVille::class);
       }

       public function  pays()  {
        return $this->belongsTo(Tpays::class);
       }

    public function experiences() {
        return $this->hasMany(TExperience::class);
    }

    public function formations() {

        return $this->hasMany(TFormation::class, 'candidature_id');
    }

    public function projets() {

        return $this->hasMany(TProjet::class, 'candidature_id');
    }

    public function competences() {

        return $this->hasMany(TCompetenceCandidat::class, 'candidature_id');
    }



}
