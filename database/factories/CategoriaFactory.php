<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


public function definition(): array
{
    return [
        'nombre' => 'Cat' . $this->faker->unique()->numerify('####'),
        'descripcion' => $this->faker->sentence(6),
        'estado' => $this->faker->randomElement(['activo', 'inactivo']),
    ];
}

}

