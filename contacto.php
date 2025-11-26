<?php $pageTitle = "Contacto - MEFEMA Systems - Entre em Contacto Connosco"; ?>
<?php include 'includes/header.php'; ?>
<?php include 'pages/contacto/contact_data.php'; ?>

<section class="section-py landing-hero" id="contactHero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-4 fw-bold mb-4">Contacte-nos</h1>
        <p class="lead mb-0">
          Tem uma pergunta ou gostaria de saber mais sobre os nossos serviços? Estamos aqui para ajudar. Entre em contacto connosco através de qualquer um dos canais disponíveis.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-5" id="contactInfo">
  <div class="container">
    <div class="row g-4 mb-5">
      
      <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm h-100 text-center">
          <div class="card-body p-4">
            <div class="mb-3">
              <span class="badge bg-dev-solid text-white p-3" style="font-size: 1.5rem;">
                <i class="ri-mail-line"></i>
              </span>
            </div>
            <h5 class="fw-bold mb-2">Email Principal</h5>
            <p class="text-muted mb-0">
              <a href="mailto:<?php echo $contact_info['main_email']; ?>" class="text-decoration-none text-dev-solid fw-bold">
                <?php echo $contact_info['main_email']; ?>
              </a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm h-100 text-center">
          <div class="card-body p-4">
            <div class="mb-3">
              <span class="badge bg-infra-solid text-white p-3" style="font-size: 1.5rem;">
                <i class="ri-phone-line"></i>
              </span>
            </div>
            <h5 class="fw-bold mb-2">Telefone</h5>
            <p class="text-muted mb-0">
              <a href="tel:<?php echo str_replace(' ', '', $contact_info['phone']); ?>" class="text-decoration-none text-infra-solid fw-bold">
                <?php echo $contact_info['phone']; ?>
              </a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm h-100 text-center">
          <div class="card-body p-4">
            <div class="mb-3">
              <span class="badge bg-consult-solid text-white p-3" style="font-size: 1.5rem;">
                <i class="ri-map-pin-line"></i>
              </span>
            </div>
            <h5 class="fw-bold mb-2">Localização</h5>
            <p class="text-muted mb-0">
              <?php echo $contact_info['address']; ?>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm h-100 text-center">
          <div class="card-body p-4">
            <div class="mb-3">
              <span class="badge bg-warning text-white p-3" style="font-size: 1.5rem;">
                <i class="ri-time-line"></i>
              </span>
            </div>
            <h5 class="fw-bold mb-2">Horário de Funcionamento</h5>
            <p class="text-muted mb-0">
              Seg-Sex: 08:00 - 17:00<br>
              <small>Sábado: 09:00 - 13:00</small>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-5 bg-light" id="contactForm">
  <div class="container">
    <div class="row g-4">
      
      <div class="col-lg-8">
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4">
            <h2 class="fw-bold mb-4">Envie-nos uma Mensagem</h2>
            
            <form id="contactFormElement" method="POST" action="pages/contacto/process_contact.php">
              <div class="row g-3 mb-4">
                <div class="col-md-6">
                  <label for="name" class="form-label fw-bold">Nome Completo <span class="text-danger">*</span></label>
                  <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="O seu nome" required>
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="seu@email.com" required>
                </div>
              </div>

              <div class="row g-3 mb-4">
                <div class="col-md-6">
                  <label for="phone" class="form-label fw-bold">Telefone</label>
                  <input type="tel" class="form-control form-control-lg" id="phone" name="phone" placeholder="+258 87 999 0090">
                </div>
                <div class="col-md-6">
                  <label for="company" class="form-label fw-bold">Empresa</label>
                  <input type="text" class="form-control form-control-lg" id="company" name="company" placeholder="Nome da sua empresa">
                </div>
              </div>

              <div class="mb-4">
                <label for="subject" class="form-label fw-bold">Assunto <span class="text-danger">*</span></label>
                <select class="form-select form-select-lg" id="subject" name="subject" required>
                  <option value="">Selecione um assunto</option>
                  <option value="Informações Gerais">Informações Gerais</option>
                  <option value="Orçamento">Solicitar Orçamento</option>
                  <option value="Suporte Técnico">Suporte Técnico</option>
                  <option value="Parcerias">Parcerias</option>
                  <option value="Outro">Outro</option>
                </select>
              </div>

              <div class="mb-4">
                <label for="message" class="form-label fw-bold">Mensagem <span class="text-danger">*</span></label>
                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Descreva a sua mensagem aqui..." required></textarea>
              </div>

              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required>
                  <label class="form-check-label" for="privacy">
                    Concordo com a <a href="legal" class="text-decoration-none">política de privacidade</a> e <a href="legal" class="text-decoration-none">termos de serviço</a>
                  </label>
                </div>
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg">
                  <i class="ri-send-plane-line me-2"></i>Enviar Mensagem
                </button>
              </div>

              <div id="formMessage" class="mt-3"></div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        
        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body p-4">
            <h5 class="fw-bold mb-3">
              <i class="ri-mail-line me-2 text-dev-solid"></i>Emails por Departamento
            </h5>
            <div class="list-group list-group-flush">
              <?php foreach ($contact_info['emails'] as $dept => $email): ?>
                <a href="mailto:<?php echo $email; ?>" class="list-group-item list-group-item-action border-0 px-0 py-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <span><?php echo $dept; ?></span>
                    <small class="text-muted"><?php echo $email; ?></small>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="card border-0 shadow-sm">
          <div class="card-body p-4">
            <h5 class="fw-bold mb-3">
              <i class="ri-share-2-line me-2 text-infra-solid"></i>Siga-nos nas Redes Sociais
            </h5>
            <div class="d-flex gap-2">
              <a href="<?php echo $contact_info['social']['facebook']; ?>" target="_blank" class="btn btn-outline-primary btn-sm flex-fill">
                <i class="ri-facebook-fill"></i>
              </a>
              <a href="<?php echo $contact_info['social']['linkedin']; ?>" target="_blank" class="btn btn-outline-primary btn-sm flex-fill">
                <i class="ri-linkedin-fill"></i>
              </a>
              <a href="<?php echo $contact_info['social']['instagram']; ?>" target="_blank" class="btn btn-outline-primary btn-sm flex-fill">
                <i class="ri-instagram-fill"></i>
              </a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="py-5" id="contactMap">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-8 text-center">
        <h2 class="fw-bold mb-3">Localização</h2>
        <p class="text-muted">Visite-nos no nosso escritório em Maputo</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 1rem; height: 400px;">
          <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); display: flex; align-items: center; justify-content: center;">
            <div class="text-center">
              <i class="ri-map-line fs-1 mb-3" style="color: rgba(0,0,0,0.1);"></i>
              <p class="text-muted">Integre um mapa do Google Maps aqui</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* --- CORES SÓLIDAS EM SUBSTITUIÇÃO AOS GRADIENTES --- */

  /* Cores sólidas (baseadas no início do gradiente original) */
  .bg-dev-solid {
    background-color: #4F46E5 !important; /* Base do gradiente dev */
  }

  .text-dev-solid {
    color: #4F46E5 !important; /* Base do gradiente dev */
  }

  .bg-infra-solid {
    background-color: #0891B2 !important; /* Base do gradiente infra */
  }

  .text-infra-solid {
    color: #0891B2 !important; /* Base do gradiente infra */
  }

  .bg-consult-solid {
    background-color: #D97706 !important; /* Base do gradiente consult */
  }

  .text-consult-solid {
    color: #D97706 !important; /* Base do gradiente consult */
  }

  /* --- FIM DAS CORES SÓLIDAS --- */

  /* Estilos do Formulário */
  .form-control,
  .form-select {
    border: 1px solid #e0e0e0;
    border-radius: 0.5rem;
  }

  .form-control:focus,
  .form-select:focus {
    border-color: #4F46E5;
    box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.25);
  }

  .btn-primary {
    /* GRADIENTE REMOVIDO, SUBSTITUÍDO POR COR SÓLIDA */
    background-color: #4F46E5; 
    border: none;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    /* COR DE HOVER AJUSTADA PARA SÓLIDA E MAIS ESCURA */
    background-color: #4338CA;
    transform: translateY(-2px);
    box-shadow: 0 0.5rem 1.5rem rgba(79, 70, 229, 0.3);
  }

  /* Animação de Sucesso */
  .alert {
    border-radius: 0.5rem;
    animation: slideIn 0.3s ease;
  }

  @keyframes slideIn {
    from {
      opacity: 0;
      transform: translateY(-10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<script>
  // Validação e Envio do Formulário (SEM MUDANÇAS)
  document.getElementById('contactFormElement').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const messageDiv = document.getElementById('formMessage');

    // Desabilitar o botão durante o envio
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="ri-loader-4-line me-2" style="animation: spin 1s linear infinite;"></i>Enviando...';

    // Enviar o formulário via AJAX
    fetch('process_contact.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        messageDiv.innerHTML = `
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="ri-check-circle-line me-2"></i>
            <strong>Sucesso!</strong> A sua mensagem foi enviada com sucesso. Entraremos em contacto em breve.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `;
        // Limpar o formulário
        document.getElementById('contactFormElement').reset();
      } else {
        messageDiv.innerHTML = `
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="ri-error-warning-line me-2"></i>
            <strong>Erro!</strong> ${data.message || 'Ocorreu um erro ao enviar a mensagem. Tente novamente.'}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `;
      }
    })
    .catch(error => {
      messageDiv.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="ri-error-warning-line me-2"></i>
          <strong>Erro!</strong> Ocorreu um erro ao enviar a mensagem. Tente novamente.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      `;
    })
    .finally(() => {
      // Reabilitar o botão
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalText;
    });
  });

  // Animação de Spin para o Loader (SEM MUDANÇAS)
  const style = document.createElement('style');
  style.textContent = `
    @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
  `;
  document.head.appendChild(style);
</script>

<?php include 'includes/footer.php'; ?>
