<?php
// 1. Configuração de URL e Caminhos
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$baseUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . "/";
if (!defined('BASE_URL')) define('BASE_URL', $baseUrl);

function asset($path) {
    return BASE_URL . ltrim($path, '/');
}

// 2. Inteligência SEO: Mapeamento de conteúdo realista
$currentPageFile = basename($_SERVER['PHP_SELF']);

$seoConfig = [
    'index.php'    => [
        'title'       => 'Desenvolvimento de Software e Consultoria TI em Moçambique',
        'description' => 'A MEFEMA Systems oferece soluções tecnológicas inteligentes: ERPs certificados pela AT, integração M-Pesa, Apps Móveis e IA para empresas em Moçambique.',
        'keywords'    => 'software moçambique, erp moçambique, integração m-pesa, desenvolvimento web maputo, consultoria ti, sistemas de gestão'
    ],
    'sobre.php'    => [
        'title'       => 'Sobre a MEFEMA Systems | Transformação Digital Moçambique',
        'description' => 'Especialistas em modernizar empresas moçambicanas. Conheça a nossa missão de acelerar a inovação tecnológica de Maputo a Pemba.',
        'keywords'    => 'sobre mefema, empresa ti moçambique, transformação digital, inovação tecnológica'
    ],
    'servicos.php' => [
        'title'       => 'Serviços de Tecnologia: Software, Cloud e Cibersegurança',
        'description' => 'Desenvolvimento de software personalizado, consultoria em infraestrutura cloud e segurança de dados para o mercado moçambicano.',
        'keywords'    => 'desenvolvimento software, cloud computing mz, segurança informática, suporte ti'
    ],
    'produtos.php' => [
        'title'       => 'Produtos Digitais: ERP, Websites e Chatbots IA',
        'description' => 'Sistemas de faturação certificados pela AT, websites profissionais e soluções de inteligência artificial para automação empresarial.',
        'keywords'    => 'sistema de faturação at, websites prontos, chatbots whatsapp, software gestão'
    ],
    'portfolio.php'=> [
        'title'       => 'Portfólio de Projetos | Casos de Sucesso em Moçambique',
        'description' => 'Explore os projetos de software, e-commerce e digitalização implementados pela MEFEMA Systems para diversos setores.',
        'keywords'    => 'projetos ti moçambique, casos de sucesso, software implementado'
    ],
    'contacto.php' => [
        'title'       => 'Contacto e Suporte Técnico | MEFEMA Systems',
        'description' => 'Entre em contacto com a nossa equipa técnica em Maputo. Solicite orçamentos para software, redes ou consultoria digital.',
        'keywords'    => 'contacto mefema, suporte técnico, orçamento software moçambique'
    ]
];

// 3. Definição dinâmica de variáveis (Respeita o que for definido no index.php)
$seo = $seoConfig[$currentPageFile] ?? $seoConfig['index.php'];
$finalTitle = (isset($pageTitle) && !empty($pageTitle)) ? $pageTitle : ($seo['title'] . " | MEFEMA Systems");
$finalDesc  = $pageDescription ?? $seo['description'];
$finalKeys  = $pageKeywords ?? $seo['keywords'];
$canonical  = BASE_URL . ($currentPageFile == 'index.php' ? '' : str_replace('.php', '', $currentPageFile));
?>
<!doctype html>
<html lang="pt-MZ" class="layout-navbar-fixed layout-wide" data-assets-path="<?php echo asset('assets/'); ?>" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    
    <title><?php echo htmlspecialchars($finalTitle); ?></title>

    <meta name="description" content="<?php echo htmlspecialchars($finalDesc); ?>" />
    <meta name="keywords" content="<?php echo htmlspecialchars($finalKeys); ?>" />
    <meta name="author" content="MEFEMA Systems" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?php echo $canonical; ?>" />

    <meta name="geo.region" content="MZ" />
    <meta name="geo.placename" content="Moçambique" />

    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $canonical; ?>" />
    <meta property="og:title" content="<?php echo htmlspecialchars($finalTitle); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($finalDesc); ?>" />
    <meta property="og:image" content="<?php echo asset('assets/img/og-mefema.jpg'); ?>" />
    <meta property="og:site_name" content="MEFEMA Systems" />
    <meta property="og:locale" content="pt_MZ" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($finalTitle); ?>" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($finalDesc); ?>" />
    <meta name="twitter:image" content="<?php echo asset('assets/img/og-mefema.jpg'); ?>" />

    <link rel="icon" type="image/x-icon" href="<?php echo asset('assets/img/logos/logo.png'); ?>" />
    <link rel="apple-touch-icon" href="<?php echo asset('assets/img/logos/logo.png'); ?>" />

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "MEFEMA Systems",
      "legalName": "MEFEMA Systems, EI",
      "url": "<?php echo BASE_URL; ?>",
      "logo": "<?php echo asset('assets/img/logos/logo.png'); ?>",
      "description": "Empresa de TI líder em Moçambique focada em ERPs certificados, Integração M-Pesa e Software Sob Medida.",
      "telephone": "+258 87 999 0090",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Maputo",
        "addressCountry": "MZ"
      },
      "priceRange": "25000MT-500000MT"
    }
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KNBJHNCCN1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date()); gtag('config', 'G-KNBJHNCCN1');
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo asset('assets/vendor/css/core.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('assets/css/style.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('assets/vendor/css/landing.css'); ?>" />
    
    <script src="<?php echo asset('assets/vendor/js/helpers.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/config.js'); ?>"></script>
</head>

<body>
    <script src="<?php echo asset('assets/vendor/js/dropdown-hover.js'); ?>"></script>

    <nav class="layout-navbar shadow-none py-0">
        <div class="container">
            <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
                <div class="navbar-brand app-brand demo d-flex py-0 me-4">
                    <button class="navbar-toggler border-0 px-0 me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                        <i class="ri-menu-fill icon-lg align-middle"></i>
                    </button>
                    <a href="<?php echo BASE_URL; ?>" class="app-brand-link">
                        <img src="<?php echo asset('assets/img/logos/logo.svg'); ?>" alt="MEFEMA Systems Logo" height="45">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <?php
                        $navLinks = [
                            'index.php'    => 'Início',
                            'sobre.php'    => 'Quem Somos',
                            'servicos.php' => 'Serviços',
                            'produtos.php' => 'Produtos',
                            'portfolio.php'=> 'Portfólio',
                            'contacto.php' => 'Contacto'
                        ];
                        foreach ($navLinks as $file => $label):
                            $isActive = ($currentPageFile == $file || ($currentPageFile == '' && $file == 'index.php')) ? 'active' : '';
                            $href = ($file == 'index.php') ? BASE_URL : BASE_URL . str_replace('.php', '', $file);
                        ?>
                        <li class="nav-item">
                            <a class="nav-link fw-medium <?php echo $isActive; ?>" href="<?php echo $href; ?>"><?php echo $label; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="landing-menu-overlay d-lg-none"></div>
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item">
                        <a href="<?php echo BASE_URL; ?>contacto" class="btn btn-primary btn-sm rounded-pill px-4">
                            Pedir Orçamento
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">
