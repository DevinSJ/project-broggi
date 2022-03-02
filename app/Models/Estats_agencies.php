<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Estats_agencies extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The Cartes_trucades_has_agencies that belong to the Estats_agencies
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function cartes_trucades_has_agencies(): hasMany
    {
        return $this->hasMany(Cartes_trucades_has_agencies::class, 'estats_agencies_id');
    }
}
