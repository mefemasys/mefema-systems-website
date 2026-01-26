<section class="section-py bg-dark text-white" id="produtosCTA" data-bs-theme="dark" style="padding: 100px 0;">
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
        <div class="d-flex gap-3 justify-content-center flex-wrap">
          <button type="button" class="btn btn-primary btn-lg px-5 py-3 fw-bold" data-bs-toggle="modal" data-bs-target="#customProjectModal">
            <i class="ri-rocket-2-line me-2"></i>Criar Projeto Personalizado
          </button>
          <a href="tel:+258840000000" class="btn btn-outline-light btn-lg px-5 py-3 fw-bold">
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
                <div class="d-flex gap-2 flex-wrap mt-1">
                  <input type="checkbox" class="btn-check" name="plataformas[]" value="web" id="platWeb" autocomplete="off">
                  <label class="btn btn-outline-secondary btn-sm" for="platWeb"><i class="ri-global-line"></i> Web</label>

                  <input type="checkbox" class="btn-check" name="plataformas[]" value="android" id="platAndroid" autocomplete="off">
                  <label class="btn btn-outline-secondary btn-sm" for="platAndroid"><i class="ri-android-line"></i> Android</label>

                  <input type="checkbox" class="btn-check" name="plataformas[]" value="ios" id="platIos" autocomplete="off">
                  <label class="btn btn-outline-secondary btn-sm" for="platIos"><i class="ri-apple-line"></i> iOS</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-section mb-5">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">02</span>
              Escala & Utilizadores
            </h6>
            <div class="row g-4">
              <div class="col-md-6">
                <label class="form-label fw-semibold">Número Estimado de Utilizadores</label>
                <select class="form-select custom-input" name="estimativa_users" required>
                  <option value="1-10">Até 10 utilizadores</option>
                  <option value="11-50">11 a 50 utilizadores</option>
                  <option value="51-200">51 a 200 utilizadores</option>
                  <option value="1000+">Mais de 1000 utilizadores</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Prazo Desejado</label>
                <select class="form-select custom-input" name="prazo_estimado">
                  <option value="1-3_meses">1 a 3 meses</option>
                  <option value="flexivel">Flexível</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-section">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">03</span>
              Cenário de Uso e Fluxo
            </h6>
            <div class="mb-4">
              <label class="form-label fw-bold text-primary">Descreva o Cenário de Uso</label>
              <p class="text-muted small mb-2">Conte-nos o "dia-a-dia" do sistema: quem usa, onde usa e qual o objetivo principal.</p>
              <textarea class="form-control custom-input" name="cenario_uso" rows="5" 
                placeholder="Ex: O cliente faz o pedido no tablet, a cozinha recebe um alerta sonoro, e o gestor vê o relatório financeiro no final do dia..." required></textarea>
            </div>
          </div>

          <div class="form-section mt-5">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">04</span>
              Informações de Contacto
            </h6>
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" class="form-control custom-input" name="nome_contacto" placeholder="Nome Completo" required>
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control custom-input" name="email_contacto" placeholder="Email Profissional" required>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer p-4 border-top">
          <button type="button" class="btn btn-link text-decoration-none fw-semibold" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary px-5 py-2 fw-bold" id="btnSubmitCustomProject">
            <span class="spinner-border spinner-border-sm d-none me-2" role="status"></span>
            Enviar Requisitos
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  /* Variáveis e Adaptação Automática */
  :root {
    --primary-color: #d97638;
  }

  /* Estilos do Modal que respeitam o tema (Light/Dark) */
  .modal-content {
    background-color: var(--bs-modal-bg);
    color: var(--bs-modal-color);
  }

  .icon-box-modal {
    width: 45px;
    height: 45px;
    border-radius: 8px;
    background: var(--primary-color);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
  }

  .step-number {
    background: var(--primary-color);
    color: white;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    font-weight: bold;
  }

  .section-title-modal {
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 1px;
    color: var(--primary-color);
  }

  /* Inputs Adaptáveis */
  .custom-input {
    background-color: var(--bs-body-bg) !important;
    color: var(--bs-body-color) !important;
    border: 1px solid var(--bs-border-color) !important;
    transition: border-color 0.2s, box-shadow 0.2s;
  }

  .custom-input:focus {
    border-color: var(--primary-color) !important;
    box-shadow: 0 0 0 0.25rem rgba(217, 118, 56, 0.25) !important;
  }

  /* Custom Checkboxes estilo Botão */
  .btn-check:checked + .btn-outline-secondary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
    color: white;
  }

  /* Scroll customizado para o modal */
  .modal-dialog-scrollable .modal-body {
    scrollbar-width: thin;
    scrollbar-color: var(--primary-color) transparent;
  }

  /* Forçar cores específicas do botão primário */
  .btn-primary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
  }
  .btn-primary:hover {
    background-color: #c66b3d;
    border-color: #c66b3d;
  }
</style><section class="section-py bg-dark text-white" id="produtosCTA" data-bs-theme="dark" style="padding: 100px 0;">
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
        <div class="d-flex gap-3 justify-content-center flex-wrap">
          <button type="button" class="btn btn-primary btn-lg px-5 py-3 fw-bold" data-bs-toggle="modal" data-bs-target="#customProjectModal">
            <i class="ri-rocket-2-line me-2"></i>Criar Projeto Personalizado
          </button>
          <a href="tel:+258840000000" class="btn btn-outline-light btn-lg px-5 py-3 fw-bold">
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
                <div class="d-flex gap-2 flex-wrap mt-1">
                  <input type="checkbox" class="btn-check" name="plataformas[]" value="web" id="platWeb" autocomplete="off">
                  <label class="btn btn-outline-secondary btn-sm" for="platWeb"><i class="ri-global-line"></i> Web</label>

                  <input type="checkbox" class="btn-check" name="plataformas[]" value="android" id="platAndroid" autocomplete="off">
                  <label class="btn btn-outline-secondary btn-sm" for="platAndroid"><i class="ri-android-line"></i> Android</label>

                  <input type="checkbox" class="btn-check" name="plataformas[]" value="ios" id="platIos" autocomplete="off">
                  <label class="btn btn-outline-secondary btn-sm" for="platIos"><i class="ri-apple-line"></i> iOS</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-section mb-5">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">02</span>
              Escala & Utilizadores
            </h6>
            <div class="row g-4">
              <div class="col-md-6">
                <label class="form-label fw-semibold">Número Estimado de Utilizadores</label>
                <select class="form-select custom-input" name="estimativa_users" required>
                  <option value="1-10">Até 10 utilizadores</option>
                  <option value="11-50">11 a 50 utilizadores</option>
                  <option value="51-200">51 a 200 utilizadores</option>
                  <option value="1000+">Mais de 1000 utilizadores</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Prazo Desejado</label>
                <select class="form-select custom-input" name="prazo_estimado">
                  <option value="1-3_meses">1 a 3 meses</option>
                  <option value="flexivel">Flexível</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-section">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">03</span>
              Cenário de Uso e Fluxo
            </h6>
            <div class="mb-4">
              <label class="form-label fw-bold text-primary">Descreva o Cenário de Uso</label>
              <p class="text-muted small mb-2">Conte-nos o "dia-a-dia" do sistema: quem usa, onde usa e qual o objetivo principal.</p>
              <textarea class="form-control custom-input" name="cenario_uso" rows="5" 
                placeholder="Ex: O cliente faz o pedido no tablet, a cozinha recebe um alerta sonoro, e o gestor vê o relatório financeiro no final do dia..." required></textarea>
            </div>
          </div>

          <div class="form-section mt-5">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">04</span>
              Informações de Contacto
            </h6>
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" class="form-control custom-input" name="nome_contacto" placeholder="Nome Completo" required>
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control custom-input" name="email_contacto" placeholder="Email Profissional" required>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer p-4 border-top">
          <button type="button" class="btn btn-link text-decoration-none fw-semibold" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary px-5 py-2 fw-bold" id="btnSubmitCustomProject">
            <span class="spinner-border spinner-border-sm d-none me-2" role="status"></span>
            Enviar Requisitos
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  /* Variáveis e Adaptação Automática */
  :root {
    --primary-color: #d97638;
  }

  /* Estilos do Modal que respeitam o tema (Light/Dark) */
  .modal-content {
    background-color: var(--bs-modal-bg);
    color: var(--bs-modal-color);
  }

  .icon-box-modal {
    width: 45px;
    height: 45px;
    border-radius: 8px;
    background: var(--primary-color);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
  }

  .step-number {
    background: var(--primary-color);
    color: white;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    font-weight: bold;
  }

  .section-title-modal {
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 1px;
    color: var(--primary-color);
  }

  /* Inputs Adaptáveis */
  .custom-input {
    background-color: var(--bs-body-bg) !important;
    color: var(--bs-body-color) !important;
    border: 1px solid var(--bs-border-color) !important;
    transition: border-color 0.2s, box-shadow 0.2s;
  }

  .custom-input:focus {
    border-color: var(--primary-color) !important;
    box-shadow: 0 0 0 0.25rem rgba(217, 118, 56, 0.25) !important;
  }

  /* Custom Checkboxes estilo Botão */
  .btn-check:checked + .btn-outline-secondary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
    color: white;
  }

  /* Scroll customizado para o modal */
  .modal-dialog-scrollable .modal-body {
    scrollbar-width: thin;
    scrollbar-color: var(--primary-color) transparent;
  }

  /* Forçar cores específicas do botão primário */
  .btn-primary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
  }
  .btn-primary:hover {
    background-color: #c66b3d;
    border-color: #c66b3d;
  }
</style>
