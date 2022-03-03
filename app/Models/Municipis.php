<?php

namespace App\Models;

use App\Models\Agencies;
use App\Models\Comarques;
use App\Models\Cartes_trucades;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Municipis extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Comarques that owns the Municipis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comarca(): BelongsTo
    {
        return $this->belongsTo(Comarques::class, 'comarques_id');
    }

    /**
     * Get all of the Cartes_trucades for the Municipis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartes_trucades(): HasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'municipis_id');
    }

    /**
     * Get all of the Cartes_trucades (trucada) for the Municipis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartes_trucades_trucada(): HasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'municipis_id_trucada');
    }

    /**
     * The Agencies that belong to the Municipis
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function agencies(): hasMany
    {
        return $this->hasMany(Agencies::class, 'municipis_id');
    }
}
