<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Formação Corporativa - MEFEMA Systems";
get_part('includes/header.php');
?>
<link rel="stylesheet" href="/assets/css/produtos.css">

<!-- Hero Section -->
<section class="landing-hero-websites">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="hero-badge mb-4" data-aos="fade-up">
                    <i class="ri-graduation-cap-line text-primary"></i>
                    <span class="badge-text">Capacitação e Desenvolvimento Profissional</span>
                </div>
                <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                    Formação <span class="text-gradient">Corporativa</span>
                </h1>
                <p class="hero-subtitle mx-auto mb-4" data-aos="fade-up" data-aos-delay="200">
                    Capacite a sua equipa com formações práticas e personalizadas em tecnologias digitais, ferramentas de produtividade e cibersegurança.
                </p>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <i class="ri-user-star-line"></i>
                        <strong>500+</strong>
                        <span>Profissionais Formados</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-building-line"></i>
                        <strong>80+</strong>
                        <span>Empresas Atendidas</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-award-line"></i>
                        <strong>95%</strong>
                        <span>Satisfação</span>
                    </div>
                </div>
                <div class="mt-5" data-aos="fade-up" data-aos-delay="400">
                    <a href="#landingContact" class="btn btn-primary btn-lg me-3">
                        <i class="ri-mail-send-line me-2"></i>
                        Solicitar Proposta
                    </a>
                    <a href="#programas-formacao" class="btn btn-outline-primary btn-lg">
                        <i class="ri-arrow-down-line me-2"></i>
                        Ver Programas
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nossos Programas de Formação -->
<section class="section-py bg-light" id="programas-formacao">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Nossos Programas</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Formações práticas e personalizadas para elevar as competências da sua equipa
            </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-global-line"></i>
                    </div>
                    <h4 class="service-title">Literacia Digital</h4>
                    <p class="service-description">
                        Competências digitais essenciais para o ambiente de trabalho moderno.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Fundamentos de informática</li>
                        <li><i class="ri-check-line"></i> Navegação web segura</li>
                        <li><i class="ri-check-line"></i> Gestão de emails e comunicação</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-tools-line"></i>
                    </div>
                    <h4 class="service-title">Ferramentas de Produtividade</h4>
                    <p class="service-description">
                        Domine ferramentas que otimizam o trabalho diário e aumentam a eficiência.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Microsoft Office 365</li>
                        <li><i class="ri-check-line"></i> Google Workspace</li>
                        <li><i class="ri-check-line"></i> Automação de tarefas</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-shield-check-line"></i>
                    </div>
                    <h4 class="service-title">Cibersegurança</h4>
                    <p class="service-description">
                        Proteja a sua empresa contra ameaças digitais com boas práticas de segurança.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Identificação de phishing</li>
                        <li><i class="ri-check-line"></i> Gestão segura de passwords</li>
                        <li><i class="ri-check-line"></i> Conformidade RGPD</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-settings-2-line"></i>
                    </div>
                    <h4 class="service-title">Sistemas Específicos</h4>
                    <p class="service-description">
                        Formação personalizada nos sistemas e software da sua organização.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> ERP e sistemas de gestão</li>
                        <li><i class="ri-check-line"></i> CRM e ferramentas internas</li>
                        <li><i class="ri-check-line"></i> Software sectorial</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-lightbulb-line"></i>
                    </div>
                    <h4 class="service-title">Workshops de Novas Tecnologias</h4>
                    <p class="service-description">
                        Mantenha a equipa actualizada com tendências e inovações tecnológicas.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Inteligência Artificial</li>
                        <li><i class="ri-check-line"></i> Cloud Computing</li>
                        <li><i class="ri-check-line"></i> Transformação Digital</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-bar-chart-box-line"></i>
                    </div>
                    <h4 class="service-title">Treinamento em Software de Gestão</h4>
                    <p class="service-description">
                        Capacitação completa em software de gestão empresarial.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Power BI e análise de dados</li>
                        <li><i class="ri-check-line"></i> Gestão de projectos (Jira/MS Project)</li>
                        <li><i class="ri-check-line"></i> Business Intelligence</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nosso Processo de Formação -->
<section class="section-py" id="nosso-processo">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Nosso Processo</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Metodologia prática e personalizada para resultados efectivos de aprendizagem
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
                    <h3 class="timeline-title">Diagnóstico de Necessidades</h3>
                    <p class="timeline-description">
                        Análise detalhada das competências actuais e lacunas da equipa.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Entrevistas com gestores</li>
                            <li><i class="ri-checkbox-circle-line"></i> Avaliação de competências</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Fase 2 -->
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <div class="timeline-number">02</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                    <h3 class="timeline-title">Planeamento Personalizado</h3>
                    <p class="timeline-description">
                        Programa customizado alinhado aos objectivos da empresa.
                    </p>
                    <div class="timeline-details">
                        <h5>Formatos:</h5>
                        <div class="deliverables">
                            <span class="badge bg-success">Presencial</span>
                            <span class="badge bg-success">Online</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 3 -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">03</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-presentation-line"></i>
                    </div>
                    <h3 class="timeline-title">Execução da Formação</h3>
                    <p class="timeline-description">
                        Sessões práticas com instrutores experientes.
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
                        <i class="ri-medal-line"></i>
                    </div>
                    <h3 class="timeline-title">Avaliação e Certificação</h3>
                    <p class="timeline-description">
                        Certificados reconhecidos e relatório de desempenho.
                    </p>
                </div>
            </div>

            <!-- Fase 5 -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">05</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-line-chart-line"></i>
                    </div>
                    <h3 class="timeline-title">Acompanhamento Pós-Formação</h3>
                    <p class="timeline-description">
                        Suporte contínuo para aplicação dos conhecimentos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filosofia MEFEMA -->
<section class="section-py bg-light" id="filosofia">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Filosofia MEFEMA</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Nossa abordagem combina prática, personalização e resultados mensuráveis
            </p>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="ri-user-settings-line"></i>
                    </div>
                    <h4>100% Personalizado</h4>
                    <p>Conteúdo adaptado à realidade da sua empresa.</p>
                </div>
            </div>
            <!-- Repete para os outros 3 cartões similares ao código original -->
            <!-- ... (adiciona os restantes como no exemplo de software) -->
        </div>
        <!-- Caixa de valores MEFEMA (mantém como no original, adaptando texto se necessário) -->
    </div>
</section>

<!-- Tecnologias e Ferramentas -->
<section class="section-py" id="tecnologias">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Ferramentas e Tecnologias</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Utilizamos as melhores ferramentas para formações modernas
            </p>
        </div>
        <div class="row g-4">
            <!-- Adiciona categorias como Microsoft 365, Google Workspace, ferramentas de cibersegurança, etc. -->
        </div>
    </div>
</section>

<!-- Por que escolher MEFEMA -->
<section class="section-py bg-light" id="porque-mefema">
    <div class="container">
        <!-- Grid de why-card similar ao de software, adaptado a formação -->
    </div>
</section>

<?php get_part('includes/footer.php'); ?>
