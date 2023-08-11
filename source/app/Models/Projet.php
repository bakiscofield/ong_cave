<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Projet extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom_categorie', 'id_categorie',
        'titre_projet',
        'objectif_global',
        'objectif_specifiques',
        'financement',
        'budjet',
        'realisateur',
        'zone',
        'duree',
        'photos'

    ];
    public function categorie_projet():BelongsTo
    {

        return $this->belongsTo(Categorie_projet::class);
    }

    public function user():BelongsTo
    {

        return $this->belongsTo(User::class);
    }
}
