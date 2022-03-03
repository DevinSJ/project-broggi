<?php

namespace App\Models;

use App\Models\Cartes_trucades;
use App\Models\Estats_expedients;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Expedients extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Estats_expedients that owns the Expedients
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estat_expedient(): BelongsTo
    {
        return $this->belongsTo(Estats_expedients::class, 'estats_expedients_id');
    }

    /**
     * Get the Cartes_trucades that owns the Estats_expedients
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function cartes_trucades(): hasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'expedients_id');
    }
}
