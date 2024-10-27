<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class TProjet extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'lien_projet',
        'candidature_id',
        'is_published',
    ];

    public function candidature()
    {
        return $this->belongsTo(TCandidat::class, 'candidature_id');
    }


    public static  function generateUniqueSlug($title)
    {
        // Créez un slug à partir du titre
        $slug = Str::slug($title);

        // Vérifiez si le slug existe déjà dans la table TProjet
        $existingSlugCount = self::where('slug', $slug)->count();

        // Si le slug existe, ajoutez un suffixe numérique pour le rendre unique
        if ($existingSlugCount > 0) {
            $slug = "{$slug}-" . ($existingSlugCount + 1);
        }

        return $slug;
    }
}
