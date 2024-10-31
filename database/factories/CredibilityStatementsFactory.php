<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CredibilityStatements>
 */
class CredibilityStatementsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Por que Confiar?',
            'subtitle' => 'Quintal Brinquedos',
            'description' => ' Trabalhamos a anos com todo tipo de prestação de serviços como: construção, reforma, manutenção, adequação de espaços, pisos e casinhas em madeira. Conhecemos as deficiências na prática e no dia a dia de serviços de prestação de serviços, que requer dedicação, confiabilidade, pontualidade, empatia, honestidade e transparência. Bem como fornecemos toda documentação necessária para órgãos públicos. Quem idealiza um projeto e deseja receber durabilidade, beleza, conforto e o mais importante a segurança, escolhe a Quintal Brinquedos.',
            'title_advantage_one' => 'Entregas no prazo',
            'subtitle_advantage_one' => 'Entrega pontual, sem surpresas.',
            'title_advantage_two' => 'Brinquedos Inovadores',
            'subtitle_advantage_two' => 'Criatividade e diversão em cada detalhe.',
            'title_advantage_three' => 'Brinquedos Resistentes',
            'subtitle_advantage_three' => 'Durabilidade que garante diversão por anos.'
        ];
    }
}
