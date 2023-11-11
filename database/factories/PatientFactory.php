<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Patient;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        /*
        return [
            'name' => $this->faker->name,
            'email' => function () {
                $email = $this->faker->unique()->safeEmail;
                while (Patient::where('email', $email)->exists()) {
                    $email = $this->faker->unique()->safeEmail;
                }
                return $email;
            },
            'phone_number' => $this->faker->phoneNumber,
        ];
        */
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}
