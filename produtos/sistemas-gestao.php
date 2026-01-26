<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Sistemas de Gestão - MEFEMA Systems";

function buscarDadosSistemas() {
    $json_string = '{
      "sucesso": true,
      "total": 12,
      "data": [
        {
          "id": 1,
          "nome": "ERP Completo",
          "categoria": "Empresarial",
          "nicho": "PMEs e Grandes Empresas",
          "paginas": "Módulos Ilimitados",
          "preco": 150000,
          "descricao": "Sistema integrado de gestão empresarial (ERP) para controlar finanças, stock, vendas, RH e mais",
          "screenshots": [
            "/assets/img/sistemas/erp-dashboard.jpg",
            "/assets/img/sistemas/erp-financas.jpg",
            "/assets/img/sistemas/erp-stock.jpg",
            "/assets/img/sistemas/erp-relatorios.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/erp",
          "caracteristicas": [
            "Gestão financeira e contabilidade",
            "Controlo de stock e inventário",
            "Módulo de vendas e facturação",
            "Gestão de recursos humanos (RH)",
            "Compras e fornecedores",
            "Produção e logística",
            "Relatórios avançados e BI",
            "Integração com e-fatura AT",
            "Multi-utilizador e acessos por perfil",
            "Backup automático e segurança",
            "Suporte prioritário (12 meses)"
          ],
          "destaque": true,
          "cor": "success"
        },
        {
          "id": 2,
          "nome": "CRM Avançado",
          "categoria": "Vendas e Clientes",
          "nicho": "Equipas Comerciais",
          "paginas": "Dashboard + Funis",
          "preco": 75000,
          "descricao": "Gestão de relacionamento com clientes para aumentar vendas e fidelização",
          "screenshots": [
            "/assets/img/sistemas/crm-dashboard.jpg",
            "/assets/img/sistemas/crm-funil.jpg",
            "/assets/img/sistemas/crm-contactos.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/crm",
          "caracteristicas": [
            "Funil de vendas personalizado",
            "Gestão de leads e oportunidades",
            "Automação de email e WhatsApp",
            "Histórico de interações",
            "Relatórios de performance",
            "Integração com calendar e tarefas",
            "Campanhas de marketing",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 3,
          "nome": "Gestão de Stock",
          "categoria": "Logística",
          "nicho": "Comércio e Armazéns",
          "paginas": "Inventário Completo",
          "preco": 55000,
          "descricao": "Controlo total de stock, entradas/saídas e alertas de reposição",
          "screenshots": [
            "/assets/img/sistemas/stock-dashboard.jpg",
            "/assets/img/sistemas/stock-movimentos.jpg",
            "/assets/img/sistemas/stock-alertas.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/stock",
          "caracteristicas": [
            "Registo de entradas e saídas",
            "Códigos de barras e lotes",
            "Alertas de stock mínimo/máximo",
            "Multi-armazém",
            "Valoração de stock (PEPS, UEPS)",
            "Integração com vendas",
            "Relatórios de movimentação",
            "Suporte (4 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        },
        {
          "id": 4,
          "nome": "POS + Facturação",
          "categoria": "Vendas",
          "nicho": "Lojas e Retalho",
          "paginas": "Ponto de Venda",
          "preco": 45000,
          "descricao": "Sistema de ponto de venda com facturação certificada AT",
          "screenshots": [
            "/assets/img/sistemas/pos-venda.jpg",
            "/assets/img/sistemas/pos-relatorio.jpg",
            "/assets/img/sistemas/pos-produtos.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/pos",
          "caracteristicas": [
            "Talão de venda rápido",
            "Facturação electrónica AT",
            "Gestão de produtos e categorias",
            "Pagamentos M-Pesa/E-Mola",
            "Controlo de caixa diário",
            "Relatórios de vendas",
            "Integração stock",
            "Suporte (3 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 5,
          "nome": "Gestão Escolar",
          "categoria": "Educação",
          "nicho": "Escolas e Universidades",
          "paginas": "Portal Aluno/Professor",
          "preco": 95000,
          "descricao": "Sistema completo para gestão académica, propinas e comunicação",
          "screenshots": [
            "/assets/img/sistemas/escolar-dashboard.jpg",
            "/assets/img/sistemas/escolar-alunos.jpg",
            "/assets/img/sistemas/escolar-propinas.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/escolar",
          "caracteristicas": [
            "Matrículas e inscrições",
            "Gestão de turmas e horários",
            "Propinas e pagamentos",
            "Notas e pautas",
            "Portal para encarregados",
            "Relatórios académicos",
            "Comunicados e SMS",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 6,
          "nome": "Gestão Hospitalar/Clínica",
          "categoria": "Saúde",
          "nicho": "Hospitais e Clínicas",
          "paginas": "Agenda + Registos",
          "preco": 180000,
          "descricao": "Sistema robusto para gestão de pacientes, consultas e internamentos",
          "screenshots": [
            "/assets/img/sistemas/hospital-dashboard.jpg",
            "/assets/img/sistemas/hospital-agenda.jpg",
            "/assets/img/sistemas/hospital-pacientes.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/hospital",
          "caracteristicas": [
            "Agenda de consultas",
            "Registo clínico electrónico",
            "Gestão de internamentos",
            "Farmácia interna",
            "Facturação e seguros",
            "Relatórios médicos",
            "Integração laboratórios",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "success"
        },
        {
          "id": 7,
          "nome": "Gestão de Restaurante",
          "categoria": "Restauração",
          "nicho": "Restaurantes e Cafés",
          "paginas": "Mesas + Comandas",
          "preco": 65000,
          "descricao": "Controlo de mesas, comandas e stock de cozinha em tempo real",
          "screenshots": [
            "/assets/img/sistemas/restaurante-mesas.jpg",
            "/assets/img/sistemas/restaurante-comanda.jpg",
            "/assets/img/sistemas/restaurante-relatorio.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/restaurante",
          "caracteristicas": [
            "Mapa de mesas interactivo",
            "Comandas digitais",
            "Gestão de menu e stock",
            "Pagamentos integrados",
            "Relatórios de vendas",
            "Integração delivery",
            "Suporte (4 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 8,
          "nome": "Gestão Hoteleira",
          "categoria": "Hotelaria",
          "nicho": "Hotéis e Alojamentos",
          "paginas": "Reservas + Check-in",
          "preco": 120000,
          "descricao": "Sistema PMS para reservas, check-in/out e housekeeping",
          "screenshots": [
            "/assets/img/sistemas/hotel-reservas.jpg",
            "/assets/img/sistemas/hotel-checkin.jpg",
            "/assets/img/sistemas/hotel-dashboard.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/hotel",
          "caracteristicas": [
            "Motor de reservas online",
            "Check-in/out rápido",
            "Gestão de quartos e housekeeping",
            "Facturação e POS",
            "Channel manager",
            "Relatórios de ocupação",
            "Suporte (9 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        },
        {
          "id": 9,
          "nome": "Gestão de Farmácia",
          "categoria": "Saúde",
          "nicho": "Farmácias",
          "paginas": "Stock + Vendas",
          "preco": 60000,
          "descricao": "Controlo de medicamentos, validade e vendas com receita",
          "screenshots": [
            "/assets/img/sistemas/farmacia-stock.jpg",
            "/assets/img/sistemas/farmacia-venda.jpg",
            "/assets/img/sistemas/farmacia-relatorio.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/farmacia",
          "caracteristicas": [
            "Gestão de stock e validade",
            "Vendas com receita médica",
            "Integração POS",
            "Relatórios regulatórios",
            "Alertas de stock baixo",
            "Multi-balção",
            "Suporte (4 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 10,
          "nome": "Gestão Financeira",
          "categoria": "Financeiro",
          "nicho": "Contabilidade",
          "paginas": "Contas + Relatórios",
          "preco": 80000,
          "descricao": "Módulo completo de contabilidade, tesouraria e relatórios fiscais",
          "screenshots": [
            "/assets/img/sistemas/financeiro-dashboard.jpg",
            "/assets/img/sistemas/financeiro-contas.jpg",
            "/assets/img/sistemas/financeiro-fiscal.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/financeiro",
          "caracteristicas": [
            "Contabilidade geral",
            "Contas a pagar/receber",
            "Reconciliação bancária",
            "Declarações fiscais AT",
            "Fluxo de caixa previsional",
            "Relatórios personalizados",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "info"
        }
      ]
    }';
    
    $dados = json_decode($json_string, true);
    return $dados && $dados['sucesso'] === true ? $dados : null;
}

$dados_sistemas = buscarDadosSistemas();

get_part('includes/header.php'); 
?>
<link rel="stylesheet" href="/assets/css/produtos.css">

<!-- Hero Section -->
<section class="landing-hero-websites">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="hero-badge mb-4" data-aos="fade-up">
                    <i class="ri-database-2-line text-primary"></i>
                    <span class="badge-text">Sistemas de Gestão Inteligentes</span>
                </div>
                <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                    Soluções de <span class="text-gradient">Software</span>
                </h1>
                <p class="hero-subtitle mx-auto mb-4" data-aos="fade-up" data-aos-delay="200">
                    Optimize os seus processos com sistemas robustos, escaláveis e fáceis de usar.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Sistemas List -->
<?php if ($dados_sistemas): ?>
<section class="section-py landing-websites-list" id="sistemasSection">
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
                <button class="filter-btn" data-categoria="Empresarial">
                    <i class="ri-building-line"></i>
                    <span>Empresarial</span>
                </button>
                <button class="filter-btn" data-categoria="Vendas">
                    <i class="ri-shopping-cart-line"></i>
                    <span>Vendas</span>
                </button>
                <button class="filter-btn" data-categoria="Saúde">
                    <i class="ri-hospital-line"></i>
                    <span>Saúde</span>
                </button>
                <button class="filter-btn" data-categoria="Educação">
                    <i class="ri-graduation-cap-line"></i>
                    <span>Educação</span>
                </button>
                <button class="filter-btn" data-categoria="Logística">
                    <i class="ri-truck-line"></i>
                    <span>Logística</span>
                </button>
            </div>
        </div>

        <!-- Grid de Sistemas -->
        <div class="row g-4 mb-5" id="sistemasGrid">
            <!-- Conteúdo carregado via JS para URLs limpas -->
        </div>

        <!-- Paginação -->
        <nav class="pagination-wrapper" id="paginationWrapper" style="display: none;">
            <div class="d-flex flex-column align-items-center">
                <div class="pagination-info mb-3">
                    <span class="pagination-text" id="paginationInfo"></span>
                </div>
                <ul class="pagination justify-content-center" id="paginationButtons"></ul>
            </div>
        </nav>

    </div>
</section>

<!-- Modal de Detalhes -->
<div class="modal fade" id="sistemaDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSistemaName"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalSistemaContent"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="btnModalAcquire">
                    <i class="ri-shopping-bag-line me-2"></i>Adquirir Sistema
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Aquisição (Complexo) -->
<div class="modal fade" id="acquireModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Configurar Aquisição do Sistema</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="acquireForm">
                <div class="modal-body">
                    <input type="hidden" id="acquireSistemaId" name="sistema_id">
                    
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="p-3 bg-light rounded border">
                                <h6 class="mb-1 fw-bold">Sistema Seleccionado:</h6>
                                <p id="acquireSistemaName" class="mb-0 text-primary fw-bold"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Tipo de Aquisição -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Modelo de Aquisição</label>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="acquisition-option">
                                    <input type="radio" name="tipo_aquisicao" id="typeSubscription" value="subscricao" checked>
                                    <label for="typeSubscription" class="option-card">
                                        <i class="ri-calendar-check-line"></i>
                                        <div class="option-info">
                                            <span class="option-title">Subscrição Mensal</span>
                                            <span class="option-desc">Pagamento recorrente com suporte e updates incluídos.</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="acquisition-option">
                                    <input type="radio" name="tipo_aquisicao" id="typeDedicated" value="dedicado">
                                    <label for="typeDedicated" class="option-card">
                                        <i class="ri-server-line"></i>
                                        <div class="option-info">
                                            <span class="option-title">Servidor Dedicado</span>
                                            <span class="option-desc">Licença vitalícia instalada na sua infraestrutura.</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Personalizações -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Personalizações e Extras</label>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-check custom-check">
                                    <input class="form-check-input" type="checkbox" name="extras[]" value="treinamento" id="extra1">
                                    <label class="form-check-label" for="extra1">Treinamento de Equipa</label>
                                </div>
                                <div class="form-check custom-check">
                                    <input class="form-check-input" type="checkbox" name="extras[]" value="migracao" id="extra2">
                                    <label class="form-check-label" for="extra2">Migração de Dados</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check custom-check">
                                    <input class="form-check-input" type="checkbox" name="extras[]" value="suporte_247" id="extra3">
                                    <label class="form-check-label" for="extra3">Suporte 24/7 Prioritário</label>
                                </div>
                                <div class="form-check custom-check">
                                    <input class="form-check-input" type="checkbox" name="extras[]" value="api_custom" id="extra4">
                                    <label class="form-check-label" for="extra4">Integração API Customizada</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dados do Cliente -->
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nome da Empresa/Cliente</label>
                            <input type="text" class="form-control" name="cliente_nome" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email Profissional</label>
                            <input type="email" class="form-control" name="cliente_email" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="cliente_telefone" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Número de Utilizadores Estimado</label>
                            <select class="form-select" name="utilizadores">
                                <option value="1-5">1 a 5 utilizadores</option>
                                <option value="6-20">6 a 20 utilizadores</option>
                                <option value="21-50">21 a 50 utilizadores</option>
                                <option value="50+">Mais de 50 utilizadores</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" id="btnSubmitAcquire">
                        <span class="spinner-border spinner-border-sm d-none" role="status"></span>
                        Solicitar Proposta de Aquisição
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Dados dos sistemas
const sistemasData = <?php echo json_encode($dados_sistemas['data']); ?>;

// Estado da Aplicação (URLs Limpas)
let state = {
    pagina: 1,
    categoria: 'all',
    itemsPorPagina: 4
};

document.addEventListener('DOMContentLoaded', function() {
    renderizarSistemas();
    configurarFiltros();
    configurarFormularioAquisicao();
});

function filtrarSistemas() {
    if (state.categoria === 'all') return sistemasData;
    return sistemasData.filter(s => s.categoria === state.categoria);
}

function renderizarSistemas() {
    const filtrados = filtrarSistemas();
    const totalItems = filtrados.length;
    const totalPaginas = Math.ceil(totalItems / state.itemsPorPagina);
    const offset = (state.pagina - 1) * state.itemsPorPagina;
    const paginaItems = filtrados.slice(offset, offset + state.itemsPorPagina);
    
    const grid = document.getElementById('sistemasGrid');
    if (filtrados.length === 0) {
        grid.innerHTML = '<div class="col-12 text-center my-5"><p class="text-muted">Nenhum sistema encontrado nesta categoria.</p></div>';
    } else {
        grid.innerHTML = paginaItems.map((sistema, index) => criarCardSistema(sistema, index)).join('');
    }
    
    renderizarPaginacao(totalItems, totalPaginas);
}

function criarCardSistema(sistema, index) {
    return `
        <div class="col-xl-12" data-aos="fade-up" data-aos-delay="${index * 100}">
            <div class="website-card ${sistema.destaque ? 'featured' : ''}">
                ${sistema.destaque ? '<div class="featured-badge"><i class="ri-vip-crown-fill"></i><span>Destaque</span></div>' : ''}
                <div class="card-layout">
                    <div class="screenshots-section">
                        <div id="carousel${sistema.id}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                ${sistema.screenshots.map((img, i) => `
                                    <div class="carousel-item ${i === 0 ? 'active' : ''}">
                                        <img src="${img}" class="d-block w-100" alt="${sistema.nome}">
                                    </div>
                                `).join('')}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel${sistema.id}" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel${sistema.id}" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-header-section">
                            <div class="category-badge badge-${sistema.cor}">${sistema.categoria}</div>
                            <h3 class="website-name">${sistema.nome}</h3>
                            <p class="website-nicho"><i class="ri-focus-3-line"></i>${sistema.nicho}</p>
                        </div>
                        <div class="card-pricing">
                            <div class="pricing-main">
                                <span class="price-label">A partir de</span>
                                <div class="price-amount">
                                    <span class="price-value">${sistema.preco.toLocaleString('pt-MZ')}</span>
                                    <span class="price-currency">MT</span>
                                </div>
                            </div>
                        </div>
                        <p class="card-description">${sistema.descricao}</p>
                        <div class="card-actions">
                            <a href="${sistema.demo_url}" target="_blank" class="btn-action btn-demo"><i class="ri-external-link-line"></i><span>Demo</span></a>
                            <button class="btn-action btn-details" onclick="showSistemaDetails(${sistema.id})"><i class="ri-information-line"></i><span>Detalhes</span></button>
                            <button class="btn-action btn-order" onclick="abrirModalAquisicao(${sistema.id})"><i class="ri-shopping-bag-line"></i><span>Adquirir</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
}

function renderizarPaginacao(totalItems, totalPaginas) {
    const wrapper = document.getElementById('paginationWrapper');
    const info = document.getElementById('paginationInfo');
    const buttons = document.getElementById('paginationButtons');
    
    if (totalPaginas <= 1) {
        wrapper.style.display = 'none';
        return;
    }
    
    wrapper.style.display = 'block';
    info.innerHTML = `Página <strong>${state.pagina}</strong> de <strong>${totalPaginas}</strong> • <strong>${totalItems}</strong> resultados`;
    
    let html = '';
    if (state.pagina > 1) {
        html += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="mudarPagina(${state.pagina - 1})"><i class="ri-arrow-left-s-line"></i></a></li>`;
    }
    
    for (let i = 1; i <= totalPaginas; i++) {
        html += `<li class="page-item ${i === state.pagina ? 'active' : ''}"><a class="page-link" href="javascript:void(0)" onclick="mudarPagina(${i})">${i}</a></li>`;
    }
    
    if (state.pagina < totalPaginas) {
        html += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="mudarPagina(${state.pagina + 1})"><i class="ri-arrow-right-s-line"></i></a></li>`;
    }
    buttons.innerHTML = html;
}

function mudarPagina(p) {
    state.pagina = p;
    renderizarSistemas();
    document.getElementById('sistemasSection').scrollIntoView({ behavior: 'smooth' });
}

function configurarFiltros() {
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            state.categoria = this.dataset.categoria;
            state.pagina = 1;
            renderizarSistemas();
        });
    });
}

function showSistemaDetails(id) {
    const sistema = sistemasData.find(s => s.id === id);
    if (!sistema) return;
    
    document.getElementById('modalSistemaName').innerText = sistema.nome;
    document.getElementById('modalSistemaContent').innerHTML = `
        <div class="row">
            <div class="col-md-12 mb-4">
                <img src="${sistema.screenshots[0]}" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h6><i class="ri-list-check-2 me-2"></i>Módulos Incluídos</h6>
                <ul class="list-unstyled">
                    ${sistema.caracteristicas.map(f => `<li><i class="ri-check-line text-success me-2"></i>${f}</li>`).join('')}
                </ul>
            </div>
            <div class="col-md-6">
                <div class="p-3 bg-light rounded">
                    <h6>Descrição</h6>
                    <p>${sistema.descricao}</p>
                    <hr>
                    <p class="mb-0"><strong>Preço Base:</strong> ${sistema.preco.toLocaleString('pt-MZ')} MT</p>
                </div>
            </div>
        </div>
    `;
    
    document.getElementById('btnModalAcquire').onclick = function() {
        bootstrap.Modal.getInstance(document.getElementById('sistemaDetailsModal')).hide();
        abrirModalAquisicao(sistema.id);
    };
    
    new bootstrap.Modal(document.getElementById('sistemaDetailsModal')).show();
}

function abrirModalAquisicao(id) {
    const sistema = sistemasData.find(s => s.id === id);
    if (!sistema) return;
    
    document.getElementById('acquireSistemaId').value = sistema.id;
    document.getElementById('acquireSistemaName').innerText = sistema.nome;
    
    new bootstrap.Modal(document.getElementById('acquireModal')).show();
}

function configurarFormularioAquisicao() {
    const form = document.getElementById('acquireForm');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const btn = document.getElementById('btnSubmitAcquire');
        const spinner = btn.querySelector('.spinner-border');
        
        btn.disabled = true;
        spinner.classList.remove('d-none');
        
        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());
        data.extras = formData.getAll('extras[]');

        fetch('https://jsonplaceholder.typicode.com/posts', {
            method: 'POST',
            body: JSON.stringify(data),
            headers: { 'Content-type': 'application/json' }
        })
        .then(res => res.json())
        .then(json => {
            console.log('Proposta enviada:', json);
            btn.disabled = false;
            spinner.classList.add('d-none');
            bootstrap.Modal.getInstance(document.getElementById('acquireModal')).hide();
            alert('Solicitação de aquisição enviada com sucesso! A nossa equipa comercial entrará em contacto para apresentar a proposta detalhada.');
            form.reset();
        })
        .catch(err => {
            btn.disabled = false;
            spinner.classList.add('d-none');
            alert('Erro ao enviar solicitação. Tente novamente.');
        });
    });
}
</script>

<style>
/* Estilos para o Formulário de Aquisição */
.acquisition-option input[type="radio"] {
    display: none;
}
.option-card {
    display: flex;
    align-items: center;
    padding: 15px;
    border: 2px solid #eee;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.3s ease;
    height: 100%;
}
.option-card i {
    font-size: 24px;
    margin-right: 15px;
    color: #666;
}
.option-title {
    display: block;
    font-weight: bold;
    font-size: 1.1rem;
}
.option-desc {
    font-size: 0.85rem;
    color: #777;
}
.acquisition-option input[type="radio"]:checked + .option-card {
    border-color: var(--primary-color);
    background-color: rgba(var(--primary-rgb), 0.05);
}
.acquisition-option input[type="radio"]:checked + .option-card i {
    color: var(--primary-color);
}
.custom-check {
    padding: 10px;
    border-radius: 5px;
    transition: background 0.2s;
}
.custom-check:hover {
    background: #f8f9fa;
}
.featured-badge {
    background: linear-gradient(135deg, #4a90e2, #007aff);
    color: white;
    padding: 5px 15px;
    border-radius: 0 0 0 15px;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 10;
}
</style>

<?php else: ?>
<div class="container my-5 py-5 text-center">
    <div class="alert alert-danger">Erro ao carregar sistemas.</div>
</div>
<?php endif; ?>

<?php get_part('includes/footer.php'); ?>
