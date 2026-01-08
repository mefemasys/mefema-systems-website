<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Produtos - MEFEMA Systems";
get_part('includes/header.php');
?>

<link rel="stylesheet" href="/assets/css/produtos.css">

<!-- Hero Simples -->
<section class="landing-hero-websites py-5">
  <div class="container text-center">
    <div class="hero-badge mb-4">
      <i class="ri-boxing-line text-primary"></i>
      <span class="badge-text">Produtos Prontos para o Seu Negócio</span>
    </div>
    <h1 class="hero-title mb-4">
      Escolha o Seu <span class="text-gradient">Produto Digital</span>
    </h1>
    <p class="hero-subtitle col-lg-8 mx-auto mb-5">
      Soluções já desenvolvidas, testadas e prontas para implementação rápida.<br>
      Personalizáveis conforme a sua necessidade.
    </p>
  </div>
</section>

<!-- Cards das Categorias de Produtos -->
<section class="section-py landing-websites-list">
  <div class="container">
    <div class="row g-5 justify-content-center">

      <!-- 1. Websites -->
      <div class="col-lg-6 col-xl-5">
        <a href="/produtos/websites/" class="text-decoration-none">
          <div class="website-card h-100 text-center p-5 position-relative overflow-hidden">
            <div class="icon-box icon-primary mx-auto mb-4" style="width: 100px; height: 100px;">
              <i class="ri-global-line fs-1"></i>
            </div>
            <h3 class="website-name mb-3">Websites Prontos</h3>
            <p class="card-description mb-4 px-3">
              Pacotes completos com design moderno, responsivo e funcionalidades essenciais:<br>
              institucional, empresarial, e-commerce, landing page, restaurante e mais.
            </p>
            <ul class="features-list text-start mx-auto mb-4" style="max-width: 300px;">
              <li><i class="ri-check-line text-success"></i> Domínio e hospedagem incluídos</li>
              <li><i class="ri-check-line text-success"></i> SSL, email profissional</li>
              <li><i class="ri-check-line text-success"></i> Painel administrativo</li>
              <li><i class="ri-check-line text-success"></i> Suporte técnico dedicado</li>
            </ul>
            <div class="mt-auto">
              <span class="text-primary fw-bold fs-5">A partir de 25.000 MT</span><br><br>
              <span class="btn-action btn-order d-inline-flex align-items-center">
                Ver todos os pacotes <i class="ri-arrow-right-line ms-2"></i>
              </span>
            </div>
          </div>
        </a>
      </div>

      <!-- 2. Sistemas de Gestão -->
      <div class="col-lg-6 col-xl-5">
        <a href="/produtos/sistemas-gestao/" class="text-decoration-none">
          <div class="website-card h-100 text-center p-5 position-relative overflow-hidden">
            <div class="icon-box icon-success mx-auto mb-4" style="width: 100px; height: 100px;">
              <i class="ri-dashboard-3-line fs-1"></i>
            </div>
            <h3 class="website-name mb-3">Sistemas de Gestão</h3>
            <p class="card-description mb-4 px-3">
              Softwares robustos para automatizar e controlar o seu negócio:<br>
              facturação AT, stock, CRM, RH, escolar, clínica, hotelaria e ERP.
            </p>
            <ul class="features-list text-start mx-auto mb-4" style="max-width: 300px;">
              <li><i class="ri-check-line text-success"></i> Certificação AT (quando aplicável)</li>
              <li><i class="ri-check-line text-success"></i> Multi-utilizador e acessos por perfil</li>
              <li><i class="ri-check-line text-success"></i> Relatórios avançados</li>
              <li><i class="ri-check-line text-success"></i> Integrações locais (M-Pesa, etc.)</li>
            </ul>
            <div class="mt-auto">
              <span class="text-primary fw-bold fs-5">A partir de 45.000 MT</span><br><br>
              <span class="btn-action btn-order d-inline-flex align-items-center">
                Explorar sistemas <i class="ri-arrow-right-line ms-2"></i>
              </span>
            </div>
          </div>
        </a>
      </div>

      <!-- 3. Apps Móveis -->
      <div class="col-lg-6 col-xl-5">
        <a href="/produtos/apps-mobile/" class="text-decoration-none">
          <div class="website-card h-100 text-center p-5 position-relative overflow-hidden">
            <div class="icon-box icon-warning mx-auto mb-4" style="width: 100px; height: 100px;">
              <i class="ri-smartphone-line fs-1"></i>
            </div>
            <h3 class="website-name mb-3">Apps Móveis</h3>
            <p class="card-description mb-4 px-3">
              Aplicações nativas ou híbridas prontas para Android e iOS:<br>
              delivery, táxi, loja mobile, presença empresarial e soluções personalizadas.
            </p>
            <ul class="features-list text-start mx-auto mb-4" style="max-width: 300px;">
              <li><i class="ri-check-line text-success"></i> Publicação nas lojas (Play Store/App Store)</li>
              <li><i class="ri-check-line text-success"></i> Notificações push</li>
              <li><i class="ri-check-line text-success"></i> Modo offline (quando necessário)</li>
              <li><i class="ri-check-line text-success"></i> Integração com pagamentos móveis</li>
            </ul>
            <div class="mt-auto">
              <span class="text-primary fw-bold fs-5">A partir de 80.000 MT</span><br><br>
              <span class="btn-action btn-order d-inline-flex align-items-center">
                Ver aplicações <i class="ri-arrow-right-line ms-2"></i>
              </span>
            </div>
          </div>
        </a>
      </div>

      <!-- 4. Soluções IA + IoT -->
      <div class="col-lg-6 col-xl-5">
        <a href="/produtos/solucoes-ia-iot/" class="text-decoration-none">
          <div class="website-card h-100 text-center p-5 position-relative overflow-hidden">
            <div class="icon-box icon-info mx-auto mb-4" style="width: 100px; height: 100px;">
              <i class="ri-brain-line fs-1"></i>
            </div>
            <h3 class="website-name mb-3">Soluções IA + IoT</h3>
            <p class="card-description mb-4 px-3">
              Produtos inteligentes com Inteligência Artificial e Internet das Coisas:<br>
              chatbots avançados, automação preditiva, sensores conectados e análise de dados.
            </p>
            <ul class="features-list text-start mx-auto mb-4" style="max-width: 300px;">
              <li><i class="ri-check-line text-success"></i> Chatbots com IA (WhatsApp, site)</li>
              <li><i class="ri-check-line text-success"></i> Monitorização remota em tempo real</li>
              <li><i class="ri-check-line text-success"></i> Dashboards preditivos</li>
              <li><i class="ri-check-line text-success"></i> Integração com hardware existente</li>
            </ul>
            <div class="mt-auto">
              <span class="text-primary fw-bold fs-5">Sob consulta</span><br><br>
              <span class="btn-action btn-order d-inline-flex align-items-center">
                Saber mais <i class="ri-arrow-right-line ms-2"></i>
              </span>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- CTA Final (opcional) -->
<section class="py-5 text-center bg-light">
  <div class="container">
    <p class="lead mb-4">
      Não encontrou o produto ideal? Temos soluções personalizadas.
    </p>
    <a href="/contacto/" class="btn btn-primary btn-lg">
      <i class="ri-mail-send-line me-2"></i> Fale com a nossa equipa
    </a>
  </div>
</section>

<?php get_part('includes/footer.php'); ?>
