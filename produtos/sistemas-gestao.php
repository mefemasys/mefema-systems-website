<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Sistemas de Gestão - MEFEMA Systems";

/**
 * Função para simular busca de dados da API de Sistemas de Gestão
 */
function buscarDadosSistemas() {
    $json_string = '{
      "sucesso": true,
      "total": 12,
      "data": [
        {
          "id": 1,
          "nome": "ERP Essencial",
          "categoria": "ERP",
          "nicho": "PMEs e Startups",
          "modulos": 8,
          "preco": 85000,
          "descricao": "Sistema integrado básico para gerir finanças, stock, vendas e RH em pequenas empresas",
          "screenshots": [
            "/assets/img/sistemas/erp-essencial-dashboard.jpg",
            "/assets/img/sistemas/erp-essencial-stock.jpg",
            "/assets/img/sistemas/erp-essencial-vendas.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/erp-essencial",
          "caracteristicas": [
            "Dashboard personalizado",
            "Gestão de stock básica",
            "Faturação e vendas",
            "Contabilidade simples",
            "Gestão de clientes",
            "Relatórios básicos",
            "Gestão de compras",
            "Recursos Humanos básico",
            "Multi-utilizador",
            "Suporte por email (6 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 2,
          "nome": "ERP Empresarial Avançado",
          "categoria": "ERP",
          "nicho": "Empresas Médias e Grandes",
          "modulos": 15,
          "preco": 185000,
          "descricao": "ERP completo com módulos avançados para total controlo operacional e estratégico",
          "screenshots": [
            "/assets/img/sistemas/erp-empresarial-dashboard.jpg",
            "/assets/img/sistemas/erp-empresarial-financas.jpg",
            "/assets/img/sistemas/erp-empresarial-producao.jpg",
            "/assets/img/sistemas/erp-empresarial-rh.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/erp-empresarial",
          "caracteristicas": [
            "Todos os módulos essenciais + avançados",
            "Gestão de produção e MRP",
            "Contabilidade fiscal completa",
            "Business Intelligence",
            "Gestão de projetos",
            "CRM integrado",
            "Gestão de armazéns avançada",
            "Integrações API",
            "Multi-empresa e multi-moeda",
            "Suporte prioritário (12 meses)"
          ],
          "destaque": true,
          "cor": "success"
        },
        {
          "id": 3,
          "nome": "CRM Profissional",
          "categoria": "CRM",
          "nicho": "Vendas e Marketing",
          "modulos": 6,
          "preco": 45000,
          "descricao": "Sistema dedicado à gestão de relacionamentos com clientes e automação de vendas",
          "screenshots": [
            "/assets/img/sistemas/crm-dashboard.jpg",
            "/assets/img/sistemas/crm-funil.jpg",
            "/assets/img/sistemas/crm-contactos.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/crm",
          "caracteristicas": [
            "Funil de vendas visual",
            "Gestão de leads e oportunidades",
            "Automação de email marketing",
            "Histórico de interações",
            "Agenda e tarefas",
            "Relatórios de performance",
            "Integração WhatsApp",
            "Campanhas e segmentação",
            "Mobile app",
            "Suporte por email (4 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        },
        {
          "id": 4,
          "nome": "Sistema de Stock e Inventário",
          "categoria": "Gestão de Stock",
          "nicho": "Comércio e Armazéns",
          "modulos": 5,
          "preco": 35000,
          "descricao": "Controlo completo de stock, entradas/saídas e valuation para evitar rupturas",
          "screenshots": [
            "/assets/img/sistemas/stock-dashboard.jpg",
            "/assets/img/sistemas/stock-movimentos.jpg",
            "/assets/img/sistemas/stock-relatorios.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/stock",
          "caracteristicas": [
            "Registo de entradas/saídas",
            "Códigos de barras e lotes",
            "Alertas de stock mínimo",
            "Valuation FIFO/LIFO",
            "Multi-armazém",
            "Relatórios de movimento",
            "Integração com POS",
            "Auditoria de stock",
            "Exportação Excel",
            "Suporte (3 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 5,
          "nome": "POS + Gestão de Vendas",
          "categoria": "POS e Vendas",
          "nicho": "Retalho e Serviços",
          "modulos": 7,
          "preco": 55000,
          "descricao": "Ponto de venda rápido com gestão completa de faturação e clientes",
          "screenshots": [
            "/assets/img/sistemas/pos-tela.jpg",
            "/assets/img/sistemas/pos-relatorios.jpg",
            "/assets/img/sistemas/pos-clientes.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/pos",
          "caracteristicas": [
            "Touch screen optimizado",
            "Faturação certificada AT",
            "Pagamentos M-Pesa/E-Mola",
            "Gestão de mesas (restaurantes)",
            "Fidelização de clientes",
            "Relatórios diários",
            "Integração stock",
            "Multi-terminal",
            "Offline mode",
            "Suporte prioritário (6 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 6,
          "nome": "Sistema Escolar Completo",
          "categoria": "Gestão Escolar",
          "nicho": "Escolas e Universidades",
          "modulos": 12,
          "preco": 95000,
          "descricao": "Gestão administrativa e pedagógica para instituições de ensino",
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
            "Portal dos encarregados",
            "Biblioteca e cantina",
            "Relatórios MINEDH",
            "SMS notificações",
            "Multi-nível (primário/secundário)",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 7,
          "nome": "Sistema Hospitalar / Clínica",
          "categoria": "Gestão Hospitalar",
          "nicho": "Hospitais e Clínicas",
          "modulos": 14,
          "preco": 145000,
          "descricao": "Gestão completa para unidades de saúde, consultas, internamentos e farmácia",
          "screenshots": [
            "/assets/img/sistemas/hospital-dashboard.jpg",
            "/assets/img/sistemas/hospital-consultas.jpg",
            "/assets/img/sistemas/hospital-farmacia.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/hospital",
          "caracteristicas": [
            "Registo de pacientes",
            "Marcação de consultas",
            "Histórico clínico electrónico",
            "Internamentos e camas",
            "Farmácia interna",
            "Laboratório e exames",
            "Faturação e seguros",
            "Relatórios MISAU",
            "Integração equipamentos",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "success"
        },
        {
          "id": 8,
          "nome": "Gestão de Farmácia",
          "categoria": "Gestão Farmacêutica",
          "nicho": "Farmácias e Drogarias",
          "modulos": 8,
          "preco": 65000,
          "descricao": "Controlo de medicamentos, vendas e validade específico para farmácias",
          "screenshots": [
            "/assets/img/sistemas/farmacia-pos.jpg",
            "/assets/img/sistemas/farmacia-stock.jpg",
            "/assets/img/sistemas/farmacia-receitas.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/farmacia",
          "caracteristicas": [
            "POS rápido com receitas",
            "Controlo de validade e lotes",
            "Gestão de fornecedores",
            "Relatórios ANARME",
            "Alertas stock crítico",
            "Faturação electrónica",
            "Integração balança",
            "Multi-balção",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        },
        {
          "id": 9,
          "nome": "Gestão Hoteleira",
          "categoria": "Gestão Hoteleira",
          "nicho": "Hotéis e Alojamentos",
          "modulos": 10,
          "preco": 115000,
          "descricao": "Sistema PMS completo para reservas, check-in/out e housekeeping",
          "screenshots": [
            "/assets/img/sistemas/hotel-reservas.jpg",
            "/assets/img/sistemas/hotel-ocupacao.jpg",
            "/assets/img/sistemas/hotel-faturacao.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/hotel",
          "caracteristicas": [
            "Motor de reservas online",
            "Mapa de ocupação",
            "Check-in/out digital",
            "Housekeeping",
            "Channel manager",
            "Faturação e POS",
            "Relatórios turísticos",
            "Integração Booking",
            "Multi-propriedade",
            "Suporte (9 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 10,
          "nome": "Gestão de Restaurante",
          "categoria": "Gestão Restauração",
          "nicho": "Restaurantes e Cafés",
          "modulos": 9,
          "preco": 60000,
          "descricao": "POS com gestão de mesas, menu digital e cozinha",
          "screenshots": [
            "/assets/img/sistemas/restaurante-mesas.jpg",
            "/assets/img/sistemas/restaurante-menu.jpg",
            "/assets/img/sistemas/restaurante-cozinha.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/restaurante",
          "caracteristicas": [
            "Mapa de mesas interactivo",
            "Menu digital QR",
            "Comandas para cozinha",
            "Take-away e delivery",
            "Gestão de stock ingredientes",
            "Relatórios de vendas",
            "Integração Uber Eats",
            "Fidelização",
            "Multi-terminal",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 11,
          "nome": "Gestão de Recursos Humanos",
          "categoria": "RH",
          "nicho": "Todas as Empresas",
          "modulos": 7,
          "preco": 40000,
          "descricao": "Módulo HR completo para processamento salarial, contratos e avaliações",
          "screenshots": [
            "/assets/img/sistemas/rh-funcionarios.jpg",
            "/assets/img/sistemas/rh-salarios.jpg",
            "/assets/img/sistemas/rh-avaliacoes.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/rh",
          "caracteristicas": [
            "Cadastro de funcionários",
            "Processamento salarial INSS",
            "Contratos e faltas",
            "Avaliações de desempenho",
            "Recrutamento",
            "Portal do colaborador",
            "Relatórios IRPS",
            "Integração com ERP",
            "Suporte (4 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 12,
          "nome": "Gestão de Contabilidade",
          "categoria": "Contabilidade",
          "nicho": "Contabilistas e Empresas",
          "modulos": 6,
          "preco": 50000,
          "descricao": "Software contabilidade certificada AT com plano de contas padrão",
          "screenshots": [
            "/assets/img/sistemas/contabilidade-lancamentos.jpg",
            "/assets/img/sistemas/contabilidade-balancete.jpg",
            "/assets/img/sistemas/contabilidade-declaracoes.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/contabilidade",
          "caracteristicas": [
            "Plano de contas padrão",
            "Lançamentos automáticos",
            "Balancetes e demonstrações",
            "Declarações fiscais AT",
            "Multi-empresa",
            "Importação bancária",
            "Conciliação",
            "Relatórios analíticos",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "success"
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
                    <i class="ri-sparkling-2-fill text-primary"></i>
                    <span class="badge-text">Soluções de Gestão Empresarial</span>
                </div>
                <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                    Pacotes de <span class="text-gradient">Sistemas de Gestão</span>
                </h1>
                <p class="hero-subtitle mx-auto mb-4" data-aos="fade-up" data-aos-delay="200">
                    Sistemas personalizados e robustos para otimizar processos em qualquer sector. ERP, CRM, POS, escolar, hospitalar e muito mais.
                </p>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <i class="ri-database-2-line"></i>
                        <strong>12+</strong>
                        <span>Pacotes</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-shield-check-line"></i>
                        <strong>100%</strong>
                        <span>Seguro</span>
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
                <a href="?categoria=ERP&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'ERP' ? 'active' : ''; ?>">
                    <i class="ri-building-4-line"></i>
                    <span>ERP</span>
                </a>
                <a href="?categoria=CRM&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'CRM' ? 'active' : ''; ?>">
                    <i class="ri-team-line"></i>
                    <span>CRM</span>
                </a>
                <a href="?categoria=Gestão de Stock&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Gestão de Stock' ? 'active' : ''; ?>">
                    <i class="ri-boxing-line"></i>
                    <span>Stock</span>
                </a>
                <a href="?categoria=POS e Vendas&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'POS e Vendas' ? 'active' : ''; ?>">
                    <i class="ri-shopping-cart-line"></i>
                    <span>POS/Vendas</span>
                </a>
                <a href="?categoria=Gestão Escolar&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Gestão Escolar' ? 'active' : ''; ?>">
                    <i class="ri-graduation-cap-line"></i>
                    <span>Escolar</span>
                </a>
                <a href="?categoria=Gestão Hospitalar&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Gestão Hospitalar' ? 'active' : ''; ?>">
                    <i class="ri-hospital-line"></i>
                    <span>Hospitalar</span>
                </a>
                <a href="?categoria=Gestão Farmacêutica&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Gestão Farmacêutica' ? 'active' : ''; ?>">
                    <i class="ri-capsule-line"></i>
                    <span>Farmácia</span>
                </a>
                <a href="?categoria=Gestão Hoteleira&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Gestão Hoteleira' ? 'active' : ''; ?>">
                    <i class="ri-hotel-line"></i>
                    <span>Hotelaria</span>
                </a>
                <a href="?categoria=Gestão Restauração&pagina=1" class="filter-btn <?php echo $filtro_categoria === 'Gestão Restauração' ? 'active' : ''; ?>">
                    <i class="ri-restaurant-line"></i>
                    <span>Restauração</span>
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
                                <span>Mais Popular</span>
                            </div>
                        <?php endif; ?>
                        
                        <div class="card-layout">
                            <!-- Screenshots Carousel -->
                            <div class="screenshots-section">
                                <div id="carousel<?php echo $sistema['id']; ?>" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <?php foreach ($sistema['screenshots'] as $i => $screenshot): ?>
                                            <button type="button" 
                                                    data-bs-target="#carousel<?php echo $sistema['id']; ?>" 
                                                    data-bs-slide-to="<?php echo $i; ?>" 
                                                    class="<?php echo $i === 0 ? 'active' : ''; ?>">
                                            </button>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="carousel-inner">
                                        <?php foreach ($sistema['screenshots'] as $i => $screenshot): ?>
                                            <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                                                <img src="<?php echo htmlspecialchars($screenshot); ?>" 
                                                     class="d-block w-100" 
                                                     alt="<?php echo htmlspecialchars($sistema['nome']); ?>">
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
                                        <span><?php echo $sistema['modulos']; ?> módulo<?php echo $sistema['modulos'] > 1 ? 's' : ''; ?></span>
                                    </div>
                                </div>

                                <p class="card-description"><?php echo htmlspecialchars($sistema['descricao']); ?></p>

                                <div class="card-features">
                                    <h6 class="features-title">
                                        <i class="ri-checkbox-circle-line"></i>
                                        Características principais
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
                                                <span>Mais <?php echo count($sistema['caracteristicas']) - 5; ?> funcionalidades</span>
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
                                        <span>Encomendar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Paginação (mesma da versão anterior) -->
        <?php if ($total_paginas > 1): ?>
        <nav class="pagination-wrapper" data-aos="fade-up">
            <!-- ... (código de paginação igual ao anterior) ... -->
        </nav>
        <?php endif; ?>

    </div>
</section>

<?php get_part('includes/footer.php'); ?>
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
</style>

<?php 
get_part('includes/footer.php'); 
?>
