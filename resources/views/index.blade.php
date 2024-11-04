<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quintal brinquedos</title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body>

        <header class="header">
            <div class="container">
                <nav class="nav">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#sobre">Sobre nós</a></li>
                        <li><a href="#produtos">Produtos</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav>
                <div class="logo-container">
                    <img class="logo" src="{{ asset('images/page/logo.png') }}" alt="Logo - Quintal brinquedos">
                </div>
            </div>
        </header>

        <section class="container home-section">
            <div class="home-content">
                <h2>CATÁLOGO | 2025</h2>
                <h1>Os melhores brinquedos,<br>Estão aqui!</h1>
                <p>Entregamos e Instalamos</p>
                <a href="#comprar" class="home-button">COMPRAR</a>
            </div>
            <div class="home-image">
                <img src="{{ asset('images/page/image.png') }}" alt="Imagem de brinquedo">
            </div>
        </section>



    {{-- <div class="container">
        <h1>Teste</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores iure, consequuntur repellendus dicta veniam laboriosam, voluptate dolore rem vitae inventore placeat maiores nam rerum. Incidunt dolorum vero ea non. Consequatur?</p>
    </div> --}}
    </body>
</html>
