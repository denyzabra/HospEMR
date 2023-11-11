<?php

use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\DoctorNurse;

class AppointmentsTableSeeder extends Seeder
{
    public function run()
    {
        Patient::all()->each(function ($patient) {
            $appointments = Appointment::factory()->count(2)->make([
                'patient_id' => $patient->id,
                'doctor_nurse_id' => DoctorNurse::inRandomOrder()->first()->id,
            ]);

            $patient->appointments()->saveMany($appointments);
        });
    }
}