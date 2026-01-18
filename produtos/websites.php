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

$dados_websites = buscarDadosWebsites();

get_part('includes/header.php'); 
?>
<link rel="stylesheet" href="/assets/css/produtos.css">

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
                <button class="filter-btn active" data-categoria="all">
                    <i class="ri-layout-grid-line"></i>
                    <span>Todos</span>
                </button>
                <button class="filter-btn" data-categoria="Básico">
                    <i class="ri-file-text-line"></i>
                    <span>Básico</span>
                </button>
                <button class="filter-btn" data-categoria="Profissional">
                    <i class="ri-briefcase-line"></i>
                    <span>Profissional</span>
                </button>
                <button class="filter-btn" data-categoria="Especializado">
                    <i class="ri-star-line"></i>
                    <span>Especializado</span>
                </button>
                <button class="filter-btn" data-categoria="Loja Online">
                    <i class="ri-shopping-cart-line"></i>
                    <span>E-commerce</span>
                </button>
                <button class="filter-btn" data-categoria="Corporativo">
                    <i class="ri-building-line"></i>
                    <span>Corporativo</span>
                </button>
            </div>
        </div>

        <!-- Grid de Websites -->
        <div class="row g-4 mb-5" id="websitesGrid">
            <!-- Conteúdo será carregado via JavaScript -->
        </div>

        <!-- Paginação -->
        <nav class="pagination-wrapper" id="paginationWrapper" style="display: none;">
            <div class="pagination-info">
                <span class="pagination-text" id="paginationInfo"></span>
            </div>
            <ul class="pagination" id="paginationButtons"></ul>
        </nav>

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
// Dados dos websites
const websitesData = <?php echo json_encode($dados_websites['data']); ?>;

// Configuração
const ITEMS_POR_PAGINA = 4;
let paginaActual = 1;
let categoriaActual = 'all';

// Inicializar
document.addEventListener('DOMContentLoaded', function() {
    renderizarWebsites();
    configurarFiltros();
});

// Filtrar websites
function filtrarWebsites() {
    if (categoriaActual === 'all') {
        return websitesData;
    }
    return websitesData.filter(w => w.categoria === categoriaActual);
}

// Renderizar websites
function renderizarWebsites() {
    const websitesFiltrados = filtrarWebsites();
    const totalItems = websitesFiltrados.length;
    const totalPaginas = Math.ceil(totalItems / ITEMS_POR_PAGINA);
    const offset = (paginaActual - 1) * ITEMS_POR_PAGINA;
    const websitesPagina = websitesFiltrados.slice(offset, offset + ITEMS_POR_PAGINA);
    
    // Renderizar grid
    const grid = document.getElementById('websitesGrid');
    grid.innerHTML = websitesPagina.map((website, index) => criarCardWebsite(website, index)).join('');
    
    // Renderizar paginação
    if (totalPaginas > 1) {
        renderizarPaginacao(totalItems, totalPaginas);
    } else {
        document.getElementById('paginationWrapper').style.display = 'none';
    }
    
    // Scroll suave para o topo da lista
    if (paginaActual > 1) {
        document.getElementById('websitesList').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

// Criar card de website
function criarCardWebsite(website, index) {
    const featuresShow = website.caracteristicas.slice(0, 5);
    const maisFeatures = website.caracteristicas.length - 5;
    
    return `
        <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="${index * 100}">
            <div class="website-card ${website.destaque ? 'featured' : ''}">
                ${website.destaque ? `
                    <div class="featured-badge">
                        <i class="ri-vip-crown-fill"></i>
                        <span>Mais Popular</span>
                    </div>
                ` : ''}
                
                <div class="card-layout">
                    <div class="screenshots-section">
                        <div id="carousel${website.id}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                ${website.screenshots.map((_, i) => `
                                    <button type="button" 
                                            data-bs-target="#carousel${website.id}" 
                                            data-bs-slide-to="${i}" 
                                            class="${i === 0 ? 'active' : ''}">
                                    </button>
                                `).join('')}
                            </div>
                            <div class="carousel-inner">
                                ${website.screenshots.map((screenshot, i) => `
                                    <div class="carousel-item ${i === 0 ? 'active' : ''}">
                                        <img src="${screenshot}" class="d-block w-100" alt="${website.nome}">
                                    </div>
                                `).join('')}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel${website.id}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel${website.id}" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-header-section">
                            <div class="category-badge badge-${website.cor}">
                                ${website.categoria}
                            </div>
                            <h3 class="website-name">${website.nome}</h3>
                            <p class="website-nicho">
                                <i class="ri-focus-3-line"></i>
                                ${website.nicho}
                            </p>
                        </div>

                        <div class="card-pricing">
                            <div class="pricing-main">
                                <span class="price-label">A partir de</span>
                                <div class="price-amount">
                                    <span class="price-value">${website.preco.toLocaleString('pt-MZ')}</span>
                                    <span class="price-currency">MT</span>
                                </div>
                            </div>
                            <div class="pricing-detail">
                                <i class="ri-file-list-3-line"></i>
                                <span>${website.paginas} página${website.paginas > 1 ? 's' : ''}</span>
                            </div>
                        </div>

                        <p class="card-description">${website.descricao}</p>

                        <div class="card-features">
                            <h6 class="features-title">
                                <i class="ri-checkbox-circle-line"></i>
                                Características principais
                            </h6>
                            <ul class="features-list">
                                ${featuresShow.map(feature => `
                                    <li>
                                        <i class="ri-check-line"></i>
                                        <span>${feature}</span>
                                    </li>
                                `).join('')}
                                ${maisFeatures > 0 ? `
                                    <li class="more-features">
                                        <i class="ri-add-circle-line"></i>
                                        <span>Mais ${maisFeatures} funcionalidades</span>
                                    </li>
                                ` : ''}
                            </ul>
                        </div>

                        <div class="card-actions">
                            <a href="${website.demo_url}" target="_blank" class="btn-action btn-demo">
                                <i class="ri-external-link-line"></i>
                                <span>Ver Demo</span>
                            </a>
                            <button class="btn-action btn-details" onclick="showWebsiteDetails(${website.id})">
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
    `;
}

// Renderizar paginação
function renderizarPaginacao(totalItems, totalPaginas) {
    const wrapper = document.getElementById('paginationWrapper');
    const info = document.getElementById('paginationInfo');
    const buttons = document.getElementById('paginationButtons');
    
    wrapper.style.display = 'block';
    
    info.innerHTML = `
        Página <strong>${paginaActual}</strong> de <strong>${totalPaginas}</strong>
        <span class="separator">•</span>
        <strong>${totalItems}</strong> ${totalItems === 1 ? 'resultado' : 'resultados'}
    `;
    
    let html = '';
    
    // Botão anterior
    if (paginaActual > 1) {
        html += `
            <li class="page-item">
                <a class="page-link" href="#" onclick="mudarPagina(${paginaActual - 1}); return false;">
                    <i class="ri-arrow-left-s-line"></i>
                    <span class="d-none d-sm-inline">Anterior</span>
                </a>
            </li>
        `;
    }
    
    // Páginas
    const start = Math.max(1, paginaActual - 2);
    const end = Math.min(totalPaginas, paginaActual + 2);
    
    if (start > 1) {
        html += `<li class="page-item"><a class="page-link" href="#" onclick="mudarPagina(1); return false;">1</a></li>`;
        if (start > 2) {
            html += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
        }
    }
    
    for (let i = start; i <= end; i++) {
        html += `
            <li class="page-item ${i === paginaActual ? 'active' : ''}">
                <a class="page-link" href="#" onclick="mudarPagina(${i}); return false;">${i}</a>
            </li>
        `;
    }
    
    if (end < totalPaginas) {
        if (end < totalPaginas - 1) {
            html += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
        }
        html += `<li class="page-item"><a class="page-link" href="#" onclick="mudarPagina(${totalPaginas}); return false;">${totalPaginas}</a></li>`;
    }
    
    // Botão próxima
    if (paginaActual < totalPaginas) {
        html += `
            <li class="page-item">
                <a class="page-link" href="#" onclick="mudarPagina(${paginaActual + 1}); return false;">
                    <span class="d-none d-sm-inline">Próxima</span>
                    <i class="ri-arrow-right-s-line"></i>
                </a>
            </li>
        `;
    }
    
    buttons.innerHTML = html;
}

// Mudar página
function mudarPagina(pagina) {
    paginaActual = pagina;
    renderizarWebsites();
}

// Configurar filtros
function configurarFiltros() {
    const botoesFiltro = document.querySelectorAll('.filter-btn');
    
    botoesFiltro.forEach(botao => {
        botao.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remover active de todos
            botoesFiltro.forEach(b => b.classList.remove('active'));
            
            // Adicionar active ao clicado
            this.classList.add('active');
            
            // Actualizar categoria e resetar página
            categoriaActual = this.dataset.categoria;
            paginaActual = 1;
            
            // Renderizar
            renderizarWebsites();
        });
    });
}

// Mostrar detalhes do website (função global)
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
