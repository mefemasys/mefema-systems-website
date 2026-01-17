<?php 
http_response_code(404);
$pageTitle = "Página Não Encontrada - 404"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>
<!-- SEÇÃO 404 COM ANIMAÇÕES DE DIAMANTES -->
<section class="section-py landing-hero position-relative d-flex align-items-center" id="error404" style="min-height: 80vh;">
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
  
  <!-- Conteúdo Principal Centralizado -->
  <div class="container position-relative" style="z-index: 5;">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6 text-center">
        <!-- Badge -->
        <div class="badge bg-label-primar rounded-pill mb-3 px-3 py-2">
          <i class="ri ri-error-warning-line me-1"></i> Página Não Encontrada
        </div>
        
        <!-- Título -->
        <h2 class="h3 fw-bold mb-4">
          Ups! Esta página não existe.
        </h2>
        
        <!-- Descrição -->
        <p class="lead mb-5 text-muted hero-text-fade">
          A página que procura pode ter sido removida, ter o nome alterado ou estar temporariamente indisponível.
        </p>
        
        <!-- Botões de Acção -->
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
          <a class="btn btn-lg btn-primary shadow-lg hero-btn-primary" href="/">
            <i class="ri ri-home-line me-2"></i>
            Voltar à Página Inicial
          </a>
        </div>
        
        <!-- Links Úteis -->
        <div class="mt-5 pt-4">
          <p class="text-muted mb-3">Ou explore:</p>
          <div class="d-flex gap-4 justify-content-center flex-wrap">
            <a href="servicos" class="text-decoration-none">Serviços</a>
            <a href="sobre" class="text-decoration-none">Sobre Nós</a>
            <a href="contacto" class="text-decoration-none">Contacto</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_part('includes/footer.php'); ?>
