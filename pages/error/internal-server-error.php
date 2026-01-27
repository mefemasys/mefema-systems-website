<?php 
http_response_code(500);
$pageTitle = "Erro do Servidor - 500"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>

<style>
  :root {
    --brand-brown: #5D4037;
    --brand-orange: #FF8F00;
    --error-dark: #B71C1C;
  }
  #error500 h2 { color: var(--error-dark); }
  #error500 .badge { background-color: rgba(183, 28, 28, 0.1) !important; color: var(--error-dark) !important; }
  #error500 .hero-btn-primary { background-color: var(--brand-orange) !important; border-color: var(--brand-orange) !important; color: #fff !important; }
  #error500 .hero-btn-primary:hover { background-color: var(--brand-brown) !important; border-color: var(--brand-brown) !important; }
  #error500 .hero-btn-secondary { background-color: transparent !important; border: 2px solid var(--brand-brown) !important; color: var(--brand-brown) !important; }
  #error500 .hero-btn-secondary:hover { background-color: var(--brand-brown) !important; color: #fff !important; }
  #error500 .text-decoration-none { color: var(--brand-brown); transition: 0.3s; }
  #error500 .text-decoration-none:hover { color: var(--brand-orange); }
  #error500 .server-icon { font-size: 5rem; color: var(--error-dark); opacity: 0.2; margin-bottom: 1rem; }
  #error500 .alert-info { background-color: rgba(255, 143, 0, 0.1); border-color: var(--brand-orange); color: var(--brand-brown); }
</style>

<section class="section-py landing-hero position-relative d-flex align-items-center" id="error500" style="min-height: 80vh;">
  <div class="hero-animated-bg"></div>
  
  <div class="hero-decorative-lines">
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
  </div>
  
  <div class="hero-tech-node" style="top: 10%; left: 8%; background: var(--error-dark);"></div>
  <div class="hero-tech-node" style="top: 25%; right: 12%; background: var(--brand-brown);"></div>
  
  <div class="container position-relative" style="z-index: 5;">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-7 text-center">
        <i class="ri ri-server-line server-icon"></i>
        
        <div class="badge rounded-pill mb-3 px-3 py-2">
          <i class="ri ri-alert-line me-1"></i> Erro Interno do Servidor
        </div>
        
        <h2 class="h1 fw-bold mb-4">
          Algo correu mal do nosso lado.
        </h2>
        
        <p class="lead mb-4 text-muted hero-text-fade">
          Lamentamos, mas ocorreu um erro inesperado no servidor. A nossa equipa técnica foi notificada automaticamente e está a trabalhar para resolver o problema.
        </p>
        
        <div class="alert alert-info mb-5 text-start" role="alert">
          <i class="ri ri-information-line me-2"></i>
          <strong>O que pode fazer:</strong>
          <ul class="mb-0 mt-2 ps-4">
            <li>Aguarde alguns minutos e tente novamente</li>
            <li>Verifique se o problema persiste em outras páginas</li>
            <li>Se o erro continuar, contacte o nosso suporte técnico</li>
          </ul>
        </div>
        
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
          <a class="btn btn-lg shadow-lg hero-btn-primary" href="/">
            <i class="ri ri-home-line me-2"></i>
            Voltar à Página Inicial
          </a>
          <a class="btn btn-lg shadow-lg hero-btn-secondary" href="/contacto">
            <i class="ri ri-customer-service-line me-2"></i>
            Reportar Problema
          </a>
        </div>
        
        <div class="mt-5 pt-4">
          <p class="text-muted mb-3">Enquanto resolvemos isto, explore:</p>
          <div class="d-flex gap-4 justify-content-center flex-wrap">
            <a href="/sobre" class="text-decoration-none fw-medium">Sobre Nós</a>
            <a href="/servicos" class="text-decoration-none fw-medium">Serviços</a>
            <a href="/produtos" class="text-decoration-none fw-medium">Produtos</a>
            <a href="/portfolio" class="text-decoration-none fw-medium">Portfolio</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_part('includes/footer.php'); ?>