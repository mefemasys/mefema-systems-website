
<!-- Main Section -->
<section class="py-5">
  <div class="container">
    <!-- Filtros e Busca -->
    <div class="filters-section">
      <div class="row g-3 align-items-center">
        <div class="col-lg-5">
          <div class="input-group">
            <span class="input-group-text bg-transparent border-0">
              <i class="ri-search-line"></i>
            </span>
            <input type="text" class="form-control search-input border-start-0"
                   id="searchInput"
                   placeholder="Pesquisar por nome ou descrição...">
          </div>
        </div>
        <div class="col-lg-4">
          <select class="form-select filter-select" id="priceFilter">
            <option value="all">Todos os preços</option>
            <option value="consulta">Sob consulta</option>
            <option value="baixo">Até 30.000 MT</option>
            <option value="medio">30.000 - 50.000 MT</option>
            <option value="alto">Acima de 50.000 MT</option>
          </select>
        </div>
        <div class="col-lg-3 text-end">
          <button class="btn btn-more w-100" id="moreItemsBtn">
            <i class="ri-add-line"></i> Carregar mais
          </button>
        </div>
      </div>
    </div>
    <!-- Tabs de Categorias -->
    <ul class="category-tabs" id="categoriasTab">
      <li>
        <button class="category-tab active" data-categoria="all">
          <i class="ri-apps-2-line"></i>
          <span>Todos</span>
        </button>
      </li>
      <li>
        <button class="category-tab" data-categoria="websites">
          <i class="ri-global-line"></i>
          <span>Websites</span>
        </button>
      </li>
      <li>
        <button class="category-tab" data-categoria="sistemas">
          <i class="ri-dashboard-line"></i>
          <span>Sistemas</span>
        </button>
      </li>
      <li>
        <button class="category-tab" data-categoria="mobile">
          <i class="ri-smartphone-line"></i>
          <span>Mobile</span>
        </button>
      </li>
      <li>
        <button class="category-tab" data-categoria="outros">
          <i class="ri-apps-line"></i>
          <span>Outros</span>
        </button>
      </li>
    </ul>
    <!-- Grid de Produtos -->
    <div class="products-grid" id="produtosGrid"></div>
    <!-- Paginação -->
    <nav class="pagination-wrapper" id="paginacaoContainer" style="display: none;">
      <ul class="pagination" id="paginacao"></ul>
    </nav>
  </div>
</section>
<!-- Modal de Preview -->
<div class="modal fade modal-preview" id="previewModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="previewModalLabel">
          <i class="ri-image-line me-2"></i>
          Preview
        </h5>
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
// ==================== DADOS MOCK ====================
const MOCK_DATA = {
  all: [],
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
  itensPorPagina: 8,
  produtosFiltrados: MOCK_DATA.all,
  loading: false
};

// ==================== FUNÇÕES AUXILIARES ====================
function aplicarFiltros() {
  let produtos = MOCK_DATA[state.categoriaAtual] || [];

  // Filtro por pesquisa
  const termo = document.getElementById('searchInput').value.trim().toLowerCase();
  if (termo) {
    produtos = produtos.filter(p =>
      p.nome.toLowerCase().includes(termo) ||
      p.descricao.toLowerCase().includes(termo)
    );
  }

  // Filtro por preço
  const precoFiltro = document.getElementById('priceFilter').value;
  if (precoFiltro !== 'all') {
    produtos = produtos.filter(p => {
      if (precoFiltro === 'consulta') return p.preco.toLowerCase().includes('consulta') || p.preco.toLowerCase().includes('sob');
      const valor = parseFloat(p.preco.replace(/\D/g, '')) || 999999;
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

function renderProduto(produto) {
  const carouselId = `carousel-${produto.id}`;

  // Slides do carousel
  const slides = produto.screenshots.map((img, i) => `
    <div class="carousel-item ${i === 0 ? 'active' : ''}">
      <img src="${img}" class="d-block w-100" alt="${produto.nome}" onclick="abrirPreview('${img}', '${produto.nome}')">
    </div>
  `).join('');

  // Indicadores
  const indicators = produto.screenshots.length > 1 ? `
    <div class="carousel-indicators">
      ${produto.screenshots.map((_, i) => `
        <button type="button" data-bs-target="#${carouselId}" data-bs-slide-to="${i}" ${i === 0 ? 'class="active"' : ''}></button>
      `).join('')}
    </div>` : '';

  // Controles
  const controls = produto.screenshots.length > 1 ? `
    <button class="carousel-control-prev" type="button" data-bs-target="#${carouselId}" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#${carouselId}" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>` : '';

  // Botões de ação
  const btnDemo = produto.demoUrl ? `
    <a href="${produto.demoUrl}" target="_blank" class="btn-demo btn-outline-${produto.cor}">
      <i class="ri-external-link-line"></i> Ver Demo
    </a>` : '';

  return `
    <div class="product-card">
      <div id="${carouselId}" class="carousel slide product-carousel" data-bs-ride="${produto.screenshots.length > 1 ? 'carousel' : 'false'}">
        ${indicators}
        <div class="carousel-inner">${slides}</div>
        ${controls}
      </div>
      <div class="card-body">
        <div class="d-flex align-items-start mb-3">
          <div class="icon-box icon-${produto.cor} me-3">
            <i class="${produto.icone} fs-4"></i>
          </div>
          <div>
            <h5 class="product-title">${produto.nome}</h5>
            <div class="product-price">${produto.preco}</div>
          </div>
        </div>
        <p class="product-description">${produto.descricao}</p>
        <div class="features-container">
          ${produto.caracteristicas.slice(0, 5).map(c => `
            <span class="feature-badge">
              <i class="ri-check-line"></i> ${c}
            </span>
          `).join('')}
          ${produto.caracteristicas.length > 5 ? `
            <span class="feature-badge">+${produto.caracteristicas.length - 5}</span>
          ` : ''}
        </div>
      </div>
      <div class="card-footer">
        <div class="d-grid gap-2 d-md-flex">
          ${btnDemo}
          <a href="#contacto" class="btn-quote btn-${produto.cor} flex-fill">
            <i class="ri-mail-send-line"></i> Pedir Orçamento
          </a>
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

  if (produtosPagina.length === 0) {
    grid.innerHTML = `
      <div class="empty-state">
        <i class="ri-inbox-line"></i>
        <h4>Nenhum produto encontrado</h4>
        <p>Tente ajustar os filtros ou a categoria selecionada.</p>
      </div>
    `;
    document.getElementById('paginacaoContainer').style.display = 'none';
    return;
  }

  grid.innerHTML = produtosPagina.map(renderProduto).join('');
  renderPaginacao();
}

function renderPaginacao() {
  const totalPaginas = Math.ceil(state.produtosFiltrados.length / state.itensPorPagina);
  const container = document.getElementById('paginacaoContainer');
  const ul = document.getElementById('paginacao');

  if (totalPaginas <= 1) {
    container.style.display = 'none';
    return;
  }

  container.style.display = 'block';

  let html = '';
  if (state.paginaAtual > 1) {
    html += `<li class="page-item"><a class="page-link" href="#" data-pagina="${state.paginaAtual - 1}"><i class="ri-arrow-left-s-line"></i> Anterior</a></li>`;
  }

  const inicioPag = Math.max(1, state.paginaAtual - 2);
  const fimPag = Math.min(totalPaginas, state.paginaAtual + 2);

  if (inicioPag > 1) {
    html += `<li class="page-item"><a class="page-link" href="#" data-pagina="1">1</a></li>`;
    if (inicioPag > 2) html += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
  }

  for (let i = inicioPag; i <= fimPag; i++) {
    html += `<li class="page-item ${i === state.paginaAtual ? 'active' : ''}">
      <a class="page-link" href="#" data-pagina="${i}">${i}</a>
    </li>`;
  }

  if (fimPag < totalPaginas) {
    if (fimPag < totalPaginas - 1) html += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
    html += `<li class="page-item"><a class="page-link" href="#" data-pagina="${totalPaginas}">${totalPaginas}</a></li>`;
  }

  if (state.paginaAtual < totalPaginas) {
    html += `<li class="page-item"><a class="page-link" href="#" data-pagina="${state.paginaAtual + 1}">Próxima <i class="ri-arrow-right-s-line"></i></a></li>`;
  }

  ul.innerHTML = html;
}

function abrirPreview(src, titulo) {
  document.getElementById('previewImage').src = src;
  document.getElementById('previewModalLabel').innerHTML = `<i class="ri-image-line me-2"></i>${titulo}`;
  const modal = new bootstrap.Modal(document.getElementById('previewModal'));
  modal.show();
}

// ==================== EVENT LISTENERS ====================
document.addEventListener('DOMContentLoaded', function () {
  // Tabs de categoria
  document.querySelectorAll('.category-tab').forEach(tab => {
    tab.addEventListener('click', function () {
      document.querySelectorAll('.category-tab').forEach(t => t.classList.remove('active'));
      this.classList.add('active');
      state.categoriaAtual = this.dataset.categoria;
      aplicarFiltros();
    });
  });

  // Filtros
  document.getElementById('searchInput').addEventListener('input', aplicarFiltros);
  document.getElementById('priceFilter').addEventListener('change', aplicarFiltros);

  // Botão carregar mais
  document.getElementById('moreItemsBtn').addEventListener('click', function () {
    state.itensPorPagina += 8;
    renderProdutos();
  });

  // Paginação
  document.getElementById('paginacao').addEventListener('click', function (e) {
    e.preventDefault();
    const link = e.target.closest('.page-link');
    if (link && link.dataset.pagina) {
      state.paginaAtual = parseInt(link.dataset.pagina);
      renderProdutos();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  });

  // Render inicial
  renderProdutos();
});
</script>
