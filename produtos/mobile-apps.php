<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';

$pageTitle = "Apps Móveis - MEFEMA Systems";

/**
 * Função para simular busca de dados da API de Apps Móveis
 */
function buscarDadosAppMoveis() {
    $json_string = '{
      "sucesso": true,
      "total": 10,
      "data": [
        {
          "id": 1,
          "nome": "App E-commerce Completo",
          "categoria": "Comércio",
          "nicho": "Lojas Online",
          "plataformas": ["Android", "iOS"],
          "preco": 125000,
          "descricao": "Aplicação móvel completa para e-commerce com carrinho, pagamentos e gestão de pedidos",
          "screenshots": [
            "/assets/img/apps/ecommerce-home.jpg",
            "/assets/img/apps/ecommerce-produtos.jpg",
            "/assets/img/apps/ecommerce-carrinho.jpg",
            "/assets/img/apps/ecommerce-perfil.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-ecommerce",
          "caracteristicas": [
            "Publicação Play Store e App Store",
            "Catálogo de produtos interactivo",
            "Carrinho de compras inteligente",
            "Pagamentos M-Pesa/E-Mola integrados",
            "Notificações push personalizadas",
            "Rastreamento de pedidos em tempo real",
            "Sistema de avaliações e reviews",
            "Wishlist e favoritos",
            "Geolocalização para entregas",
            "Funcionamento offline com sincronização",
            "UI/UX moderna e intuitiva",
            "Painel administrativo web",
            "Chat de suporte integrado",
            "Relatórios de vendas",
            "Suporte técnico (12 meses)"
          ],
          "destaque": true,
          "cor": "success"
        },
        {
          "id": 2,
          "nome": "App Delivery Restaurante",
          "categoria": "Alimentação",
          "nicho": "Restaurantes e Delivery",
          "plataformas": ["Android", "iOS"],
          "preco": 95000,
          "descricao": "App de delivery completo para restaurantes com rastreamento em tempo real",
          "screenshots": [
            "/assets/img/apps/delivery-home.jpg",
            "/assets/img/apps/delivery-menu.jpg",
            "/assets/img/apps/delivery-tracking.jpg",
            "/assets/img/apps/delivery-pedido.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-delivery",
          "caracteristicas": [
            "Publicação em ambas lojas",
            "Menu digital interactivo com fotos",
            "Sistema de pedidos em tempo real",
            "Pagamentos móveis integrados",
            "Rastreamento GPS do entregador",
            "Notificações de status do pedido",
            "Histórico de pedidos",
            "Sistema de cupons e promoções",
            "Avaliação de pedidos",
            "Geolocalização automática",
            "Funcionamento offline",
            "Chat com restaurante",
            "Painel para restaurante",
            "App para entregadores",
            "Suporte prioritário (10 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 3,
          "nome": "App Transportes e Taxi",
          "categoria": "Transporte",
          "nicho": "Mobilidade Urbana",
          "plataformas": ["Android", "iOS"],
          "preco": 150000,
          "descricao": "Aplicação completa tipo Uber para serviços de transporte e taxi",
          "screenshots": [
            "/assets/img/apps/taxi-home.jpg",
            "/assets/img/apps/taxi-mapa.jpg",
            "/assets/img/apps/taxi-viagem.jpg",
            "/assets/img/apps/taxi-pagamento.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-taxi",
          "caracteristicas": [
            "Publicação Google Play e App Store",
            "Geolocalização em tempo real",
            "Sistema de matching motorista/passageiro",
            "Cálculo automático de tarifas",
            "Múltiplos métodos de pagamento",
            "Rastreamento da viagem ao vivo",
            "Sistema de avaliações bilateral",
            "Notificações push instantâneas",
            "Histórico de viagens",
            "Chamadas de emergência",
            "App separado para motoristas",
            "Painel administrativo completo",
            "Sistema de comissões",
            "Relatórios financeiros",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": true,
          "cor": "warning"
        },
        {
          "id": 4,
          "nome": "App Fitness e Academia",
          "categoria": "Saúde",
          "nicho": "Fitness e Bem-estar",
          "plataformas": ["Android", "iOS"],
          "preco": 78000,
          "descricao": "Aplicação fitness com treinos, nutrição e acompanhamento personalizado",
          "screenshots": [
            "/assets/img/apps/fitness-home.jpg",
            "/assets/img/apps/fitness-treinos.jpg",
            "/assets/img/apps/fitness-progresso.jpg",
            "/assets/img/apps/fitness-nutricao.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-fitness",
          "caracteristicas": [
            "Publicação nas lojas oficiais",
            "Biblioteca de exercícios com vídeos",
            "Planos de treino personalizados",
            "Acompanhamento de progresso",
            "Calculadora de calorias",
            "Planos alimentares",
            "Notificações de treino",
            "Integração com wearables",
            "Estatísticas e gráficos",
            "Funcionamento offline",
            "UI/UX motivacional",
            "Sistema de metas",
            "Chat com personal trainer",
            "Suporte técnico (8 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 5,
          "nome": "App Gestão Escolar",
          "categoria": "Educação",
          "nicho": "Escolas e Universidades",
          "plataformas": ["Android", "iOS"],
          "preco": 110000,
          "descricao": "Sistema móvel completo para gestão escolar, alunos e comunicação com pais",
          "screenshots": [
            "/assets/img/apps/escolar-home.jpg",
            "/assets/img/apps/escolar-notas.jpg",
            "/assets/img/apps/escolar-horarios.jpg",
            "/assets/img/apps/escolar-comunicacao.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-escolar",
          "caracteristicas": [
            "Publicação Play Store e App Store",
            "Consulta de notas e faltas",
            "Horário de aulas interactivo",
            "Calendário escolar",
            "Notificações para pais",
            "Sistema de mensagens",
            "Pagamentos de propinas móveis",
            "Biblioteca digital",
            "Tarefas e trabalhos de casa",
            "Boletim electrónico",
            "Comunicados da escola",
            "Painel para professores",
            "Sincronização automática",
            "Suporte prioritário (10 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 6,
          "nome": "App Telemedicina",
          "categoria": "Saúde",
          "nicho": "Serviços Médicos",
          "plataformas": ["Android", "iOS"],
          "preco": 135000,
          "descricao": "Plataforma móvel para consultas médicas online e gestão de saúde",
          "screenshots": [
            "/assets/img/apps/telemedicina-home.jpg",
            "/assets/img/apps/telemedicina-consulta.jpg",
            "/assets/img/apps/telemedicina-historico.jpg",
            "/assets/img/apps/telemedicina-receitas.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-telemedicina",
          "caracteristicas": [
            "Publicação em ambas lojas",
            "Videochamadas médicas HD",
            "Agendamento de consultas",
            "Prontuário electrónico",
            "Receitas digitais",
            "Pagamentos integrados",
            "Notificações de medicação",
            "Histórico médico completo",
            "Chat com médicos",
            "Resultados de exames",
            "Geolocalização de clínicas",
            "Sistema de emergência",
            "App para médicos",
            "Conformidade LGPD",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 7,
          "nome": "App Rede Social Nichada",
          "categoria": "Social",
          "nicho": "Comunidades e Networking",
          "plataformas": ["Android", "iOS"],
          "preco": 145000,
          "descricao": "Rede social móvel customizada para comunidades específicas",
          "screenshots": [
            "/assets/img/apps/social-feed.jpg",
            "/assets/img/apps/social-perfil.jpg",
            "/assets/img/apps/social-chat.jpg",
            "/assets/img/apps/social-grupos.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-social",
          "caracteristicas": [
            "Publicação Google Play e App Store",
            "Feed personalizado com algoritmo",
            "Sistema de posts multimídia",
            "Stories temporários",
            "Chat privado e em grupo",
            "Notificações push em tempo real",
            "Sistema de seguir/seguidores",
            "Grupos e comunidades",
            "Eventos e calendário",
            "Geolocalização de posts",
            "Sistema de moderação",
            "Reações e comentários",
            "Compartilhamento social",
            "Painel administrativo",
            "Suporte técnico (12 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 8,
          "nome": "App Imobiliária",
          "categoria": "Negócios",
          "nicho": "Imóveis e Propriedades",
          "plataformas": ["Android", "iOS"],
          "preco": 88000,
          "descricao": "Aplicação para compra, venda e arrendamento de imóveis",
          "screenshots": [
            "/assets/img/apps/imoveis-home.jpg",
            "/assets/img/apps/imoveis-listagem.jpg",
            "/assets/img/apps/imoveis-detalhes.jpg",
            "/assets/img/apps/imoveis-mapa.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-imoveis",
          "caracteristicas": [
            "Publicação nas lojas oficiais",
            "Catálogo de imóveis com fotos 360°",
            "Busca avançada por filtros",
            "Geolocalização e mapas",
            "Tour virtual dos imóveis",
            "Sistema de favoritos",
            "Notificações de novos imóveis",
            "Agendamento de visitas",
            "Chat com corretores",
            "Calculadora de financiamento",
            "Comparação de imóveis",
            "Funcionamento offline",
            "Painel para imobiliárias",
            "Suporte técnico (8 meses)"
          ],
          "destaque": false,
          "cor": "success"
        },
        {
          "id": 9,
          "nome": "App Gestão de Tarefas",
          "categoria": "Produtividade",
          "nicho": "Gestão e Organização",
          "plataformas": ["Android", "iOS"],
          "preco": 55000,
          "descricao": "App de produtividade para gestão de tarefas, projetos e equipas",
          "screenshots": [
            "/assets/img/apps/tarefas-home.jpg",
            "/assets/img/apps/tarefas-board.jpg",
            "/assets/img/apps/tarefas-calendario.jpg",
            "/assets/img/apps/tarefas-estatisticas.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-tarefas",
          "caracteristicas": [
            "Publicação Play Store e App Store",
            "Criação de tarefas e subtarefas",
            "Quadros Kanban",
            "Calendário integrado",
            "Lembretes e notificações",
            "Colaboração em equipa",
            "Anexos e comentários",
            "Prioridades e etiquetas",
            "Estatísticas de produtividade",
            "Funcionamento offline completo",
            "Sincronização multi-dispositivo",
            "UI/UX minimalista",
            "Temas escuro e claro",
            "Suporte técnico (6 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        },
        {
          "id": 10,
          "nome": "App Marketplace Multi-vendedor",
          "categoria": "Comércio",
          "nicho": "Marketplace e Classificados",
          "plataformas": ["Android", "iOS"],
          "preco": 165000,
          "descricao": "Marketplace completo estilo OLX/Jumia para múltiplos vendedores",
          "screenshots": [
            "/assets/img/apps/marketplace-home.jpg",
            "/assets/img/apps/marketplace-categorias.jpg",
            "/assets/img/apps/marketplace-produto.jpg",
            "/assets/img/apps/marketplace-chat.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-marketplace",
          "caracteristicas": [
            "Publicação Google Play e App Store",
            "Sistema multi-vendedor",
            "Categorias ilimitadas",
            "Busca inteligente com filtros",
            "Pagamentos seguros integrados",
            "Sistema de comissões automático",
            "Chat entre compradores e vendedores",
            "Avaliações e reputação",
            "Notificações push personalizadas",
            "Geolocalização de produtos",
            "Painel vendedor e admin",
            "Sistema de denúncias",
            "Anúncios patrocinados",
            "Relatórios completos",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": true,
          "cor": "info"
        }
      ]
    }';
    
    $dados = json_decode($json_string, true);
    return $dados && $dados['sucesso'] === true ? $dados : null;
}

$dados_apps = buscarDadosAppMoveis();

get_part('includes/header.php'); 
?>
<link rel="stylesheet" href="/assets/css/produtos.css">

<!-- Hero Section -->
<section class="landing-hero-websites">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="hero-badge mb-4" data-aos="fade-up">
                    <i class="ri-smartphone-line text-primary"></i>
                    <span class="badge-text">Desenvolvimento Mobile Premium</span>
                </div>
                <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                    Apps <span class="text-gradient">Móveis</span>
                </h1>
                <p class="hero-subtitle mx-auto mb-4" data-aos="fade-up" data-aos-delay="200">
                    Aplicações nativas para Android e iOS. Design moderno, performance excepcional e experiência do usuário impecável.
                </p>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <i class="ri-google-play-fill"></i>
                        <strong>Play Store</strong>
                        <span>Publicação</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-apple-fill"></i>
                        <strong>App Store</strong>
                        <span>Publicação</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-award-line"></i>
                        <strong>UI/UX</strong>
                        <span>Premium</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Apps List -->
<?php if ($dados_apps): ?>
<section class="section-py landing-websites-list" id="appsList">
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
                <button class="filter-btn" data-categoria="Comércio">
                    <i class="ri-shopping-cart-line"></i>
                    <span>Comércio</span>
                </button>
                <button class="filter-btn" data-categoria="Saúde">
                    <i class="ri-heart-pulse-line"></i>
                    <span>Saúde</span>
                </button>
                <button class="filter-btn" data-categoria="Transporte">
                    <i class="ri-taxi-line"></i>
                    <span>Transporte</span>
                </button>
                <button class="filter-btn" data-categoria="Educação">
                    <i class="ri-book-line"></i>
                    <span>Educação</span>
                </button>
                <button class="filter-btn" data-categoria="Social">
                    <i class="ri-team-line"></i>
                    <span>Social</span>
                </button>
                <button class="filter-btn" data-categoria="Negócios">
                    <i class="ri-briefcase-line"></i>
                    <span>Negócios</span>
                </button>
            </div>
        </div>

        <!-- Grid de Apps -->
        <div class="row g-4 mb-5" id="appsGrid">
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
<div class="modal fade" id="appDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAppName"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalAppContent"></div>
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
// Dados dos apps
const appsData = <?php echo json_encode($dados_apps['data']); ?>;

// Configuração
const ITEMS_POR_PAGINA = 4;
let paginaActual = 1;
let categoriaActual = 'all';

// Inicializar
document.addEventListener('DOMContentLoaded', function() {
    renderizarApps();
    configurarFiltros();
});

// Filtrar apps
function filtrarApps() {
    if (categoriaActual === 'all') {
        return appsData;
    }
    return appsData.filter(a => a.categoria === categoriaActual);
}

// Renderizar apps
function renderizarApps() {
    const appsFiltrados = filtrarApps();
    const totalItems = appsFiltrados.length;
    const totalPaginas = Math.ceil(totalItems / ITEMS_POR_PAGINA);
    const offset = (paginaActual - 1) * ITEMS_POR_PAGINA;
    const appsPagina = appsFiltrados.slice(offset, offset + ITEMS_POR_PAGINA);
    
    // Renderizar grid
    const grid = document.getElementById('appsGrid');
    grid.innerHTML = appsPagina.map((app, index) => criarCardApp(app, index)).join('');
    
    // Renderizar paginação
    if (totalPaginas > 1) {
        renderizarPaginacao(totalItems, totalPaginas);
    } else {
        document.getElementById('paginationWrapper').style.display = 'none';
    }
    
    // Scroll suave para o topo da lista
    if (paginaActual > 1) {
        document.getElementById('appsList').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

// Criar card de app
function criarCardApp(app, index) {
    const featuresShow = app.caracteristicas.slice(0, 5);
    const maisFeatures = app.caracteristicas.length - 5;
    
    const plataformasIcons = app.plataformas.map(p => {
        if (p === 'Android') return '<i class="ri-google-play-fill"></i>';
        if (p === 'iOS') return '<i class="ri-apple-fill"></i>';
        return '';
    }).join('');
    
    return `
        <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="${index * 100}">
            <div class="website-card ${app.destaque ? 'featured' : ''}">
                ${app.destaque ? `
                    <div class="featured-badge">
                        <i class="ri-vip-crown-fill"></i>
                        <span>Mais Popular</span>
                    </div>
                ` : ''}
                
                <div class="card-layout">
                    <div class="screenshots-section">
                        <div id="carousel${app.id}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                ${app.screenshots.map((_, i) => `
                                    <button type="button" 
                                            data-bs-target="#carousel${app.id}" 
                                            data-bs-slide-to="${i}" 
                                            class="${i === 0 ? 'active' : ''}">
                                    </button>
                                `).join('')}
                            </div>
                            <div class="carousel-inner">
                                ${app.screenshots.map((screenshot, i) => `
                                    <div class="carousel-item ${i === 0 ? 'active' : ''}">
                                        <img src="${screenshot}" class="d-block w-100" alt="${app.nome}">
                                    </div>
                                `).join('')}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel${app.id}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel${app.id}" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-header-section">
                            <div class="category-badge badge-${app.cor}">
                                ${app.categoria}
                            </div>
                            <h3 class="website-name">${app.nome}</h3>
                            <p class="website-nicho">
                                <i class="ri-focus-3-line"></i>
                                ${app.nicho}
                            </p>
                        </div>

                        <div class="card-pricing">
                            <div class="pricing-main">
                                <span class="price-label">A partir de</span>
                                <div class="price-amount">
                                    <span class="price-value">${app.preco.toLocaleString('pt-MZ')}</span>
                                    <span class="price-currency">MT</span>
                                </div>
                            </div>
                            <div class="pricing-detail">
                                ${plataformasIcons}
                                <span>${app.plataformas.join(' + ')}</span>
                            </div>
                        </div>

                        <p class="card-description">${app.descricao}</p>

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
                            <a href="${app.demo_url}" target="_blank" class="btn-action btn-demo">
                                <i class="ri-external-link-line"></i>
                                <span>Ver Demo</span>
                            </a>
                            <button class="btn-action btn-details" onclick="showAppDetails(${app.id})">
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
    renderizarApps();
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
            renderizarApps();
        });
    });
}

// Mostrar detalhes do app (função global)
function showAppDetails(id) {
    const app = appsData.find(a => a.id === id);
    if (!app) return;
    
    const plataformasHTML = app.plataformas.map(p => {
        let icon = '';
        if (p === 'Android') icon = '<i class="ri-google-play-fill text-success"></i>';
        if (p === 'iOS') icon = '<i class="ri-apple-fill text-dark"></i>';
        return `<span class="badge bg-light text-dark me-2 mb-2">${icon} ${p}</span>`;
    }).join('');
    
    document.getElementById('modalAppName').innerHTML = `
        <i class="ri-smartphone-line me-2"></i>${app.nome}
    `;
    
    let screenshotsHTML = '<div class="modal-screenshots mb-4"><div class="row g-3">';
    app.screenshots.forEach((screenshot, index) => {
        screenshotsHTML += `
            <div class="col-md-6">
                <img src="${screenshot}" class="img-fluid rounded shadow-sm" alt="Screenshot ${index + 1}">
            </div>
        `;
    });
    screenshotsHTML += '</div></div>';
    
    let featuresHTML = '<ul class="list-unstyled row g-2">';
    app.caracteristicas.forEach(feature => {
        featuresHTML += `
            <li class="col-md-6 mb-2">
                <i class="ri-checkbox-circle-fill text-success me-2"></i>${feature}
            </li>
        `;
    });
    featuresHTML += '</ul>';
    
    document.getElementById('modalAppContent').innerHTML = `
        ${screenshotsHTML}
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-information-line me-2"></i>Informações Gerais</h6>
                    <div class="info-item">
                        <span class="info-label">Categoria:</span>
                        <span class="info-value">${app.categoria}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Nicho:</span>
                        <span class="info-value">${app.nicho}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Plataformas:</span>
                        <div class="info-value">${plataformasHTML}</div>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Preço:</span>
                        <span class="info-value text-primary fw-bold">${app.preco.toLocaleString('pt-MZ')} MT</span>
                    </div>
                    <a href="${app.demo_url}" target="_blank" class="btn btn-outline-primary mt-3 w-100">
                        <i class="ri-external-link-line me-2"></i>Ver Demo ao Vivo
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-file-text-line me-2"></i>Descrição</h6>
                    <p>${app.descricao}</p>
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
    
    const modal = new bootstrap.Modal(document.getElementById('appDetailsModal'));
    modal.show();
}
</script>

<?php else: ?>
<div class="container my-5 py-5">
    <div class="alert alert-danger text-center">
        <i class="ri-error-warning-line me-2"></i>
        Erro ao carregar os apps móveis.
    </div>
</div>
<?php endif; ?>

<?php get_part('includes/footer.php'); ?>
