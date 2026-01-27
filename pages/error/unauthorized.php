<?php 
http_response_code(403);
$pageTitle = "Acesso Negado - 403"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>

<style>
  :root {
    --brand-brown: #5D4037;
    --brand-orange: #FF8F00;
    --error-red: #D32F2F;
  }
  #error403 h2 { color: var(--error-red); }
  #error403 .badge { background-color: rgba(211, 47, 47, 0.1) !important; color: var(--error-red) !important; }
  #error403 .hero-btn-primary { background-color: var(--brand-orange) !important; border-color: var(--brand-orange) !important; color: #fff !important; }
  #error403 .hero-btn-primary:hover { background-color: var(--brand-brown) !important; border-color: var(--brand-brown) !important; }
  #error403 .hero-btn-secondary { background-color: transparent !important; border: 2px solid var(--brand-brown) !important; color: var(--brand-brown) !important; }
  #error403 .hero-btn-secondary:hover { background-color: var(--brand-brown) !important; color: #fff !important; }
  #error403 .text-decoration-none { color: var(--brand-brown); transition: 0.3s; }
  #error403 .text-decoration-none:hover { color: var(--brand-orange); }
  #error403 .lock-icon { font-size: 5rem; color: var(--error-red); opacity: 0.2; margin-bottom: 1rem; }
</style>

<section class="section-py landing-hero position-relative d-flex align-items-center" id="error403" style="min-height: 80vh;">
  <div class="hero-animated-bg"></div>
  
  <div class="hero-decorative-lines">
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
  </div>
  
  <div class="hero-tech-node" style="top: 10%; left: 8%; background: var(--error-red);"></div>
  <div class="hero-tech-node" style="top: 25%; right: 12%; background: var(--brand-brown);"></div>
  
  <div class="container position-relative" style="z-index: 5;">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6 text-center">
        <i class="ri ri-lock-line lock-icon"></i>
        
        <div class="badge rounded-pill mb-3 px-3 py-2">
          <i class="ri ri-shield-cross-line me-1"></i> Acesso Negado
        </div>
        
        <h2 class="h1 fw-bold mb-4">
          Não tem permissão para aceder a esta página.
        </h2>
        
        <p class="lead mb-5 text-muted hero-text-fade">
          O acesso a este recurso está restrito. Se acredita que deveria ter acesso, por favor contacte o administrador do sistema ou faça login com as credenciais apropriadas.
        </p>
        
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
          <a class="btn btn-lg shadow-lg hero-btn-primary" href="/">
            <i class="ri ri-home-line me-2"></i>
            Voltar à Página Inicial
          </a>
          <a class="btn btn-lg shadow-lg hero-btn-secondary" href="/contacto">
            <i class="ri ri-customer-service-line me-2"></i>
            Contactar Suporte
          </a>
        </div>
        
        <div class="mt-5 pt-4">
          <p class="text-muted mb-3">Precisa de ajuda?</p>
          <div class="d-flex gap-4 justify-content-center flex-wrap">
            <a href="/sobre" class="text-decoration-none fw-medium">Sobre Nós</a>
            <a href="/servicos" class="text-decoration-none fw-medium">Serviços</a>
            <a href="/portfolio" class="text-decoration-none fw-medium">Portfolio</a>
            <a href="/contacto" class="text-decoration-none fw-medium">Contacto</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_part('includes/footer.php'); ?>