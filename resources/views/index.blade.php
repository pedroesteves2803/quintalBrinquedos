<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $home->subtitle }} - {{ $home->description_line_one }}">
    <meta property="og:title" content="Quintal Brinquedos">
    <meta property="og:description" content="{{ $home->subtitle }} - {{ $home->description_line_one }}">
    <meta property="og:image" content="{{ Storage::disk('public')->url($home->image) }}">

    <title>Quintal Brinquedos</title>
    <link rel="icon" href="{{ asset('/images/logo/logo.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Scripts -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.7/dist/inputmask.min.js" defer></script>
    <script src="{{ asset('/js/doubleClick.js') }}" defer></script>
    <script src="{{ asset('/js/mask.js') }}" defer></script>
    <script src="{{ asset('/js/swiper.js') }}" defer></script>
{{--    @vite(['resources/js/app.js'])--}}
</head>
<body>
    <header class="header">
        <div class="container">

            <div class="items">
                <img class="logo" src="{{ asset('images/logo/logo.svg') }}" alt="Logo - Quintal Brinquedos">

                <nav class="navigation">
                    <ul class="menu">
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#catalog">Produtos</a></li>
                        <li><a href="#formulario">Contato</a></li>
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
                        <h1 class="home-year">{{ $home->title }}</h1>

                        <h2 class="home-main-title">{{ $home->subtitle }}</h2>
                        <h2 class="home-subtitle">{{ $home->description_line_one }}</h2>

                        <p class="home-description">{{ $home->description_line_two }}</p>

                        <a href="#formulario" class="home-button">Comprar</a>
                    </div>

                    <div class="home-image">
                        <img src="{{ Storage::disk('public')->url($home->image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <section class="statistic-counters">
                <div class="statistic-item">
                    <h1>{{ $counters->counter_one }}</h1>
                    <p>{{ $counters->counter_one_text }}</p>
                </div>
                <div class="statistic-item">
                    <h1>{{ $counters->counter_two }}</h1>
                    <p>{{ $counters->counter_two_text }}</p>
                </div>
                <div class="statistic-item">
                    <h1>{{ $counters->counter_three }}</h1>
                    <p>{{ $counters->counter_three_text }}</p>
                </div>
            </section>

            <section class="about-us" id="about">
                <div class="item-left">
                    <h1>{{ $aboutUs->title }}</h1>
                    <h2>{{ $aboutUs->subtitle }}</h2>
                    <p>{{ $aboutUs->description }}</p>
                </div>

                <div class="item-right">
                    <img src="{{ Storage::disk('public')->url($aboutUs->image) }}" alt="">
                </div>
            </section>

            <section class="catalog" id="catalog">
                <div class="catalog-header">
                    <div class="catalog-titles">
                        <h1>{{ $catalog->title }}</h1>
                        <h2>{{ $catalog->subtitle }}</h2>
                    </div>
                </div>

                <div class="swiper catalog-body">
                    <div class="swiper-wrapper">
                        @foreach($products as $product)
                            <div class="swiper-slide item">
                                <img src="{{ Storage::disk('public')->url($product->image) }}" alt="">
                                <h2>{{ $product->name  }}</h2>
                                <p>{{ $product->description }}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <section class="credibility">
                <div class="credibility-text">
                    <h2>{{ $credibilityStatements->title }}</h2>
                    <h3>{{ $credibilityStatements->subtitle }}</h3>

                    <p>{{ $credibilityStatements->description }}</p>
                </div>

                <div class="credibility-itens">
                    <div class="item">
                        <div class="item-img">
                            <img src="{{ asset('images/icons/icon-deadline.svg') }}" alt="">
                        </div>

                        <div class="item-text">
                            <h3>{{ $credibilityStatements->title_advantage_one }}</h3>
                            <p>{{ $credibilityStatements->subtitle_advantage_one }}</p>
                        </div>

                    </div>

                    <div class="item">

                        <div class="item-img">
                            <img src="{{ asset('images/icons/icon-innovators.svg') }}" alt="">
                        </div>

                        <div class="item-text">
                            <h3>{{ $credibilityStatements->title_advantage_two }}</h3>
                            <p>{{ $credibilityStatements->subtitle_advantage_two }}</p>
                        </div>

                    </div>

                    <div class="item">
                        <div class="item-img">
                            <img src="{{ asset('images/icons/icon-resistant.svg') }}" alt="">
                        </div>

                        <div class="item-text">
                            <h3>{{ $credibilityStatements->title_advantage_three }}</h3>
                            <p>{{ $credibilityStatements->subtitle_advantage_three }}</p>
                        </div>

                    </div>
                </div>
            </section>

            <section class="contact-section" id="formulario">
                <div class="contact-header">
                    <h2>{{ $budget->title }}</h2>
                    <h3>{{ $budget->subtitle }}</h3>
                </div>

                <div class="contact-form">
                    <form action="{{ route('form') }}" method="POST" id="form-contact">
                        @csrf
                        <div class="subject-selection">
                            <label class="text">Selecione o assunto desejado</label>
                            <div class="button-group">
                                <input type="radio" id="option1" name="subject" value="1" {{ old('subject') == '1' ? 'checked' : '' }} required>
                                <label for="option1" class="radio-button">Orçamento</label>

                                <input type="radio" id="option2" name="subject" value="2" {{ old('subject') == '2' ? 'checked' : '' }} required>
                                <label for="option2" class="radio-button">Informações</label>

                                <input type="radio" id="option3" name="subject"  value="3"  {{ old('subject') == '3' ? 'checked' : '' }}  required>
                                <label for="option3" class="radio-button">Comentário</label>
                            </div>
                        </div>

                        <div class="contact-details">
                            @if ($errors->any())
                                <div class="details-item">
                                    <div class="item error-message">
                                        <p>{{ $errors->first() }}</p>
                                    </div>
                                </div>
                            @endif

                            @if (session()->has('success'))
                                <div class="details-item">
                                    <div class="item success-message">
                                        <p>{!! session()->get('success') !!}</p>
                                    </div>
                                </div>
                            @endif

                            <div class="details-item">
                                <div class="item">
                                    <label for="first-name">Nome</label>
                                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" required>
                                </div>

                                <div class="item">
                                    <label for="last-name">Sobrenome</label>
                                    <input type="text" name="last_name" id="first_name" value="{{ old('last_name') }}" required>
                                </div>
                            </div>

                            <div class="details-item">
                                <div class="item">
                                    <label for="phone">Telefone</label>
                                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required>
                                </div>

                                <div class="item">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="details-item">
                                <div class="item">
                                    <label for="message">Mensagem</label>
                                    <textarea minlength="10" name="message" id="message" required>{{ old('message') }}</textarea>
                                </div>
                            </div>

                            <div class="details-btn">
                                <div class="item">
                                    <button id="submitBtn" type="submit">enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            @if(!$contacts->isEmpty())
                <section class="clients-section">
                    <div class="clients-header">
                        <h2>{{ $client->title }}</h2>
                        <h3>{{ $client->subtitle }}</h3>
                        <p>{{ $client->description }}<p>
                    </div>

                    <div class="comments">
                        @foreach($contacts as $contact)
                            <div class="item @if($loop->first) active @endif">
                                <h3>{{ $contact->name }}</h3>
                                <p>{{ $contact->message }}</p>
                            </div>
                        @endforeach

                    </div>
                </section>
            @endif
        </div>

    </main>


    <footer>
        <div class="container">
            <section class="footer-section">
                <img class="logo" src="{{ asset('images/logo/logo.svg') }}" alt="Logo - Quintal Brinquedos">

                <div class="address">
                    <h3>Endereço</h3>

                    <p class="local">{{ $config->address }}</p>

                    <p class="phone">{{ $config->phone }}</p>

                    <p class="mail">{{ $config->email }}</p>
                </div>

                <nav class="navigation">
                    <h3>menu</h3>
                    <ul class="menu">
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#catalog">Produtos</a></li>
                        <li><a href="#formulario">Contato</a></li>
                    </ul>
                </nav>

                <section class="social">
                    <a href="{{ $config->facebook }}" target="_blank"><img src="{{ asset('images/icons/icon-facebook.svg') }}" alt=""></a>
                    <a href="{{ $config->instagram }}" target="_blank"><img src="{{ asset('images/icons/icon-instagram.svg') }}" alt=""></a>
                </section>
            </section>
        </div>

        <div class="reserved">
            <div class="container">
                <p><span>© Quintal Brinquedos</span>, Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    @if ($errors->any() || session()->has('success'))
        <script>
            window.onload = function() {
                document.querySelector("#formulario").scrollIntoView({ behavior: "smooth", block: "start" });
            }
        </script>
    @endif
</body>
</html>
