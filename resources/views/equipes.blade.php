<x-app-layout>
    <style>
        .team-card {
            transition: all 0.3s ease;
            transform: translateY(0);
            min-height: 280px; /* Altura mínima igual aos outros cards */
        }
        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }
        .car-image img {
            transition: all 0.3s ease;
            transform: scale(1);
            width: 100%;
            height: 140px; /* Aumentei a altura para ficar igual às outras */
            object-fit: contain; /* Mantém a proporção da imagem */
        }
        .team-card:hover .car-image img {
            transform: scale(1.05);
        }

        /* Estilo para o card de adicionar time - MESMO TAMANHO */
        .add-team-card {
            border: 2px dashed #555;
            transition: all 0.3s ease;
            cursor: pointer;
            min-height: 280px; /* Mesma altura dos outros cards */
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: inherit;
            height: 100%; /* Garante que ocupe toda a altura */
        }

        .add-team-card:hover {
            border-color: #28a745;
            background: linear-gradient(135deg, #000000e7 0%, #1e7e34 100%);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(40, 167, 69, 0.3);
            text-decoration: none;
            color: inherit;
        }

        .add-team-content {
            text-align: center;
            color: #28a745;
            transition: all 0.3s ease;
        }

        .add-team-card:hover .add-team-content {
            color: white;
        }

        .add-team-icon {
            width: 50px;
            height: 50px;
            background: #28a745;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px auto;
            font-size: 20px;
            color: white;
            transition: all 0.3s ease;
        }

        .add-team-card:hover .add-team-icon {
            background: white;
            color: #28a745;
            transform: scale(1.1);
        }

        .add-team-text {
            font-weight: 600;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Estilo para as linhas de Times Profissionais e Amadores */
        .teams-header {
            width: 100%;
            text-align: center;
            margin: 40px 0 20px 0;
            position: relative;
        }

        .teams-text {
            display: inline-block;
            background: linear-gradient(135deg, #000000e7 0%, #6c757d 100%);
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 700;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 2px solid #495057;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .teams-header::before,
        .teams-header::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 30%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #495057, transparent);
        }

        .teams-header::before {
            left: 0;
        }

        .teams-header::after {
            right: 0;
        }

        /* Container da imagem padronizado */
        .car-image {
            height: 160px; /* Aumentei a altura do container */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }
    </style>

    <div class="container py-4">
        <!-- Linha Times Profissionais -->
        <div class="row">
            <div class="col-12">
                <div class="teams-header">
                    <span class="teams-text">Times Profissionais</span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">

            <!-- McLaren -->
            <div class="col-md-6 mb-4">
                <div class="team-card rounded-3 p-4 text-white h-100" style="background: linear-gradient(135deg, #000000e7 0%, #FF8000 100%);">
                    <h3 class="fw-bold mb-3">McLaren</h3>
                    <div class="d-flex gap-4 mb-4">
                        <span class="driver-name">• Lando Norris</span>
                        <span class="driver-name">• Oscar Piastri</span>
                    </div>
                    <div class="car-image rounded-2 text-center">
                        <img src="https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/mclaren/2025mclarencarright.webp" alt="McLaren">
                    </div>
                </div>
            </div>

            <!-- Ferrari -->
            <div class="col-md-6 mb-4">
                <div class="team-card rounded-3 p-4 text-white h-100" style="background: linear-gradient(135deg, #000000e7 0%, #DC0000 100%);">
                    <h3 class="fw-bold mb-3">Ferrari</h3>
                    <div class="d-flex gap-4 mb-4">
                        <span class="driver-name">• Charles Leclerc</span>
                        <span class="driver-name">• Carlos Sainz</span>
                    </div>
                    <div class="car-image rounded-2 text-center">
                        <img src="https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/ferrari/2025ferraricarright.webp" alt="Ferrari">
                    </div>
                </div>
            </div>

            <!-- Mercedes -->
            <div class="col-md-6 mb-4">
                <div class="team-card rounded-3 p-4 text-white h-100" style="background: linear-gradient(135deg, #000000e7 0%, #00D2BE 100%);">
                    <h3 class="fw-bold mb-3">Mercedes</h3>
                    <div class="d-flex gap-4 mb-4">
                        <span class="driver-name">• Lewis Hamilton</span>
                        <span class="driver-name">• George Russell</span>
                    </div>
                    <div class="car-image rounded-2 text-center">
                        <img src="https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/mercedes/2025mercedescarright.webp" alt="Mercedes">
                    </div>
                </div>
            </div>

            <!-- Red Bull -->
            <div class="col-md-6 mb-4">
                <div class="team-card rounded-3 p-4 text-white h-100" style="background: linear-gradient(135deg, #000000e7 0%, #0600EF 100%);">
                    <h3 class="fw-bold mb-3">Red Bull</h3>
                    <div class="d-flex gap-4 mb-4">
                        <span class="driver-name">• Max Verstappen</span>
                        <span class="driver-name">• Sergio Pérez</span>
                    </div>
                    <div class="car-image rounded-2 text-center">
                        <img src="https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/redbullracing/2025redbullracingcarright.webp" alt="Red Bull">
                    </div>
                </div>
            </div>

            <!-- Aston Martin -->
            <div class="col-md-6 mb-4">
                <div class="team-card rounded-3 p-4 text-white h-100" style="background: linear-gradient(135deg, #000000e7 0%, #006F62 100%);">
                    <h3 class="fw-bold mb-3">Aston Martin</h3>
                    <div class="d-flex gap-4 mb-4">
                        <span class="driver-name">• Fernando Alonso</span>
                        <span class="driver-name">• Lance Stroll</span>
                    </div>
                    <div class="car-image rounded-2 text-center">
                        <img src="https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/astonmartin/2025astonmartincarright.webp" alt="Aston Martin">
                    </div>
                </div>
            </div>

            <!-- Alpine -->
            <div class="col-md-6 mb-4">
                <div class="team-card rounded-3 p-4 text-white h-100" style="background: linear-gradient(135deg, #000000e7 0%, #0090FF 100%);">
                    <h3 class="fw-bold mb-3">Alpine</h3>
                    <div class="d-flex gap-4 mb-4">
                        <span class="driver-name">• Esteban Ocon</span>
                        <span class="driver-name">• Pierre Gasly</span>
                    </div>
                    <div class="car-image rounded-2 text-center">
                        <img src="https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/alpine/2025alpinecarright.webp" alt="Alpine">
                    </div>
                </div>
            </div>

            <!-- Williams -->
            <div class="col-md-6 mb-4">
                <div class="team-card rounded-3 p-4 text-white h-100" style="background: linear-gradient(135deg, #000000e7 0%, #005AFF 100%);">
                    <h3 class="fw-bold mb-3">Williams</h3>
                    <div class="d-flex gap-4 mb-4">
                        <span class="driver-name">• Alexander Albon</span>
                        <span class="driver-name">• Logan Sargeant</span>
                    </div>
                    <div class="car-image rounded-2 text-center">
                        <img src="https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/williams/2025williamscarright.webp" alt="Williams">
                    </div>
                </div>
            </div>

            <!-- AlphaTauri -->
            <div class="col-md-6 mb-4">
                <div class="team-card rounded-3 p-4 text-white h-100" style="background: linear-gradient(135deg, #000000e7 0%, #006300 100%);">
                    <h3 class="fw-bold mb-3">Chute Sauber</h3>
                    <div class="d-flex gap-4 mb-4">
                        <span class="driver-name">• Nico Hulkenberg</span>
                        <span class="driver-name">• Gabriel Borboleto</span>
                    </div>
                    <div class="car-image rounded-2 text-center">
                        <img src="https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/kicksauber/2025kicksaubercarright.webp" alt="Sauber">
                    </div>
                </div>
            </div>

            <!-- Alfa Romeo -->
            <div class="col-md-6 mb-4">
                <div class="team-card rounded-3 p-4 text-white h-100" style="background: linear-gradient(135deg, #000000e7 0%, #2345AB 100%);">
                    <h3 class="fw-bold mb-3">Touros de Corrida</h3>
                    <div class="d-flex gap-4 mb-4">
                        <span class="driver-name">• Liam Lawson</span>
                        <span class="driver-name">• Isack Hadjar</span>
                    </div>
                    <div class="car-image rounded-2 text-center">
                        <img src="https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/racingbulls/2025racingbullscarright.webp" alt="Racing Bulls">
                    </div>
                </div>
            </div>

            <!-- Haas -->
            <div class="col-md-6 mb-4">
                <div class="team-card rounded-3 p-4 text-white h-100" style="background: linear-gradient(135deg, #000000e7 0%, #FFFFFF 100%);">
                    <h3 class="fw-bold mb-3" style="color:white;">Haas</h3>
                    <div class="d-flex gap-4 mb-4">
                        <span class="driver-name" style="color: white;">• Kevin Magnussen</span>
                        <span class="driver-name" style="color: white;">• Nico Hülkenberg</span>
                    </div>
                    <div class="car-image rounded-2 text-center">
                        <img src="https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/haasf1team/2025haasf1teamcarright.webp" alt="Haas">
                    </div>
                </div>
            </div>

        </div>

        <!-- Linha Times Amadores -->
        <div class="row">
            <div class="col-12">
                <div class="teams-header">
                    <span class="teams-text">Times Amadores</span>
                </div>
            </div>
        </div>
        <br>
        
        <div class="row">
            <!-- Times da tabela equipe -->
            @foreach($equipes as $equipe)
            <div class="col-md-6 mb-4">
                <div class="team-card rounded-3 p-4 text-white h-100" style="background: linear-gradient(135deg, #000000e7 0%, {{ $equipe->cor }} 100%);">
                    <h3 class="fw-bold mb-3">{{ $equipe->equipe }}</h3>
                    <div class="d-flex gap-4 mb-4">
                        <span class="driver-name">• {{ $equipe->corredor1 }}</span>
                        <span class="driver-name">• {{ $equipe->corredor2 }}</span>
                    </div>
                    <div class="car-image rounded-2 text-center img-fluid">
                        <img src="{{ $equipe->imagem }}" alt="Carro {{ $equipe->equipe }}">
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Card para Adicionar Time - MESMO TAMANHO -->
            <div class="col-md-6 mb-4">
                <a href="{{route('criar_equipe')}}" class="team-card rounded-3 p-4 text-white h-100 add-team-card">
                    <div class="add-team-content">
                        <div class="add-team-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="add-team-text">
                            Adicione Time
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-app-layout>