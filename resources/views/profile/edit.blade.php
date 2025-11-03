<x-app-layout>
    <style>
        :root {
            --f1-dark: #0a0a0f;
            --f1-card-bg: #1a1a1f;
            --f1-card-border: #2a2a2f;
            --f1-text-primary: #ffffff;
            --f1-text-secondary: #a0a0a0;
        }

        body {
            background-color: var(--f1-dark);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .profile-container {
            background: var(--f1-dark);
            min-height: 100vh;
            padding: 30px 0;
        }

        .profile-card {
            background: var(--f1-card-bg);
            border: 2px solid var(--f1-card-border);
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            margin-bottom: 25px;
            color: var(--f1-text-primary);
        }

        .profile-header {
            background: linear-gradient(135deg, #000000, #dc0000);
            color: white;
            padding: 25px;
            border-radius: 13px 13px 0 0;
        }

        .profile-section {
            padding: 30px;
            background: var(--f1-card-bg);
        }

        .btn-f1-primary {
            background: linear-gradient(135deg, #dc0000, #b30000);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-f1-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 0, 0, 0.3);
            color: white;
        }

        .btn-f1-outline {
            background: transparent;
            color: #dc0000;
            border: 2px solid #dc0000;
            border-radius: 8px;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-f1-outline:hover {
            background: #dc0000;
            color: white;
            transform: translateY(-2px);
        }

        .form-label {
            font-weight: 600;
            color: var(--f1-text-primary);
            margin-bottom: 8px;
        }

        .form-control {
            background: #2a2a2f;
            border: 2px solid #3a3a3f;
            border-radius: 8px;
            padding: 12px 15px;
            transition: all 0.3s ease;
            color: var(--f1-text-primary);
        }

        .form-control:focus {
            background: #2a2a2f;
            border-color: #dc0000;
            box-shadow: 0 0 0 3px rgba(220, 0, 0, 0.2);
            color: var(--f1-text-primary);
        }

        .form-control::placeholder {
            color: #666;
        }

        .danger-section {
            border-left: 4px solid #dc3545;
            background: #2a2a2f;
            padding: 20px;
            border-radius: 8px;
            color: var(--f1-text-primary);
        }

        .user-avatar {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #dc0000, #000000);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            margin-right: 20px;
        }

        .profile-stats {
            display: flex;
            gap: 30px;
            margin-top: 20px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #dc0000;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--f1-text-secondary);
        }

        /* Ajustes para textos específicos */
        .text-dark {
            color: var(--f1-text-primary) !important;
        }

        .text-muted {
            color: var(--f1-text-secondary) !important;
        }

        .opacity-75 {
            opacity: 0.75;
        }

        /* Ajustes para elementos do Laravel Breeze */
        .bg-white {
            background-color: var(--f1-card-bg) !important;
        }

        .text-gray-900 {
            color: var(--f1-text-primary) !important;
        }

        .text-gray-600 {
            color: var(--f1-text-secondary) !important;
        }

        .border-gray-300 {
            border-color: var(--f1-card-border) !important;
        }

        .focus\:border-red-500:focus {
            border-color: #dc0000 !important;
        }

        .focus\:ring-red-500:focus {
            --tw-ring-color: rgba(220, 0, 0, 0.2) !important;
        }

        .bg-gray-100 {
            background-color: #2a2a2f !important;
        }

        .text-gray-700 {
            color: var(--f1-text-primary) !important;
        }

        .border-gray-200 {
            border-color: var(--f1-card-border) !important;
        }

        /* Ajustes para mensagens de erro e sucesso */
        .bg-red-100 {
            background-color: #2a1a1a !important;
        }

        .bg-green-100 {
            background-color: #1a2a1a !important;
        }

        .text-red-800 {
            color: #ff6b6b !important;
        }

        .text-green-800 {
            color: #6bff6b !important;
        }

        .border-red-200 {
            border-color: #dc3545 !important;
        }

        .border-green-200 {
            border-color: #28a745 !important;
        }

        /* Ajustes para botões perigosos */
        .bg-red-600 {
            background-color: #dc3545 !important;
        }

        .bg-red-600:hover {
            background-color: #c82333 !important;
        }

        /* Ajustes para checkboxes e radios */
        input[type="checkbox"],
        input[type="radio"] {
            background-color: #2a2a2f;
            border-color: #3a3a3f;
        }

        input[type="checkbox"]:checked,
        input[type="radio"]:checked {
            background-color: #dc0000;
            border-color: #dc0000;
        }
    </style>

    <div class="profile-container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Header do Perfil -->
            <div class="profile-card">
                <div class="profile-header">
                    <div class="d-flex align-items-center">
                        <div class="user-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-1">{{ Auth::user()->name }}</h3>
                            <p class="mb-0 opacity-75">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    
                    <!-- Estatísticas do Usuário -->
                    <div class="profile-stats">
                        <div class="stat-item">
                            <div class="stat-number">12</div>
                            <div class="stat-label">Quizzes Completados</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">85%</div>
                            <div class="stat-label">Taxa de Acerto</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">3</div>
                            <div class="stat-label">Membro desde</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informações do Perfil -->
            <div class="profile-card">
                <div class="profile-section">
                    <h4 class="fw-bold mb-4">
                        <i class="fas fa-user-edit me-2"></i>
                        Informações do Perfil
                    </h4>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Atualizar Senha -->
            <div class="profile-card">
                <div class="profile-section">
                    <h4 class="fw-bold mb-4">
                        <i class="fas fa-lock me-2"></i>
                        Alterar Senha
                    </h4>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Deletar Conta -->
            <div class="profile-card">
                <div class="profile-section">
                    <div class="danger-section">
                        <h4 class="fw-bold mb-4">
                            <i class="fas fa-exclamation-triangle me-2 text-danger"></i>
                            Zona de Perigo
                        </h4>
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('layouts.footer')
    
    <script>
        // Adiciona classes F1 aos botões existentes
        document.addEventListener('DOMContentLoaded', function() {
            // Botão de salvar perfil
            const saveButtons = document.querySelectorAll('button[type="submit"]');
            saveButtons.forEach(button => {
                if (!button.closest('.delete-user-form')) {
                    button.classList.add('btn-f1-primary');
                }
            });

            // Botão de cancelar (se existir)
            const cancelButtons = document.querySelectorAll('button[type="button"]');
            cancelButtons.forEach(button => {
                button.classList.add('btn-f1-outline');
            });

            // Labels dos formulários
            const labels = document.querySelectorAll('label');
            labels.forEach(label => {
                label.classList.add('form-label');
            });

            // Inputs dos formulários
            const inputs = document.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                if (input.type !== 'checkbox' && input.type !== 'radio') {
                    input.classList.add('form-control');
                }
            });

            // Aplica tema escuro a elementos específicos do Laravel Breeze
            const sections = document.querySelectorAll('section');
            sections.forEach(section => {
                section.style.backgroundColor = 'var(--f1-card-bg)';
                section.style.color = 'var(--f1-text-primary)';
            });

            const headings = document.querySelectorAll('h2');
            headings.forEach(heading => {
                heading.style.color = 'var(--f1-text-primary)';
            });

            const paragraphs = document.querySelectorAll('p');
            paragraphs.forEach(p => {
                if (p.classList.contains('text-gray-600')) {
                    p.style.color = 'var(--f1-text-secondary)';
                }
            });
        });
    </script>
</x-app-layout>