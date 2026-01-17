<?php $pageTitle = "Contacto - MEFEMA Systems - Entre em Contacto Connosco"; ?>
<?php include 'includes/header.php'; ?>
<?php include 'pages/contacto/contact_data.php'; ?>

<section class="section-py landing-hero position-relative overflow-hidden" id="contactHero">
  <div class="hero-bg-shapes">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
  </div>
  <div class="container position-relative">
    <div class="row align-items-center">
      <div class="col-lg-8 mx-auto text-center">
        <span class="badge bg-primary-subtle text-primary mb-3 px-3 py-2">Fale Connosco</span>
        <h1 class="display-4 fw-bold mb-4 hero-title">Vamos Transformar as Suas Ideias em Realidade</h1>
        <p class="lead mb-0 text-muted">
          Tem um projecto em mente? A nossa equipa está pronta para colaborar consigo. 
          Entre em contacto através de qualquer canal e vamos começar a construir o futuro juntos.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light" id="contactInfo">
  <div class="container">
    <div class="row g-4">
      
      <div class="col-lg-3 col-md-6">
        <div class="contact-card h-100">
          <div class="contact-card-icon bg-primary-subtle">
            <i class="ri-mail-line text-primary"></i>
          </div>
          <h5 class="fw-bold mb-2">Email Principal</h5>
          <p class="text-muted mb-3">Resposta em 24 horas</p>
          <a href="mailto:<?php echo $contact_info['main_email']; ?>" class="contact-link">
            <?php echo $contact_info['main_email']; ?>
            <i class="ri-arrow-right-up-line ms-1"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="contact-card h-100">
          <div class="contact-card-icon bg-success-subtle">
            <i class="ri-phone-line text-success"></i>
          </div>
          <h5 class="fw-bold mb-2">Telefone</h5>
          <p class="text-muted mb-3">Seg-Sex: 09h-16h</p>
          <a href="tel:<?php echo str_replace(' ', '', $contact_info['phone']); ?>" class="contact-link">
            <?php echo $contact_info['phone']; ?>
            <i class="ri-arrow-right-up-line ms-1"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="contact-card h-100">
          <div class="contact-card-icon bg-warning-subtle">
            <i class="ri-map-pin-line text-warning"></i>
          </div>
          <h5 class="fw-bold mb-2">Localização</h5>
          <p class="text-muted mb-3">Visite-nos</p>
          <p class="contact-text">
            <?php echo $contact_info['address']; ?>
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="contact-card h-100">
          <div class="contact-card-icon bg-info-subtle">
            <i class="ri-time-line text-info"></i>
          </div>
          <h5 class="fw-bold mb-2">Horário</h5>
          <p class="text-muted mb-3">Atendimento</p>
          <p class="contact-text mb-1">Seg-Sex: 09:00 - 16:00</p>
          <p class="contact-text text-muted">Sáb: 09:00 - 13:00</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-5" id="contactForm">
  <div class="container">
    <div class="row g-5">
      
      <div class="col-lg-7">
        <div class="contact-form-wrapper">
          <div class="mb-5">
            <h2 class="fw-bold mb-3">Envie-nos uma Mensagem</h2>
            <p class="text-muted">Preencha o formulário abaixo e a nossa equipa entrará em contacto consigo brevemente.</p>
          </div>
          
          <form id="contactFormElement" method="POST" action="pages/contacto/process_contact.php">
            <div class="row g-4 mb-4">
              <div class="col-md-6">
                <label for="name" class="form-label fw-semibold mb-2">
                  Nome Completo <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-end-0">
                    <i class="ri-user-line text-muted"></i>
                  </span>
                  <input type="text" class="form-control border-start-0 ps-0" id="name" name="name" placeholder="João Silva" required>
                </div>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label fw-semibold mb-2">
                  Email <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-end-0">
                    <i class="ri-mail-line text-muted"></i>
                  </span>
                  <input type="email" class="form-control border-start-0 ps-0" id="email" name="email" placeholder="joao@exemplo.com" required>
                </div>
              </div>
            </div>

            <div class="row g-4 mb-4">
              <div class="col-md-6">
                <label for="phone" class="form-label fw-semibold mb-2">
                  Telefone
                </label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-end-0">
                    <i class="ri-phone-line text-muted"></i>
                  </span>
                  <input type="tel" class="form-control border-start-0 ps-0" id="phone" name="phone" placeholder="+258 86 192 4050">
                </div>
              </div>
              <div class="col-md-6">
                <label for="company" class="form-label fw-semibold mb-2">
                  Empresa
                </label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-end-0">
                    <i class="ri-building-line text-muted"></i>
                  </span>
                  <input type="text" class="form-control border-start-0 ps-0" id="company" name="company" placeholder="Nome da empresa">
                </div>
              </div>
            </div>

            <div class="mb-4">
              <label for="subject" class="form-label fw-semibold mb-2">
                Assunto <span class="text-danger">*</span>
              </label>
              <select class="form-select" id="subject" name="subject" required>
                <option value="">Selecione um assunto</option>
                <option value="Informações Gerais">Informações Gerais</option>
                <option value="Orçamento">Solicitar Orçamento</option>
                <option value="Suporte Técnico">Suporte Técnico</option>
                <option value="Parcerias">Parcerias</option>
                <option value="Outro">Outro</option>
              </select>
            </div>

            <div class="mb-4">
              <label for="message" class="form-label fw-semibold mb-2">
                Mensagem <span class="text-danger">*</span>
              </label>
              <textarea class="form-control" id="message" name="message" rows="5" placeholder="Conte-nos sobre o seu projecto ou dúvida..." required></textarea>
            </div>

            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required>
                <label class="form-check-label text-muted" for="privacy">
                  Concordo com a <a href="legal" class="text-decoration-none fw-semibold">política de privacidade</a> e <a href="legal" class="text-decoration-none fw-semibold">termos de serviço</a>
                </label>
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg px-5">
              <i class="ri-send-plane-line me-2"></i>Enviar Mensagem
            </button>

            <div id="formMessage" class="mt-4"></div>
          </form>
        </div>
      </div>

      <div class="col-lg-5">
        
        <div class="info-card mb-4">
          <div class="info-card-header">
            <i class="ri-mail-line me-2"></i>
            <h5 class="mb-0">Emails por Departamento</h5>
          </div>
          <div class="info-card-body">
            <?php foreach ($contact_info['emails'] as $dept => $email): ?>
              <div class="info-item">
                <div class="info-item-label"><?php echo $dept; ?></div>
                <a href="mailto:<?php echo $email; ?>" class="info-item-value">
                  <?php echo $email; ?>
                  <i class="ri-arrow-right-up-line ms-1"></i>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="info-card">
          <div class="info-card-header">
            <i class="ri-share-2-line me-2"></i>
            <h5 class="mb-0">Siga-nos</h5>
          </div>
          <div class="info-card-body">
            <div class="social-links">
              <a href="<?php echo $contact_info['social']['facebook']; ?>" target="_blank" class="social-link social-facebook">
                <i class="ri-facebook-fill"></i>
                <span>Facebook</span>
              </a>
              <a href="<?php echo $contact_info['social']['linkedin']; ?>" target="_blank" class="social-link social-linkedin">
                <i class="ri-linkedin-fill"></i>
                <span>LinkedIn</span>
              </a>
              <a href="<?php echo $contact_info['social']['instagram']; ?>" target="_blank" class="social-link social-instagram">
                <i class="ri-instagram-fill"></i>
                <span>Instagram</span>
              </a>
            </div>
          </div>
        </div>

        <div class="info-banner mt-4">
          <div class="info-banner-icon">
            <i class="ri-customer-service-2-line"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1">Precisa de Ajuda Rápida?</h6>
            <p class="mb-2 small">A nossa equipa está pronta para responder às suas questões.</p>
            <a href="tel:<?php echo str_replace(' ', '', $contact_info['phone']); ?>" class="btn btn-sm btn-outline-primary">
              <i class="ri-phone-line me-1"></i>Ligar Agora
            </a>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="py-5 bg-light" id="contactMap">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <h2 class="fw-bold mb-3">Visite-nos</h2>
        <p class="text-muted">Escritório em Pemba - Estamos sempre prontos para recebê-lo</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="map-container">
          <div class="map-placeholder">
            <i class="ri-map-pin-line"></i>
            <p class="mb-0">Integração Google Maps</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* MEFEMA Colors */
  :root {
    --mefema-orange: #FF6B35;
    --mefema-brown: #5D4037;
    --mefema-light-brown: #8D6E63;
    --mefema-dark-brown: #3E2723;
    --mefema-light-gray: #F5F5F5;
    --mefema-gray: #9E9E9E;
  }

  /* Hero Section */
  .landing-hero {
    background-color: var(--mefema-brown);
    color: white;
    min-height: 400px;
    display: flex;
    align-items: center;
  }

  .hero-bg-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
  }

  .shape {
    position: absolute;
    border-radius: 50%;
    opacity: 0.08;
    background: white;
  }

  .shape-1 {
    width: 300px;
    height: 300px;
    top: -150px;
    right: -100px;
  }

  .shape-2 {
    width: 200px;
    height: 200px;
    bottom: -100px;
    left: -50px;
  }

  .shape-3 {
    width: 150px;
    height: 150px;
    top: 50%;
    left: 10%;
  }

  .hero-title {
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }

  .badge.bg-primary-subtle {
    background-color: var(--mefema-orange) !important;
    color: white !important;
  }

  /* Contact Cards */
  .contact-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    text-align: center;
    border-top: 3px solid var(--mefema-orange);
  }

  .contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.12);
  }

  .contact-card-icon {
    width: 64px;
    height: 64px;
    border-radius: 1rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    font-size: 1.75rem;
  }

  .contact-card-icon.bg-primary-subtle {
    background-color: rgba(255, 107, 53, 0.1) !important;
  }

  .contact-card-icon.bg-primary-subtle i {
    color: var(--mefema-orange) !important;
  }

  .contact-card-icon.bg-success-subtle {
    background-color: rgba(93, 64, 55, 0.1) !important;
  }

  .contact-card-icon.bg-success-subtle i {
    color: var(--mefema-brown) !important;
  }

  .contact-card-icon.bg-warning-subtle {
    background-color: rgba(255, 107, 53, 0.15) !important;
  }

  .contact-card-icon.bg-warning-subtle i {
    color: var(--mefema-orange) !important;
  }

  .contact-card-icon.bg-info-subtle {
    background-color: rgba(141, 110, 99, 0.1) !important;
  }

  .contact-card-icon.bg-info-subtle i {
    color: var(--mefema-light-brown) !important;
  }

  .contact-link {
    color: var(--mefema-orange);
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    transition: all 0.2s ease;
  }

  .contact-link:hover {
    color: var(--mefema-brown);
    transform: translateX(3px);
  }

  .contact-text {
    font-size: 0.95rem;
    margin-bottom: 0;
  }

  /* Form */
  .contact-form-wrapper {
    background: white;
    padding: 2.5rem;
    border-radius: 1rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border-left: 4px solid var(--mefema-orange);
  }

  .form-label {
    font-size: 0.9rem;
    color: var(--mefema-brown);
  }

  .form-control,
  .form-select {
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    padding: 0.75rem 1rem;
    transition: all 0.2s ease;
  }

  .form-control:focus,
  .form-select:focus {
    border-color: var(--mefema-orange);
    box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
  }

  .input-group-text {
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem 0 0 0.5rem;
    background-color: var(--mefema-light-gray);
  }

  .input-group .form-control {
    border-radius: 0 0.5rem 0.5rem 0;
  }

  .btn-primary {
    background-color: var(--mefema-orange);
    border: none;
    padding: 0.75rem 2rem;
    border-radius: 0.5rem;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background-color: var(--mefema-brown);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(255, 107, 53, 0.3);
  }

  /* Info Cards */
  .info-card {
    background: white;
    border-radius: 1rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    overflow: hidden;
  }

  .info-card-header {
    background-color: var(--mefema-brown);
    color: white;
    padding: 1.5rem;
    display: flex;
    align-items: center;
    font-size: 1.1rem;
  }

  .info-card-body {
    padding: 1.5rem;
  }

  .info-item {
    padding: 1rem 0;
    border-bottom: 1px solid #e5e7eb;
  }

  .info-item:last-child {
    border-bottom: none;
  }

  .info-item-label {
    font-size: 0.85rem;
    color: #6b7280;
    margin-bottom: 0.25rem;
  }

  .info-item-value {
    color: var(--mefema-orange);
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    transition: all 0.2s ease;
  }

  .info-item-value:hover {
    color: var(--mefema-brown);
  }

  /* Social Links */
  .social-links {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }

  .social-link {
    display: flex;
    align-items: center;
    padding: 1rem;
    border-radius: 0.75rem;
    text-decoration: none;
    color: white;
    transition: all 0.3s ease;
    font-weight: 600;
  }

  .social-link i {
    font-size: 1.5rem;
    margin-right: 1rem;
  }

  .social-facebook {
    background-color: #1877f2;
  }

  .social-facebook:hover {
    background-color: #0d5dbf;
  }

  .social-linkedin {
    background-color: #0a66c2;
  }

  .social-linkedin:hover {
    background-color: #004182;
  }

  .social-instagram {
    background-color: #e1306c;
  }

  .social-instagram:hover {
    background-color: #c13584;
  }

  .social-link:hover {
    transform: translateX(5px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  }

  /* Info Banner */
  .info-banner {
    background-color: var(--mefema-light-gray);
    padding: 1.5rem;
    border-radius: 1rem;
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    border: 2px solid var(--mefema-orange);
  }

  .info-banner-icon {
    width: 48px;
    height: 48px;
    background-color: var(--mefema-orange);
    border-radius: 0.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    flex-shrink: 0;
  }

  .btn-outline-primary {
    border-color: var(--mefema-orange);
    color: var(--mefema-orange);
  }

  .btn-outline-primary:hover {
    background-color: var(--mefema-orange);
    border-color: var(--mefema-orange);
    color: white;
  }

  /* Map */
  .map-container {
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    height: 400px;
  }

  .map-placeholder {
    width: 100%;
    height: 100%;
    background-color: var(--mefema-light-gray);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: var(--mefema-gray);
  }

  .map-placeholder i {
    font-size: 3rem;
    margin-bottom: 1rem;
    opacity: 0.5;
  }

  /* Alerts */
  .alert {
    border-radius: 0.75rem;
    border: none;
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

  /* Responsive */
  @media (max-width: 768px) {
    .contact-form-wrapper {
      padding: 1.5rem;
    }

    .social-links {
      flex-direction: row;
      flex-wrap: wrap;
    }

    .social-link {
      flex: 1;
      min-width: 150px;
      justify-content: center;
    }
  }
</style>

<script>
  document.getElementById('contactFormElement').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const messageDiv = document.getElementById('formMessage');

    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Enviando...';

    fetch('process_contact.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        messageDiv.innerHTML = `
          <div class="alert alert-success d-flex align-items-center" role="alert">
            <i class="ri-check-circle-line fs-4 me-3"></i>
            <div>
              <strong>Mensagem enviada com sucesso!</strong>
              <p class="mb-0 mt-1">Obrigado pelo seu contacto. A nossa equipa responderá em breve.</p>
            </div>
          </div>
        `;
        document.getElementById('contactFormElement').reset();
      } else {
        messageDiv.innerHTML = `
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <i class="ri-error-warning-line fs-4 me-3"></i>
            <div>
              <strong>Erro ao enviar mensagem</strong>
              <p class="mb-0 mt-1">${data.message || 'Por favor, tente novamente.'}</p>
            </div>
          </div>
        `;
      }
    })
    .catch(error => {
      messageDiv.innerHTML = `
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <i class="ri-error-warning-line fs-4 me-3"></i>
          <div>
            <strong>Erro de conexão</strong>
            <p class="mb-0 mt-1">Verifique a sua ligação à internet e tente novamente.</p>
          </div>
        </div>
      `;
    })
    .finally(() => {
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalText;
    });
  });
</script>

<?php include 'includes/footer.php'; ?>
