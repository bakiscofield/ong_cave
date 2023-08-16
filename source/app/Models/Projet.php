<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Carbon;

class Projet extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom_categorie', 'id_categorie','id_user',
        'titre_projet',
        'objectif_global',
        'objectif_specifiques',
        'financement',
        'budjet',
        'zone',
        'date_debut',
        'date_fin',
        'fichier_projet'

    ];
    protected $casts=["date_debut"=>"datetime",
    "date_fin"=>"datetime"
];
    public function categorie_projet():BelongsTo
    {

        return $this->belongsTo(Categorie_projet::class);
    }

    public function user():BelongsTo
    {

        return $this->belongsTo(User::class);
    }

    public function realisateur():HasMany
    {
    return $this->hasmany(Realisateur::class);
    }


    public function find_duration()
    {
       $debut= Carbon::parse($this->date_debut);
       $fin= Carbon::parse($this->date_fin);
       $duration= $debut->diffInDays($this->date_fin) ;
        return($duration);
    }
}
