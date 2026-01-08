<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';

$pageTitle = "Websites - MEFEMA Systems";

/**
 * Função para simular busca de dados da API de Websites
 */
function buscarDadosWebsites() {
    $json_string = '{
      "sucesso": true,
      "total": 13,
      "data": [
        {
          "id": 1,
          "nome": "Website Essencial",
          "categoria": "Básico",
          "nicho": "PMEs e Startups",
          "paginas": 5,
          "preco": 38000,
          "descricao": "Solução ideal para pequenos negócios que precisam de presença digital básica",
          "screenshots": [
            "/assets/img/websites/essencial-home.jpg",
            "/assets/img/websites/essencial-sobre.jpg",
            "/assets/img/websites/essencial-contacto.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/essencial",
          "caracteristicas": [
            "Design responsivo",
            "5 páginas incluídas",
            "Domínio .co.mz (1 ano)",
            "Email profissional (5 contas)",
            "Certificado SSL",
            "Painel administrativo básico",
            "Formulário de contacto",
            "Integração Google Maps",
            "Galeria de imagens",
            "Suporte por email (3 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 2,
          "nome": "Website Empresarial",
          "categoria": "Profissional",
          "nicho": "Empresas Estabelecidas",
          "paginas": 10,
          "preco": 68000,
          "descricao": "Website completo para empresas que querem transmitir profissionalismo",
          "screenshots": [
            "/assets/img/websites/empresarial-home.jpg",
            "/assets/img/websites/empresarial-servicos.jpg",
            "/assets/img/websites/empresarial-portfolio.jpg",
            "/assets/img/websites/empresarial-blog.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/empresarial",
          "caracteristicas": [
            "Design personalizado premium",
            "10 páginas incluídas",
            "Domínio .co.mz (1 ano)",
            "Email profissional (15 contas)",
            "Certificado SSL avançado",
            "Painel administrativo completo",
            "Sistema de blog integrado",
            "Galeria de produtos/serviços",
            "Formulários personalizados",
            "Chat online",
            "Integração redes sociais",
            "SEO básico optimizado",
            "Google Analytics",
            "Suporte prioritário (6 meses)"
          ],
          "destaque": true,
          "cor": "success"
        },
        {
          "id": 3,
          "nome": "Landing Page Conversão",
          "categoria": "Marketing",
          "nicho": "Campanhas e Produtos",
          "paginas": 1,
          "preco": 25000,
          "descricao": "Página focada em conversão para campanhas específicas",
          "screenshots": [
            "/assets/img/websites/landing-hero.jpg",
            "/assets/img/websites/landing-features.jpg",
            "/assets/img/websites/landing-cta.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/landing",
          "caracteristicas": [
            "Design focado em conversão",
            "1 página optimizada",
            "Domínio incluído (1 ano)",
            "Certificado SSL",
            "Formulário de captura de leads",
            "Integração com email marketing",
            "Botões de acção estratégicos",
            "Contador regressivo",
            "Depoimentos de clientes",
            "Pixel Facebook/Google Ads",
            "Suporte por email (2 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        },
        {
          "id": 4,
          "nome": "Portal Institucional",
          "categoria": "Corporativo",
          "nicho": "Instituições Públicas",
          "paginas": 20,
          "preco": 125000,
          "descricao": "Portal robusto para instituições governamentais e organizações",
          "screenshots": [
            "/assets/img/websites/portal-home.jpg",
            "/assets/img/websites/portal-noticias.jpg",
            "/assets/img/websites/portal-documentos.jpg",
            "/assets/img/websites/portal-transparencia.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/portal",
          "caracteristicas": [
            "Design institucional profissional",
            "20 páginas incluídas",
            "Domínio .gov.mz ou .org.mz",
            "Email profissional ilimitado",
            "Certificado SSL avançado",
            "Painel administrativo multi-utilizador",
            "Sistema de notícias e comunicados",
            "Área de downloads (documentos)",
            "Sistema de eventos/calendário",
            "Portal de transparência",
            "Acessibilidade WCAG",
            "Sistema de busca avançado",
            "Integração com redes sociais",
            "Backup automático diário",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 5,
          "nome": "E-commerce Starter",
          "categoria": "Loja Online",
          "nicho": "Comércio Electrónico",
          "paginas": 8,
          "preco": 95000,
          "descricao": "Loja virtual completa para começar a vender online",
          "screenshots": [
            "/assets/img/websites/ecommerce-home.jpg",
            "/assets/img/websites/ecommerce-produtos.jpg",
            "/assets/img/websites/ecommerce-carrinho.jpg",
            "/assets/img/websites/ecommerce-checkout.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/ecommerce",
          "caracteristicas": [
            "Design de loja moderna",
            "Até 50 produtos",
            "8 páginas base incluídas",
            "Domínio .co.mz (1 ano)",
            "Email profissional (10 contas)",
            "Certificado SSL",
            "Painel de gestão de produtos",
            "Carrinho de compras",
            "Gateway de pagamento (M-Pesa/E-Mola)",
            "Sistema de categorias",
            "Gestão de stock básica",
            "Relatórios de vendas",
            "Integração redes sociais",
            "Suporte prioritário (6 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 6,
          "nome": "Website Restaurante",
          "categoria": "Especializado",
          "nicho": "Restauração",
          "paginas": 7,
          "preco": 55000,
          "descricao": "Website especializado para restaurantes e cafés",
          "screenshots": [
            "/assets/img/websites/restaurante-home.jpg",
            "/assets/img/websites/restaurante-menu.jpg",
            "/assets/img/websites/restaurante-galeria.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/restaurante",
          "caracteristicas": [
            "Design gastronómico atractivo",
            "7 páginas incluídas",
            "Menu digital interactivo",
            "Domínio incluído (1 ano)",
            "Email profissional (8 contas)",
            "Certificado SSL",
            "Galeria de pratos",
            "Sistema de reservas online",
            "Localização e horários",
            "Integração WhatsApp",
            "Botão de encomendas",
            "Redes sociais integradas",
            "Suporte (4 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        }
      ]
    }';
    
    $dados = json_decode($json_string, true);
    return $dados && $dados['sucesso'] === true ? $dados : null;
}

// Configuração de paginação - AGORA 4 ITENS POR PÁGINA
$items_por_pagina = 4;
$pagina_actual = isset($_GET['pagina']) ? max(1, intval($_GET['pagina'])) : 1;
$filtro_categoria = isset($_GET['categoria']) ? $_GET['categoria'] : 'all';

// Buscar dados
$dados_websites = buscarDadosWebsites();

if ($dados_websites) {
    // Filtrar por categoria
    $websites_filtrados = $filtro_categoria === 'all' 
        ? $dados_websites['data']
        : array_filter($dados_websites['data'], function($w) use ($filtro_categoria) {
            return $w['categoria'] === $filtro_categoria;
        });
    
    $total_items = count($websites_filtrados);
    $total_paginas = ceil($total_items / $items_por_pagina);
    $offset = ($pagina_actual - 1) * $items_por_pagina;
    $websites_pagina = array_slice($websites_filtrados, $offset, $items_por_pagina);
}

get_part('includes/header.php'); 
?>

<!-- Hero Section -->
<section class="landing-hero-websites">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="hero-badge mb-4" data-aos="fade-up">
                    <i class="ri-sparkling-2-fill text-primary"></i>
                    <span class="badge-text">Soluções Web Profissionais</span>
                </div>
                <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                    Pacotes de <span class="text-gradient">Websites</span>
                </h1>
                <p class="hero-subtitle mx-auto mb-4" data-aos="fade-up" data-aos-delay="200">
                    Escolha o pacote perfeito para o seu negócio. Designs modernos, funcionalidades completas e suporte dedicado.
                </p>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <i class="ri-code-s-slash-line"></i>
                        <strong>6+</strong>
                        <span>Pacotes</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-palette-line"></i>
                        <strong>100%</strong>
                        <span>Personalizável</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-customer-service-2-line"></i>
                        <strong>24/7</strong>
                        <span>Suporte</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Websites List -->
<?php if ($dados_websites): ?>
<section class="section-py landing-websites-list" id="websitesList">
    <div class="container">
        
        <!-- Filtros -->
        <div class="filters-wrapper mb-5" data-aos="fade-up">
            <div class="text-center mb-4">
                <h6 class="filter-label">
                    <i class="ri-filter-3-line me-2"></i>
                    Filtrar por Categoria
                </h6>
            </div>
            <div class="filters-buttons">
                <a href="?categoria=all&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'all' ? 'active' : ''; ?>">
                    <i class="ri-layout-grid-line"></i>
                    <span>Todos</span>
                </a>
                <a href="?categoria=Básico&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Básico' ? 'active' : ''; ?>">
                    <i class="ri-file-text-line"></i>
                    <span>Básico</span>
                </a>
                <a href="?categoria=Profissional&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Profissional' ? 'active' : ''; ?>">
                    <i class="ri-briefcase-line"></i>
                    <span>Profissional</span>
                </a>
                <a href="?categoria=Especializado&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Especializado' ? 'active' : ''; ?>">
                    <i class="ri-star-line"></i>
                    <span>Especializado</span>
                </a>
                <a href="?categoria=Loja Online&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Loja Online' ? 'active' : ''; ?>">
                    <i class="ri-shopping-cart-line"></i>
                    <span>E-commerce</span>
                </a>
                <a href="?categoria=Corporativo&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Corporativo' ? 'active' : ''; ?>">
                    <i class="ri-building-line"></i>
                    <span>Corporativo</span>
                </a>
            </div>
        </div>

        <!-- Grid de Websites -->
        <div class="row g-4 mb-5" id="websitesGrid">
            <?php foreach ($websites_pagina as $index => $website): ?>
                <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="website-card <?php echo $website['destaque'] ? 'featured' : ''; ?>">
                        
                        <?php if ($website['destaque']): ?>
                            <div class="featured-badge">
                                <i class="ri-vip-crown-fill"></i>
                                <span>Mais Popular</span>
                            </div>
                        <?php endif; ?>
                        
                        <div class="card-layout">
                            <!-- Screenshots Carousel -->
                            <div class="screenshots-section">
                                <div id="carousel<?php echo $website['id']; ?>" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <?php foreach ($website['screenshots'] as $i => $screenshot): ?>
                                            <button type="button" 
                                                    data-bs-target="#carousel<?php echo $website['id']; ?>" 
                                                    data-bs-slide-to="<?php echo $i; ?>" 
                                                    class="<?php echo $i === 0 ? 'active' : ''; ?>">
                                            </button>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="carousel-inner">
                                        <?php foreach ($website['screenshots'] as $i => $screenshot): ?>
                                            <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                                                <img src="<?php echo htmlspecialchars($screenshot); ?>" 
                                                     class="d-block w-100" 
                                                     alt="<?php echo htmlspecialchars($website['nome']); ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?php echo $website['id']; ?>" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel<?php echo $website['id']; ?>" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="card-content">
                                <div class="card-header-section">
                                    <div class="category-badge badge-<?php echo htmlspecialchars($website['cor']); ?>">
                                        <?php echo htmlspecialchars($website['categoria']); ?>
                                    </div>
                                    <h3 class="website-name"><?php echo htmlspecialchars($website['nome']); ?></h3>
                                    <p class="website-nicho">
                                        <i class="ri-focus-3-line"></i>
                                        <?php echo htmlspecialchars($website['nicho']); ?>
                                    </p>
                                </div>

                                <div class="card-pricing">
                                    <div class="pricing-main">
                                        <span class="price-label">A partir de</span>
                                        <div class="price-amount">
                                            <span class="price-value"><?php echo number_format($website['preco'], 0, ',', '.'); ?></span>
                                            <span class="price-currency">MT</span>
                                        </div>
                                    </div>
                                    <div class="pricing-detail">
                                        <i class="ri-file-list-3-line"></i>
                                        <span><?php echo $website['paginas']; ?> página<?php echo $website['paginas'] > 1 ? 's' : ''; ?></span>
                                    </div>
                                </div>

                                <p class="card-description"><?php echo htmlspecialchars($website['descricao']); ?></p>

                                <div class="card-features">
                                    <h6 class="features-title">
                                        <i class="ri-checkbox-circle-line"></i>
                                        Características principais
                                    </h6>
                                    <ul class="features-list">
                                        <?php 
                                        $features_show = array_slice($website['caracteristicas'], 0, 5);
                                        foreach ($features_show as $feature): 
                                        ?>
                                            <li>
                                                <i class="ri-check-line"></i>
                                                <span><?php echo htmlspecialchars($feature); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                        <?php if (count($website['caracteristicas']) > 5): ?>
                                            <li class="more-features">
                                                <i class="ri-add-circle-line"></i>
                                                <span>Mais <?php echo count($website['caracteristicas']) - 5; ?> funcionalidades</span>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                                <div class="card-actions">
                                    <a href="<?php echo htmlspecialchars($website['demo_url']); ?>" 
                                       target="_blank" 
                                       class="btn-action btn-demo">
                                        <i class="ri-external-link-line"></i>
                                        <span>Ver Demo</span>
                                    </a>
                                    <button class="btn-action btn-details" onclick="showWebsiteDetails(<?php echo $website['id']; ?>)">
                                        <i class="ri-information-line"></i>
                                        <span>Detalhes</span>
                                    </button>
                                    <a href="#landingContact" class="btn-action btn-order">
                                        <i class="ri-shopping-bag-line"></i>
                                        <span>Encomendar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Paginação Melhorada -->
        <?php if ($total_paginas > 1): ?>
        <nav class="pagination-wrapper" data-aos="fade-up">
            <div class="pagination-info">
                <span class="pagination-text">
                    Página <strong><?php echo $pagina_actual; ?></strong> de <strong><?php echo $total_paginas; ?></strong>
                    <span class="separator">•</span>
                    <strong><?php echo $total_items; ?></strong> <?php echo $total_items === 1 ? 'resultado' : 'resultados'; ?>
                </span>
            </div>
            <ul class="pagination">
                <?php if ($pagina_actual > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $pagina_actual - 1; ?>">
                            <i class="ri-arrow-left-s-line"></i>
                            <span class="d-none d-sm-inline">Anterior</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php
                $start = max(1, $pagina_actual - 2);
                $end = min($total_paginas, $pagina_actual + 2);
                
                if ($start > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=1">1</a>
                    </li>
                    <?php if ($start > 2): ?>
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php for ($i = $start; $i <= $end; $i++): ?>
                    <li class="page-item <?php echo $i === $pagina_actual ? 'active' : ''; ?>">
                        <a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                <?php endfor; ?>

                <?php if ($end < $total_paginas): ?>
                    <?php if ($end < $total_paginas - 1): ?>
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                    <?php endif; ?>
                    <li class="page-item">
                        <a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $total_paginas; ?>"><?php echo $total_paginas; ?></a>
                    </li>
                <?php endif; ?>

                <?php if ($pagina_actual < $total_paginas): ?>
                    <li class="page-item">
                        <a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $pagina_actual + 1; ?>">
                            <span class="d-none d-sm-inline">Próxima</span>
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
        <?php endif; ?>

    </div>
</section>

<!-- Modal de Detalhes -->
<div class="modal fade" id="websiteDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalWebsiteName"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalWebsiteContent"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <a href="#landingContact" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="ri-mail-send-line me-2"></i>Solicitar Orçamento
                </a>
            </div>
        </div>
    </div>
</div>

<script>
const websitesData = <?php echo json_encode($dados_websites['data']); ?>;

function showWebsiteDetails(id) {
    const website = websitesData.find(w => w.id === id);
    if (!website) return;
    
    document.getElementById('modalWebsiteName').innerHTML = `
        <i class="ri-window-line me-2"></i>${website.nome}
    `;
    
    let screenshotsHTML = '<div class="modal-screenshots mb-4"><div class="row g-3">';
    website.screenshots.forEach((screenshot, index) => {
        screenshotsHTML += `
            <div class="col-md-6">
                <img src="${screenshot}" class="img-fluid rounded shadow-sm" alt="Screenshot ${index + 1}">
            </div>
        `;
    });
    screenshotsHTML += '</div></div>';
    
    let featuresHTML = '<ul class="list-unstyled row g-2">';
    website.caracteristicas.forEach(feature => {
        featuresHTML += `
            <li class="col-md-6 mb-2">
                <i class="ri-checkbox-circle-fill text-success me-2"></i>${feature}
            </li>
        `;
    });
    featuresHTML += '</ul>';
    
    document.getElementById('modalWebsiteContent').innerHTML = `
        ${screenshotsHTML}
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-information-line me-2"></i>Informações Gerais</h6>
                    <div class="info-item">
                        <span class="info-label">Categoria:</span>
                        <span class="info-value">${website.categoria}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Nicho:</span>
                        <span class="info-value">${website.nicho}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Páginas:</span>
                        <span class="info-value">${website.paginas}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Preço:</span>
                        <span class="info-value text-primary fw-bold">${website.preco.toLocaleString('pt-MZ')} MT</span>
                    </div>
                    <a href="${website.demo_url}" target="_blank" class="btn btn-outline-primary mt-3 w-100">
                        <i class="ri-external-link-line me-2"></i>Ver Demo ao Vivo
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-file-text-line me-2"></i>Descrição</h6>
                    <p>${website.descricao}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-list-check-2 me-2"></i>Todas as Características</h6>
                    ${featuresHTML}
                </div>
            </div>
        </div>
    `;
    
    const modal = new bootstrap.Modal(document.getElementById('websiteDetailsModal'));
    modal.show();
}
</script>

<?php else: ?>
<div class="container my-5 py-5">
    <div class="alert alert-danger text-center">
        <i class="ri-error-warning-line me-2"></i>
        Erro ao carregar os pacotes de websites.
    </div>
</div>
<?php endif; ?>

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

/* Hero Section */
.landing-hero-websites {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--primary-light) 100%);
    padding: 6rem 0 4rem;
    position: relative;
    overflow: hidden;
}

.landing-hero-websites::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(217, 118, 56, 0.1) 0%, transparent 70%);
    border-radius: 50%;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.75rem;
    background: var(--bg-card);
    border: 2px solid var(--border-color);
    border-radius: 50px;
    box-shadow: var(--shadow-sm);
}

.badge-text {
    font-weight: 600;
    color: var(--text-secondary);
    font-size: 0.95rem;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 800;
    color: var(--text-primary);
    line-height: 1.2;
}

.text-gradient {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-subtitle {
    font-size: 1.25rem;
    color: var(--text-secondary);
    line-height: 1.6;
}

.hero-stats {
    display: flex;
    justify-content: center;
    gap: 3rem;
    flex-wrap: wrap;
    margin-top: 2rem;
}

.stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
}

.stat-item i {
    font-size: 2rem;
    color: var(--primary-color);
}

.stat-item strong {
    font-size: 1.5rem;
    color: var(--text-primary);
    font-weight: 700;
}

.stat-item span {
    font-size: 0.9rem;
    color: var(--text-secondary);
}

/* Filtros */
.landing-websites-list {
    background: var(--bg-light);
}

.filters-wrapper {
    background: var(--bg-card);
    padding: 2rem;
    border-radius: var(--radius-lg);
    border: 2px solid var(--border-color);
    box-shadow: var(--shadow-sm);
}

.filter-label {
    color: var(--text-primary);
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.85rem;
}

.filters-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
}

.filter-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: var(--bg-light);
    border: 2px solid var(--border-color);
    border-radius: 50px;
    color: var(--text-secondary);
    font-weight: 600;
    text-decoration: none;
    transition: var(--transition);
    font-size: 0.9rem;
}

.filter-btn i {
    font-size: 1.1rem;
}

.filter-btn:hover {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.filter-btn.active {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    border-color: var(--primary-color);
    box-shadow: var(--shadow-md);
}

/* Website Cards */
.website-card {
    background: var(--bg-card);
    border: 2px solid var(--border-color);
    border-radius: var(--radius-lg);
    overflow: hidden;
    height: 100%;
    position: relative;
    transition: var(--transition);
    box-shadow: var(--shadow-sm);
}

.website-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
    border-color: var(--primary-color);
}

.website-card.featured {
    border: 3px solid var(--primary-color);
    box-shadow: var(--shadow-md);
}

.featured-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: linear-gradient(135deg, #FFD700, #FFA500);
    color: #000;
    padding: 0.5rem 1rem;
    border-radius: 25px;
    font-size: 0.75rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 0.4rem;
    z-index: 10;
    box-shadow: 0 4px 12px rgba(255, 215, 0, 0.4);
}

.featured-badge i {
    font-size: 1rem;
}

/* Card Layout */
.card-layout {
    display: flex;
    flex-direction: row;
    height: 100%;
}

.screenshots-section {
    flex: 0 0 45%;
    background: #000;
    position: relative;
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.carousel-indicators {
    bottom: 15px;
    margin: 0;
}

.carousel-indicators button {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin: 0 5px;
    background-color: rgba(255, 255, 255, 0.5);
}

.carousel-indicators button.active {
    background-color: var(--primary-color);
}

.carousel-control-prev,
.carousel-control-next {
    width: 50px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    width: 35px;
    height: 35px;
}

.website-card:hover .carousel-control-prev,
.website-card:hover .carousel-control-next {
    opacity: 1;
}

/* Card Content */
.card-content {
    flex: 1;
    padding: 1.75rem;
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
}

.card-header-section {
    border-bottom: 2px solid var(--border-color);
    padding-bottom: 1rem;
}

.category-badge {
    display: inline-block;
    padding: 0.35rem 1rem;
    border-radius: 20px;
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.75rem;
}

.badge-primary { background: rgba(217, 118, 56, 0.15); color: var(--primary-color); }
.badge-success { background: rgba(25, 135, 84, 0.15); color: #198754; }
.badge-warning { background: rgba(255, 193, 7, 0.15); color: #c29400; }
.badge-info { background: rgba(13, 202, 240, 0.15); color: #0dcaf0; }
.badge-danger { background: rgba(220, 53, 69, 0.15); color: #dc3545; }
.badge-secondary { background: rgba(108, 117, 125, 0.15); color: #6c757d; }

.website-name {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
    line-height: 1.3;
}

.website-nicho {
    color: var(--text-secondary);
    font-size: 0.9rem;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.website-nicho i {
    color: var(--primary-color);
}

/* Pricing */
.card-pricing {
    background: linear-gradient(135deg, var(--primary-light), transparent);
    padding: 1.25rem;
    border-radius: var(--radius);
    border: 2px solid var(--border-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.pricing-main {
    text-align: left;
}

.price-label {
    display: block;
    font-size: 0.75rem;
    color: var(--text-secondary);
    margin-bottom: 0.25rem;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 0.5px;
}

.price-amount {
    display: flex;
    align-items: baseline;
    gap: 0.4rem;
}

.price-value {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary-color);
    line-height: 1;
}

.price-currency {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-secondary);
}

.pricing-detail {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--text-secondary);
    font-weight: 600;
    font-size: 0.9rem;
    background: var(--bg-card);
    padding: 0.5rem 1rem;
    border-radius: 20px;
}

.pricing-detail i {
    color: var(--primary-color);
    font-size: 1.1rem;
}

/* Description */
.card-description {
    color: var(--text-secondary);
    line-height: 1.6;
    font-size: 0.9rem;
}

/* Features */
.card-features {
    flex-grow: 1;
}

.features-title {
    font-size: 0.85rem;
    font-weight: 700;
    color: var(--text-primary);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.features-title i {
    color: var(--primary-color);
    font-size: 1.1rem;
}

.features-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.features-list li {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    color: var(--text-secondary);
    font-size: 0.85rem;
    line-height: 1.5;
}

.features-list i {
    color: var(--primary-color);
    font-size: 1rem;
    margin-top: 0.15rem;
    flex-shrink: 0;
}

.more-features {
    color: var(--primary-color) !important;
    font-weight: 700;
}

/* Actions */
.card-actions {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 0.5rem;
    padding-top: 1rem;
    border-top: 2px solid var(--border-color);
}

.btn-action {
    padding: 0.75rem 1rem;
    border-radius: var(--radius);
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    transition: var(--transition);
    border: none;
    cursor: pointer;
}

.btn-demo {
    background: transparent;
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
}

.btn-demo:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-2px);
}

.btn-details {
    background: var(--bg-light);
    color: var(--text-primary);
    border: 2px solid var(--border-color);
}

.btn-details:hover {
    background: var(--text-primary);
    color: white;
    border-color: var(--text-primary);
    transform: translateY(-2px);
}

.btn-order {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    border: 2px solid var(--primary-color);
}

.btn-order:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(217, 118, 56, 0.3);
}

/* Paginação */
.pagination-wrapper {
    margin-top: 3rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1.5rem;
}

.pagination-info {
    background: var(--bg-card);
    padding: 1rem 2rem;
    border-radius: 50px;
    border: 2px solid var(--border-color);
}

.pagination-text {
    color: var(--text-secondary);
    font-size: 0.95rem;
}

.pagination-text strong {
    color: var(--primary-color);
    font-weight: 700;
}

.separator {
    margin: 0 0.75rem;
    color: var(--border-color);
}

.pagination {
    gap: 0.5rem;
    margin: 0;
}

.page-item.disabled .page-link {
    background: transparent;
    border: none;
    color: var(--text-secondary);
}

.page-link {
    border: 2px solid var(--border-color);
    background: var(--bg-card);
    color: var(--text-primary);
    border-radius: var(--radius);
    padding: 0.75rem 1rem;
    font-weight: 600;
    transition: var(--transition);
    min-width: 45px;
    text-align: center;
}

.page-link:hover {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
    transform: translateY(-2px);
}

.page-item.active .page-link {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-color: var(--primary-color);
    color: white;
    box-shadow: var(--shadow-md);
}

/* Modal */
.modal-content {
    border-radius: var(--radius-lg);
    border: 2px solid var(--border-color);
    background: var(--bg-card);
}

.modal-header {
    background: linear-gradient(135deg, var(--primary-light), transparent);
    border-bottom: 2px solid var(--border-color);
    padding: 1.5rem;
}

.modal-title {
    color: var(--text-primary);
    font-weight: 700;
    font-size: 1.5rem;
    display: flex;
    align-items: center;
}

.modal-title i {
    color: var(--primary-color);
}

.modal-body {
    padding: 2rem;
}

.modal-screenshots img {
    border-radius: var(--radius);
    border: 2px solid var(--border-color);
    transition: var(--transition);
}

.modal-screenshots img:hover {
    transform: scale(1.02);
    box-shadow: var(--shadow-md);
}

.info-box {
    background: var(--bg-light);
    padding: 1.5rem;
    border-radius: var(--radius);
    border: 2px solid var(--border-color);
    height: 100%;
}

.info-item {
    display: flex;
    justify-content: space-between;
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--border-color);
}

.info-item:last-of-type {
    border-bottom: none;
}

.info-label {
    font-weight: 600;
    color: var(--text-secondary);
}

.info-value {
    color: var(--text-primary);
    font-weight: 500;
}

.modal-footer {
    border-top: 2px solid var(--border-color);
    padding: 1.5rem;
}

/* Responsivo */
@media (max-width: 1200px) {
    .card-layout {
        flex-direction: column;
    }
    
    .screenshots-section {
        flex: 0 0 auto;
        height: 300px;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-stats {
        gap: 1.5rem;
    }
    
    .filters-buttons {
        flex-direction: column;
    }
    
    .filter-btn {
        width: 100%;
        justify-content: center;
    }
    
    .card-actions {
        grid-template-columns: 1fr;
    }
    
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .card-content {
        padding: 1.25rem;
    }
    
    .website-name {
        font-size: 1.25rem;
    }
    
    .price-value {
        font-size: 1.5rem;
    }
}
</style>

<?php 
get_part('includes/footer.php'); 
?>
