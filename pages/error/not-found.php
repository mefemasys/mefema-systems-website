<?php 
http_response_code(404);
$pageTitle = "Página Não Encontrada - 404"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>

<section class="landing-hero-websites position-relative overflow-hidden" id="error404">
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
    <div class="row align-items-center min-vh-60">
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
        <div class="hero-badge mb-4">
          <i class="ri-alert-line" style="color: var(--primary-color); font-size: 1.2rem;"></i>
          <span class="badge-text">Erro 404</span>
        </div>
        
        <h1 class="hero-title mb-4">
          Página <span class="text-gradient">Não Encontrada</span>
        </h1>
        
        <p class="hero-subtitle mb-4">
          Desculpe, a página que procura não existe ou foi movida. Mas não se preocupe, temos muitas outras soluções tecnológicas para explorar!
        </p>
        
        <div class="error-suggestions mb-5">
          <p class="fw-bold mb-3" style="color: var(--text-primary);">Talvez esteja à procura de:</p>
          <div class="filters-buttons">
            <a href="<?php echo BASE_URL; ?>" class="filter-btn">
              <i class="ri-home-line"></i>
              <span>Início</span>
            </a>
            <a href="<?php echo BASE_URL; ?>servicos" class="filter-btn">
              <i class="ri-service-line"></i>
              <span>Serviços</span>
            </a>
            <a href="<?php echo BASE_URL; ?>produtos" class="filter-btn">
              <i class="ri-stack-line"></i>
              <span>Produtos</span>
            </a>
            <a href="<?php echo BASE_URL; ?>contacto" class="filter-btn">
              <i class="ri-phone-line"></i>
              <span>Contacto</span>
            </a>
          </div>
        </div>
        
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
          <a class="btn-action btn-order" href="<?php echo BASE_URL; ?>">
            <i class="ri-home-line"></i>
            <span>Voltar ao Início</span>
          </a>
          <a class="btn-action btn-demo" href="javascript:history.back()">
            <i class="ri-arrow-left-line"></i>
            <span>Página Anterior</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Seção de Ajuda -->
<section class="landing-websites-list py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="website-card">
          <div class="card-content text-center">
            <div class="help-icon-wrapper mb-3">
              <i class="ri-search-line"></i>
            </div>
            <h5 class="website-name mb-2">Procure o que Precisa</h5>
            <p class="card-description mb-4">Use a navegação principal para encontrar serviços, produtos e informações sobre as nossas soluções.</p>
            <a href="<?php echo BASE_URL; ?>servicos" class="btn-action btn-details w-100">
              <span>Ver Serviços</span>
              <i class="ri-arrow-right-line"></i>
            </a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="website-card">
          <div class="card-content text-center">
            <div class="help-icon-wrapper mb-3">
              <i class="ri-customer-service-2-line"></i>
            </div>
            <h5 class="website-name mb-2">Precisa de Ajuda?</h5>
            <p class="card-description mb-4">A nossa equipa está pronta para responder às suas questões e ajudá-lo a encontrar a solução ideal.</p>
            <a href="<?php echo BASE_URL; ?>contacto" class="btn-action btn-details w-100">
              <span>Contactar-nos</span>
              <i class="ri-arrow-right-line"></i>
            </a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="website-card">
          <div class="card-content text-center">
            <div class="help-icon-wrapper mb-3">
              <i class="ri-lightbulb-line"></i>
            </div>
            <h5 class="website-name mb-2">Conheça as Soluções</h5>
            <p class="card-description mb-4">Descubra como podemos transformar o seu negócio digitalmente com as nossas tecnologias.</p>
            <a href="<?php echo BASE_URL; ?>sobre" class="btn-action btn-details w-100">
              <span>Saber Mais</span>
              <i class="ri-arrow-right-line"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Usar variáveis CSS já definidas no sistema */
  .min-vh-60 {
    min-height: 60vh;
  }

  /* Decorative Lines */
  .error-decorative-lines {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
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
    z-index: 1;
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
    padding: 2rem 0;
  }

  .error-number-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.5rem;
    position: relative;
  }

  .error-number {
    font-size: 8rem;
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
    font-size: 6rem;
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
    pointer-events: none;
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
  .error-suggestions .filters-buttons {
    gap: 0.75rem;
  }

  .error-suggestions .filter-btn {
    padding: 0.65rem 1.25rem;
    font-size: 0.85rem;
  }

  /* Help Icon Wrapper */
  .help-icon-wrapper {
    width: 80px;
    height: 80px;
    background-color: rgba(217, 118, 56, 0.1);
    border-radius: var(--radius-lg);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-color);
    font-size: 2.5rem;
    margin: 0 auto;
    transition: var(--transition);
  }

  .website-card:hover .help-icon-wrapper {
    transform: scale(1.1) rotate(5deg);
    background-color: var(--primary-color);
    color: white;
  }

  /* Responsive */
  @media (max-width: 992px) {
    .error-number {
      font-size: 6rem;
    }
    
    .error-icon {
      font-size: 4rem;
    }
    
    .error-number-wrapper {
      gap: 1rem;
    }
  }

  @media (max-width: 768px) {
    .hero-title {
      font-size: 2.5rem;
    }

    .error-number {
      font-size: 4rem;
    }
    
    .error-icon {
      font-size: 3rem;
    }

    .error-suggestions .filters-buttons {
      flex-direction: column;
      gap: 0.5rem;
    }

    .error-suggestions .filter-btn {
      width: 100%;
      justify-content: center;
    }
  }

  @media (max-width: 576px) {
    .hero-title {
      font-size: 2rem;
    }

    .hero-subtitle {
      font-size: 1rem;
    }

    .error-number {
      font-size: 3rem;
    }
    
    .error-icon {
      font-size: 2.5rem;
    }
  }
</style>

<?php get_part('includes/footer.php'); ?>
