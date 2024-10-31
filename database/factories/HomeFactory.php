<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'CATÁLOGO | 2025',
            'subtitle' => 'Os melhores brinquedos,',
            'description_line_one' => 'Estão aqui',
            'description_line_two' => 'Entregamos e instalamos',
            'image' => fake()->image(),
        ];
    }
}
