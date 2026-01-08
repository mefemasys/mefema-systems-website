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
                <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
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
                                    <a href="<?php echo htmlspecialchars($website['demo_url']); ?>" target="_blank" class="btn-action btn-demo">
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

<?php 
get_part('includes/footer.php'); 
?>
