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

// Configuração de paginação
$items_por_pagina = 6;
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
<section class="section-py landing-hero-websites position-relative">
    <div class="container position-relative">
        <div class="hero-text-box text-center">
            <div class="hero-badge mx-auto mb-4">
                <span class="badge-icon">🌐</span>
                <span class="badge-text">CRIAÇÃO DE WEBSITES</span>
            </div>
            <h1 class="hero-title text-primary mb-3">
                Presença Digital<br>
                <span class="text-gradient">Profissional</span>
            </h1>
            <p class="hero-subtitle mb-5 mx-auto">
                Websites modernos, responsivos e optimizados para o seu negócio.<br>
                Soluções completas a partir de <strong class="text-primary">38.000,00 MT</strong>
            </p>
            <a href="#websitesList" class="btn btn-primary btn-lg">
                <span>Ver Pacotes</span>
                <i class="ri-arrow-down-line ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Websites List -->
<?php if ($dados_websites): ?>
<section class="section-py landing-websites-list" id="websitesList">
    <div class="container">
        
        <!-- Filtros -->
        <div class="filters-wrapper mb-5">
            <div class="text-center mb-4">
                <h6 class="filter-label">Filtrar por Categoria:</h6>
            </div>
            <div class="filters-buttons text-center">
                <a href="?categoria=all&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'all' ? 'active' : ''; ?>">
                    Todos
                </a>
                <a href="?categoria=Básico&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Básico' ? 'active' : ''; ?>">
                    Básico
                </a>
                <a href="?categoria=Profissional&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Profissional' ? 'active' : ''; ?>">
                    Profissional
                </a>
                <a href="?categoria=Especializado&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Especializado' ? 'active' : ''; ?>">
                    Especializado
                </a>
                <a href="?categoria=Loja Online&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Loja Online' ? 'active' : ''; ?>">
                    E-commerce
                </a>
                <a href="?categoria=Corporativo&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Corporativo' ? 'active' : ''; ?>">
                    Corporativo
                </a>
            </div>
        </div>

        <!-- Grid de Websites -->
        <div class="row g-4" id="websitesGrid">
            <?php foreach ($websites_pagina as $website): ?>
                <div class="col-lg-6 col-md-12">
                    <div class="website-card <?php echo $website['destaque'] ? 'featured' : ''; ?>">
                        
                        <?php if ($website['destaque']): ?>
                            <div class="featured-badge">
                                <i class="ri-star-fill"></i>
                                <span>Mais Popular</span>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Screenshots Carousel -->
                        <div class="screenshots-carousel">
                            <div id="carousel<?php echo $website['id']; ?>" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <?php foreach ($website['screenshots'] as $index => $screenshot): ?>
                                        <button type="button" 
                                                data-bs-target="#carousel<?php echo $website['id']; ?>" 
                                                data-bs-slide-to="<?php echo $index; ?>" 
                                                class="<?php echo $index === 0 ? 'active' : ''; ?>">
                                        </button>
                                    <?php endforeach; ?>
                                </div>
                                <div class="carousel-inner">
                                    <?php foreach ($website['screenshots'] as $index => $screenshot): ?>
                                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                            <img src="<?php echo htmlspecialchars($screenshot); ?>" 
                                                 class="d-block w-100" 
                                                 alt="<?php echo htmlspecialchars($website['nome']); ?> - Screenshot <?php echo $index + 1; ?>">
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

                        <div class="card-content">
                            <div class="card-header-custom">
                                <div class="category-badge badge-<?php echo htmlspecialchars($website['cor']); ?>">
                                    <?php echo htmlspecialchars($website['categoria']); ?>
                                </div>
                                <h4 class="website-name"><?php echo htmlspecialchars($website['nome']); ?></h4>
                                <p class="website-nicho"><?php echo htmlspecialchars($website['nicho']); ?></p>
                            </div>

                            <div class="card-pricing">
                                <div class="price-wrapper">
                                    <span class="price-label">A partir de</span>
                                    <div class="price-value">
                                        <?php echo number_format($website['preco'], 2, ',', '.'); ?>
                                        <span class="currency">MT</span>
                                    </div>
                                </div>
                                <div class="pages-info">
                                    <i class="ri-file-list-3-line"></i>
                                    <span><?php echo $website['paginas']; ?> página<?php echo $website['paginas'] > 1 ? 's' : ''; ?></span>
                                </div>
                            </div>

                            <div class="card-description">
                                <p><?php echo htmlspecialchars($website['descricao']); ?></p>
                            </div>

                            <div class="card-features">
                                <h6 class="features-title">Inclui:</h6>
                                <ul class="features-list">
                                    <?php 
                                    $features_to_show = array_slice($website['caracteristicas'], 0, 4);
                                    foreach ($features_to_show as $feature): 
                                    ?>
                                        <li>
                                            <i class="ri-check-line"></i>
                                            <?php echo htmlspecialchars($feature); ?>
                                        </li>
                                    <?php endforeach; ?>
                                    <?php if (count($website['caracteristicas']) > 4): ?>
                                        <li class="more-features">
                                            <i class="ri-add-line"></i>
                                            E mais <?php echo count($website['caracteristicas']) - 4; ?> funcionalidades
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="card-actions">
                                <a href="<?php echo htmlspecialchars($website['demo_url']); ?>" 
                                   target="_blank" 
                                   class="btn-demo">
                                    <i class="ri-external-link-line"></i>
                                    <span>Ver Demo</span>
                                </a>
                                <button class="btn-details" onclick="showWebsiteDetails(<?php echo $website['id']; ?>)">
                                    <i class="ri-eye-line"></i>
                                    <span>Detalhes</span>
                                </button>
                                <a href="#landingContact" class="btn-order">
                                    <i class="ri-shopping-cart-line"></i>
                                    <span>Encomendar</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Paginação -->
        <?php if ($total_paginas > 1): ?>
        <nav class="pagination-wrapper mt-5">
            <ul class="pagination justify-content-center">
                <?php if ($pagina_actual > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $pagina_actual - 1; ?>">
                            <i class="ri-arrow-left-s-line"></i>
                        </a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                    <li class="page-item <?php echo $i === $pagina_actual ? 'active' : ''; ?>">
                        <a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                <?php endfor; ?>

                <?php if ($pagina_actual < $total_paginas): ?>
                    <li class="page-item">
                        <a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $pagina_actual + 1; ?>">
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
                    Solicitar Orçamento
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
    
    document.getElementById('modalWebsiteName').textContent = website.nome;
    
    let screenshotsHTML = '<div class="modal-screenshots mb-4"><div class="row g-3">';
    website.screenshots.forEach((screenshot, index) => {
        screenshotsHTML += `
            <div class="col-md-6">
                <img src="${screenshot}" class="img-fluid rounded" alt="Screenshot ${index + 1}">
            </div>
        `;
    });
    screenshotsHTML += '</div></div>';
    
    let featuresHTML = '<ul class="list-unstyled row">';
    website.caracteristicas.forEach(feature => {
        featuresHTML += `
            <li class="col-md-6 mb-2">
                <i class="ri-check-double-line text-success me-2"></i>${feature}
            </li>
        `;
    });
    featuresHTML += '</ul>';
    
    document.getElementById('modalWebsiteContent').innerHTML = `
        ${screenshotsHTML}
        <div class="row mb-4">
            <div class="col-md-6">
                <h6 class="fw-bold mb-3">Informações Gerais</h6>
                <p><strong>Categoria:</strong> ${website.categoria}</p>
                <p><strong>Nicho:</strong> ${website.nicho}</p>
                <p><strong>Páginas:</strong> ${website.paginas}</p>
                <p><strong>Preço:</strong> ${website.preco.toLocaleString('pt-MZ')} MT</p>
                <a href="${website.demo_url}" target="_blank" class="btn btn-outline-primary mt-2">
                    <i class="ri-external-link-line me-2"></i>Ver Demo ao Vivo
                </a>
            </div>
            <div class="col-md-6">
                <h6 class="fw-bold mb-3">Descrição</h6>
                <p>${website.descricao}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="fw-bold mb-3">Todas as Características</h6>
                ${featuresHTML}
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
    --text-primary: #5a3a28;
    --text-secondary: #74523d;
    --bg-light: #fdf9f6;
    --bg-card: #fffdfb;
    --border-color: rgba(217, 118, 56, 0.2);
    --shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    --radius: 8px;
}

[data-bs-theme="dark"] {
    --primary-color: #ff8c4a;
    --primary-dark: #e07a3d;
    --text-primary: #e8ddd4;
    --text-secondary: #c4b5aa;
    --bg-light: #1a1410;
    --bg-card: #2a1f1a;
    --border-color: rgba(255, 140, 74, 0.15);
    --shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
}

/* Hero Section */
.landing-hero-websites {
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-card) 100%);
    padding: 6rem 0 4rem;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.5rem;
    background: rgba(217, 118, 56, 0.1);
    border: 1px solid var(--border-color);
    border-radius: 50px;
}

.hero-title {
    font-size: 3rem;
    font-weight: 700;
    color: var(--text-primary);
}

.text-gradient {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero-subtitle {
    font-size: 1.2rem;
    color: var(--text-secondary);
    max-width: 700px;
}

/* Filtros */
.filters-wrapper {
    background: var(--bg-card);
    padding: 2rem;
    border-radius: var(--radius);
    border: 1px solid var(--border-color);
}

.filter-label {
    color: var(--text-primary);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.filters-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
    justify-content: center;
}

.filter-btn {
    padding: 0.6rem 1.5rem;
    background: transparent;
    border: 1px solid var(--border-color);
    border-radius: 25px;
    color: var(--text-secondary);
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
}

.filter-btn:hover,
.filter-btn.active {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
    transform: translateY(-2px);
}

/* Website Cards */
.landing-websites-list {
    background: var(--bg-light);
}

.website-card {
    background: var(--bg-card);
    border: 1px solid var(--border-color);
    border-radius: var(--radius);
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    transition: all 0.3s ease;
}

.website-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(217, 118, 56, 0.12);
}

.website-card.featured {
    border: 2px solid var(--primary-color);
}

.featured-badge {
    position: absolute;
    top: 16px;
    right: 16px;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    padding: 0.4rem 0.9rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.4rem;
    z-index: 10;
}

/* Screenshots Carousel */
.screenshots-carousel {
    position: relative;
    background: #000;
    aspect-ratio: 16 / 10;
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.carousel-indicators {
    bottom: 10px;
}

.carousel-indicators button {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    margin: 0 4px;
}

.carousel-control-prev,
.carousel-control-next {
    width: 40px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.website-card:hover .carousel-control-prev,
.website-card:hover .carousel-control-next {
    opacity: 1;
}

/* Card Content */
.card-content {
    padding: 1.5rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.card-header-custom {
    margin-bottom: 1.25rem;
}

.category-badge {
    display: inline-block;
    padding: 0.3rem 0.9rem;
    border-radius: 20px;
    font-size: 0.7rem;
    font-weight: 600;
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
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.4rem;
}

.website-nicho {
    color: var(--text-secondary);
    font-size: 0.9rem;
    margin: 0;
}

/* Pricing */
.card-pricing {
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.08), rgba(184, 95, 48, 0.05));
    padding: 1.25rem;
    border-radius: var(--radius);
    margin-bottom: 1.25rem;
}

.price-wrapper {
    text-align: center;
}

.price-label {
    display: block;
    font-size: 0.8rem;
    color: var(--text-secondary);
    margin-bottom: 0.4rem;
}

.price-value {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary-color);
}

.currency {
    font-size: 1rem;
    font-weight: 500;
    margin-left: 0.25rem;
}

.pages-info {
    text-align: center;
    margin-top: 0.75rem;
    color: var(--text-secondary);
    font-weight: 500;
    font-size: 0.9rem;
}

.pages-info i {
    color: var(--primary-color);
    margin-right: 0.4rem;
}

/* Description & Features */
.card-description {
    margin-bottom: 1.25rem;
    color: var(--text-secondary);
    line-height: 1.6;
    font-size: 0.95rem;
}

.card-features {
    flex-grow: 1;
    margin-bottom: 1.25rem;
}

.features-title {
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--text-primary);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.75rem;
}

.features-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.features-list li {
    padding: 0.4rem 0;
    color: var(--text-secondary);
    font-size: 0.85rem;
    display: flex;
    align-items: flex-start;
    gap: 0.6rem;
}

.features-list i {
    color: var(--primary-color);
    font-size: 1rem;
    margin-top: 0.1rem;
}

.more-features {
    color: var(--primary-color) !important;
    font-weight: 600;
}

/* Actions */
.card-actions {
    display: flex;
    gap: 0.5rem;
}

.btn-demo,
.btn-details,
.btn-order {
    flex: 1;
    padding: 0.75rem 1rem;
    border-radius: var(--radius);
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.4rem;
    transition: all 0.3s ease;
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
}

.btn-details {
    background: var(--bg-light);
    color: var(--text-primary);
    border: 1px solid var(--border-color);
}

.btn-details:hover {
    background: var(--text-primary);
    color: white;
}

.btn-order {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
}

.btn-order:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(217, 118, 56, 0.25);
}

/* Paginação */
.pagination-wrapper {
    margin-top: 3rem;
}

.pagination {
    gap: 0.5rem;
}

.page-link {
    border: 1px solid var(--border-color);
    background: var(--bg-card);
    color: var(--text-primary);
    border-radius: var(--radius);
    padding: 0.5rem 0.75rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.page-link:hover {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.page-item.active .page-link {
    background: var(--primary-color);
    border-color: var(--primary-color);
    color: white;
}

/* Modal */
.modal-content {
    border-radius: var(--radius);
    border: 1px solid var(--border-color);
    background: var(--bg-card);
}

.modal-header {
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.08), rgba(184, 95, 48, 0.05));
    border-bottom: 1px solid var(--border-color);
    border-radius: var(--radius) var(--radius) 0 0;
}

.modal-title {
    color: var(--text-primary);
    font-weight: 700;
}

.modal-screenshots img {
    border-radius: var(--radius);
    border: 1px solid var(--border-color);
}

/* Responsivo */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .filters-buttons {
        flex-direction: column;
    }
    
    .filter-btn {
        width: 100%;
    }
    
    .card-actions {
        flex-wrap: wrap;
    }
    
    .btn-demo,
    .btn-details,
    .btn-order {
        flex: 1 1 calc(50% - 0.25rem);
    }
}
</style>

<?php 
get_part('includes/footer.php'); 
?>
