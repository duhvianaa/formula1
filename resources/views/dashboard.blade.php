<x-app-layout>
    <style>
        :root {
            --f1-dark: #0a0a0f;
        }

        body {
            background-color: var(--f1-dark);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .f1-dashboard {
            background: var(--f1-dark);
            min-height: 100vh;
            color: #ffffff;
        }

        /* Ajuste para textos que estavam pretos */
        .f1-header {
            color: white !important;
        }

        .section-title {
            color: white !important;
        }

        .text-dark {
            color: #e0e0e0 !important;
        }

        .text-muted {
            color: #a0a0a0 !important;
        }

        .f1-card {
            background: #1a1a1f;
            border: 2px solid #2a2a2f;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            overflow: hidden;
            color: #ffffff;
        }

        .f1-card:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
            transform: translateY(-3px);
        }

        .f1-header {
            background: #1a1a1f;
            color: white;
            padding: 30px;
            margin: -1px -1px 0 -1px;
            border-bottom: 1px solid #2a2a2f;
        }

        .f1-header-secondary {
            background: linear-gradient(135deg, #dc0000, #b30000);
            color: white;
            padding: 15px 20px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            background: linear-gradient(135deg, #dc0000, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card-body1 {
            margin-bottom: 20px;
            margin-top: -10px;
            background: #1a1a1f;
        }

        .card-body {
            padding: 20px;
            background: #1a1a1f;
        }

        .driver-card {
            background: #2a2a2f;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 10px;
            border-left: 4px solid #dc0000;
            transition: all 0.3s ease;
            color: #ffffff;
        }

        .driver-card:hover {
            background: #3a3a3f;
            transform: translateX(5px);
        }

        .team-redbull { border-left-color: #1e5bc6; }
        .team-mercedes { border-left-color: #00d2be; }
        .team-ferrari { border-left-color: #dc0000; }
        .team-mclaren { border-left-color: #ff8700; }
        .team-alpine { border-left-color: #0090ff; }

        .race-card {
            background: #2a2a2f;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 10px;
            border-left: 4px solid #dc0000;
            color: #ffffff;
        }

        .news-card {
            background: #2a2a2f;
            border: 1px solid #3a3a3f;
            border-radius: 10px;
            padding: 20px;
            height: 100%;
            transition: all 0.3s ease;
            color: #ffffff;
        }

        .news-card:hover {
            border-color: #dc0000;
            box-shadow: 0 5px 15px rgba(220, 0, 0, 0.3);
        }

        .btn-f1-primary {
            background: linear-gradient(135deg, #dc0000, #b30000);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-f1-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 0, 0, 0.4);
            color: white;
        }

        .btn-f1-outline {
            background: transparent;
            color: #dc0000;
            border: 2px solid #dc0000;
            border-radius: 25px;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-f1-outline:hover {
            background: #dc0000;
            color: white;
            transform: translateY(-2px);
        }

        .badge-f1 {
            background: linear-gradient(135deg, #dc0000, #b30000);
            color: white;
            border-radius: 15px;
            padding: 5px 12px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .section-title {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 3px;
            background: #dc0000;
        }

        .hero-section {
            background: linear-gradient(135deg, #1a1a1f 0%, #2a2a2f 100%);
            padding: 60px 0;
            border-bottom: 3px solid #dc0000;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #dc0000, #b30000);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .bg-light {
            background-color: #2a2a2f !important;
            color: #ffffff;
        }

        .display-4 {
            color: #ffffff !important;
        }

        .lead {
            color: #a0a0a0 !important;
        }
    </style>

    <div class="f1-dashboard">
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold mb-4">
                            <span class="text-white">FORMULA 1</span>
                            <span class="text-danger">DASHBOARD</span>
                        </h1>
                        <p class="lead mb-4">
                            Acompanhe tudo sobre a temporada 2024 da F1. 
                            Resultados em tempo real, estatísticas detalhadas e análises exclusivas.
                        </p>
                        <div class="d-flex gap-3">
                            <button class="btn btn-f1-primary">
                                <i class="fas fa-play-circle me-2"></i>
                                Ver Corrida Ao Vivo
                            </button>
                            <button class="btn btn-f1-outline">
                                <i class="fas fa-chart-line me-2"></i>
                                Estatísticas
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="f1-card mx-auto" style="max-width: 400px;">
                            <div class="f1-header text-center">
                                <i class="fas fa-flag-checkered fa-3x mb-3 text-white"></i>
                                <h3 class="mb-2 text-white">PRÓXIMA CORRIDA</h3>
                                <h2 class="fw-bold text-white">GP DO BRASIL</h2>
                                <p class="mb-0 text-white">Interlagos • 12 NOV 2024</p>
                            </div>
                            <div class="card-body1 text-center">
                                <div class="row">
                                    <div class="col-6">
                                        <small class="text-white">LÍDER</small>
                                        <p class="fw-bold mb-0 text-white">Verstappen</p>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-white">EQUIPE</small>
                                        <p class="fw-bold mb-0 text-white">Red Bull</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container py-5">
            <div class="row g-4">
                <!-- Classificação Pilotos -->
                <div class="col-lg-8">
                    <div class="f1-card">
                        <div class="f1-header-secondary">
                            <h4 class="mb-0">
                                <i class="fas fa-trophy me-2"></i>
                                ULTIMAS CORRIDAS
                            </h4>
                        </div>

                        <div class="card-body">
                            @foreach($resultado as $r)
                            <div class="driver-card team-redbull">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <strong>{{$r->ganhador}}</strong>
                                    </div>
                                    <div class="col-3">
                                        <span>{{$r->equipe}}</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="badge-f1">{{$r->voltas}}</span>
                                    </div>
                                    <div class="col-2 text-end">
                                        <i>{{$r->premio}}</i>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                            <div class="text-center mt-4">
                                <button class="btn btn-f1-outline">
                                    <i class="fas fa-list me-2"></i>
                                    VER CLASSIFICAÇÃO COMPLETA 
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Notícias -->
                    <div class="f1-card mt-4">
                        <div class="f1-header-secondary">
                            <h4 class="mb-0">
                                <i class="fas fa-newspaper me-2"></i>
                                ÚLTIMAS NOTÍCIAS
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="news-card">
                                        <span class="badge bg-danger mb-2">ATUALIZAÇÃO</span>
                                        <h6 class="fw-bold">Red Bull anuncia novo pacote aerodinâmico</h6>
                                        <p class="small mb-2">Equipe trará melhorias significativas para as últimas corridas da temporada...</p><br><br><br>
                                        <small class="text-danger">Há 2 horas</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="news-card">
                                        <span class="badge bg-warning mb-2 text-dark">CONTRATO</span>
                                        <h6 class="fw-bold">Ferrari renova com Leclerc até 2027</h6>
                                        <p class="small mb-2">Piloto monegasco assina extensão por mais 3 temporadas com a Scuderia...</p><br><br><br>
                                        <small class="text-danger">Há 1 dia</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Próximas Corridas -->
                    <div class="f1-card mb-4">
                        <div class="f1-header-secondary">
                            <h5 class="mb-0">
                                <i class="fas fa-calendar me-2"></i>
                                PRÓXIMAS CORRIDAS
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="race-card">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <strong>GP DO BRASIL</strong>
                                        <br>
                                        <small>Interlagos, São Paulo</small>
                                    </div>
                                    <div class="col-4 text-end">
                                        <span class="badge-f1">12 NOV</span>
                                    </div>
                                </div>
                            </div>
                            <div class="race-card">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <strong>GP LAS VEGAS</strong>
                                        <br>
                                        <small>Strip Circuit</small>
                                    </div>
                                    <div class="col-4 text-end">
                                        <span class="badge-f1">19 NOV</span>
                                    </div>
                                </div>
                            </div>
                            <div class="race-card">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <strong>GP ABU DHABI</strong>
                                        <br>
                                        <small>Yas Marina</small>
                                    </div>
                                    <div class="col-4 text-end">
                                        <span class="badge-f1">26 NOV</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="f1-card">
                        <div class="f1-header-secondary">
                            <h5 class="mb-0">
                                <i class="fas fa-star me-2"></i>
                                RECURSOS
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-3">
                                <div class="d-flex align-items-center p-3 bg-light rounded">
                                    <i class="fas fa-bolt text-danger fa-lg me-3"></i>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Resultados Ao Vivo</h6>
                                        <small>Acompanhe em tempo real</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center p-3 bg-light rounded">
                                    <i class="fas fa-chart-bar text-danger fa-lg me-3"></i>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Estatísticas Detalhadas</h6>
                                        <small>Análises completas</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center p-3 bg-light rounded">
                                    <i class="fas fa-video text-danger fa-lg me-3"></i>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Vídeos Exclusivos</h6>
                                        <small>Melhores momentos</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout>