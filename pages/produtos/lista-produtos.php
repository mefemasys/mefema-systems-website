<style>
  :root {
    --cor-orange: #ff6b35;
    --cor-blue: #004e89;
    --cor-brown: #8b4513;
    --cor-green: #2d6a4f;
  }
  * {
    border-radius: 0 !important;
  }
  body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    background: #f8f9fa;
  }
  .transition-300 {
    transition: all 0.3s ease;
  }
  .hover-shadow-lg:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 35px rgba(0,0,0,0.12) !important;
  }
  .product-card {
    height: 100%;
    min-height: 580px;
    display: flex;
    flex-direction: column;
    background: white;
    overflow: hidden;
  }
  .product-carousel {
    height: 250px;
    background: #f5f5f5;
    position: relative;
  }
  .product-carousel img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    cursor: pointer;
  }
  .carousel-control-prev,
  .carousel-control-next {
    width: 40px;
    height: 40px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.5);
  }
  .carousel-indicators button {
    width: 8px;
    height: 8px;
    border-radius: 50% !important;
    margin: 0 4px;
  }
  .card-body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
  }
  .product-description {
    flex-grow: 1;
    font-size: 0.9rem;
    line-height: 1.6;
    color: #666;
  }
  .icon-box {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid;
  }
  .icon-orange { color: var(--cor-orange); border-color: var(--cor-orange); }
  .icon-blue { color: var(--cor-blue); border-color: var(--cor-blue); }
  .icon-brown { color: var(--cor-brown); border-color: var(--cor-brown); }
  .icon-green { color: var(--cor-green); border-color: var(--cor-green); }
  .btn-orange { background-color: var(--cor-orange); border-color: var(--cor-orange); color: white; }
  .btn-orange:hover { background-color: #e55a2b; border-color: #e55a2b; color: white; }
  .btn-blue { background-color: var(--cor-blue); border-color: var(--cor-blue); color: white; }
  .btn-blue:hover { background-color: #003d6e; border-color: #003d6e; color: white; }
  .btn-brown { background-color: var(--cor-brown); border-color: var(--cor-brown); color: white; }
  .btn-brown:hover { background-color: #723910; border-color: #723910; color: white; }
  .btn-green { background-color: var(--cor-green); border-color: var(--cor-green); color: white; }
  .btn-green:hover { background-color: #245a42; border-color: #245a42; color: white; }
  .nav-tabs-clean {
    border-bottom: 2px solid #dee2e6;
  }
  .nav-tabs-clean .nav-link {
    border: none;
    color: #6c757d;
    font-size: 1.1rem;
    font-weight: 500;
    padding: 1rem 2rem;
    background: transparent;
  }
  .nav-tabs-clean .nav-link.active {
    border-bottom: 3px solid var(--cor-blue);
    background: transparent;
    color: var(--cor-blue);
    font-weight: 600;
  }
  .pagination-clean .page-link {
    border: 1px solid #ddd;
    color: #333;
    padding: 0.5rem 1rem;
    margin: 0 4px;
  }
  .pagination-clean .page-link:hover {
    background: #f5f5f5;
    border-color: var(--cor-blue);
  }
  .pagination-clean .page-item.active .page-link {
    background: var(--cor-blue);
    border-color: var(--cor-blue);
    color: white;
  }
  .badge-feature {
    font-size: 0.75rem;
    padding: 0.4rem 0.8rem;
    font-weight: 500;
  }
  .skeleton {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
  }
  @keyframes loading {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
  }
  .empty-state {
    padding: 4rem 2rem;
    text-align: center;
    color: #6c757d;
  }
  .empty-state i {
    font-size: 4rem;
    margin-bottom: 1rem;
    opacity: 0.3;
  }
  /* Grid responsivo flexível */
  .products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.5rem;
  }
  /* Filtros */
  .filter-bar {
    background: white;
    padding: 1.5rem;
    border: 1px solid #dee2e6;
    margin-bottom: 2rem;
  }
</style>

<section class="py-5">
  <div class="container">
    <!-- Tabs de Categorias -->
    <ul class="nav nav-tabs nav-tabs-clean justify-content-center mb-4" id="categoriasTab">
      <li class="nav-item">
        <button class="nav-link active" data-categoria="websites">
          <i class="ri-global-line me-2"></i>Websites
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-categoria="sistemas">
          <i class="ri-dashboard-line me-2"></i>Sistemas
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-categoria="mobile">
          <i class="ri-smartphone-line me-2"></i>Mobile
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-categoria="outros">
          <i class="ri-apps-line me-2"></i>Outros
        </button>
      </li>
    </ul>

    <!-- Filtros -->
    <div class="filter-bar">
      <div class="row g-3 align-items-end">
        <div class="col-md-4">
          <label class="form-label fw-medium">Pesquisar</label>
          <input type="text" id="filtroBusca" class="form-control" placeholder="Nome do produto...">
        </div>
        <div class="col-md-3">
          <label class="form-label fw-medium">Preço</label>
          <select id="filtroPreco" class="form-select">
            <option value="todos">Todos</option>
            <option value="consulta">Sob consulta</option>
            <option value="baixo">Até 30.000 MT</option>
            <option value="medio">30.000 - 50.000 MT</option>
            <option value="alto">Acima de 50.000 MT</option>
          </select>
        </div>
        <div class="col-md-2">
          <button id="btnLimparFiltros" class="btn btn-outline-secondary w-100">
            <i class="ri-refresh-line"></i> Limpar
          </button>
        </div>
      </div>
    </div>

    <!-- Conteúdo dos Produtos -->
    <div id="produtosContainer">
      <div class="products-grid" id="produtosGrid"></div>
    </div>

    <!-- Paginação -->
    <nav class="mt-5" id="paginacaoContainer" style="display: none;">
      <ul class="pagination justify-content-center pagination-clean" id="paginacao"></ul>
    </nav>
  </div>
</section>

<!-- Modal de Preview -->
<div class="modal fade modal-preview" id="previewModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="previewModalLabel">Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center p-0">
        <img id="previewImage" src="" alt="Preview">
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

<script>
// ==================== DADOS E ESTADO ====================
const MOCK_DATA = { /* (mesmo MOCK_DATA que tinhas antes - mantido igual) */ };
let todosProdutos = []; // Todos os produtos da categoria atual (para filtragem)

const state = {
  categoriaAtual: 'websites',
  paginaAtual: 1,
  itensPorPagina: 12, // Aumentado porque agora o grid é flexível
  filtroBusca: '',
  filtroPreco: 'todos'
};

// ==================== FUNÇÕES DE FILTRAGEM ====================
function aplicarFiltros(produtos) {
  return produtos.filter(p => {
    const matchesBusca = p.nome.toLowerCase().includes(state.filtroBusca.toLowerCase());
    let matchesPreco = true;
    if (state.filtroPreco !== 'todos') {
      if (state.filtroPreco === 'consulta') matchesPreco = p.preco.includes('consulta');
      else if (state.filtroPreco === 'baixo') matchesPreco = p.preco.includes('15.000') || p.preco.includes('25.000');
      else if (state.filtroPreco === 'medio') matchesPreco = p.preco.includes('35.000') || p.preco.includes('40.000') || p.preco.includes('45.000');
      else if (state.filtroPreco === 'alto') matchesPreco = p.preco.includes('60.000');
    }
    return matchesBusca && matchesPreco;
  });
}

// ==================== RENDERIZAÇÃO ====================
function renderProduto(produto) {
  const carouselId = `carousel-${produto.id}`;
  const slides = produto.screenshots.map((img, i) => `
    <div class="carousel-item ${i === 0 ? 'active' : ''}">
      <img src="${img}" alt="${produto.nome}" onclick="abrirPreview('${img}', '${produto.nome}')">
    </div>
  `).join('');

  const indicators = produto.screenshots.length > 1 ? `
    <div class="carousel-indicators">
      ${produto.screenshots.map((_, i) => `<button type="button" data-bs-target="#${carouselId}" data-bs-slide-to="${i}" ${i === 0 ? 'class="active"' : ''}></button>`).join('')}
    </div>` : '';

  const controles = produto.screenshots.length > 1 ? `
    <button class="carousel-control-prev" type="button" data-bs-target="#${carouselId}" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#${carouselId}" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>` : '';

  return `
    <div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">
      <div id="${carouselId}" class="carousel slide product-carousel" data-bs-ride="${produto.screenshots.length > 1 ? 'carousel' : 'false'}">
        ${indicators}
        <div class="carousel-inner">${slides}</div>
        ${controles}
      </div>
      <div class="card-body p-4">
        <div class="d-flex align-items-start mb-3">
          <div class="icon-box icon-${produto.cor} me-3 flex-shrink-0">
            <i class="${produto.icone} fs-4"></i>
          </div>
          <div>
            <h5 class="mb-1 fw-bold">${produto.nome}</h5>
            <small class="text-muted">${produto.preco}</small>
          </div>
        </div>
        <p class="product-description mb-3">${produto.descricao}</p>
        <div class="mb-3" id="features-${produto.id}">
          ${produto.caracteristicas.map(c => `
            <span class="badge bg-light text-dark badge-feature me-1 mb-1">
              <i class="ri-check-line"></i> ${c}
            </span>
          `).join('')}
        </div>
        ${produto.caracteristicas.length > 6 ? `
          <button class="btn btn-link p-0 text-decoration-none small" onclick="toggleMaisItens(${produto.id})">
            <i class="ri-arrow-down-s-line" id="icon-${produto.id}"></i> Mais itens
          </button>` : ''}
      </div>
      <div class="card-footer border-0 bg-white p-3">
        <div class="d-flex gap-2">
          ${produto.demoUrl ? `
            <a href="${produto.demoUrl}" target="_blank" class="btn btn-outline-${produto.cor} btn-sm flex-fill">
              <i class="ri-external-link-line"></i> Demo
            </a>` : ''}
          <a href="#contacto" class="btn btn-${produto.cor} btn-sm flex-fill">
            <i class="ri-mail-line"></i> Orçamento
          </a>
        </div>
      </div>
    </div>
  `;
}

function toggleMaisItens(id) {
  const container = document.getElementById(`features-${id}`);
  const icon = document.getElementById(`icon-${id}`);
  if (container.classList.contains('collapsed-features')) {
    container.classList.remove('collapsed-features');
    icon.classList.replace('ri-arrow-down-s-line', 'ri-arrow-up-s-line');
  } else {
    container.classList.add('collapsed-features');
    icon.classList.replace('ri-arrow-up-s-line', 'ri-arrow-down-s-line');
  }
}

function renderProdutos(produtosFiltrados) {
  const grid = document.getElementById('produtosGrid');
  if (produtosFiltrados.length === 0) {
    grid.innerHTML = `<div class="col-12"><div class="empty-state"><i class="ri-inbox-line"></i><h4>Nenhum produto encontrado</h4></div></div>`;
    document.getElementById('paginacaoContainer').style.display = 'none';
    return;
  }

  // Paginação client-side
  const inicio = (state.paginaAtual - 1) * state.itensPorPagina;
  const fim = inicio + state.itensPorPagina;
  const paginaAtual = produtosFiltrados.slice(inicio, fim);

  grid.innerHTML = paginaAtual.map(renderProduto).join('');

  const totalPaginas = Math.ceil(produtosFiltrados.length / state.itensPorPagina);
  if (totalPaginas > 1) {
    renderPaginacao(totalPaginas);
    document.getElementById('paginacaoContainer').style.display = 'block';
  } else {
    document.getElementById('paginacaoContainer').style.display = 'none';
  }
}

function renderPaginacao(totalPaginas) {
  const paginacao = document.getElementById('paginacao');
  let html = '';
  if (state.paginaAtual > 1) {
    html += `<li class="page-item"><a class="page-link" href="#" data-pagina="${state.paginaAtual - 1}"><i class="ri-arrow-left-line"></i> Anterior</a></li>`;
  }
  for (let i = 1; i <= totalPaginas; i++) {
    if (i === 1 || i === totalPaginas || Math.abs(i - state.paginaAtual) <= 1) {
      html += `<li class="page-item ${i === state.paginaAtual ? 'active' : ''}"><a class="page-link" href="#" data-pagina="${i}">${i}</a></li>`;
    } else if (i === state.paginaAtual - 2 || i === state.paginaAtual + 2) {
      html += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
    }
  }
  if (state.paginaAtual < totalPaginas) {
    html += `<li class="page-item"><a class="page-link" href="#" data-pagina="${state.paginaAtual + 1}">Próximo <i class="ri-arrow-right-line"></i></a></li>`;
  }
  paginacao.innerHTML = html;
}

// ==================== CARREGAMENTO E FILTROS ====================
async function carregarProdutos(categoria = state.categoriaAtual) {
  state.categoriaAtual = categoria;
  state.paginaAtual = 1;

  // Carrega todos os produtos da categoria (mock)
  todosProdutos = MOCK_DATA[categoria] || [];

  const filtrados = aplicarFiltros(todosProdutos);
  renderProdutos(filtrados);

  // Atualiza tab ativa
  document.querySelectorAll('#categoriasTab .nav-link').forEach(l => {
    l.classList.toggle('active', l.dataset.categoria === categoria);
  });
}

function atualizarFiltros() {
  const filtrados = aplicarFiltros(todosProdutos);
  state.paginaAtual = 1;
  renderProdutos(filtrados);
}

// ==================== EVENT LISTENERS ====================
document.addEventListener('DOMContentLoaded', () => {
  // Tabs
  document.querySelectorAll('#categoriasTab .nav-link').forEach(tab => {
    tab.addEventListener('click', e => {
      e.preventDefault();
      carregarProdutos(tab.dataset.categoria);
    });
  });

  // Filtros
  document.getElementById('filtroBusca').addEventListener('input', e => {
    state.filtroBusca = e.target.value;
    atualizarFiltros();
  });
  document.getElementById('filtroPreco').addEventListener('change', e => {
    state.filtroPreco = e.target.value;
    atualizarFiltros();
  });
  document.getElementById('btnLimparFiltros').addEventListener('click', () => {
    state.filtroBusca = '';
    state.filtroPreco = 'todos';
    document.getElementById('filtroBusca').value = '';
    document.getElementById('filtroPreco').value = 'todos';
    atualizarFiltros();
  });

  // Paginação
  document.getElementById('paginacao').addEventListener('click', e => {
    e.preventDefault();
    if (e.target.closest('.page-link') && e.target.dataset.pagina) {
      state.paginaAtual = parseInt(e.target.dataset.pagina);
      const filtrados = aplicarFiltros(todosProdutos);
      renderProdutos(filtrados);
    }
  });

  // Inicial
  carregarProdutos('websites');
});

function abrirPreview(imgSrc, titulo) {
  document.getElementById('previewImage').src = imgSrc;
  document.getElementById('previewModalLabel').textContent = titulo;
  const modal = new bootstrap.Modal(document.getElementById('previewModal'));
  modal.show();
}
</script>

<!-- Adicionado CSS para colapsar características extras -->
<style>
.collapsed-features {
  max-height: 60px;
  overflow: hidden;
}
</style>
