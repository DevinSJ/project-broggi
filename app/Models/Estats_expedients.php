<?php

namespace App\Models;

use App\Models\Expedients;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estats_expedients extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Expedients that owns the Estats_expedients
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function expedients(): hasMany
    {
        return $this->hasMany(Expedients::class, 'estats_expedients_id');
    }
}
