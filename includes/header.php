<?php
// 1. Configuração de URL e Caminhos
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$baseUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . "/";
if (!defined('BASE_URL')) define('BASE_URL', $baseUrl);

function asset($path) {
    return BASE_URL . ltrim($path, '/');
}

// 2. Inteligência SEO Dinâmica
$currentPageFile = basename($_SERVER['PHP_SELF']);

$seoConfig = [
    'index.php'    => [
        'title'       => 'Desenvolvimento de Software e Consultoria Digital',
        'description' => 'A MEFEMA Systems é especialista em transformação digital em Moçambique: ERP, Integração M-Pesa, Cloud e Software por medida.',
        'keywords'    => 'software moçambique, erp maputo, integração m-pesa, ti moçambique, mefema systems'
    ],
    'sobre.php'    => [
        'title'       => 'Quem Somos | Inovação e Tecnologia em Moçambique',
        'description' => 'Conheça a MEFEMA Systems. Focamos em modernizar empresas moçambicanas com soluções tecnológicas de alta performance.',
        'keywords'    => 'equipa mefema, consultoria ti moçambique, empresa tecnologia'
    ],
    'servicos.php' => [
        'title'       => 'Serviços de TI e Transformação Digital',
        'description' => 'Desenvolvimento de software, consultoria em cibersegurança, infraestrutura cloud e suporte técnico especializado.',
        'keywords'    => 'serviços ti, redes LAN WAN , desenvolvimento web mz, cibersegurança moçambique'
    ],
    'produtos.php' => [
        'title'       => 'Sistemas ERP, Chatbots IA e Websites',
        'description' => 'Soluções prontas para o seu negócio: ERP com certificação AT, Chatbots WhatsApp e Websites profissionais.',
        'keywords'    => 'erp moçambique, faturação at, chatbot whatsapp, sites baratos'
    ],
    'portfolio.php' => [
        'title'       => 'Portfólio de Projectos e Casos de Sucesso',
        'description' => 'Explore os projectos de transformação digital implementados pela MEFEMA Systems em todo o território nacional.',
        'keywords'    => 'projectos ti, software moçambique, cases tecnologia'
    ],
    'contacto.php' => [
        'title'       => 'Contacte a MEFEMA | Suporte e Orçamentos',
        'description' => 'Entre em contacto com a nossa equipa em Maputo. Estamos prontos para digitalizar o seu negócio.',
        'keywords'    => 'contacto mefema, suporte técnico, orçamento ti'
    ]
];

// Define os dados SEO (Prioridade: Variável na página > Configuração acima > Index)
$seo = $seoConfig[$currentPageFile] ?? $seoConfig['index.php'];
$finalTitle = (isset($pageTitle) && !empty($pageTitle)) ? $pageTitle : ($seo['title'] . " | MEFEMA Systems");
$finalDesc  = $pageDescription ?? $seo['description'];
$finalKeys  = $pageKeywords ?? $seo['keywords'];
$canonical  = BASE_URL . ($currentPageFile == 'index.php' ? '' : str_replace('.php', '', $currentPageFile));
?>
<!doctype html>
<html class="layout-navbar-fixed layout-wide" data-assets-path="<?php echo asset('assets/'); ?>" lang="pt-MZ">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    
    <title><?php echo htmlspecialchars($finalTitle); ?></title>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "MEFEMA Systems",
  "alternateName": ["MEFEMA Systems", "MEFEMA","MEFEMA Systems Moçambique"],
  "url": "https://mefemasys.co.mz/"
}
</script>
    
    <meta name="description" content="<?php echo htmlspecialchars($finalDesc); ?>" />
    <meta name="keywords" content="<?php echo htmlspecialchars($finalKeys); ?>" />
    <meta name="author" content="MEFEMA Systems" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?php echo $canonical; ?>" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo htmlspecialchars($finalTitle); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($finalDesc); ?>" />
    <meta property="og:url" content="<?php echo $canonical; ?>" />
    <meta property="og:site_name" content="MEFEMA Systems" />
    <meta property="og:image" content="<?php echo asset('assets/img/logos/og-image.png'); ?>" />
    <meta property="og:locale" content="pt_MZ" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($finalTitle); ?>" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($finalDesc); ?>" />
    <meta name="twitter:image" content="<?php echo asset('assets/img/logos/og-image.png'); ?>" />

    <link rel="icon" type="image/x-icon" href="<?php echo asset('assets/img/logos/logo.png'); ?>" />
    <link rel="apple-touch-icon" href="<?php echo asset('assets/img/logos/logo.png'); ?>" />

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "MEFEMA Systems",
      "image": "<?php echo asset('assets/img/logos/logo.png'); ?>",
      "url": "<?php echo BASE_URL; ?>",
      "telephone": "+258879990090",
      "priceRange": "25000MT-500000MT",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Maputo",
        "addressCountry": "MZ"
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        "opens": "08:00",
        "closes": "17:00"
      }
    }
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KNBJHNCCN1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-KNBJHNCCN1');
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    
    <link rel="stylesheet" href="<?php echo asset('assets/vendor/fonts/iconify-icons.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('assets/vendor/css/core.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('assets/css/style.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('assets/vendor/css/landing.css'); ?>" />
    
    <script src="<?php echo asset('assets/vendor/js/helpers.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/config.js'); ?>"></script>
</head>

<body>
<nav class="layout-navbar shadow-none py-0">
  <div class="container">
    <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
      <div class="navbar-brand app-brand demo d-flex py-0 me-4">
        <button class="navbar-toggler border-0 px-0 me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <i class="icon-base ri ri-menu-fill icon-lg align-middle text-heading"></i>
        </button>
        <a class="app-brand-link" href="<?php echo BASE_URL; ?>">
          <img src="<?php echo asset('assets/img/logos/logo.svg'); ?>" alt="MEFEMA Systems" height="45">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <?php 
            $menu = [
                'index.php' => 'Início',
                'sobre.php' => 'Quem somos',
                'servicos.php' => 'Serviços',
                'produtos.php' => 'Produtos',
                'portfolio.php' => 'Portfolio',
                'contacto.php' => 'Contacto'
            ];
            foreach ($menu as $file => $label): 
              $isActive = ($currentPageFile == $file) ? 'active' : '';
              $url = ($file == 'index.php') ? BASE_URL : BASE_URL . str_replace('.php', '', $file);
          ?>
          <li class="nav-item">
            <a class="nav-link fw-medium <?php echo $isActive; ?>" href="<?php echo $url; ?>"><?php echo $label; ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="ms-auto d-flex align-items-center">
        <button class="nav-link me-3 border-0 bg-transparent" id="themeToggleBtn">
          <i class="icon-base ri ri-computer-line" id="themeIcon"></i>
        </button>
        <!-- <a href="<?php echo BASE_URL; ?>contacto" class="btn btn-primary d-none d-md-block">Pedir Orçamento</a> -->
      </div>
    </div>
  </div>
</nav>
    <div class="main-content">
