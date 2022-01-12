<?php

namespace App\Models;

use App\Models\User;
use App\Models\Specialty;
use App\Models\Appointment;
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

    /**
     * Get the appointments for the practitioner .
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    /**
     * Get the user associated with the practitioner.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
