<?php 
http_response_code(404);
$pageTitle = "Página Não Encontrada - 404"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>

<style>
  :root {
    --brand-brown: #5D4037; /* Castanho */
    --brand-orange: #FF8F00; /* Laranja */
  }
  #error404 h2 { color: var(--brand-brown); }
  #error404 .badge { background-color: rgba(255, 143, 0, 0.1) !important; color: var(--brand-orange) !important; }
  #error404 .hero-btn-primary { background-color: var(--brand-orange) !important; border-color: var(--brand-orange) !important; color: #fff !important; }
  #error404 .hero-btn-primary:hover { background-color: var(--brand-brown) !important; border-color: var(--brand-brown) !important; }
  #error404 .text-decoration-none { color: var(--brand-brown); transition: 0.3s; }
  #error404 .text-decoration-none:hover { color: var(--brand-orange); }
  /* Remove brilhos roxos das animações se existirem no CSS global */
  .hero-animated-bg { filter: hue-rotate(250deg) saturate(0.5); } /* Ajuste de matiz para tons quentes */
</style>

<section class="section-py landing-hero position-relative d-flex align-items-center" id="error404" style="min-height: 80vh;">
  <div class="hero-animated-bg"></div>
  
  <div class="hero-decorative-lines">
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
  </div>
  
  <div class="hero-tech-node" style="top: 10%; left: 8%; background: var(--brand-orange);"></div>
  <div class="hero-tech-node" style="top: 25%; right: 12%; background: var(--brand-brown);"></div>
  
  <div class="container position-relative" style="z-index: 5;">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6 text-center">
        <div class="badge rounded-pill mb-3 px-3 py-2">
          <i class="ri ri-error-warning-line me-1"></i> Página Não Encontrada
        </div>
        
        <h2 class="h1 fw-bold mb-4">
          Ups! Esta página não existe.
        </h2>
        
        <p class="lead mb-5 text-muted hero-text-fade">
          A página que procura pode ter sido removida, ter o nome alterado ou estar temporariamente indisponível.
        </p>
        
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
          <a class="btn btn-lg shadow-lg hero-btn-primary" href="/">
            <i class="ri ri-home-line me-2"></i>
            Voltar à Página Inicial
          </a>
        </div>
        
        <div class="mt-5 pt-4">
          <p class="text-muted mb-3">Ou explore:</p>
          <div class="d-flex gap-4 justify-content-center flex-wrap">
            <a href="/sobre" class="text-decoration-none fw-medium">Sobre Nós</a>
            <a href="/servicos" class="text-decoration-none fw-medium">Serviços</a>
            <a href="/produtos" class="text-decoration-none fw-medium">Produtos</a>
            <a href="/portfolio" class="text-decoration-none fw-medium">Portfolio</a>
            <a href="/contacto" class="text-decoration-none fw-medium">Contacto</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_part('includes/footer.php'); ?>
