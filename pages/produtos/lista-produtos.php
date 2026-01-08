termine esse codigo,
 
 
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos - MEFEMA Systems</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: #d97638;
      --primary-dark: #c66b3d;
      --primary-light: #fef5ef;
      --text-primary: #2c1810;
      --text-secondary: #74523d;
      --bg-light: #fdfbf9;
      --bg-card: #ffffff;
      --border-color: #e8ddd4;
      --shadow-sm: 0 2px 8px rgba(217, 118, 56, 0.08);
      --shadow-md: 0 4px 16px rgba(217, 118, 56, 0.12);
      --shadow-lg: 0 8px 32px rgba(217, 118, 56, 0.16);
      --radius: 12px;
      --radius-lg: 16px;
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
     
      /* Cores por categoria */
      --cor-orange: #ff6b35;
      --cor-blue: #004e89;
      --cor-brown: #8b4513;
      --cor-green: #2d6a4f;
    }
    [data-bs-theme="dark"] {
      --primary-color: #ff8c4a;
      --primary-dark: #e07a3d;
      --primary-light: #2a1f1a;
      --text-primary: #f5ebe3;
      --text-secondary: #c4b5aa;
      --bg-light: #1a1410;
      --bg-card: #241a15;
      --border-color: rgba(255, 140, 74, 0.15);
      --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.3);
      --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.4);
      --shadow-lg: 0 8px 32px rgba(0, 0, 0, 0.5);
    }
    * {
      border-radius: 0 !important;
    }
    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      background: var(--bg-light);
      color: var(--text-primary);
    }
    /* Hero Section */
    .hero-section {
      background: linear-gradient(135deg, var(--bg-light) 0%, var(--primary-light) 100%);
      padding: 5rem 0 3rem;
      position: relative;
      overflow: hidden;
    }
    .hero-section::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(217, 118, 56, 0.1) 0%, transparent 70%);
      border-radius: 50%;
    }
    .hero-title {
      font-size: 3rem;
      font-weight: 800;
      color: var(--text-primary);
      margin-bottom: 1rem;
    }
    .text-gradient {
      background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    .hero-subtitle {
      font-size: 1.2rem;
      color: var(--text-secondary);
      max-width: 600px;
      margin: 0 auto;
    }
    /* Filtros e Busca */
    .filters-section {
      background: var(--bg-card);
      padding: 2rem;
      border-radius: var(--radius-lg);
      border: 2px solid var(--border-color);
      box-shadow: var(--shadow-sm);
      margin-bottom: 2rem;
    }
    .search-input,
    .filter-select {
      border: 2px solid var(--border-color);
      padding: 0.875rem 1.25rem;
      font-size: 0.95rem;
      background: var(--bg-light);
      color: var(--text-primary);
      transition: var(--transition);
    }
    .search-input:focus,
    .filter-select:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(217, 118, 56, 0.1);
      background: var(--bg-card);
    }
    .btn-more {
      padding: 0.875rem 1.5rem;
      border: 2px solid var(--border-color);
      background: var(--bg-light);
      color: var(--text-primary);
      font-weight: 600;
      transition: var(--transition);
    }
    .btn-more:hover {
      background: var(--primary-color);
      border-color: var(--primary-color);
      color: white;
      transform: translateY(-2px);
    }
    /* Tabs de Categorias */
    .category-tabs {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
      margin-bottom: 3rem;
      padding: 0;
      list-style: none;
    }
    .category-tab {
      padding: 0.875rem 1.75rem;
      background: var(--bg-card);
      border: 2px solid var(--border-color);
      color: var(--text-secondary);
      font-weight: 600;
      cursor: pointer;
      transition: var(--transition);
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .category-tab:hover {
      background: var(--primary-light);
      border-color: var(--primary-color);
      color: var(--primary-color);
      transform: translateY(-2px);
    }
    .category-tab.active {
      background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
      border-color: var(--primary-color);
      color: white;
      box-shadow: var(--shadow-md);
    }
    /* Grid de Produtos */
    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 2rem;
      margin-bottom: 3rem;
    }
    @media (min-width: 768px) {
      .products-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (min-width: 1200px) {
      .products-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }
    /* Product Card */
    .product-card {
      background: var(--bg-card);
      border: 2px solid var(--border-color);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: var(--transition);
      box-shadow: var(--shadow-sm);
      height: 100%;
    }
    .product-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--shadow-lg);
      border-color: var(--primary-color);
    }
    /* Carousel */
    .product-carousel {
      height: 240px;
      background: #000;
      position: relative;
    }
    .product-carousel img {
      width: 100%;
      height: 240px;
      object-fit: cover;
      cursor: pointer;
      transition: var(--transition);
    }
    .product-carousel img:hover {
      opacity: 0.9;
    }
    .carousel-indicators {
      bottom: 10px;
      margin: 0;
    }
    .carousel-indicators button {
      width: 8px;
      height: 8px;
      border-radius: 50% !important;
      margin: 0 4px;
      background-color: rgba(255, 255, 255, 0.5);
    }
    .carousel-indicators button.active {
      background-color: var(--primary-color);
      width: 24px;
      border-radius: 4px !important;
    }
    .carousel-control-prev,
    .carousel-control-next {
      width: 40px;
      height: 40px;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.6);
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .product-card:hover .carousel-control-prev,
    .product-card:hover .carousel-control-next {
      opacity: 1;
    }
    /* Card Body */
    .card-body {
      padding: 1.5rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }
    .icon-box {
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid;
      flex-shrink: 0;
    }
    .icon-orange { color: var(--cor-orange); border-color: var(--cor-orange); }
    .icon-blue { color: var(--cor-blue); border-color: var(--cor-blue); }
    .icon-brown { color: var(--cor-brown); border-color: var(--cor-brown); }
    .icon-green { color: var(--cor-green); border-color: var(--cor-green); }
    .product-title {
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--text-primary);
      margin-bottom: 0.25rem;
      line-height: 1.3;
    }
    .product-price {
      color: var(--primary-color);
      font-weight: 600;
      font-size: 0.9rem;
    }
    .product-description {
      color: var(--text-secondary);
      font-size: 0.9rem;
      line-height: 1.6;
      margin: 1rem 0;
      flex-grow: 1;
    }
    /* Features Badges */
    .features-container {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-bottom: 1rem;
    }
    .feature-badge {
      padding: 0.4rem 0.75rem;
      background: var(--bg-light);
      border: 1px solid var(--border-color);
      color: var(--text-secondary);
      font-size: 0.75rem;
      font-weight: 500;
      display: inline-flex;
      align-items: center;
      gap: 0.25rem;
    }
    .feature-badge i {
      color: var(--primary-color);
    }
    /* Card Footer */
    .card-footer {
      padding: 1rem 1.5rem;
      border-top: 2px solid var(--border-color);
      background: transparent;
    }
    .btn-demo,
    .btn-quote {
      padding: 0.75rem 1.25rem;
      font-weight: 600;
      font-size: 0.85rem;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      transition: var(--transition);
      text-decoration: none;
    }
    .btn-outline-orange { border: 2px solid var(--cor-orange); color: var(--cor-orange); }
    .btn-outline-orange:hover { background: var(--cor-orange); color: white; }
    .btn-orange { background: var(--cor-orange); border-color: var(--cor-orange); color: white; }
    .btn-orange:hover { background: #e55a2b; transform: translateY(-2px); }
    .btn-outline-blue { border: 2px solid var(--cor-blue); color: var(--cor-blue); }
    .btn-outline-blue:hover { background: var(--cor-blue); color: white; }
    .btn-blue { background: var(--cor-blue); border-color: var(--cor-blue); color: white; }
    .btn-blue:hover { background: #003d6e; transform: translateY(-2px); }
    .btn-outline-brown { border: 2px solid var(--cor-brown); color: var(--cor-brown); }
    .btn-outline-brown:hover { background: var(--cor-brown); color: white; }
    .btn-brown { background: var(--cor-brown); border-color: var(--cor-brown); color: white; }
    .btn-brown:hover { background: #723910; transform: translateY(-2px); }
    .btn-outline-green { border: 2px solid var(--cor-green); color: var(--cor-green); }
    .btn-outline-green:hover { background: var(--cor-green); color: white; }
    .btn-green { background: var(--cor-green); border-color: var(--cor-green); color: white; }
    .btn-green:hover { background: #245a42; transform: translateY(-2px); }
    /* Paginação */
    .pagination-wrapper {
      display: flex;
      justify-content: center;
      margin-top: 3rem;
    }
    .pagination {
      display: flex;
      gap: 0.5rem;
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .page-link {
      padding: 0.75rem 1.25rem;
      border: 2px solid var(--border-color);
      background: var(--bg-card);
      color: var(--text-primary);
      font-weight: 600;
      transition: var(--transition);
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .page-link:hover {
      background: var(--primary-color);
      border-color: var(--primary-color);
      color: white;
      transform: translateY(-2px);
    }
    .page-item.active .page-link {
      background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
      border-color: var(--primary-color);
      color: white;
    }
    .page-item.disabled .page-link {
      opacity: 0.5;
      cursor: not-allowed;
      pointer-events: none;
    }
    /* Empty State */
    .empty-state {
      text-align: center;
      padding: 4rem 2rem;
      grid-column: 1 / -1;
    }
    .empty-state i {
      font-size: 4rem;
      color: var(--text-secondary);
      opacity: 0.3;
      margin-bottom: 1rem;
    }
    .empty-state h4 {
      color: var(--text-primary);
      margin-bottom: 0.5rem;
    }
    .empty-state p {
      color: var(--text-secondary);
    }
    /* Skeleton Loading */
    .skeleton {
      background: linear-gradient(90deg, var(--bg-light) 25%, var(--border-color) 50%, var(--bg-light) 75%);
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
      height: 240px;
    }
    /* Modal Preview */
    .modal-preview .modal-dialog {
      max-width: 90vw;
    }
    .modal-preview img {
      max-width: 100%;
      max-height: 80vh;
      object-fit: contain;
    }
    .modal-content {
      background: var(--bg-card);
      border: 2px solid var(--border-color);
    }
    .modal-header {
      border-bottom: 2px solid var(--border-color);
    }
    .modal-title {
      color: var(--text-primary);
      font-weight: 700;
    }
    /* Responsivo */
    @media (max-width: 768px) {
      .hero-title {
        font-size: 2rem;
      }
      .category-tabs {
        flex-direction: column;
      }
      .category-tab {
        width: 100%;
        justify-content: center;
      }
      .filters-section {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>
<!-- Hero Section -->
<section class="hero-section">
  <div class="container">
    <div class="text-center">
      <h1 class="hero-title">
        Nossos <span class="text-gradient">Produtos</span>
      </h1>
      <p class="hero-subtitle">
        Soluções digitais completas para transformar o seu negócio
      </p>
    </div>
  </div>
</section>
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
</body>
</html>
 
sem a parte de HTML
