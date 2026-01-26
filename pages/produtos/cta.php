<!-- ====================== CTA SECTION (permanece escuro) ====================== -->
<section class="section-py" id="produtosCTA" style="background: #1f1814;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="fw-bold mb-4" style="color: #f5ede6; font-size: clamp(1.9rem, 5vw, 2.4rem);">
          Não Encontrou o Produto Ideal?
        </h2>
        <p class="mb-5" style="font-size: clamp(1rem, 3.5vw, 1.15rem); color: #d4c5b8; line-height: 1.7;">
          Podemos desenvolver uma solução à medida das suas necessidades.<br>
          Diga-nos o que precisa e a nossa equipa criará o sistema perfeito para si.
        </p>
        <div class="d-flex gap-3 gap-md-4 justify-content-center flex-wrap">
          <button type="button" class="btn-cta-primary" data-bs-toggle="modal" data-bs-target="#customProjectModal">
            <i class="ri-rocket-2-line me-2"></i>Criar Projeto Personalizado
          </button>
          <a href="tel:+258840000000" class="btn-cta-outline-light">
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
            <small class="text-muted-custom">Descreva a sua ideia e nós tornamo-la realidade</small>
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
              Tipo de Aplicação & Plataforma
            </h6>
            <div class="row g-4">
              <div class="col-md-6">
                <label class="form-label fw-semibold">O que pretende desenvolver?</label>
                <select class="form-select custom-input" name="tipo_aplicacao" required>
                  <option value="" selected disabled>Seleccione o tipo...</option>
                  <option value="web_app">Aplicação Web (SaaS)</option>
                  <option value="mobile_app">Aplicação Móvel (iOS/Android)</option>
                  <option value="desktop_software">Software Desktop</option>
                  <option value="e_commerce_complex">E-commerce Complexo</option>
                  <option value="portal_institucional">Portal Institucional Avançado</option>
                  <option value="outro">Outro (Especifique na descrição)</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Plataforma Principal</label>
                <div class="d-flex gap-3 flex-wrap mt-2">
                  <div class="form-check custom-option-check">
                    <input class="form-check-input d-none" type="checkbox" name="plataformas[]" value="web" id="platWeb">
                    <label class="form-check-label" for="platWeb"><i class="ri-global-line"></i> Web</label>
                  </div>
                  <div class="form-check custom-option-check">
                    <input class="form-check-input d-none" type="checkbox" name="plataformas[]" value="android" id="platAndroid">
                    <label class="form-check-label" for="platAndroid"><i class="ri-android-line"></i> Android</label>
                  </div>
                  <div class="form-check custom-option-check">
                    <input class="form-check-input d-none" type="checkbox" name="plataformas[]" value="ios" id="platIos">
                    <label class="form-check-label" for="platIos"><i class="ri-apple-line"></i> iOS</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Passo 2 -->
          <div class="form-section mb-5">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">02</span>
              Escala & Utilizadores
            </h6>
            <div class="row g-4">
              <div class="col-12 col-md-6">
                <label class="form-label fw-semibold">Número Estimado de Utilizadores</label>
                <select class="form-select custom-input" name="estimativa_users" required>
                  <option value="1-10">Até 10 utilizadores</option>
                  <option value="11-50">11 a 50 utilizadores</option>
                  <option value="51-200">51 a 200 utilizadores</option>
                  <option value="201-1000">201 a 1000 utilizadores</option>
                  <option value="1000+">Mais de 1000 utilizadores</option>
                </select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label fw-semibold">Prazo Desejado</label>
                <select class="form-select custom-input" name="prazo_estimado">
                  <option value="urgente">Urgente (Menos de 1 mês)</option>
                  <option value="1-3_meses">1 a 3 meses</option>
                  <option value="3-6_meses">3 a 6 meses</option>
                  <option value="flexivel">Flexível</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Passo 3 -->
          <div class="form-section mb-5">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">03</span>
              Funcionalidades & Cenário de Uso
            </h6>

            <div class="mb-4">
              <label class="form-label fw-semibold">Funcionalidades Comuns Necessárias</label>
              <div class="row g-3">
                <!-- ... os checkboxes mantidos iguais ... -->
                <div class="col-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="funcionalidades[]" value="auth" id="func1">
                    <label class="form-check-label" for="func1">Login/Autenticação</label>
                  </div>
                </div>
                <!-- repetir para os outros ... -->
              </div>
            </div>

            <div class="mb-4">
              <label class="form-label fw-semibold">Cenário de Uso e Fluxo do Sistema</label>
              <textarea class="form-control custom-input" name="cenario_uso" rows="4" placeholder="Ex: O gestor entra no sistema..." required></textarea>
            </div>

            <div class="mb-4">
              <label class="form-label fw-semibold">Funcionalidades Específicas & Personalizadas</label>
              <textarea class="form-control custom-input" name="funcionalidades_custom" rows="3" placeholder="Ex: Integração com balanças..."></textarea>
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
<div class="modal-footer p-4 border-0 custom-modal-footer">
          <button type="button" class="btn btn-link text-muted-custom text-decoration-none fw-semibold" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn-submit-modal" id="btnSubmitCustomProject">
            <span class="spinner-border spinner-border-sm d-none me-2" role="status" aria-hidden="true"></span>
            <i class="ri-send-plane-fill me-2"></i>Enviar Requisitos
          </button>
        </div>
          
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
  padding: 2.5rem 2rem !important;   /* mais ar respirável */
}

@media (max-width: 576px) {
  .modal-body {
    padding: 1.8rem 1.25rem !important;
  }
}

.form-section {
  margin-bottom: 2.75rem !important;  /* mais espaço entre seções */
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
