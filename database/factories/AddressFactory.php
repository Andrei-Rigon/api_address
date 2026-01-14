<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cep' => fake()->name(),
            'logradouro' => fake()->unique()->safeEmail(),
            'numero' => fake()->name(),
            'complemento' => fake()->name(),
            'bairro' => fake()->name(),
            'cidade' => fake()->name(),
            'uf' => fake()->name(),
            'referencia' => fake()->name(),
        ];
    }
}
