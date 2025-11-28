<style>

/* Transições */
.transition-300 {
  transition: all 0.3s ease;
}

/* Hover */
.hover-shadow-lg:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 35px rgba(0,0,0,0.12) !important;
}

/* Sem arredondamentos */
.card, 
.btn, 
.badge, 
.nav-link, 
img,
.carousel-inner,
.carousel-item {
  border-radius: 0 !important;
}

/* Cards maiores */
.product-card {
  min-height: 650px;
  display: flex;
  flex-direction: column;
}

/* Slider */
.product-carousel img {
  width: 100%;
  height: 220px;
  object-fit: cover;
}

/* Corpo do card */
.card-body {
  flex-grow: 1;
}

/* Ícones */
.icon-box {
  padding: 14px;
  border: 1px solid #ddd;
}

/* Tabs */
.nav-tabs-clean .nav-link {
  border: none;
  color: var(--bs-body-color);
  font-size: 1rem;
}

.nav-tabs-clean .nav-link.active {
  border-bottom: 3px solid var(--bs-primary);
  background: transparent;
  color: var(--bs-primary);
  font-weight: 600;
}

/* Paginação */
.pagination-clean .page-link {
  border: 1px solid #ddd;
  color: #333;
  border-radius: 0 !important;
}

.pagination-clean .page-link:hover {
  background: #f5f5f5;
}

</style>

<section class="py-5" id="produtosContent">
<div class="container">

<!-- ===================== TABS ===================== -->

<ul class="nav nav-tabs nav-tabs-clean justify-content-center mb-5" id="produtosTab">
  <li class="nav-item">
    <button class="nav-link active px-4 py-3" data-bs-toggle="tab" data-bs-target="#websites">
      Websites
    </button>
  </li>

  <li class="nav-item">
    <button class="nav-link px-4 py-3" data-bs-toggle="tab" data-bs-target="#sistemas">
      Sistemas
    </button>
  </li>

  <li class="nav-item">
    <button class="nav-link px-4 py-3" data-bs-toggle="tab" data-bs-target="#outros">
      Outros
    </button>
  </li>
</ul>

<div class="tab-content">

<!-- ============================================================= -->
<!-- ===================== WEBSITES ============================= -->
<!-- ============================================================= -->

<div class="tab-pane fade show active" id="websites">

<div class="row g-4">

<!-- CARD 1 -->
<div class="col-md-6 col-lg-6">
<div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">

<div id="carouselWeb1" class="carousel slide product-carousel" data-bs-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/logos/logo.png">
    </div>
    <div class="carousel-item">
      <img src="assets/img/logos/logo.png">
    </div>
    <div class="carousel-item">
      <img src="assets/img/logos/logo.png">
    </div>
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
      <i class="ri-global-line fs-3"></i>
    </div>
    <h4 class="mb-0 fw-bold">Website Institucional</h4>
  </div>

  <p class="text-muted small">
    Website profissional, optimizado, rápido e responsivo.
  </p>

  <ul class="list-unstyled small text-muted">
    <li>Até 10 páginas</li>
    <li>SEO incluído</li>
    <li>Administração fácil</li>
  </ul>

  <div class="mt-4 pt-3 border-top">
    <strong class="h5">Desde 18.000 MT</strong>
  </div>

</div>

<div class="card-footer text-center border-0 pb-4">
  <a href="#contacto" class="btn btn-primary btn-sm px-4">Pedir Orçamento</a>
</div>

</div>
</div>

<!-- CARD 2 -->
<div class="col-md-6 col-lg-6">
<div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">

<div id="carouselWeb2" class="carousel slide product-carousel" data-bs-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/logos/logo.png">
    </div>
    <div class="carousel-item">
      <img src="assets/img/logos/logo.png">
    </div>
  </div>

</div>

<div class="card-body p-4">

  <div class="d-flex align-items-center mb-4">
    <div class="icon-box text-warning me-3">
      <i class="ri-rocket-line fs-3"></i>
    </div>
    <h4 class="mb-0 fw-bold">Landing Page</h4>
  </div>

  <p class="text-muted small">
    Página focada em conversão de clientes.
  </p>

  <ul class="list-unstyled small text-muted">
    <li>Alta conversão</li>
    <li>WhatsApp integrado</li>
    <li>Pixel Facebook & Google</li>
  </ul>

  <div class="mt-4 pt-3 border-top">
    <strong class="h5">Desde 9.500 MT</strong>
  </div>

</div>

<div class="card-footer text-center border-0 pb-4">
  <a href="#contacto" class="btn btn-outline-primary btn-sm px-4">Solicitar</a>
</div>

</div>
</div>

</div>

<!-- PAGINAÇÃO -->
<nav class="mt-5">
  <ul class="pagination justify-content-center pagination-clean">
    <li class="page-item disabled">
      <span class="page-link">Anterior</span>
    </li>
    <li class="page-item active">
      <span class="page-link">1</span>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">Próximo</a>
    </li>
  </ul>
</nav>

</div>

<!-- ============================================================= -->
<!-- ===================== SISTEMAS ============================ -->
<!-- ============================================================= -->

<div class="tab-pane fade" id="sistemas">
<div class="row g-4">

<div class="col-md-6 col-lg-6">
<div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">

<div id="carouselSys1" class="carousel slide product-carousel" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="assets/img/logos/logo.png"></div>
    <div class="carousel-item"><img src="assets/img/logos/logo.png"></div>
  </div>
</div>

<div class="card-body p-4">

  <div class="d-flex align-items-center mb-4">
    <div class="icon-box text-danger me-3">
      <i class="ri-file-list-3-line fs-3"></i>
    </div>
    <h4 class="fw-bold">Sistema de Facturação</h4>
  </div>

  <p class="text-muted small">
    Software certificado pela AT para Moçambique.
  </p>

  <ul class="list-unstyled small text-muted">
    <li>PDV</li>
    <li>Stock multi-loja</li>
    <li>M-Pesa integrado</li>
  </ul>

  <div class="mt-4 pt-3 border-top">
    <strong class="h5">Desde 35.000 MT</strong>
  </div>

</div>

<div class="card-footer text-center border-0 pb-4">
  <a href="#contacto" class="btn btn-danger btn-sm">Pedir Demo</a>
</div>

</div>
</div>

</div>

<nav class="mt-5">
  <ul class="pagination justify-content-center pagination-clean">
    <li class="page-item disabled"><span class="page-link">Anterior</span></li>
    <li class="page-item active"><span class="page-link">1</span></li>
    <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
  </ul>
</nav>

</div>

<!-- ============================================================= -->
<!-- ===================== OUTROS =============================== -->
<!-- ============================================================= -->

<div class="tab-pane fade" id="outros">
<div class="row g-4">

<div class="col-md-6 col-lg-6">
<div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">

<div id="carouselERP" class="carousel slide product-carousel" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="assets/img/logos/logo.png"></div>
    <div class="carousel-item"><img src="assets/img/logos/logo.png"></div>
  </div>
</div>

<div class="card-body p-4">

  <div class="d-flex align-items-center mb-4">
    <div class="icon-box text-dark me-3">
      <i class="ri-dashboard-3-line fs-3"></i>
    </div>
    <h4 class="fw-bold">ERP Simplificado</h4>
  </div>

  <p class="text-muted small">
    Plataforma completa para PMEs.
  </p>

  <ul class="list-unstyled small text-muted">
    <li>Financeiro</li>
    <li>Vendas</li>
    <li>Stock</li>
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

<nav class="mt-5">
  <ul class="pagination justify-content-center pagination-clean">
    <li class="page-item disabled"><span class="page-link">Anterior</span></li>
    <li class="page-item active"><span class="page-link">1</span></li>
    <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
  </ul>
</nav>

</div>

</div>
</div>
</section>
