<x-app-layout>
        <style>
            :root {
                --f1-red: #e10600;
                --f1-dark: #0a0a0f;
                --f1-card: #151520;
                --f1-accent: #2a2a35;
                --f1-gold: #ffd700;
                --f1-warning: #ffc107;
            }
            
            body {
                background: linear-gradient(135deg, var(--f1-dark) 0%, #1a1a25 100%);
                color: #fff;
                font-family: 'Poppins', sans-serif;
                min-height: 100vh;
            }

            .f1-card {
                background: var(--f1-card);
                border-radius: 15px;
                border: 1px solid var(--f1-accent);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
                overflow: hidden;
                margin-top: 30px;
            }

            .f1-card-header {
                background: linear-gradient(135deg, var(--f1-warning) 0%, #e0a800 100%);
                color: var(--f1-dark);
                padding: 25px;
                text-align: center;
                position: relative;
                border-bottom: 3px solid var(--f1-red);
            }

            .f1-card-header h2 {
                font-family: 'Orbitron', sans-serif;
                font-weight: 900;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin: 0;
                font-size: 24px;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .f1-card-header::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 3px;
                background: linear-gradient(90deg, transparent, rgba(0,0,0,0.3), transparent);
                animation: headerShine 3s infinite;
            }

            @keyframes headerShine {
                0% { transform: translateX(-100%); }
                100% { transform: translateX(100%); }
            }

            .f1-card-body {
                padding: 30px;
            }

            .form-label {
                color: var(--f1-gold);
                font-weight: 600;
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-bottom: 8px;
            }

            .form-control {
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid var(--f1-accent);
                color: white;
                padding: 12px 15px;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .form-control:focus {
                background: rgba(255, 255, 255, 0.1);
                border-color: var(--f1-warning);
                color: white;
                box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
            }

            .form-control::placeholder {
                color: rgba(255, 255, 255, 0.5);
            }

            .btn-warning-f1 {
                background: linear-gradient(135deg, var(--f1-warning) 0%, #e0a800 100%);
                border: none;
                color: var(--f1-dark);
                padding: 12px 30px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 1px;
                border-radius: 8px;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            .btn-warning-f1:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 20px rgba(255, 193, 7, 0.4);
                color: var(--f1-dark);
            }

            .btn-warning-f1::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
                transition: left 0.5s;
            }

            .btn-warning-f1:hover::before {
                left: 100%;
            }

            .input-group {
                position: relative;
            }

            .input-icon {
                position: absolute;
                right: 15px;
                top: 50%;
                transform: translateY(-50%);
                color: var(--f1-warning);
                z-index: 3;
            }

            .form-section {
                margin-bottom: 25px;
                padding-bottom: 20px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .form-section:last-of-type {
                border-bottom: none;
                margin-bottom: 0;
                padding-bottom: 0;
            }

            .f1-logo {
                position: absolute;
                top: 15px;
                left: 25px;
                font-size: 20px;
                opacity: 0.8;
                color: var(--f1-dark);
            }

            @media (max-width: 768px) {
                .f1-card-body {
                    padding: 20px;
                }
                
                .f1-card-header h2 {
                    font-size: 20px;
                }
            }

            .grid-layout {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
                margin-bottom: 25px;
            }

            .admin-badge {
                background: linear-gradient(135deg, var(--f1-red), #ff4d4d);
                color: white;
                padding: 4px 12px;
                border-radius: 20px;
                font-size: 11px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                position: absolute;
                top: 15px;
                right: 25px;
            }

            /* Validação de campos */
            .is-invalid {
                border-color: #dc3545 !important;
            }

            .invalid-feedback {
                display: block;
                color: #dc3545;
                font-size: 12px;
                margin-top: 5px;
            }

            .edit-indicator {
                background: rgba(255, 193, 7, 0.1);
                border-left: 4px solid var(--f1-warning);
                padding: 15px;
                border-radius: 8px;
                margin-bottom: 20px;
                font-size: 14px;
            }
        </style>
    </head>

    <body>
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <!-- Card do Formulário -->
                    <div class="f1-card">
                        <div class="f1-card-header">
                            <div class="f1-logo">
                                <i class="fas fa-flag-checkered"></i>
                            </div>
                            <div class="admin-badge">
                                <i class="fas fa-edit me-1"></i>Edição
                            </div>
                            <h2>Editar Resultado da Corrida</h2>
                        </div>
                        
                        <div class="f1-card-body">
                            <!-- Formulário Laravel -->
                            <form action="{{ route('imundo') }}" method="POST">
                                @csrf

                                <!-- Campo ID hidden -->
                                <input type="text" id="id" name="id" hidden value="{{ $resultado->id }}">
<img src="{{asset($resultado->imagem)}}" alt="">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="edit-indicator">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    Editando resultado do Grande Prêmio: <strong>{{ $resultado->premio }}</strong>
                                </div>

                                <!-- Grande Prêmio -->
                                <div class="form-section">
                                    <label for="premio" class="form-label">
                                        <i class="fas fa-trophy me-2"></i>Grande Prêmio
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="premio" id="premio"
                                            class="form-control @error('premio') is-invalid @enderror" 
                                            placeholder="Digite o Grande Prêmio"
                                            value="{{ old('premio', $resultado->premio) }}"
                                            required>
                                        <div class="input-icon">
                                            <i class="fas fa-flag-checkered"></i>
                                        </div>
                                    </div>
                                    @error('premio')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Tempo -->
                                <div class="form-section">
                                    <label for="tempo" class="form-label">
                                        <i class="fas fa-stopwatch me-2"></i>Tempo
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="tempo" id="tempo"
                                            class="form-control @error('tempo') is-invalid @enderror" 
                                            placeholder="Digite o Tempo de Corrida"
                                            value="{{ old('tempo', $resultado->tempo) }}"
                                            required>
                                        <div class="input-icon">
                                            <i class="fas fa-hourglass-half"></i>
                                        </div>
                                    </div>
                                    @error('tempo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Ganhador -->
                                <div class="form-section">
                                    <label for="ganhador" class="form-label">
                                        <i class="fas fa-crown me-2"></i>Ganhador
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="ganhador" id="ganhador"
                                            class="form-control @error('ganhador') is-invalid @enderror" 
                                            placeholder="Digite o nome do Ganhador"
                                            value="{{ old('ganhador', $resultado->ganhador) }}"
                                            required>
                                        <div class="input-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    @error('ganhador')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Equipe -->
                                <div class="form-section">
                                    <label for="equipe" class="form-label">
                                        <i class="fas fa-users me-2"></i>Equipe
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="equipe" id="equipe"
                                            class="form-control @error('equipe') is-invalid @enderror" 
                                            placeholder="Digite o nome da Equipe"
                                            value="{{ old('equipe', $resultado->equipe) }}"
                                            required>
                                        <div class="input-icon">
                                            <i class="fas fa-car-side"></i>
                                        </div>
                                    </div>
                                    @error('equipe')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Voltas -->
                                <div class="form-section">
                                    <label for="voltas" class="form-label">
                                        <i class="fas fa-flag me-2"></i>Voltas
                                    </label>
                                    <div class="input-group">
                                        <input type="number" name="voltas" id="voltas"
                                            class="form-control @error('voltas') is-invalid @enderror" 
                                            placeholder="Digite o número de voltas"
                                            value="{{ old('voltas', $resultado->voltas) }}"
                                            required>
                                        <div class="input-icon">
                                            <i class="fas fa-rotate"></i>
                                        </div>
                                    </div>
                                    @error('voltas')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Data -->
                                <div class="form-section">
                                    <label for="data" class="form-label">
                                        <i class="fas fa-calendar me-2"></i>Data
                                    </label>
                                    <div class="input-group">
                                        <input type="date" name="data" id="data"
                                            class="form-control @error('data') is-invalid @enderror" 
                                            value="{{ old('data', $resultado->data) }}"
                                            required>
                                        <div class="input-icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    </div>
                                    @error('data')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Botão de Submit -->
                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-warning-f1">
                                        <i class="fas fa-edit me-2"></i>Alterar Resultado
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap 5 JS (Bundle com Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            // Validação em tempo real
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.querySelector('form');
                const inputs = form.querySelectorAll('input[required]');
                
                inputs.forEach(input => {
                    input.addEventListener('blur', function() {
                        if (!this.value) {
                            this.classList.add('is-invalid');
                        } else {
                            this.classList.remove('is-invalid');
                        }
                    });
                });
            });
        </script>
    @include('layouts.footer')
</x-app-layout>