<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedievalKing - Login</title>
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
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Cadastro</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="login">
            <h2>Login</h2>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Entrar</button>
                </div>
            </form>
            <p>Não tem uma conta? <a href="{{ url('/register') }}">Cadastre-se aqui</a></p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 MedievalKing. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
