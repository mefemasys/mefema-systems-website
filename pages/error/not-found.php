<?php 
http_response_code(404);
$pageTitle = "Página Não Encontrada - 404"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>

<style>
  :root {
    --brand-orange: #FF8F00; 
    --brand-orange-hover: #FFB300;
  }
  /* Forçar o fundo a ser escuro caso o hero-animated-bg não cubra tudo */
  #error404 { background-color: #1a1513; overflow: hidden; }

  /* Texto em Branco Puro para Contraste */
  #error404 h2, #error404 .hero-text-fade { color: #FFFFFF !important; }
  
  /* Badge com fundo semi-transparente e texto branco/laranja */
  #error404 .badge-custom { 
    background: rgba(255, 255, 255, 0.1); 
    border: 1px solid rgba(255, 143, 0, 0.5);
    color: var(--brand-orange) !important; 
  }

  /* Botão Laranja Vibrante */
  #error404 .hero-btn-primary { 
    background-color: var(--brand-orange) !important; 
    border-color: var(--brand-orange) !important; 
    color: #fff !important;
    font-weight: 600;
  }
  #error404 .hero-btn-primary:hover { 
    background-color: var(--brand-orange-hover) !important; 
    transform: translateY(-2px);
  }

  /* Links Úteis em Branco com Hover Laranja */
  #error404 .explore-link { 
    color: rgba(255, 255, 255, 0.8) !important; 
    transition: 0.3s; 
    border-bottom: 1px solid transparent;
  }
  #error404 .explore-link:hover { 
    color: var(--brand-orange) !important; 
    border-bottom: 1px solid var(--brand-orange);
  }

  /* Ajuste das animações para tons de laranja/branco (sem roxo) */
  .hero-animated-bg { opacity: 0.15; filter: grayscale(1) sepia(1) hue-rotate(10deg) saturate(5); }
</style>

<section class="section-py landing-hero position-relative d-flex align-items-center" id="error404" style="min-height: 85vh;">
  <div class="hero-animated-bg"></div>
  
  <div class="hero-decorative-lines">
    <div class="hero-diamond-line" style="border-color: rgba(255,255,255,0.1);"></div>
    <div class="hero-diamond-line" style="border-color: rgba(255,143,0,0.2);"></div>
  </div>
  
  <div class="hero-tech-node" style="top: 15%; left: 10%; background: var(--brand-orange); box-shadow: 0 0 20px var(--brand-orange);"></div>
  <div class="hero-tech-node" style="bottom: 20%; right: 10%; background: #fff; box-shadow: 0 0 20px #fff;"></div>
  
  <div class="container position-relative" style="z-index: 5;">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6 text-center">
        
        <div class="badge badge-custom rounded-pill mb-4 px-3 py-2">
          <i class="ri ri-error-warning-line me-1"></i> Erro 404
        </div>
        
        <h2 class="display-5 fw-bold mb-4">
          Ups! Esta página sumiu no espaço.
        </h2>
        
        <p class="fs-5 mb-5 hero-text-fade" style="opacity: 0.9;">
          A página que procura não foi encontrada ou foi movida. <br>
          Não se preocupe, vamos levá-lo de volta à segurança.
        </p>
        
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
          <a class="btn btn-lg shadow-lg hero-btn-primary px-5" href="/">
            <i class="ri ri-home-4-line me-2"></i>
            Voltar ao Início
          </a>
        </div>
        
        <div class="mt-5 pt-4">
          <p style="color: rgba(255,255,255,0.5);" class="small text-uppercase tracking-widest mb-3">Links Úteis</p>
          <div class="d-flex gap-4 justify-content-center flex-wrap">
            <a href="/sobre" class="explore-link text-decoration-none fw-medium">Sobre Nós</a>
            <a href="/servicos" class="explore-link text-decoration-none fw-medium">Serviços</a>
            <a href="/produtos" class="explore-link text-decoration-none fw-medium">Produtos</a>
            <a href="/contacto" class="explore-link text-decoration-none fw-medium">Contacto</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_part('includes/footer.php'); ?>
