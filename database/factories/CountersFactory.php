<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Counters>
 */
class CountersFactory extends Factory
{
    public function definition(): array
    {
        return [
            'counter_one' => 1000,
            'counter_one_text' => 'Clientes atendidos',
            'counter_two' => 5000,
            'counter_two_text' => 'Vendas realizadas',
            'counter_three' => 20,
            'counter_three_text' => 'Brinquedos cadastrados',
        ];
    }
}
