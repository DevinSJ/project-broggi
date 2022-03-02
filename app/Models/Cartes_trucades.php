<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Cartes_trucades extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Usuaris that owns the Cartes_trucades
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuari(): BelongsTo
    {
        return $this->belongsTo(Usuaris::class, 'usuaris_id');
    }

    /**
     * The Cartes_trucades_has_agencies that belong to the Cartes_trucades
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function cartes_trucades_has_agencies(): hasMany
    {
        return $this->hasMany(Cartes_trucades_has_agencies::class, 'cartes_trucades_id');
    }
}
