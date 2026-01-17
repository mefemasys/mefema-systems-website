<?php 
http_response_code(404);
$pageTitle = "Página Não Encontrada - 404"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>

<style>
  :root {
    --brand-orange: #FF9800; /* Laranja vibrante para destaque */
    --brand-white: #FFFFFF;  /* Branco puro para contraste */
  }
  
  #error404 {
    /* Garante que o fundo não abafe o conteúdo */
    background-color: #2b1a16; /* Tom de castanho bem escuro/café se o hero-bg falhar */
  }

  /* Título e Textos em Branco Puro */
  #error404 h2, 
  #error404 .display-1,
  #error404 .hero-text-fade { 
    color: var(--brand-white) !important; 
    text-shadow: 0px 2px 10px rgba(0,0,0,0.3);
  }

  /* Badge com fundo branco semi-transparente e texto laranja */
  #error404 .badge-error { 
    background-color: rgba(255, 255, 255, 0.9) !important; 
    color: var(--brand-orange) !important; 
    font-weight: 700;
  }

  /* Botão Laranja Vibrante */
  #error404 .hero-btn-primary { 
    background-color: var(--brand-orange) !important; 
    border-color: var(--brand-orange) !important; 
    color: #fff !important; 
    font-weight: 600;
    padding: 12px 30px;
  }
  
  #error404 .hero-btn-primary:hover { 
    background-color: #fff !important; 
    color: var(--brand-orange) !important;
    transform: translateY(-2px);
  }

  /* Links Úteis em Branco */
  #error404 .explore-link { 
    color: rgba(255, 255, 255, 0.8) !important; 
    text-decoration: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    transition: 0.3s;
  }
  
  #error404 .explore-link:hover { 
    color: var(--brand-orange) !important; 
    border-bottom-color: var(--brand-orange);
  }

  /* Forçar os nós de tecnologia a brilharem em branco/laranja */
  .hero-tech-node { background: var(--brand-white); box-shadow: 0 0 15px var(--brand-orange); }
</style>

<section class="section-py landing-hero position-relative d-flex align-items-center" id="error404" style="min-height: 80vh;">
  <div class="hero-animated-bg"></div>
  
  <div class="container position-relative" style="z-index: 5;">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6 text-center">
        
        <h1 class="display-1 fw-bold mb-0" style="opacity: 0.2; font-size: 8rem;">404</h1>

        <div class="badge badge-error rounded-pill mb-4 px-4 py-2 shadow">
          <i class="ri ri-error-warning-line me-1"></i> OPS! PÁGINA NÃO ENCONTRADA
        </div>
        
        <h2 class="h2 fw-bold mb-4">
          Lamentamos, mas a página que procura não existe.
        </h2>
        
        <p class="lead mb-5 hero-text-fade" style="font-size: 1.25rem; opacity: 0.9;">
          Pode ter sido movida ou o endereço digitado está incorreto.
        </p>
        
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center mb-5">
          <a class="btn btn-lg shadow-lg hero-btn-primary" href="/">
            <i class="ri ri-home-line me-2"></i>
            Voltar ao Início
          </a>
        </div>
        
        <div class="mt-5">
          <p style="color: rgba(255,255,255,0.6);" class="mb-3 text-uppercase small fw-bold">Navegação rápida</p>
          <div class="d-flex gap-4 justify-content-center flex-wrap">
            <a href="/sobre" class="explore-link">Sobre</a>
            <a href="/servicos" class="explore-link">Serviços</a>
            <a href="/produtos" class="explore-link">Produtos</a>
            <a href="/contacto" class="explore-link">Contacto</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_part('includes/footer.php'); ?>
