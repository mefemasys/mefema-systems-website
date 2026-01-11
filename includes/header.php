<?php
// Configuração da URL base
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$baseUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . "/";
define('BASE_URL', $baseUrl);

// Função helper para assets
function asset($path) {
    return BASE_URL . ltrim($path, '/');
}
?>
<!doctype html>

<html
  class="layout-navbar-fixed layout-wide"
  data-assets-path="<?php echo asset('assets/'); ?>"
  data-bs-theme="light"
  data-skin="default"
  data-template="front-pages"
  dir="ltr"
  lang="pt-MZ">
<head>
  <meta charset="utf-8" />
  <meta
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    name="viewport" />
    
  <meta name="robots" content="index, follow" /> 

  <link rel="canonical" href="<?php echo BASE_URL . (basename($_SERVER['PHP_SELF']) == 'index.php' ? '' : basename($_SERVER['PHP_SELF'], '.php')); ?>" />
    
  <title>MEFEMA Systems - <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Soluções Tecnológicas Inteligentes'; ?></title>

  <meta
    content="MEFEMA Systems: Soluções Tecnológicas Inteligentes para Empresas Inteligentes. Desenvolvimento de Software, Infraestrutura TI, Consultoria Digital e Formação Corporativa em Moçambique."
    name="description" />

  <meta name="description"
    content="<?php
      echo isset($pageDescription)
        ? htmlspecialchars($pageDescription)
        : 'MEFEMA Systems: Soluções Tecnológicas Inteligentes. Desenvolvimento de Software, Infraestrutura TI, Consultoria Digital e Formação Corporativa em Moçambique.';
    ?>"
  />

  <meta property="og:title"
    content="MEFEMA Systems - <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Soluções Tecnológicas Inteligentes'; ?>" />

  <meta property="og:description"
    content="<?php
      echo isset($pageDescription)
        ? htmlspecialchars($pageDescription)
        : 'MEFEMA Systems: Soluções Tecnológicas Inteligentes. Serviços Digitais, TI, Consultoria e Software em Moçambique.';
    ?>" />

  <meta property="og:url" content="<?php echo BASE_URL . (basename($_SERVER['PHP_SELF']) == 'index.php' ? '' : basename($_SERVER['PHP_SELF'], '.php')); ?>" />
  <meta property="og:site_name" content="MEFEMA Systems" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php echo asset('assets/img/logos/logo.png'); ?>" />
  <meta property="og:locale" content="pt_MZ" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@SeuHandleTwitter" />
  <meta name="twitter:creator" content="@SeuHandleTwitter" />
  <meta name="twitter:title"
    content="MEFEMA Systems - <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Soluções Tecnológicas Inteligentes'; ?>" />
  <meta name="twitter:description"
    content="<?php
      echo isset($pageDescription)
        ? htmlspecialchars($pageDescription)
        : 'MEFEMA Systems: Soluções Tecnológicas Inteligentes e Desenvolvimento de Sistemas em Moçambique.';
    ?>" />
  <meta name="twitter:image" content="<?php echo asset('assets/img/logos/logo.png'); ?>" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KNBJHNCCN1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KNBJHNCCN1');
</script>
  
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "MEFEMA Systems",
    "url": "<?php echo rtrim(BASE_URL, '/'); ?>",
    "logo": "<?php echo asset('assets/img/logos/logo.png'); ?>",
    "description": "MEFEMA Systems oferece soluções tecnológicas inteligentes: software, redes, consultoria e infraestrutura TI em Moçambique.",
    "contactPoint": [
      {
        "@type": "ContactPoint",
        "telephone": "+258 87 999 0090",
        "contactType": "customer service",
        "areaServed": "MZ",
        "availableLanguage": ["pt", "en"]
      }
    ]
  }
  </script>

  <link href="<?php echo asset('assets/img/logos/logo.png'); ?>" rel="icon" type="image/x-icon" />

  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin href="https://fonts.gstatic.com" rel="preconnect" />
  
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet" />
  <link href="<?php echo asset('assets/vendor/fonts/iconify-icons.css'); ?>" rel="stylesheet" />
  <link href="<?php echo asset('assets/vendor/libs/node-waves/node-waves.css'); ?>" rel="stylesheet" />
  <link href="<?php echo asset('assets/vendor/libs/pickr/pickr-themes.css'); ?>" rel="stylesheet" />
  <link href="<?php echo asset('assets/vendor/css/core.css'); ?>" rel="stylesheet" />
  <link href="<?php echo asset('assets/css/style.css'); ?>" rel="stylesheet" />
  <link href="<?php echo asset('assets/vendor/css/main.css'); ?>" rel="stylesheet" />
  <link href="<?php echo asset('assets/vendor/libs/nouislider/nouislider.css'); ?>" rel="stylesheet" />
  <link href="<?php echo asset('assets/vendor/libs/swiper/swiper.css'); ?>" rel="stylesheet" />
  <link href="<?php echo asset('assets/vendor/css/landing.css'); ?>" rel="stylesheet" />
  
  <script src="<?php echo asset('assets/vendor/js/helpers.js'); ?>"></script>
  <script src="<?php echo asset('assets/js/config.js'); ?>"></script>

  <style>
    :root {
      --mefema-brown: #5D4037;
      --mefema-brown-dark: #3E2723;
      --mefema-brown-light: #8D6E63;
      --mefema-orange: #FF6F00;
      --mefema-orange-light: #FF9800;
      --mefema-orange-dark: #E65100;
    }

    /* Light mode */
    [data-bs-theme="light"] .navbar-mefema {
      background: #ffffff !important;
      border-bottom: none;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
    }

    [data-bs-theme="light"] .navbar-mefema.scrolled {
      background: #ffffff !important;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
    }

    /* Dark mode */
    [data-bs-theme="dark"] .navbar-mefema {
      background: linear-gradient(135deg, var(--mefema-brown) 0%, var(--mefema-brown-dark) 100%) !important;
      border-bottom: none;
      box-shadow: 0 2px 12px rgba(93, 64, 55, 0.3);
      transition: all 0.3s ease;
    }

    [data-bs-theme="dark"] .navbar-mefema.scrolled {
      background: linear-gradient(135deg, #5D4037 0%, #3E2723 100%) !important;
      box-shadow: 0 4px 20px rgba(93, 64, 55, 0.4);
    }

    /* Logo */
    [data-bs-theme="light"] .navbar-mefema .navbar-brand img {
      filter: none;
      transition: all 0.3s ease;
    }

    [data-bs-theme="dark"] .navbar-mefema .navbar-brand img {
      filter: brightness(0) invert(1);
      transition: all 0.3s ease;
    }

    .navbar-mefema .navbar-brand:hover img {
      transform: scale(1.05);
      filter: drop-shadow(0 0 8px var(--mefema-orange));
    }

    /* Nav links - Light mode */
    [data-bs-theme="light"] .navbar-mefema .nav-link {
      color: var(--mefema-brown-dark) !important;
      font-weight: 500;
      padding: 0.75rem 1.25rem !important;
      position: relative;
      transition: all 0.3s ease;
    }

    [data-bs-theme="light"] .navbar-mefema .nav-link:hover {
      color: var(--mefema-orange) !important;
    }

    [data-bs-theme="light"] .navbar-mefema .nav-link.active {
      color: var(--mefema-orange) !important;
      font-weight: 600;
    }

    /* Nav links - Dark mode */
    [data-bs-theme="dark"] .navbar-mefema .nav-link {
      color: rgba(255, 255, 255, 0.95) !important;
      font-weight: 500;
      padding: 0.75rem 1.25rem !important;
      position: relative;
      transition: all 0.3s ease;
    }

    [data-bs-theme="dark"] .navbar-mefema .nav-link:hover {
      color: var(--mefema-orange-light) !important;
    }

    [data-bs-theme="dark"] .navbar-mefema .nav-link.active {
      color: var(--mefema-orange) !important;
      font-weight: 600;
    }

    /* Underline effect */
    .navbar-mefema .nav-link::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--mefema-orange), var(--mefema-orange-light));
      transition: width 0.3s ease;
      border-radius: 3px 3px 0 0;
    }

    .navbar-mefema .nav-link:hover {
      transform: translateY(-2px);
    }

    .navbar-mefema .nav-link:hover::before,
    .navbar-mefema .nav-link.active::before {
      width: 100%;
    }

    /* Theme toggle button - Light mode */
    [data-bs-theme="light"] #themeToggleBtn {
      background: rgba(93, 64, 55, 0.08);
      border: 2px solid var(--mefema-orange);
      border-radius: 50%;
      width: 42px;
      height: 42px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    [data-bs-theme="light"] #themeToggleBtn:hover {
      background: var(--mefema-orange);
      transform: rotate(180deg) scale(1.1);
      box-shadow: 0 4px 12px rgba(255, 111, 0, 0.3);
    }

    [data-bs-theme="light"] #themeToggleBtn i {
      color: var(--mefema-brown-dark) !important;
      font-size: 20px;
    }

    [data-bs-theme="light"] #themeToggleBtn:hover i {
      color: white !important;
    }

    /* Theme toggle button - Dark mode */
    [data-bs-theme="dark"] #themeToggleBtn {
      background: rgba(255, 255, 255, 0.1);
      border: 2px solid var(--mefema-orange);
      border-radius: 50%;
      width: 42px;
      height: 42px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    [data-bs-theme="dark"] #themeToggleBtn:hover {
      background: var(--mefema-orange);
      transform: rotate(180deg) scale(1.1);
      box-shadow: 0 4px 12px rgba(255, 111, 0, 0.4);
    }

    [data-bs-theme="dark"] #themeToggleBtn i {
      color: white !important;
      font-size: 20px;
    }

    /* Navbar toggler - Light mode */
    [data-bs-theme="light"] .navbar-toggler {
      border-color: var(--mefema-orange) !important;
      background: rgba(255, 111, 0, 0.08);
    }

    [data-bs-theme="light"] .navbar-toggler:focus {
      box-shadow: 0 0 0 0.25rem rgba(255, 111, 0, 0.15);
    }

    [data-bs-theme="light"] .navbar-toggler i {
      color: var(--mefema-brown-dark) !important;
    }

    /* Navbar toggler - Dark mode */
    [data-bs-theme="dark"] .navbar-toggler {
      border-color: var(--mefema-orange) !important;
      background: rgba(255, 111, 0, 0.15);
    }

    [data-bs-theme="dark"] .navbar-toggler:focus {
      box-shadow: 0 0 0 0.25rem rgba(255, 111, 0, 0.25);
    }

    [data-bs-theme="dark"] .navbar-toggler i {
      color: var(--mefema-orange) !important;
    }

    /* Mobile menu - Light mode */
    @media (max-width: 991px) {
      [data-bs-theme="light"] .landing-nav-menu {
        background: #ffffff !important;
        border-radius: 0 0 12px 12px;
        padding: 1rem;
        margin-top: 1rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      }

      [data-bs-theme="dark"] .landing-nav-menu {
        background: linear-gradient(135deg, var(--mefema-brown-dark) 0%, var(--mefema-brown) 100%) !important;
        border-radius: 0 0 12px 12px;
        padding: 1rem;
        margin-top: 1rem;
        box-shadow: 0 8px 24px rgba(93, 64, 55, 0.3);
      }

      .navbar-mefema .nav-link {
        padding: 0.875rem 1rem !important;
        border-radius: 8px;
        margin: 0.25rem 0;
      }

      [data-bs-theme="light"] .navbar-mefema .nav-link:hover {
        background: rgba(255, 111, 0, 0.08);
        transform: translateX(8px);
      }

      [data-bs-theme="dark"] .navbar-mefema .nav-link:hover {
        background: rgba(255, 111, 0, 0.15);
        transform: translateX(8px);
      }

      .navbar-mefema .nav-link::before {
        left: 0;
        transform: translateX(0);
        width: 4px;
        height: 0;
        bottom: 50%;
        transform: translateY(50%);
      }

      .navbar-mefema .nav-link:hover::before,
      .navbar-mefema .nav-link.active::before {
        width: 4px;
        height: 70%;
      }
    }

    /* Overlay - Light mode */
    [data-bs-theme="light"] .landing-menu-overlay {
      background: rgba(0, 0, 0, 0.5) !important;
    }

    [data-bs-theme="dark"] .landing-menu-overlay {
      background: rgba(93, 64, 55, 0.85) !important;
    }

    /* Animação de entrada */
    @keyframes slideDown {
      from {
        transform: translateY(-100%);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .navbar-mefema {
      animation: slideDown 0.5s ease-out;
    }
  </style>
</head>

<body>
<script src="<?php echo asset('assets/vendor/js/dropdown-hover.js'); ?>"></script>
<script src="<?php echo asset('assets/vendor/js/mega-dropdown.js'); ?>"></script>

<nav class="layout-navbar navbar-mefema shadow-none py-0">
  <div class="container">
    <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
      <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8">
        <button
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          class="navbar-toggler border-0 px-0 me-4"
          data-bs-target="#navbarSupportedContent"
          data-bs-toggle="collapse"
          type="button">
          <i class="icon-base ri ri-menu-fill icon-lg align-middle fw-medium"></i>
        </button>
        <a class="app-brand-link" href="<?php echo BASE_URL; ?>">
          <span class="app-brand-logo demo">
            <img
              alt="Mefema Systems Logo"
              class="navbar-logo-svg"
              height="50"
              src="<?php echo asset('assets/img/logos/logo.svg'); ?>"
              width="auto"
            >
          </span>
        </a>
      </div>
      <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
        <button
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          class="navbar-toggler border-0 position-absolute end-0 top-0 p-2"
          data-bs-target="#navbarSupportedContent"
          data-bs-toggle="collapse"
          type="button">
          <i class="icon-base ri ri-close-fill"></i>
        </button>
        <ul class="navbar-nav mx-auto">
          <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
          <li class="nav-item">
            <a 
              aria-current="page" 
              class="nav-link fw-medium <?php echo $currentPage == 'index.php' || $currentPage == '' ? 'active' : ''; ?>" 
              href="<?php echo BASE_URL; ?>">Início</a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link fw-medium <?php echo $currentPage == 'sobre.php' ? 'active' : ''; ?>" 
              href="<?php echo BASE_URL; ?>sobre">Quem somos</a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link fw-medium <?php echo $currentPage == 'servicos.php' ? 'active' : ''; ?>" 
              href="<?php echo BASE_URL; ?>servicos">Serviços</a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link fw-medium <?php echo $currentPage == 'produtos.php' ? 'active' : ''; ?>" 
              href="<?php echo BASE_URL; ?>produtos">Produtos</a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link fw-medium <?php echo $currentPage == 'portfolio.php' ? 'active' : ''; ?>" 
              href="<?php echo BASE_URL; ?>portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link fw-medium <?php echo $currentPage == 'contacto.php' ? 'active' : ''; ?>" 
              href="<?php echo BASE_URL; ?>contacto">Contacto</a>
          </li>
        </ul>
      </div>
      <div class="landing-menu-overlay d-lg-none"></div>
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <li class="nav-item me-2 me-xl-0">
          <button
            aria-label="Toggle theme"
            class="nav-link hide-arrow"
            id="themeToggleBtn"
            type="button">
            <i class="icon-base ri ri-computer-line" id="themeIcon"></i>
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  // Efeito de scroll no navbar
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar-mefema');
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  // Toggle do tema
  document.getElementById('themeToggleBtn').addEventListener('click', function() {
    // Adicione aqui a lógica do tema se necessário
    console.log('Theme toggle clicked');
  });
</script>

<div class="scrollspy-example" data-bs-spy="scroll">
