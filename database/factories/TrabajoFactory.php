<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajo>
 */
class TrabajoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'equipo_id' => 1,
            'fecha' => fake()->date(),
            'horaInicio' => now(),
            'horaFin' => now(),
            'observacion' => fake()->sentence()
        ];
    }
}
