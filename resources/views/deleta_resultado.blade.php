 <x-app-layout>
   
        
        <style>
            :root {
                --f1-red: #e10600;
                --f1-dark: #0a0a0f;
                --f1-card: #151520;
                --f1-accent: #2a2a35;
                --f1-danger: #dc3545;
                --f1-field-bg: #0d0d14;
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
                background: linear-gradient(135deg, var(--f1-danger) 0%, #c82333 100%);
                color: white;
                padding: 25px;
                text-align: center;
                position: relative;
                border-bottom: 3px solid #fff;
            }

            .f1-card-header h2 {
                font-family: 'Orbitron', sans-serif;
                font-weight: 900;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin: 0;
                font-size: 24px;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            }

            .f1-card-header::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 3px;
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.8), transparent);
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
                color: #ff6b6b;
                font-weight: 600;
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-bottom: 8px;
            }

            .form-control {
                background: var(--f1-field-bg);
                border: 2px solid #333344;
                color: rgba(255, 255, 255, 0.9);
                padding: 12px 15px;
                border-radius: 8px;
                transition: all 0.3s ease;
                cursor: not-allowed;
                font-weight: 500;
            }

            .form-control:focus {
                background: var(--f1-field-bg);
                border-color: var(--f1-danger);
                color: rgba(255, 255, 255, 0.9);
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            }

            .btn-danger-f1 {
                background: linear-gradient(135deg, var(--f1-danger) 0%, #c82333 100%);
                border: none;
                color: white;
                padding: 15px 40px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                border-radius: 8px;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
                font-size: 16px;
            }

            .btn-danger-f1:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 25px rgba(220, 53, 69, 0.5);
                color: white;
            }

            .btn-danger-f1::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
                transition: left 0.5s;
            }

            .btn-danger-f1:hover::before {
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
                color: #ff6b6b;
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
                background: linear-gradient(135deg, #000, #333);
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
                border: 1px solid rgba(255,255,255,0.2);
            }

            .warning-section {
                background: rgba(220, 53, 69, 0.1);
                border: 2px solid var(--f1-danger);
                border-radius: 12px;
                padding: 25px;
                margin-bottom: 30px;
                text-align: center;
            }

            .warning-icon {
                font-size: 48px;
                color: var(--f1-danger);
                margin-bottom: 15px;
            }

            .warning-title {
                font-family: 'Orbitron', sans-serif;
                font-weight: 700;
                color: var(--f1-danger);
                font-size: 20px;
                margin-bottom: 10px;
                text-transform: uppercase;
            }

            .warning-text {
                color: rgba(255, 255, 255, 0.8);
                font-size: 14px;
                line-height: 1.5;
            }

            .readonly-field {
                opacity: 1;
                background: var(--f1-field-bg) !important;
            }

            .btn-outline-light {
                border: 2px solid rgba(255, 255, 255, 0.3);
                color: rgba(255, 255, 255, 0.8);
                padding: 12px 30px;
                font-weight: 600;
                transition: all 0.3s ease;
            }

            .btn-outline-light:hover {
                background: rgba(255, 255, 255, 0.1);
                border-color: rgba(255, 255, 255, 0.5);
                color: white;
            }

            .field-disclaimer {
                font-size: 12px;
                color: rgba(255, 255, 255, 0.5);
                text-align: center;
                margin-top: 10px;
                font-style: italic;
            }
        </style>
    

    <body>
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <!-- Card do Formulário -->
                    <div class="f1-card">
                        <div class="f1-card-header">
                            <div class="f1-logo">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="admin-badge">
                                <i class="fas fa-trash me-1"></i>Exclusão
                            </div>
                            <h2>Excluir Resultado da Corrida</h2>
                        </div>
                        
                        <div class="f1-card-body">
                            <!-- Aviso de Confirmação -->
                            <div class="warning-section">
                                <div class="warning-icon">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <div class="warning-title">ATENÇÃO: AÇÃO IRREVERSÍVEL</div>
                                <div class="warning-text">
                                    Você está prestes a excluir permanentemente o resultado do Grande Prêmio.<br>
                                    Esta ação não pode ser desfeita. Todos os dados serão perdidos.
                                </div>
                            </div>

                            <!-- Formulário Laravel -->
                            <form action="{{route('deleta')}}" method="DELETE">
                                @csrf
                                @method('DELETE')

                                <!-- Campo ID hidden -->
                                <input type="text" id="id" name="id" hidden value="{{ $resultado->id }}">

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

                                <div class="field-disclaimer">
                                    <i class="fas fa-lock me-1"></i>Campos somente para visualização
                                </div>

                                <!-- Grande Prêmio -->
                                <div class="form-section">
                                    <label for="premio" class="form-label">
                                        <i class="fas fa-trophy me-2"></i>Grande Prêmio
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="premio" id="premio"
                                            class="form-control readonly-field" 
                                            value="{{ $resultado->premio }}"
                                            readonly
                                            disabled>
                                        <div class="input-icon">
                                            <i class="fas fa-flag-checkered"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tempo -->
                                <div class="form-section">
                                    <label for="tempo" class="form-label">
                                        <i class="fas fa-stopwatch me-2"></i>Tempo
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="tempo" id="tempo"
                                            class="form-control readonly-field" 
                                            value="{{ $resultado->tempo }}"
                                            readonly
                                            disabled>
                                        <div class="input-icon">
                                            <i class="fas fa-hourglass-half"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ganhador -->
                                <div class="form-section">
                                    <label for="ganhador" class="form-label">
                                        <i class="fas fa-crown me-2"></i>Ganhador
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="ganhador" id="ganhador"
                                            class="form-control readonly-field" 
                                            value="{{ $resultado->ganhador }}"
                                            readonly
                                            disabled>
                                        <div class="input-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Equipe -->
                                <div class="form-section">
                                    <label for="equipe" class="form-label">
                                        <i class="fas fa-users me-2"></i>Equipe
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="equipe" id="equipe"
                                            class="form-control readonly-field" 
                                            value="{{ $resultado->equipe }}"
                                            readonly
                                            disabled>
                                        <div class="input-icon">
                                            <i class="fas fa-car-side"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Voltas -->
                                <div class="form-section">
                                    <label for="voltas" class="form-label">
                                        <i class="fas fa-flag me-2"></i>Voltas
                                    </label>
                                    <div class="input-group">
                                        <input type="number" name="voltas" id="voltas"
                                            class="form-control readonly-field" 
                                            value="{{ $resultado->voltas }}"
                                            readonly
                                            disabled>
                                        <div class="input-icon">
                                            <i class="fas fa-rotate"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Data -->
                                <div class="form-section">
                                    <label for="data" class="form-label">
                                        <i class="fas fa-calendar me-2"></i>Data
                                    </label>
                                    <div class="input-group">
                                        <input type="date" name="data" id="data"
                                            class="form-control readonly-field" 
                                            value="{{ $resultado->data }}"
                                            readonly
                                            disabled>
                                        <div class="input-icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Botões de Ação -->
                                <div class="d-grid gap-3 mt-4">
                                    <button type="submit" class="btn btn-danger-f1" onclick="return confirm('Tem certeza que deseja excluir permanentemente este resultado?')">
                                        <i class="fas fa-trash me-2"></i>Confirmar Exclusão
                                    </button>
                                    <a href="{{ route('resultado') }}" class="btn btn-outline-light">
                                        <i class="fas fa-arrow-left me-2"></i>Cancelar e Voltar
                                    </a>
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
            // Confirmação adicional antes de enviar o formulário
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.querySelector('form');
                
                form.addEventListener('submit', function(e) {
                    if (!confirm('⚠️ ATENÇÃO: Esta ação é permanente e irreversível!\n\nTem certeza absoluta que deseja excluir este resultado?')) {
                        e.preventDefault();
                        return false;
                    }
                });
            });
        </script>
    </body>
    </html>
    @include('layouts.footer')
</x-app-layout>