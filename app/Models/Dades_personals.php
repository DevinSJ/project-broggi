<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Dades_personals extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Usuari that owns the Dades_personals
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function cartes_trucades(): hasMany
    {
        return $this->hasMany(Cartes_trucades::class, 'dades_personals_id');
    }
}
