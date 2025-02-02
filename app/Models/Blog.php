<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'publish_at',
        'visiteur'
    ];

    // Si vous souhaitez formater la date de publication
    protected $dates = [
        'publish_at',
    ];
}
