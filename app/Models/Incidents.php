<?php

namespace App\Models;

use App\Models\Cartes_trucades;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Incidents extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Cartes_trucades that owns the Incidents
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function cartes_trucades(): hasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'incidents_id');
    }

    /**
     * Get the Tipus_incidents that owns the Cartes_trucades
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo_incident(): BelongsTo
    {
        return $this->belongsTo(Tipus_incidents::class, 'classes_incidents_id');
    }
}
