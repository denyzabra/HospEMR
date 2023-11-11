<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;

    public function definition()
    {
        return [
            'clinical_notes' => $this->faker->paragraph,
            'appointment_date_time' => $this->faker->dateTimeBetween('now', '+30 days'),
        ];
    }
}
