    <div class="wrapper">
        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="header-content">
                    <h1 class="header-title">
                        <i class="ri-gallery-line"></i> Cards Gallery
                    </h1>
                    <p class="header-subtitle">Portfólio de Soluções Profissionais</p>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <div class="container">
                <!-- Filtros de Categorias -->
                <section class="filters-section">
                    <div class="filters-header">
                        <h2>Categorias</h2>
                    </div>
                    <ul class="nav nav-tabs nav-tabs-clean" id="categoriasTab">
                        <li class="nav-item">
                            <button class="nav-link active" data-categoria="websites">
                                <i class="ri-global-line"></i>Websites
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-categoria="sistemas">
                                <i class="ri-dashboard-line"></i>Sistemas
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-categoria="mobile">
                                <i class="ri-smartphone-line"></i>Mobile
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-categoria="outros">
                                <i class="ri-apps-line"></i>Outros
                            </button>
                        </li>
                    </ul>
                </section>

                <!-- Grid de Cards -->
                <section class="cards-section">
                    <div class="cards-grid" id="produtosGrid">
                        <!-- Cards serão inseridos aqui -->
                    </div>
                </section>

                <!-- Paginação -->
                <section class="pagination-section" id="paginacaoContainer" style="display: none;">
                    <nav>
                        <ul class="pagination justify-content-center pagination-clean" id="paginacao"></ul>
                    </nav>
                </section>

                <!-- Estado Vazio -->
                <section class="empty-state" id="emptyState" style="display: none;">
                    <i class="ri-inbox-line"></i>
                    <h3>Nenhum produto encontrado</h3>
                    <p>Não há produtos disponíveis nesta categoria no momento.</p>
                </section>
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <p>&copy; 2026 Cards Gallery. Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>

    <!-- Modal de Preview -->
    <div class="modal fade" id="previewModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="previewModalLabel">Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center p-0">
                    <img id="previewImage" src="" alt="Preview" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


<style>

  /* ==================== VARIÁVEIS CSS ==================== */
:root {
  --cor-orange: #ff6b35;
  --cor-blue: #004e89;
  --cor-brown: #8b4513;
  --cor-green: #2d6a4f;
  --cor-bg: #f8f9fa;
  --cor-text: #333;
  --cor-text-muted: #666;
  --cor-border: #dee2e6;
  --cor-shadow: rgba(0, 0, 0, 0.08);
  --cor-shadow-hover: rgba(0, 0, 0, 0.12);
  --transition: all 0.3s ease;
}

/* ==================== RESET E BASE ==================== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  border-radius: 0 !important;
}

html, body {
  height: 100%;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  background-color: var(--cor-bg);
  color: var(--cor-text);
  line-height: 1.6;
}

.wrapper {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.main-content {
  flex: 1;
  padding: 3rem 0;
}

/* ==================== HEADER ==================== */
.header {
  background: linear-gradient(135deg, var(--cor-blue) 0%, #003d6e 100%);
  color: white;
  padding: 3rem 0;
  text-align: center;
  box-shadow: 0 4px 12px var(--cor-shadow);
}

.header-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
}

.header-title {
  font-size: 2.5rem;
  font-weight: 700;
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin: 0;
}

.header-title i {
  font-size: 2.8rem;
}

.header-subtitle {
  font-size: 1.1rem;
  opacity: 0.9;
  margin: 0;
}

@media (max-width: 768px) {
  .header {
    padding: 2rem 0;
  }

  .header-title {
    font-size: 1.8rem;
  }

  .header-title i {
    font-size: 2rem;
  }

  .header-subtitle {
    font-size: 0.95rem;
  }
}

/* ==================== CONTAINER ==================== */
.container {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 1rem;
}

@media (min-width: 768px) {
  .container {
    padding: 0 1.5rem;
  }
}

@media (min-width: 1024px) {
  .container {
    padding: 0 2rem;
  }
}

/* ==================== FILTROS ==================== */
.filters-section {
  margin-bottom: 3rem;
}

.filters-header {
  margin-bottom: 1.5rem;
}

.filters-header h2 {
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--cor-text);
  margin: 0;
}

.nav-tabs-clean {
  border-bottom: 2px solid var(--cor-border);
  display: flex;
  flex-wrap: wrap;
  gap: 0;
  justify-content: center;
}

.nav-tabs-clean .nav-item {
  margin: 0;
}

.nav-tabs-clean .nav-link {
  border: none;
  color: #6c757d;
  font-size: 1rem;
  font-weight: 500;
  padding: 1rem 1.5rem;
  background: transparent;
  cursor: pointer;
  transition: var(--transition);
  display: flex;
  align-items: center;
  gap: 0.5rem;
  white-space: nowrap;
}

.nav-tabs-clean .nav-link:hover {
  color: var(--cor-blue);
}

.nav-tabs-clean .nav-link.active {
  border-bottom: 3px solid var(--cor-blue);
  background: transparent;
  color: var(--cor-blue);
  font-weight: 600;
}

@media (max-width: 768px) {
  .nav-tabs-clean .nav-link {
    padding: 0.75rem 1rem;
    font-size: 0.9rem;
  }
}

/* ==================== GRID DE CARDS ==================== */
.cards-section {
  margin-bottom: 3rem;
}

.cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
  margin-bottom: 2rem;
}

/* Responsividade do grid */
@media (max-width: 1200px) {
  .cards-grid {
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
  }
}

@media (max-width: 992px) {
  .cards-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
  }
}

@media (max-width: 576px) {
  .cards-grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }
}

/* ==================== CARDS ==================== */
.product-card {
  background: white;
  border: 1px solid #f0f0f0;
  box-shadow: 0 2px 8px var(--cor-shadow);
  transition: var(--transition);
  display: flex;
  flex-direction: column;
  height: 100%;
  overflow: hidden;
}

.product-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 24px var(--cor-shadow-hover);
}

.product-carousel {
  position: relative;
  width: 100%;
  height: 220px;
  background: #f5f5f5;
  overflow: hidden;
}

.carousel-container {
  position: relative;
  width: 100%;
  height: 100%;
}

.carousel-slide {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 0.5s ease;
}

.carousel-slide.active {
  opacity: 1;
}

.carousel-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  cursor: pointer;
}

.carousel-controls {
  position: absolute;
  top: 50%;
  width: 100%;
  display: flex;
  justify-content: space-between;
  padding: 0 0.75rem;
  transform: translateY(-50%);
  pointer-events: none;
}

.carousel-btn {
  width: 36px;
  height: 36px;
  background: rgba(0, 0, 0, 0.5);
  border: none;
  color: white;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: var(--transition);
  pointer-events: all;
  font-size: 1.2rem;
}

.carousel-btn:hover {
  background: rgba(0, 0, 0, 0.8);
}

.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 6px;
  z-index: 10;
}

.carousel-indicator {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.5);
  border: none;
  cursor: pointer;
  transition: var(--transition);
}

.carousel-indicator.active {
  background: white;
}

.card-body {
  flex: 1;
  display: flex;
  flex-direction: column;
  padding: 1.5rem;
}

.card-header-content {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  margin-bottom: 1rem;
}

.icon-box {
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 2px solid;
  flex-shrink: 0;
  font-size: 1.5rem;
}

.icon-orange {
  color: var(--cor-orange);
  border-color: var(--cor-orange);
}

.icon-blue {
  color: var(--cor-blue);
  border-color: var(--cor-blue);
}

.icon-brown {
  color: var(--cor-brown);
  border-color: var(--cor-brown);
}

.icon-green {
  color: var(--cor-green);
  border-color: var(--cor-green);
}

.card-title-group h5 {
  font-size: 1.1rem;
  font-weight: 600;
  margin: 0 0 0.25rem 0;
  color: var(--cor-text);
}

.card-price {
  font-size: 0.85rem;
  color: var(--cor-text-muted);
}

.product-description {
  flex: 1;
  font-size: 0.9rem;
  line-height: 1.6;
  color: var(--cor-text-muted);
  margin-bottom: 1rem;
}

.badge-feature {
  display: inline-block;
  font-size: 0.75rem;
  padding: 0.4rem 0.8rem;
  font-weight: 500;
  background: #f0f0f0;
  color: var(--cor-text);
  margin-right: 0.5rem;
  margin-bottom: 0.5rem;
  border: 1px solid #e0e0e0;
}

.badge-feature i {
  margin-right: 0.3rem;
}

.card-footer {
  display: flex;
  gap: 0.75rem;
  padding: 1rem 1.5rem;
  border-top: 1px solid #f0f0f0;
  background: #fafafa;
}

.btn-demo, .btn-orcamento {
  flex: 1;
  padding: 0.6rem 1rem;
  border: 1px solid;
  background: white;
  cursor: pointer;
  transition: var(--transition);
  font-size: 0.9rem;
  font-weight: 500;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  text-decoration: none;
  white-space: nowrap;
}

.btn-demo {
  border-color: var(--cor-border);
  color: var(--cor-text);
}

.btn-demo:hover {
  background: #f5f5f5;
}

.btn-orcamento {
  color: white;
  border: none;
}

.btn-orcamento.orange {
  background: var(--cor-orange);
}

.btn-orcamento.orange:hover {
  background: #e55a2b;
}

.btn-orcamento.blue {
  background: var(--cor-blue);
}

.btn-orcamento.blue:hover {
  background: #003d6e;
}

.btn-orcamento.brown {
  background: var(--cor-brown);
}

.btn-orcamento.brown:hover {
  background: #723910;
}

.btn-orcamento.green {
  background: var(--cor-green);
}

.btn-orcamento.green:hover {
  background: #245a42;
}

/* ==================== PAGINAÇÃO ==================== */
.pagination-section {
  margin: 3rem 0;
}

.pagination-clean {
  display: flex;
  justify-content: center;
  gap: 0.5rem;
  flex-wrap: wrap;
}

.pagination-clean .page-link {
  border: 1px solid var(--cor-border);
  color: var(--cor-text);
  padding: 0.5rem 0.75rem;
  cursor: pointer;
  transition: var(--transition);
  text-decoration: none;
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 36px;
  height: 36px;
  background: white;
}

.pagination-clean .page-link:hover {
  background: #f5f5f5;
  border-color: var(--cor-blue);
  color: var(--cor-blue);
}

.pagination-clean .page-item.active .page-link {
  background: var(--cor-blue);
  border-color: var(--cor-blue);
  color: white;
}

.pagination-clean .page-item.disabled .page-link {
  cursor: not-allowed;
  opacity: 0.5;
}

/* ==================== ESTADO VAZIO ==================== */
.empty-state {
  padding: 4rem 2rem;
  text-align: center;
  color: var(--cor-text-muted);
}

.empty-state i {
  font-size: 4rem;
  margin-bottom: 1rem;
  opacity: 0.3;
  display: block;
}

.empty-state h3 {
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
  color: var(--cor-text);
}

.empty-state p {
  margin: 0;
}

/* ==================== LOADING SKELETON ==================== */
.skeleton {
  background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
  background-size: 200% 100%;
  animation: loading 1.5s infinite;
}

@keyframes loading {
  0% {
    background-position: 200% 0;
  }
  100% {
    background-position: -200% 0;
  }
}

.skeleton-card {
  height: 500px;
}

.skeleton-img {
  height: 220px;
}

/* ==================== FOOTER ==================== */
.footer {
  background: #f8f9fa;
  border-top: 1px solid var(--cor-border);
  padding: 2rem 0;
  text-align: center;
  color: var(--cor-text-muted);
  margin-top: auto;
}

.footer p {
  margin: 0;
}

/* ==================== MODAL ==================== */
.modal-content {
  border: none;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
}

.modal-header {
  border-bottom: 1px solid var(--cor-border);
  padding: 1.5rem;
}

.modal-body {
  padding: 0 !important;
  background: #f5f5f5;
}

.modal-body img {
  max-width: 100%;
  max-height: 70vh;
  object-fit: contain;
  display: block;
  margin: 0 auto;
}

/* ==================== UTILITÁRIOS ==================== */
.transition-300 {
  transition: var(--transition);
}

.text-muted {
  color: var(--cor-text-muted);
}

.text-center {
  text-align: center;
}

.d-flex {
  display: flex;
}

.align-items-center {
  align-items: center;
}

.align-items-start {
  align-items: flex-start;
}

.gap-2 {
  gap: 0.5rem;
}

.gap-3 {
  gap: 1rem;
}

.mb-1 {
  margin-bottom: 0.25rem;
}

.mb-2 {
  margin-bottom: 0.5rem;
}

.mb-3 {
  margin-bottom: 1rem;
}

.me-3 {
  margin-right: 1rem;
}

.fw-bold {
  font-weight: 600;
}

.fw-600 {
  font-weight: 600;
}

.small {
  font-size: 0.85rem;
}

/* ==================== RESPONSIVIDADE GERAL ==================== */
@media (max-width: 768px) {
  .main-content {
    padding: 2rem 0;
  }

  .filters-section {
    margin-bottom: 2rem;
  }

  .cards-section {
    margin-bottom: 2rem;
  }

  .pagination-section {
    margin: 2rem 0;
  }
}

  
</style>

<script>
  //app.js

  // ==================== ESTADO DA APLICAÇÃO ====================
const state = {
  categoriaAtual: 'websites',
  paginaAtual: 1,
  itensPorPagina: 9, // 3x3 = 9 itens por página
  produtos: [],
  loading: false
};

// ==================== ELEMENTOS DO DOM ====================
const produtosGrid = document.getElementById('produtosGrid');
const categoriasTab = document.getElementById('categoriasTab');
const paginacaoContainer = document.getElementById('paginacaoContainer');
const paginacao = document.getElementById('paginacao');
const emptyState = document.getElementById('emptyState');
const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));

// ==================== FUNÇÕES DE API ====================
async function fetchProdutos(categoria, pagina = 1) {
  return new Promise((resolve) => {
    setTimeout(() => {
      const produtos = MOCK_DATA[categoria] || [];
      const inicio = (pagina - 1) * state.itensPorPagina;
      const fim = inicio + state.itensPorPagina;

      resolve({
        produtos: produtos.slice(inicio, fim),
        total: produtos.length,
        pagina: pagina,
        totalPaginas: Math.ceil(produtos.length / state.itensPorPagina)
      });
    }, 300);
  });
}

// ==================== FUNÇÕES DE RENDERIZAÇÃO ====================
function renderSkeleton() {
  const skeletonHTML = Array(state.itensPorPagina)
    .fill(0)
    .map(
      () => `
    <div class="product-card skeleton-card">
      <div class="product-carousel">
        <div class="skeleton skeleton-img"></div>
      </div>
      <div class="card-body">
        <div class="skeleton mb-3" style="height: 20px; width: 60%;"></div>
        <div class="skeleton mb-2" style="height: 15px; width: 100%;"></div>
        <div class="skeleton mb-2" style="height: 15px; width: 90%;"></div>
        <div class="skeleton" style="height: 15px; width: 80%;"></div>
      </div>
    </div>
  `
    )
    .join('');

  produtosGrid.innerHTML = skeletonHTML;
}

function renderProduto(produto) {
  const carouselId = `carousel-${produto.id}`;
  const temMultiplosScreenshots = produto.screenshots.length > 1;

  // Gerar slides do carrossel
  const slides = produto.screenshots
    .map(
      (img, i) => `
    <div class="carousel-slide ${i === 0 ? 'active' : ''}">
      <img src="${img}" alt="${produto.nome}" onclick="abrirPreview('${img}', '${produto.nome}')">
    </div>
  `
    )
    .join('');

  // Gerar indicadores
  const indicators =
    temMultiplosScreenshots &&
    produto.screenshots.length > 0
      ? `
    <div class="carousel-indicators">
      ${produto.screenshots.map((_, i) => `<button class="carousel-indicator ${i === 0 ? 'active' : ''}" data-slide="${i}"></button>`).join('')}
    </div>
  `
      : '';

  // Gerar controles
  const controles =
    temMultiplosScreenshots &&
    produto.screenshots.length > 0
      ? `
    <div class="carousel-controls">
      <button class="carousel-btn" onclick="carouselPrev('${carouselId}')">
        <i class="ri-arrow-left-s-line"></i>
      </button>
      <button class="carousel-btn" onclick="carouselNext('${carouselId}')">
        <i class="ri-arrow-right-s-line"></i>
      </button>
    </div>
  `
      : '';

  // Gerar características
  const caracteristicas = produto.caracteristicas
    .slice(0, 4)
    .map(
      (c) => `
    <span class="badge-feature">
      <i class="ri-check-line icon-${produto.cor}"></i> ${c}
    </span>
  `
    )
    .join('');

  const maisCaracteristicas =
    produto.caracteristicas.length > 4
      ? `<span class="badge-feature">+${produto.caracteristicas.length - 4}</span>`
      : '';

  // Botão Demo
  const botaoDemo = produto.demoUrl
    ? `
    <a href="${produto.demoUrl}" target="_blank" class="btn-demo">
      <i class="ri-external-link-line"></i> Demo
    </a>
  `
    : '';

  return `
    <div class="product-card">
      <div class="product-carousel" id="${carouselId}">
        <div class="carousel-container">
          ${slides}
        </div>
        ${controles}
        ${indicators}
      </div>

      <div class="card-body">
        <div class="card-header-content">
          <div class="icon-box icon-${produto.cor}">
            <i class="${produto.icone}"></i>
          </div>
          <div class="card-title-group">
            <h5>${produto.nome}</h5>
            <p class="card-price">${produto.preco}</p>
          </div>
        </div>

        <p class="product-description">
          ${produto.descricao}
        </p>

        <div class="mb-3">
          ${caracteristicas}
          ${maisCaracteristicas}
        </div>
      </div>

      <div class="card-footer">
        ${botaoDemo}
        <a href="#contacto" class="btn-orcamento ${produto.cor}">
          <i class="ri-mail-line"></i> Orçamento
        </a>
      </div>
    </div>
  `;
}

function renderProdutos(data) {
  if (data.produtos.length === 0) {
    produtosGrid.style.display = 'none';
    emptyState.style.display = 'block';
    paginacaoContainer.style.display = 'none';
    return;
  }

  produtosGrid.style.display = 'grid';
  emptyState.style.display = 'none';
  produtosGrid.innerHTML = data.produtos.map((p) => renderProduto(p)).join('');

  if (data.totalPaginas > 1) {
    renderPaginacao(data);
    paginacaoContainer.style.display = 'block';
  } else {
    paginacaoContainer.style.display = 'none';
  }
}

function renderPaginacao(data) {
  let html = '';

  // Botão Anterior
  if (state.paginaAtual > 1) {
    html += `
      <li class="page-item">
        <a class="page-link" href="#" data-pagina="${state.paginaAtual - 1}">
          <i class="ri-arrow-left-line"></i> Anterior
        </a>
      </li>`;
  }

  // Números de página
  for (let i = 1; i <= data.totalPaginas; i++) {
    if (
      i === 1 ||
      i === data.totalPaginas ||
      (i >= state.paginaAtual - 1 && i <= state.paginaAtual + 1)
    ) {
      html += `
        <li class="page-item ${i === state.paginaAtual ? 'active' : ''}">
          <a class="page-link" href="#" data-pagina="${i}">${i}</a>
        </li>`;
    } else if (i === state.paginaAtual - 2 || i === state.paginaAtual + 2) {
      html += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
    }
  }

  // Botão Próximo
  if (state.paginaAtual < data.totalPaginas) {
    html += `
      <li class="page-item">
        <a class="page-link" href="#" data-pagina="${state.paginaAtual + 1}">
          Próximo <i class="ri-arrow-right-line"></i>
        </a>
      </li>`;
  }

  paginacao.innerHTML = html;
}

// ==================== FUNÇÕES DE NAVEGAÇÃO ====================
async function carregarProdutos(categoria = state.categoriaAtual, pagina = 1) {
  if (state.loading) return;

  state.loading = true;
  state.categoriaAtual = categoria;
  state.paginaAtual = pagina;

  renderSkeleton();
  window.scrollTo({ top: 0, behavior: 'smooth' });

  const data = await fetchProdutos(categoria, pagina);
  state.produtos = data.produtos;

  renderProdutos(data);
  state.loading = false;
}

function mudarCategoria(categoria) {
  // Atualizar estado ativo dos tabs
  document.querySelectorAll('#categoriasTab .nav-link').forEach((link) => {
    link.classList.remove('active');
    if (link.dataset.categoria === categoria) {
      link.classList.add('active');
    }
  });

  carregarProdutos(categoria, 1);
}

function mudarPagina(pagina) {
  carregarProdutos(state.categoriaAtual, pagina);
}

// ==================== CARROSSEL DE IMAGENS ====================
function carouselNext(carouselId) {
  const carousel = document.getElementById(carouselId);
  const slides = carousel.querySelectorAll('.carousel-slide');
  const indicators = carousel.querySelectorAll('.carousel-indicator');

  let currentIndex = Array.from(slides).findIndex((s) => s.classList.contains('active'));
  const nextIndex = (currentIndex + 1) % slides.length;

  slides[currentIndex].classList.remove('active');
  slides[nextIndex].classList.add('active');

  if (indicators.length > 0) {
    indicators[currentIndex].classList.remove('active');
    indicators[nextIndex].classList.add('active');
  }
}

function carouselPrev(carouselId) {
  const carousel = document.getElementById(carouselId);
  const slides = carousel.querySelectorAll('.carousel-slide');
  const indicators = carousel.querySelectorAll('.carousel-indicator');

  let currentIndex = Array.from(slides).findIndex((s) => s.classList.contains('active'));
  const prevIndex = (currentIndex - 1 + slides.length) % slides.length;

  slides[currentIndex].classList.remove('active');
  slides[prevIndex].classList.add('active');

  if (indicators.length > 0) {
    indicators[currentIndex].classList.remove('active');
    indicators[prevIndex].classList.add('active');
  }
}

// ==================== MODAL DE PREVIEW ====================
function abrirPreview(imgSrc, titulo) {
  document.getElementById('previewImage').src = imgSrc;
  document.getElementById('previewModalLabel').textContent = titulo || 'Preview';
  previewModal.show();
}

// ==================== EVENT LISTENERS ====================
document.addEventListener('DOMContentLoaded', function () {
  // Tabs de categorias
  document.querySelectorAll('#categoriasTab .nav-link').forEach((link) => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      mudarCategoria(this.dataset.categoria);
    });
  });

  // Paginação
  document.addEventListener('click', function (e) {
    if (e.target.classList.contains('page-link')) {
      e.preventDefault();
      const pagina = parseInt(e.target.dataset.pagina);
      if (pagina) mudarPagina(pagina);
    }
  });

  // Carregar produtos iniciais
  carregarProdutos('websites', 1);
});




  ///data.js

  // ==================== DADOS DOS PRODUTOS ====================
const MOCK_DATA = {
  websites: [
    {
      id: 1,
      nome: 'Website Institucional Premium',
      descricao: 'Website profissional completo, optimizado para SEO e totalmente responsivo. Inclui painel de administração intuitivo, formulários de contacto integrados e análise de métricas. Design moderno que valoriza a sua marca e converte visitantes em clientes.',
      categoria: 'websites',
      icone: 'ri-global-line',
      cor: 'orange',
      caracteristicas: ['Até 15 páginas', 'SEO avançado', 'Google Analytics', 'Formulários personalizados', 'Chat online', 'Blog integrado'],
      screenshots: [
        'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800',
        'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800',
        'https://images.unsplash.com/photo-1547658719-da2b51169166?w=800'
      ],
      demoUrl: 'https://demo.exemplo.com/institucional',
      preco: 'Sob consulta'
    },
    {
      id: 2,
      nome: 'Landing Page de Conversão',
      descricao: 'Página única focada em conversão máxima de visitantes. Design psicologicamente optimizado com CTAs estratégicos, depoimentos de clientes e integração total com ferramentas de marketing digital.',
      categoria: 'websites',
      icone: 'ri-rocket-line',
      cor: 'blue',
      caracteristicas: ['Alta taxa de conversão', 'A/B Testing', 'Pixel Facebook/Google', 'WhatsApp Business', 'Formulário multi-step', 'Contador regressivo'],
      screenshots: [
        'https://images.unsplash.com/photo-1557804506-669a67965ba0?w=800',
        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800'
      ],
      demoUrl: 'https://demo.exemplo.com/landing',
      preco: 'A partir de 15.000 MT'
    },
    {
      id: 3,
      nome: 'E-commerce Completo',
      descricao: 'Loja online profissional com gestão completa de produtos, stock, pedidos e clientes. Sistema de pagamentos integrado com M-Pesa e cartão. Painel administrativo robusto com relatórios detalhados.',
      categoria: 'websites',
      icone: 'ri-shopping-cart-line',
      cor: 'green',
      caracteristicas: ['Produtos ilimitados', 'M-Pesa & Cartão', 'Gestão de stock', 'Cupons de desconto', 'Multi-moeda', 'Rastreamento de envios'],
      screenshots: [
        'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=800',
        'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800',
        'https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=800'
      ],
      demoUrl: 'https://demo.exemplo.com/ecommerce',
      preco: 'A partir de 45.000 MT'
    },
    {
      id: 4,
      nome: 'Portal de Notícias',
      descricao: 'Plataforma completa para publicação de conteúdo jornalístico com sistema de categorias, tags, comentários e newsletter. Optimizado para carregar rapidamente mesmo com muito conteúdo.',
      categoria: 'websites',
      icone: 'ri-newspaper-line',
      cor: 'brown',
      caracteristicas: ['Editor avançado', 'Multi-autor', 'Categorias ilimitadas', 'Sistema de comentários', 'Newsletter', 'AMP para mobile'],
      screenshots: [
        'https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=800',
        'https://images.unsplash.com/photo-1585829365295-ab7cd400c167?w=800'
      ],
      demoUrl: 'https://demo.exemplo.com/portal',
      preco: 'Sob consulta'
    }
  ],
  sistemas: [
    {
      id: 5,
      nome: 'Sistema de Facturação AT',
      descricao: 'Software certificado pela Autoridade Tributária de Moçambique. Emissão de facturas, recibos e notas de crédito em conformidade com a legislação. Inclui PDV, gestão de stock multi-loja e relatórios fiscais automáticos.',
      categoria: 'sistemas',
      icone: 'ri-file-list-3-line',
      cor: 'orange',
      caracteristicas: ['Certificado AT', 'PDV touch', 'Stock multi-loja', 'M-Pesa integrado', 'Impressão térmica', 'Backup automático'],
      screenshots: [
        'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800',
        'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800',
        'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800'
      ],
      demoUrl: 'https://demo.exemplo.com/facturacao',
      preco: 'A partir de 25.000 MT'
    },
    {
      id: 6,
      nome: 'CRM Empresarial',
      descricao: 'Gestão completa do relacionamento com clientes. Pipeline de vendas visual, automação de follow-ups, relatórios de desempenho e integração com WhatsApp Business para comunicação directa.',
      categoria: 'sistemas',
      icone: 'ri-customer-service-2-line',
      cor: 'blue',
      caracteristicas: ['Pipeline visual', 'Automação de tarefas', 'WhatsApp integrado', 'Relatórios avançados', 'App mobile', 'API aberta'],
      screenshots: [
        'https://images.unsplash.com/photo-1552664730-d307ca884978?w=800',
        'https://images.unsplash.com/photo-1553877522-43269d4ea984?w=800'
      ],
      demoUrl: 'https://demo.exemplo.com/crm',
      preco: 'A partir de 35.000 MT'
    },
    {
      id: 7,
      nome: 'Sistema de Recursos Humanos',
      descricao: 'Plataforma completa para gestão de RH com processamento de salários, gestão de férias, avaliações de desempenho, recrutamento e portal do colaborador.',
      categoria: 'sistemas',
      icone: 'ri-team-line',
      cor: 'green',
      caracteristicas: ['Folha de pagamento', 'Gestão de férias', 'Avaliação 360°', 'Portal colaborador', 'Recrutamento', 'Relatórios INSS'],
      screenshots: [
        'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800',
        'https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=800',
        'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800'
      ],
      demoUrl: 'https://demo.exemplo.com/rh',
      preco: 'A partir de 40.000 MT'
    }
  ],
  mobile: [
    {
      id: 8,
      nome: 'App Mobile Nativa',
      descricao: 'Aplicação móvel nativa para Android e iOS com design moderno, notificações push, modo offline e sincronização automática. Publicação nas lojas Google Play e App Store incluída.',
      categoria: 'mobile',
      icone: 'ri-smartphone-line',
      cor: 'orange',
      caracteristicas: ['Android & iOS', 'Push notifications', 'Modo offline', 'Pagamentos integrados', 'Publicação nas lojas', 'Manutenção 6 meses'],
      screenshots: [
        'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800',
        'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=800'
      ],
      demoUrl: null,
      preco: 'A partir de 60.000 MT'
    }
  ],
  outros: [
    {
      id: 9,
      nome: 'ERP para PMEs',
      descricao: 'Sistema integrado de gestão empresarial cobrindo finanças, vendas, compras, stock, produção e relatórios. Solução modular que cresce com o seu negócio.',
      categoria: 'outros',
      icone: 'ri-dashboard-3-line',
      cor: 'brown',
      caracteristicas: ['Módulos integrados', 'Multi-empresa', 'Multi-moeda', 'Relatórios personalizados', 'API completa', 'Suporte dedicado'],
      screenshots: [
        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800',
        'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800'
      ],
      demoUrl: 'https://demo.exemplo.com/erp',
      preco: 'Sob consulta'
    }
  ]
};

  
</script>
