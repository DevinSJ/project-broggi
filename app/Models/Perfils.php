<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Perfils extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the user Usuari that owns the Perfils
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function usuaris(): hasMany
    {
        return $this->hasMany(Usuaris::class, 'perfils_id');
    }
}
