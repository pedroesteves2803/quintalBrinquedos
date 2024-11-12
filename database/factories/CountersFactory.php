<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountersFactory extends Factory
{
    public function definition(): array
    {
        return [
            'counter_one' => '1mil',
            'counter_one_text' => 'Clientes atendidos',
            'counter_two' => '5mil',
            'counter_two_text' => 'Vendas realizadas',
            'counter_three' => '20uni',
            'counter_three_text' => 'Brinquedos cadastrados',
        ];
    }
}
