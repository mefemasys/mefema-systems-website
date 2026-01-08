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
    --radius: 8px;
    --radius-lg: 11px;
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
    border-radius: 10%;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.75rem;
    background: var(--bg-card);
    border: 2px solid var(--border-color);
    border-radius: 10px;
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
    border-radius: 10px;
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
    border-radius: 5px;
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
    border-radius: 10%;
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
    border-radius: 10%;
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
    border-radius: 4px;
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
    border-radius: 4px;
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
    border-radius: 3px;
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
