<x-app-layout>
    <style>
        :root {
            --f1-red: #e10600;
            --f1-dark: #0a0a0f;
            --f1-card: #151520;
            --f1-accent: #2a2a35;
            --f1-gold: #ffd700;
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
            background: linear-gradient(135deg, var(--f1-red) 0%, #9c0400 100%);
            color: white;
            padding: 25px;
            text-align: center;
            position: relative;
            border-bottom: 3px solid var(--f1-gold);
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
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.8), transparent);
            animation: headerShine 3s infinite;
        }

        @keyframes headerShine {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
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
            border-color: var(--f1-red);
            color: white;
            box-shadow: 0 0 0 0.2rem rgba(225, 6, 0, 0.25);
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .btn-f1 {
            background: linear-gradient(135deg, var(--f1-red) 0%, #9c0400 100%);
            border: none;
            color: white;
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-f1:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(225, 6, 0, 0.4);
            color: white;
        }

        .btn-f1::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-f1:hover::before {
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
            color: var(--f1-gold);
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
            background: linear-gradient(135deg, var(--f1-gold), #ffed4e);
            color: var(--f1-dark);
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

        /* Color picker customizado */
        .color-picker-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .color-preview {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            border: 2px solid var(--f1-accent);
            cursor: pointer;
        }

        .color-input {
            flex: 1;
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
                                <i class="fas fa-flag-checkered"></i>
                            </div>
                            <div class="admin-badge">
                                <i class="fas fa-shield-alt me-1"></i>Admin F1
                            </div>
                            <h2>Cadastrar Time</h2>
                        </div>

                        <div class="f1-card-body">
                            <!-- Formulário Laravel -->
                            <form action="{{ route('resultado_equipe') }}" method="POST">
                                @csrf

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <!-- Equipe -->
                                <div class="form-section">
                                    <label for="equipe" class="form-label">
                                        <i class="fas fa-users me-2"></i>Equipe
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="equipe" id="equipe"
                                            class="form-control @error('equipe') is-invalid @enderror"
                                            placeholder="Digite o nome da Equipe" value="{{ old('equipe') }}" required>
                                        <div class="input-icon">
                                            <i class="fas fa-car-side"></i>
                                        </div>
                                    </div>
                                    @error('equipe')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Corredor 1 -->
                                <div class="form-section">
                                    <label for="corredor1" class="form-label">
                                        <i class="fas fa-user me-2"></i>Corredor 1
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="corredor1" id="corredor1"
                                            class="form-control @error('corredor1') is-invalid @enderror"
                                            placeholder="Digite o nome do primeiro corredor" value="{{ old('corredor1') }}" required>
                                        <div class="input-icon">
                                            <i class="fas fa-helmet-safety"></i>
                                        </div>
                                    </div>
                                    @error('corredor1')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Corredor 2 -->
                                <div class="form-section">
                                    <label for="corredor2" class="form-label">
                                        <i class="fas fa-user me-2"></i>Corredor 2
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="corredor2" id="corredor2"
                                            class="form-control @error('corredor2') is-invalid @enderror"
                                            placeholder="Digite o nome do segundo corredor" value="{{ old('corredor2') }}" required>
                                        <div class="input-icon">
                                            <i class="fas fa-helmet-safety"></i>
                                        </div>
                                    </div>
                                    @error('corredor2')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Imagem -->
                                <div class="form-section">
                                    <label for="imagem" class="form-label">
                                        <i class="fas fa-image me-2"></i>URL da Imagem
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="imagem" id="imagem"
                                            class="form-control @error('imagem') is-invalid @enderror"
                                            placeholder="Digite a URL da imagem do carro" value="{{ old('imagem') }}" required>
                                        <div class="input-icon">
                                            <i class="fas fa-link"></i>
                                        </div>
                                    </div>
                                    @error('imagem')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Cor -->
                                <div class="form-section">
                                    <label for="cor" class="form-label">
                                        <i class="fas fa-palette me-2"></i>Cor da Equipe
                                    </label>
                                    <div class="color-picker-container">
                                        <div class="color-preview" id="colorPreview" style="background-color: {{ old('cor', '#FFFFFF') }}"></div>
                                        <div class="color-input">
                                            <input type="color" name="cor" id="cor"
                                                class="form-control @error('cor') is-invalid @enderror"
                                                value="{{ old('cor', '#FFFFFF') }}" required>
                                        </div>
                                    </div>
                                    @error('cor')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <!-- Botão de Submit -->
                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-f1">
                                        <i class="fas fa-save me-2"></i>Salvar Time
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

                // Atualizar preview da cor
                const colorInput = document.getElementById('cor');
                const colorPreview = document.getElementById('colorPreview');

                colorInput.addEventListener('input', function() {
                    colorPreview.style.backgroundColor = this.value;
                });

                // Inicializar preview da cor
                colorPreview.style.backgroundColor = colorInput.value;
            });
        </script>
</x-app-layout>