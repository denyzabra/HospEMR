<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorNurse extends Model
{
    use HasFactory;

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
        
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
        
    }
}

