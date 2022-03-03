<?php

namespace App\Models;

use App\Models\Incidents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipus_incidents extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Incidents that owns the Tipus_incidents
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function incidents(): hasMany
    {
        return $this->hasMany(Incidents::class, 'incidents_id');
    }
}
