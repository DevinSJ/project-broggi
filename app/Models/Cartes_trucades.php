<?php

namespace App\Models;

use App\Models\Usuaris;
use App\Models\Incidents;
use App\Models\Municipis;
use App\Models\Expedients;
use App\Models\Provincies;
use App\Models\Dades_personals;
use App\Models\Tipus_localitzacions;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cartes_trucades_has_agencies;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cartes_trucades extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The Cartes_trucades_has_agencies that belong to the Cartes_trucades
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function cartes_trucades_has_agencies(): hasMany
    {
        return $this->hasMany(Cartes_trucades_has_agencies::class, 'cartes_trucades_id');
    }

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
     * Get the Tipus_localitzacions associated with the Cartes_trucades
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function tipo_localitzacio(): belongsTo
    {
        return $this->belongsTo(Tipus_localitzacions::class, "tipus_localitzacions_id");
    }

    /**
     * Get the Expedient associated with the Cartes_trucades
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function expedient(): belongsTo
    {
        return $this->belongsTo(Expedients::class, "expedients_id");
    }

    /**
     * Get the Dades_personals associated with the Cartes_trucades
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function dada_personal(): belongsTo
    {
        return $this->belongsTo(Dades_personals::class, "dades_personals_id");
    }

    /**
     * Get the Provincies associated with the Cartes_trucades
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function provincia(): belongsTo
    {
        return $this->belongsTo(Provincies::class, "provincies_id");
    }

    /**
     * Get the Municipis that owns the Cartes_trucades
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipi(): BelongsTo
    {
        return $this->belongsTo(Municipis::class, 'municipis_id');
    }

    /**
     * Get the Municipis (trucada) that owns the Cartes_trucades
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipi_trucada(): BelongsTo
    {
        return $this->belongsTo(Municipis::class, 'municipis_id_trucada');
    }

    /**
     * Get the Incidents that owns the Cartes_trucades
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function incident(): BelongsTo
    {
        return $this->belongsTo(Incidents::class, 'incidents_id');
    }
}
