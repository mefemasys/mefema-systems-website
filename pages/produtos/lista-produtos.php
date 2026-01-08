<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Nossos Produtos - MEFEMA Systems";
get_part('includes/header.php');
?>

<link rel="stylesheet" href="/assets/css/produtos.css">

<!-- Hero Principal -->
<section class="hero-section text-center">
  <div class="container py-5">
    <h1 class="hero-title display-4 fw-bold mb-4">
      Os Nossos <span class="text-gradient">Produtos</span> Digitais
    </h1>
    <p class="hero-subtitle lead col-lg-8 mx-auto mb-5">
      Soluções prontas e testadas para o seu negócio. Escolha um produto, personalize se necessário e comece a usar rapidamente.
    </p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <span class="badge bg-light text-dark fs-6 px-4 py-3"><i class="ri-speed-line me-2"></i>Implementação rápida</span>
      <span class="badge bg-light text-dark fs-6 px-4 py-3"><i class="ri-shield-check-line me-2"></i>Testados e seguros</span>
      <span class="badge bg-light text-dark fs-6 px-4 py-3"><i class="ri-customer-service-2-line me-2"></i>Suporte incluído</span>
    </div>
  </div>
</section>

<!-- Categorias de Produtos -->
<section class="py-5">
  <div class="container">
    <div class="row g-5">

      <!-- Websites Prontos -->
      <div class="col-lg-6 col-xl-4">
        <a href="/produtos/websites/" class="text-decoration-none">
          <div class="card h-100 border-0 shadow-sm hover-shadow-lg transition-300 product-category-card">
            <div class="text-center pt-5 px-4">
              <div class="icon-box icon-orange mx-auto mb-4">
                <i class="ri-global-line fs-1"></i>
              </div>
              <h3 class="h4 fw-bold mb-3">Websites Prontos</h3>
              <p class="text-muted mb-4 px-3">
                Pacotes completos de websites: institucional, empresarial, e-commerce, landing page, restaurante e mais.
              </p>
              <div class="d-flex align-items-center justify-content-center text-primary fw-bold">
                <span>Ver todos os pacotes</span>
                <i class="ri-arrow-right-line ms-2 fs-5"></i>
              </div>
            </div>
            <div class="card-footer border-0 bg-transparent text-center pb-4">
              <small class="text-muted">A partir de 12.000 MT</small>
            </div>
          </div>
        </a>
      </div>

      <!-- Sistemas de Gestão Prontos -->
      <div class="col-lg-6 col-xl-4">
        <a href="/produtos/sistemas-gestao/" class="text-decoration-none">
          <div class="card h-100 border-0 shadow-sm hover-shadow-lg transition-300 product-category-card">
            <div class="text-center pt-5 px-4">
              <div class="icon-box icon-blue mx-auto mb-4">
                <i class="ri-dashboard-3-line fs-1"></i>
              </div>
              <h3 class="h4 fw-bold mb-3">Sistemas de Gestão</h3>
              <p class="text-muted mb-4 px-3">
                ERP, CRM, facturação certificada AT, gestão de stock, RH, escolar, clínica, restaurante e hotelaria.
              </p>
              <div class="d-flex align-items-center justify-content-center text-primary fw-bold">
                <span>Explorar sistemas</span>
                <i class="ri-arrow-right-line ms-2 fs-5"></i>
              </div>
            </div>
            <div class="card-footer border-0 bg-transparent text-center pb-4">
              <small class="text-muted">A partir de 25.000 MT</small>
            </div>
          </div>
        </a>
      </div>

      <!-- Apps Móveis Prontas -->
      <div class="col-lg-6 col-xl-4">
        <a href="/produtos/apps-mobile/" class="text-decoration-none">
          <div class="card h-100 border-0 shadow-sm hover-shadow-lg transition-300 product-category-card">
            <div class="text-center pt-5 px-4">
              <div class="icon-box icon-green mx-auto mb-4">
                <i class="ri-smartphone-line fs-1"></i>
              </div>
              <h3 class="h4 fw-bold mb-3">Apps Móveis</h3>
              <p class="text-muted mb-4 px-3">
                Aplicações nativas ou híbridas prontas: delivery, táxi, loja mobile, presença empresarial.
              </p>
              <div class="d-flex align-items-center justify-content-center text-primary fw-bold">
                <span>Ver aplicações</span>
                <i class="ri-arrow-right-line ms-2 fs-5"></i>
              </div>
            </div>
            <div class="card-footer border-0 bg-transparent text-center pb-4">
              <small class="text-muted">A partir de 60.000 MT</small>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- Call to Action Final -->
<section class="py-5 text-center bg-light">
  <div class="container">
    <h3 class="mb-4 fw-bold">Precisa de algo personalizado?</h3>
    <p class="lead text-muted col-lg-8 mx-auto mb-5">
      Se nenhum dos nossos produtos prontos atende exatamente à sua necessidade,<br>
      temos uma equipa dedicada para desenvolver soluções sob medida.
    </p>
    <a href="/servicos/" class="btn btn-primary btn-lg px-5">
      <i class="ri-tools-line me-2"></i> Ver Serviços de Desenvolvimento
    </a>
  </div>
</section>

<?php get_part('includes/footer.php'); ?>
