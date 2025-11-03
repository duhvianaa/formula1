<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 LARAVEL - REINVENTADO</title>

    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --f1-red: #e10600;
            --f1-red-glow: #ff2e25;
            --f1-black: #0a0a0f;
            --f1-dark: #151520;
            --f1-white: #ffffff;
            --f1-yellow: #ffd700;
            --f1-silver: #c0c0c0;
            --f1-blue: #00a8ff;
            --f1-neon: #00f3ff;
            --f1-carbon: #1a1a1a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: radial-gradient(ellipse at center, #1a1a2e 0%, #0a0a0f 100%);
            color: var(--f1-white);
            font-family: 'Exo 2', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* EFEITOS DE FUNDO DINÂMICO */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.3;
        }

        .bg-circle {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, var(--f1-red) 0%, transparent 70%);
            opacity: 0.1;
            animation: float 15s infinite linear;
        }

        .bg-circle:nth-child(1) {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .bg-circle:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 60%;
            left: 80%;
            animation-delay: 5s;
        }

        .bg-circle:nth-child(3) {
            width: 400px;
            height: 400px;
            top: 30%;
            left: 60%;
            animation-delay: 10s;
        }

        @keyframes float {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(30px, -50px) rotate(120deg);
            }

            66% {
                transform: translate(-20px, 20px) rotate(240deg);
            }

            100% {
                transform: translate(0, 0) rotate(360deg);
            }
        }

        /* NAVBAR RADICAL */
        .navbar-f1 {
            background: linear-gradient(to bottom, hsla(240, 20%, 5%, 0.95) 0%, rgba(21, 21, 32, 0.9) 100%);
            backdrop-filter: blur(10px);
            border: none;
            padding: 0;
            box-shadow: 0 5px 30px rgba(225, 6, 0, 0.2);
            position: relative;
            z-index: 1000;
        }

        .navbar-container {
            padding: 0.5rem 1rem;
            position: relative;
        }

        /* Efeito de faixa de chegada na navbar */
        .finish-line {
            height: 4px;
            background: repeating-linear-gradient(90deg,
                    var(--f1-black) 0px,
                    var(--f1-black) 10px,
                    var(--f1-white) 10px,
                    var(--f1-white) 12px,
                    var(--f1-red) 12px,
                    var(--f1-red) 22px);
            background-size: 22px 4px;
            animation: finishLineMove 1s linear infinite;
            margin-bottom: 5px;
        }

        @keyframes finishLineMove {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 22px 0;
            }
        }

        /* Logo com efeito de neon */
        .navbar-brand {
            display: flex;
            align-items: center;
            color: var(--f1-white) !important;
            font-family: 'Orbitron', sans-serif;
            font-weight: 900;
            font-size: 20px;
            letter-spacing: 2px;
            text-transform: uppercase;
            position: relative;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.4s ease;
            text-shadow: 0 0 10px rgba(225, 6, 0, 0.7);
        }

        .navbar-brand:hover {
            background: rgba(225, 6, 0, 0.1);
            border: 1px solid var(--f1-red);
            box-shadow: 0 0 20px rgba(225, 6, 0, 0.5);
            transform: translateY(-2px);
        }

        .navbar-brand i {
            color: var(--f1-red);
            margin-right: 15px;
            font-size: 2.5rem;
            filter: drop-shadow(0 0 5px var(--f1-red));
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .navbar-brand span {
            color: var(--f1-white);
            background: linear-gradient(to right, var(--f1-white), var(--f1-silver));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        /* Itens de menu com design de cockpit */
        .nav-link {
            color: var(--f1-white) !important;
            font-weight: 600;
            margin: 0 5px;
            padding: 12px 20px !important;
            border-radius: 6px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            white-space: nowrap;
            position: relative;
            overflow: hidden;
            background: rgba(30, 30, 40, 0.5);
            border: 1px solid transparent;
            font-family: 'Exo 2', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.6s;
        }

        .nav-link:hover::before {
            left: 100%;
        }

        .nav-link i {
            margin-right: 10px;
            font-size: 1.3rem;
            width: 25px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background: rgba(225, 6, 0, 0.15);
            color: var(--f1-white) !important;
            border: 1px solid var(--f1-red);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(225, 6, 0, 0.3);
        }

        .nav-link:hover i {
            color: var(--f1-yellow);
            transform: scale(1.2);
        }

        .nav-link.active {
            background: linear-gradient(135deg, var(--f1-red) 0%, #b80500 100%);
            color: var(--f1-white) !important;
            border: 1px solid var(--f1-red);
            box-shadow: 0 0 20px rgba(225, 6, 0, 0.7);
            position: relative;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--f1-yellow);
            animation: activePulse 2s infinite;
        }

        @keyframes activePulse {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        /* Botão mobile */
        .navbar-toggler {
            border: 1px solid var(--f1-red);
            padding: 8px 12px;
            background: rgba(30, 30, 40, 0.7);
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(225, 6, 0, 0.5);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28225, 6, 0, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* Dropdowns futuristas - ESTILOS UNIFICADOS */
        .dropdown-menu {
            background: rgba(15, 15, 25, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid var(--f1-red);
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            padding: 10px 0;
            overflow: hidden;
            min-width: 200px;
        }

        .dropdown-item {
            color: var(--f1-white) !important;
            display: flex;
            align-items: center;
            padding: 12px 20px;
            transition: all 0.3s ease;
            position: relative;
            border-left: 3px solid transparent;
            text-decoration: none;
            width: 100%;
            border: none;
            background: transparent;
            text-align: left;
        }

        .dropdown-item i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            color: var(--f1-silver);
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: linear-gradient(90deg, rgba(225, 6, 0, 0.2) 0%, transparent 100%) !important;
            color: var(--f1-white) !important;
            padding-left: 25px;
            border-left: 3px solid var(--f1-red);
        }

        .dropdown-item:hover i {
            color: var(--f1-yellow);
            transform: scale(1.2);
        }

        .dropdown-divider {
            border-color: rgba(225, 6, 0, 0.3);
            margin: 8px 0;
        }

        /* Estilos específicos para os dropdowns do Laravel */
        [x-data] .dropdown-menu {
            display: none;
        }

        [x-data] .dropdown-menu.show {
            display: block;
        }

        /* Barra de pesquisa high-tech */
        .search-container {
            position: relative;
        }

        .f1-search-btn {
            background: linear-gradient(135deg, var(--f1-red) 0%, #b80500 100%);
            border: 1px solid var(--f1-red);
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .f1-search-btn:hover {
            background: linear-gradient(135deg, #b80500 0%, var(--f1-red) 100%);
            border-color: var(--f1-red-glow);
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(225, 6, 0, 0.5);
        }

        /* Menu do usuário premium */
        .user-menu {
            position: relative;
        }

        .user-btn {
            background: linear-gradient(135deg, rgba(40, 40, 60, 0.8) 0%, rgba(30, 30, 50, 0.8) 100%);
            border: 1px solid rgba(225, 6, 0, 0.5);
            color: var(--f1-white);
            border-radius: 30px;
            padding: 8px 20px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            font-weight: 600;
            cursor: pointer;
        }

        .user-btn:hover {
            background: linear-gradient(135deg, rgba(225, 6, 0, 0.2) 0%, rgba(30, 30, 50, 0.8) 100%);
            border-color: var(--f1-red);
            box-shadow: 0 0 15px rgba(225, 6, 0, 0.3);
        }

        .user-btn i {
            margin-right: 8px;
            font-size: 1.2rem;
        }

        /* Footer futurista */
        .f1-footer {
            background: linear-gradient(to top, rgba(10, 10, 15, 0.95) 0%, transparent 100%);
            color: var(--f1-white);
            padding: 2rem 0;
            margin-top: 3rem;
            position: relative;
        }

        .f1-footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--f1-red), transparent);
        }

        /* Efeitos de luz e brilho */
        .glow-effect {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: radial-gradient(circle at center, rgba(225, 6, 0, 0.1) 0%, transparent 70%);
            pointer-events: none;
            z-index: -1;
        }

        /* Alinhamento dos menus */
        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .nav-item {
            display: flex;
            align-items: center;
        }

        .ms-auto {
            margin-left: auto !important;
        }

        /* Responsividade completa */
        @media (max-width: 991px) {
            .navbar-collapse {
                margin-top: 15px;
                padding: 20px;
                background: rgba(15, 15, 25, 0.98);
                backdrop-filter: blur(15px);
                border-radius: 10px;
                border: 1px solid var(--f1-red);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            }

            .nav-link {
                margin: 8px 0;
                justify-content: flex-start;
                width: 100%;
                text-align: left;
            }

            .d-flex {
                flex-direction: column;
                width: 100%;
            }

            .search-container {
                width: 100%;
                margin-bottom: 15px;
            }

            .user-menu {
                width: 100%;
            }

            .user-btn {
                width: 100%;
                justify-content: center;
            }

            .dropdown-menu {
                position: static !important;
                transform: none !important;
                width: 100%;
                margin-top: 10px;
                background: rgba(20, 20, 30, 0.95);
            }

            .ms-auto {
                margin-left: 0 !important;
            }
        }

        /* Animações de entrada */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeInUp 0.6s ease forwards;
        }

        /* Efeito de digitação para o título */
        .typewriter {
            overflow: hidden;
            border-right: 2px solid var(--f1-red);
            white-space: nowrap;
            margin: 0 auto;
            animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: var(--f1-red)
            }
        }
    </style>
</head>

<body>
    <!-- Efeitos de fundo dinâmicos -->
    <div class="bg-animation">
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
    </div>

    <!-- Efeito de brilho -->
    <div class="glow-effect"></div>

    <!-- Navbar F1 Radical -->
    <nav x-data="{ open: false }" class="navbar-f1 navbar-expand-lg sticky-top">

        <div class="container navbar-container">
            <!-- Botão mobile -->
            <button class="navbar-toggler" type="button" @click="open = !open" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            <!-- Menu principal -->
            <div class="collapse navbar-collapse" :class="{ 'show': open }">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Logo com efeito neon -->
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <img src="r.png" alt="" style="width: 100px;">
                    </a>
                    <li class="nav-item">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="nav-link">
                            <i class="fas fa-home"></i> Dashboard
                        </x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link href="{{ route('jogos') }}" :active="request()->routeIs('teams')" class="nav-link">
                            <i class="fas fa-gamepad"></i> Jogos
                        </x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link href="{{ route('corridas') }}" :active="request()->routeIs('drivers')" class="nav-link">
                            <i class="fas fa-car-side"></i> Corridas
                        </x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link href="{{ route('equipes') }}" :active="request()->routeIs('teams')" class="nav-link">
                            <i class="fas fa-flag"></i> Equipes
                        </x-nav-link>
                    </li>
                </ul>

                <!-- Menu do usuário alinhado à direita -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle user-btn" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                                        class="fas fa-user-circle"></i> Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i> Notificações</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt"></i> Sair
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts personalizados -->
    <script>
        document.addEventListener('alpine:init', () => {
            // Integração entre Alpine.js e Bootstrap dropdowns
            Alpine.data('dropdown', () => ({
                open: false,
                toggle() {
                    this.open = !this.open
                }
            }))
        });

        // Efeito de digitação para o título
        document.addEventListener('DOMContentLoaded', function() {
            const typewriter = document.querySelector('.typewriter');
            if (typewriter) {
                // Reinicia a animação
                typewriter.style.animation = 'none';
                setTimeout(() => {
                    typewriter.style.animation = '';
                }, 10);
            }

            // Adiciona classe de animação para elementos com atraso
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(el => {
                const delay = el.getAttribute('data-delay') || '0';
                el.style.animationDelay = delay + 's';
                el.style.opacity = '0';
                setTimeout(() => {
                    el.style.opacity = '1';
                }, parseFloat(delay) * 1000);
            });
        });
    </script>
</body>

</html>
