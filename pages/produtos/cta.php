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
   ESTILOS DO CTA (FUNDO ESCURO - mantido)
   ======================================== */
#produtosCTA {
  padding: 100px 0 120px;
  text-align: center;
}

.btn-cta-primary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.8rem;
  padding: 1.15rem 2.8rem;
  font-size: 1.15rem;
  font-weight: 700;
  background: linear-gradient(135deg, #d97638, #c66b3d);
  color: white !important;
  border: none;
  border-radius: 8px;
  box-shadow: 0 6px 20px rgba(217, 118, 56, 0.3);
  transition: all 0.35s ease;
}

.btn-cta-primary:hover {
  background: linear-gradient(135deg, #c66b3d, #b85f30);
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(217, 118, 56, 0.45);
}

.btn-cta-outline-light {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.8rem;
  padding: 1.15rem 2.8rem;
  font-size: 1.15rem;
  font-weight: 700;
  background: transparent;
  color: #f5ede6 !important;
  border: 2px solid #f5ede6;
  border-radius: 8px;
  transition: all 0.35s ease;
}

.btn-cta-outline-light:hover {
  background: #f5ede6;
  color: #1f1814 !important;
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(245, 237, 230, 0.25);
}

/* ========================================
   ESTILOS DO MODAL E FORMULÁRIO
   ======================================== */

/* Tema base (light) */
.custom-modal-theme {
  background-color: var(--bs-modal-bg, #ffffff);
  color: var(--bs-body-color, #2d3436);
  border-radius: 12px;
  overflow: hidden;
}

.custom-modal-header {
  background-color: var(--bs-modal-header-bg, #f8f9fa);
  border-bottom: 1px solid var(--bs-border-color, #e9ecef);
  padding: 1.5rem 2rem;
}

.custom-modal-footer {
  background-color: var(--bs-modal-footer-bg, #f8f9fa);
  border-top: 1px solid var(--bs-border-color, #e9ecef);
  padding: 1.25rem 2rem;
}

/* Botão de submit */
.btn-submit-modal {
  display: inline-flex;
  align-items: center;
  gap: 0.6rem;
  padding: 0.95rem 2.4rem;
  font-size: 1.05rem;
  font-weight: 700;
  background: #d97638;
  color: white;
  border: none;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(217, 118, 56, 0.25);
  transition: all 0.3s ease;
}

.btn-submit-modal:hover {
  background: #c66b3d;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(217, 118, 56, 0.35);
}

.btn-submit-modal:disabled {
  background: #b8a08a;
  cursor: not-allowed;
  transform: none;
  box-shadow: none;
}

/* Inputs, selects e textareas – sem cores fixas, respeita tema */
.custom-input,
.form-select.custom-input,
.form-control.custom-input {
  background-color: var(--bs-body-bg, #ffffff);
  color: var(--bs-body-color, #212529);
  border: 1px solid var(--bs-border-color, #ced4da);
  border-radius: 8px;
  padding: 0.75rem 1.1rem;
  font-size: 1rem;
  transition: border-color 0.25s ease, box-shadow 0.25s ease;
}

.custom-input:focus,
.form-select.custom-input:focus,
.form-control.custom-input:focus {
  border-color: #d97638;
  box-shadow: 0 0 0 0.25rem rgba(217, 118, 56, 0.15);
  background-color: var(--bs-body-bg, #ffffff);
}

.custom-input::placeholder {
  color: #adb5bd;
}

/* Mais espaçamento no formulário */
.form-section {
  margin-bottom: 2.5rem;
}

.section-title-modal {
  display: flex;
  align-items: center;
  gap: 0.9rem;
  color: var(--bs-heading-color, #1f1814);
  font-weight: 700;
  text-transform: uppercase;
  font-size: 0.95rem;
  letter-spacing: 0.8px;
  margin-bottom: 1.5rem;
}

.step-number {
  background: #d97638;
  color: white;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.85rem;
  font-weight: 600;
}

/* Checkbox customizado */
.custom-option-check label {
  padding: 0.75rem 1.25rem;
  border: 1px solid var(--bs-border-color, #dee2e6);
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.25s ease;
  display: flex;
  align-items: center;
  gap: 0.6rem;
  font-weight: 600;
  color: var(--bs-body-color, #495057);
  background-color: transparent;
}

.custom-option-check input:checked + label {
  border-color: #d97638;
  background-color: rgba(217, 118, 56, 0.08);
  color: #d97638;
}

/* Dark mode */
@media (prefers-color-scheme: dark) {
  .custom-modal-theme {
    background-color: #1f1814;
    color: #f5ede6;
  }
  .custom-modal-header,
  .custom-modal-footer {
    background-color: #140f0c;
    border-color: #3d3028;
  }
  .section-title-modal {
    color: #f5ede6;
  }
  .custom-input,
  .form-select.custom-input,
  .form-control.custom-input {
    background-color: #2d241e;
    border-color: #3d3028;
    color: #f5ede6;
  }
  .custom-input::placeholder {
    color: #8a7a6e;
  }
  .custom-option-check label {
    border-color: #3d3028;
    color: #d4c5b8;
    background-color: transparent;
  }
  .custom-option-check input:checked + label {
    background-color: rgba(217, 118, 56, 0.12);
  }
  .text-muted-custom {
    color: #d4c5b8 !important;
  }
}

/* Responsividade extra */
@media (max-width: 576px) {
  .modal-body {
    padding: 1.5rem 1.25rem !important;
  }
  .btn-cta-primary,
  .btn-cta-outline-light,
  .btn-submit-modal {
    padding: 0.95rem 2rem;
    font-size: 1rem;
  }
  .form-section {
    margin-bottom: 2rem;
  }
}
</style>
