<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedievalKing</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="MedievalKing" class="logo">
        </div>
        <nav>
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Bem-vindo ao Jogo Medieval</h2>
            <p>Entre no mundo medieval e viva grandes aventuras!</p>
            <img src="{{ asset('images/print1.webp') }}" alt="Imagem Medieval" class="featured-image">
        </section>
        <section id="about">
            <h2>Sobre o Jogo</h2>
            <p>Nosso jogo medieval oferece uma experiência imersiva e emocionante para todos os fãs de aventuras épicas. Junte-se a nós e explore um mundo cheio de mistérios e desafios.</p>
        </section>
        <section id="contact">
            <h2>Contato</h2>
            <p>Entre em contato conosco através do email: contato@jogomedieval.com</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 MedievalKing. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
