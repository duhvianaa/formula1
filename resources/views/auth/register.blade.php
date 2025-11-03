<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - F1 LARAVEL</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;600;700&display=swap" rel="stylesheet">
    
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
            background-image: url(q.jpg);
            background-size: cover;
            color: var(--f1-white);
            font-family: 'Exo 2', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
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

        /* CARD DE REGISTRO PREMIUM */
        .register-container {
            width: 100%;
            max-width: 520px;
            padding: 20px;
            position: relative;
            z-index: 10;
        }

        .register-card {
            background: rgba(15, 15, 25, 0.85);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(225, 6, 0, 0.4);
            box-shadow: 
                0 0 50px rgba(225, 6, 0, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            padding: 3rem 2.5rem;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .register-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(225, 6, 0, 0.1), transparent);
            transition: left 0.7s;
        }

        .register-card:hover::before {
            left: 100%;
        }

        .register-card:hover {
            transform: translateY(-10px);
            box-shadow: 
                0 15px 60px rgba(225, 6, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            border-color: rgba(225, 6, 0, 0.7);
        }

        /* HEADER DO REGISTRO */
        .register-header {
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .register-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--f1-white);
            font-family: 'Orbitron', sans-serif;
            font-weight: 900;
            font-size: 2.2rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 1rem;
            text-shadow: 0 0 15px rgba(225, 6, 0, 0.7);
        }

        .register-logo i {
            color: var(--f1-red);
            margin-right: 15px;
            font-size: 3rem;
            filter: drop-shadow(0 0 10px var(--f1-red));
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

        .register-logo span {
            background: linear-gradient(to right, var(--f1-white), var(--f1-silver));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .register-title {
            color: var(--f1-white);
            font-family: 'Exo 2', sans-serif;
            font-weight: 700;
            font-size: 1.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 0.5rem;
        }

        .register-subtitle {
            color: var(--f1-silver);
            font-size: 1rem;
            font-weight: 300;
        }

        /* FORMULÁRIO */
        .register-form {
            margin-top: 1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            display: block;
            color: var(--f1-white);
            font-family: 'Exo 2', sans-serif;
            font-weight: 600;
            margin-bottom: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        .form-label i {
            margin-right: 10px;
            color: var(--f1-red);
            width: 20px;
            text-align: center;
        }

        .form-control {
            width: 100%;
            background: rgba(25, 25, 35, 0.7);
            border: 2px solid rgba(225, 6, 0, 0.3);
            border-radius: 10px;
            padding: 12px 18px;
            color: var(--f1-white);
            font-family: 'Exo 2', sans-serif;
            font-size: 1rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--f1-red);
            background: rgba(25, 25, 35, 0.9);
            box-shadow: 0 0 0 3px rgba(225, 6, 0, 0.2);
            transform: translateY(-2px);
            color: var(--f1-white);
        }

        .form-control::placeholder {
            color: var(--f1-silver);
            opacity: 0.7;
        }

        /* BOTÕES - LAYOUT CENTRALIZADO */
        .register-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 2rem;
            gap: 1.2rem;
        }

        .btn-register {
            background: linear-gradient(135deg, var(--f1-red) 0%, #b80500 100%);
            border: 2px solid var(--f1-red);
            color: var(--f1-white);
            padding: 14px 50px;
            border-radius: 30px;
            font-family: 'Exo 2', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(225, 6, 0, 0.3);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 280px;
            justify-content: center;
        }

        .btn-register::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-register:hover::before {
            left: 100%;
        }

        .btn-register:hover {
            background: linear-gradient(135deg, #b80500 0%, var(--f1-red) 100%);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(225, 6, 0, 0.5);
            letter-spacing: 2px;
        }

        .btn-register:active {
            transform: translateY(0);
        }

        .btn-register i {
            margin-right: 10px;
            font-size: 1.1rem;
        }

        .login-link {
            color: var(--f1-silver);
            text-decoration: none;
            font-family: 'Exo 2', sans-serif;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .login-link i {
            margin-right: 8px;
            font-size: 0.9rem;
        }

        .login-link:hover {
            color: var(--f1-red);
            text-decoration: none;
            transform: translateY(-2px);
        }

        /* MENSAGENS DE ERRO/STATUS */
        .auth-session-status {
            background: rgba(225, 6, 0, 0.1);
            border: 1px solid var(--f1-red);
            border-radius: 10px;
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--f1-white);
            font-family: 'Exo 2', sans-serif;
            position: relative;
            overflow: hidden;
        }

        .auth-session-status::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--f1-red);
        }

        .input-error {
            color: #ff6b6b;
            font-size: 0.8rem;
            margin-top: 0.5rem;
            font-family: 'Exo 2', sans-serif;
            display: flex;
            align-items: center;
        }

        .input-error i {
            margin-right: 5px;
            font-size: 0.8rem;
        }

        /* EFEITO DE DIGITAÇÃO NO TÍTULO */
        .typewriter {
            overflow: hidden;
            border-right: 2px solid var(--f1-red);
            white-space: nowrap;
            margin: 0 auto;
            animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: var(--f1-red) }
        }

        /* FOOTER DO REGISTRO */
        .register-footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(225, 6, 0, 0.2);
            color: var(--f1-silver);
            font-size: 0.85rem;
        }

        .register-footer a {
            color: var(--f1-red);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .register-footer a:hover {
            color: var(--f1-yellow);
            text-decoration: underline;
        }

        /* RESPONSIVIDADE */
        @media (max-width: 576px) {
            .register-container {
                padding: 15px;
            }
            
            .register-card {
                padding: 2rem 1.5rem;
            }
            
            .register-logo {
                font-size: 1.8rem;
            }
            
            .register-logo i {
                font-size: 2.5rem;
            }
            
            .register-title {
                font-size: 1.5rem;
            }
            
            .btn-register {
                padding: 12px 30px;
                max-width: 100%;
            }
        }

        /* ANIMAÇÃO DE ENTRADA */
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

        .register-card {
            animation: fadeInUp 0.8s ease-out;
        }

        /* DECORAÇÃO EXTRA */
        .circuit-line {
            position: absolute;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--f1-red), transparent);
            opacity: 0.5;
        }

        .circuit-line:nth-child(1) {
            top: 20%;
            left: 0;
            right: 0;
            animation: circuitMove 15s linear infinite;
        }

        .circuit-line:nth-child(2) {
            top: 50%;
            left: 0;
            right: 0;
            animation: circuitMove 12s linear infinite reverse;
        }

        .circuit-line:nth-child(3) {
            top: 80%;
            left: 0;
            right: 0;
            animation: circuitMove 18s linear infinite;
        }

        @keyframes circuitMove {
            0% {
                background-position: -100% 0;
            }
            100% {
                background-position: 100% 0;
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

    <!-- Linhas de circuito decorativas -->
    <div class="circuit-line"></div>
    <div class="circuit-line"></div>
    <div class="circuit-line"></div>

    <div class="register-container">
        <div class="register-card">
            <!-- Header -->
            <div class="register-header">
                <div class="register-logo">
                    <img src="r.png" alt="" style="height: 100px;">
                </div>
                <h1 class="register-title typewriter">JUNTE-SE À EQUIPE</h1>
                <p class="register-subtitle">Crie sua conta e entre para o grid de partida</p>
            </div>

            <!-- Session Status -->
            @if(session('status'))
            <div class="auth-session-status">
                <i class="fas fa-info-circle me-2"></i>
                {{ session('status') }}
            </div>
            @endif

            <!-- Formulário de Registro -->
            <form method="POST" action="{{ route('register') }}" class="register-form">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label class="form-label" for="name">
                        <i class="fas fa-user"></i> {{ __('Nome') }}
                    </label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Seu apelido">
                    @if($errors->get('name'))
                    <div class="input-error">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <label class="form-label" for="email">
                        <i class="fas fa-envelope"></i> {{ __('Email') }}
                    </label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="seu@email.com">
                    @if($errors->get('email'))
                    <div class="input-error">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label class="form-label" for="password">
                        <i class="fas fa-lock"></i> {{ __('Senha') }}
                    </label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Crie uma senha segura">
                    @if($errors->get('password'))
                    <div class="input-error">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $errors->first('password') }}
                    </div>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label class="form-label" for="password_confirmation">
                        <i class="fas fa-lock"></i> {{ __('Confirme a senha') }}
                    </label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Digite a senha novamente">
                    @if($errors->get('password_confirmation'))
                    <div class="input-error">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $errors->first('password_confirmation') }}
                    </div>
                    @endif
                </div>

                <div class="register-actions">
                    <button type="submit" class="btn-register">
                        <i class="fas fa-user-plus"></i> {{ __('Registrar') }}
                    </button>
                    
                    <a class="login-link" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt"></i> {{ __('Ja está registrado?') }}
                    </a>
                </div>
            </form>

            <div class="register-footer">
                <p>© 2025 F1 Laravel. Todos os direitos reservados.</p>
                <p>Protegido por <a href="#">Termos de Uso</a> e <a href="#">Política de Privacidade</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Efeitos de foco nos inputs
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('focused');
                });
            });
            
            // Efeito de digitação no título
            const typewriter = document.querySelector('.typewriter');
            if (typewriter) {
                typewriter.style.animation = 'none';
                setTimeout(() => {
                    typewriter.style.animation = '';
                }, 10);
            }
            
            // Auto-foco no campo de nome se houver erro
            @if($errors->has('name') || $errors->has('email') || $errors->has('password'))
            document.getElementById('name').focus();
            @endif
        });
    </script>
</body>
</html>