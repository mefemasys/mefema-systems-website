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
      min-height: 580px;
      display: flex;
      flex-direction: column;
      background: white;
      overflow: hidden;
      height: 100%;
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
    .carousel-indicators {
      bottom: 10px;
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
    .skeleton-card {
      height: 580px;
    }
    .skeleton-img {
      height: 250px;
    }
    .modal-preview .modal-dialog {
      max-width: 90vw;
    }
    .modal-preview img {
      max-width: 100%;
      max-height: 80vh;
      object-fit: contain;
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
    /* Responsividade dos cards - mínimo 3, máximo mais em telas grandes */
    @media (min-width: 576px) { .grid-cols { --cols: 2; } }
    @media (min-width: 768px) { .grid-cols { --cols: 3; } }
    @media (min-width: 1200px) { .grid-cols { --cols: 4; } }
    @media (min-width: 1400px) { .grid-cols { --cols: 5; } }
    .products-grid {
      display: grid;
      grid-template-columns: repeat(var(--cols), 1fr);
      gap: 1.5rem;
    }
  </style>


<section class="py-5">
  <div class="container">
    <!-- Filtros e Busca -->
    <div class="row mb-4">
      <div class="col-lg-6">
        <input type="text" class="form-control" id="searchInput" placeholder="Pesquisar por nome ou descrição...">
      </div>
      <div class="col-lg-3 mt-3 mt-lg-0">
        <select class="form-select" id="priceFilter">
          <option value="all">Todos os preços</option>
          <option value="consulta">Sob consulta</option>
          <option value="baixo">Até 30.000 MT</option>
          <option value="medio">30.000 - 50.000 MT</option>
          <option value="alto">Acima de 50.000 MT</option>
        </select>
      </div>
      <div class="col-lg-3 mt-3 mt-lg-0 text-end">
        <button class="btn btn-outline-secondary" id="moreItemsBtn">
          <i class="ri-add-line"></i> Mais itens
        </button>
      </div>
    </div>

    <!-- Tabs de Categorias -->
    <ul class="nav nav-tabs nav-tabs-clean justify-content-center mb-5" id="categoriasTab">
      <li class="nav-item">
        <button class="nav-link active" data-categoria="all">
          <i class="ri-apps-2-line me-2"></i>Todos
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-categoria="websites">
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

    <!-- Conteúdo dos Produtos -->
    <div id="produtosContainer">
      <div class="products-grid grid-cols" id="produtosGrid"></div>
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
<script>
// ==================== DADOS MOCK COM 18 PRODUTOS ====================
const MOCK_DATA = {
  all: [], // será preenchido com todos os produtos
  websites: [
    {id:1,nome:"Website Institucional Premium",descricao:"Website profissional completo, optimizado para SEO e totalmente responsivo.",categoria:"websites",icone:"ri-global-line",cor:"orange",caracteristicas:["Até 15 páginas","SEO avançado","Google Analytics","Formulários personalizados","Chat online","Blog integrado"],screenshots:["https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800","https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800","https://images.unsplash.com/photo-1547658719-da2b51169166?w=800"],demoUrl:"https://demo.exemplo.com/institucional",preco:"Sob consulta"},
    {id:2,nome:"Landing Page de Conversão",descricao:"Página única focada em conversão máxima de visitantes.",categoria:"websites",icone:"ri-rocket-line",cor:"blue",caracteristicas:["Alta taxa de conversão","A/B Testing","Pixel Facebook/Google","WhatsApp Business"],screenshots:["https://images.unsplash.com/photo-1557804506-669a67965ba0?w=800","https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800"],demoUrl:"https://demo.exemplo.com/landing",preco:"A partir de 15.000 MT"},
    {id:3,nome:"E-commerce Completo",descricao:"Loja online profissional com gestão completa de produtos e pagamentos.",categoria:"websites",icone:"ri-shopping-cart-line",cor:"green",caracteristicas:["Produtos ilimitados","M-Pesa & Cartão","Gestão de stock","Cupons de desconto"],screenshots:["https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=800","https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800"],demoUrl:"https://demo.exemplo.com/ecommerce",preco:"A partir de 45.000 MT"},
    {id:4,nome:"Portal de Notícias",descricao:"Plataforma completa para publicação de conteúdo jornalístico.",categoria:"websites",icone:"ri-newspaper-line",cor:"brown",caracteristicas:["Editor avançado","Multi-autor","Categorias ilimitadas","Newsletter"],screenshots:["https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=800","https://images.unsplash.com/photo-1585829365295-ab7cd400c167?w=800"],demoUrl:"https://demo.exemplo.com/portal",preco:"Sob consulta"},
    {id:10,nome:"Portfolio Pessoal",descricao:"Site moderno para mostrar trabalhos e competências.",categoria:"websites",icone:"ri-user-3-line",cor:"orange",caracteristicas:["Design minimalista","Galeria de projetos","Currículo interativo","Contacto rápido"],screenshots:["https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?w=800"],demoUrl:null,preco:"A partir de 12.000 MT"},
    {id:11,nome:"Site para Restaurantes",descricao:"Cardápio digital, reservas online e integração com delivery.",categoria:"websites",icone:"ri-restaurant-line",cor:"green",caracteristicas:["Menu interativo","Reservas online","Integração Uber Eats","Galeria de pratos"],screenshots:["https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=800"],demoUrl:"https://demo.exemplo.com/restaurante",preco:"A partir de 20.000 MT"}
  ],
  sistemas: [
    {id:5,nome:"Sistema de Facturação AT",descricao:"Software certificado pela Autoridade Tributária.",categoria:"sistemas",icone:"ri-file-list-3-line",cor:"orange",caracteristicas:["Certificado AT","PDV touch","Stock multi-loja","M-Pesa integrado"],screenshots:["https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800"],demoUrl:"https://demo.exemplo.com/facturacao",preco:"A partir de 25.000 MT"},
    {id:6,nome:"CRM Empresarial",descricao:"Gestão completa do relacionamento com clientes.",categoria:"sistemas",icone:"ri-customer-service-2-line",cor:"blue",caracteristicas:["Pipeline visual","Automação de tarefas","WhatsApp integrado","Relatórios avançados"],screenshots:["https://images.unsplash.com/photo-1552664730-d307ca884978?w=800"],demoUrl:"https://demo.exemplo.com/crm",preco:"A partir de 35.000 MT"},
    {id:7,nome:"Sistema de Recursos Humanos",descricao:"Gestão completa de RH com folha de pagamento.",categoria:"sistemas",icone:"ri-team-line",cor:"green",caracteristicas:["Folha de pagamento","Gestão de férias","Portal colaborador","Relatórios INSS"],screenshots:["https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800"],demoUrl:"https://demo.exemplo.com/rh",preco:"A partir de 40.000 MT"},
    {id:12,nome:"Gestão de Clínicas",descricao:"Software para marcação de consultas e histórico clínico.",categoria:"sistemas",icone:"ri-hospital-line",cor:"blue",caracteristicas:["Marcação online","Histórico clínico","Faturação integrada","Relatórios médicos"],screenshots:["https://images.unsplash.com/photo-1512678080530-7760e9fe1ee9?w=800"],demoUrl:null,preco:"A partir de 55.000 MT"},
    {id:13,nome:"Sistema Escolar",descricao:"Gestão de alunos, notas, frequência e pagamentos escolares.",categoria:"sistemas",icone:"ri-book-2-line",cor:"brown",caracteristicas:["Portal do aluno","Notas e frequência","Pagamentos online","Relatórios pedagógicos"],screenshots:["https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800"],demoUrl:"https://demo.exemplo.com/escola",preco:"Sob consulta"}
  ],
  mobile: [
    {id:8,nome:"App Mobile Nativa",descricao:"Aplicação nativa para Android e iOS.",categoria:"mobile",icone:"ri-smartphone-line",cor:"orange",caracteristicas:["Android & iOS","Push notifications","Modo offline","Pagamentos integrados"],screenshots:["https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800","https://images.unsplash.com/photo-1551650975-87deedd944c3?w=800"],demoUrl:null,preco:"A partir de 60.000 MT"},
    {id:14,nome:"App de Delivery",descricao:"Aplicação completa para entregas com rastreamento em tempo real.",categoria:"mobile",icone:"ri-motorbike-line",cor:"green",caracteristicas:["Rastreamento GPS","Notificações em tempo real","Pagamentos M-Pesa","Gestão de pedidos"],screenshots:["https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=800"],demoUrl:null,preco:"A partir de 70.000 MT"},
    {id:15,nome:"App de Táxi",descricao:"Plataforma estilo Uber para chamadas de táxi.",categoria:"mobile",icone:"ri-taxi-line",cor:"blue",caracteristicas:["Chamadas em tempo real","Pagamento digital","Avaliação de motoristas","Mapa integrado"],screenshots:["https://images.unsplash.com/photo-1515169067868-5387ec356754?w=800"],demoUrl:null,preco:"Sob consulta"}
  ],
  outros: [
    {id:9,nome:"ERP para PMEs",descricao:"Sistema integrado de gestão empresarial.",categoria:"outros",icone:"ri-dashboard-3-line",cor:"brown",caracteristicas:["Módulos integrados","Multi-empresa","Relatórios personalizados","API completa"],screenshots:["https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800"],demoUrl:"https://demo.exemplo.com/erp",preco:"Sob consulta"},
    {id:16,nome:"Sistema de Reservas",descricao:"Plataforma para reservas de hotéis, eventos ou serviços.",categoria:"outros",icone:"ri-calendar-check-line",cor:"orange",caracteristicas:["Calendário visual","Pagamentos online","Confirmação automática","Gestão de disponibilidade"],screenshots:["https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=800"],demoUrl:null,preco:"A partir de 30.000 MT"},
    {id:17,nome:"Chatbot Inteligente",descricao:"Bot para WhatsApp ou site com IA integrada.",categoria:"outros",icone:"ri-robot-line",cor:"blue",caracteristicas:["Integração WhatsApp","Respostas automáticas","Fluxos personalizados","Análise de conversas"],screenshots:["https://images.unsplash.com/photo-1531746790731-6c087fecd65a?w=800"],demoUrl:null,preco:"A partir de 18.000 MT"},
    {id:18,nome:"Dashboard Analytics",descricao:"Painel personalizado de métricas e KPIs.",categoria:"outros",icone:"ri-bar-chart-line",cor:"green",caracteristicas:["Gráficos interativos","Integração múltiplas fontes","Alertas automáticos","Exportação de relatórios"],screenshots:["https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800"],demoUrl:"https://demo.exemplo.com/analytics",preco:"A partir de 25.000 MT"}
  ]
};

// Preencher "all" com todos os produtos
MOCK_DATA.all = [
  ...MOCK_DATA.websites,
  ...MOCK_DATA.sistemas,
  ...MOCK_DATA.mobile,
  ...MOCK_DATA.outros
];

// ==================== ESTADO DA APLICAÇÃO ====================
const state = {
  categoriaAtual: 'all',
  paginaAtual: 1,
  itensPorPagina: 8, // aumentado para suportar mais cards por linha
  produtosFiltrados: [],
  loading: false
};

// ==================== FUNÇÕES DE FILTRAGEM ====================
function aplicarFiltros() {
  let produtos = MOCK_DATA[state.categoriaAtual] || [];

  // Filtro de busca
  const termo = document.getElementById('searchInput').value.toLowerCase();
  if (termo) {
    produtos = produtos.filter(p =>
      p.nome.toLowerCase().includes(termo) ||
      p.descricao.toLowerCase().includes(termo)
    );
  }

  // Filtro de preço
  const precoFiltro = document.getElementById('priceFilter').value;
  if (precoFiltro !== 'all') {
    produtos = produtos.filter(p => {
      if (precoFiltro === 'consulta') return p.preco.includes('consulta');
      const valor = parseInt(p.preco.replace(/\D/g,'')) || 999999;
      if (precoFiltro === 'baixo') return valor <= 30000;
      if (precoFiltro === 'medio') return valor > 30000 && valor <= 50000;
      if (precoFiltro === 'alto') return valor > 50000;
      return true;
    });
  }

  state.produtosFiltrados = produtos;
  state.paginaAtual = 1;
  renderProdutos();
}

// ==================== RENDERIZAÇÃO ====================
function renderSkeleton() {
  const grid = document.getElementById('produtosGrid');
  grid.innerHTML = Array(8).fill(0).map(() => `
    <div class="card shadow-sm border-0 skeleton-card">
      <div class="skeleton skeleton-img"></div>
      <div class="card-body p-4">
        <div class="skeleton mb-3" style="height: 20px; width: 60%;"></div>
        <div class="skeleton mb-2" style="height: 15px; width: 100%;"></div>
        <div class="skeleton mb-2" style="height: 15px; width: 90%;"></div>
        <div class="skeleton" style="height: 15px; width: 80%;"></div>
      </div>
    </div>
  `).join('');
}

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
      <div id="${carouselId}" class="carousel slide product-carousel" data-bs-ride="carousel">
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
        <div class="mb-3">
          ${produto.caracteristicas.slice(0, 4).map(c => `
            <span class="badge bg-light text-dark badge-feature me-1 mb-1">
              <i class="ri-check-line"></i> ${c}
            </span>
          `).join('')}
          ${produto.caracteristicas.length > 3 ? `<span class="badge bg-light text-dark badge-feature">+${produto.caracteristicas.length - 4}</span>` : ''}
        </div>
      </div>
      <div class="card-footer border-0 bg-white p-3">
        <div class="d-flex gap-2">
          ${produto.demoUrl ? `<a href="${produto.demoUrl}" target="_blank" class="btn btn-outline-${produto.cor} btn-sm flex-fill"><i class="ri-external-link-line"></i> Demo</a>` : ''}
          <a href="#contacto" class="btn btn-${produto.cor} btn-sm flex-fill"><i class="ri-mail-line"></i> Orçamento</a>
        </div>
      </div>
    </div>
  `;
}

function renderProdutos() {
  const grid = document.getElementById('produtosGrid');
  const inicio = (state.paginaAtual - 1) * state.itensPorPagina;
  const fim = inicio + state.itensPorPagina;
  const produtosPagina = state.produtosFiltrados.slice(inicio, fim);

  if (state.produtosFiltrados.length === 0) {
    grid.innerHTML = `<div class="col-12 empty-state"><i class="ri-inbox-line"></i><h4>Nenhum produto encontrado</h4><p>Tente ajustar os filtros.</p></div>`;
    document.getElementById('paginacaoContainer').style.display = 'none';
    return;
  }

  grid.innerHTML = produtosPagina.map(renderProduto).join('');
  renderPaginacao();
}

function renderPaginacao() {
  const totalPaginas = Math.ceil(state.produtosFiltrados.length / state.itensPorPagina);
  const paginacao = document.getElementById('paginacao');
  if (totalPaginas <= 1) {
    document.getElementById('paginacaoContainer').style.display = 'none';
    return;
  }
  document.getElementById('paginacaoContainer').style.display = 'block';

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

// ==================== EVENTOS ====================
function abrirPreview(imgSrc, titulo) {
  document.getElementById('previewImage').src = imgSrc;
  document.getElementById('previewModalLabel').textContent = titulo;
  const modal = new bootstrap.Modal(document.getElementById('previewModal'));
  modal.show();
}

document.addEventListener('DOMContentLoaded', function() {
  // Tabs
  document.querySelectorAll('#categoriasTab .nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelectorAll('#categoriasTab .nav-link').forEach(l => l.classList.remove('active'));
      this.classList.add('active');
      state.categoriaAtual = this.dataset.categoria;
      aplicarFiltros();
    });
  });

  // Filtros
  document.getElementById('searchInput').addEventListener('input', aplicarFiltros);
  document.getElementById('priceFilter').addEventListener('change', aplicarFiltros);

  // Botão "Mais itens" - aumenta itens por página
  document.getElementById('moreItemsBtn').addEventListener('click', function() {
    state.itensPorPagina += 8;
    renderProdutos();
  });

  // Paginação
  document.getElementById('paginacao').addEventListener('click', function(e) {
    e.preventDefault();
    if (e.target.closest('.page-link')) {
      const link = e.target.closest('.page-link');
      if (link.dataset.pagina) {
        state.paginaAtual = parseInt(link.dataset.pagina);
        renderProdutos();
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    }
  });

  // Inicial
  state.produtosFiltrados = MOCK_DATA.all;
  renderProdutos();
});
</script>
