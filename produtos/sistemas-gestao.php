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
        },
        {
          "id": 11,
          "nome": "Gestão de RH",
          "categoria": "Recursos Humanos",
          "nicho": "Departamentos RH",
          "paginas": "Colaboradores + Folha",
          "preco": 70000,
          "descricao": "Gestão de colaboradores, folha de salários e contratos",
          "screenshots": [
            "/assets/img/sistemas/rh-colaboradores.jpg",
            "/assets/img/sistemas/rh-folha.jpg",
            "/assets/img/sistemas/rh-relatorios.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/rh",
          "caracteristicas": [
            "Cadastro de colaboradores",
            "Processamento de salários",
            "Contratos e documentos",
            "Faltas e férias",
            "Recrutamento",
            "Relatórios INSS/IRPS",
            "Suporte (5 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 12,
          "nome": "Gestão de Projectos",
          "categoria": "Produtividade",
          "nicho": "Equipas e Agências",
          "paginas": "Kanban + Gantt",
          "preco": 50000,
          "descricao": "Ferramenta para planeamento e acompanhamento de projectos",
          "screenshots": [
            "/assets/img/sistemas/projectos-kanban.jpg",
            "/assets/img/sistemas/projectos-gantt.jpg",
            "/assets/img/sistemas/projectos-tarefas.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/projectos",
          "caracteristicas": [
            "Quadro Kanban e Gantt",
            "Atribuição de tarefas",
            "Controlo de tempo",
            "Comentários e ficheiros",
            "Relatórios de progresso",
            "Integração calendar",
            "Suporte (4 meses)"
          ],
          "destaque": false,
          "cor": "success"
        }
      ]
    }';
    
    $dados = json_decode($json_string, true);
    return $dados && $dados['sucesso'] === true ? $dados : null;
}

// Paginação: 4 itens por página
$items_por_pagina = 4;
$pagina_actual = isset($_GET['pagina']) ? max(1, intval($_GET['pagina'])) : 1;
$filtro_categoria = isset($_GET['categoria']) ? $_GET['categoria'] : 'all';

$dados_sistemas = buscarDadosSistemas();

if ($dados_sistemas) {
    $sistemas_filtrados = $filtro_categoria === 'all' 
        ? $dados_sistemas['data']
        : array_filter($dados_sistemas['data'], function($s) use ($filtro_categoria) {
            return $s['categoria'] === $filtro_categoria;
        });
    
    $total_items = count($sistemas_filtrados);
    $total_paginas = ceil($total_items / $items_por_pagina);
    $offset = ($pagina_actual - 1) * $items_por_pagina;
    $sistemas_pagina = array_slice($sistemas_filtrados, $offset, $items_por_pagina);
}

get_part('includes/header.php'); 
?>
<link rel="stylesheet" href="/assets/css/produtos.css">

<!-- Hero Section -->
<section class="landing-hero-websites">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="hero-badge mb-4" data-aos="fade-up">
                    <i class="ri-database-2-fill text-primary"></i>
                    <span class="badge-text">Soluções de Gestão Empresarial</span>
                </div>
                <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                    Sistemas de <span class="text-gradient">Gestão</span>
                </h1>
                <p class="hero-subtitle mx-auto mb-4" data-aos="fade-up" data-aos-delay="200">
                    Automatize os processos do seu negócio com sistemas robustos, seguros e adaptados ao mercado moçambicano.
                </p>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <i class="ri-shield-check-line"></i>
                        <strong>12+</strong>
                        <span>Sistemas</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-speed-line"></i>
                        <strong>100%</strong>
                        <span>Cloud & Seguro</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-customer-service-2-line"></i>
                        <strong>24/7</strong>
                        <span>Suporte Local</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sistemas List -->
<?php if ($dados_sistemas): ?>
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
                <a href="?categoria=Empresarial&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Empresarial' ? 'active' : ''; ?>">
                    <i class="ri-building-line"></i>
                    <span>Empresarial</span>
                </a>
                <a href="?categoria=Vendas e Clientes&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Vendas e Clientes' ? 'active' : ''; ?>">
                    <i class="ri-handshake-line"></i>
                    <span>CRM/Vendas</span>
                </a>
                <a href="?categoria=Logística&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Logística' ? 'active' : ''; ?>">
                    <i class="ri-truck-line"></i>
                    <span>Stock/Logística</span>
                </a>
                <a href="?categoria=Educação&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Educação' ? 'active' : ''; ?>">
                    <i class="ri-graduation-cap-line"></i>
                    <span>Educação</span>
                </a>
                <a href="?categoria=Saúde&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Saúde' ? 'active' : ''; ?>">
                    <i class="ri-heart-pulse-line"></i>
                    <span>Saúde</span>
                </a>
                <a href="?categoria=Restauração&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Restauração' ? 'active' : ''; ?>">
                    <i class="ri-restaurant-line"></i>
                    <span>Restauração</span>
                </a>
                <a href="?categoria=Hotelaria&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Hotelaria' ? 'active' : ''; ?>">
                    <i class="ri-hotel-line"></i>
                    <span>Hotelaria</span>
                </a>
                <a href="?categoria=Financeiro&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Financeiro' ? 'active' : ''; ?>">
                    <i class="ri-money-dollar-circle-line"></i>
                    <span>Financeiro</span>
                </a>
                <a href="?categoria=Recursos Humanos&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Recursos Humanos' ? 'active' : ''; ?>">
                    <i class="ri-team-line"></i>
                    <span>RH</span>
                </a>
            </div>
        </div>

        <!-- Grid de Sistemas -->
        <div class="row g-4 mb-5" id="websitesGrid">
            <?php foreach ($sistemas_pagina as $index => $sistema): ?>
                <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="website-card <?php echo $sistema['destaque'] ? 'featured' : ''; ?>">
                        
                        <?php if ($sistema['destaque']): ?>
                            <div class="featured-badge">
                                <i class="ri-vip-crown-fill"></i>
                                <span>Mais Completo</span>
                            </div>
                        <?php endif; ?>
                        
                        <div class="card-layout flex-row-reverse">
                            <!-- Screenshots Carousel (à direita em desktop) -->
                            <div class="screenshots-section">
                                <div id="carousel<?php echo $sistema['id']; ?>" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <?php foreach ($sistema['screenshots'] as $i => $screenshot): ?>
                                            <button type="button" data-bs-target="#carousel<?php echo $sistema['id']; ?>" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"></button>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="carousel-inner">
                                        <?php foreach ($sistema['screenshots'] as $i => $screenshot): ?>
                                            <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                                                <img src="<?php echo htmlspecialchars($screenshot); ?>" class="d-block w-100" alt="<?php echo htmlspecialchars($sistema['nome']); ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?php echo $sistema['id']; ?>" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel<?php echo $sistema['id']; ?>" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="card-content">
                                <div class="card-header-section">
                                    <div class="category-badge badge-<?php echo htmlspecialchars($sistema['cor']); ?>">
                                        <?php echo htmlspecialchars($sistema['categoria']); ?>
                                    </div>
                                    <h3 class="website-name"><?php echo htmlspecialchars($sistema['nome']); ?></h3>
                                    <p class="website-nicho">
                                        <i class="ri-focus-3-line"></i>
                                        <?php echo htmlspecialchars($sistema['nicho']); ?>
                                    </p>
                                </div>

                                <div class="card-pricing">
                                    <div class="pricing-main">
                                        <span class="price-label">A partir de</span>
                                        <div class="price-amount">
                                            <span class="price-value"><?php echo number_format($sistema['preco'], 0, ',', '.'); ?></span>
                                            <span class="price-currency">MT</span>
                                        </div>
                                    </div>
                                    <div class="pricing-detail">
                                        <i class="ri-apps-2-line"></i>
                                        <span><?php echo $sistema['paginas']; ?></span>
                                    </div>
                                </div>

                                <p class="card-description"><?php echo htmlspecialchars($sistema['descricao']); ?></p>

                                <div class="card-features">
                                    <h6 class="features-title">
                                        <i class="ri-checkbox-circle-line"></i>
                                        Principais Módulos
                                    </h6>
                                    <ul class="features-list">
                                        <?php 
                                        $features_show = array_slice($sistema['caracteristicas'], 0, 5);
                                        foreach ($features_show as $feature): 
                                        ?>
                                            <li>
                                                <i class="ri-check-line"></i>
                                                <span><?php echo htmlspecialchars($feature); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                        <?php if (count($sistema['caracteristicas']) > 5): ?>
                                            <li class="more-features">
                                                <i class="ri-add-circle-line"></i>
                                                <span>Mais <?php echo count($sistema['caracteristicas']) - 5; ?> módulos</span>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                                <div class="card-actions">
                                    <a href="<?php echo htmlspecialchars($sistema['demo_url']); ?>" target="_blank" class="btn-action btn-demo">
                                        <i class="ri-external-link-line"></i>
                                        <span>Ver Demo</span>
                                    </a>
                                    <button class="btn-action btn-details" onclick="showSistemaDetails(<?php echo $sistema['id']; ?>)">
                                        <i class="ri-information-line"></i>
                                        <span>Detalhes</span>
                                    </button>
                                    <a href="#landingContact" class="btn-action btn-order">
                                        <i class="ri-shopping-bag-line"></i>
                                        <span>Orçamento</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Paginação Completa -->
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

<!-- Modal de Detalhes do Sistema -->
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
                <a href="#landingContact" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="ri-mail-send-line me-2"></i>Solicitar Orçamento
                </a>
            </div>
        </div>
    </div>
</div>

<script>
const sistemasData = <?php echo json_encode($dados_sistemas['data']); ?>;

function showSistemaDetails(id) {
    const sistema = sistemasData.find(s => s.id === id);
    if (!sistema) return;
    
    document.getElementById('modalSistemaName').innerHTML = `
        <i class="ri-database-line me-2"></i>${sistema.nome}
    `;
    
    let screenshotsHTML = '<div class="modal-screenshots mb-4"><div class="row g-3">';
    sistema.screenshots.forEach((screenshot, index) => {
        screenshotsHTML += `
            <div class="col-md-6">
                <img src="${screenshot}" class="img-fluid rounded shadow-sm" alt="Screenshot ${index + 1}">
            </div>
        `;
    });
    screenshotsHTML += '</div></div>';
    
    let featuresHTML = '<ul class="list-unstyled row g-2">';
    sistema.caracteristicas.forEach(feature => {
        featuresHTML += `
            <li class="col-md-6 mb-2">
                <i class="ri-checkbox-circle-fill text-success me-2"></i>${feature}
            </li>
        `;
    });
    featuresHTML += '</ul>';
    
    document.getElementById('modalSistemaContent').innerHTML = `
        ${screenshotsHTML}
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-information-line me-2"></i>Informações Gerais</h6>
                    <div class="info-item">
                        <span class="info-label">Categoria:</span>
                        <span class="info-value">${sistema.categoria}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Nicho:</span>
                        <span class="info-value">${sistema.nicho}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Módulos:</span>
                        <span class="info-value">${sistema.paginas}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Preço:</span>
                        <span class="info-value text-primary fw-bold">${sistema.preco.toLocaleString('pt-MZ')} MT</span>
                    </div>
                    <a href="${sistema.demo_url}" target="_blank" class="btn btn-outline-primary mt-3 w-100">
                        <i class="ri-external-link-line me-2"></i>Ver Demo ao Vivo
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-file-text-line me-2"></i>Descrição</h6>
                    <p>${sistema.descricao}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-list-check-2 me-2"></i>Todos os Módulos</h6>
                    ${featuresHTML}
                </div>
            </div>
        </div>
    `;
    
    const modal = new bootstrap.Modal(document.getElementById('sistemaDetailsModal'));
    modal.show();
}
</script>

<style>
    
/* Badge de destaque com cor azul para diferenciar da página de websites */
.featured-badge {
    background: linear-gradient(135deg, #4a90e2, #007aff);
    color: white;
    box-shadow: 0 4px 12px rgba(0, 122, 255, 0.4);
}

/* Inverte o layout em telas grandes (screenshots à direita) */
@media (min-width: 1200px) {
    .card-layout.flex-row-reverse {
        flex-direction: row-reverse;
    }
    .screenshots-section {
        flex: 0 0 45%;
    }
}

/* Pequeno ajuste no botão de demo */
.btn-demo {
    background: transparent;
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
}
.btn-demo:hover {
    background: var(--primary-color);
    color: white;
}
</style>

<?php else: ?>
<div class="container my-5 py-5">
    <div class="alert alert-danger text-center">
        <i class="ri-error-warning-line me-2"></i>
        Erro ao carregar os sistemas de gestão.
    </div>
</div>
<?php endif; ?>

<?php get_part('includes/footer.php'); ?>
