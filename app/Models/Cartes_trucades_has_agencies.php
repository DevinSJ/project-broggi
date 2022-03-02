<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cartes_trucades_has_agencies extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = ['cartes_trucades_id', 'agencies_id', 'estats_agencies_id'];

    /**
     * Get the Cartes_trucades that owns the Cartes_trucades_has_agencies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carta_trucada(): BelongsTo
    {
        return $this->belongsTo(Cartes_trucades::class, 'cartes_trucades_id');
    }

    /**
     * Get the Agencies that owns the Cartes_trucades_has_agencies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agencia(): BelongsTo
    {
        return $this->belongsTo(Agencies::class, 'agencies_id');
    }

    /**
     * Get the Estats_agencies that owns the Cartes_trucades_has_agencies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estat_agencia(): BelongsTo
    {
        return $this->belongsTo(Estats_agencies::class, 'estats_agencies_id');
    }
}
