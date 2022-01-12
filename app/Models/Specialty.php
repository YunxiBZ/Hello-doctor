<?php

namespace App\Models;

use App\Models\Practitioner;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    /**
     * Get the practitioners for the specialty .
     */
    public function practitioners()
    {
        return $this->hasMany(Practitioner::class);
    }

    protected $fillable = ['name'];
}
