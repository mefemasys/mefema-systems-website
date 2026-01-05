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

</head>

<body>
<script src="<?php echo asset('assets/vendor/js/dropdown-hover.js'); ?>"></script>
<script src="<?php echo asset('assets/vendor/js/mega-dropdown.js'); ?>"></script>

<nav class="layout-navbar shadow-none py-0">
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
          <i class="icon-base ri ri-menu-fill icon-lg align-middle text-heading fw-medium"></i>
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
          class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 p-2"
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
            <i class="icon-base ri ri-computer-line icon-24px" id="themeIcon"></i>
          </button>
        </li>
      </ul>
      </div>
  </div>
</nav>

<div class="scrollspy-example" data-bs-spy="scroll">
