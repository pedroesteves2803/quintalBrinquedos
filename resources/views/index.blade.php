<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quintal Brinquedos</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])
</head>
<body>
    <header class="header">``
        <div class="container">

            <div class="items">
                <img class="logo" src="{{ asset('images/logo/logo.svg') }}" alt="Logo - Quintal Brinquedos">

                <nav class="navigation">
                    <ul class="menu">
                        <li><a href="/">Sobre</a></li>
                        <li><a href="/">Produtos</a></li>
                        <li><a href="/">Lojas</a></li>
                        <li><a href="/">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="home-wrapper">
            <div class="container">
                <div class="home">
                    <div class="home-content">
                        <h1 class="home-year">CATÁLOGO | 2025</h1>

                        <h2 class="home-main-title">Os melhores brinquedos,</h2>
                        <h2 class="home-subtitle">Estão aqui!</h2>

                        <p class="home-description">Entregamos e Instalamos</p>

                        <a href="#contato" class="home-button">Comprar</a>
                    </div>

                    <div class="home-image">
                        <img src="{{ asset('images/img3.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <section class="statistic-counters">
                <div class="statistic-item">
                    <h1>1mil</h1>
                    <p>Clientes atendidos</p>
                </div>
                <div class="statistic-item">
                    <h1>5mil</h1>
                    <p>Clientes atendidos</p>
                </div>
                <div class="statistic-item">
                    <h1>20uni</h1>
                    <p>Clientes atendidos</p>
                </div>
            </section>

            <section class="about-us">
                <div class="item-left">
                    <h1>Sobre Nós</h1>
                    <h2>Quintal Brinquedos</h2>
                    <p>Durante a pandemia, percebemos que alguns fornecedores não conseguiam garantir qualidade e segurança nos produtos. Foi então que decidimos tirar do papel um projeto antigo: transformar seu quintal. A Quintal Brinquedos Play atua há 25 anos prestando serviços de manutenção e reforma escolar para escolas da Rede Municipal, Estadual e Prefeituras de São Paulo, com experiência em implantação e manutenção de parques. Seja em escolas, sítios, condomínios ou quintais, contamos com profissionais especializados para garantir excelência em cada projeto.

                    Nossos brinquedos são feitos em Eucalipto Citriodora e Pinus tratados, com durabilidade de 15 anos e pronta entrega. Criamos projetos exclusivos, focados em proporcionar uma experiência única e lúdica para crianças, estimulando a criatividade através do lazer. Somos uma empresa familiar, com o compromisso de melhoria contínua para oferecer experiências consistentes e concretizar sonhos. Vamos transformar seu quintal em um playground divertido? Seja bem-vindo!
                    </p>
                </div>

                <div class="item-right">
                    <img src="{{ asset('images/img1.png') }}" alt="">
                </div>
            </section>

            <section class="catalog">
                <div class="catalog-header">
                    <div class="catalog-titles">
                        <h1>Catálogo</h1>
                        <h2>Nossos produtos</h2>
                    </div>

                    <div class="catalog-links">
                        <a href="" class="active">Brinquedos</a>
                        <a href="">Madeiras</a>
                    </div>
                </div>

                <div class="swiper catalog-body">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide item">
                            <img src="{{ asset('images/img4.png') }}" alt="">
                            <h2>Gangorra</h2>
                            <p>Gangorra com dois assentos, com pneu para amortecimento e a madeira com acabamento em Stain Triplo Filtro Solar.</p>
                        </div>

                        <div class="swiper-slide item">
                            <img src="{{ asset('images/img4.png') }}" alt="">
                            <h2>Gangorra</h2>
                            <p>Gangorra com dois assentos, com pneu para amortecimento e a madeira com acabamento em Stain Triplo Filtro Solar.</p>
                        </div>

                        <div class="swiper-slide item">
                            <img src="{{ asset('images/img4.png') }}" alt="">
                            <h2>Gangorra</h2>
                            <p>Gangorra com dois assentos, com pneu para amortecimento e a madeira com acabamento em Stain Triplo Filtro Solar.</p>
                        </div>

                        <div class="swiper-slide item">
                            <img src="{{ asset('images/img4.png') }}" alt="">
                            <h2>Gangorra</h2>
                            <p>Gangorra com dois assentos, com pneu para amortecimento e a madeira com acabamento em Stain Triplo Filtro Solar.</p>
                        </div>

                        <div class="swiper-slide item">
                            <img src="{{ asset('images/img4.png') }}" alt="">
                            <h2>Gangorra</h2>
                            <p>Gangorra com dois assentos, com pneu para amortecimento e a madeira com acabamento em Stain Triplo Filtro Solar.</p>
                        </div>

                        <div class="swiper-slide item">
                            <img src="{{ asset('images/img4.png') }}" alt="">
                            <h2>Gangorra</h2>
                            <p>Gangorra com dois assentos, com pneu para amortecimento e a madeira com acabamento em Stain Triplo Filtro Solar.</p>
                        </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <section class="credibility">
                <div class="credibility-text">
                    <h2>Por que Confiar?</h2>
                    <h3>Quintal Brinquedos</h3>

                    <p>Trabalhamos a anos com todo tipo de prestação de serviços como: construção, reforma, manutenção, adequação de espaços, pisos e casinhas em madeira. Conhecemos as deficiências na prática e no dia a dia de serviços de prestação de serviços, que requer dedicação, confiabilidade, pontualidade, empatia, honestidade e transparência. Bem como fornecemos toda documentação necessária para órgãos públicos. Quem idealiza um projeto e deseja receber durabilidade, beleza, conforto e o mais importante a segurança, escolhe a Quintal Brinquedos.</p>
                </div>

                <div class="credibility-itens">
                    <div class="item">
                        <div class="item-img">
                            <img src="{{ asset('images/icons/icon-deadline.svg') }}" alt="">
                        </div>

                        <div class="item-text">
                            <h3>Entregas no prazo</h3>
                            <p>Entrega pontual, sem surpresas.</p>
                        </div>

                    </div>

                    <div class="item">

                        <div class="item-img">
                            <img src="{{ asset('images/icons/icon-innovators.svg') }}" alt="">
                        </div>

                        <div class="item-text">
                            <h3>Brinquedos Inovadores</h3>
                            <p>Criatividade e diversão em cada detalhe.</p>
                        </div>

                    </div>

                    <div class="item">
                        <div class="item-img">
                            <img src="{{ asset('images/icons/icon-resistant.svg') }}" alt="">
                        </div>

                        <div class="item-text">
                            <h3>Brinquedos Resistentes</h3>
                            <p>Durabilidade que garante diversão por anos.</p>
                        </div>

                    </div>
                </div>
            </section>

            <section class="contact-section">
                <div class="contact-header">
                    <h2>Orçamento</h2>
                    <h3>Encaminhe um e-mail</h3>
                </div>

                <div class="contact-form">
                    <form action="#">
                        <div class="subject-selection">
                            <label class="text">Selecione o assunto desejado</label>
                            <div class="button-group">
                                <input type="radio" id="option1" name="subject" value="option1">
                                <label for="option1" class="radio-button">Orçamento</label>

                                <input type="radio" id="option2" name="subject" value="option2">
                                <label for="option2" class="radio-button">Informações</label>

                                <input type="radio" id="option3" name="subject" value="option3">
                                <label for="option3" class="radio-button">Outros</label>
                            </div>
                        </div>

                        <div class="contact-details">
                            {{--
                            <div class="details-item">
                                <p>Erro no email</p>
                            </div> --}}

                            <div class="details-item">
                                <div class="item">
                                    <label for="first-name">Nome</label>
                                    <input type="text" name="first-name" id="first-name">
                                </div>

                                <div class="item">
                                    <label for="last-name">Sobrenome</label>
                                    <input type="text" name="last-name" id="last-name">
                                </div>
                            </div>

                            <div class="details-item">
                                <div class="item">
                                    <label for="phone">Telefone</label>
                                    <input type="text" name="phone" id="phone">
                                </div>

                                <div class="item">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email">
                                </div>

                            </div>

                            <div class="details-item">
                                <div class="item">
                                    <label for="message">Mensagem</label>
                                    <textarea name="message" id="message"></textarea>
                                </div>
                            </div>

                            <div class="details-btn">
                                <div class="item">
                                    <button type="submit">enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>

        <div class="container">
            <section class="clients-section">
                <div class="clients-header">
                    <h2>O que nossos clientes</h2>
                    <h3>estão comentando?</h3>
                    <p>Na Quintal Brinquedos, a satisfação dos nossos clientes é nossa maior prioridade. Cada projeto é pensado para oferecer experiências únicas, seguras e divertidas. Confira o que algumas pessoas têm a dizer sobre as transformações que realizamos!<p>
                </div>

                <div class="comments">
                    <div class="item active">
                        <h3>Renato</h3>
                        <p>Um lugar com bom atendimento e qualidade em seus produtos, pontualidade na entrega e instalação! Recomendo e indico a Quintal Brinquedos!</p>
                    </div>

                    <div class="item">
                        <h3>Renato</h3>
                        <p>Um lugar com bom atendimento e qualidade em seus produtos, pontualidade na entrega e instalação! Recomendo e indico a Quintal Brinquedos!</p>
                    </div>

                    <div class="item">
                        <h3>Renato</h3>
                        <p>Um lugar com bom atendimento e qualidade em seus produtos, pontualidade na entrega e instalação! Recomendo e indico a Quintal Brinquedos!</p>
                    </div>
                </div>
            </section>
        </div>

    </main>


    <footer>
        <div class="container">
            <section class="footer-section">
                <img class="logo" src="{{ asset('images/logo/logo.svg') }}" alt="Logo - Quintal Brinquedos">

                <div class="address">
                    <h3>Endereço</h3>

                    <p class="local">R CESARE POLLINI - JARDIM LOURDES - SP</p>

                    <p class="phone">11 4119-0077</p>

                    <p class="mail">expediente@nalternativa.com.br</p>
                </div>

                <nav class="navigation">
                    <h3>menu</h3>
                    <ul class="menu">
                        <li><a href="/">Sobre</a></li>
                        <li><a href="/">Produtos</a></li>
                        <li><a href="/">Contato</a></li>
                    </ul>
                </nav>

                <section class="social">
                    <a href=""><img src="{{ asset('images/icons/icon-facebook.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('images/icons/icon-instagram.svg') }}" alt=""></a>
                </section>
            </section>
        </div>

        <div class="reserved">
            <div class="container">
                <p><span>© Quintal Brinquedos</span>, Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

</body>
</html>
