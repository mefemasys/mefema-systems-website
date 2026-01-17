<?php 
http_response_code(404);
$pageTitle = "Página Não Encontrada - 404"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>

<section class="section-py error-hero position-relative overflow-hidden" id="error404">
  <!-- Camadas de Animação de Fundo -->
  <div class="error-animated-bg"></div>
  
  <!-- Traços Decorativos -->
  <div class="error-decorative-lines">
    <div class="error-line"></div>
    <div class="error-line"></div>
    <div class="error-line"></div>
  </div>
  
  <!-- Nós de Tecnologia (Tech Nodes) -->
  <div class="error-tech-node" style="top: 15%; left: 10%;"></div>
  <div class="error-tech-node" style="top: 30%; right: 15%;"></div>
  <div class="error-tech-node" style="bottom: 25%; left: 8%;"></div>
  <div class="error-tech-node" style="bottom: 20%; right: 12%;"></div>

  <!-- Conteúdo Principal -->
  <div class="container py-5 position-relative" style="z-index: 5;">
    <div class="row align-items-center min-vh-50">
      <div class="col-lg-6 text-center mb-5 mb-lg-0">
        <div class="error-illustration">
          <div class="error-number-wrapper">
            <span class="error-number">4</span>
            <div class="error-icon-wrapper">
              <i class="ri-error-warning-line error-icon"></i>
            </div>
            <span class="error-number">4</span>
          </div>
          <div class="error-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6 text-lg-start text-center">
        <div class="hero-badge mb-3">
          <i class="ri-alert-line"></i>
          <span class="badge-text">Erro 404</span>
        </div>
        
        <h1 class="hero-title mb-4">
          Página <span class="text-gradient">Não Encontrada</span>
        </h1>
        
        <p class="hero-subtitle mb-4">
          Desculpe, a página que procura não existe ou foi movida. Mas não se preocupe, temos muitas outras soluções tecnológicas para explorar!
        </p>
        
        <div class="error-suggestions mb-5">
          <p class="fw-semibold mb-3" style="color: var(--text-primary);">Talvez esteja à procura de:</p>
          <div class="filters-buttons">
            <a href="<?php echo BASE_URL; ?>" class="filter-btn">
              <i class="ri-home-line"></i> Início
            </a>
            <a href="<?php echo BASE_URL; ?>servicos" class="filter-btn">
              <i class="ri-service-line"></i> Serviços
            </a>
            <a href="<?php echo BASE_URL; ?>produtos" class="filter-btn">
              <i class="ri-stack-line"></i> Produtos
            </a>
            <a href="<?php echo BASE_URL; ?>contacto" class="filter-btn">
              <i class="ri-phone-line"></i> Contacto
            </a>
          </div>
        </div>
        
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
          <a class="btn-action btn-order" href="<?php echo BASE_URL; ?>">
            <i class="ri-home-line"></i> Voltar ao Início
          </a>
          <a class="btn-action btn-details" href="javascript:history.back()">
            <i class="ri-arrow-left-line"></i> Página Anterior
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Seção de Ajuda -->
<section class="py-5" style="background: var(--bg-light);">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="help-card text-center h-100">
          <div class="help-icon mb-3">
            <i class="ri-search-line"></i>
          </div>
          <h5 class="fw-bold mb-2" style="color: var(--text-primary);">Procure o que Precisa</h5>
          <p class="card-description mb-3">Use a navegação principal para encontrar serviços, produtos e informações.</p>
          <a href="<?php echo BASE_URL; ?>servicos" class="help-link">
            Ver Serviços <i class="ri-arrow-right-line ms-1"></i>
          </a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="help-card text-center h-100">
          <div class="help-icon mb-3">
            <i class="ri-customer-service-2-line"></i>
          </div>
          <h5 class="fw-bold mb-2" style="color: var(--text-primary);">Precisa de Ajuda?</h5>
          <p class="card-description mb-3">A nossa equipa está pronta para responder às suas questões.</p>
          <a href="<?php echo BASE_URL; ?>contacto" class="help-link">
            Contactar-nos <i class="ri-arrow-right-line ms-1"></i>
          </a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="help-card text-center h-100">
          <div class="help-icon mb-3">
            <i class="ri-lightbulb-line"></i>
          </div>
          <h5 class="fw-bold mb-2" style="color: var(--text-primary);">Conheça as Soluções</h5>
          <p class="card-description mb-3">Descubra como podemos transformar o seu negócio digitalmente.</p>
          <a href="<?php echo BASE_URL; ?>sobre" class="help-link">
            Saber Mais <i class="ri-arrow-right-line ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Error Hero Section */
  .error-hero {
    min-height: 80vh;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--primary-light) 100%);
    position: relative;
    overflow: hidden;
  }

  .min-vh-50 {
    min-height: 50vh;
  }

  /* Animated Background */
  .error-animated-bg {
    position: absolute;
    width: 100%;
    height: 100%;
    background: 
      radial-gradient(circle at 20% 30%, rgba(217, 118, 56, 0.05) 0%, transparent 50%),
      radial-gradient(circle at 80% 70%, rgba(217, 118, 56, 0.08) 0%, transparent 50%);
    animation: bgPulse 8s ease-in-out infinite;
  }

  @keyframes bgPulse {
    0%, 100% { opacity: 0.6; }
    50% { opacity: 1; }
  }

  /* Decorative Lines */
  .error-decorative-lines {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }

  .error-line {
    position: absolute;
    width: 2px;
    height: 100%;
    background: linear-gradient(to bottom, transparent, var(--primary-color), transparent);
    opacity: 0.1;
    animation: lineMove 15s linear infinite;
  }

  .error-line:nth-child(1) { left: 15%; animation-delay: 0s; }
  .error-line:nth-child(2) { left: 50%; animation-delay: 5s; }
  .error-line:nth-child(3) { right: 20%; animation-delay: 10s; }

  @keyframes lineMove {
    0% { transform: translateY(-100%); }
    100% { transform: translateY(100%); }
  }

  /* Tech Nodes */
  .error-tech-node {
    position: absolute;
    width: 8px;
    height: 8px;
    background-color: var(--primary-color);
    border-radius: 50%;
    opacity: 0.4;
    animation: nodePulse 3s ease-in-out infinite;
  }

  .error-tech-node::before {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    border: 2px solid var(--primary-color);
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0.3;
  }

  @keyframes nodePulse {
    0%, 100% { transform: scale(1); opacity: 0.4; }
    50% { transform: scale(1.5); opacity: 0.8; }
  }

  /* Error Number Illustration */
  .error-illustration {
    position: relative;
    padding: 3rem 0;
  }

  .error-number-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    position: relative;
  }

  .error-number {
    font-size: 10rem;
    font-weight: 900;
    color: var(--text-secondary);
    opacity: 0.2;
    line-height: 1;
    animation: numberFloat 3s ease-in-out infinite;
  }

  .error-number:first-child {
    animation-delay: 0s;
  }

  .error-number:last-child {
    animation-delay: 0.5s;
  }

  @keyframes numberFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
  }

  .error-icon-wrapper {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }

  .error-icon {
    font-size: 8rem;
    color: var(--primary-color);
    animation: iconRotate 4s ease-in-out infinite;
  }

  @keyframes iconRotate {
    0%, 100% { transform: rotate(0deg) scale(1); }
    50% { transform: rotate(10deg) scale(1.1); }
  }

  /* Particles */
  .error-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
  }

  .particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background-color: var(--primary-color);
    border-radius: 50%;
    opacity: 0.6;
    animation: particleFloat 4s ease-in-out infinite;
  }

  .particle:nth-child(1) { left: 20%; top: 30%; animation-delay: 0s; }
  .particle:nth-child(2) { right: 25%; top: 40%; animation-delay: 1s; }
  .particle:nth-child(3) { left: 30%; bottom: 35%; animation-delay: 2s; }
  .particle:nth-child(4) { right: 20%; bottom: 30%; animation-delay: 3s; }
  .particle:nth-child(5) { left: 50%; top: 20%; animation-delay: 1.5s; }

  @keyframes particleFloat {
    0%, 100% { transform: translateY(0) translateX(0); opacity: 0.3; }
    50% { transform: translateY(-20px) translateX(10px); opacity: 0.8; }
  }

  /* Error Suggestions */
  .error-suggestions {
    margin-top: 2rem;
  }

  /* Help Cards */
  .help-card {
    background: var(--bg-card);
    padding: 2rem;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    border: 2px solid var(--border-color);
    height: 100%;
  }

  .help-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
    border-color: var(--primary-color);
  }

  .help-icon {
    width: 64px;
    height: 64px;
    background-color: rgba(217, 118, 56, 0.1);
    border-radius: var(--radius-lg);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-color);
    font-size: 2rem;
    margin: 0 auto;
  }

  .help-link {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
  }

  .help-link:hover {
    color: var(--primary-dark);
    transform: translateX(3px);
  }

  /* Responsive */
  @media (max-width: 768px) {
    .error-number {
      font-size: 6rem;
    }
    
    .error-icon {
      font-size: 4rem;
    }
    
    .error-number-wrapper {
      gap: 1rem;
    }

    .hero-title {
      font-size: 2.5rem;
    }

    .filters-buttons {
      flex-direction: column;
      gap: 0.75rem;
    }

    .filter-btn {
      width: 100%;
      justify-content: center;
    }

    .btn-action {
      width: 100%;
      justify-content: center;
    }
  }

  @media (max-width: 576px) {
    .hero-title {
      font-size: 2rem;
    }

    .error-number {
      font-size: 4rem;
    }

    .error-icon {
      font-size: 3rem;
    }
  }
</style>

<?php get_part('includes/footer.php'); ?>
