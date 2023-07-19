<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'marca_id' => 1,
            'tipo_id' => 1,
            'modelo' => fake()->name(),
            'serial' => fake()->name(),
            'observacion' => fake()->text()
        ];
    }
}
