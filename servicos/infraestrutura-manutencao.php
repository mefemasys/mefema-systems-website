<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Infraestrutura e Manutenção - MEFEMA Systems";

get_part('includes/header.php'); 
?>
<link rel="stylesheet" href="/assets/css/infraestrutura.css">

<?php get_part('pages/servicos/infraestrutura/hero.php'); ?>

<!-- Nossos Serviços -->
<section class="section-py bg-light" id="nossos-servicos">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Nossos Serviços</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Oferecemos uma gama completa de soluções de infraestrutura para sustentar o crescimento da sua empresa.
            </p>
        </div>

        <div class="row g-4">
            <!-- Implementação de Redes -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-router-line"></i>
                    </div>
                    <h4 class="service-title">Implementação de Redes</h4>
                    <p class="service-description">
                        Projecto e execução de redes estruturadas para garantir conectividade estável e segura em todo o seu ambiente corporativo.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Cablagem Estruturada (Cat6/Fibra)</li>
                        <li><i class="ri-check-line"></i> Routing & Switching Avançado</li>
                        <li><i class="ri-check-line"></i> Wi-Fi Corporativo de Alta Densidade</li>
                        <li><i class="ri-check-line"></i> Sistemas de CCTV e Segurança IP</li>
                    </ul>
                </div>
            </div>

            <!-- Serviços em Nuvem -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-cloud-line"></i>
                    </div>
                    <h4 class="service-title">Serviços em Nuvem (IaaS)</h4>
                    <p class="service-description">
                        Migração e gestão de infraestrutura na nuvem, proporcionando escalabilidade, redução de custos e mobilidade.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Servidores Virtuais (VPS)</li>
                        <li><i class="ri-check-line"></i> Armazenamento em Nuvem Escalável</li>
                        <li><i class="ri-check-line"></i> Migração de Infraestrutura Local</li>
                        <li><i class="ri-check-line"></i> Gestão de Ambientes Híbridos</li>
                    </ul>
                </div>
            </div>

            <!-- Suporte Técnico -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-tools-line"></i>
                    </div>
                    <h4 class="service-title">Suporte Técnico</h4>
                    <p class="service-description">
                        Assistência técnica especializada, tanto remota quanto presencial, para resolver incidentes e manter a produtividade.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Helpdesk Remoto 24/7</li>
                        <li><i class="ri-check-line"></i> Manutenção Preventiva e Correctiva</li>
                        <li><i class="ri-check-line"></i> Suporte On-site Especializado</li>
                        <li><i class="ri-check-line"></i> Gestão de Activos de TI</li>
                    </ul>
                </div>
            </div>

            <!-- Backup e Recuperação -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-database-2-line"></i>
                    </div>
                    <h4 class="service-title">Backup e Recuperação</h4>
                    <p class="service-description">
                        Estratégias rigorosas de protecção de dados para garantir que a sua informação esteja sempre segura e recuperável.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Backup Automatizado (Local/Nuvem)</li>
                        <li><i class="ri-check-line"></i> Disaster Recovery Plan (DRP)</li>
                        <li><i class="ri-check-line"></i> Recuperação de Dados Críticos</li>
                        <li><i class="ri-check-line"></i> Auditoria de Integridade de Dados</li>
                    </ul>
                </div>
            </div>

            <!-- Gestão de Servidores -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-terminal-box-line"></i>
                    </div>
                    <h4 class="service-title">Gestão de Servidores</h4>
                    <p class="service-description">
                        Administração completa de servidores e bases de dados, focada em performance, segurança e optimização.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Administração de Sistemas (SysAdmin)</li>
                        <li><i class="ri-check-line"></i> Optimização de Bases de Dados</li>
                        <li><i class="ri-check-line"></i> Monitorização de Performance</li>
                        <li><i class="ri-check-line"></i> Actualizações e Patches de Segurança</li>
                    </ul>
                </div>
            </div>

            <!-- Consultoria de Infraestrutura -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-lightbulb-line"></i>
                    </div>
                    <h4 class="service-title">Consultoria de Infra</h4>
                    <p class="service-description">
                        Análise e planeamento estratégico para modernizar a sua infraestrutura de TI e alinhar com os objectivos do negócio.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Auditoria de Infraestrutura</li>
                        <li><i class="ri-check-line"></i> Planeamento de Capacidade</li>
                        <li><i class="ri-check-line"></i> Desenho de Soluções Escaláveis</li>
                        <li><i class="ri-check-line"></i> ROI em Investimentos de TI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nosso Processo -->
<section class="section-py" id="nosso-processo">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Nosso Processo</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Metodologia estruturada para garantir que a sua infraestrutura seja implementada e mantida com excelência.
            </p>
        </div>

        <div class="process-timeline">
            <!-- Fase 1 -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">01</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-search-eye-line"></i>
                    </div>
                    <h3 class="timeline-title">Diagnóstico e Auditoria</h3>
                    <p class="timeline-description">
                        Realizamos um levantamento detalhado do estado actual da sua infraestrutura para identificar gargalos, riscos e oportunidades de melhoria.
                    </p>
                </div>
            </div>

            <!-- Fase 2 -->
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <div class="timeline-number">02</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-pencil-ruler-2-line"></i>
                    </div>
                    <h3 class="timeline-title">Projecto e Planeamento</h3>
                    <p class="timeline-description">
                        Desenhamos a solução ideal, seleccionando os melhores equipamentos e tecnologias que atendam às suas necessidades actuais e futuras.
                    </p>
                </div>
            </div>

            <!-- Fase 3 -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">03</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-rocket-line"></i>
                    </div>
                    <h3 class="timeline-title">Implementação e Migração</h3>
                    <p class="timeline-description">
                        Executamos a instalação e configuração dos sistemas com o mínimo de interrupção possível para as suas operações.
                    </p>
                </div>
            </div>

            <!-- Fase 4 -->
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <div class="timeline-number">04</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-shield-flash-line"></i>
                    </div>
                    <h3 class="timeline-title">Monitorização e Suporte</h3>
                    <p class="timeline-description">
                        Mantemos uma vigilância constante sobre os seus sistemas, garantindo que tudo funcione perfeitamente e intervindo proactivamente.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_part('includes/footer.php'); ?>
