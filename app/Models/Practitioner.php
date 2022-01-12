<?php

namespace App\Models;

use App\Models\Specialty;
use Illuminate\Database\Eloquent\Model;

class Practitioner extends Model
{
    /**
     * Get the specilty that owns the practitoner.
     */
    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }
}
