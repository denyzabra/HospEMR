<?php

namespace Database\Factories;

use App\Models\DoctorNurse;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorNurseFactory extends Factory
{
    protected $model = DoctorNurse::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
