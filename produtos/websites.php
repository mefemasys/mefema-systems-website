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

// Configuração de paginação - 4 itens por página
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

<?php if ($dados_websites): ?>
<section class="section-py landing-websites-list" id="websitesList">
    <div class="container">
       
        <!-- Filtros -->
        <div class="filters-wrapper mb-5 p-4 shadow-sm">
            <div class="text-center mb-4">
                <h5 class="filter-label mb-0">Filtrar por Categoria</h5>
            </div>
            <div class="filters-buttons text-center d-flex flex-wrap justify-content-center gap-3">
                <a href="?categoria=all&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'all' ? 'active' : ''; ?>">
                    <i class="ri-apps-2-line"></i> Todos
                </a>
                <a href="?categoria=Básico&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Básico' ? 'active' : ''; ?>">
                    Básico
                </a>
                <a href="?categoria=Profissional&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Profissional' ? 'active' : ''; ?>">
                    Profissional
                </a>
                <a href="?categoria=Marketing&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Marketing' ? 'active' : ''; ?>">
                    Marketing
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

        <!-- Grid de Websites - 4 colunas em LG -->
        <div class="row g-4" id="websitesGrid">
            <?php foreach ($websites_pagina as $website): ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="website-card <?php echo $website['destaque'] ? 'featured shadow-lg' : 'shadow'; ?> h-100">
                       
                        <?php if ($website['destaque']): ?>
                            <div class="featured-badge">
                                <i class="ri-star-fill"></i> Mais Popular
                            </div>
                        <?php endif; ?>
                       
                        <!-- Screenshots Carousel -->
                        <div class="screenshots-carousel position-relative">
                            <div id="carousel<?php echo $website['id']; ?>" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <?php foreach ($website['screenshots'] as $index => $screenshot): ?>
                                        <button type="button" data-bs-target="#carousel<?php echo $website['id']; ?>" data-bs-slide-to="<?php echo $index; ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>"></button>
                                    <?php endforeach; ?>
                                </div>
                                <div class="carousel-inner rounded-top">
                                    <?php foreach ($website['screenshots'] as $index => $screenshot): ?>
                                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                            <img src="<?php echo htmlspecialchars($screenshot); ?>" class="d-block w-100" alt="Screenshot <?php echo $index + 1; ?>" style="height: 220px; object-fit: cover;">
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

                        <div class="card-content p-4 d-flex flex-column">
                            <div class="card-header-custom mb-3">
                                <span class="category-badge badge-<?php echo htmlspecialchars($website['cor']); ?>">
                                    <?php echo htmlspecialchars($website['categoria']); ?>
                                </span>
                                <h5 class="website-name mt-2"><?php echo htmlspecialchars($website['nome']); ?></h5>
                                <p class="website-nicho text-muted small"><?php echo htmlspecialchars($website['nicho']); ?></p>
                            </div>

                            <div class="card-pricing bg-light p-3 rounded mb-3 text-center">
                                <small class="text-muted">A partir de</small>
                                <div class="price-value fw-bold text-primary h3 mb-0">
                                    <?php echo number_format($website['preco'], 0, ',', '.'); ?> <span class="h5">MT</span>
                                </div>
                                <small class="text-muted"><i class="ri-file-list-3-line"></i> <?php echo $website['paginas']; ?> página<?php echo $website['paginas'] > 1 ? 's' : ''; ?></small>
                            </div>

                            <p class="card-description flex-grow-1 small text-muted"><?php echo htmlspecialchars($website['descricao']); ?></p>

                            <div class="card-features mb-4">
                                <small class="fw-bold text-uppercase text-primary">Inclui:</small>
                                <ul class="features-list small mt-2">
                                    <?php
                                    $features_to_show = array_slice($website['caracteristicas'], 0, 5);
                                    foreach ($features_to_show as $feature):
                                    ?>
                                        <li><i class="ri-check-line text-success"></i> <?php echo htmlspecialchars($feature); ?></li>
                                    <?php endforeach; ?>
                                    <?php if (count($website['caracteristicas']) > 5): ?>
                                        <li class="text-primary fw-bold"><i class="ri-add-line"></i> + <?php echo count($website['caracteristicas']) - 5; ?> funcionalidades</li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="card-actions d-grid gap-2 d-md-flex">
                                <a href="<?php echo htmlspecialchars($website['demo_url']); ?>" target="_blank" class="btn btn-outline-primary">
                                    <i class="ri-external-link-line"></i> Ver Demo
                                </a>
                                <button class="btn btn-light border" onclick="showWebsiteDetails(<?php echo $website['id']; ?>)">
                                    <i class="ri-eye-line"></i> Detalhes
                                </button>
                                <a href="#landingContact" class="btn btn-primary">
                                    <i class="ri-shopping-cart-line"></i> Encomendar
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
                        <a class="page-link rounded-start" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $pagina_actual - 1; ?>">Anterior</a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                    <li class="page-item <?php echo $i === $pagina_actual ? 'active' : ''; ?>">
                        <a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($pagina_actual < $total_paginas): ?>
                    <li class="page-item">
                        <a class="page-link rounded-end" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $pagina_actual + 1; ?>">Próximo</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
        <?php endif; ?>
    </div>
</section>

<!-- Modal de Detalhes (mantido igual, só com pequenos ajustes de estilo) -->
<div class="modal fade" id="websiteDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded shadow-lg">
            <!-- ... (o conteúdo do modal permanece o mesmo que tinhas) ... -->
        </div>
    </div>
</div>

<script>
// (o script do modal permanece exatamente o mesmo)
const websitesData = <?php echo json_encode($dados_websites['data']); ?>;
function showWebsiteDetails(id) {
    // ... (código igual ao original)
}
</script>

<style>
/* CSS aprimorado - mais clean, moderno e responsivo */
:root {
    --primary-color: #d97638;
    --primary-dark: #c66b3d;
    --text-primary: #5a3a28;
    --text-secondary: #74523d;
    --bg-light: #fdf9f6;
    --bg-card: #ffffff;
}

[data-bs-theme="dark"] {
    --primary-color: #ff8c4a;
    --primary-dark: #e07a3d;
    --text-primary: #e8ddd4;
    --text-secondary: #c4b5aa;
    --bg-light: #1a1410;
    --bg-card: #2a1f1a;
}

.landing-websites-list { background: var(--bg-light); padding: 4rem 0; }

.filters-wrapper { background: var(--bg-card); border-radius: 12px; }

.filter-btn {
    padding: 0.75rem 1.5rem;
    border: 2px solid transparent;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.4s ease;
    color: var(--text-secondary);
}

.filter-btn:hover, .filter-btn.active {
    background: var(--primary-color) !important;
    color: white;
    border-color: var(--primary-color);
    transform: scale(1.05);
}

.website-card {
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.4s ease;
    border: none;
}

.website-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
}

.featured { border: 3px solid var(--primary-color); }

.featured-badge {
    top: 12px; right: 12px;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.screenshots-carousel img { transition: opacity 0.5s; }

.carousel-control-prev, .carousel-control-next { opacity: 0.7; width: 50px; }

.website-card:hover .carousel-control-prev,
.website-card:hover .carousel-control-next { opacity: 1; }

.card-actions .btn { border-radius: 50px; font-weight: 600; }

.pagination .page-link {
    border-radius: 50px !important;
    margin: 0 4px;
    min-width: 44px;
    text-align: center;
}

.pagination .page-item.active .page-link {
    background: var(--primary-color);
    border-color: var(--primary-color);
}

/* Responsivo extra */
@media (max-width: 992px) {
    .col-lg-3 { flex: 0 0 50%; max-width: 50%; }
}
</style>
<?php else: ?>
<div class="container my-5 py-5 text-center">
    <div class="alert alert-danger">
        <i class="ri-error-warning-line"></i> Erro ao carregar os pacotes de websites.
    </div>
</div>
<?php endif; ?>

<?php get_part('includes/footer.php'); ?>
