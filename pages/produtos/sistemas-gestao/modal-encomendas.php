<!-- Modal de Aquisição (Complexo) -->
<div class="modal fade" id="acquireModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Configurar Aquisição do Sistema</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="acquireForm">
                <div class="modal-body">
                    <input type="hidden" id="acquireSistemaId" name="sistema_id">
                    
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="p-3 bg-light rounded border">
                                <h6 class="mb-1 fw-bold">Sistema Seleccionado:</h6>
                                <p id="acquireSistemaName" class="mb-0 text-primary fw-bold"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Tipo de Aquisição -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Modelo de Aquisição</label>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="acquisition-option">
                                    <input type="radio" name="tipo_aquisicao" id="typeSubscription" value="subscricao" checked>
                                    <label for="typeSubscription" class="option-card">
                                        <i class="ri-calendar-check-line"></i>
                                        <div class="option-info">
                                            <span class="option-title">Subscrição Mensal</span>
                                            <span class="option-desc">Pagamento recorrente com suporte e updates incluídos.</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="acquisition-option">
                                    <input type="radio" name="tipo_aquisicao" id="typeDedicated" value="dedicado">
                                    <label for="typeDedicated" class="option-card">
                                        <i class="ri-server-line"></i>
                                        <div class="option-info">
                                            <span class="option-title">Servidor Dedicado</span>
                                            <span class="option-desc">Licença vitalícia instalada na sua infraestrutura.</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Personalizações -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Personalizações e Extras</label>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-check custom-check">
                                    <input class="form-check-input" type="checkbox" name="extras[]" value="treinamento" id="extra1">
                                    <label class="form-check-label" for="extra1">Treinamento de Equipa</label>
                                </div>
                                <div class="form-check custom-check">
                                    <input class="form-check-input" type="checkbox" name="extras[]" value="migracao" id="extra2">
                                    <label class="form-check-label" for="extra2">Migração de Dados</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check custom-check">
                                    <input class="form-check-input" type="checkbox" name="extras[]" value="suporte_247" id="extra3">
                                    <label class="form-check-label" for="extra3">Suporte 24/7 Prioritário</label>
                                </div>
                                <div class="form-check custom-check">
                                    <input class="form-check-input" type="checkbox" name="extras[]" value="api_custom" id="extra4">
                                    <label class="form-check-label" for="extra4">Integração API Customizada</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dados do Cliente -->
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nome da Empresa/Cliente</label>
                            <input type="text" class="form-control" name="cliente_nome" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email Profissional</label>
                            <input type="email" class="form-control" name="cliente_email" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="cliente_telefone" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Número de Utilizadores Estimado</label>
                            <select class="form-select" name="utilizadores">
                                <option value="1-5">1 a 5 utilizadores</option>
                                <option value="6-20">6 a 20 utilizadores</option>
                                <option value="21-50">21 a 50 utilizadores</option>
                                <option value="50+">Mais de 50 utilizadores</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" id="btnSubmitAcquire">
                        <span class="spinner-border spinner-border-sm d-none" role="status"></span>
                        Solicitar Proposta de Aquisição
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>