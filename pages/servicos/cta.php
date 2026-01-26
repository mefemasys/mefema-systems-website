<!-- ====================== CTA SECTION (permanece escuro) ====================== -->
<section class="section-py" id="produtosCTA" style="background: #1f1814;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="fw-bold mb-4" style="color: #f5ede6; font-size: clamp(1.9rem, 5vw, 2.4rem);">
          Precisa de um Serviço Personalizado?
        </h2>
        <p class="mb-5" style="font-size: clamp(1rem, 3.5vw, 1.15rem); color: #d4c5b8; line-height: 1.7;">
          Não encontrou exactamente o que procura?<br>
          Entre em contacto connosco e criaremos uma solução tecnológica à medida das suas necessidades — seja em desenvolvimento de software, infraestrutura, consultoria digital ou formação corporativa.
        </p>
        <div class="d-flex gap-3 gap-md-4 justify-content-center flex-wrap">
          <button type="button" class="btn-cta-primary" data-bs-toggle="modal" data-bs-target="#customProjectModal">
            <i class="ri-rocket-2-line me-2"></i>Solicitar Solução Personalizada
          </button>
          <a href="tel:+258861924050" class="btn-cta-outline-light">
            <i class="ri-phone-line me-2"></i>Ligar Agora
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================== MODAL ====================== -->
<div class="modal fade" id="customProjectModal" tabindex="-1" aria-labelledby="customProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border-0 shadow-lg custom-modal-theme">
      <div class="modal-header py-4 custom-modal-header">
        <div class="d-flex align-items-center">
          <div class="icon-box-modal me-3">
            <i class="ri-lightbulb-flash-line"></i>
          </div>
          <div>
            <h5 class="modal-title fw-bold mb-0" id="customProjectModalLabel">Recolha de Requisitos</h5>
            <small class="text-muted-custom">Descreva a sua necessidade e criamos a solução ideal para o seu negócio</small>
          </div>
        </div>
        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="customProjectForm">
        <div class="modal-body p-4 p-md-5" style="max-height: 75vh; overflow-y: auto;">
          <!-- Passo 1 -->
          <div class="form-section mb-5">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">01</span>
              Tipo de Serviço & Área Principal
            </h6>
            <div class="row g-4">
              <div class="col-md-6">
                <label class="form-label fw-semibold">Qual serviço mais se aproxima da sua necessidade?</label>
                <select class="form-select custom-input" name="tipo_servico" required>
                  <option value="" selected disabled>Seleccione o tipo...</option>
                  <option value="desenvolvimento_software">Desenvolvimento de Software</option>
                  <option value="infraestrutura_manutencao">Infraestrutura e Manutenção TI</option>
                  <option value="consultoria_digital">Consultoria Digital</option>
                  <option value="formacao_corporativa">Formação Corporativa</option>
                  <option value="outro">Outro / Solução Combinada (especifique abaixo)</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Área / Plataforma de Maior Interesse</label>
                <div class="d-flex gap-3 flex-wrap mt-2">
                  <div class="form-check custom-option-check">
                    <input class="form-check-input d-none" type="checkbox" name="plataformas[]" value="web" id="platWeb">
                    <label class="form-check-label" for="platWeb"><i class="ri-global-line"></i> Web</label>
                  </div>
                  <div class="form-check custom-option-check">
                    <input class="form-check-input d-none" type="checkbox" name="plataformas[]" value="mobile" id="platMobile">
                    <label class="form-check-label" for="platMobile"><i class="ri-smartphone-line"></i> Mobile</label>
                  </div>
                  <div class="form-check custom-option-check">
                    <input class="form-check-input d-none" type="checkbox" name="plataformas[]" value="cloud" id="platCloud">
                    <label class="form-check-label" for="platCloud"><i class="ri-cloud-line"></i> Cloud</label>
                  </div>
                  <div class="form-check custom-option-check">
                    <input class="form-check-input d-none" type="checkbox" name="plataformas[]" value="outros" id="platOutros">
                    <label class="form-check-label" for="platOutros"><i class="ri-more-line"></i> Outros</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Passo 2 -->
          <div class="form-section mb-5">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">02</span>
              Escala & Urgência
            </h6>
            <div class="row g-4">
              <div class="col-12 col-md-6">
                <label class="form-label fw-semibold">Tamanho Estimado do Projeto / Empresa</label>
                <select class="form-select custom-input" name="escala_empresa" required>
                  <option value="pequena">Pequena (até 20 colaboradores)</option>
                  <option value="media">Média (21–100 colaboradores)</option>
                  <option value="grande">Grande (101+ colaboradores)</option>
                  <option value="especifico">Específico por utilizadores/sistema (especifique abaixo)</option>
                </select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label fw-semibold">Prazo Desejado</label>
                <select class="form-select custom-input" name="prazo_estimado">
                  <option value="urgente">Urgente (Menos de 1 mês)</option>
                  <option value="1-3_meses">1 a 3 meses</option>
                  <option value="3-6_meses">3 a 6 meses</option>
                  <option value="flexivel">Flexível / Sem pressa</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Passo 3 -->
          <div class="form-section mb-5">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">03</span>
              Objetivo & Descrição da Necessidade
            </h6>
            <div class="mb-4">
              <label class="form-label fw-semibold">Principais Objetivos / Problemas a Resolver</label>
              <textarea class="form-control custom-input" name="objetivos_problemas" rows="4" placeholder="Ex: Melhorar a gestão de stock, integrar pagamentos M-Pesa, treinar equipa em cibersegurança..." required></textarea>
            </div>
            <div class="mb-4">
              <label class="form-label fw-semibold">Funcionalidades ou Aspectos Mais Importantes</label>
              <textarea class="form-control custom-input" name="funcionalidades_custom" rows="4" placeholder="Ex: Integração com sistema legado, app móvel para vendedores, dashboard de indicadores, formação em ERP..."></textarea>
            </div>
            <div class="mb-4">
              <label class="form-label fw-semibold">Outras Informações Relevantes</label>
              <textarea class="form-control custom-input" name="outras_info" rows="3" placeholder="Orçamento aproximado, tecnologias preferidas, prazo crítico, etc."></textarea>
            </div>
          </div>

          <!-- Passo 4 -->
          <div class="form-section mb-4">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">04</span>
              Informações de Contacto
            </h6>
            <div class="row g-4">
              <div class="col-md-6">
                <label class="form-label fw-semibold">Nome Completo</label>
                <input type="text" class="form-control custom-input" name="nome_contacto" required>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Email Profissional</label>
                <input type="email" class="form-control custom-input" name="email_contacto" required>
              </div>
              <div class="col-12">
                <label class="form-label fw-semibold">Telefone / WhatsApp</label>
                <input type="tel" class="form-control custom-input" name="telefone_contacto" required>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer p-4 border-0 custom-modal-footer">
          <button type="button" class="btn btn-link text-muted-custom text-decoration-none fw-semibold" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn-submit-modal" id="btnSubmitCustomProject">
            <span class="spinner-border spinner-border-sm d-none me-2" role="status" aria-hidden="true"></span>
            <i class="ri-send-plane-fill me-2"></i>Enviar Requisitos
          </button>
        </div>
      </form>
    </div>
  </div>
</div>



<style>
  /* ========================================
   BOTÕES - CTA PRINCIPAL (mantém tema escuro)
   ======================================== */
.btn-cta-primary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.75rem;
  padding: 1rem 2.5rem;
  font-size: 1.1rem;
  font-weight: 700;
  background: linear-gradient(135deg, #e08544, #c66b3d);
  color: white !important;
  border: none;
  border-radius: 8px;
  box-shadow: 0 6px 20px rgba(224, 133, 68, 0.3);
  transition: all 0.35s ease;
}
.btn-cta-primary:hover {
  background: linear-gradient(135deg, #c66b3d, #b85f30);
  transform: translateY(-3px);
  box-shadow: 0 12px 28px rgba(224, 133, 68, 0.4);
  color: white !important;
}
.btn-cta-outline-light {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.75rem;
  padding: 1rem 2.5rem;
  font-size: 1.1rem;
  font-weight: 700;
  background: transparent;
  color: #f5ede6 !important;
  border: 2px solid #f5ede6;
  border-radius: 8px;
  transition: all 0.35s ease;
}
.btn-cta-outline-light:hover {
  background: rgba(245, 237, 230, 0.12);
  color: #f5ede6 !important;
  border-color: #f5ede6;
  transform: translateY(-3px);
}
/* ========================================
   BOTÃO DE SUBMIT DO MODAL
   ======================================== */
.btn-submit-modal {
  display: inline-flex;
  align-items: center;
  gap: 0.7rem;
  padding: 0.95rem 2.4rem;
  font-size: 1.05rem;
  font-weight: 700;
  background: linear-gradient(135deg, #e08544, #d97638);
  color: white;
  border: none;
  border-radius: 8px;
  box-shadow: 0 5px 18px rgba(224, 133, 68, 0.25);
  transition: all 0.3s ease;
}
.btn-submit-modal:hover {
  background: linear-gradient(135deg, #d97638, #c66b3d);
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(224, 133, 68, 0.35);
}
.btn-submit-modal:disabled {
  opacity: 0.7;
  transform: none;
  box-shadow: none;
  cursor: not-allowed;
}
/* ========================================
   MELHORIAS NO FORMULÁRIO - espaçamento
   ======================================== */
.modal-body {
  padding: 2.5rem 2rem !important; /* mais ar respirável */
}
@media (max-width: 576px) {
  .modal-body {
    padding: 1.8rem 1.25rem !important;
  }
}
.form-section {
  margin-bottom: 2.75rem !important; /* mais espaço entre seções */
}
.form-section:last-child {
  margin-bottom: 1.5rem !important;
}
.form-label {
  margin-bottom: 0.65rem !important;
  font-size: 0.98rem;
}
.form-control.custom-input,
.form-select.custom-input {
  padding: 0.8rem 1.1rem !important;
  font-size: 1rem;
  border-radius: 8px !important;
  margin-bottom: 1.1rem !important;
}
.custom-option-check label {
  padding: 0.8rem 1.3rem;
  border-radius: 8px;
  font-size: 0.97rem;
}
/* Espaçamento extra nos grupos de checkboxes */
.row.g-3 > div {
  margin-bottom: 0.6rem;
}
/* Footer do modal com mais equilíbrio */
.modal-footer {
  padding: 1.5rem 2rem !important;
  gap: 1.2rem;
}
.modal-footer .btn {
  padding: 0.8rem 1.8rem;
  font-size: 1rem;
}
/* Garantir que o botão submit fique bem destacado */
.modal-footer .btn-submit-modal {
  min-width: 220px;
}
</style>
