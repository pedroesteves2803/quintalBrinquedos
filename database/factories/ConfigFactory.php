<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Config>
 */
class ConfigFactory extends Factory
{
    public function definition(): array
    {
        return [
            'address' => 'R CESARE POLLINI - JARDIM LOURDES - SP',
            'phone' => '11 4119-0077',
            'email' => 'expediente@nalternativa.com.br',
        ];
    }
}
