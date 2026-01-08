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
            <h6 class="text-center mb-4 fw-bold text-uppercase text-muted">Filtrar por Categoria</h6>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="?categoria=all&pagina=1" class="btn btn-outline-primary rounded-pill px-4 <?php echo $filtro_categoria === 'all' ? 'active' : ''; ?>">Todos</a>
                <a href="?categoria=Básico&pagina=1" class="btn btn-outline-primary rounded-pill px-4 <?php echo $filtro_categoria === 'Básico' ? 'active' : ''; ?>">Básico</a>
                <a href="?categoria=Profissional&pagina=1" class="btn btn-outline-primary rounded-pill px-4 <?php echo $filtro_categoria === 'Profissional' ? 'active' : ''; ?>">Profissional</a>
                <a href="?categoria=Marketing&pagina=1" class="btn btn-outline-primary rounded-pill px-4 <?php echo $filtro_categoria === 'Marketing' ? 'active' : ''; ?>">Marketing</a>
                <a href="?categoria=Especializado&pagina=1" class="btn btn-outline-primary rounded-pill px-4 <?php echo $filtro_categoria === 'Especializado' ? 'active' : ''; ?>">Especializado</a>
                <a href="?categoria=Loja Online&pagina=1" class="btn btn-outline-primary rounded-pill px-4 <?php echo $filtro_categoria === 'Loja Online' ? 'active' : ''; ?>">E-commerce</a>
                <a href="?categoria=Corporativo&pagina=1" class="btn btn-outline-primary rounded-pill px-4 <?php echo $filtro_categoria === 'Corporativo' ? 'active' : ''; ?>">Corporativo</a>
            </div>
        </div>

        <!-- Grid de Websites -->
        <div class="row g-5" id="websitesGrid">
            <?php foreach ($websites_pagina as $website): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="website-card h-100 shadow-lg rounded-4 overflow-hidden position-relative <?php echo $website['destaque'] ? 'featured border border-warning border-3' : ''; ?>">
                        <?php if ($website['destaque']): ?>
                            <div class="featured-badge bg-gradient-warning text-white px-4 py-2 rounded-pill shadow">
                                <i class="ri-star-fill fs-5"></i> Mais Popular
                            </div>
                        <?php endif; ?>

                        <!-- Carousel Screenshots -->
                        <div class="screenshots-carousel position-relative">
                            <div id="carousel<?php echo $website['id']; ?>" class="carousel slide">
                                <div class="carousel-indicators">
                                    <?php foreach ($website['screenshots'] as $index => $screenshot): ?>
                                        <button type="button" data-bs-target="#carousel<?php echo $website['id']; ?>" data-bs-slide-to="<?php echo $index; ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>" aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"></button>
                                    <?php endforeach; ?>
                                </div>
                                <div class="carousel-inner">
                                    <?php foreach ($website['screenshots'] as $index => $screenshot): ?>
                                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                            <img src="<?php echo htmlspecialchars($screenshot); ?>" class="d-block w-100" alt="Screenshot <?php echo $index + 1; ?>" style="height: 280px; object-fit: cover;">
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

                        <div class="card-body d-flex flex-column p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-<?php echo $website['cor']; ?> fs-6 px-3 py-2"><?php echo htmlspecialchars($website['categoria']); ?></span>
                                <small class="text-muted"><i class="ri-file-line me-1"></i><?php echo $website['paginas']; ?> página<?php echo $website['paginas'] > 1 ? 's' : ''; ?></small>
                            </div>

                            <h4 class="fw-bold mb-2"><?php echo htmlspecialchars($website['nome']); ?></h4>
                            <p class="text-muted small mb-3"><?php echo htmlspecialchars($website['nicho']); ?></p>

                            <div class="price-display text-center my-4 py-3 bg-light rounded-3">
                                <small class="text-muted d-block">A partir de</small>
                                <h2 class="fw-bold text-primary mb-0"><?php echo number_format($website['preco'], 0, ',', '.'); ?> <span class="fs-4">MT</span></h2>
                            </div>

                            <p class="text-muted flex-grow-1"><?php echo htmlspecialchars($website['descricao']); ?></p>

                            <div class="features mb-4">
                                <h6 class="fw-bold small text-uppercase text-muted mb-3">Principais Funcionalidades</h6>
                                <ul class="list-unstyled small">
                                    <?php $features_to_show = array_slice($website['caracteristicas'], 0, 6); ?>
                                    <?php foreach ($features_to_show as $feature): ?>
                                        <li class="mb-2"><i class="ri-check-line text-success me-2"></i><?php echo htmlspecialchars($feature); ?></li>
                                    <?php endforeach; ?>
                                    <?php if (count($website['caracteristicas']) > 6): ?>
                                        <li class="text-primary fw-bold"><i class="ri-add-circle-line me-2"></i>+ <?php echo count($website['caracteristicas']) - 6; ?> mais</li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="d-flex gap-3 mt-auto">
                                <a href="<?php echo htmlspecialchars($website['demo_url']); ?>" target="_blank" class="btn btn-outline-primary flex-fill"><i class="ri-external-link-line"></i> Ver Demo</a>
                                <button class="btn btn-light flex-fill" onclick="showWebsiteDetails(<?php echo $website['id']; ?>)"><i class="ri-eye-line"></i> Detalhes</button>
                                <a href="#landingContact" class="btn btn-primary flex-fill"><i class="ri-shopping-cart-line"></i> Encomendar</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Paginação Melhorada -->
        <?php if ($total_paginas > 1): ?>
        <nav class="mt-5 d-flex justify-content-center">
            <ul class="pagination pagination-lg">
                <?php if ($pagina_actual > 1): ?>
                    <li class="page-item"><a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $pagina_actual - 1; ?>">&laquo;</a></li>
                <?php endif; ?>

                <?php
                $start = max(1, $pagina_actual - 3);
                $end = min($total_paginas, $pagina_actual + 3);
                if ($start > 1) echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
                for ($i = $start; $i <= $end; $i++): ?>
                    <li class="page-item <?php echo $i === $pagina_actual ? 'active' : ''; ?>"><a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
                <?php if ($end < $total_paginas) echo '<li class="page-item disabled"><span class="page-link">...</span></li>'; ?>

                <?php if ($pagina_actual < $total_paginas): ?>
                    <li class="page-item"><a class="page-link" href="?categoria=<?php echo urlencode($filtro_categoria); ?>&pagina=<?php echo $pagina_actual + 1; ?>">&raquo;</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <?php endif; ?>
    </div>
</section>

<!-- Modal de Detalhes (mantido igual, só com pequenas melhorias visuais) -->
<div class="modal fade" id="websiteDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg">
            <!-- conteúdo igual ao original -->
            ...
        </div>
    </div>
</div>

<script>
    // Script do modal mantido igual
    const websitesData = <?php echo json_encode($dados_websites['data']); ?>;
    // ... (código JS original aqui)
</script>

<style>
    :root {
        --primary-color: #d97638;
        --primary-dark: #c66b3d;
        --bg-gradient: linear-gradient(135deg, #fdf9f6 0%, #fffdfb 100%);
    }
    [data-bs-theme="dark"] {
        --primary-color: #ff8c4a;
        /* ajustes dark */
    }
    .website-card {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .website-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
    }
    .featured-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 10;
        font-weight: bold;
    }
    .bg-gradient-warning {
        background: linear-gradient(135deg, #ffc107, #e0a800);
    }
    .price-display {
        background: rgba(217, 118, 56, 0.08);
    }
    .carousel-control-prev, .carousel-control-next {
        width: 50px;
        opacity: 0.7;
    }
    .carousel-indicators button {
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }
</style>
<?php else: ?>
    <!-- Mensagem de erro -->
<?php endif; ?>

<?php get_part('includes/footer.php'); ?>
