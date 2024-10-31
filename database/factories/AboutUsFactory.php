<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutUs>
 */
class AboutUsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => 'Sobre nós',
            'subtitle' => 'Quintal Brinquedos',
            'description' => 'Durante a pandemia, percebemos que alguns fornecedores não conseguiam garantir qualidade e segurança nos produtos. Foi então que decidimos tirar do papel um projeto antigo: transformar seu quintal. A Quintal Brinquedos Play atua há 25 anos prestando serviços de manutenção e reforma escolar para escolas da Rede Municipal, Estadual e Prefeituras de São Paulo, com experiência em implantação e manutenção de parques. Seja em escolas, sítios, condomínios ou quintais, contamos com profissionais especializados para garantir excelência em cada projeto.
                              Nossos brinquedos são feitos em Eucalipto Citriodora e Pinus tratados, com durabilidade de 15 anos e pronta entrega. Criamos projetos exclusivos, focados em proporcionar uma experiência única e lúdica para crianças, estimulando a criatividade através do lazer. Somos uma empresa familiar, com o compromisso de melhoria contínua para oferecer experiências consistentes e concretizar sonhos. Vamos transformar seu quintal em um playground divertido? Seja bem-vindo!',
            'image' => $this->faker->imageUrl(),
        ];
    }
}
