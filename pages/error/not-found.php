<?php 
http_response_code(404);
$pageTitle = "Página Não Encontrada - 404"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>

<style>
  :root {
    --brand-brown: #5D4037; 
    --brand-orange: #FF8F00;
    --pure-white: #FFFFFF;
  }
  
  /* Fundo da seção principal em branco para contraste */
  #error404 { 
    background-color: var(--pure-white) !important; 
  }

  /* Título em castanho forte para leitura clara */
  #error404 h2 { 
    color: var(--brand-brown); 
    font-size: 2.5rem;
  }

  /* Badge com fundo branco e borda laranja */
  #error404 .badge-custom { 
    background-color: #fff;
    border: 1px solid var(--brand-orange);
    color: var(--brand-orange);
    font-weight: 600;
  }

  /* Botão Laranja vibrante */
  #error404 .hero-btn-primary { 
    background-color: var(--brand-orange) !important; 
    border-color: var(--brand-orange) !important; 
    color: #fff !important;
    padding: 12px 30px;
    transition: all 0.3s ease;
  }

  #error404 .hero-btn-primary:hover { 
    background-color: var(--brand-brown) !important; 
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }

  /* Links em castanho sobre fundo branco */
  #error404 .nav-error-link { 
    color: var(--brand-brown); 
    font-weight: 500;
    text-decoration: none;
    border-bottom: 2px solid transparent;
    transition: 0.3s;
  }

  #error404 .nav-error-link:hover { 
    color: var(--brand-orange);
    border-bottom-color: var(--brand-orange);
  }

  /* Elementos decorativos mais sutis para não "sujar" o branco */
  .hero-tech-node { opacity: 0.4; }
</style>

<section class="section-py landing-hero position-relative d-flex align-items-center" id="error404" style="min-height: 85vh;">
  
  <div class="hero-decorative-lines" style="opacity: 0.1;">
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
  </div>
  
  <div class="container position-relative" style="z-index: 5;">
    <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
        
        <h1 class="display-1 fw-bold mb-0" style="color: rgba(93, 64, 55, 0.05); font-size: 10rem; position: absolute; left: 50%; top: 40%; transform: translate(-50%, -50%); z-index: -1;">
          404
        </h1>

        <div class="badge badge-custom rounded-pill mb-4 px-4 py-2 shadow-sm">
          <i class="ri ri-error-warning-line me-2"></i> OPS! ALGO CORREU MAL
        </div>
        
        <h2 class="fw-black mb-3">
          Página Não Encontrada
        </h2>
        
        <p class="lead mb-5 text-dark opacity-75">
          Pedimos desculpa, mas a página que procura não existe ou foi movida.<br>
          Pode utilizar os links abaixo para voltar ao caminho certo.
        </p>
        
        <div class="mb-5">
          <a class="btn btn-lg hero-btn-primary rounded-pill" href="/">
            <i class="ri ri-home-4-line me-2"></i>
            Ir para a Página Inicial
          </a>
        </div>
        
        <div class="pt-4 border-top" style="border-color: rgba(0,0,0,0.05) !important;">
          <p class="small text-uppercase tracking-wider fw-bold text-muted mb-4">Links de Apoio</p>
          <div class="d-flex gap-4 justify-content-center flex-wrap">
            <a href="/sobre" class="nav-error-link">Sobre Nós</a>
            <a href="/servicos" class="nav-error-link">Serviços</a>
            <a href="/produtos" class="nav-error-link">Produtos</a>
            <a href="/contacto" class="nav-error-link">Contacto</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_part('includes/footer.php'); ?>
