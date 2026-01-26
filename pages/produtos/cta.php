<section class="section-py" id="produtosCTA" style="background: var(--products-bg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="fw-bold mb-4" style="color: var(--products-text); font-size: 2.4rem;">
          Não Encontrou o Produto Ideal?
        </h2>
        <p class="mb-5" style="font-size: 1.15rem; color: var(--products-text-secondary); line-height: 1.7;">
          Podemos desenvolver uma solução à medida das suas necessidades.<br>
          Diga-nos o que precisa e a nossa equipa criará o sistema perfeito para si.
        </p>
        <div class="d-flex gap-4 justify-content-center flex-wrap">
          <button type="button" class="btn-cta-primary" data-bs-toggle="modal" data-bs-target="#customProjectModal">
            <i class="ri-rocket-2-line me-2"></i>Criar Projeto Personalizado
          </button>
          <a href="tel:+258840000000" class="btn-cta-outline">
            <i class="ri-phone-line me-2"></i>Ligar Agora
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal de Projeto Personalizado (Recolha de Requisitos) -->
<div class="modal fade" id="customProjectModal" tabindex="-1" aria-labelledby="customProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border-0 shadow-lg">
      <div class="modal-header bg-dark text-white py-4">
        <div class="d-flex align-items-center">
          <div class="icon-box-modal me-3">
            <i class="ri-lightbulb-flash-line"></i>
          </div>
          <div>
            <h5 class="modal-title fw-bold mb-0" id="customProjectModalLabel">Recolha de Requisitos</h5>
            <small class="text-white-50">Descreva a sua ideia e nós tornamo-la realidade</small>
          </div>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form id="customProjectForm">
        <div class="modal-body p-4 p-md-5">
          
          <!-- Passo 1: Tipo e Plataforma -->
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

          <!-- Passo 2: Escala e Utilizadores -->
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
                  <option value="201-1000">201 a 1000 utilizadores</option>
                  <option value="1000+">Mais de 1000 utilizadores</option>
                </select>
              </div>
              <div class="col-md-6">
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

          <!-- Passo 3: Funcionalidades e Requisitos -->
          <div class="form-section mb-5">
            <h6 class="section-title-modal mb-4">
              <span class="step-number">03</span>
              Funcionalidades & Requisitos
            </h6>
            <div class="mb-4">
              <label class="form-label fw-semibold">Funcionalidades Essenciais</label>
              <div class="row g-2">
                <div class="col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="funcionalidades[]" value="auth" id="func1">
                    <label class="form-check-label" for="func1">Login/Autenticação</label>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="funcionalidades[]" value="payments" id="func2">
                    <label class="form-check-label" for="func2">Pagamentos Online</label>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="funcionalidades[]" value="reports" id="func3">
                    <label class="form-check-label" for="func3">Relatórios/Dashboards</label>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="funcionalidades[]" value="api_integration" id="func4">
                    <label class="form-check-label" for="func4">Integração com APIs</label>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="funcionalidades[]" value="notifications" id="func5">
                    <label class="form-check-label" for="func5">Notificações Push/Email</label>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="funcionalidades[]" value="offline" id="func6">
                    <label class="form-check-label" for="func6">Modo Offline</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-0">
              <label class="form-label fw-semibold">Descrição Detalhada do Projeto</label>
              <textarea class="form-control custom-input" name="descricao_projeto" rows="4" placeholder="Descreva o fluxo do sistema, o problema que pretende resolver e quaisquer outros detalhes importantes..." required></textarea>
            </div>
          </div>

          <!-- Passo 4: Contacto -->
          <div class="form-section">
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
              <div class="col-md-12">
                <label class="form-label fw-semibold">Telefone / WhatsApp</label>
                <input type="tel" class="form-control custom-input" name="telefone_contacto" required>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer bg-light p-4 border-0">
          <button type="button" class="btn btn-link text-muted text-decoration-none fw-semibold" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn-submit-modal" id="btnSubmitCustomProject">
            <span class="spinner-border spinner-border-sm d-none me-2" role="status"></span>
            <i class="ri-send-plane-fill me-2"></i>Enviar Requisitos
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  /* ========================================
     ESTILOS DO MODAL DE REQUISITOS
     ======================================== */
  
  .icon-box-modal {
    width: 45px;
    height: 45px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
  }

  .section-title-modal {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #2d3436;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.9rem;
    letter-spacing: 1px;
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

  .custom-input {
    border: 2px solid #eee !important;
    border-radius: 6px !important;
    padding: 0.75rem 1rem !important;
    transition: all 0.3s ease !important;
  }

  .custom-input:focus {
    border-color: #d97638 !important;
    box-shadow: 0 0 0 4px rgba(217, 118, 56, 0.1) !important;
  }

  /* Opções de Plataforma Estilizadas */
  .custom-option-check label {
    padding: 10px 20px;
    border: 2px solid #eee;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 600;
    color: #636e72;
  }

  .custom-option-check input:checked + label {
    border-color: #d97638;
    background: rgba(217, 118, 56, 0.05);
    color: #d97638;
  }

  .btn-submit-modal {
    background: #d97638;
    color: white;
    border: none;
    padding: 0.9rem 2.5rem;
    border-radius: 6px;
    font-weight: 700;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
  }

  .btn-submit-modal:hover {
    background: #c66b3d;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(217, 118, 56, 0.3);
  }

  /* MODO ESCURO PARA O MODAL */
  @media (prefers-color-scheme: dark) {
    .modal-content {
      background: #1f1814;
      color: #f5ede6;
    }
    .modal-header {
      background: #140f0c !important;
    }
    .section-title-modal {
      color: #f5ede6;
    }
    .custom-input {
      background: #2d241e !important;
      border-color: #3d3028 !important;
      color: #f5ede6 !important;
    }
    .custom-option-check label {
      border-color: #3d3028;
      color: #d4c5b8;
    }
    .bg-light {
      background-color: #140f0c !important;
    }
    .text-muted {
      color: #d4c5b8 !important;
    }
  }

  /* Estilos do CTA Original (Mantidos e Ajustados) */
  #produtosCTA {
    padding: 120px 0;
    text-align: center;
  }

  .btn-cta-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    padding: 1.1rem 2.8rem;
    font-size: 1.15rem;
    font-weight: 700;
    background: linear-gradient(135deg, #d97638, #c66b3d);
    color: white !important;
    border: none;
    border-radius: 4px !important;
    box-shadow: 0 8px 25px rgba(217, 118, 56, 0.35);
    transition: all 0.4s ease;
    text-decoration: none;
  }

  .btn-cta-primary:hover {
    background: linear-gradient(135deg, #c66b3d, #b85f30);
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(217, 118, 56, 0.45);
  }

  .btn-cta-outline {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    padding: 1.1rem 2.8rem;
    font-size: 1.15rem;
    font-weight: 700;
    background: transparent;
    color: #d97638 !important;
    border: 2.5px solid #d97638;
    border-radius: 4px !important;
    transition: all 0.4s ease;
    text-decoration: none;
  }

  .btn-cta-outline:hover {
    background: #d97638;
    color: white !important;
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(217, 118, 56, 0.3);
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('customProjectForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const btn = document.getElementById('btnSubmitCustomProject');
            const spinner = btn.querySelector('.spinner-border');
            
            // Estado de carregamento
            btn.disabled = true;
            spinner.classList.remove('d-none');
            
            // Colectar dados
            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());
            
            // Tratar arrays (checkboxes)
            data.plataformas = formData.getAll('plataformas[]');
            data.funcionalidades = formData.getAll('funcionalidades[]');
            
            // Simular envio para API
            fetch('https://jsonplaceholder.typicode.com/posts', {
                method: 'POST',
                body: JSON.stringify({
                    title: 'Novo Projeto Personalizado: ' + data.tipo_aplicacao,
                    body: JSON.stringify(data),
                    userId: 1,
                }),
                headers: {
                    'Content-type': 'application/json; charset=UTF-8',
                },
            })
            .then(response => response.json())
            .then(json => {
                console.log('Requisitos enviados:', json);
                
                // Feedback de sucesso
                btn.disabled = false;
                spinner.classList.add('d-none');
                
                // Fechar modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('customProjectModal'));
                modal.hide();
                
                // Alerta de sucesso
                alert('Requisitos enviados com sucesso! A nossa equipa técnica irá analisar o seu projeto e entraremos em contacto em breve para agendar uma reunião de alinhamento.');
                form.reset();
            })
            .catch(error => {
                console.error('Erro:', error);
                btn.disabled = false;
                spinner.classList.add('d-none');
                alert('Ocorreu um erro ao enviar os requisitos. Por favor, tente novamente ou contacte-nos directamente.');
            });
        });
    }
});
</script>
