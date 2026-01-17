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
        <div class="badge bg-label-primary rounded-pill mb-3 px-3 py-2">
          <i class="ri-alert-line me-1"></i> Erro 404
        </div>
        
        <h1 class="display-4 fw-bold mb-4 lh-sm">
          Página Não Encontrada
        </h1>
        
        <p class="lead mb-4 text-muted">
          Desculpe, a página que procura não existe ou foi movida. Mas não se preocupe, temos muitas outras soluções tecnológicas para explorar!
        </p>
        
        <div class="error-suggestions mb-5">
          <p class="fw-semibold mb-3">Talvez esteja à procura de:</p>
          <div class="d-flex flex-wrap gap-2">
            <a href="<?php echo BASE_URL; ?>" class="badge bg-light text-dark px-3 py-2 text-decoration-none">
              <i class="ri-home-line me-1"></i> Início
            </a>
            <a href="<?php echo BASE_URL; ?>servicos" class="badge bg-light text-dark px-3 py-2 text-decoration-none">
              <i class="ri-service-line me-1"></i> Serviços
            </a>
            <a href="<?php echo BASE_URL; ?>produtos" class="badge bg-light text-dark px-3 py-2 text-decoration-none">
              <i class="ri-stack-line me-1"></i> Produtos
            </a>
            <a href="<?php echo BASE_URL; ?>contacto" class="badge bg-light text-dark px-3 py-2 text-decoration-none">
              <i class="ri-phone-line me-1"></i> Contacto
            </a>
          </div>
        </div>
        
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
          <a class="btn btn-lg btn-primary shadow" href="<?php echo BASE_URL; ?>">
            <i class="ri-home-line me-2"></i> Voltar ao Início
          </a>
          <a class="btn btn-lg btn-outline-secondary" href="javascript:history.back()">
            <i class="ri-arrow-left-line me-2"></i> Página Anterior
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Seção de Ajuda -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="help-card text-center h-100">
          <div class="help-icon mb-3">
            <i class="ri-search-line"></i>
          </div>
          <h5 class="fw-bold mb-2">Procure o que Precisa</h5>
          <p class="text-muted mb-3">Use a navegação principal para encontrar serviços, produtos e informações.</p>
          <a href="<?php echo BASE_URL; ?>servicos" class="text-decoration-none fw-semibold">
            Ver Serviços <i class="ri-arrow-right-line ms-1"></i>
          </a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="help-card text-center h-100">
          <div class="help-icon mb-3">
            <i class="ri-customer-service-2-line"></i>
          </div>
          <h5 class="fw-bold mb-2">Precisa de Ajuda?</h5>
          <p class="text-muted mb-3">A nossa equipa está pronta para responder às suas questões.</p>
          <a href="<?php echo BASE_URL; ?>contacto" class="text-decoration-none fw-semibold">
            Contactar-nos <i class="ri-arrow-right-line ms-1"></i>
          </a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="help-card text-center h-100">
          <div class="help-icon mb-3">
            <i class="ri-lightbulb-line"></i>
          </div>
          <h5 class="fw-bold mb-2">Conheça as Soluções</h5>
          <p class="text-muted mb-3">Descubra como podemos transformar o seu negócio digitalmente.</p>
          <a href="<?php echo BASE_URL; ?>sobre" class="text-decoration-none fw-semibold">
            Saber Mais <i class="ri-arrow-right-line ms-1"></i>
          </a>
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
  }

  /* Error Hero Section */
  .error-hero {
    min-height: 80vh;
    background-color: #FAFAFA;
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
      radial-gradient(circle at 20% 30%, rgba(255, 107, 53, 0.05) 0%, transparent 50%),
      radial-gradient(circle at 80% 70%, rgba(93, 64, 55, 0.05) 0%, transparent 50%);
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
    background: linear-gradient(to bottom, transparent, var(--mefema-orange), transparent);
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
    background-color: var(--mefema-orange);
    border-radius: 50%;
    opacity: 0.4;
    animation: nodePulse 3s ease-in-out infinite;
  }

  .error-tech-node::before {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    border: 2px solid var(--mefema-orange);
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
    color: var(--mefema-brown);
    opacity: 0.15;
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
    color: var(--mefema-orange);
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
    background-color: var(--mefema-orange);
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

  /* Badge */
  .bg-label-primary {
    background-color: rgba(255, 107, 53, 0.1) !important;
    color: var(--mefema-orange) !important;
  }

  /* Suggestions */
  .error-suggestions .badge {
    transition: all 0.3s ease;
    border: 1px solid #E0E0E0;
  }

  .error-suggestions .badge:hover {
    background-color: var(--mefema-orange) !important;
    color: white !important;
    border-color: var(--mefema-orange);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(255, 107, 53, 0.2);
  }

  /* Buttons */
  .btn-primary {
    background-color: var(--mefema-orange);
    border-color: var(--mefema-orange);
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background-color: var(--mefema-brown);
    border-color: var(--mefema-brown);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(255, 107, 53, 0.3);
  }

  .btn-outline-secondary {
    border-color: var(--mefema-brown);
    color: var(--mefema-brown);
    transition: all 0.3s ease;
  }

  .btn-outline-secondary:hover {
    background-color: var(--mefema-brown);
    border-color: var(--mefema-brown);
    color: white;
  }

  /* Help Cards */
  .help-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    border-top: 3px solid var(--mefema-orange);
  }

  .help-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.12);
  }

  .help-icon {
    width: 64px;
    height: 64px;
    background-color: rgba(255, 107, 53, 0.1);
    border-radius: 1rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--mefema-orange);
    font-size: 2rem;
  }

  .help-card a {
    color: var(--mefema-orange);
    transition: all 0.2s ease;
  }

  .help-card a:hover {
    color: var(--mefema-brown);
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
  }
</style>

<?php get_part('includes/footer.php');  ?>
