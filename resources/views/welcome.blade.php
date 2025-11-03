<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>F1 Racing - {{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&family=Exo+2:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --f1-red: #e10600;
            --f1-black: #0a0a0a;
            --f1-dark: #15151e;
            --f1-yellow: #ffd700;
            --f1-white: #ffffff;
            --f1-silver: #c0c0c0;
            --f1-carbon: #1a1a1a;
        }

        body {
            font-family: 'Exo 2', sans-serif;
            background: linear-gradient(135deg, var(--f1-carbon) 0%, var(--f1-black) 100%);
            color: var(--f1-white);
            overflow-x: hidden;
        }

        .f1-font {
            font-family: 'Racing Sans One', cursive;
        }

        /* Navbar Estilo F1 */
        .navbar-f1 {
            background: rgba(10, 10, 10, 0.95) !important;
            backdrop-filter: blur(10px);
            border-bottom: 3px solid var(--f1-red);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-family: 'Racing Sans One', cursive;
            font-size: 2rem;
            color: var(--f1-white) !important;
        }

        .navbar-brand span {
            color: var(--f1-red);
        }

        .nav-link {
            color: var(--f1-white) !important;
            font-weight: 600;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem !important;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background: var(--f1-red);
            transform: translateY(-2px);
        }

        .btn-f1 {
            background: linear-gradient(45deg, var(--f1-red), #ff2a00);
            border: none;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(225, 6, 0, 0.3);
        }

        .btn-f1:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(225, 6, 0, 0.4);
            background: linear-gradient(45deg, #ff2a00, var(--f1-red));
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(10, 10, 10, 0.8), rgba(10, 10, 10, 0.9)), 
                        url('q.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-content {
            z-index: 2;
        }

        .hero-title {
            font-family: 'Racing Sans One', cursive;
            font-size: 4.5rem;
            background: linear-gradient(45deg, var(--f1-white), var(--f1-silver));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 30px rgba(225, 6, 0, 0.5);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--f1-silver);
            margin-bottom: 2rem;
        }

        /* Race Track Animation */
        .race-track {
            height: 4px;
            background: repeating-linear-gradient(
                90deg,
                var(--f1-red) 0px,
                var(--f1-red) 15px,
                var(--f1-white) 15px,
                var(--f1-white) 30px
            );
            margin: 2rem 0;
            position: relative;
            overflow: hidden;
        }

        .race-car {
            position: absolute;
            top: -8px;
            left: -30px;
            font-size: 1.5rem;
            animation: race 3s linear infinite;
            color: var(--f1-red);
        }

        @keyframes race {
            0% { left: -30px; }
            100% { left: 100%; }
        }

        /* Cards F1 */
        .f1-card {
            background: linear-gradient(145deg, #1a1a1a, #2a2a2a);
            border: 1px solid #333;
            border-radius: 15px;
            padding: 2rem;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .f1-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(225, 6, 0, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .f1-card:hover::before {
            left: 100%;
        }

        .f1-card:hover {
            transform: translateY(-10px);
            border-color: var(--f1-red);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
        }

        .card-icon {
            font-size: 3rem;
            color: var(--f1-red);
            margin-bottom: 1rem;
        }

        /* Stats Section */
        .stats-section {
            background: var(--f1-carbon);
            padding: 5rem 0;
        }

        .stat-number {
            font-family: 'Racing Sans One', cursive;
            font-size: 3.5rem;
            color: var(--f1-red);
            font-weight: bold;
        }

        .stat-label {
            color: var(--f1-silver);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9rem;
        }

        /* Driver Spotlight */
        .driver-card {
            background: linear-gradient(145deg, #1a1a1a, #2a2a2a);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .driver-card:hover {
            border-color: var(--f1-red);
            transform: translateY(-5px);
        }

        .driver-number {
            font-family: 'Racing Sans One', cursive;
            font-size: 3rem;
            color: var(--f1-red);
        }

        /* Footer */
        .footer-f1 {
            background: var(--f1-black);
            border-top: 3px solid var(--f1-red);
            padding: 3rem 0 1rem;
        }

        .social-links a {
            color: var(--f1-silver);
            font-size: 1.5rem;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: var(--f1-red);
            transform: translateY(-3px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .navbar-brand {
                font-size: 1.5rem;
            }
        }

        /* Animações */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content fade-in">
                    <h1 class="hero-title f1-font">F1 RACING EXPERIENCE</h1>
                    <p class="hero-subtitle">A plataforma definitiva para entusiastas da Fórmula 1. Dados em tempo real, estatísticas e experiência imersiva.</p>
                    
                    <div class="race-track">
                        <div class="race-car">
                            <i class="fas fa-car"></i>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-f1 btn-lg me-3">
                                <i class="fas fa-play-circle me-2"></i>Go to Dashboard
                            </a>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-f1 btn-lg me-3">
                                <i class="fas fa-flag-checkered me-2"></i>Comece agora
                            </a>
                            <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg">
                                <i class="fas fa-sign-in-alt me-2"></i>Login
                            </a>
                        @endauth
                    </div>
                </div>
                <div class="col-lg-6 fade-in" style="animation-delay: 0.2s;">
                    <div class="text-center">
                        <img src="w.jpg" 
                             alt="F1 Car" class="img-fluid rounded-3 shadow-lg" style="max-height: 500px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scroll Animation -->
    <script>
        // Scroll animation
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const fadeInOnScroll = () => {
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        };
        
        window.addEventListener('scroll', fadeInOnScroll);
        fadeInOnScroll(); // Initial check
        
        // Smooth scrolling for navbar links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>