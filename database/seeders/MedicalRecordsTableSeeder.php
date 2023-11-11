<?php

use Illuminate\Database\Seeder;
use App\Models\MedicalRecord;
use App\Models\Patient;
use App\Models\DoctorNurse;

class MedicalRecordsTableSeeder extends Seeder
{
    public function run()
    {
        Patient::all()->each(function ($patient) {
            $medicalRecords = MedicalRecord::factory()->count(5)->make([
                'patient_id' => $patient->id,
                'doctor_nurse_id' => DoctorNurse::inRandomOrder()->first()->id,
            ]);

            $patient->medicalRecords()->saveMany($medicalRecords);
        });
    }
}
