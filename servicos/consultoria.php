<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Consultoria Digital - MEFEMA Systems";

get_part('includes/header.php'); 
?>
<link rel="stylesheet" href="/assets/css/produtos.css">

<!-- Hero Section -->
<section class="landing-hero-websites">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="hero-badge mb-4" data-aos="fade-up">
                    <i class="ri-lightbulb-line text-primary"></i>
                    <span class="badge-text">Estratégia e Transformação Digital</span>
                </div>
                <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                    Consultoria <span class="text-gradient">Digital</span>
                </h1>
                <p class="hero-subtitle mx-auto mb-4" data-aos="fade-up" data-aos-delay="200">
                    Orientamos a sua empresa na jornada de transformação digital com estratégias inteligentes, análise profunda e soluções tecnológicas adaptadas ao seu negócio.
                </p>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <i class="ri-line-chart-line"></i>
                        <strong>200+</strong>
                        <span>Consultorias</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-building-line"></i>
                        <strong>80+</strong>
                        <span>Empresas Transformadas</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-award-line"></i>
                        <strong>15+</strong>
                        <span>Anos de Experiência</span>
                    </div>
                </div>
                <div class="mt-5" data-aos="fade-up" data-aos-delay="400">
                    <a href="#landingContact" class="btn btn-primary btn-lg me-3">
                        <i class="ri-mail-send-line me-2"></i>
                        Agendar Consultoria
                    </a>
                    <a href="#nossos-servicos" class="btn btn-outline-primary btn-lg">
                        <i class="ri-arrow-down-line me-2"></i>
                        Conhecer Serviços
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nossos Serviços -->
<section class="section-py bg-light" id="nossos-servicos">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Nossos Serviços</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Oferecemos consultoria especializada para impulsionar a transformação digital da sua empresa
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-compass-3-line"></i>
                    </div>
                    <h4 class="service-title">Estratégia de Transformação Digital</h4>
                    <p class="service-description">
                        Desenvolvemos roadmaps personalizados para a transformação digital do seu negócio, alinhando tecnologia com objectivos estratégicos.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Diagnóstico de maturidade digital</li>
                        <li><i class="ri-check-line"></i> Roadmap de transformação</li>
                        <li><i class="ri-check-line"></i> Plano de implementação faseado</li>
                        <li><i class="ri-check-line"></i> Gestão de mudança organizacional</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-search-eye-line"></i>
                    </div>
                    <h4 class="service-title">Auditoria de Sistemas</h4>
                    <p class="service-description">
                        Análise completa da sua infraestrutura tecnológica, identificando pontos de melhoria, vulnerabilidades e oportunidades de optimização.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Auditoria de segurança e compliance</li>
                        <li><i class="ri-check-line"></i> Avaliação de performance</li>
                        <li><i class="ri-check-line"></i> Análise de arquitectura de sistemas</li>
                        <li><i class="ri-check-line"></i> Relatório detalhado com recomendações</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-road-map-line"></i>
                    </div>
                    <h4 class="service-title">Planeamento de TI</h4>
                    <p class="service-description">
                        Criação de planos estratégicos de TI alinhados com os objectivos de negócio, garantindo investimentos tecnológicos inteligentes.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Plano director de TI</li>
                        <li><i class="ri-check-line"></i> Gestão de orçamento tecnológico</li>
                        <li><i class="ri-check-line"></i> Selecção de tecnologias</li>
                        <li><i class="ri-check-line"></i> Planeamento de capacidade</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-stack-line"></i>
                    </div>
                    <h4 class="service-title">Gestão de Projectos Tecnológicos</h4>
                    <p class="service-description">
                        Acompanhamento e gestão especializada de projectos de TI, garantindo entregas no prazo, dentro do orçamento e com qualidade.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Metodologias ágeis (Scrum, Kanban)</li>
                        <li><i class="ri-check-line"></i> Gestão de riscos e mudanças</li>
                        <li><i class="ri-check-line"></i> Coordenação de equipas</li>
                        <li><i class="ri-check-line"></i> Relatórios de progresso</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                    <h4 class="service-title">Análise de Requisitos e Viabilidade</h4>
                    <p class="service-description">
                        Estudo detalhado de requisitos e análise de viabilidade técnica e económica antes de investir em novos projectos tecnológicos.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Levantamento de requisitos funcionais</li>
                        <li><i class="ri-check-line"></i> Estudo de viabilidade técnica</li>
                        <li><i class="ri-check-line"></i> Análise custo-benefício</li>
                        <li><i class="ri-check-line"></i> Estimativas de tempo e recursos</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-settings-4-line"></i>
                    </div>
                    <h4 class="service-title">Optimização de Processos</h4>
                    <p class="service-description">
                        Identificação e automatização de processos de negócio através de tecnologia, aumentando eficiência e reduzindo custos operacionais.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Mapeamento de processos (BPM)</li>
                        <li><i class="ri-check-line"></i> Identificação de gargalos</li>
                        <li><i class="ri-check-line"></i> Automatização com RPA</li>
                        <li><i class="ri-check-line"></i> Métricas e KPIs de melhoria</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nossa Metodologia -->
<section class="section-py" id="metodologia">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Nossa Metodologia</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Seguimos uma abordagem estruturada e comprovada para garantir resultados mensuráveis
            </p>
        </div>

        <!-- Processo Timeline -->
        <div class="process-timeline">
            
            <!-- Fase 1: Diagnóstico Inicial -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">01</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-stethoscope-line"></i>
                    </div>
                    <h3 class="timeline-title">Diagnóstico Inicial</h3>
                    <p class="timeline-description">
                        Realizamos uma avaliação completa do estado actual da sua empresa, identificando desafios, oportunidades e necessidades tecnológicas.
                    </p>
                    <div class="timeline-details">
                        <h5>Actividades:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Entrevistas com stakeholders</li>
                            <li><i class="ri-checkbox-circle-line"></i> Análise de processos actuais</li>
                            <li><i class="ri-checkbox-circle-line"></i> Avaliação de sistemas existentes</li>
                            <li><i class="ri-checkbox-circle-line"></i> Levantamento de dores e objectivos</li>
                            <li><i class="ri-checkbox-circle-line"></i> Análise competitiva e de mercado</li>
                        </ul>
                        <h5 class="mt-3">Entregáveis:</h5>
                        <div class="deliverables">
                            <span class="badge bg-primary">Relatório de Diagnóstico</span>
                            <span class="badge bg-primary">Mapa de Processos</span>
                            <span class="badge bg-primary">Matriz SWOT</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 2: Análise e Estratégia -->
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <div class="timeline-number">02</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-bar-chart-grouped-line"></i>
                    </div>
                    <h3 class="timeline-title">Análise e Estratégia</h3>
                    <p class="timeline-description">
                        Desenvolvemos uma estratégia digital personalizada com base nos dados coletados, definindo prioridades e caminhos de implementação.
                    </p>
                    <div class="timeline-details">
                        <h5>Actividades:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Análise de gap tecnológico</li>
                            <li><i class="ri-checkbox-circle-line"></i> Definição de objectivos SMART</li>
                            <li><i class="ri-checkbox-circle-line"></i> Priorização de iniciativas</li>
                            <li><i class="ri-checkbox-circle-line"></i> Criação de roadmap estratégico</li>
                            <li><i class="ri-checkbox-circle-line"></i> Estimativa de ROI e benefícios</li>
                            <li><i class="ri-checkbox-circle-line"></i> Identificação de riscos</li>
                        </ul>
                        <h5 class="mt-3">Frameworks utilizados:</h5>
                        <div class="deliverables">
                            <span class="badge bg-success">TOGAF</span>
                            <span class="badge bg-success">COBIT</span>
                            <span class="badge bg-success">ITIL</span>
                            <span class="badge bg-success">Balanced Scorecard</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 3: Planeamento Detalhado -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">03</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-calendar-check-line"></i>
                    </div>
                    <h3 class="timeline-title">Planeamento Detalhado</h3>
                    <p class="timeline-description">
                        Criamos um plano de acção detalhado com cronogramas, recursos necessários, orçamentos e responsabilidades claramente definidos.
                    </p>
                    <div class="timeline-details">
                        <h5>Actividades:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Planeamento de fases e sprints</li>
                            <li><i class="ri-checkbox-circle-line"></i> Alocação de recursos</li>
                            <li><i class="ri-checkbox-circle-line"></i> Definição de orçamento detalhado</li>
                            <li><i class="ri-checkbox-circle-line"></i> Cronograma de implementação</li>
                            <li><i class="ri-checkbox-circle-line"></i> Plano de gestão de mudança</li>
                            <li><i class="ri-checkbox-circle-line"></i> Definição de KPIs e métricas</li>
                        </ul>
                        <h5 class="mt-3">Ferramentas:</h5>
                        <div class="deliverables">
                            <span class="badge bg-info">MS Project</span>
                            <span class="badge bg-info">Jira</span>
                            <span class="badge bg-info">Trello</span>
                            <span class="badge bg-info">Asana</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 4: Implementação e Acompanhamento -->
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <div class="timeline-number">04</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-play-circle-line"></i>
                    </div>
                    <h3 class="timeline-title">Implementação e Acompanhamento</h3>
                    <p class="timeline-description">
                        Acompanhamos a execução do plano, garantindo que as iniciativas sejam implementadas correctamente e dentro dos prazos estabelecidos.
                    </p>
                    <div class="timeline-details">
                        <h5>Actividades:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Coordenação de equipas</li>
                            <li><i class="ri-checkbox-circle-line"></i> Gestão de fornecedores</li>
                            <li><i class="ri-checkbox-circle-line"></i> Monitorização de progresso</li>
                            <li><i class="ri-checkbox-circle-line"></i> Reuniões de acompanhamento</li>
                            <li><i class="ri-checkbox-circle-line"></i> Gestão de riscos e issues</li>
                            <li><i class="ri-checkbox-circle-line"></i> Ajustes e optimizações</li>
                            <li><i class="ri-checkbox-circle-line"></i> Formação de utilizadores</li>
                        </ul>
                        <h5 class="mt-3">Metodologias:</h5>
                        <div class="deliverables">
                            <span class="badge bg-warning">Scrum</span>
                            <span class="badge bg-warning">Kanban</span>
                            <span class="badge bg-warning">PRINCE2</span>
                            <span class="badge bg-warning">PMI</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 5: Avaliação e Melhoria Contínua -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">05</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-line-chart-line"></i>
                    </div>
                    <h3 class="timeline-title">Avaliação e Melhoria Contínua</h3>
                    <p class="timeline-description">
                        Medimos os resultados alcançados, avaliamos o sucesso das iniciativas e identificamos oportunidades de melhoria contínua.
                    </p>
                    <div class="timeline-details">
                        <h5>Actividades:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Análise de KPIs e métricas</li>
                            <li><i class="ri-checkbox-circle-line"></i> Avaliação de ROI alcançado</li>
                            <li><i class="ri-checkbox-circle-line"></i> Pesquisas de satisfação</li>
                            <li><i class="ri-checkbox-circle-line"></i> Identificação de quick wins</li>
                            <li><i class="ri-checkbox-circle-line"></i> Plano de melhoria contínua</li>
                            <li><i class="ri-checkbox-circle-line"></i> Relatório final de consultoria</li>
                            <li><i class="ri-checkbox-circle-line"></i> Recomendações futuras</li>
                        </ul>
                        <h5 class="mt-3">Métricas:</h5>
                        <div class="deliverables">
                            <span class="badge bg-danger">ROI</span>
                            <span class="badge bg-danger">TCO</span>
                            <span class="badge bg-danger">Satisfação</span>
                            <span class="badge bg-danger">Performance</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Áreas de Especialização -->
<section class="section-py bg-light" id="especializacao">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Áreas de Especialização</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Experiência comprovada em diversos sectores e domínios tecnológicos
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="expertise-card">
                    <div class="expertise-icon">
                        <i class="ri-cloud-line"></i>
                    </div>
                    <h4>Cloud Computing</h4>
                    <p>Migração para cloud, arquitectura cloud-native, optimização de custos AWS/Azure</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="expertise-card">
                    <div class="expertise-icon">
                        <i class="ri-shield-keyhole-line"></i>
                    </div>
                    <h4>Segurança Digital</h4>
                    <p>Cybersecurity, compliance RGPD, auditoria de segurança, gestão de riscos</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="expertise-card">
                    <div class="expertise-icon">
                        <i class="ri-database-2-line"></i>
                    </div>
                    <h4>Data & Analytics</h4>
                    <p>Business Intelligence, Big Data, Data Warehousing, Analytics avançado</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="expertise-card">
                    <div class="expertise-icon">
                        <i class="ri-robot-line"></i>
                    </div>
                    <h4>Automação & IA</h4>
                    <p>RPA, Machine Learning, Inteligência Artificial, automação de processos</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="expertise-card">
                    <div class="expertise-icon">
                        <i class="ri-building-2-line"></i>
                    </div>
                    <h4>Arquitectura Empresarial</h4>
                    <p>TOGAF, modelagem de processos, governance de TI, arquitectura de soluções</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="expertise-card">
                    <div class="expertise-icon">
                        <i class="ri-git-branch-line"></i>
                    </div>
                    <h4>DevOps & CI/CD</h4>
                    <p>Implementação DevOps, pipelines CI/CD, containerização, Kubernetes</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="expertise-card">
                    <div class="expertise-icon">
                        <i class="ri-shopping-cart-2-line"></i>
                    </div>
                    <h4>E-commerce</h4>
                    <p>Estratégia digital, plataformas de vendas online, marketing digital, omnichannel</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="expertise-card">
                    <div class="expertise-icon">
                        <i class="ri-smartphone-line"></i>
                    </div>
                    <h4>Mobilidade</h4>
                    <p>Estratégia mobile-first, apps empresariais, BYOD, gestão de dispositivos móveis</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sectores Atendidos -->
<section class="section-py" id="sectores">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Sectores Atendidos</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Experiência em consultoria para empresas de diversos sectores
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                <div class="sector-badge">
                    <i class="ri-bank-line"></i>
                    <span>Banca e Finanças</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="150">
                <div class="sector-badge">
                    <i class="ri-hospital-line"></i>
                    <span>Saúde</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="sector-badge">
                    <i class="ri-shopping-bag-line"></i>
                    <span>Retalho</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="250">
                <div class="sector-badge">
                    <i class="ri-government-line"></i>
                    <span>Sector Público</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
                <div class="sector-badge">
                    <i class="ri-graduation-cap-line"></i>
                    <span>Educação</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="350">
                <div class="sector-badge">
                    <i class="ri-truck-line"></i>
                    <span>Logística</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                <div class="sector-badge">
                    <i class="ri-building-line"></i>
                    <span>Imobiliário</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="150">
                <div class="sector-badge">
                    <i class="ri-restaurant-line"></i>
                    <span>Hotelaria</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="sector-badge">
                    <i class="ri-stack-line"></i>
                    <span>Indústria</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="250">
                <div class="sector-badge">
                    <i class="ri-phone-line"></i>
                    <span>Telecomunicações</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
                <div class="sector-badge">
                    <i class="ri-seedling-line"></i>
                    <span>Agronegócio</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="350">
                <div class="sector-badge">
                    <i class="ri-water-flash-line"></i>
                    <span>Energia</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefícios -->
<section class="section-py bg-light" id="beneficios">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Benefícios da Consultoria</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Resultados concretos e mensuráveis para o seu negócio
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="ri-money-dollar-circle-line"></i>
                    </div>
                    <h4>Redução de Custos</h4>
                    <p>Identificamos oportunidades de optimização que resultam em redução de custos operacionais e tecnológicos entre 20% a 40%.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="ri-speed-up-line"></i>
                    </div>
                    <h4>Aumento de Eficiência</h4>
                    <p>Processos automatizados e optimizados que aumentam a produtividade da equipa e aceleram o time-to-market.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="ri-shield-check-line"></i>
                    </div>
                    <h4>Mitigação de Riscos</h4>
                    <p>Identificação proactiva de riscos tecnológicos, de segurança e de compliance, evitando problemas futuros.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="ri-rocket-line"></i>
                    </div>
                    <h4>Inovação Acelerada</h4>
                    <p>Acesso a conhecimento especializado e melhores práticas do mercado que aceleram a inovação no seu negócio.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="ri-team-line"></i>
                    </div>
                    <h4>Capacitação de Equipas</h4>
                    <p>Transferência de conhecimento e formação que capacita a sua equipa interna para novos desafios tecnológicos.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="ri-line-chart-line"></i>
                    </div>
                    <h4>ROI Mensurável</h4>
                    <p>Resultados tangíveis e mensuráveis com métricas claras de retorno sobre investimento em tecnologia.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Casos de Sucesso -->
<section class="section-py" id="casos-sucesso">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Casos de Sucesso</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Exemplos reais de transformação digital que impulsionaram negócios
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="case-study-card">
                    <div class="case-header">
                        <div class="case-icon">
                            <i class="ri-bank-line"></i>
                        </div>
                        <div>
                            <h4>Banco Regional</h4>
                            <p class="case-sector">Sector Financeiro</p>
                        </div>
                    </div>
                    <div class="case-body">
                        <h5>Desafio:</h5>
                        <p>Sistemas legados fragmentados, processos manuais demorados e falta de visibilidade sobre dados de clientes.</p>
                        
                        <h5>Solução:</h5>
                        <p>Desenvolvemos um roadmap de transformação digital com migração para cloud, implementação de CRM unificado e automatização de processos.</p>
                        
                        <h5>Resultados:</h5>
                        <ul class="case-results">
                            <li><i class="ri-check-line"></i> <strong>65%</strong> redução no tempo de abertura de contas</li>
                            <li><i class="ri-check-line"></i> <strong>40%</strong> aumento na satisfação de clientes</li>
                            <li><i class="ri-check-line"></i> <strong>30%</strong> redução de custos operacionais</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="case-study-card">
                    <div class="case-header">
                        <div class="case-icon">
                            <i class="ri-shopping-bag-line"></i>
                        </div>
                        <div>
                            <h4>Rede de Retalho</h4>
                            <p class="case-sector">Comércio</p>
                        </div>
                    </div>
                    <div class="case-body">
                        <h5>Desafio:</h5>
                        <p>Falta de integração entre lojas físicas e online, gestão de stock ineficiente e baixa conversão digital.</p>
                        
                        <h5>Solução:</h5>
                        <p>Implementámos estratégia omnichannel com plataforma e-commerce integrada, sistema de gestão de stock unificado e analytics avançado.</p>
                        
                        <h5>Resultados:</h5>
                        <ul class="case-results">
                            <li><i class="ri-check-line"></i> <strong>150%</strong> crescimento em vendas online</li>
                            <li><i class="ri-check-line"></i> <strong>25%</strong> redução em ruptura de stock</li>
                            <li><i class="ri-check-line"></i> <strong>ROI positivo</strong> em 8 meses</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="case-study-card">
                    <div class="case-header">
                        <div class="case-icon">
                            <i class="ri-hospital-line"></i>
                        </div>
                        <div>
                            <h4>Clínica Privada</h4>
                            <p class="case-sector">Saúde</p>
                        </div>
                    </div>
                    <div class="case-body">
                        <h5>Desafio:</h5>
                        <p>Processos administrativos manuais, agendamentos telefónicos sobrecarregados e falta de histórico digital de pacientes.</p>
                        
                        <h5>Solução:</h5>
                        <p>Auditoria completa de processos, implementação de sistema de gestão hospitalar com portal do paciente e automatização administrativa.</p>
                        
                        <h5>Resultados:</h5>
                        <ul class="case-results">
                            <li><i class="ri-check-line"></i> <strong>80%</strong> redução em tempo de agendamento</li>
                            <li><i class="ri-check-line"></i> <strong>50%</strong> aumento em consultas atendidas</li>
                            <li><i class="ri-check-line"></i> <strong>90%</strong> satisfação dos pacientes</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="case-study-card">
                    <div class="case-header">
                        <div class="case-icon">
                            <i class="ri-truck-line"></i>
                        </div>
                        <div>
                            <h4>Empresa de Logística</h4>
                            <p class="case-sector">Transportes</p>
                        </div>
                    </div>
                    <div class="case-body">
                        <h5>Desafio:</h5>
                        <p>Falta de rastreabilidade de encomendas, planeamento de rotas manual e baixa visibilidade da frota.</p>
                        
                        <h5>Solução:</h5>
                        <p>Consultoria para implementação de sistema de gestão de frotas, optimização de rotas com IA e plataforma de tracking em tempo real.</p>
                        
                        <h5>Resultados:</h5>
                        <ul class="case-results">
                            <li><i class="ri-check-line"></i> <strong>35%</strong> redução em custos de combustível</li>
                            <li><i class="ri-check-line"></i> <strong>45%</strong> melhoria em prazos de entrega</li>
                            <li><i class="ri-check-line"></i> <strong>100%</strong> rastreabilidade em tempo real</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section-py bg-light" id="faq">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Perguntas Frequentes</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Respostas às dúvidas mais comuns sobre consultoria digital
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="faqAccordion">
                    
                    <div class="accordion-item" data-aos="fade-up">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Qual a duração típica de um projecto de consultoria?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                A duração varia conforme o âmbito do projecto. Consultorias pontuais como auditorias podem demorar 2-4 semanas, enquanto projectos de transformação digital completa podem estender-se por 6-18 meses. Durante o diagnóstico inicial, apresentamos um cronograma detalhado adaptado às suas necessidades.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Como é calculado o investimento em consultoria?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                O investimento é baseado no âmbito do projecto, complexidade, duração e nível de especialização necessária. Oferecemos modelos flexíveis: projectos de preço fixo, dias de consultoria ou retainer mensal. A primeira reunião de diagnóstico é gratuita e sem compromisso.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                A minha empresa precisa de consultoria ou apenas de desenvolvimento?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Se já sabe exactamente o que precisa implementar, pode optar directamente pelo desenvolvimento. Porém, se enfrenta desafios mas não tem certeza sobre a melhor solução tecnológica, ou se quer garantir que o investimento em tecnologia está alinhado com objectivos de negócio, a consultoria é o caminho ideal. Muitas vezes combinamos consultoria inicial com desenvolvimento posterior.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Fornecem também a implementação das recomendações?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sim! Oferecemos consultoria completa "end-to-end" que inclui diagnóstico, estratégia, planeamento E implementação. Alternativamente, podemos apenas fornecer recomendações para a sua equipa interna implementar, ou ainda acompanhar a implementação feita por terceiros. A escolha é sua.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Como garantem a confidencialidade das informações da empresa?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                A confidencialidade é fundamental. Todos os nossos consultores assinam acordos de confidencialidade (NDA) rigorosos. Além disso, temos políticas internas de segurança da informação e compliance com RGPD. As informações da sua empresa são tratadas com o máximo sigilo e profissionalismo.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Trabalham apenas em Maputo ou também noutras províncias?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Atendemos clientes em todo Moçambique. Para projectos fora de Maputo, realizamos deslocações regulares e utilizamos ferramentas de colaboração remota para manter comunicação constante. Já realizámos projectos de sucesso em Beira, Nampula, Tete e outras províncias.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="section-py bg-gradient-primary text-white" id="cta-final">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up">
                <h2 class="display-5 fw-bold mb-4">
                    Pronto para Transformar o Seu Negócio?
                </h2>
                <p class="lead mb-5">
                    Agende uma sessão de diagnóstico gratuita e descubra como podemos ajudar a sua empresa a alcançar os objectivos através da tecnologia.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="#landingContact" class="btn btn-light btn-lg px-5">
                        <i class="ri-calendar-check-line me-2"></i>
                        Agendar Diagnóstico Gratuito
                    </a>
                    <a href="tel:+258840000000" class="btn btn-outline-light btn-lg px-5">
                        <i class="ri-phone-line me-2"></i>
                        (+258) 84 000 0000
                    </a>
                </div>
                <div class="mt-4">
                    <p class="mb-2"><i class="ri-time-line me-2"></i>Diagnóstico inicial sem custo</p>
                    <p class="mb-2"><i class="ri-shield-check-line me-2"></i>Consulta sem compromisso</p>
                    <p class="mb-0"><i class="ri-award-line me-2"></i>Consultores certificados e experientes</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* 
   MEFEMA Systems - Consultoria Digital
   CSS com paleta Laranja & Castanho
*/

:root {
    /* Brand Colors - Light Mode */
    --primary-color: #d97638;
    --primary-dark: #c66b3d;
    --primary-light: #fef5ef;
    --secondary-color: #74523d;
    --secondary-dark: #2c1810;
    
    --text-primary: #2c1810;
    --text-secondary: #74523d;
    --bg-light: #fdfbf9;
    --bg-card: #ffffff;
    --border-color: #e8ddd4;
    
    --shadow-sm: 0 2px 8px rgba(116, 82, 61, 0.08);
    --shadow-md: 0 4px 16px rgba(116, 82, 61, 0.12);
    --shadow-lg: 0 8px 32px rgba(116, 82, 61, 0.16);
    
    --radius: 8px;
    --radius-lg: 11px;
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

[data-bs-theme="dark"] {
    --primary-color: #ff8c4a;
    --primary-dark: #e07a3d;
    --primary-light: #2a1f1a;
    --secondary-color: #c4b5aa;
    --secondary-dark: #f5ebe3;
    
    --text-primary: #f5ebe3;
    --text-secondary: #c4b5aa;
    --bg-light: #1a1410;
    --bg-card: #241a15;
    --border-color: rgba(217, 118, 56, 0.15);
    
    --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.3);
    --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.4);
    --shadow-lg: 0 8px 32px rgba(0, 0, 0, 0.5);
}

body {
    color: var(--text-primary);
}

/* Service Boxes */
.service-box {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
}

.service-box:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.service-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-light);
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.service-icon i {
    font-size: 32px;
    color: var(--primary-color);
}

.service-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.service-description {
    color: var(--text-secondary);
    margin-bottom: 1.5rem;
    line-height: 1.7;
}

.service-features {
    list-style: none;
    padding: 0;
    margin: 0;
}

.service-features li {
    padding: 0.5rem 0;
    color: var(--text-secondary);
    display: flex;
    align-items: center;
}

.service-features i {
    color: var(--primary-color);
    margin-right: 0.75rem;
    font-size: 1.1rem;
}

/* Process Timeline */
.process-timeline {
    position: relative;
    padding: 2rem 0;
}

.process-timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 3px;
    background: var(--primary-color);
    transform: translateX(-50%);
    opacity: 0.2;
}

@media (max-width: 991px) {
    .process-timeline::before {
        left: 30px;
    }
}

.timeline-item {
    position: relative;
    margin-bottom: 4rem;
    display: flex;
    align-items: flex-start;
}

.timeline-item:nth-child(even) {
    flex-direction: row-reverse;
}

@media (max-width: 991px) {
    .timeline-item,
    .timeline-item:nth-child(even) {
        flex-direction: row;
    }
}

.timeline-marker {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
}

@media (max-width: 991px) {
    .timeline-marker {
        left: 30px;
    }
}

.timeline-number {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    font-weight: 700;
    box-shadow: var(--shadow-sm);
}

.timeline-content {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    width: calc(50% - 60px);
    margin-left: auto;
    transition: var(--transition);
}

.timeline-content:hover {
    border-color: var(--primary-color);
    box-shadow: var(--shadow-md);
}

.timeline-item:nth-child(even) .timeline-content {
    margin-left: 0;
    margin-right: auto;
}

@media (max-width: 991px) {
    .timeline-content,
    .timeline-item:nth-child(even) .timeline-content {
        width: calc(100% - 90px);
        margin-left: 90px;
        margin-right: 0;
    }
}

.timeline-icon {
    width: 60px;
    height: 60px;
    background: var(--primary-light);
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.timeline-icon i {
    font-size: 28px;
    color: var(--primary-color);
}

.timeline-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.timeline-description {
    color: var(--text-secondary);
    margin-bottom: 1.5rem;
    line-height: 1.7;
}

.timeline-details h5 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.timeline-details ul {
    list-style: none;
    padding: 0;
    margin-bottom: 1.5rem;
}

.timeline-details ul li {
    padding: 0.5rem 0;
    display: flex;
    align-items: flex-start;
    color: var(--text-secondary);
}

.timeline-details ul li i {
    color: var(--primary-color);
    margin-right: 0.75rem;
    margin-top: 0.25rem;
    font-size: 1.1rem;
}

.deliverables {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.deliverables .badge {
    padding: 0.5rem 1rem;
    font-size: 0.85rem;
    font-weight: 600;
    background-color: var(--primary-light) !important;
    color: var(--primary-color) !important;
    border: 1px solid var(--border-color);
}

/* Expertise Cards */
.expertise-card {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    text-align: center;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    height: 100%;
}

.expertise-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.expertise-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.expertise-icon i {
    font-size: 32px;
    color: var(--primary-color);
}

.expertise-card h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.expertise-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0;
    font-size: 0.95rem;
}

/* Sector Badges */
.sector-badge {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 1.5rem 1rem;
    text-align: center;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.75rem;
}

.sector-badge:hover {
    border-color: var(--primary-color);
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
}

.sector-badge i {
    font-size: 2rem;
    color: var(--primary-color);
}

.sector-badge span {
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--text-primary);
}

/* Benefit Cards */
.benefit-card {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    text-align: center;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    height: 100%;
}

.benefit-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.benefit-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.benefit-icon i {
    font-size: 32px;
    color: var(--primary-color);
}

.benefit-card h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.benefit-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0;
}

/* Case Study Cards */
.case-study-card {
    background: var(--bg-card);
    border-radius: var(--radius);
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    overflow: hidden;
    transition: var(--transition);
    height: 100%;
}

.case-study-card:hover {
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.case-header {
    background: var(--primary-light);
    padding: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    border-bottom: 2px solid var(--border-color);
}

.case-icon {
    width: 60px;
    height: 60px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.case-icon i {
    font-size: 28px;
    color: var(--primary-color);
}

.case-header h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin: 0;
    color: var(--text-primary);
}

.case-sector {
    font-size: 0.9rem;
    color: var(--text-secondary);
    margin: 0;
}

.case-body {
    padding: 2rem;
}

.case-body h5 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}

.case-body h5:first-child {
    margin-top: 0;
}

.case-body p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 1rem;
}

.case-results {
    list-style: none;
    padding: 0;
    margin: 0;
}

.case-results li {
    padding: 0.5rem 0;
    color: var(--text-secondary);
    display: flex;
    align-items: flex-start;
}

.case-results i {
    color: var(--primary-color);
    margin-right: 0.75rem;
    margin-top: 0.25rem;
    font-size: 1.1rem;
}

.case-results strong {
    color: var(--primary-color);
    font-weight: 700;
}

/* Accordion Customization */
.accordion-item {
    border: none;
    margin-bottom: 1rem;
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    background: var(--bg-card);
}

.accordion-button {
    background: var(--bg-card);
    color: var(--text-primary);
    font-weight: 600;
    padding: 1.5rem;
    font-size: 1.1rem;
}

.accordion-button:not(.collapsed) {
    background: var(--primary-color);
    color: white;
}

.accordion-button:focus {
    box-shadow: none;
}

.accordion-body {
    padding: 1.5rem;
    color: var(--text-secondary);
    line-height: 1.8;
}

/* CTA Section & Buttons */
.bg-gradient-primary {
    background: var(--primary-color) !important;
}

.btn-primary {
    background-color: var(--primary-color) !important;
    border-color: var(--primary-color) !important;
    color: white !important;
    border-radius: var(--radius);
    padding: 12px 28px;
    font-weight: 600;
    transition: var(--transition);
}

.btn-primary:hover {
    background-color: var(--primary-dark) !important;
    border-color: var(--primary-dark) !important;
    transform: translateY(-2px);
}

.btn-outline-primary {
    background: transparent !important;
    border: 2px solid var(--primary-color) !important;
    color: var(--primary-color) !important;
    border-radius: var(--radius);
    padding: 12px 28px;
    font-weight: 600;
    transition: var(--transition);
}

.btn-outline-primary:hover {
    background-color: var(--primary-color) !important;
    color: white !important;
    transform: translateY(-2px);
}

/* Dark mode specific for CTA */
[data-bs-theme="dark"] .bg-gradient-primary .btn-light {
    background-color: white !important;
    color: var(--primary-color) !important;
    border-color: white !important;
}

[data-bs-theme="dark"] .bg-gradient-primary .btn-light:hover {
    background-color: var(--bg-card) !important;
    color: var(--primary-color) !important;
}

[data-bs-theme="dark"] .bg-gradient-primary .btn-outline-light {
    border-color: white !important;
    color: white !important;
}

[data-bs-theme="dark"] .bg-gradient-primary .btn-outline-light:hover {
    background-color: white !important;
    color: var(--primary-color) !important;
}

/* Utility Classes */
.text-gradient {
    background: none;
    -webkit-background-clip: initial;
    -webkit-text-fill-color: initial;
    color: var(--primary-color);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-primary);
}

.section-subtitle {
    font-size: 1.1rem;
    color: var(--text-secondary);
    max-width: 700px;
}

/* Responsive */
@media (max-width: 768px) {
    .section-title {
        font-size: 2rem;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .case-header {
        flex-direction: column;
        text-align: center;
    }
    
    .sector-badge {
        padding: 1rem 0.75rem;
    }
    
    .sector-badge i {
        font-size: 1.5rem;
    }
    
    .sector-badge span {
        font-size: 0.8rem;
    }
}

/* Additional responsive adjustments */
@media (max-width: 576px) {
    .timeline-number {
        width: 50px;
        height: 50px;
        font-size: 1.25rem;
    }
    
    .timeline-icon {
        width: 50px;
        height: 50px;
    }
    
    .timeline-icon i {
        font-size: 24px;
    }
    
    .service-icon,
    .expertise-icon,
    .benefit-icon {
        width: 60px;
        height: 60px;
    }
    
    .service-icon i,
    .expertise-icon i,
    .benefit-icon i {
        font-size: 28px;
    }
}

/* Smooth scrolling for anchor links */
html {
    scroll-behavior: smooth;
}

/* Focus states for accessibility */
.service-box:focus-within,
.expertise-card:focus-within,
.benefit-card:focus-within,
.case-study-card:focus-within {
    outline: 2px solid var(--primary-color);
    outline-offset: 2px;
}

/* Print styles */
@media print {
    .process-timeline::before {
        display: none;
    }
    
    .timeline-marker {
        position: relative;
        left: 0;
        transform: none;
    }
    
    .timeline-content {
        width: 100%;
        margin: 0 !important;
        page-break-inside: avoid;
    }
}

/* Animation delays for sequential appearance */
[data-aos] {
    pointer-events: none;
}

[data-aos].aos-animate {
    pointer-events: auto;
}

/* Ensure proper contrast in all themes */
@media (prefers-contrast: high) {
    .service-box,
    .expertise-card,
    .benefit-card,
    .case-study-card {
        border-width: 2px;
    }
    
    .timeline-number,
    .service-icon i,
    .expertise-icon i,
    .benefit-icon i {
        font-weight: 700;
    }
}
</style>

<?php get_part('includes/footer.php'); ?>
