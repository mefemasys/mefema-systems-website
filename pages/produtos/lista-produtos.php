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

/* Cards reduzidos */
.product-card {
  min-height: 450px;
  display: flex;
  flex-direction: column;
}

/* Slider */
.product-carousel img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  cursor: pointer;
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
  cursor: pointer;
}

.pagination-clean .page-link:hover {
  background: #f5f5f5;
}

/* Modal de preview */
.modal-preview img {
  max-width: 100%;
  height: auto;
}

/* Cores dos ícones */
.icon-orange { color: #ff6b35; }
.icon-blue { color: #004e89; }
.icon-brown { color: #8b4513; }
.icon-green { color: #2d6a4f; }

/* Botões com cores */
.btn-orange { background-color: #ff6b35; border-color: #ff6b35; color: white; }
.btn-orange:hover { background-color: #e55a2b; border-color: #e55a2b; color: white; }
.btn-blue { background-color: #004e89; border-color: #004e89; color: white; }
.btn-blue:hover { background-color: #003d6e; border-color: #003d6e; color: white; }
.btn-brown { background-color: #8b4513; border-color: #8b4513; color: white; }
.btn-brown:hover { background-color: #723910; border-color: #723910; color: white; }
.btn-green { background-color: #2d6a4f; border-color: #2d6a4f; color: white; }
.btn-green:hover { background-color: #245a42; border-color: #245a42; color: white; }

</style>

<section class="py-5" id="produtosContent">
<div class="container">

<!-- ===================== TABS ===================== -->

<ul class="nav nav-tabs nav-tabs-clean justify-content-center mb-5" id="produtosTab">
  <li class="nav-item">
    <button class="nav-link active px-4 py-3" data-bs-toggle="tab" data-bs-target="#websites" onclick="mudarCategoria('websites')">
      Websites
    </button>
  </li>

  <li class="nav-item">
    <button class="nav-link px-4 py-3" data-bs-toggle="tab" data-bs-target="#sistemas" onclick="mudarCategoria('sistemas')">
      Sistemas
    </button>
  </li>

  <li class="nav-item">
    <button class="nav-link px-4 py-3" data-bs-toggle="tab" data-bs-target="#outros" onclick="mudarCategoria('outros')">
      Outros
    </button>
  </li>
</ul>

<div class="tab-content">

<!-- ============================================================= -->
<!-- ===================== WEBSITES ============================= -->
<!-- ============================================================= -->

<div class="tab-pane fade show active" id="websites">

<div class="row g-4" id="websitesContent">
<!-- Conteúdo será gerado por JavaScript -->
</div>

<!-- PAGINAÇÃO -->
<nav class="mt-5">
  <ul class="pagination justify-content-center pagination-clean" id="websitesPagination">
  </ul>
</nav>

<!-- Lista de produtos -->
<div class="mt-5">
  <h5 class="mb-3">Todos os Websites</h5>
  <ul class="list-group" id="websitesList"></ul>
</div>

</div>

<!-- ============================================================= -->
<!-- ===================== SISTEMAS ============================ -->
<!-- ============================================================= -->

<div class="tab-pane fade" id="sistemas">
<div class="row g-4" id="sistemasContent">
</div>

<nav class="mt-5">
  <ul class="pagination justify-content-center pagination-clean" id="sistemasPagination">
  </ul>
</nav>

<div class="mt-5">
  <h5 class="mb-3">Todos os Sistemas</h5>
  <ul class="list-group" id="sistemasList"></ul>
</div>

</div>

<!-- ============================================================= -->
<!-- ===================== OUTROS =============================== -->
<!-- ============================================================= -->

<div class="tab-pane fade" id="outros">
<div class="row g-4" id="outrosContent">
</div>

<nav class="mt-5">
  <ul class="pagination justify-content-center pagination-clean" id="outrosPagination">
  </ul>
</nav>

<div class="mt-5">
  <h5 class="mb-3">Todos os Outros Produtos</h5>
  <ul class="list-group" id="outrosList"></ul>
</div>

</div>

</div>
</div>
</section>

<!-- Modal de Preview -->
<div class="modal fade" id="previewModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="previewModalLabel">Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center modal-preview">
        <img id="previewImage" src="" alt="Preview">
      </div>
    </div>
  </div>
</div>

<script>
// Dados dos produtos
const produtos = {
  websites: [
    {
      nome: 'Website Institucional',
      descricao: 'Website profissional, optimizado, rápido e responsivo.',
      icone: 'ri-global-line',
      cor: 'orange',
      caracteristicas: ['Até 10 páginas', 'SEO incluído', 'Administração fácil'],
      imagens: ['assets/img/logos/logo.png', 'assets/img/logos/logo.png', 'assets/img/logos/logo.png']
    },
    {
      nome: 'Landing Page',
      descricao: 'Página focada em conversão de clientes.',
      icone: 'ri-rocket-line',
      cor: 'blue',
      caracteristicas: ['Alta conversão', 'WhatsApp integrado', 'Pixel Facebook & Google'],
      imagens: ['assets/img/logos/logo.png', 'assets/img/logos/logo.png']
    },
    {
      nome: 'E-commerce',
      descricao: 'Loja online completa e segura.',
      icone: 'ri-shopping-cart-line',
      cor: 'green',
      caracteristicas: ['Pagamentos online', 'Gestão de stock', 'Envios automatizados'],
      imagens: ['assets/img/logos/logo.png', 'assets/img/logos/logo.png']
    },
    {
      nome: 'Blog Profissional',
      descricao: 'Plataforma de conteúdo optimizada.',
      icone: 'ri-article-line',
      cor: 'brown',
      caracteristicas: ['Editor avançado', 'Multi-autor', 'SEO automático'],
      imagens: ['assets/img/logos/logo.png']
    }
  ],
  sistemas: [
    {
      nome: 'Sistema de Facturação',
      descricao: 'Software certificado pela AT para Moçambique.',
      icone: 'ri-file-list-3-line',
      cor: 'orange',
      caracteristicas: ['PDV', 'Stock multi-loja', 'M-Pesa integrado'],
      imagens: ['assets/img/logos/logo.png', 'assets/img/logos/logo.png']
    },
    {
      nome: 'CRM Empresarial',
      descricao: 'Gestão completa de clientes e vendas.',
      icone: 'ri-customer-service-2-line',
      cor: 'blue',
      caracteristicas: ['Pipeline de vendas', 'Automação', 'Relatórios'],
      imagens: ['assets/img/logos/logo.png']
    },
    {
      nome: 'Sistema de RH',
      descricao: 'Gestão de recursos humanos simplificada.',
      icone: 'ri-team-line',
      cor: 'green',
      caracteristicas: ['Folha de pagamento', 'Férias', 'Avaliações'],
      imagens: ['assets/img/logos/logo.png', 'assets/img/logos/logo.png']
    }
  ],
  outros: [
    {
      nome: 'ERP Simplificado',
      descricao: 'Plataforma completa para PMEs.',
      icone: 'ri-dashboard-3-line',
      cor: 'brown',
      caracteristicas: ['Financeiro', 'Vendas', 'Stock'],
      imagens: ['assets/img/logos/logo.png', 'assets/img/logos/logo.png']
    },
    {
      nome: 'App Mobile',
      descricao: 'Aplicação nativa para Android e iOS.',
      icone: 'ri-smartphone-line',
      cor: 'orange',
      caracteristicas: ['Design nativo', 'Offline first', 'Push notifications'],
      imagens: ['assets/img/logos/logo.png']
    }
  ]
};

// Estado da paginação
let paginaAtual = {
  websites: 1,
  sistemas: 1,
  outros: 1
};

const itensPorPagina = 2;

// Função para gerar card de produto
function gerarCard(produto, index, categoria) {
  const carouselId = `carousel${categoria}${index}`;
  
  const slides = produto.imagens.map((img, i) => `
    <div class="carousel-item ${i === 0 ? 'active' : ''}">
      <img src="${img}" alt="${produto.nome}" onclick="abrirPreview('${img}')">
    </div>
  `).join('');

  const controles = produto.imagens.length > 1 ? `
    <button class="carousel-control-prev" type="button" data-bs-target="#${carouselId}" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#${carouselId}" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  ` : '';

  return `
    <div class="col-md-6 col-lg-6">
      <div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">
        
        <div id="${carouselId}" class="carousel slide product-carousel" data-bs-ride="carousel">
          <div class="carousel-inner">
            ${slides}
          </div>
          ${controles}
        </div>

        <div class="card-body p-4">
          <div class="d-flex align-items-center mb-3">
            <div class="icon-box icon-${produto.cor} me-3">
              <i class="${produto.icone} fs-3"></i>
            </div>
            <h4 class="mb-0 fw-bold">${produto.nome}</h4>
          </div>

          <p class="text-muted small mb-3">
            ${produto.descricao}
          </p>

          <ul class="list-unstyled small text-muted">
            ${produto.caracteristicas.map(c => `<li><i class="ri-check-line icon-${produto.cor}"></i> ${c}</li>`).join('')}
          </ul>
        </div>

        <div class="card-footer text-center border-0 pb-4">
          <a href="#contacto" class="btn btn-${produto.cor} btn-sm px-4">Pedir Orçamento</a>
        </div>

      </div>
    </div>
  `;
}

// Função para renderizar produtos
function renderizarProdutos(categoria, pagina) {
  const produtosCategoria = produtos[categoria];
  const inicio = (pagina - 1) * itensPorPagina;
  const fim = inicio + itensPorPagina;
  const produtosPagina = produtosCategoria.slice(inicio, fim);

  const content = document.getElementById(`${categoria}Content`);
  content.innerHTML = produtosPagina.map((p, i) => gerarCard(p, inicio + i, categoria)).join('');
}

// Função para renderizar paginação
function renderizarPaginacao(categoria) {
  const totalPaginas = Math.ceil(produtos[categoria].length / itensPorPagina);
  const paginacao = document.getElementById(`${categoria}Pagination`);
  
  let html = '';
  
  // Botão anterior
  if (paginaAtual[categoria] > 1) {
    html += `<li class="page-item">
      <a class="page-link" href="#" onclick="mudarPagina('${categoria}', ${paginaAtual[categoria] - 1}); return false;">Anterior</a>
    </li>`;
  } else {
    html += `<li class="page-item disabled">
      <span class="page-link">Anterior</span>
    </li>`;
  }
  
  // Números das páginas
  for (let i = 1; i <= totalPaginas; i++) {
    if (i === paginaAtual[categoria]) {
      html += `<li class="page-item active">
        <span class="page-link">${i}</span>
      </li>`;
    } else {
      html += `<li class="page-item">
        <a class="page-link" href="#" onclick="mudarPagina('${categoria}', ${i}); return false;">${i}</a>
      </li>`;
    }
  }
  
  // Botão próximo
  if (paginaAtual[categoria] < totalPaginas) {
    html += `<li class="page-item">
      <a class="page-link" href="#" onclick="mudarPagina('${categoria}', ${paginaAtual[categoria] + 1}); return false;">Próximo</a>
    </li>`;
  } else {
    html += `<li class="page-item disabled">
      <span class="page-link">Próximo</span>
    </li>`;
  }
  
  paginacao.innerHTML = html;
}

// Função para renderizar lista de produtos
function renderizarLista(categoria) {
  const lista = document.getElementById(`${categoria}List`);
  lista.innerHTML = produtos[categoria].map(p => `
    <li class="list-group-item d-flex align-items-center">
      <i class="${p.icone} icon-${p.cor} me-3 fs-4"></i>
      <div>
        <strong>${p.nome}</strong>
        <small class="d-block text-muted">${p.descricao}</small>
      </div>
    </li>
  `).join('');
}

// Função para mudar página
function mudarPagina(categoria, pagina) {
  paginaAtual[categoria] = pagina;
  renderizarProdutos(categoria, pagina);
  renderizarPaginacao(categoria);
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Função para mudar categoria
function mudarCategoria(categoria) {
  renderizarProdutos(categoria, paginaAtual[categoria]);
  renderizarPaginacao(categoria);
  renderizarLista(categoria);
}

// Função para abrir preview de imagem
function abrirPreview(imgSrc) {
  document.getElementById('previewImage').src = imgSrc;
  const modal = new bootstrap.Modal(document.getElementById('previewModal'));
  modal.show();
}

// Inicializar ao carregar
document.addEventListener('DOMContentLoaded', function() {
  mudarCategoria('websites');
  mudarCategoria('sistemas');
  mudarCategoria('outros');
});
</script>
