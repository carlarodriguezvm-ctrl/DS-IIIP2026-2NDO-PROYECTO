<?php

namespace Database\Factories;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente_id' => \App\Models\Cliente::factory(),
            'empleado_id' => \App\Models\Empleado::factory(),
            'numero_pedido' => $this->faker->unique()->numerify('P-####'),
            'fecha_pedido' => $this->faker->date(),
            'fecha_entrega' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 10, 1000),
            'estado' => $this->faker->randomElement(['pendiente', 'enviado', 'entregado']),
            'observaciones' => $this->faker->sentence(),
        ];
    }
}
