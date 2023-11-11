<?php

namespace Database\Factories;

use App\Models\MedicalRecord;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicalRecordFactory extends Factory
{
    protected $model = MedicalRecord::class;

    public function definition()
    {
        return [
            'symptoms' => $this->faker->text,
            'lab_tests' => $this->faker->sentence,
            'medical_condition_diagnosed' => $this->faker->sentence,
            'treatment_given' => $this->faker->paragraph,
            'outcome' => $this->faker->randomElement(['Admitted', 'Home']),
        ];
    }
}
