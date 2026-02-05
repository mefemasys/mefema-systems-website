<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';

$pageTitle = "Soluções IA + IoT - MEFEMA Systems";

/**
 * Função para simular busca de dados da API de Soluções IA + IoT
 */
function buscarDadosIAIoT() {
    $json_string = '{
      "sucesso": true,
      "total": 8,
      "data": [
        {
          "id": 1,
          "nome": "Chatbot WhatsApp Business",
          "categoria": "Inteligência Artificial",
          "nicho": "Atendimento ao Cliente",
          "modulos": 3,
          "preco": 45000,
          "descricao": "Chatbot inteligente para automatizar atendimento via WhatsApp com IA conversacional",
          "screenshots": [
            "/assets/img/ia-iot/chatbot-whatsapp-home.jpg",
            "/assets/img/ia-iot/chatbot-whatsapp-conversas.jpg",
            "/assets/img/ia-iot/chatbot-whatsapp-dashboard.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/chatbot-whatsapp",
          "caracteristicas": [
            "IA conversacional avançada (GPT)",
            "Integração WhatsApp Business API",
            "Respostas automáticas inteligentes",
            "Aprendizado contínuo",
            "Suporte multi-idioma (PT, EN)",
            "Dashboard de métricas",
            "Histórico de conversas",
            "Integração com CRM",
            "Notificações em tempo real",
            "Base de conhecimento customizável",
            "Suporte técnico (6 meses)"
          ],
          "destaque": true,
          "cor": "success"
        },
        {
          "id": 2,
          "nome": "Chatbot para Website",
          "categoria": "Inteligência Artificial",
          "nicho": "Suporte Online",
          "modulos": 2,
          "preco": 35000,
          "descricao": "Assistente virtual inteligente para seu website com IA e respostas contextuais",
          "screenshots": [
            "/assets/img/ia-iot/chatbot-web-home.jpg",
            "/assets/img/ia-iot/chatbot-web-interface.jpg",
            "/assets/img/ia-iot/chatbot-web-config.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/chatbot-web",
          "caracteristicas": [
            "Widget personalizável",
            "IA conversacional",
            "Respostas contextuais",
            "Integração com site existente",
            "Análise de sentimento",
            "Captura de leads",
            "Transferência para humano",
            "Relatórios de interação",
            "Design responsivo",
            "Suporte técnico (4 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 3,
          "nome": "Sistema de Monitorização IoT",
          "categoria": "Internet das Coisas",
          "nicho": "Indústria e Logística",
          "modulos": 5,
          "preco": 85000,
          "descricao": "Plataforma completa para monitorização remota de equipamentos e sensores IoT",
          "screenshots": [
            "/assets/img/ia-iot/iot-monitoring-dashboard.jpg",
            "/assets/img/ia-iot/iot-monitoring-sensors.jpg",
            "/assets/img/ia-iot/iot-monitoring-alerts.jpg",
            "/assets/img/ia-iot/iot-monitoring-reports.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/iot-monitoring",
          "caracteristicas": [
            "Dashboard em tempo real",
            "Integração com sensores IoT",
            "Monitorização remota 24/7",
            "Alertas automáticos (SMS/Email)",
            "Histórico de dados",
            "Gráficos e análises",
            "Gestão de dispositivos",
            "API REST para integração",
            "Aplicação mobile (Android/iOS)",
            "Relatórios customizáveis",
            "Sistema de notificações",
            "Backup automático",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 4,
          "nome": "Dashboard Preditivo com IA",
          "categoria": "Inteligência Artificial",
          "nicho": "Análise de Dados",
          "modulos": 4,
          "preco": 95000,
          "descricao": "Dashboard inteligente com análise preditiva e insights automáticos usando Machine Learning",
          "screenshots": [
            "/assets/img/ia-iot/dashboard-preditivo-home.jpg",
            "/assets/img/ia-iot/dashboard-preditivo-graficos.jpg",
            "/assets/img/ia-iot/dashboard-preditivo-previsoes.jpg",
            "/assets/img/ia-iot/dashboard-preditivo-insights.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/dashboard-preditivo",
          "caracteristicas": [
            "Machine Learning integrado",
            "Análise preditiva avançada",
            "Previsão de tendências",
            "Insights automáticos com IA",
            "Visualizações interactivas",
            "Processamento de Big Data",
            "Relatórios automatizados",
            "Integração com múltiplas fontes",
            "Alertas inteligentes",
            "Exportação de dados (CSV, Excel, PDF)",
            "Painel personalizável",
            "Suporte prioritário (9 meses)"
          ],
          "destaque": true,
          "cor": "warning"
        },
        {
          "id": 5,
          "nome": "Automação Residencial IoT",
          "categoria": "Internet das Coisas",
          "nicho": "Casa Inteligente",
          "modulos": 6,
          "preco": 125000,
          "descricao": "Sistema completo de automação residencial com controle via app e comandos de voz",
          "screenshots": [
            "/assets/img/ia-iot/automacao-residencial-home.jpg",
            "/assets/img/ia-iot/automacao-residencial-dispositivos.jpg",
            "/assets/img/ia-iot/automacao-residencial-cenarios.jpg",
            "/assets/img/ia-iot/automacao-residencial-mobile.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/automacao-residencial",
          "caracteristicas": [
            "Controle de iluminação inteligente",
            "Gestão de climatização",
            "Sistema de segurança integrado",
            "Controle de acesso",
            "Comandos de voz (Google/Alexa)",
            "Aplicação móvel iOS/Android",
            "Automação de cenários",
            "Sensores de presença",
            "Monitorização de energia",
            "Câmeras de vigilância",
            "Integração com assistentes virtuais",
            "Notificações push",
            "Suporte técnico (12 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 6,
          "nome": "Reconhecimento Facial IA",
          "categoria": "Inteligência Artificial",
          "nicho": "Segurança e Controle",
          "modulos": 3,
          "preco": 78000,
          "descricao": "Sistema de reconhecimento facial com IA para controle de acesso e segurança",
          "screenshots": [
            "/assets/img/ia-iot/reconhecimento-facial-home.jpg",
            "/assets/img/ia-iot/reconhecimento-facial-cadastro.jpg",
            "/assets/img/ia-iot/reconhecimento-facial-logs.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/reconhecimento-facial",
          "caracteristicas": [
            "Reconhecimento facial em tempo real",
            "Deep Learning para precisão",
            "Cadastro de pessoas",
            "Controle de acesso automatizado",
            "Detecção de múltiplas faces",
            "Registro de entrada/saída",
            "Alertas de segurança",
            "Integração com câmeras IP",
            "Dashboard de monitorização",
            "Relatórios de acessos",
            "API para integração",
            "Suporte técnico (6 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 7,
          "nome": "Visão Computacional para Indústria",
          "categoria": "Inteligência Artificial",
          "nicho": "Controle de Qualidade",
          "modulos": 4,
          "preco": 150000,
          "descricao": "Sistema de visão computacional com IA para inspeção e controle de qualidade industrial",
          "screenshots": [
            "/assets/img/ia-iot/visao-computacional-home.jpg",
            "/assets/img/ia-iot/visao-computacional-inspecao.jpg",
            "/assets/img/ia-iot/visao-computacional-defeitos.jpg",
            "/assets/img/ia-iot/visao-computacional-relatorios.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/visao-computacional",
          "caracteristicas": [
            "Detecção automática de defeitos",
            "Inspeção de qualidade em tempo real",
            "Deep Learning para classificação",
            "Integração com linha de produção",
            "Análise de imagens de alta resolução",
            "Relatórios de conformidade",
            "Rastreabilidade de produtos",
            "Alertas de não-conformidade",
            "Dashboard de estatísticas",
            "Exportação de dados",
            "Treinamento de modelos customizados",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 8,
          "nome": "Plataforma IoT Agricultura Smart",
          "categoria": "Internet das Coisas",
          "nicho": "Agricultura de Precisão",
          "modulos": 7,
          "preco": 110000,
          "descricao": "Solução IoT completa para agricultura inteligente com sensores e análise de dados",
          "screenshots": [
            "/assets/img/ia-iot/agricultura-smart-home.jpg",
            "/assets/img/ia-iot/agricultura-smart-sensores.jpg",
            "/assets/img/ia-iot/agricultura-smart-irrigacao.jpg",
            "/assets/img/ia-iot/agricultura-smart-previsoes.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/agricultura-smart",
          "caracteristicas": [
            "Sensores de solo (humidade, pH, nutrientes)",
            "Monitorização climática",
            "Automação de irrigação",
            "Previsões meteorológicas",
            "Análise de crescimento de culturas",
            "Alertas de pragas e doenças",
            "Gestão de recursos hídricos",
            "Dashboard de produtividade",
            "Aplicação mobile",
            "Relatórios agronómicos",
            "Integração com drones",
            "Suporte técnico (10 meses)"
          ],
          "destaque": false,
          "cor": "success"
        }
      ]
    }';
    
    $dados = json_decode($json_string, true);
    return $dados && $dados['sucesso'] === true ? $dados : null;
}

$dados_ia_iot = buscarDadosIAIoT();

get_part('includes/header.php'); 
?>
<link rel="stylesheet" href="/assets/css/produtos.css">

<!-- Hero Section -->
<section class="landing-hero-websites">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="hero-badge mb-4" data-aos="fade-up">
                    <i class="ri-brain-line text-primary"></i>
                    <span class="badge-text">Tecnologia do Futuro</span>
                </div>
                <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                    Soluções <span class="text-gradient">IA + IoT</span>
                </h1>
                <p class="hero-subtitle mx-auto mb-4" data-aos="fade-up" data-aos-delay="200">
                    Transforme seu negócio com Inteligência Artificial e Internet das Coisas. Automação inteligente, análise preditiva e monitorização em tempo real.
                </p>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <i class="ri-robot-2-line"></i>
                        <strong>8+</strong>
                        <span>Soluções</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-lightbulb-flash-line"></i>
                        <strong>IA</strong>
                        <span>Avançada</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-wifi-line"></i>
                        <strong>IoT</strong>
                        <span>Integrado</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IA + IoT List -->
<?php if ($dados_ia_iot): ?>
<section class="section-py landing-websites-list" id="iaIotList">
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
                <button class="filter-btn" data-categoria="Inteligência Artificial">
                    <i class="ri-brain-line"></i>
                    <span>Inteligência Artificial</span>
                </button>
                <button class="filter-btn" data-categoria="Internet das Coisas">
                    <i class="ri-wifi-line"></i>
                    <span>Internet das Coisas</span>
                </button>
            </div>
        </div>

        <!-- Grid de Soluções -->
        <div class="row g-4 mb-5" id="iaIotGrid">
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
<div class="modal fade" id="iaIotDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalIaIotName"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalIaIotContent"></div>
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
// Dados das soluções IA + IoT
const iaIotData = <?php echo json_encode($dados_ia_iot['data']); ?>;

// Configuração
const ITEMS_POR_PAGINA = 4;
let paginaActual = 1;
let categoriaActual = 'all';

// Inicializar
document.addEventListener('DOMContentLoaded', function() {
    renderizarIaIot();
    configurarFiltros();
});

// Filtrar soluções
function filtrarIaIot() {
    if (categoriaActual === 'all') {
        return iaIotData;
    }
    return iaIotData.filter(s => s.categoria === categoriaActual);
}

// Renderizar soluções
function renderizarIaIot() {
    const solucoesFiltradas = filtrarIaIot();
    const totalItems = solucoesFiltradas.length;
    const totalPaginas = Math.ceil(totalItems / ITEMS_POR_PAGINA);
    const offset = (paginaActual - 1) * ITEMS_POR_PAGINA;
    const solucoesPagina = solucoesFiltradas.slice(offset, offset + ITEMS_POR_PAGINA);
    
    // Renderizar grid
    const grid = document.getElementById('iaIotGrid');
    grid.innerHTML = solucoesPagina.map((solucao, index) => criarCardIaIot(solucao, index)).join('');
    
    // Renderizar paginação
    if (totalPaginas > 1) {
        renderizarPaginacao(totalItems, totalPaginas);
    } else {
        document.getElementById('paginationWrapper').style.display = 'none';
    }
    
    // Scroll suave para o topo da lista
    if (paginaActual > 1) {
        document.getElementById('iaIotList').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

// Criar card de solução
function criarCardIaIot(solucao, index) {
    const featuresShow = solucao.caracteristicas.slice(0, 5);
    const maisFeatures = solucao.caracteristicas.length - 5;
    
    return `
        <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="${index * 100}">
            <div class="website-card ${solucao.destaque ? 'featured' : ''}">
                ${solucao.destaque ? `
                    <div class="featured-badge">
                        <i class="ri-vip-crown-fill"></i>
                        <span>Mais Popular</span>
                    </div>
                ` : ''}
                
                <div class="card-layout">
                    <div class="screenshots-section">
                        <div id="carousel${solucao.id}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                ${solucao.screenshots.map((_, i) => `
                                    <button type="button" 
                                            data-bs-target="#carousel${solucao.id}" 
                                            data-bs-slide-to="${i}" 
                                            class="${i === 0 ? 'active' : ''}">
                                    </button>
                                `).join('')}
                            </div>
                            <div class="carousel-inner">
                                ${solucao.screenshots.map((screenshot, i) => `
                                    <div class="carousel-item ${i === 0 ? 'active' : ''}">
                                        <img src="${screenshot}" class="d-block w-100" alt="${solucao.nome}">
                                    </div>
                                `).join('')}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel${solucao.id}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel${solucao.id}" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-header-section">
                            <div class="category-badge badge-${solucao.cor}">
                                ${solucao.categoria}
                            </div>
                            <h3 class="website-name">${solucao.nome}</h3>
                            <p class="website-nicho">
                                <i class="ri-focus-3-line"></i>
                                ${solucao.nicho}
                            </p>
                        </div>

                        <div class="card-pricing">
                            <div class="pricing-main">
                                <span class="price-label">A partir de</span>
                                <div class="price-amount">
                                    <span class="price-value">${solucao.preco.toLocaleString('pt-MZ')}</span>
                                    <span class="price-currency">MT</span>
                                </div>
                            </div>
                            <div class="pricing-detail">
                                <i class="ri-apps-line"></i>
                                <span>${solucao.modulos} módulo${solucao.modulos > 1 ? 's' : ''}</span>
                            </div>
                        </div>

                        <p class="card-description">${solucao.descricao}</p>

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
                            <a href="${solucao.demo_url}" target="_blank" class="btn-action btn-demo">
                                <i class="ri-external-link-line"></i>
                                <span>Ver Demo</span>
                            </a>
                            <button class="btn-action btn-details" onclick="showIaIotDetails(${solucao.id})">
                                <i class="ri-information-line"></i>
                                <span>Detalhes</span>
                            </button>
                            <a href="#landingContact" class="btn-action btn-order">
                                <i class="ri-shopping-bag-line"></i>
                                <span>Solicitar</span>
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
    renderizarIaIot();
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
            renderizarIaIot();
        });
    });
}

// Mostrar detalhes da solução (função global)
function showIaIotDetails(id) {
    const solucao = iaIotData.find(s => s.id === id);
    if (!solucao) return;
    
    document.getElementById('modalIaIotName').innerHTML = `
        <i class="ri-brain-line me-2"></i>${solucao.nome}
    `;
    
    let screenshotsHTML = '<div class="modal-screenshots mb-4"><div class="row g-3">';
    solucao.screenshots.forEach((screenshot, index) => {
        screenshotsHTML += `
            <div class="col-md-6">
                <img src="${screenshot}" class="img-fluid rounded shadow-sm" alt="Screenshot ${index + 1}">
            </div>
        `;
    });
    screenshotsHTML += '</div></div>';
    
    let featuresHTML = '<ul class="list-unstyled row g-2">';
    solucao.caracteristicas.forEach(feature => {
        featuresHTML += `
            <li class="col-md-6 mb-2">
                <i class="ri-checkbox-circle-fill text-success me-2"></i>${feature}
            </li>
        `;
    });
    featuresHTML += '</ul>';
    
    document.getElementById('modalIaIotContent').innerHTML = `
        ${screenshotsHTML}
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-information-line me-2"></i>Informações Gerais</h6>
                    <div class="info-item">
                        <span class="info-label">Módulos:</span>
                        <span class="info-value">${solucao.modulos}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Preço:</span>
                        <span class="info-value text-primary fw-bold">${solucao.preco.toLocaleString('pt-MZ')} MT</span>
                    </div>
                    <a href="${solucao.demo_url}" target="_blank" class="btn btn-outline-primary mt-3 w-100">
                        <i class="ri-external-link-line me-2"></i>Ver Demo ao Vivo
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-file-text-line me-2"></i>Descrição</h6>
                    <p>${solucao.descricao}</p>
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
    
    const modal = new bootstrap.Modal(document.getElementById('iaIotDetailsModal'));
    modal.show();
}
</script>

<?php else: ?>
<div class="container my-5 py-5">
    <div class="alert alert-danger text-center">
        <i class="ri-error-warning-line me-2"></i>
        Erro ao carregar as soluções de IA + IoT.
    </div>
</div>
<?php endif; ?>

<?php 
get_part('includes/footer.php'); 
