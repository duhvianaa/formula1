<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<footer class="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <style>
        .f1-footer {
            background: #000000;
            color: #ffffff;
            padding: 50px 0 20px;
            margin-top: 0px !important;
            border-top: 3px solid #dc0000;
        }
        .footer-content {
            padding-bottom: 30px;
        }
        .footer-section h5 {
            color: #dc0000;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }
        .footer-section p {
            color: #ffffff;
            line-height: 1.6;
            opacity: 0.9;
        }
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer-links li {
            margin-bottom: 10px;
        }
        .footer-links a {
            color: #ffffff;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            opacity: 0.8;
        }
        .footer-links a:hover {
            color: #dc0000;
            transform: translateX(5px);
            opacity: 1;
        }
        .footer-links a i {
            margin-right: 8px;
            width: 20px;
            text-align: center;
        }
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: #333333;
            color: white;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .social-links a:hover {
            background: #dc0000;
            transform: translateY(-3px);
        }
        .footer-bottom {
            border-top: 1px solid #333333;
            padding-top: 20px;
            text-align: center;
        }
        .footer-bottom p {
            color: #ffffff;
            margin: 0;
            font-size: 0.9rem;
            opacity: 0.7;
        }
        .f1-logo {
            font-size: 2rem;
            font-weight: bold;
            background: linear-gradient(135deg, #dc0000, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 15px;
        }
        .contact-info {
            color: #ffffff;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            opacity: 0.9;
        }
        .contact-info i {
            margin-right: 10px;
            color: #dc0000;
            width: 20px;
        }
        .newsletter-form {
            display: flex;
            margin-top: 15px;
        }
        .newsletter-form input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #333333;
            background: #1a1a1a;
            color: white;
            border-radius: 5px 0 0 5px;
            outline: none;
        }
        .newsletter-form input:focus {
            border-color: #dc0000;
        }
        .newsletter-form input::placeholder {
            color: #888;
        }
        .newsletter-form button {
            background: #dc0000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .newsletter-form button:hover {
            background: #b30000;
        }
        .partner-logos {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        .partner-logo {
            width: 60px;
            height: 40px;
            background: #333333;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 0.8rem;
            font-weight: bold;
            opacity: 0.8;
        }
        .footer-bottom a {
            color: #ffffff !important;
            opacity: 0.7;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .footer-bottom a:hover {
            color: #dc0000 !important;
            opacity: 1;
        }
    </style>

</head>
<body>
    <footer class="f1-footer">
     <div class="container">
        <div class="row footer-content">
            <!-- Coluna 1: Logo e Sobre -->
            <div class="col-lg-4 col-md-6 footer-section mb-4">
                <div class="f1-logo">
                    F1 DASHBOARD
                </div>
                <p>
                    A plataforma definitiva para fãs de Fórmula 1. Acompanhe resultados em tempo real, 
                    estatísticas detalhadas e tudo sobre o mundo da F1.
                </p>
                <div class="social-links">
                    <a href="#" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" title="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Coluna 2: Links Rápidos -->
            <div class="col-lg-2 col-md-6 footer-section mb-4">
                <h5>LINKS RÁPIDOS</h5>
                <ul class="footer-links">
                    <li><a href="#"><i class="fas fa-home"></i> Início</a></li>
                    <li><a href="#"><i class="fas fa-trophy"></i> Classificação</a></li>
                    <li><a href="#"><i class="fas fa-calendar"></i> Calendário</a></li>
                    <li><a href="#"><i class="fas fa-newspaper"></i> Notícias</a></li>
                    <li><a href="#"><i class="fas fa-gamepad"></i> Quiz F1</a></li>
                </ul>
            </div>

            <!-- Coluna 3: Equipes -->
            <div class="col-lg-3 col-md-6 footer-section mb-4">
                <h5>EQUIPES</h5>
                <ul class="footer-links">
                    <li><a href="#"><i class="fas fa-car"></i> Red Bull Racing</a></li>
                    <li><a href="#"><i class="fas fa-car"></i> Mercedes</a></li>
                    <li><a href="#"><i class="fas fa-car"></i> Ferrari</a></li>
                    <li><a href="#"><i class="fas fa-car"></i> McLaren</a></li>
                    <li><a href="#"><i class="fas fa-car"></i> Aston Martin</a></li>
                </ul>
            </div>

            <!-- Coluna 4: Contato e Newsletter -->
            <div class="col-lg-3 col-md-6 footer-section mb-4">
                <h5>CONTATO & NEWSLETTER</h5>
                <div class="contact-info">
                    <i class="fas fa-envelope"></i>
                    <span>contato@f1dashboard.com</span>
                </div>
                <div class="contact-info">
                    <i class="fas fa-phone"></i>
                    <span>+55 (11) 9999-9999</span>
                </div>
                
                <p class="mt-3">Assine nossa newsletter:</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Seu e-mail" required>
                    <button type="submit">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>

                <div class="partner-logos">
                    <div class="partner-logo">FIA</div>
                    <div class="partner-logo">F1</div>
                    <div class="partner-logo">Pirelli</div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="row">
                <div class="col-12">
                    <p>&copy; 2025 F1 Dashboard. Todos os direitos reservados. | Desenvolvido com <i class="fas fa-heart text-danger"></i> para fãs de Fórmula 1</p>
                    <p class="mt-2">
                        <a href="#" class="me-3">Política de Privacidade</a>
                        <a href="#" class="me-3">Termos de Uso</a>
                        <a href="#">Cookies</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</footer>
</body>
</html>