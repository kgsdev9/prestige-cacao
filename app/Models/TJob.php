<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        't_libellespecialite',
        'description',
        'publish_at',
        'visiteur',
        'typeemploi_id',
        'tville_id',
        'tpays_id'
    ];

    public function  ville()  {

        return $this->belongsTo(TVille::class, 'tville_id');
       }

       public function  pays()  {
        return $this->belongsTo(Tpays::class, 'tpays_id');
       }

       public function specialite() {
        return $this->belongsTo(TLibelleSpecialite::class, 't_libellespecialite');
    }

}
