<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DoctorNurse;
use Database\Factories\DoctorNurseFactory;

class DoctorsNursesTableSeeder extends Seeder
{
    public function run()
    {
        DoctorNurseFactory::new()->count(10)->create();
    }
}
