<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Desenvolvimento de Software - MEFEMA Systems";

get_part('includes/header.php'); 
?>
<link rel="stylesheet" href="/assets/css/produtos.css">

<!-- Hero Section -->
<section class="landing-hero-websites">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="hero-badge mb-4" data-aos="fade-up">
                    <i class="ri-code-s-slash-line text-primary"></i>
                    <span class="badge-text">Engenharia de Software Personalizada</span>
                </div>
                <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                    Desenvolvimento de <span class="text-gradient">Software</span>
                </h1>
                <p class="hero-subtitle mx-auto mb-4" data-aos="fade-up" data-aos-delay="200">
                    Transformamos as suas ideias em soluções digitais robustas, escaláveis e adaptadas às necessidades do seu negócio.
                </p>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <i class="ri-trophy-line"></i>
                        <strong>100+</strong>
                        <span>Projectos</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-team-line"></i>
                        <strong>50+</strong>
                        <span>Clientes Satisfeitos</span>
                    </div>
                    <div class="stat-item">
                        <i class="ri-time-line"></i>
                        <strong>99.9%</strong>
                        <span>Uptime</span>
                    </div>
                </div>
                <div class="mt-5" data-aos="fade-up" data-aos-delay="400">
                    <a href="#landingContact" class="btn btn-primary btn-lg me-3">
                        <i class="ri-mail-send-line me-2"></i>
                        Solicitar Orçamento
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

<!-- Nossos Serviços -->
<section class="section-py bg-light" id="servicos">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Nossos Serviços</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Oferecemos uma gama completa de serviços de desenvolvimento de software para impulsionar o seu negócio
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-window-line"></i>
                    </div>
                    <h4 class="service-title">Aplicações Web</h4>
                    <p class="service-description">
                        Desenvolvimento de aplicações web modernas e responsivas, utilizando as mais recentes tecnologias como React, Vue.js, Next.js e frameworks backend robustos.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Progressive Web Apps (PWA)</li>
                        <li><i class="ri-check-line"></i> Single Page Applications (SPA)</li>
                        <li><i class="ri-check-line"></i> Dashboards e painéis administrativos</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-smartphone-line"></i>
                    </div>
                    <h4 class="service-title">Aplicações Móveis</h4>
                    <p class="service-description">
                        Criação de aplicações móveis nativas e híbridas para iOS e Android, garantindo performance excepcional e experiência de utilizador intuitiva.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Apps nativas (iOS/Android)</li>
                        <li><i class="ri-check-line"></i> Apps híbridas (React Native/Flutter)</li>
                        <li><i class="ri-check-line"></i> Integração com APIs e backend</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-settings-3-line"></i>
                    </div>
                    <h4 class="service-title">Sistemas ERP Simplificados</h4>
                    <p class="service-description">
                        Desenvolvimento de sistemas de gestão empresarial personalizados, adaptados às necessidades específicas do seu negócio e sector de actividade.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Módulos personalizados</li>
                        <li><i class="ri-check-line"></i> Integração com sistemas existentes</li>
                        <li><i class="ri-check-line"></i> Relatórios e análises avançadas</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-shopping-cart-line"></i>
                    </div>
                    <h4 class="service-title">Plataformas de E-commerce</h4>
                    <p class="service-description">
                        Construção de lojas online completas e escaláveis, com integração de pagamentos, gestão de stock e ferramentas de marketing digital.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Gateways de pagamento (M-Pesa, E-Mola)</li>
                        <li><i class="ri-check-line"></i> Gestão de produtos e categorias</li>
                        <li><i class="ri-check-line"></i> Painel administrativo completo</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-plug-line"></i>
                    </div>
                    <h4 class="service-title">Integração de APIs</h4>
                    <p class="service-description">
                        Integração de sistemas legados e APIs de terceiros, garantindo comunicação fluida entre diferentes plataformas e serviços.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> REST e GraphQL APIs</li>
                        <li><i class="ri-check-line"></i> Integração com serviços cloud</li>
                        <li><i class="ri-check-line"></i> Migração de dados</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box h-100">
                    <div class="service-icon">
                        <i class="ri-refresh-line"></i>
                    </div>
                    <h4 class="service-title">Modernização de Software</h4>
                    <p class="service-description">
                        Actualização e modernização de aplicações legadas, migrando para arquitecturas modernas e tecnologias actualizadas.
                    </p>
                    <ul class="service-features">
                        <li><i class="ri-check-line"></i> Refactoring de código</li>
                        <li><i class="ri-check-line"></i> Migração para cloud</li>
                        <li><i class="ri-check-line"></i> Optimização de performance</li>
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
                Seguimos metodologias ágeis e boas práticas de engenharia de software para garantir a qualidade e sucesso do seu projecto
            </p>
        </div>

        <!-- Processo Timeline -->
        <div class="process-timeline">
            
            <!-- Fase 1: Análise e Levantamento de Requisitos -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">01</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-file-search-line"></i>
                    </div>
                    <h3 class="timeline-title">Análise e Levantamento de Requisitos</h3>
                    <p class="timeline-description">
                        Iniciamos com reuniões de descoberta para compreender profundamente as necessidades do seu negócio, objectivos do projecto e expectativas dos utilizadores.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Entrevistas com stakeholders</li>
                            <li><i class="ri-checkbox-circle-line"></i> Análise de processos de negócio</li>
                            <li><i class="ri-checkbox-circle-line"></i> Definição de requisitos funcionais e não-funcionais</li>
                            <li><i class="ri-checkbox-circle-line"></i> Estudo de viabilidade técnica e económica</li>
                            <li><i class="ri-checkbox-circle-line"></i> Criação de user stories e casos de uso</li>
                        </ul>
                        <h5 class="mt-3">Entregáveis:</h5>
                        <div class="deliverables">
                            <span class="badge bg-primary">Documento de Requisitos</span>
                            <span class="badge bg-primary">Especificação Funcional</span>
                            <span class="badge bg-primary">Análise de Risco</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 2: Planeamento e Arquitectura -->
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <div class="timeline-number">02</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-draft-line"></i>
                    </div>
                    <h3 class="timeline-title">Planeamento e Arquitectura</h3>
                    <p class="timeline-description">
                        Definimos a arquitectura do sistema, stack tecnológico e planeamento detalhado do projecto, estabelecendo sprints e marcos de entrega.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Definição da arquitectura de software</li>
                            <li><i class="ri-checkbox-circle-line"></i> Selecção de tecnologias e frameworks</li>
                            <li><i class="ri-checkbox-circle-line"></i> Modelagem de base de dados</li>
                            <li><i class="ri-checkbox-circle-line"></i> Planeamento de sprints (metodologia Scrum/Kanban)</li>
                            <li><i class="ri-checkbox-circle-line"></i> Definição de APIs e integrações</li>
                            <li><i class="ri-checkbox-circle-line"></i> Estimativa de tempo e recursos</li>
                        </ul>
                        <h5 class="mt-3">Metodologias utilizadas:</h5>
                        <div class="deliverables">
                            <span class="badge bg-success">Scrum</span>
                            <span class="badge bg-success">Kanban</span>
                            <span class="badge bg-success">XP (Extreme Programming)</span>
                            <span class="badge bg-success">RUP</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 3: Design e Prototipagem -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">03</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-palette-line"></i>
                    </div>
                    <h3 class="timeline-title">Design e Prototipagem</h3>
                    <p class="timeline-description">
                        Criamos protótipos interactivos e design de interface focado na experiência do utilizador (UX/UI), garantindo usabilidade e estética.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Wireframes e mockups</li>
                            <li><i class="ri-checkbox-circle-line"></i> Design de interface (UI Design)</li>
                            <li><i class="ri-checkbox-circle-line"></i> Prototipagem interactiva</li>
                            <li><i class="ri-checkbox-circle-line"></i> Testes de usabilidade</li>
                            <li><i class="ri-checkbox-circle-line"></i> Design responsivo para múltiplos dispositivos</li>
                            <li><i class="ri-checkbox-circle-line"></i> Definição de guia de estilos</li>
                        </ul>
                        <h5 class="mt-3">Ferramentas:</h5>
                        <div class="deliverables">
                            <span class="badge bg-info">Figma</span>
                            <span class="badge bg-info">Adobe XD</span>
                            <span class="badge bg-info">Sketch</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 4: Desenvolvimento -->
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <div class="timeline-number">04</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-code-box-line"></i>
                    </div>
                    <h3 class="timeline-title">Desenvolvimento</h3>
                    <p class="timeline-description">
                        Codificação seguindo padrões de qualidade, boas práticas de programação e princípios SOLID, com desenvolvimento iterativo e entregas contínuas.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Desenvolvimento frontend e backend</li>
                            <li><i class="ri-checkbox-circle-line"></i> Implementação de APIs RESTful/GraphQL</li>
                            <li><i class="ri-checkbox-circle-line"></i> Integração com serviços de terceiros</li>
                            <li><i class="ri-checkbox-circle-line"></i> Versionamento de código (Git/GitHub)</li>
                            <li><i class="ri-checkbox-circle-line"></i> Code reviews e pair programming</li>
                            <li><i class="ri-checkbox-circle-line"></i> Desenvolvimento de testes unitários</li>
                            <li><i class="ri-checkbox-circle-line"></i> Integração contínua (CI/CD)</li>
                        </ul>
                        <h5 class="mt-3">Stack Tecnológico:</h5>
                        <div class="deliverables">
                            <span class="badge bg-warning">Java</span>
                            <span class="badge bg-warning">Next.js</span>
                            <span class="badge bg-warning">Vue.js</span>
                            <span class="badge bg-warning">React</span>
                            <span class="badge bg-warning">Node.js</span>
                            <span class="badge bg-warning">PHP</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 5: Testes e Garantia de Qualidade -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">05</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-bug-line"></i>
                    </div>
                    <h3 class="timeline-title">Testes e Garantia de Qualidade (QA)</h3>
                    <p class="timeline-description">
                        Realizamos testes rigorosos em múltiplos níveis para garantir que o software funciona perfeitamente e atende a todos os requisitos.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Testes unitários e de integração</li>
                            <li><i class="ri-checkbox-circle-line"></i> Testes funcionais e de regressão</li>
                            <li><i class="ri-checkbox-circle-line"></i> Testes de performance e carga</li>
                            <li><i class="ri-checkbox-circle-line"></i> Testes de segurança e vulnerabilidades</li>
                            <li><i class="ri-checkbox-circle-line"></i> Testes de usabilidade (UAT)</li>
                            <li><i class="ri-checkbox-circle-line"></i> Testes em múltiplos dispositivos e browsers</li>
                            <li><i class="ri-checkbox-circle-line"></i> Correcção de bugs e optimizações</li>
                        </ul>
                        <h5 class="mt-3">Tipos de Testes:</h5>
                        <div class="deliverables">
                            <span class="badge bg-danger">Unitários</span>
                            <span class="badge bg-danger">Integração</span>
                            <span class="badge bg-danger">E2E</span>
                            <span class="badge bg-danger">Performance</span>
                            <span class="badge bg-danger">Segurança</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 6: Deploy e Lançamento -->
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <div class="timeline-number">06</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-rocket-line"></i>
                    </div>
                    <h3 class="timeline-title">Deploy e Lançamento</h3>
                    <p class="timeline-description">
                        Implementamos o software em ambiente de produção com estratégias de deploy seguras e monitorização contínua.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Configuração de servidores e cloud</li>
                            <li><i class="ri-checkbox-circle-line"></i> Deploy automatizado (CI/CD pipelines)</li>
                            <li><i class="ri-checkbox-circle-line"></i> Configuração de domínios e SSL</li>
                            <li><i class="ri-checkbox-circle-line"></i> Migração de dados</li>
                            <li><i class="ri-checkbox-circle-line"></i> Monitorização e logging</li>
                            <li><i class="ri-checkbox-circle-line"></i> Backup e recuperação de desastres</li>
                            <li><i class="ri-checkbox-circle-line"></i> Treino de utilizadores</li>
                        </ul>
                        <h5 class="mt-3">Infraestrutura:</h5>
                        <div class="deliverables">
                            <span class="badge bg-secondary">AWS</span>
                            <span class="badge bg-secondary">Azure</span>
                            <span class="badge bg-secondary">Google Cloud</span>
                            <span class="badge bg-secondary">Docker</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fase 7: Manutenção e Suporte -->
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <div class="timeline-number">07</div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="ri-customer-service-2-line"></i>
                    </div>
                    <h3 class="timeline-title">Manutenção e Suporte</h3>
                    <p class="timeline-description">
                        Fornecemos suporte contínuo, manutenção preventiva e evolutiva para garantir que o software permaneça actualizado e eficiente.
                    </p>
                    <div class="timeline-details">
                        <h5>O que fazemos:</h5>
                        <ul>
                            <li><i class="ri-checkbox-circle-line"></i> Suporte técnico 24/7</li>
                            <li><i class="ri-checkbox-circle-line"></i> Correcção de bugs e incidentes</li>
                            <li><i class="ri-checkbox-circle-line"></i> Actualizações de segurança</li>
                            <li><i class="ri-checkbox-circle-line"></i> Implementação de novas funcionalidades</li>
                            <li><i class="ri-checkbox-circle-line"></i> Optimização de performance</li>
                            <li><i class="ri-checkbox-circle-line"></i> Monitorização proactiva</li>
                            <li><i class="ri-checkbox-circle-line"></i> Relatórios de utilização e analytics</li>
                        </ul>
                        <h5 class="mt-3">Planos de Suporte:</h5>
                        <div class="deliverables">
                            <span class="badge bg-primary">Básico</span>
                            <span class="badge bg-primary">Premium</span>
                            <span class="badge bg-primary">Enterprise</span>
                        </div>
                    </div>
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
                Nossa abordagem única combina metodologias ágeis com valores fundamentais que guiam cada projecto
            </p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="ri-user-heart-line"></i>
                    </div>
                    <h4>Cliente no Centro</h4>
                    <p>O sucesso do cliente é o nosso sucesso. Mantemos comunicação constante e transparente durante todo o projecto.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="ri-lightbulb-flash-line"></i>
                    </div>
                    <h4>Inovação Contínua</h4>
                    <p>Utilizamos as tecnologias mais recentes e práticas inovadoras para criar soluções competitivas.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="ri-shield-check-line"></i>
                    </div>
                    <h4>Qualidade Garantida</h4>
                    <p>Testes rigorosos e code reviews constantes garantem software robusto, seguro e de alta qualidade.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="ri-rocket-2-line"></i>
                    </div>
                    <h4>Entrega Ágil</h4>
                    <p>Entregas incrementais e feedback contínuo permitem ajustes rápidos e resultados mais satisfatórios.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <div class="mefema-values-box">
                    <h3 class="text-center mb-4">
                        <i class="ri-star-line me-2"></i>
                        Os Princípios MEFEMA
                    </h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="value-item">
                                <div class="value-letter">M</div>
                                <div class="value-content">
                                    <h5>Metodologia</h5>
                                    <p>Processos bem definidos adaptados à realidade de cada cliente</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="value-item">
                                <div class="value-letter">E</div>
                                <div class="value-content">
                                    <h5>Excelência</h5>
                                    <p>Compromisso com a qualidade em cada linha de código</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="value-item">
                                <div class="value-letter">F</div>
                                <div class="value-content">
                                    <h5>Flexibilidade</h5>
                                    <p>Adaptação às mudanças e necessidades do projecto</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="value-item">
                                <div class="value-letter">E</div>
                                <div class="value-content">
                                    <h5>Eficiência</h5>
                                    <p>Optimização de recursos e maximização de resultados</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="value-item">
                                <div class="value-letter">M</div>
                                <div class="value-content">
                                    <h5>Modernidade</h5>
                                    <p>Tecnologias actualizadas e arquitecturas escaláveis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="value-item">
                                <div class="value-letter">A</div>
                                <div class="value-content">
                                    <h5>Agilidade</h5>
                                    <p>Entregas rápidas com feedback contínuo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tecnologias -->
<section class="section-py" id="tecnologias">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title mb-3">
                <span class="text-gradient">Stack Tecnológico</span>
            </h2>
            <p class="section-subtitle mx-auto">
                Utilizamos as melhores e mais recentes tecnologias do mercado
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-category">
                    <h4><i class="ri-layout-line me-2"></i>Frontend</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Next.js</span>
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">TypeScript</span>
                        <span class="tech-tag">Tailwind CSS</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-category">
                    <h4><i class="ri-server-line me-2"></i>Backend</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">Java/Spring</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">PHP/Laravel</span>
                        <span class="tech-tag">Python/Django</span>
                        <span class="tech-tag">.NET Core</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="tech-category">
                    <h4><i class="ri-database-2-line me-2"></i>Base de Dados</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">PostgreSQL</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">MongoDB</span>
                        <span class="tech-tag">Redis</span>
                        <span class="tech-tag">Oracle</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="tech-category">
                    <h4><i class="ri-cloud-line me-2"></i>Cloud & DevOps</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">AWS</span>
                        <span class="tech-tag">Azure</span>
                        <span class="tech-tag">Docker</span>
                        <span class="tech-tag">Kubernetes</span>
                        <span class="tech-tag">CI/CD</span>
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
                Somos mais que uma empresa de desenvolvimento - somos o seu parceiro tecnológico
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-map-pin-line"></i>
                    </div>
                    <h4>Conhecimento Local</h4>
                    <p>Entendemos as especificidades do mercado moçambicano, incluindo integração com AT, M-Pesa, E-Mola e requisitos regulatórios locais.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-team-line"></i>
                    </div>
                    <h4>Equipa Experiente</h4>
                    <p>Developers seniores com anos de experiência em projectos complexos e de grande escala em diversos sectores.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-price-tag-3-line"></i>
                    </div>
                    <h4>Preços Competitivos</h4>
                    <p>Oferecemos soluções de qualidade internacional com preços ajustados à realidade do mercado local.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-time-line"></i>
                    </div>
                    <h4>Entregas no Prazo</h4>
                    <p>Cumprimos prazos através de planeamento rigoroso, comunicação transparente e metodologias ágeis eficientes.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-shield-check-line"></i>
                    </div>
                    <h4>Segurança e Compliance</h4>
                    <p>Implementamos as melhores práticas de segurança e garantimos conformidade com RGPD e legislação local.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="ri-customer-service-2-line"></i>
                    </div>
                    <h4>Suporte Dedicado</h4>
                    <p>Equipa de suporte local disponível para resolver rapidamente qualquer questão ou incidente.</p>
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
                Respostas às dúvidas mais comuns sobre nossos serviços
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="faqAccordion">
                    
                    <div class="accordion-item" data-aos="fade-up">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Quanto tempo demora para desenvolver uma aplicação personalizada?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                O tempo de desenvolvimento varia conforme a complexidade do projecto. Uma aplicação simples pode demorar 2-3 meses, enquanto sistemas complexos podem levar 6-12 meses ou mais. Durante a fase de análise, fornecemos um cronograma detalhado com marcos de entrega.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Como é calculado o preço de um projecto?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                O preço é baseado em vários factores: complexidade funcional, número de integrações, tecnologias utilizadas, prazo de entrega e recursos necessários. Após a análise de requisitos, fornecemos uma proposta detalhada com custos discriminados por fase.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Fornecem suporte após o lançamento?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sim! Oferecemos diferentes planos de suporte e manutenção (Básico, Premium e Enterprise). Todos incluem correcção de bugs, actualizações de segurança e suporte técnico. Planos superiores incluem novas funcionalidades e SLA garantido.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Podem integrar com sistemas que já temos?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutamente. Temos vasta experiência em integração de sistemas legados e APIs de terceiros. Analisamos a arquitectura existente e criamos integrações seguras e eficientes, garantindo compatibilidade e performance.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                O software será propriedade da nossa empresa?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sim, o código-fonte e todos os direitos de propriedade intelectual do software desenvolvido são transferidos para o cliente após o pagamento integral. Fornecemos toda a documentação técnica necessária.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Como garantem a segurança dos nossos dados?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Implementamos múltiplas camadas de segurança: criptografia de dados, autenticação robusta, controlo de acessos, backups automáticos, testes de penetração e conformidade com RGPD. Todos os developers assinam acordos de confidencialidade (NDA).
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
                    Pronto para Transformar a Sua Ideia em Realidade?
                </h2>
                <p class="lead mb-5">
                    Agende uma reunião gratuita de consulta e descubra como podemos ajudar o seu negócio a crescer com tecnologia de ponta.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="#landingContact" class="btn btn-light btn-lg px-5">
                        <i class="ri-mail-send-line me-2"></i>
                        Solicitar Orçamento Grátis
                    </a>
                    <a href="tel:+258840000000" class="btn btn-outline-light btn-lg px-5">
                        <i class="ri-phone-line me-2"></i>
                        (+258) 84 000 0000
                    </a>
                </div>
                <div class="mt-4">
                    <p class="mb-2"><i class="ri-time-line me-2"></i>Resposta em até 24 horas</p>
                    <p class="mb-0"><i class="ri-shield-check-line me-2"></i>Consulta e orçamento sem compromisso</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* 
   MEFEMA Systems - Desenvolvimento de Software
   Restored Original Styles with Brand Identity & Dark Mode Support
*/

:root {
    /* Brand Colors - Light Mode */
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

    /* Hero Specifics (Light) */
    --hero-bg-start: #fdfbf9;
    --hero-bg-end: #fef5ef;
    --hero-overlay: rgba(217, 118, 56, 0.03);
    --hero-glow: rgba(217, 118, 56, 0.15);
    --hero-shadow-primary: rgba(217, 118, 56, 0.2);
}

[data-bs-theme="dark"] {
    /* Brand Colors - Dark Mode */
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

    /* Hero Specifics (Dark) */
    --hero-bg-start: #1a1410;
    --hero-bg-end: #241a15;
    --hero-overlay: rgba(255, 140, 74, 0.05);
    --hero-glow: rgba(255, 140, 74, 0.2);
    --hero-shadow-primary: rgba(0, 0, 0, 0.5);
}

/* Global Adjustments */
body {
    color: var(--text-primary);
    background-color: transparent;
}

.section-py {
    padding: 80px 0;
}

.bg-light {
    background-color: var(--bg-light) !important;
}

/* Typography */
.text-gradient {
    color: var(--primary-color);
    font-weight: 700;
}

/* Hero Section - Restored Structure */
.landing-hero-websites {
    position: relative;
    background: linear-gradient(165deg, var(--hero-bg-start) 0%, var(--hero-bg-end) 100%);
    overflow: hidden;
    padding: 120px 0 80px;
}

.landing-hero-websites::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 20% 30%, var(--hero-overlay) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, var(--hero-overlay) 0%, transparent 50%);
    pointer-events: none;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.75rem;
    background: var(--bg-card);
    border: 1px solid var(--border-color);
    border-radius: var(--radius);
    box-shadow: var(--shadow-sm);
    margin-bottom: 1.5rem;
}

.hero-badge i {
    color: var(--primary-color) !important;
}

.badge-text {
    color: var(--text-secondary);
    font-size: 0.9rem;
    font-weight: 600;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 800;
    color: var(--text-primary);
    line-height: 1.2;
    margin-bottom: 1.5rem;
}

.hero-subtitle {
    font-size: 1.25rem;
    color: var(--text-secondary);
    line-height: 1.6;
    max-width: 800px;
    margin: 0 auto 2rem;
}

.hero-stats {
    display: flex;
    justify-content: center;
    gap: 3rem;
    flex-wrap: wrap;
    margin-top: 2.5rem;
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

/* Buttons - Restored Effects */
.btn-primary {
    background-color: var(--primary-color) !important;
    border: none !important;
    border-radius: var(--radius);
    padding: 12px 28px;
    font-weight: 600;
    color: #fff !important;
    box-shadow: 0 8px 24px var(--hero-shadow-primary);
    transition: var(--transition);
}

.btn-primary:hover {
    background-color: var(--primary-dark) !important;
    transform: translateY(-4px);
    box-shadow: 0 12px 32px var(--hero-shadow-primary);
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
    color: #fff !important;
    transform: translateY(-4px);
}

/* Service Boxes - Restored */
.service-box {
    background: var(--bg-card);
    border: 1px solid var(--border-color);
    border-radius: var(--radius);
    padding: 40px;
    height: 100%;
    transition: var(--transition);
}

.service-box:hover {
    border-color: var(--primary-color);
    box-shadow: var(--shadow-md);
    transform: translateY(-5px);
}

.service-icon {
    width: 60px;
    height: 60px;
    background: var(--primary-light);
    color: var(--primary-color);
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    margin-bottom: 24px;
}

.service-title {
    color: var(--text-primary);
    font-weight: 700;
    margin-bottom: 1rem;
}

.service-description {
    color: var(--text-secondary);
    margin-bottom: 1.5rem;
}

.service-features {
    list-style: none;
    padding: 0;
}

.service-features li {
    color: var(--text-secondary);
    margin-bottom: 0.75rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.service-features li i {
    color: var(--primary-color);
}

/* Process Timeline - Restored */
.process-timeline {
    position: relative;
    padding: 40px 0;
}

.timeline-item {
    display: flex;
    gap: 30px;
    margin-bottom: 60px;
    position: relative;
}

.timeline-marker {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    background: var(--primary-color);
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    z-index: 2;
}

.timeline-content {
    background: var(--bg-card);
    border: 1px solid var(--border-color);
    border-radius: var(--radius);
    padding: 30px;
    flex-grow: 1;
    transition: var(--transition);
}

.timeline-content:hover {
    box-shadow: var(--shadow-sm);
    border-color: var(--primary-color);
}

.timeline-icon {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 15px;
}

.timeline-title {
    color: var(--text-primary);
    font-weight: 700;
    margin-bottom: 1rem;
}

.timeline-description {
    color: var(--text-secondary);
}

.timeline-details h5 {
    color: var(--text-primary);
    font-size: 1rem;
    margin: 20px 0 10px;
    font-weight: 600;
}

.timeline-details ul {
    list-style: none;
    padding: 0;
}

.timeline-details li {
    color: var(--text-secondary);
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.timeline-details li i {
    color: var(--primary-color);
}

/* Animations - Restored */
@keyframes floatGlow {
    0%, 100% { transform: translate(0, 0); opacity: 0.5; }
    50% { transform: translate(-20px, 20px); opacity: 0.8; }
}

/* Responsive */
@media (max-width: 991px) {
    .hero-title { font-size: 2.5rem; }
    .hero-stats { gap: 1.5rem; }
    .timeline-item { flex-direction: column; gap: 15px; }
    .timeline-marker { margin-bottom: 10px; }
}


</style>

<?php get_part('includes/footer.php'); ?>
