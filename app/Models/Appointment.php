<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Practitioner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    /**
     * Get the practitioner that owns the appointment.
     */
    public function practitioner()
    {
        return $this->belongsTo(Practitioner::class);
    }

    /**
     * Get the patient that owns the appointment.
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
