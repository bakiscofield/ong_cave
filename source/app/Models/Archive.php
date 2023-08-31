<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Archive extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre_archives', 'contenue', 'id_type_archive', 'id_user', 'id_departement'
    ];
    protected $primaryKey = 'id';

    public function type_archive(): BelongsTo
    {

        return $this->belongsTo(TypeArchive::class, 'id_type_archive');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // public function departement(): BelongsTo
    // {
    //     return $this->belongsTo(Departement::class, 'id_departement');
    // }

    public function fichier(): HasMany
    {
        return $this->hasmany(Fichier::class);
    }
}
