<?php $pageTitle = "Produtos - MEFEMA Systems - Soluções Tecnológicas Inteligentes"; ?>

<?php include 'includes/header.php'; ?>
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
<?php include 'pages/produtos/hero.php'; ?>
<?php include 'pages/produtos/lista-produtos.php'; ?>
<?php include 'pages/produtos/cta.php'; ?>
<?php include 'includes/footer.php'; ?>
