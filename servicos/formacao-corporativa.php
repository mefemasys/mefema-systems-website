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
                    <span class="badge-text">Capacitação Profissional de Excelência</span>
                </div>
                <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                    Formação <span class="text-gradient">Corporativa</span>
                </h1>
                <p class="hero-subtitle mx-auto mb-4" data-aos="fade-up" data-aos-delay="200">
                    Capacitamos as suas equipas com formações práticas e personalizadas em tecnologia, ferramentas digitais e cibersegurança.
                </p>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <i class="ri-group-line"></i>
                        <strong>500+</strong>
                        <span>Profissionais Formados</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-building-line"></i>
                        <strong>50+</strong>
                        <span>Empresas Atendidas</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-star-line"></i>
                        <strong>4.8/5</strong>
                        <span>Avaliação Média</span>
                    </div>
                </div>
                <div class="mt-5" data-aos="fade-up" data-aos-delay="400">
                    <a href="#landingContact" class="btn btn-primary btn-lg me-3">
                        <i class="ri-mail-send-line me-2"></i>
                        Solicitar Proposta
                    </a>
                    <a href="#nosso-processo" class="btn btn-outline-primary btn-lg">
                        <i class="ri-arrow-down-line me-2"></i>
                        Conheça o Processo
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nossos Cursos -->
<section class="section-py bg-light" id="servicos">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Nossos Cursos</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Programas de formação adaptados às necessidades da sua empresa e equipa
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-computer-line"></i>
                    </div>
                    <h4 class="service-title">Literacia Digital</h4>
                    <p class="service-description">
                        Capacitação fundamental em competências digitais essenciais para o ambiente de trabalho moderno, desde o básico até habilidades avançadas.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Fundamentos de informática</li>
                        <li><i class="ri-check-line"></i> Navegação e pesquisa na internet</li>
                        <li><i class="ri-check-line"></i> Gestão de e-mail e comunicação digital</li>
                        <li><i class="ri-check-line"></i> Organização de ficheiros e pastas</li>
                        <li><i class="ri-check-line"></i> Trabalho colaborativo online</li>
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
                        Formação prática em suites de escritório e ferramentas de produtividade para maximizar a eficiência da sua equipa.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Microsoft Office 365 (Word, Excel, PowerPoint)</li>
                        <li><i class="ri-check-line"></i> Google Workspace (Docs, Sheets, Slides)</li>
                        <li><i class="ri-check-line"></i> Gestão de projectos (Trello, Asana, Monday)</li>
                        <li><i class="ri-check-line"></i> Ferramentas de colaboração (Teams, Slack, Zoom)</li>
                        <li><i class="ri-check-line"></i> Automação de tarefas e produtividade</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-shield-keyhole-line"></i>
                    </div>
                    <h4 class="service-title">Cibersegurança</h4>
                    <p class="service-description">
                        Formação essencial em segurança digital para proteger a sua empresa contra ameaças cibernéticas e garantir conformidade.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Boas práticas de segurança digital</li>
                        <li><i class="ri-check-line"></i> Identificação de phishing e malware</li>
                        <li><i class="ri-check-line"></i> Gestão segura de passwords</li>
                        <li><i class="ri-check-line"></i> Protecção de dados e RGPD</li>
                        <li><i class="ri-check-line"></i> Segurança em redes sociais e cloud</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-settings-4-line"></i>
                    </div>
                    <h4 class="service-title">Sistemas Específicos</h4>
                    <p class="service-description">
                        Treinamento personalizado nos sistemas e softwares específicos utilizados pela sua empresa para operações diárias.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Sistemas ERP e CRM personalizados</li>
                        <li><i class="ri-check-line"></i> Plataformas de e-commerce</li>
                        <li><i class="ri-check-line"></i> Software de gestão empresarial</li>
                        <li><i class="ri-check-line"></i> Ferramentas de contabilidade e finanças</li>
                        <li><i class="ri-check-line"></i> Sistemas de recursos humanos</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-lightbulb-flash-line"></i>
                    </div>
                    <h4 class="service-title">Workshops de Novas Tecnologias</h4>
                    <p class="service-description">
                        Sessões interactivas sobre tecnologias emergentes e tendências digitais para manter a sua equipa actualizada.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Inteligência Artificial e ChatGPT</li>
                        <li><i class="ri-check-line"></i> Transformação Digital</li>
                        <li><i class="ri-check-line"></i> Cloud Computing e SaaS</li>
                        <li><i class="ri-check-line"></i> Marketing Digital e Redes Sociais</li>
                        <li><i class="ri-check-line"></i> Big Data e Analytics</li>
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
                        Formação especializada em plataformas de gestão empresarial para optimizar processos e aumentar produtividade.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> SAP e Oracle ERP</li>
                        <li><i class="ri-check-line"></i> Salesforce e HubSpot CRM</li>
                        <li><i class="ri-check-line"></i> Sistemas de gestão de stocks</li>
                        <li><i class="ri-check-line"></i> Business Intelligence (Power BI, Tableau)</li>
                        <li><i class="ri-check-line"></i> Gestão de projectos avançada</li>
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
                Metodologia estruturada para garantir formações eficazes e resultados mensuráveis
            </p>
        </div>

        <!-- Processo Timeline -->
        <div class="process-timeline">
            
            <!-- Fase 1: Diagnóstico de Necessidades -->
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
                        Iniciamos com uma análise profunda das competências actuais da sua equipa e identificação de gaps de conhecimento.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Reuniões com gestores e RH</li>
                            <li><i class="ri-checkbox-circle-line"></i> Avaliação de competências actuais</li>
                            <li><i class="ri-checkbox-circle-line"></i> Identificação de gaps de conhecimento</li>
                            <li><i class="ri-checkbox-circle-line"></i> Análise de objectivos organizacionais</li>
                            <li><i class="ri-checkbox-circle-line"></i> Levantamento de expectativas</li>
                        </ul>
                        <h5 class="mt-3">Entregáveis:</h5>
                        <div class="deliverables">
                            <span class="badge bg-primary">Relatório de Diagnóstico</span>
                            <span class="badge bg-primary">Mapa de Competências</span>
                            <span class="badge bg-primary">Plano de Acção</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 2: Planeamento Personalizado -->
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <div class="timeline-number">02</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-calendar-check-line"></i>
                    </div>
                    <h3 class="timeline-title">Planeamento Personalizado</h3>
                    <p class="timeline-description">
                        Desenvolvemos um programa de formação sob medida, alinhado com os objectivos estratégicos da sua empresa.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Desenho de conteúdos personalizados</li>
                            <li><i class="ri-checkbox-circle-line"></i> Definição de objectivos de aprendizagem</li>
                            <li><i class="ri-checkbox-circle-line"></i> Selecção de metodologias pedagógicas</li>
                            <li><i class="ri-checkbox-circle-line"></i> Calendarização de sessões</li>
                            <li><i class="ri-checkbox-circle-line"></i> Preparação de materiais didácticos</li>
                            <li><i class="ri-checkbox-circle-line"></i> Definição de métricas de sucesso</li>
                        </ul>
                        <h5 class="mt-3">Abordagens utilizadas:</h5>
                        <div class="deliverables">
                            <span class="badge bg-success">Presencial</span>
                            <span class="badge bg-success">Online ao Vivo</span>
                            <span class="badge bg-success">Híbrido</span>
                            <span class="badge bg-success">E-Learning</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 3: Preparação de Conteúdos -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">03</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-file-edit-line"></i>
                    </div>
                    <h3 class="timeline-title">Preparação de Conteúdos</h3>
                    <p class="timeline-description">
                        Criamos materiais de formação de alta qualidade, com exemplos práticos relevantes para o contexto da sua empresa.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Desenvolvimento de apresentações interactivas</li>
                            <li><i class="ri-checkbox-circle-line"></i> Criação de manuais e guias práticos</li>
                            <li><i class="ri-checkbox-circle-line"></i> Preparação de exercícios e casos de estudo</li>
                            <li><i class="ri-checkbox-circle-line"></i> Vídeos tutoriais e recursos multimédia</li>
                            <li><i class="ri-checkbox-circle-line"></i> Questionários de avaliação</li>
                            <li><i class="ri-checkbox-circle-line"></i> Material de apoio pós-formação</li>
                        </ul>
                        <h5 class="mt-3">Recursos:</h5>
                        <div class="deliverables">
                            <span class="badge bg-info">Slides Interactivos</span>
                            <span class="badge bg-info">Manuais PDF</span>
                            <span class="badge bg-info">Vídeos</span>
                            <span class="badge bg-info">Exercícios Práticos</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 4: Execução da Formação -->
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <div class="timeline-number">04</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-presentation-line"></i>
                    </div>
                    <h3 class="timeline-title">Execução da Formação</h3>
                    <p class="timeline-description">
                        Realizamos as sessões de formação com metodologias activas e participativas, garantindo máximo aproveitamento.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Sessões teóricas e práticas equilibradas</li>
                            <li><i class="ri-checkbox-circle-line"></i> Exercícios hands-on e simulações</li>
                            <li><i class="ri-checkbox-circle-line"></i> Discussões em grupo e brainstorming</li>
                            <li><i class="ri-checkbox-circle-line"></i> Resolução de problemas reais</li>
                            <li><i class="ri-checkbox-circle-line"></i> Sessões de Q&A e esclarecimento de dúvidas</li>
                            <li><i class="ri-checkbox-circle-line"></i> Acompanhamento individualizado</li>
                            <li><i class="ri-checkbox-circle-line"></i> Adaptação dinâmica ao ritmo da turma</li>
                        </ul>
                        <h5 class="mt-3">Metodologias:</h5>
                        <div class="deliverables">
                            <span class="badge bg-warning">Learning by Doing</span>
                            <span class="badge bg-warning">Gamificação</span>
                            <span class="badge bg-warning">Estudos de Caso</span>
                            <span class="badge bg-warning">Microlearning</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 5: Avaliação de Conhecimentos -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">05</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                    <h3 class="timeline-title">Avaliação de Conhecimentos</h3>
                    <p class="timeline-description">
                        Avaliamos o progresso e assimilação dos conteúdos através de testes práticos e teóricos adequados.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Testes de conhecimentos teóricos</li>
                            <li><i class="ri-checkbox-circle-line"></i> Avaliações práticas hands-on</li>
                            <li><i class="ri-checkbox-circle-line"></i> Projectos finais aplicados</li>
                            <li><i class="ri-checkbox-circle-line"></i> Feedback individual aos formandos</li>
                            <li><i class="ri-checkbox-circle-line"></i> Identificação de áreas de melhoria</li>
                            <li><i class="ri-checkbox-circle-line"></i> Certificação de conclusão</li>
                        </ul>
                        <h5 class="mt-3">Tipos de Avaliação:</h5>
                        <div class="deliverables">
                            <span class="badge bg-danger">Diagnóstica</span>
                            <span class="badge bg-danger">Formativa</span>
                            <span class="badge bg-danger">Sumativa</span>
                            <span class="badge bg-danger">Prática</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 6: Certificação e Reconhecimento -->
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <div class="timeline-number">06</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-award-line"></i>
                    </div>
                    <h3 class="timeline-title">Certificação e Reconhecimento</h3>
                    <p class="timeline-description">
                        Emitimos certificados oficiais de participação e aprovação, reconhecendo as competências adquiridas.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Emissão de certificados oficiais</li>
                            <li><i class="ri-checkbox-circle-line"></i> Validação de competências adquiridas</li>
                            <li><i class="ri-checkbox-circle-line"></i> Relatório de desempenho individual</li>
                            <li><i class="ri-checkbox-circle-line"></i> Badges digitais de conclusão</li>
                            <li><i class="ri-checkbox-circle-line"></i> Registo em plataforma LMS</li>
                            <li><i class="ri-checkbox-circle-line"></i> Cerimónia de entrega (opcional)</li>
                        </ul>
                        <h5 class="mt-3">Certificações:</h5>
                        <div class="deliverables">
                            <span class="badge bg-secondary">Certificado MEFEMA</span>
                            <span class="badge bg-secondary">Badge Digital</span>
                            <span class="badge bg-secondary">Portfolio de Competências</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 7: Acompanhamento e Suporte Contínuo -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">07</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-customer-service-line"></i>
                    </div>
                    <h3 class="timeline-title">Acompanhamento e Suporte Contínuo</h3>
                    <p class="timeline-description">
                        Fornecemos apoio pós-formação para garantir aplicação prática dos conhecimentos e esclarecimento de dúvidas.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Sessões de follow-up (30, 60, 90 dias)</li>
                            <li><i class="ri-checkbox-circle-line"></i> Suporte técnico via email/chat</li>
                            <li><i class="ri-checkbox-circle-line"></i> Comunidade online de formandos</li>
                            <li><i class="ri-checkbox-circle-line"></i> Material complementar actualizado</li>
                            <li><i class="ri-checkbox-circle-line"></i> Workshops de reforço opcionais</li>
                            <li><i class="ri-checkbox-circle-line"></i> Avaliação de impacto organizacional</li>
                            <li><i class="ri-checkbox-circle-line"></i> Planos de formação contínua</li>
                        </ul>
                        <h5 class="mt-3">Suporte Incluído:</h5>
                        <div class="deliverables">
                            <span class="badge bg-primary">30 dias</span>
                            <span class="badge bg-primary">60 dias</span>
                            <span class="badge bg-primary">90 dias</span>
                            <span class="badge bg-primary">Comunidade Online</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Metodologia MEFEMA -->
<section class="section-py bg-light" id="filosofia">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Metodologia MEFEMA</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Nossa abordagem pedagógica inovadora que garante resultados mensuráveis e duradouros
            </p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="ri-focus-3-line"></i>
                    </div>
                    <h4>Foco no Participante</h4>
                    <p>Formações centradas nas necessidades reais dos formandos, com ritmo adaptado e exemplos contextualizados.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="ri-hand-heart-line"></i>
                    </div>
                    <h4>Aprendizagem Prática</h4>
                    <p>80% prática e 20% teoria para garantir assimilação real e aplicação imediata no trabalho.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="ri-line-chart-line"></i>
                    </div>
                    <h4>Resultados Mensuráveis</h4>
                    <p>Avaliações objectivas e métricas claras para acompanhar o progresso e ROI da formação.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="ri-refresh-line"></i>
                    </div>
                    <h4>Actualização Constante</h4>
                    <p>Conteúdos sempre actualizados com as últimas tendências e melhores práticas do mercado.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <div class="mefema-values-box">
                    <h3 class="text-center mb-4">
                        <i class="ri-star-line me-2"></i>
                        Os Princípios MEFEMA de Formação
                    </h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="value-item">
                                <div class="value-letter">M</div>
                                <div class="value-content">
                                    <h5>Metodologia</h5>
                                    <p>Abordagens pedagógicas comprovadas e adaptadas ao adulto</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="value-item">
                                <div class="value-letter">E</div>
                                <div class="value-content">
                                    <h5>Eficácia</h5>
                                    <p>Foco em resultados práticos e aplicação imediata</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="value-item">
                                <div class="value-letter">M</div>
                                <div class="value-content">
                                    <h5>Motivação</h5>
                                    <p>Ambientes de aprendizagem envolventes e estimulantes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="value-item">
                                <div class="value-letter">A</div>
                                <div class="value-content">
                                    <h5>Acompanhamento</h5>
                                    <p>Suporte contínuo mesmo após conclusão da formação</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formatos de Formação -->
<section class="section-py" id="tecnologias">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Formatos de Formação</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Oferecemos diversos formatos para se adequar às necessidades da sua empresa
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-category">
                    <h4><i class="ri-map-pin-user-line me-2"></i>Presencial</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">In-company</span>
                        <span class="tech-tag">Workshops</span>
                        <span class="tech-tag">Bootcamps</span>
                        <span class="tech-tag">Sessões práticas</span>
                        <span class="tech-tag">Treino no local</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-category">
                    <h4><i class="ri-live-line me-2"></i>Online ao Vivo</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">Webinars</span>
                        <span class="tech-tag">Aulas virtuais</span>
                        <span class="tech-tag">Zoom/Teams</span>
                        <span class="tech-tag">Interactivo</span>
                        <span class="tech-tag">Tempo real</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="tech-category">
                    <h4><i class="ri-global-line me-2"></i>E-Learning</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">Assíncrono</span>
                        <span class="tech-tag">Plataforma LMS</span>
                        <span class="tech-tag">Vídeo-aulas</span>
                        <span class="tech-tag">Auto-ritmo</span>
                        <span class="tech-tag">24/7 Acesso</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="tech-category">
                    <h4><i class="ri-git-merge-line me-2"></i>Híbrido</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">Blended Learning</span>
                        <span class="tech-tag">Online + Presencial</span>
                        <span class="tech-tag">Flexível</span>
                        <span class="tech-tag">Personalizado</span>
                        <span class="tech-tag">Best of Both</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Por que escolher MEFEMA -->
<section class="section-py bg-light" id="porque-mefema">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                Por que Escolher a <span class="text-gradient">MEFEMA Systems</span>?
            </h2>
            <p class="section-subtitle mx-auto">
                Somos mais que uma empresa de formação - somos o seu parceiro de desenvolvimento
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-user-star-line"></i>
                    </div>
                    <h4>Formadores Certificados</h4>
                    <p>Equipa de formadores experientes com certificações internacionais e vasta experiência prática em contexto empresarial.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-settings-5-line"></i>
                    </div>
                    <h4>Conteúdos Personalizados</h4>
                    <p>Cada formação é adaptada à realidade e necessidades específicas da sua empresa e sector de actividade.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-hand-coin-line"></i>
                    </div>
                    <h4>ROI Comprovado</h4>
                    <p>Medimos o impacto das formações através de KPIs claros e relatórios de retorno sobre investimento.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-calendar-todo-line"></i>
                    </div>
                    <h4>Horários Flexíveis</h4>
                    <p>Adaptamos os horários de formação à disponibilidade da sua equipa, minimizando impacto nas operações.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-file-shield-2-line"></i>
                    </div>
                    <h4>Certificações Oficiais</h4>
                    <p>Certificados reconhecidos que valorizam o CV dos colaboradores e demonstram investimento em capital humano.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-headphone-line"></i>
                    </div>
                    <h4>Suporte Pós-Formação</h4>
                    <p>Acompanhamento contínuo durante 90 dias após a formação para garantir aplicação efectiva dos conhecimentos.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section-py" id="faq">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Perguntas Frequentes</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Respostas às dúvidas mais comuns sobre nossos programas de formação
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="faqAccordion">
                    
                    <div class="accordion-item" data-aos="fade-up">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Qual o tamanho ideal de turma para formações corporativas?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Recomendamos turmas de 8 a 15 participantes para formações presenciais práticas, garantindo atenção individualizada. Para workshops teóricos, podemos trabalhar com até 30 participantes. Para formações online, recomendamos grupos de 10 a 20 pessoas para manter interactividade.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                As formações podem ser realizadas nas instalações da nossa empresa?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sim! Oferecemos formações in-company nas suas instalações. Apenas necessitamos de uma sala adequada com equipamento básico (projector, quadro). Para formações práticas em informática, é necessário que os participantes tenham acesso a computadores.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Quanto tempo dura uma formação típica?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                A duração varia conforme o tema e profundidade desejada. Workshops intensivos podem durar 4-8 horas (1 dia), formações intermédias 2-5 dias, e programas completos podem estender-se por várias semanas com sessões regulares. Personalizamos a duração às suas necessidades.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Os participantes recebem certificados?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sim! Todos os participantes que concluam a formação com aproveitamento recebem certificado oficial MEFEMA Systems, especificando o conteúdo programático, carga horária e competências adquiridas. Para algumas formações, também oferecemos preparação para certificações internacionais.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Como é feita a avaliação do aproveitamento dos formandos?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Utilizamos múltiplos métodos de avaliação: testes de diagnóstico inicial, avaliações formativas durante as sessões, exercícios práticos, projectos aplicados e avaliação final. Fornecemos relatórios individuais de desempenho e feedback personalizado para cada participante.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Que tipo de suporte é oferecido após a formação?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Oferecemos suporte pós-formação durante 90 dias, incluindo: sessões de follow-up agendadas, suporte por email e chat, acesso a materiais complementares, comunidade online de formandos e workshops de reforço opcionais. Este acompanhamento garante aplicação efectiva do aprendizado.
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
                    Pronto para Investir no Desenvolvimento da Sua Equipa?
                </h2>
                <p class="lead mb-5">
                    Agende uma reunião gratuita de diagnóstico e descubra como podemos elevar as competências da sua equipa com formações personalizadas.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="#landingContact" class="btn btn-light btn-lg px-5">
                        <i class="ri-mail-send-line me-2"></i>
                        Solicitar Proposta Grátis
                    </a>
                    <a href="tel:+258840000000" class="btn btn-outline-light btn-lg px-5">
                        <i class="ri-phone-line me-2"></i>
                        (+258) 84 000 0000
                    </a>
                </div>
                <div class="mt-4">
                    <p class="mb-2"><i class="ri-time-line me-2"></i>Resposta em até 24 horas</p>
                    <p class="mb-0"><i class="ri-shield-check-line me-2"></i>Diagnóstico e proposta sem compromisso</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* 
   MEFEMA Systems - Formação Corporativa
   CSS utilizando a mesma paleta laranja e castanho
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
    background-color: transparent;
}

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

.philosophy-card {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    text-align: center;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    height: 100%;
}

.philosophy-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.philosophy-icon {
    width: 80px;
    height: 80px;
    background: var(--primary-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.philosophy-icon i {
    font-size: 36px;
    color: var(--primary-color);
}

.philosophy-card h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.philosophy-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0;
}

.mefema-values-box {
    background: var(--bg-card);
    border-radius: var(--radius-lg);
    padding: 3rem;
    box-shadow: var(--shadow-lg);
    border: 1px solid var(--border-color);
}

.mefema-values-box h3 {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--text-primary);
}

.value-item {
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
    padding: 1.5rem;
    background: var(--bg-light);
    border-radius: var(--radius);
    transition: var(--transition);
}

.value-item:hover {
    background: var(--primary-light);
    transform: translateX(5px);
}

.value-letter {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.75rem;
    font-weight: 700;
    flex-shrink: 0;
}

.value-content h5 {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: var(--text-primary);
}

.value-content p {
    color: var(--text-secondary);
    margin: 0;
    line-height: 1.6;
}

.tech-category {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    height: 100%;
}

.tech-category h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: var(--text-primary);
}

.tech-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
}

.tech-tag {
    background: var(--primary-light);
    color: var(--primary-color);
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    border: 1px solid var(--border-color);
}

.why-card {
    background: var(--bg-card);
    border-radius: var(--radius);
    padding: 2rem;
    text-align: center;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
    transition: var(--transition);
    height: 100%;
}

.why-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.why-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.why-icon i {
    font-size: 32px;
    color: var(--primary-color);
}

.why-card h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.why-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0;
}

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

@media (max-width: 768px) {
    .section-title {
        font-size: 2rem;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .mefema-values-box {
        padding: 2rem 1.5rem;
    }
}
</style>

<?php get_part('includes/footer.php'); ?>
