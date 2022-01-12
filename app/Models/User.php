<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Practitioner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    /**
     * Get the patient associated with the user.
     */
    public function patient()
    {
        return $this->hasOne(Patient::class);
    }
    /**
     * Get the practitioner associated with the user.
     */
    public function practitioner()
    {
        return $this->hasOne(Practitioner::class);
    }
}
