<section class="section-py border-top border-bottom" id="produtosCTA">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="fw-bold mb-4" style="font-size: 2.4rem;">
          Não Encontrou o Produto Ideal?
        </h2>
        <p class="mb-5 opacity-75" style="font-size: 1.15rem; line-height: 1.7;">
          Podemos desenvolver uma solução à medida das suas necessidades.<br>
          Diga-nos o que precisa e a nossa equipa criará o sistema perfeito para si.
        </p>
        <div class="d-flex gap-4 justify-content-center flex-wrap">
          <button type="button" class="btn-cta-primary" data-bs-toggle="modal" data-bs-target="#customProjectModal">
            <i class="ri-rocket-2-line me-2"></i>Criar Projeto Personalizado
          </button>
          <a href="tel:+258840000000" class="btn btn-outline-secondary px-5 py-3 fw-bold">
            <i class="ri-phone-line me-2"></i>Ligar Agora
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="customProjectModal" tabindex="-1" aria-labelledby="customProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border-0 shadow-lg">
      <div class="modal-header py-4 border-bottom">
        <div class="d-flex align-items-center">
          <div class="icon-box-modal me-3">
            <i class="ri-lightbulb-flash-line"></i>
          </div>
          <div>
            <h5 class="modal-title fw-bold mb-0" id="customProjectModalLabel">Recolha de Requisitos</h5>
            <small class="text-muted">Descreva a sua ideia e nós tornamo-la realidade</small>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form id="customProjectForm">
        <div class="modal-body p-4 p-md-5">
          
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
                    <label class="form-check-label" for="platWeb">
                      <i class="ri-global-line"></i> Web
                    </label>
                  </div>
                  <div class="form-check custom-option-check">
                    <input class="form-check-input d-none" type="checkbox" name="plataformas[]" value="android" id="platAndroid">
                    <label class="form-check-label" for="platAndroid">
                      <i class="ri-android-line"></i> Android
                    </label>
                  </div>
                  <div class="form-check custom-option-check">
                    <input class="form-check-input d-none" type="checkbox" name="plataformas[]" value="ios" id="platIos">
                    <label class="form-check-label" for="platIos">
                      <i class="ri-apple-line"></i> iOS
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-section mb-5">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">02</span>
              Cenário de Uso & Detalhes
            </h6>
            
            <div class="mb-4">
              <label class="form-label fw-semibold">Descreva o seu Cenário de Uso</label>
              <p class="text-muted small mb-2">Este campo é fundamental para entendermos como o sistema funcionará no seu dia-a-dia.</p>
              <textarea 
                class="form-control custom-input" 
                name="cenario_uso" 
                rows="5" 
                placeholder="Ex: No meu negócio, o cliente faz um pedido via tablet, a cozinha recebe um alerta sonoro e o gestor visualiza o lucro em tempo real no dashboard..." 
                required></textarea>
            </div>

            <div class="mb-0">
              <label class="form-label fw-semibold">Funcionalidades Específicas</label>
              <textarea class="form-control custom-input" name="funcionalidades_custom" rows="3" placeholder="Ex: Integração com balanças industriais, API de logística..."></textarea>
            </div>
          </div>

          <div class="form-section">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">03</span>
              Contacto
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
            </div>
          </div>

        </div>
        <div class="modal-footer p-4 border-top">
          <button type="button" class="btn btn-link text-decoration-none fw-semibold" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn-submit-modal" id="btnSubmitCustomProject">
            <span class="spinner-border spinner-border-sm d-none me-2" role="status"></span>
            <i class="ri-send-plane-fill me-2"></i>Enviar Proposta
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  /* ========================================
     AJUSTES DE CORES DINÂMICAS (LIGHT/DARK)
     ======================================== */
  
  /* Faz o modal e inputs herdarem as cores do tema do Bootstrap/Sistema */
  .modal-content {
    background-color: var(--bs-body-bg);
    color: var(--bs-body-color);
  }

  .modal-header, .modal-footer {
    background-color: rgba(0,0,0,0.03); /* Leve destaque independente da cor */
  }

  /* Estilização dos Inputs sem cores fixas */
  .custom-input {
    background-color: var(--bs-tertiary-bg) !important;
    color: var(--bs-body-color) !important;
    border: 1px solid var(--bs-border-color) !important;
    border-radius: 6px !important;
    padding: 0.75rem 1rem !important;
  }

  .custom-input:focus {
    border-color: #d97638 !important;
    box-shadow: 0 0 0 4px rgba(217, 118, 56, 0.1) !important;
    background-color: var(--bs-body-bg) !important;
  }

  /* Botão Principal mantém a identidade visual */
  .btn-cta-primary, .btn-submit-modal {
    background: #d97638;
    color: white !important;
    border: none;
    padding: 1rem 2.5rem;
    border-radius: 6px;
    font-weight: 700;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
  }

  .btn-cta-primary:hover, .btn-submit-modal:hover {
    background: #c66b3d;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(217, 118, 56, 0.3);
  }

  /* Checkboxes estilizados que se adaptam */
  .custom-option-check label {
    padding: 10px 20px;
    border: 1px solid var(--bs-border-color);
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 600;
    color: var(--bs-body-color);
  }

  .custom-option-check input:checked + label {
    border-color: #d97638;
    background: rgba(217, 118, 56, 0.1);
    color: #d97638;
  }

  .icon-box-modal {
    width: 45px;
    height: 45px;
    border-radius: 8px;
    background: #d97638;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
  }

  .step-number {
    background: #d97638;
    color: white;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
  }

  .section-title-modal {
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 1px;
    color: #d97638;
  }
</style>
