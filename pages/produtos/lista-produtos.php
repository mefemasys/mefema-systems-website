
<!-- Carregar CSS específico apenas nesta seção -->
<link rel="stylesheet" href="/assets/css/produtos.css">

<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="display-5 fw-bold mb-3">Os Nossos Produtos & Serviços</h1>
      <p class="lead text-muted col-lg-8 mx-auto">
        Soluções digitais completas: websites, sistemas de gestão, aplicações móveis e muito mais. Tudo personalizado para o seu negócio.
      </p>
    </div>

    <!-- Filtros e Busca -->
    <div class="row mb-4 g-3">
      <div class="col-lg-5">
        <input type="text" class="form-control form-control-lg" id="searchInput" placeholder="Pesquisar por nome, descrição ou funcionalidade...">
      </div>
      <div class="col-lg-3">
        <select class="form-select form-select-lg" id="priceFilter">
          <option value="all">Todos os preços</option>
          <option value="consulta">Sob consulta</option>
          <option value="baixo">Até 30.000 MT</option>
          <option value="medio">30.001 - 60.000 MT</option>
          <option value="alto">Acima de 60.000 MT</option>
        </select>
      </div>
      <div class="col-lg-4 text-lg-end">
        <button class="btn btn-outline-primary btn-lg" id="moreItemsBtn">
          <i class="ri-add-line align-middle"></i> Mostrar mais
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
          <i class="ri-dashboard-line me-2"></i>Sistemas de Gestão
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-categoria="mobile">
          <i class="ri-smartphone-line me-2"></i>Apps Móveis
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-categoria="outros">
          <i class="ri-more-2-line me-2"></i>Outros
        </button>
      </li>
    </ul>

    <!-- Grid de Produtos -->
    <div id="produtosContainer">
      <div class="products-grid grid-cols" id="produtosGrid"></div>
    </div>

    <!-- Paginação -->
    <nav class="mt-5 d-flex justify-content-center" id="paginacaoContainer">
      <ul class="pagination pagination-clean" id="paginacao"></ul>
    </nav>
  </div>
</section>

<!-- Modal Preview de Imagem -->
<div class="modal fade modal-preview" id="previewModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content overflow-hidden">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="previewModalLabel">Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-0 text-center bg-black">
        <img id="previewImage" src="" alt="Preview" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<script>
// ==================== DADOS DOS PRODUTOS ====================
const PRODUTOS = {
  all: [],
  websites: [
    {id:1,nome:"Website Essencial",categoria:"websites",icone:"ri-global-line",cor:"orange",preco:"38.000 MT",descricao:"Presença digital básica com design responsivo.",caracteristicas:["5 páginas","Domínio .co.mz","SSL","Email profissional","Formulário"],screenshots:["/assets/img/websites/essencial-home.jpg","/assets/img/websites/essencial-sobre.jpg"],demoUrl:"https://demo.mefemasystems.co.mz/essencial"},
    {id:2,nome:"Website Empresarial",categoria:"websites",icone:"ri-briefcase-line",cor:"blue",preco:"68.000 MT",descricao:"Website profissional com blog e funcionalidades avançadas.",caracteristicas:["10 páginas","Blog integrado","Chat online","SEO","Analytics"],screenshots:["/assets/img/websites/empresarial-home.jpg","/assets/img/websites/empresarial-blog.jpg"],demoUrl:"https://demo.mefemasystems.co.mz/empresarial"},
    {id:3,nome:"Landing Page Conversão",categoria:"websites",icone:"ri-rocket-line",cor:"green",preco:"25.000 MT",descricao:"Página única otimizada para captar leads.",caracteristicas:["Alta conversão","Pixel tracking","Formulário leads","Contador"],screenshots:["/assets/img/websites/landing-hero.jpg"],demoUrl:"https://demo.mefemasystems.co.mz/landing"},
    {id:4,nome:"E-commerce Starter",categoria:"websites",icone:"ri-shopping-cart-line",cor:"orange",preco:"95.000 MT",descricao:"Loja online completa com pagamentos locais.",caracteristicas:["50 produtos","M-Pesa","Gestão stock","Carrinho"],screenshots:["/assets/img/websites/ecommerce-home.jpg","/assets/img/websites/ecommerce-checkout.jpg"],demoUrl:"https://demo.mefemasystems.co.mz/ecommerce"},
    // Adiciona mais se quiseres
  ],
  sistemas: [
    {id:5,nome:"ERP Completo",categoria:"sistemas",icone:"ri-building-4-line",cor:"blue",preco:"150.000 MT",descricao:"Sistema integrado para gestão total da empresa.",caracteristicas:["Finanças","Stock","Vendas","RH","Relatórios"],screenshots:["/assets/img/sistemas/erp-dashboard.jpg","/assets/img/sistemas/erp-financas.jpg"],demoUrl:"https://demo.mefemasystems.co.mz/erp"},
    {id:6,nome:"CRM Avançado",categoria:"sistemas",icone:"ri-customer-service-2-line",cor:"green",preco:"75.000 MT",descricao:"Gestão de clientes e funil de vendas.",caracteristicas:["Pipeline","Automação","WhatsApp","Relatórios"],screenshots:["/assets/img/sistemas/crm-dashboard.jpg"],demoUrl:"https://demo.mefemasystems.co.mz/crm"},
    {id:7,nome:"Gestão Escolar",categoria:"sistemas",icone:"ri-graduation-cap-line",cor:"orange",preco:"95.000 MT",descricao:"Sistema completo para escolas e universidades.",caracteristicas:["Matrículas","Notas","Propinas","Portal"],screenshots:["/assets/img/sistemas/escolar-dashboard.jpg"],demoUrl:"https://demo.mefemasystems.co.mz/escolar"},
    {id:8,nome:"POS + Facturação AT",categoria:"sistemas",icone:"ri-calculator-line",cor:"brown",preco:"45.000 MT",descricao:"Ponto de venda certificado pela AT.",caracteristicas:["Facturação eletrónica","M-Pesa","Stock","Caixa"],screenshots:["/assets/img/sistemas/pos-venda.jpg"],demoUrl:"https://demo.mefemasystems.co.mz/pos"},
    // Mais sistemas aqui...
  ],
  mobile: [
    {id:9,nome:"App Mobile Híbrida",categoria:"mobile",icone:"ri-smartphone-line",cor:"blue",preco:"80.000 MT",descricao:"Aplicação para Android e iOS.",caracteristicas:["Multiplataforma","Push","Offline","Pagamentos"],screenshots:["/assets/img/mobile/app1.jpg","/assets/img/mobile/app2.jpg"],demoUrl:null},
  ],
  outros: [
    {id:10,nome:"Chatbot WhatsApp",categoria:"outros",icone:"ri-robot-line",cor:"green",preco:"25.000 MT",descricao:"Bot inteligente para atendimento automático.",caracteristicas:["Fluxos","IA básica","Integração WhatsApp","Relatórios"],screenshots:["/assets/img/outros/chatbot.jpg"],demoUrl:null},
  ]
};

// Preencher "all"
PRODUTOS.all = [...PRODUTOS.websites, ...PRODUTOS.sistemas, ...PRODUTOS.mobile, ...PRODUTOS.outros];

// Estado
const state = {
  categoriaAtual: 'all',
  paginaAtual: 1,
  itensPorPagina: 8,
  produtosFiltrados: PRODUTOS.all
};

// Funções (mesmas do teu código, só limpei e organizei)
function aplicarFiltros() {
  let produtos = PRODUTOS[state.categoriaAtual] || [];
  const termo = document.getElementById('searchInput').value.trim().toLowerCase();
  if (termo) {
    produtos = produtos.filter(p => p.nome.toLowerCase().includes(termo) || p.descricao.toLowerCase().includes(termo));
  }
  const preco = document.getElementById('priceFilter').value;
  if (preco !== 'all') {
    produtos = produtos.filter(p => {
      if (preco === 'consulta') return p.preco.includes('consulta') || p.preco.includes('Sob');
      const valor = parseInt(p.preco.replace(/\D/g,'')) || 9999999;
      if (preco === 'baixo') return valor <= 30000;
      if (preco === 'medio') return valor > 30000 && valor <= 60000;
      if (preco === 'alto') return valor > 60000;
      return true;
    });
  }
  state.produtosFiltrados = produtos;
  state.paginaAtual = 1;
  renderProdutos();
}

function renderProduto(p) {
  const carouselId = `carousel-${p.id}`;
  const slides = p.screenshots.map((img, i) => `
    <div class="carousel-item ${i===0?'active':''}">
      <img src="${img}" class="d-block w-100" alt="${p.nome}" onclick="abrirPreview('${img}', '${p.nome}')">
    </div>
  `).join('');
  const indicators = p.screenshots.length > 1 ? `
    <div class="carousel-indicators">
      ${p.screenshots.map((_,i)=>`<button type="button" data-bs-target="#${carouselId}" data-bs-slide-to="${i}" ${i===0?'class="active"':''}></button>`).join('')}
    </div>` : '';
  const controls = p.screenshots.length > 1 ? `
    <button class="carousel-control-prev" type="button" data-bs-target="#${carouselId}" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
    <button class="carousel-control-next" type="button" data-bs-target="#${carouselId}" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
  ` : '';

  return `
    <div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card">
      <div id="${carouselId}" class="carousel slide product-carousel" data-bs-ride="${p.screenshots.length > 1 ? 'carousel' : 'false'}">
        ${indicators}
        <div class="carousel-inner">${slides}</div>
        ${controls}
      </div>
      <div class="card-body p-4">
        <div class="d-flex align-items-start mb-3">
          <div class="icon-box icon-${p.cor} me-3">
            <i class="${p.icone} fs-3"></i>
          </div>
          <div>
            <h5 class="mb-1 fw-bold">${p.nome}</h5>
            <small class="text-muted fw-bold">${p.preco}</small>
          </div>
        </div>
        <p class="product-description mb-4">${p.descricao}</p>
        <div class="mb-3">
          ${p.caracteristicas.slice(0,4).map(c => `<span class="badge bg-light text-dark badge-feature me-1 mb-1"><i class="ri-check-line"></i> ${c}</span>`).join('')}
          ${p.caracteristicas.length > 4 ? `<span class="badge bg-light text-dark badge-feature">+${p.caracteristicas.length-4}</span>` : ''}
        </div>
      </div>
      <div class="card-footer border-0 pt-0 px-4 pb-4">
        <div class="d-grid gap-2 d-md-flex">
          ${p.demoUrl ? `<a href="${p.demoUrl}" target="_blank" class="btn btn-outline-${p.cor} flex-fill"><i class="ri-external-link-line"></i> Ver Demo</a>` : ''}
          <a href="#landingContact" class="btn btn-${p.cor} flex-fill"><i class="ri-mail-send-line"></i> Pedir Orçamento</a>
        </div>
      </div>
    </div>
  `;
}

function renderProdutos() {
  const grid = document.getElementById('produtosGrid');
  const inicio = (state.paginaAtual - 1) * state.itensPorPagina;
  const fim = inicio + state.itensPorPagina;
  const pagina = state.produtosFiltrados.slice(inicio, fim);

  if (pagina.length === 0) {
    grid.innerHTML = `<div class="col-12 empty-state"><i class="ri-inbox-line"></i><h4>Sem resultados</h4><p>Ajuste os filtros ou categoria.</p></div>`;
    document.getElementById('paginacaoContainer').style.display = 'none';
    return;
  }

  grid.innerHTML = pagina.map(renderProduto).join('');
  renderPaginacao();
}

function renderPaginacao() {
  const total = Math.ceil(state.produtosFiltrados.length / state.itensPorPagina);
  const ul = document.getElementById('paginacao');
  if (total <= 1) {
    document.getElementById('paginacaoContainer').style.display = 'none';
    return;
  }
  document.getElementById('paginacaoContainer').style.display = 'flex';

  let html = '';
  if (state.paginaAtual > 1) html += `<li class="page-item"><a class="page-link" href="#" data-pag="${state.paginaAtual-1}">Anterior</a></li>`;
  for (let i = 1; i <= total; i++) {
    if (i === 1 || i === total || Math.abs(i - state.paginaAtual) <= 2) {
      html += `<li class="page-item ${i===state.paginaAtual?'active':''}"><a class="page-link" href="#" data-pag="${i}">${i}</a></li>`;
    } else if (i === state.paginaAtual - 3 || i === state.paginaAtual + 3) {
      html += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
    }
  }
  if (state.paginaAtual < total) html += `<li class="page-item"><a class="page-link" href="#" data-pag="${state.paginaAtual+1}">Próxima</a></li>`;
  ul.innerHTML = html;
}

function abrirPreview(src, titulo) {
  document.getElementById('previewImage').src = src;
  document.getElementById('previewModalLabel').textContent = titulo;
  new bootstrap.Modal(document.getElementById('previewModal')).show();
}

// Eventos
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('#categoriasTab .nav-link').forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      document.querySelectorAll('#categoriasTab .nav-link').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      state.categoriaAtual = btn.dataset.categoria;
      aplicarFiltros();
    });
  });

  document.getElementById('searchInput').addEventListener('input', aplicarFiltros);
  document.getElementById('priceFilter').addEventListener('change', aplicarFiltros);
  document.getElementById('moreItemsBtn').addEventListener('click', () => {
    state.itensPorPagina += 8;
    renderProdutos();
  });
  document.getElementById('paginacao').addEventListener('click', e => {
    const link = e.target.closest('a');
    if (link && link.dataset.pag) {
      e.preventDefault();
      state.paginaAtual = parseInt(link.dataset.pag);
      renderProdutos();
      window.scrollTo({top: document.querySelector('.container').offsetTop - 100, behavior: 'smooth'});
    }
  });

  renderProdutos();
});
</script>
