<?php

namespace App\Models;

use App\Models\Provincies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comarques extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Provincies that owns the Comarques
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provincia(): BelongsTo
    {
        return $this->belongsTo(Provincies::class, 'provincies_id');
    }

    /**
     * Get all of the Municipis for the Provincies
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function municipis(): hasMany
    {
        return $this->hasMany(Municipis::class, 'comarques_id');
    }
}
