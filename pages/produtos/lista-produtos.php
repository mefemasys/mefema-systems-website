<style>
.transition-300 { transition: all 0.3s ease; }

.hover-shadow-lg:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 35px rgba(0,0,0,0.12) !important;
}

/* Sem arredondamentos */
.card, .btn, .badge, .nav-link, img {
  border-radius: 0 !important;
}

/* Cards maiores */
.product-card {
  min-height: 640px;
  display: flex;
  flex-direction: column;
}

.product-carousel img {
  width: 100%;
  height: 210px;
  object-fit: cover;
}

.card-body {
  flex-grow: 1;
}

.icon-box {
  padding: 14px;
  border: 1px solid #ddd;
}

.nav-tabs-clean .nav-link {
  border: none;
  color: var(--bs-body-color);
}

.nav-tabs-clean .nav-link.active {
  border-bottom: 3px solid var(--bs-primary);
  background: transparent;
  color: var(--bs-primary);
  font-weight: 600;
}
</style>

<section class="py-5 py-lg-7" id="produtosContent">
<div class="container">

<!-- TABS -->
<ul class="nav nav-tabs nav-tabs-clean justify-content-center mb-5" id="produtosTab">
  <li class="nav-item">
    <button class="nav-link active fs-5 px-4 py-3" data-bs-toggle="tab" data-bs-target="#websites">
      Websites
    </button>
  </li>
  <li class="nav-item">
    <button class="nav-link fs-5 px-4 py-3" data-bs-toggle="tab" data-bs-target="#sistemas">
      Sistemas de Gestão
    </button>
  </li>
  <li class="nav-item">
    <button class="nav-link fs-5 px-4 py-3" data-bs-toggle="tab" data-bs-target="#outros">
      Outros Produtos
    </button>
  </li>
</ul>

<div class="tab-content">

<!-- =================== WEBSITES =================== -->
<div class="tab-pane fade show active" id="websites">
<div class="row g-4">

<!-- WEBSITE CARD -->
<div class="col-lg-4 col-md-6">
<div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">

<div id="carouselWeb1" class="carousel slide product-carousel" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="img/web/1.jpg"></div>
    <div class="carousel-item"><img src="img/web/2.jpg"></div>
    <div class="carousel-item"><img src="img/web/3.jpg"></div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselWeb1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselWeb1" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="card-body p-4">
<div class="d-flex align-items-center mb-4">
  <div class="icon-box text-primary me-3">
    <i class="ri-building-4-line fs-3"></i>
  </div>
  <h4 class="mb-0 fw-bold">Website Institucional</h4>
</div>

<p class="text-muted small">Site corporativo completo, moderno e optimizado para Google.</p>

<ul class="list-unstyled small text-muted mt-3">
  <li>Até 10 páginas</li>
  <li>Responsivo</li>
  <li>SEO técnico</li>
  <li>SSL incluído</li>
</ul>

<div class="mt-4 pt-3 border-top">
  <strong class="h5">Desde 18.000 MT</strong>
</div>
</div>

<div class="card-footer text-center border-0 pb-4">
  <a href="#contacto" class="btn btn-primary btn-sm">Pedir Orçamento</a>
</div>

</div>
</div>

<!-- LANDING PAGE -->
<div class="col-lg-4 col-md-6">
<div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">

<div id="carouselWeb2" class="carousel slide product-carousel" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="img/landing/1.jpg"></div>
    <div class="carousel-item"><img src="img/landing/2.jpg"></div>
    <div class="carousel-item"><img src="img/landing/3.jpg"></div>
  </div>
</div>

<div class="card-body p-4">
<h4 class="fw-bold mb-3">Landing Page de Conversão</h4>

<p class="text-muted small">Página de alta conversão para serviços e campanhas.</p>

<ul class="list-unstyled small text-muted">
  <li>WhatsApp integrado</li>
  <li>Facebook Pixel</li>
  <li>Alta performance</li>
</ul>

<div class="mt-4 pt-3 border-top">
  <strong class="h5">Desde 9.500 MT</strong>
</div>
</div>

<div class="card-footer text-center border-0 pb-4">
  <a href="#contacto" class="btn btn-outline-primary btn-sm">Solicitar</a>
</div>

</div>
</div>
</div>
</div>

<!-- =================== SISTEMAS =================== -->
<div class="tab-pane fade" id="sistemas">
<div class="row g-4">

<div class="col-lg-4 col-md-6">
<div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">

<div id="carouselSys1" class="carousel slide product-carousel" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="img/sistema/1.jpg"></div>
    <div class="carousel-item"><img src="img/sistema/2.jpg"></div>
    <div class="carousel-item"><img src="img/sistema/3.jpg"></div>
  </div>
</div>

<div class="card-body p-4">
<h4 class="fw-bold mb-3">Sistema de Facturação Certificado</h4>

<p class="text-muted small">
Sistema fiscal certificado pela AT para Moçambique.
</p>

<ul class="list-unstyled small text-muted">
  <li>Multi-loja</li>
  <li>M-Pesa & POS</li>
  <li>Relatórios fiscais</li>
</ul>

<div class="mt-4 pt-3 border-top">
  <strong class="h5">Desde 35.000 MT</strong>
</div>
</div>

<div class="card-footer text-center border-0 pb-4">
  <a href="#contacto" class="btn btn-danger btn-sm">Pedir Demonstração</a>
</div>

</div>
</div>
</div>
</div>

<!-- =================== OUTROS =================== -->
<div class="tab-pane fade" id="outros">
<div class="row g-4">

<div class="col-lg-4 col-md-6">
<div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">

<div id="carouselERP" class="carousel slide product-carousel" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="img/erp/1.jpg"></div>
    <div class="carousel-item"><img src="img/erp/2.jpg"></div>
    <div class="carousel-item"><img src="img/erp/3.jpg"></div>
  </div>
</div>

<div class="card-body p-4">
<h4 class="fw-bold mb-3">ERP Simplificado</h4>

<p class="text-muted small">
Sistema completo para PMEs.
</p>

<ul class="list-unstyled small text-muted">
  <li>Facturação</li>
  <li>Stock</li>
  <li>Financeiro</li>
</ul>

<div class="mt-4 pt-3 border-top">
  <strong class="h5">Desde 65.000 MT</strong>
</div>
</div>

<div class="card-footer text-center border-0 pb-4">
  <a href="#contacto" class="btn btn-dark btn-sm">Ver Módulos</a>
</div>

</div>
</div>
</div>
</div>

</div>
</div>
</section>
