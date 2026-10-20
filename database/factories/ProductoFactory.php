<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'categoria_id' => \App\Models\Categoria::factory(),
            'codigo' => $this->faker->unique()->numerify('PR-####'),
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'precio' => $this->faker->randomFloat(2, 1, 100),
            'stock' => $this->faker->numberBetween(0, 100),
            'estado' => $this->faker->randomElement(['activo', 'inactivo']),
        ];


        
    }
}
