<?php 
http_response_code(404);
$pageTitle = "Página Não Encontrada - 404"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>

<!-- SEÇÃO HERO ATUALIZADA COM ANIMAÇÕES DE DIAMANTES -->
<section class="section-py landing-hero position-relative" id="landingHero">
  <!-- Camadas de Animação de Fundo -->
  <div class="hero-animated-bg"></div>
  
  <!-- Traços Decorativos de Diamantes -->
  <div class="hero-decorative-lines">
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
    <div class="hero-diamond-line"></div>
  </div>

  <!-- Nós de Tecnologia (Tech Nodes) -->
  <div class="hero-tech-node" style="top: 10%; left: 8%;"></div>
  <div class="hero-tech-node" style="top: 25%; right: 12%;"></div>
  <div class="hero-tech-node" style="bottom: 20%; left: 5%;"></div>
  <div class="hero-tech-node" style="bottom: 15%; right: 10%;"></div>

  <!-- Conteúdo Principal -->
  <div class="container py-5 position-relative" style="z-index: 5;">
    <div class="row align-items-center">

      <div class="col-lg-6 text-lg-start text-center mb-5 mb-lg-0">
        <div class="badge bg-label-primary rounded-pill mb-3 px-3 py-2">
          <i class="ri ri-sparkling-fill me-1"></i> Mefema Systems
        </div>

        <h1 class="display-4 fw-bold mb-4 lh-sm hero-title-glow">
          Acelere a sua <span class="text-primary d-block">Transformação Digital.</span>
        </h1>

        <p class="lead mb-5 pe-lg-5 hero-text-fade">
          Soluções Tecnológicas Inteligentes Para Empresas Inteligentes.
        </p>

        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
          <a class="btn btn-lg btn-primary shadow-lg hero-btn-primary" href="servicos">
            Explorar Serviços
          </a>
          <a class="btn btn-lg btn-outline-dark hero-btn-outline" href="sobre">
            Saiba Mais
          </a>
        </div>
      </div>

      <div class="col-lg-6 text-center">
        <img
          alt="Mefema Systems"
          class="img-fluid hero-image-float"
          data-speed="2"
          src="assets/img/landing-page/hero.webp"
        />
      </div>

    </div>
  </div>
</section>

<?php get_part('includes/footer.php'); ?>
