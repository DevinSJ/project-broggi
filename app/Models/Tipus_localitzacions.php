<?php

namespace App\Models;

use App\Models\Cartes_trucades;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Tipus_localitzacions extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Cartes_trucades that owns the Tipus_localitzacions
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function cartes_trucades(): hasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'tipus_localitzacions_id');
    }
}
