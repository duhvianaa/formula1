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

        .quiz-container {
            background: var(--f1-dark);
            min-height: 100vh;
            padding: 40px 0;
        }

        .quiz-card {
            background: var(--f1-card-bg);
            border: 2px solid var(--f1-card-border);
            border-radius: 20px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            color: var(--f1-text-primary);
        }

        .quiz-card:hover {
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
        }

        .quiz-header {
            background: linear-gradient(135deg, #000000, #dc0000);
            color: white;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .quiz-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: rotate(45deg) translateX(-100%); }
            100% { transform: rotate(45deg) translateX(100%); }
        }

        .question-card {
            background: var(--f1-card-bg);
            border: 2px solid var(--f1-card-border);
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            color: var(--f1-text-primary);
        }

        .question-card:hover {
            border-color: #dc0000;
            box-shadow: 0 6px 20px rgba(220, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        #question-text {
            color: var(--f1-text-primary);
            font-size: 1.3rem;
            line-height: 1.5;
            margin-bottom: 0;
        }

        .option-btn {
            width: 100%;
            background: linear-gradient(135deg, #2a2a2f, #1a1a1f);
            border: 2px solid #3a3a3f;
            border-radius: 12px;
            padding: 18px 25px;
            margin: 10px 0;
            text-align: left;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            color: var(--f1-text-primary);
            font-size: 1rem;
            position: relative;
            overflow: hidden;
        }

        .option-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            transition: left 0.5s;
        }

        .option-btn:hover::before {
            left: 100%;
        }

        .option-btn:hover {
            background: linear-gradient(135deg, #3a3a3f, #2a2a2f);
            border-color: #dc0000;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(220, 0, 0, 0.25);
        }

        .option-btn.selected {
            background: linear-gradient(135deg, #dc0000, #b30000);
            color: white;
            border-color: #dc0000;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 0, 0, 0.3);
        }

        .option-btn.correct {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            border-color: #28a745;
            transform: scale(1.02);
        }

        .option-btn.incorrect {
            background: linear-gradient(135deg, #dc3545, #c82333);
            color: white;
            border-color: #dc3545;
        }

        .btn-quiz {
            background: linear-gradient(135deg, #dc0000, #b30000);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 14px 35px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-quiz::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .btn-quiz:hover::before {
            left: 100%;
        }

        .btn-quiz:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(220, 0, 0, 0.4);
        }

        .btn-quiz:disabled {
            background: #4a4a4f;
            transform: none;
            box-shadow: none;
            cursor: not-allowed;
            opacity: 0.7;
        }

        .btn-quiz-secondary {
            background: linear-gradient(135deg, #3a3a3f, #4a4a4f);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 14px 35px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-quiz-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(44, 62, 80, 0.4);
            background: linear-gradient(135deg, #4a4a4f, #5a5a5f);
        }

        .progress-bar-custom {
            background: linear-gradient(135deg, #dc0000, #b30000);
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }

        .progress-bar-custom::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: progressShine 2s infinite;
        }

        @keyframes progressShine {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        .score-display {
            font-size: 4rem;
            font-weight: bold;
            background: linear-gradient(135deg, #dc0000, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 20px 0;
        }

        .result-card {
            background: var(--f1-card-bg);
            border: 3px solid #28a745;
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(40, 167, 69, 0.2);
            color: var(--f1-text-primary);
        }

        .trophy {
            font-size: 5rem;
            color: #ffd700;
            margin-bottom: 25px;
            text-shadow: 0 4px 8px rgba(0,0,0,0.3);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .save-indicator {
            position: fixed;
            top: 30px;
            right: 30px;
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
            transform: translateX(100px);
        }

        .save-indicator.show {
            opacity: 1;
            transform: translateX(0);
        }

        .resume-info {
            background: linear-gradient(135deg, #2a2a3f, #3a3a4f);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 25px;
            border-left: 5px solid #dc0000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            color: var(--f1-text-primary);
        }

        .history-card {
            background: var(--f1-card-bg);
            border: 2px solid var(--f1-card-border);
            border-radius: 20px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            color: var(--f1-text-primary);
        }

        .history-item {
            background: linear-gradient(135deg, #2a2a2f, #1a1a1f);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 4px solid #dc0000;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
            color: var(--f1-text-primary);
        }

        .history-item:hover {
            transform: translateX(8px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
        }

        .history-score {
            font-size: 1.8rem;
            font-weight: bold;
            color: #dc0000;
            margin-bottom: 5px;
        }

        .history-date {
            color: var(--f1-text-secondary);
            font-size: 0.9rem;
        }

        .history-percentage {
            background: linear-gradient(135deg, #dc0000, #b30000);
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: bold;
            box-shadow: 0 3px 8px rgba(220, 0, 0, 0.3);
        }

        .no-history {
            text-align: center;
            padding: 50px 30px;
            color: var(--f1-text-secondary);
        }

        .history-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .tab-btn {
            background: none;
            border: 2px solid var(--f1-card-border);
            padding: 12px 25px;
            margin-right: 10px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--f1-text-secondary);
        }

        .tab-btn.active {
            background: linear-gradient(135deg, #dc0000, #b30000);
            color: white;
            border-color: #dc0000;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 0, 0, 0.3);
        }

        .tab-btn:hover:not(.active) {
            border-color: #dc0000;
            color: #dc0000;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .tab-content.active {
            display: block;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .quiz-stats {
            display: flex;
            justify-content: space-around;
            margin-top: 25px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .stat-box {
            text-align: center;
            padding: 20px;
            background: linear-gradient(135deg, #2a2a2f, #1a1a1f);
            border-radius: 12px;
            min-width: 120px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            color: var(--f1-text-primary);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #dc0000;
            margin-bottom: 5px;
        }

        .stat-label {
            color: var(--f1-text-secondary);
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Ajustes para textos específicos */
        .text-dark {
            color: var(--f1-text-primary) !important;
        }

        .text-muted {
            color: var(--f1-text-secondary) !important;
        }

        .display-4 {
            color: var(--f1-text-primary) !important;
        }

        .lead {
            color: var(--f1-text-secondary) !important;
        }

        .progress {
            background-color: #2a2a2f !important;
        }

        .card-body {
            background: var(--f1-card-bg);
        }
    </style>

    <div class="quiz-container">
        <!-- Indicador de Salvamento -->
        <div class="save-indicator" id="save-indicator">
            <i class="fas fa-check-circle me-2"></i>Progresso salvo com sucesso!
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Card do Quiz -->
                    <div class="quiz-card">
                        <!-- Header -->
                        <div class="quiz-header">
                            <h1 class="display-4 fw-bold mb-3">
                                <i class="fas fa-flag-checkered me-3"></i>
                                QUIZ FÓRMULA 1
                            </h1>
                            <p class="lead mb-0 fs-5">Teste seu conhecimento sobre o mundo da F1!</p>
                        </div>

                        <!-- Quiz Content -->
                        <div class="card-body p-5">
                            <!-- Informação de Continuação -->
                            <div id="resume-info" class="resume-info" style="display: none;">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-play-circle fa-2x text-success me-3"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1">CONTINUANDO QUIZ</h5>
                                        <p class="mb-0" id="resume-text">Você parou na questão X. Continue de onde parou!</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Progress -->
                            <div class="mb-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="fs-6 fw-500">Progresso do Quiz</span>
                                    <span class="fs-6 fw-500" id="progress-text">1/10</span>
                                </div>
                                <div class="progress" style="height: 12px; border-radius: 10px;">
                                    <div class="progress-bar progress-bar-custom" id="progress-bar" style="width: 10%"></div>
                                </div>
                            </div>

                            <!-- Question Area -->
                            <div id="question-area">
                                <div class="question-card">
                                    <h4 class="fw-bold mb-4" id="question-text">Qual piloto tem mais títulos mundiais na história da F1?</h4>
                                    
                                    <div class="options-container">
                                        <button class="option-btn" onclick="selectOption(this, 0)">A. Michael Schumacher</button>
                                        <button class="option-btn" onclick="selectOption(this, 1)">B. Lewis Hamilton</button>
                                        <button class="option-btn" onclick="selectOption(this, 2)">C. Ayrton Senna</button>
                                        <button class="option-btn" onclick="selectOption(this, 3)">D. Sebastian Vettel</button>
                                    </div>
                                </div>

                                <div class="action-buttons">
                                    <button class="btn btn-quiz" onclick="nextQuestion()" id="next-btn" disabled>
                                        <i class="fas fa-arrow-right me-2"></i>Próxima Pergunta
                                    </button>
                                    <button class="btn btn-quiz-secondary" onclick="saveProgress()">
                                        <i class="fas fa-save me-2"></i>Salvar e Sair
                                    </button>
                                </div>
                            </div>

                            <!-- Results Area -->
                            <div id="results-area" style="display: none;">
                                <div class="result-card">
                                    <div class="trophy">
                                        <i class="fas fa-trophy"></i>
                                    </div>
                                    <h2 class="fw-bold mb-3">Quiz Concluído!</h2>
                                    <div class="score-display" id="final-score">8/10</div>
                                    <p class="fs-5 mb-4" id="result-message">Excelente! Você é um verdadeiro fã da F1!</p>
                                    
                                    <div class="quiz-stats">
                                        <div class="stat-box">
                                            <div class="stat-number" id="correct-answers">8</div>
                                            <div class="stat-label">Acertos</div>
                                        </div>
                                        <div class="stat-box">
                                            <div class="stat-number" id="wrong-answers">2</div>
                                            <div class="stat-label">Erros</div>
                                        </div>
                                        <div class="stat-box">
                                            <div class="stat-number" id="percentage-score">80%</div>
                                            <div class="stat-label">Percentual</div>
                                        </div>
                                    </div>

                                    <div class="action-buttons mt-4">
                                        <button class="btn btn-quiz" onclick="restartQuiz()">
                                            <i class="fas fa-redo me-2"></i>Jogar Novamente
                                        </button>
                                        <button class="btn btn-quiz-secondary" onclick="saveFinalResult()">
                                            <i class="fas fa-download me-2"></i>Salvar Resultado
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card do Histórico -->
                    <div class="history-card">
                        <div class="history-header">
                            <h3 class="fw-bold mb-0">
                                <i class="fas fa-history me-2"></i>
                                MEU HISTÓRICO
                            </h3>
                            <div>
                                <button class="tab-btn active" onclick="showTab('quiz-tab')">
                                    <i class="fas fa-play-circle me-2"></i>Quiz Ativo
                                </button>
                                <button class="tab-btn" onclick="showTab('history-tab')">
                                    <i class="fas fa-chart-bar me-2"></i>Histórico
                                </button>
                            </div>
                        </div>

                        <!-- Tab do Quiz Ativo -->
                        <div id="quiz-tab" class="tab-content active">
                            <div class="resume-info">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-info-circle fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="fw-bold mb-2">COMO FUNCIONA</h5>
                                        <p class="mb-1">• Seu progresso é salvo automaticamente a cada resposta</p>
                                        <p class="mb-1">• Use "Salvar e Sair" para continuar depois</p>
                                        <p class="mb-0">• Ao finalizar, salve seu resultado no histórico</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab do Histórico -->
                        <div id="history-tab" class="tab-content">
                            <div id="history-list">
                                <!-- Histórico será carregado aqui -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('layouts.footer')
    
    <script>
        // Chave para salvar no localStorage
        const QUIZ_STORAGE_KEY = 'f1_quiz_progress';
        const QUIZ_RESULTS_KEY = 'f1_quiz_results';

        // Perguntas do quiz
        const questions = [
            {
                question: "Qual piloto tem mais títulos mundiais na história da F1?",
                options: ["Michael Schumacher", "Lewis Hamilton", "Ayrton Senna", "Sebastian Vettel"],
                correct: 1
            },
            {
                question: "Quantas equipes participam atualmente do grid da F1?",
                options: ["8 equipes", "10 equipes", "12 equipes", "14 equipes"],
                correct: 1
            },
            {
                question: "Qual circuito é conhecido como 'Templo da Velocidade'?",
                options: ["Monza", "Silverstone", "Monaco", "Spa-Francorchamps"],
                correct: 0
            },
            {
                question: "Em que ano Ayrton Senna conquistou seu primeiro título mundial?",
                options: ["1988", "1990", "1991", "1994"],
                correct: 0
            },
            {
                question: "Qual equipe tem mais títulos de construtores na história?",
                options: ["Ferrari", "Mercedes", "Williams", "McLaren"],
                correct: 0
            },
            {
                question: "Qual piloto brasileiro venceu o GP de Mônaco 6 vezes?",
                options: ["Nelson Piquet", "Emerson Fittipaldi", "Ayrton Senna", "Felipe Massa"],
                correct: 2
            },
            {
                question: "Quantas marchas tem um carro de F1 atualmente?",
                options: ["6 marchas", "8 marchas", "10 marchas", "12 marchas"],
                correct: 1
            },
            {
                question: "Qual é o circuito mais longo do calendário da F1?",
                options: ["Spa-Francorchamps", "Silverstone", "Circuit de Barcelona-Catalunya", "Suzuka"],
                correct: 0
            },
            {
                question: "Em que ano a F1 introduziu o sistema DRS?",
                options: ["2009", "2011", "2013", "2015"],
                correct: 1
            },
            {
                question: "Qual piloto detém o recorde de mais pole positions?",
                options: ["Michael Schumacher", "Lewis Hamilton", "Ayrton Senna", "Sebastian Vettel"],
                correct: 1
            }
        ];

        let currentQuestion = 0;
        let score = 0;
        let selectedOption = null;
        let userAnswers = Array(questions.length).fill(null);

        // Sistema de Tabs
        function showTab(tabName) {
            // Remove classe active de todas as tabs e botões
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            
            // Adiciona classe active na tab e botão selecionados
            document.getElementById(tabName).classList.add('active');
            event.target.classList.add('active');
            
            // Se for a tab de histórico, carrega o histórico
            if (tabName === 'history-tab') {
                loadHistory();
            }
        }

        // Carregar histórico
        function loadHistory() {
            const historyList = document.getElementById('history-list');
            const existingResults = JSON.parse(localStorage.getItem(QUIZ_RESULTS_KEY) || '[]');
            
            if (existingResults.length === 0) {
                historyList.innerHTML = `
                    <div class="no-history">
                        <i class="fas fa-clipboard-list fa-3x mb-3"></i>
                        <h5>Nenhum resultado salvo</h5>
                        <p>Complete o quiz para ver seu histórico aqui!</p>
                    </div>
                `;
                return;
            }
            
            // Ordena por data (mais recente primeiro)
            existingResults.sort((a, b) => new Date(b.date) - new Date(a.date));
            
            let historyHTML = '';
            existingResults.forEach((result, index) => {
                const resultClass = result.percentage >= 70 ? 'border-success' : 
                                  result.percentage >= 50 ? 'border-warning' : 'border-danger';
                
                historyHTML += `
                    <div class="history-item ${resultClass}">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="history-score">${result.score}/${result.total}</div>
                                <div class="history-date">
                                    <i class="fas fa-calendar me-1"></i>${result.date}
                                </div>
                            </div>
                            <div class="text-end">
                                <div class="history-percentage mb-2">${result.percentage}%</div>
                                <small>${getPerformanceMessage(result.percentage)}</small>
                            </div>
                        </div>
                        <div class="mt-2">
                            <small>
                                <i class="fas fa-clock me-1"></i>Realizado em ${result.date.split(' ')[1]}
                            </small>
                        </div>
                    </div>
                `;
            });
            
            historyList.innerHTML = historyHTML;
        }

        function getPerformanceMessage(percentage) {
            if (percentage >= 90) return '🏆 Lendário!';
            if (percentage >= 80) return '🎯 Expert!';
            if (percentage >= 70) return '🔥 Muito Bom!';
            if (percentage >= 60) return '👍 Bom!';
            if (percentage >= 50) return '💪 Na média';
            return '📚 Continue praticando!';
        }

        // Função para salvar progresso
        function saveProgress() {
            const progress = {
                currentQuestion: currentQuestion,
                score: score,
                userAnswers: userAnswers,
                timestamp: new Date().toISOString()
            };
            
            localStorage.setItem(QUIZ_STORAGE_KEY, JSON.stringify(progress));
            showSaveIndicator();
        }

        // Função para carregar progresso salvo
        function loadProgress() {
            const saved = localStorage.getItem(QUIZ_STORAGE_KEY);
            if (saved) {
                const progress = JSON.parse(saved);
                currentQuestion = progress.currentQuestion;
                score = progress.score;
                userAnswers = progress.userAnswers;
                
                // Mostra informação de continuação
                document.getElementById('resume-info').style.display = 'block';
                document.getElementById('resume-text').textContent = 
                    `Você parou na questão ${currentQuestion + 1} de ${questions.length}. Continue de onde parou!`;
                
                return true;
            }
            return false;
        }

        // Função para salvar resultado final
        function saveFinalResult() {
            const result = {
                score: score,
                total: questions.length,
                percentage: Math.round((score / questions.length) * 100),
                date: new Date().toLocaleString('pt-BR'),
                answers: userAnswers
            };

            // Salva no histórico de resultados
            const existingResults = JSON.parse(localStorage.getItem(QUIZ_RESULTS_KEY) || '[]');
            existingResults.push(result);
            localStorage.setItem(QUIZ_RESULTS_KEY, JSON.stringify(existingResults));

            // Remove progresso atual
            localStorage.removeItem(QUIZ_STORAGE_KEY);
            
            showSaveIndicator();
            
            // Atualiza o histórico imediatamente
            loadHistory();
            
            // Muda para a tab de histórico
            showTab('history-tab');
            
            alert('Resultado salvo com sucesso! Confira seu histórico abaixo.');
        }

        // Mostrar indicador de salvamento
        function showSaveIndicator() {
            const indicator = document.getElementById('save-indicator');
            indicator.classList.add('show');
            setTimeout(() => {
                indicator.classList.remove('show');
            }, 2000);
        }

        function selectOption(button, optionIndex) {
            // Remove seleção anterior
            const options = document.querySelectorAll('.option-btn');
            options.forEach(opt => {
                opt.classList.remove('selected');
            });

            // Seleciona nova opção
            button.classList.add('selected');
            selectedOption = optionIndex;
            document.getElementById('next-btn').disabled = false;

            // Salva a resposta do usuário
            userAnswers[currentQuestion] = optionIndex;
            
            // Salva automaticamente o progresso
            saveProgress();
        }

        function nextQuestion() {
            // Verifica resposta
            if (selectedOption === questions[currentQuestion].correct) {
                score++;
            }

            // Mostra feedback visual
            const options = document.querySelectorAll('.option-btn');
            options.forEach((opt, index) => {
                if (index === questions[currentQuestion].correct) {
                    opt.classList.add('correct');
                } else if (index === selectedOption && index !== questions[currentQuestion].correct) {
                    opt.classList.add('incorrect');
                }
                opt.disabled = true;
            });

            // Aguarda e vai para próxima pergunta
            setTimeout(() => {
                currentQuestion++;

                if (currentQuestion < questions.length) {
                    loadQuestion();
                    // Salva progresso automaticamente
                    saveProgress();
                } else {
                    showResults();
                    // Remove progresso quando termina
                    localStorage.removeItem(QUIZ_STORAGE_KEY);
                }
            }, 1500);
        }

        function loadQuestion() {
            const question = questions[currentQuestion];
            document.getElementById('question-text').textContent = question.question;
            
            const optionsContainer = document.querySelector('.options-container');
            optionsContainer.innerHTML = '';
            
            question.options.forEach((option, index) => {
                const button = document.createElement('button');
                button.className = 'option-btn';
                button.innerHTML = `${String.fromCharCode(65 + index)}. ${option}`;
                
                // Verifica se já havia uma resposta salva
                if (userAnswers[currentQuestion] === index) {
                    button.classList.add('selected');
                    selectedOption = index;
                    document.getElementById('next-btn').disabled = false;
                }
                
                button.onclick = () => selectOption(button, index);
                optionsContainer.appendChild(button);
            });

            // Atualiza progresso
            const progress = ((currentQuestion + 1) / questions.length) * 100;
            document.getElementById('progress-bar').style.width = `${progress}%`;
            document.getElementById('progress-text').textContent = `${currentQuestion + 1}/${questions.length}`;

            // Reseta seleção se não havia resposta salva
            if (userAnswers[currentQuestion] === null) {
                selectedOption = null;
                document.getElementById('next-btn').disabled = true;
            }
        }

        function showResults() {
            document.getElementById('question-area').style.display = 'none';
            document.getElementById('results-area').style.display = 'block';
            
            document.getElementById('final-score').textContent = `${score}/${questions.length}`;
            
            let message = '';
            if (score >= 9) {
                message = '🏆 Incrível! Você é um expert em F1!';
            } else if (score >= 7) {
                message = '🎯 Muito bom! Você conhece bem a F1!';
            } else if (score >= 5) {
                message = '👍 Bom conhecimento! Continue aprendendo!';
            } else {
                message = '📚 Hora de assistir mais corridas!';
            }
            document.getElementById('result-message').textContent = message;
        }

        function restartQuiz() {
            currentQuestion = 0;
            score = 0;
            selectedOption = null;
            userAnswers = Array(questions.length).fill(null);
            
            // Remove progresso salvo
            localStorage.removeItem(QUIZ_STORAGE_KEY);
            
            document.getElementById('resume-info').style.display = 'none';
            document.getElementById('question-area').style.display = 'block';
            document.getElementById('results-area').style.display = 'none';
            
            loadQuestion();
        }

        // Inicializa o quiz
        document.addEventListener('DOMContentLoaded', function() {
            // Tenta carregar progresso salvo
            if (!loadProgress()) {
                // Se não há progresso, inicia do zero
                currentQuestion = 0;
                score = 0;
                userAnswers = Array(questions.length).fill(null);
            }
            
            loadQuestion();
            // Carrega o histórico inicial
            loadHistory();
        });

        // Salva automaticamente quando o usuário sai da página
        window.addEventListener('beforeunload', function() {
            if (currentQuestion < questions.length) {
                saveProgress();
            }
        });
    </script>
</x-app-layout>