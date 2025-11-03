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

        .f1-table {
            width: 100%;
            background: var(--f1-card);
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
        }

        .f1-table th {
            background: linear-gradient(135deg, var(--f1-red) 0%, #9c0400 100%);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
        }

        .f1-table td {
            padding: 15px;
            border-bottom: 1px solid var(--f1-accent);
            background: rgba(255, 255, 255, 0.02);
        }

        .f1-table tr:hover td {
            background: rgba(255, 255, 255, 0.05);
        }

        .btn-editar {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            border: none;
            color: white;
            padding: 8px 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 6px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            font-size: 12px;
        }

        .btn-editar:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
            color: white;
            text-decoration: none;
        }

        .btn-deletar {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            border: none;
            color: white;
            padding: 8px 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 6px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            font-size: 12px;
        }

        .btn-deletar:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.4);
            color: white;
            text-decoration: none;
        }

        .btn-adicionar {
            border: none;
            color: white;
            padding: 8px 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 6px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            font-size: 12px;
        }

        .btn-adicionar:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
            color: white;
            text-decoration: none;
        }

        .btn-actions {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        /* Estilos para os Filtros */
        .filtros-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 25px;
        }

        .filtro-card {
            background: var(--f1-card);
            border: 1px solid var(--f1-accent);
            border-radius: 12px;
            padding: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .filtro-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
        }

        .filtro-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--f1-accent);
        }

        .filtro-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: white;
        }

        .icon-premio {
            background: linear-gradient(135deg, var(--f1-gold), #ffed4e);
        }

        .icon-equipe {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        }

        .filtro-title {
            color: var(--f1-gold);
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .filtro-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .form-label {
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-control-sm {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--f1-accent);
            color: white;
            padding: 10px 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .form-control-sm:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--f1-red);
            color: white;
            box-shadow: 0 0 0 0.2rem rgba(225, 6, 0, 0.25);
            outline: none;
        }

        .form-control-sm::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .btn-filtro {
            background: linear-gradient(135deg, var(--f1-red) 0%, #9c0400 100%);
            border: none;
            color: white;
            padding: 10px 20px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 12px;
            width: 100%;
        }

        .btn-filtro:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(225, 6, 0, 0.4);
            color: white;
        }

        /* Modal Styles */
        .modal-f1 {
            background: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            background: var(--f1-card);
            border: 1px solid var(--f1-accent);
            border-radius: 15px;
            color: white;
        }

        .modal-header {
            background: linear-gradient(135deg, var(--f1-red) 0%, #9c0400 100%);
            border-bottom: 2px solid var(--f1-gold);
            color: white;
        }

        .modal-footer {
            border-top: 1px solid var(--f1-accent);
        }

        .badge-piloto {
            background: linear-gradient(135deg, var(--f1-gold), #ffed4e);
            color: var(--f1-dark);
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .badge-equipe {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
        }

        /* Estilo para a linha de adicionar corrida */
        .add-corrida-row {
            background: rgba(255, 255, 255, 0.1) !important;
            border: 2px dashed rgba(255, 0, 0, 0.5);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .add-corrida-row:hover {
            background: rgba(255, 0, 0, 0.2) !important;
            border-color: #ffffff;
            transform: scale(1.05);        }

        .add-corrida-cell {
            text-align: center;
            vertical-align: middle;
        }

        .add-corrida-link {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: #a72828;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        

        .add-corrida-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #a72828, #c92620);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: white;
            transition: all 0.3s ease;
        }

        .add-corrida-link:hover .add-corrida-icon {
            background: linear-gradient(135deg, #c92020, #a72828);
        }

        @media (max-width: 768px) {
            .filtros-container {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .filtro-card {
                padding: 15px;
            }

            .filtro-header {
                gap: 10px;
            }

            .add-corrida-link {
                flex-direction: column;
                gap: 8px;
            }
        }
    </style>

    <body>
        <div class="container py-4">
            <!-- Tabela de Resultados -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="f1-card">
                        <div class="f1-card-header">
                            <h2>Resultados das Corridas</h2>
                        </div>
                        <br><br>
                        <!-- Filtros Estilizados -->
                        <div class="f1-card-body">
                            <div class="filtros-container">
                                <!-- Filtro por Grande Prêmio -->
                                <div class="filtro-card">
                                    <div class="filtro-header">
                                        <div class="filtro-icon icon-premio">
                                            <i class="fas fa-trophy"></i>
                                        </div>
                                        <div class="filtro-title">Filtrar por Grande Prêmio</div>
                                    </div>
                                    <form action="{{ route('mostra_corridas_filtro') }}" method="POST"
                                        class="filtro-form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="grande_premio" class="form-label">Nome do GP</label>
                                            <input type="text" class="form-control-sm" name="grande_premio"
                                                id="grande_premio" placeholder="Ex: Mônaco, Silverstone...">
                                        </div>
                                        <button type="submit" class="btn-filtro">
                                            <i class="fas fa-search me-1"></i>Buscar GP
                                        </button>
                                    </form>
                                </div>

                                <!-- Filtro por Equipe -->
                                <div class="filtro-card">
                                    <div class="filtro-header">
                                        <div class="filtro-icon icon-equipe">
                                            <i class="fas fa-car"></i>
                                        </div>
                                        <div class="filtro-title">Filtrar por Equipe</div>
                                    </div>
                                    <form action="{{ route('mostra_equipes_filtro') }}" method="POST"
                                        class="filtro-form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="equipe" class="form-label">Nome da Equipe</label>
                                            <input type="text" class="form-control-sm" name="equipe" id="equipe"
                                                placeholder="Ex: Ferrari, Mercedes...">
                                        </div>
                                        <button type="submit" class="btn-filtro">
                                            <i class="fas fa-search me-1"></i>Buscar Equipe
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="f1-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Grande Prêmio</th>
                                            <th>Ganhador</th>
                                            <th>Equipe</th>
                                            <th>Tempo</th>
                                            <th>Voltas</th>
                                            <th>Data</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($ganhadores as $ganhador)
                                            <tr>
                                                <td><strong>#{{ $ganhador->id }}</strong></td>
                                                <td>
                                                    <i class="fas fa-trophy me-2 text-warning"></i>
                                                    {{ $ganhador->premio }}
                                                </td>
                                                <td>
                                                    <span class="badge-piloto">
                                                        <i class="fas fa-user me-1"></i>
                                                        {{ $ganhador->ganhador }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge-equipe">
                                                        <i class="fas fa-car-side me-1"></i>
                                                        {{ $ganhador->equipe }}
                                                    </span>
                                                </td>
                                                <td>{{ $ganhador->tempo }}</td>
                                                <td>{{ $ganhador->voltas }} voltas</td>
                                                <td>{{ \Carbon\Carbon::parse($ganhador->data)->format('d/m/Y') }}</td>
                                                <td>
                                                    <div class="btn-actions">
                                                        <form action="{{ route('alterar_resultado', $ganhador->id) }}"
                                                            method="GET">
                                                            <button class="btn-editar">
                                                                <i class="fas fa-edit me-1"></i>Editar
                                                            </button>
                                                        </form>

                                                        <form action="{{ route('deleta_resultado', $ganhador->id) }}"
                                                            method="GET" style="display: inline;">
                                                            <button type="submit" class="btn-deletar">
                                                                <i class="fas fa-trash me-1"></i>Deletar
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    
                                        <!-- Linha para Adicionar Nova Corrida -->
                                        <tr class="add-corrida-row">
                                            <td colspan="8" class="add-corrida-cell">
                                                <a href="{{ route('resultado') }}" class="add-corrida-link">
                                                    <div class="add-corrida-icon">
                                                        <i class="fas fa-plus"></i>
                                                    </div>
                                                    <span>Adicionar Nova Corrida</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal de Edição -->
            <div class="modal fade modal-f1" id="modalEditar" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="fas fa-edit me-2"></i>Editar Resultado
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <form id="formEditar" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Grande Prêmio</label>
                                        <input type="text" name="premio" id="edit_premio" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Ganhador</label>
                                        <input type="text" name="ganhador" id="edit_ganhador" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Equipe</label>
                                        <input type="text" name="equipe" id="edit_equipe" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tempo</label>
                                        <input type="text" name="tempo" id="edit_tempo" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Voltas</label>
                                        <input type="number" name="voltas" id="edit_voltas" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Data</label>
                                        <input type="date" name="data" id="edit_data" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn-editar">
                                    <i class="fas fa-save me-2"></i>Salvar Alterações
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        @include('layouts.footer')
</x-app-layout>
