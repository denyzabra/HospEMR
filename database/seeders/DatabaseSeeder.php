<?php

use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\MedicalRecord;
use App\Models\Appointment;
use App\Models\DoctorNurse;
use Database\Seeders\DoctorsNursesTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the DoctorsNursesTableSeeder to populate the doctor_nurse table
        $this->call(DoctorsNursesTableSeeder::class);

        // Populate patients
        Patient::factory()->count(10000)->create();

        // Get a list of all of the doctor_nurse IDs
        $doctorNurseIds = DoctorNurse::all()->pluck('id');

        // Populate medical records and appointments
        Patient::all()->each(function ($patient) use ($doctorNurseIds) {
            // Create 5 medical records for each patient
            MedicalRecord::factory()->count(5)->create([
                'patient_id' => $patient->id,
                'doctor_nurse_id' => $doctorNurseIds->randomElement(),
            ]);

            // Create 2 appointments in the future for each patient
            Appointment::factory()->count(2)->create([
                'patient_id' => $patient->id,
                'doctor_nurse_id' => $doctorNurseIds->randomElement(),
            ]);
        });
    }
}

