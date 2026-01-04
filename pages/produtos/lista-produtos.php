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
      min-height: 550px;
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
      height: 550px;
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
  </style>

<section class="py-5">
  <div class="container">

    <!-- Tabs de Categorias -->
    <ul class="nav nav-tabs nav-tabs-clean justify-content-center mb-5" id="categoriasTab">
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

    <!-- Conteúdo dos Produtos -->
    <div id="produtosContainer">
      <div class="row g-4" id="produtosGrid"></div>
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
// ==================== CONFIGURAÇÃO DA API ====================
const API_CONFIG = {
  baseURL: 'https://api.vossa-empresa.com',
  endpoints: {
    produtos: '/api/produtos',
    categorias: '/api/categorias'
  }
};

// ==================== ESTADO DA APLICAÇÃO ====================
const state = {
  categoriaAtual: 'websites',
  paginaAtual: 1,
  itensPorPagina: 4,
  produtos: [],
  loading: false
};

// ==================== DADOS MOCK (temporário até API estar pronta) ====================
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

// ==================== FUNÇÕES DE API ====================
async function fetchProdutos(categoria, pagina = 1) {
  // SIMULAÇÃO: Quando a API estiver pronta, descomentar isto:
  /*
  try {
    const response = await fetch(
      `${API_CONFIG.baseURL}${API_CONFIG.endpoints.produtos}?categoria=${categoria}&pagina=${pagina}&limite=${state.itensPorPagina}`
    );
    
    if (!response.ok) throw new Error('Erro ao carregar produtos');
    
    const data = await response.json();
    return data;
  } catch (error) {
    console.error('Erro:', error);
    return { produtos: [], total: 0 };
  }
  */
  
  // MOCK: Simula chamada à API
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
    }, 800);
  });
}

// ==================== FUNÇÕES DE RENDERIZAÇÃO ====================
function renderSkeleton() {
  const grid = document.getElementById('produtosGrid');
  grid.innerHTML = Array(state.itensPorPagina).fill(0).map(() => `
    <div class="col-md-6 col-lg-3">
      <div class="card shadow-sm border-0 skeleton-card">
        <div class="skeleton skeleton-img"></div>
        <div class="card-body">
          <div class="skeleton mb-3" style="height: 20px; width: 60%;"></div>
          <div class="skeleton mb-2" style="height: 15px; width: 100%;"></div>
          <div class="skeleton mb-2" style="height: 15px; width: 90%;"></div>
          <div class="skeleton" style="height: 15px; width: 80%;"></div>
        </div>
      </div>
    </div>
  `).join('');
}

function renderProduto(produto, index) {
  const carouselId = `carousel-${produto.id}`;
  
  const slides = produto.screenshots.map((img, i) => `
    <div class="carousel-item ${i === 0 ? 'active' : ''}">
      <img src="${img}" alt="${produto.nome}" onclick="abrirPreview('${img}', '${produto.nome}')">
    </div>
  `).join('');

  const indicators = produto.screenshots.length > 1 ? `
    <div class="carousel-indicators">
      ${produto.screenshots.map((_, i) => `
        <button type="button" data-bs-target="#${carouselId}" data-bs-slide-to="${i}" 
          ${i === 0 ? 'class="active"' : ''}></button>
      `).join('')}
    </div>
  ` : '';

  const controles = produto.screenshots.length > 1 ? `
    <button class="carousel-control-prev" type="button" data-bs-target="#${carouselId}" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#${carouselId}" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  ` : '';

  return `
    <div class="col-md-6 col-lg-3">
      <div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">
        
        <div id="${carouselId}" class="carousel slide product-carousel" data-bs-ride="carousel">
          ${indicators}
          <div class="carousel-inner">
            ${slides}
          </div>
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

          <p class="product-description mb-3">
            ${produto.descricao}
          </p>

          <div class="mb-3">
            ${produto.caracteristicas.slice(0, 4).map(c => `
              <span class="badge bg-light text-dark badge-feature me-1 mb-1">
                <i class="ri-check-line icon-${produto.cor}"></i> ${c}
              </span>
            `).join('')}
            ${produto.caracteristicas.length > 4 ? 
              `<span class="badge bg-light text-dark badge-feature">+${produto.caracteristicas.length - 4}</span>` 
              : ''}
          </div>
        </div>

        <div class="card-footer border-0 bg-white p-3">
          <div class="d-flex gap-2">
            ${produto.demoUrl ? `
              <a href="${produto.demoUrl}" target="_blank" class="btn btn-outline-${produto.cor} btn-sm flex-fill">
                <i class="ri-external-link-line"></i> Demo
              </a>
            ` : ''}
            <a href="#contacto" class="btn btn-${produto.cor} btn-sm flex-fill">
              <i class="ri-mail-line"></i> Orçamento
            </a>
          </div>
        </div>

      </div>
    </div>
  `;
}

function renderProdutos(data) {
  const grid = document.getElementById('produtosGrid');
  
  if (data.produtos.length === 0) {
    grid.innerHTML = `
      <div class="col-12">
        <div class="empty-state">
          <i class="ri-inbox-line"></i>
          <h4>Nenhum produto encontrado</h4>
          <p>Não há produtos disponíveis nesta categoria no momento.</p>
        </div>
      </div>
    `;
    document.getElementById('paginacaoContainer').style.display = 'none';
    return;
  }
  
  grid.innerHTML = data.produtos.map((p, i) => renderProduto(p, i)).join('');
  
  if (data.totalPaginas > 1) {
    renderPaginacao(data);
    document.getElementById('paginacaoContainer').style.display = 'block';
  } else {
    document.getElementById('paginacaoContainer').style.display = 'none';
  }
}

function renderPaginacao(data) {
  const paginacao = document.getElementById('paginacao');
  let html = '';
  
  if (state.paginaAtual > 1) {
    html += `
      <li class="page-item">
        <a class="page-link" href="#" data-pagina="${state.paginaAtual - 1}">
          <i class="ri-arrow-left-line"></i> Anterior
        </a>
      </li>`;
  }
  
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
  document.querySelectorAll('#categoriasTab .nav-link').forEach(link => {
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

function abrirPreview(imgSrc, titulo) {
  document.getElementById('previewImage').src = imgSrc;
  document.getElementById('previewModalLabel').textContent = titulo || 'Preview';
  const modal = new bootstrap.Modal(document.getElementById('previewModal'));
  modal.show();
}

// ==================== EVENT LISTENERS ====================
document.addEventListener('DOMContentLoaded', function() {
  // Tabs de categorias
  document.querySelectorAll('#categoriasTab .nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      mudarCategoria(this.dataset.categoria);
    });
  });
  
  // Paginação
  document.getElementById('paginacao').addEventListener('click', function(e) {
    e.preventDefault();
    if (e.target.classList.contains('page-link')) {
      const pagina = parseInt(e.target.dataset.pagina);
      if (pagina) mudarPagina(pagina);
    }
  });
  
  // Carregar produtos iniciais
  carregarProdutos('websites', 1);
});

// ==================== FUNÇÕES AUXILIARES ====================
// Função para quando a API estiver pronta - facilita migração
function configurarAPI(baseURL, token = null) {
  API_CONFIG.baseURL = baseURL;
  if (token) {
    API_CONFIG.token = token;
  }
  console.log('API configurada:', baseURL);
}

// Exportar para uso externo se necessário
if (typeof module !== 'undefined' && module.exports) {
  module.exports = { configurarAPI, carregarProdutos };
}
</script>
