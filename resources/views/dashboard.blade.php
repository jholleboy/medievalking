<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedievalKing - Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        .map {
            display: grid;
            grid-template-columns: repeat(10, 50px);
            grid-template-rows: repeat(10, 50px);
            gap: 2px;
            margin: 20px auto;
        }
        .tile {
            width: 50px;
            height: 50px;
            background-color: #ddd;
            border: 1px solid #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .player {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="MedievalKing" class="logo">
        </div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Início</a></li>
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/logout') }}">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Mapa Interativo</h2>
        <div id="map" class="map">
            <!-- O mapa será gerado dinamicamente aqui -->
        </div>
    </main>
    <footer>
        <p>&copy; 2024 MedievalKing. Todos os direitos reservados.</p>
    </footer>

    <script>
        const mapElement = document.getElementById('map');
        const mapSize = 10;
        let playerPosition = { x: 0, y: 0 };

        // Função para desenhar o mapa
        function drawMap() {
            mapElement.innerHTML = ''; // Limpa o mapa
            for (let y = 0; y < mapSize; y++) {
                for (let x = 0; x < mapSize; x++) {
                    const tile = document.createElement('div');
                    tile.classList.add('tile');
                    
                    // Verifica se a posição atual é a do jogador
                    if (x === playerPosition.x && y === playerPosition.y) {
                        tile.classList.add('player');
                        tile.textContent = 'P';
                    }

                    // Adiciona um evento de clique ao quadrado
                    tile.addEventListener('click', () => movePlayer(x, y));

                    mapElement.appendChild(tile);
                }
            }
        }

        // Função para mover o jogador
        function movePlayer(x, y) {
            playerPosition = { x, y };
            drawMap(); // Atualiza o mapa com a nova posição
        }

        // Inicializa o mapa ao carregar a página
        drawMap();
    </script>
</body>
</html>
