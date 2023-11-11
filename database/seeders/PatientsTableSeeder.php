<?php

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientsTableSeeder extends Seeder
{
    public function run()
    {
        Patient::factory()->count(10000)->create();
    }
}