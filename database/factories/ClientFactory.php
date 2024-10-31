<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'O que nossos clientes',
            'subtitle' => 'estão comentando?',
            'description' => 'Na Quintal Brinquedos, a satisfação dos nossos clientes é nossa maior prioridade. Cada projeto é pensado para oferecer experiências únicas, seguras e divertidas. Confira o que algumas pessoas têm a dizer sobre as transformações que realizamos!'
        ];
    }
}
