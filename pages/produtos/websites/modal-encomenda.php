<!-- Modal de Encomenda -->
<div class="modal fade" id="orderModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Formulário de Encomenda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="orderForm">
                <div class="modal-body">
                    <input type="hidden" id="orderWebsiteId" name="website_id">
                    <div class="mb-3">
                        <label class="form-label">Pacote Seleccionado</label>
                        <input type="text" class="form-control" id="orderWebsiteName" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="clientName" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="clientName" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="clientEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="clientEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="clientPhone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" id="clientPhone" name="telefone" required>
                    </div>
                    <div class="mb-3">
                        <label for="orderNotes" class="form-label">Notas Adicionais</label>
                        <textarea class="form-control" id="orderNotes" name="notas" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" id="btnSubmitOrder">
                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        Confirmar Encomenda
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
