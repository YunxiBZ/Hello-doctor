<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    /**
     * Get the appointments for the patient .
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    /**
     * Get the user associated with the patient.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
