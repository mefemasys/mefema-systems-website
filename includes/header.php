<?php
// Configuração da URL base
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$baseUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . "/";
define('BASE_URL', $baseUrl);

// Função helper para assets
function asset($path) {
    return BASE_URL . ltrim($path, '/');
}

// Configuração SEO por página
$seoConfig = [
    'index.php' => [
        'title' => 'Empresa de Desenvolvimento Software e Transformação Digital Moçambique',
        'description' => 'MEFEMA Systems: empresa de soluções tecnológicas em Moçambique. Desenvolvimento de software personalizado, sistemas ERP para PMEs, integração M-Pesa, consultoria digital. Maputo, Nampula, Beira, Pemba.',
        'keywords' => 'empresa de soluções tecnológicas Moçambique, empresa de desenvolvimento software Moçambique, empresa de transformação digital Moçambique, empresa de consultoria TI Moçambique, empresa de infraestrutura TI Moçambique, serviços TI Moçambique'
    ],
    'sobre.php' => [
        'title' => 'Empresa de Tecnologia Moçambique - Quem Somos',
        'description' => 'Conheça a MEFEMA Systems: empresa de tecnologia em Moçambique presente em Maputo, Nampula, Beira, Sofala e Zambézia. Especializada em desenvolvimento software e transformação digital empresarial.',
        'keywords' => 'empresa de tecnologia Moçambique, empresa TI Moçambique, empresa desenvolvimento software, empresa consultoria digital Moçambique, TI Maputo Nampula Beira'
    ],
    'servicos.php' => [
        'title' => 'Empresa de Serviços TI - Consultoria Digital e Infraestrutura Moçambique',
        'description' => 'Empresa de desenvolvimento de software personalizado, sistemas ERP, plataformas e-commerce M-Pesa, consultoria transformação digital, formação cibersegurança. Serviços em todo Moçambique.',
        'keywords' => 'empresa de desenvolvimento software personalizado, empresa de sistemas ERP Moçambique, empresa de integração M-Pesa, empresa de consultoria transformação digital, empresa de formação cibersegurança, empresa de suporte técnico Moçambique'
    ],
    'produtos.php' => [
        'title' => 'Empresa de Produtos TI - Websites Prontos e Sistemas Gestão',
        'description' => 'Empresa de websites prontos desde 25000 MT, sistemas gestão empresarial certificação AT, apps móveis, soluções IA chatbots WhatsApp, hospedagem SSL. Produtos para todo Moçambique.',
        'keywords' => 'empresa de websites prontos Moçambique, empresa de sistemas gestão empresarial, empresa de apps móveis Moçambique, empresa de soluções IA chatbots, empresa de hospedagem SSL domínio co.mz'
    ],
    'portfolio.php' => [
        'title' => 'Portfolio - Empresa de Projectos TI e Software Moçambique',
        'description' => 'Portfolio de projectos: empresa de desenvolvimento software, sistemas gestão empresarial, plataformas e-commerce implementados pela MEFEMA Systems em Maputo, Nampula, Beira e todo Moçambique.',
        'keywords' => 'empresa de projectos TI Moçambique, empresa desenvolvimento software Maputo Nampula, empresa sistemas gestão, portfolio empresa tecnologia Moçambique'
    ],
    'contacto.php' => [
        'title' => 'Contacto - Empresa de Consultoria TI e Software Moçambique',
        'description' => 'Contacte a MEFEMA Systems: empresa de soluções tecnológicas, desenvolvimento software, consultoria digital e infraestrutura TI em Moçambique. Maputo, Nampula, Beira. Tel: +258 87 999 0090',
        'keywords' => 'contacto empresa TI Moçambique, empresa consultoria TI, orçamento desenvolvimento software, empresa serviços TI Moçambique'
    ]
];

// Obter página actual
$currentPageFile = basename($_SERVER['PHP_SELF']);
$seo = $seoConfig[$currentPageFile] ?? $seoConfig['index.php'];

// Permitir override por variáveis de página
$pageTitle = $pageTitle ?? $seo['title'];
$pageDescription = $pageDescription ?? $seo['description'];
$pageKeywords = $pageKeywords ?? $seo['keywords'];
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
  <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>" />
  <meta name="author" content="MEFEMA Systems" />
  <meta name="geo.region" content="MZ" />
  <meta name="geo.placename" content="Moçambique" />
  <meta name="coverage" content="Moçambique" />

  <link rel="canonical" href="<?php echo BASE_URL . (basename($_SERVER['PHP_SELF']) == 'index.php' ? '' : basename($_SERVER['PHP_SELF'], '.php')); ?>" />
    
  <title><?php echo htmlspecialchars($pageTitle); ?> | MEFEMA Systems</title>

  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>" />

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?> | MEFEMA Systems" />
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>" />
  <meta property="og:url" content="<?php echo BASE_URL . (basename($_SERVER['PHP_SELF']) == 'index.php' ? '' : basename($_SERVER['PHP_SELF'], '.php')); ?>" />
  <meta property="og:site_name" content="MEFEMA Systems - Soluções Tecnológicas Moçambique" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php echo asset('assets/img/logos/logo.png'); ?>" />
  <meta property="og:image:alt" content="MEFEMA Systems - Desenvolvimento Software e Transformação Digital Moçambique" />
  <meta property="og:locale" content="pt_MZ" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@MEFEMASystems" />
  <meta name="twitter:creator" content="@MEFEMASystems" />
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?> | MEFEMA Systems" />
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>" />
  <meta name="twitter:image" content="<?php echo asset('assets/img/logos/logo.png'); ?>" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KNBJHNCCN1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-KNBJHNCCN1');
</script>
  
  <!-- Schema.org Markup -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "MEFEMA Systems",
    "alternateName": "MEFEMA - Empresa de Soluções Tecnológicas Moçambique",
    "url": "<?php echo rtrim(BASE_URL, '/'); ?>",
    "logo": "<?php echo asset('assets/img/logos/logo.png'); ?>",
    "description": "Empresa de tecnologia em Moçambique especializada em desenvolvimento de software personalizado, sistemas ERP para PMEs, transformação digital, consultoria TI, infraestrutura tecnológica e formação corporativa. Serviços em Maputo, Nampula, Beira, Sofala, Zambézia e todo território nacional.",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Moçambique",
      "addressCountry": "MZ"
    },
    "areaServed": [
      {
        "@type": "Country",
        "name": "Moçambique"
      },
      {
        "@type": "City",
        "name": "Maputo"
      },
      {
        "@type": "City",
        "name": "Nampula"
      },
      {
        "@type": "City",
        "name": "Beira"
      },
      {
        "@type": "City",
        "name": "Pemba"
      },
      {
        "@type": "State",
        "name": "Sofala"
      },
      {
        "@type": "State",
        "name": "Zambézia"
      }
    ],
    "contactPoint": [
      {
        "@type": "ContactPoint",
        "telephone": "+258 87 999 0090",
        "contactType": "customer service",
        "areaServed": "MZ",
        "availableLanguage": ["pt", "en"]
      }
    ],
    "sameAs": [
      "https://www.facebook.com/MEFEMASystems",
      "https://www.linkedin.com/company/mefema-systems"
    ],
    "priceRange": "25000 MT - 500000 MT",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Serviços e Produtos TI MEFEMA Systems",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Empresa de Desenvolvimento de Software Personalizado",
            "description": "Empresa de aplicações web e móveis personalizadas, integração APIs M-Pesa, e-Mola e sistemas bancários em todo Moçambique"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Empresa de Sistemas ERP Simplificados PMEs",
            "description": "Empresa de sistemas gestão empresarial com certificação AT, módulos facturação, stock, CRM, RH e integração M-Pesa"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Empresa de Consultoria Transformação Digital",
            "description": "Empresa de auditoria sistemas TI, planeamento estratégico e modernização tecnológica empresas em Moçambique"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Empresa de Infraestrutura TI e Cloud",
            "description": "Empresa de implementação serviços nuvem IaaS, gestão servidores, backup dados e monitorização em Moçambique"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Empresa de Formação Corporativa TI",
            "description": "Empresa de workshops cibersegurança, literacia digital e capacitação técnica instituições públicas Moçambique"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Product",
            "name": "Empresa de Websites Prontos",
            "description": "Empresa de pacotes websites prontos desde 25000 MT com domínio .co.mz, hospedagem e SSL"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Product",
            "name": "Empresa de Apps Móveis",
            "description": "Empresa de aplicações móveis com notificações push, geolocalização e integração M-Pesa"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Product",
            "name": "Empresa de Soluções IA e Chatbots",
            "description": "Empresa de chatbots WhatsApp, visão computacional e automação inteligente para empresas"
          }
        }
      ]
    }
  }
  </script>

  <!-- Local Business Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "MEFEMA Systems - Empresa de Tecnologia Moçambique",
    "image": "<?php echo asset('assets/img/logos/logo.png'); ?>",
    "telephone": "+258 87 999 0090",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "MZ"
    },
    "url": "<?php echo rtrim(BASE_URL, '/'); ?>",
    "areaServed": {
      "@type": "Country",
      "name": "Moçambique"
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "08:00",
      "closes": "17:00"
    },
    "priceRange": "25000 MT - 500000 MT",
    "slogan": "Empresa de Soluções Tecnológicas Inteligentes para Empresas Inteligentes"
  }
  </script>

  <link href="<?php echo asset('assets/img/logos/logo.png'); ?>" rel="icon" type="image/x-icon" />
  <link href="<?php echo asset('assets/img/logos/logo.png'); ?>" rel="apple-touch-icon" />

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
        <a class="app-brand-link" href="<?php echo BASE_URL; ?>" title="MEFEMA Systems - Empresa de Soluções Tecnológicas Moçambique">
              <span class="app-brand-logo demo">
                <img
                  alt="MEFEMA Systems - Empresa de Desenvolvimento Software e Transformação Digital Moçambique"
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
              href="<?php echo BASE_URL; ?>"
              title="Início - Empresa de Soluções Tecnológicas Moçambique">Início</a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link fw-medium <?php echo $currentPage == 'sobre.php' ? 'active' : ''; ?>" 
              href="<?php echo BASE_URL; ?>sobre"
              title="Quem Somos - Empresa de Tecnologia Moçambique">Quem somos</a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link fw-medium <?php echo $currentPage == 'servicos.php' ? 'active' : ''; ?>" 
              href="<?php echo BASE_URL; ?>servicos"
              title="Empresa de Serviços TI - Desenvolvimento Software e Consultoria Digital">Serviços</a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link fw-medium <?php echo $currentPage == 'produtos.php' ? 'active' : ''; ?>" 
              href="<?php echo BASE_URL; ?>produtos"
              title="Empresa de Produtos TI - Websites Prontos e Sistemas Gestão">Produtos</a>
          </li>
          <li class="nav-item">
            <a 
              class="nav-link fw-medium <?php echo $currentPage == 'portfolio.php' ? 'active' : ''; ?>" 
              href="<?php echo BASE_URL; ?>portfolio"
              title="Portfolio - Empresa de Projectos TI Moçambique">Portfolio</a>
          </li>

          <li class="nav-item">
            <a 
              class="nav-link fw-medium <?php echo $currentPage == 'contacto.php' ? 'active' : ''; ?>" 
              href="<?php echo BASE_URL; ?>contacto"
              title="Contacto - Empresa de Consultoria TI Moçambique">Contacto</a>
          </li>
        </ul>
      </div>
      <div class="landing-menu-overlay d-lg-none"></div>
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <li class="nav-item me-2 me-xl-0">
          <button
            aria-label="Alternar tema claro/escuro"
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
