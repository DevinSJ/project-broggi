<?php

namespace App\Models;

use App\Models\Usuaris;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perfils extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Usuari that owns the Perfils
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function usuaris(): hasMany
    {
        return $this->hasMany(Usuaris::class, 'perfils_id');
    }
}
