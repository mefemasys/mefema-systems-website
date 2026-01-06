<!-- Secção de Estratégia MEFEMA - Design Moderno -->
<section class="section-py landing-strategy" id="landingStrategy">
    <div class="container position-relative">
        
        <!-- Cabeçalho da Secção -->
        <div class="text-center mb-5 pb-3">
            <div class="strategy-badge mx-auto mb-4">
                <span class="badge-icon">✦</span>
                <span class="badge-text">ESTRATÉGIA MEFEMA</span>
            </div>
            <h2 class="strategy-title mb-4">
                Transformação Digital<br>
                <span class="text-gradient">Sob Medida para si</span>
            </h2>
            <p class="strategy-subtitle mx-auto">
                Seis pilares essenciais que definem a nossa abordagem: 
                <strong>M</strong>oderno, <strong>E</strong>specializado, <strong>F</strong>lexível, 
                <strong>E</strong>ficiente, <strong>M</strong>ultifuncional e <strong>A</strong>cessível
            </p>
        </div>

        <!-- Grid de Cards -->
        <div class="row g-4 justify-content-center">
            
            <!-- Card 1: Especialização -->
            <div class="col-lg-6 col-xl-3">
                <div class="strategy-card">
                    <div class="card-icon-wrapper">
                        <div class="icon-circle primary">
                            <img src="assets/img/landing-page/especializado.png" 
                                 alt="Especializado" 
                                 class="card-icon">
                        </div>
                    </div>
                    <div class="card-content">
                        <h5 class="card-title">Especialização Sob Medida</h5>
                        <p class="card-description">
                            Soluções <strong>especializadas</strong> e <strong>flexíveis</strong>. 
                            Escolha produtos prontos ou sistemas 100% personalizados.
                        </p>
                        <div class="card-accent primary"></div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Moderno -->
            <div class="col-lg-6 col-xl-3">
                <div class="strategy-card">
                    <div class="card-icon-wrapper">
                        <div class="icon-circle secondary">
                            <img src="assets/img/landing-page/moderno.png" 
                                 alt="Moderno" 
                                 class="card-icon">
                        </div>
                    </div>
                    <div class="card-content">
                        <h5 class="card-title">Moderno e Eficiente</h5>
                        <p class="card-description">
                            Tecnologias de ponta que garantem máxima performance, 
                            segurança e <strong>eficiência</strong> operacional.
                        </p>
                        <div class="card-accent secondary"></div>
                    </div>
                </div>
            </div>

            <!-- Card 3: Multifuncional -->
            <div class="col-lg-6 col-xl-3">
                <div class="strategy-card">
                    <div class="card-icon-wrapper">
                        <div class="icon-circle tertiary">
                            <img src="assets/img/landing-page/acessiveis.png" 
                                 alt="Acessível" 
                                 class="card-icon">
                        </div>
                    </div>
                    <div class="card-content">
                        <h5 class="card-title">Multifuncional e Acessível</h5>
                        <p class="card-description">
                            Produtos <strong>multifuncionais</strong> que se adaptam ao seu orçamento. 
                            Soluções completas para PMEs.
                        </p>
                        <div class="card-accent tertiary"></div>
                    </div>
                </div>
            </div>

            <!-- Card 4: Apoio -->
            <div class="col-lg-6 col-xl-3">
                <div class="strategy-card">
                    <div class="card-icon-wrapper">
                        <div class="icon-circle quaternary">
                            <img src="assets/img/landing-page/suporte.png" 
                                 alt="Suporte" 
                                 class="card-icon">
                        </div>
                    </div>
                    <div class="card-content">
                        <h5 class="card-title">Apoio Completo ao Cliente</h5>
                        <p class="card-description">
                            <strong>Consultoria</strong> e <strong>formação</strong> essenciais 
                            para garantir o sucesso da sua equipa.
                        </p>
                        <div class="card-accent quaternary"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* ========================================
   VARIÁVEIS DA ESTRATÉGIA
   ======================================== */

:root {
    --strategy-primary: #d97638;
    --strategy-secondary: #c66b3d;
    --strategy-tertiary: #b85f30;
    --strategy-quaternary: #8a4a2e;
    
    --strategy-bg: #faf8f6;
    --strategy-card-bg: #ffffff;
    --strategy-text: #2a1f1a;
    --strategy-text-muted: #5a4a42;
    --strategy-border: rgba(217, 118, 56, 0.1);
    
    --strategy-shadow: rgba(217, 118, 56, 0.08);
    --strategy-shadow-hover: rgba(217, 118, 56, 0.15);
}

@media (prefers-color-scheme: dark) {
    :root {
        --strategy-primary: #ff8c4a;
        --strategy-secondary: #ffa366;
        --strategy-tertiary: #d97638;
        --strategy-quaternary: #c66b3d;
        
        --strategy-bg: #1a1410;
        --strategy-card-bg: #2a1f1a;
        --strategy-text: #f5ede6;
        --strategy-text-muted: #c4b5a8;
        --strategy-border: rgba(255, 140, 74, 0.15);
        
        --strategy-shadow: rgba(0, 0, 0, 0.2);
        --strategy-shadow-hover: rgba(255, 140, 74, 0.2);
    }
}

/* ========================================
   SECÇÃO PRINCIPAL
   ======================================== */

.landing-strategy {
    background: var(--strategy-bg);
    position: relative;
    overflow: hidden;
}

.landing-strategy::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 10% 20%, rgba(217, 118, 56, 0.03) 0%, transparent 50%),
        radial-gradient(circle at 90% 80%, rgba(184, 95, 48, 0.03) 0%, transparent 50%);
    pointer-events: none;
}

/* ========================================
   CABEÇALHO
   ======================================== */

.strategy-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.1), rgba(184, 95, 48, 0.08));
    border: 1px solid var(--strategy-border);
    border-radius: 50px;
    backdrop-filter: blur(10px);
}

.badge-icon {
    color: var(--strategy-primary);
    font-size: 1.25rem;
    animation: badgeRotate 3s ease-in-out infinite;
}

.badge-text {
    color: var(--strategy-primary);
    font-weight: 600;
    font-size: 0.875rem;
    letter-spacing: 1.5px;
}

.strategy-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--strategy-text);
    line-height: 1.2;
}

.text-gradient {
    background: linear-gradient(135deg, var(--strategy-primary), var(--strategy-secondary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.strategy-subtitle {
    max-width: 700px;
    font-size: 1.1rem;
    color: var(--strategy-text-muted);
    line-height: 1.7;
}

/* ========================================
   CARDS
   ======================================== */

.strategy-card {
    background: var(--strategy-card-bg);
    border-radius: 20px;
    padding: 2rem 1.5rem;
    height: 100%;
    border: 1px solid var(--strategy-border);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.strategy-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--strategy-primary), transparent);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.strategy-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px var(--strategy-shadow-hover);
    border-color: var(--strategy-primary);
}

.strategy-card:hover::before {
    opacity: 1;
}

/* ========================================
   ÍCONES
   ======================================== */

.card-icon-wrapper {
    display: flex;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.icon-circle {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    transition: all 0.4s ease;
}

.icon-circle::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 2px solid currentColor;
    opacity: 0.2;
    transition: all 0.4s ease;
}

.strategy-card:hover .icon-circle::before {
    width: 110%;
    height: 110%;
    opacity: 0;
}

.icon-circle.primary {
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.15), rgba(217, 118, 56, 0.05));
    color: var(--strategy-primary);
}

.icon-circle.secondary {
    background: linear-gradient(135deg, rgba(198, 107, 61, 0.15), rgba(198, 107, 61, 0.05));
    color: var(--strategy-secondary);
}

.icon-circle.tertiary {
    background: linear-gradient(135deg, rgba(184, 95, 48, 0.15), rgba(184, 95, 48, 0.05));
    color: var(--strategy-tertiary);
}

.icon-circle.quaternary {
    background: linear-gradient(135deg, rgba(138, 74, 46, 0.15), rgba(138, 74, 46, 0.05));
    color: var(--strategy-quaternary);
}

.card-icon {
    width: 70px;
    height: 70px;
    object-fit: contain;
    transition: transform 0.4s ease;
}

.strategy-card:hover .card-icon {
    transform: scale(1.1) rotate(5deg);
}

/* ========================================
   CONTEÚDO DO CARD
   ======================================== */

.card-content {
    text-align: center;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--strategy-text);
    margin-bottom: 1rem;
    transition: color 0.3s ease;
}

.strategy-card:hover .card-title {
    color: var(--strategy-primary);
}

.card-description {
    font-size: 0.95rem;
    color: var(--strategy-text-muted);
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.card-description strong {
    color: var(--strategy-text);
    font-weight: 600;
}

/* ========================================
   ACENTO INFERIOR
   ======================================== */

.card-accent {
    width: 60px;
    height: 3px;
    margin: 0 auto;
    border-radius: 2px;
    transition: width 0.4s ease;
}

.card-accent.primary {
    background: var(--strategy-primary);
}

.card-accent.secondary {
    background: var(--strategy-secondary);
}

.card-accent.tertiary {
    background: var(--strategy-tertiary);
}

.card-accent.quaternary {
    background: var(--strategy-quaternary);
}

.strategy-card:hover .card-accent {
    width: 80px;
}

/* ========================================
   ANIMAÇÕES
   ======================================== */

@keyframes badgeRotate {
    0%, 100% {
        transform: rotate(0deg);
    }
    50% {
        transform: rotate(180deg);
    }
}

/* ========================================
   RESPONSIVIDADE
   ======================================== */

@media (max-width: 1199px) {
    .strategy-title {
        font-size: 2rem;
    }
    
    .icon-circle {
        width: 100px;
        height: 100px;
    }
    
    .card-icon {
        width: 60px;
        height: 60px;
    }
}

@media (max-width: 991px) {
    .strategy-card {
        padding: 1.75rem 1.25rem;
    }
    
    .card-title {
        font-size: 1.1rem;
    }
    
    .card-description {
        font-size: 0.9rem;
    }
}

@media (max-width: 767px) {
    .strategy-title {
        font-size: 1.75rem;
    }
    
    .strategy-subtitle {
        font-size: 1rem;
    }
    
    .icon-circle {
        width: 90px;
        height: 90px;
    }
    
    .card-icon {
        width: 50px;
        height: 50px;
    }
    
    .strategy-card {
        padding: 1.5rem 1rem;
    }
}

@media (max-width: 575px) {
    .badge-text {
        font-size: 0.75rem;
    }
    
    .strategy-title {
        font-size: 1.5rem;
    }
    
    .strategy-subtitle {
        font-size: 0.95rem;
    }
}

/* ========================================
   MODO DARK - AJUSTES ESPECÍFICOS
   ======================================== */

@media (prefers-color-scheme: dark) {
    .strategy-card {
        box-shadow: 0 4px 12px var(--strategy-shadow);
    }
    
    .strategy-card:hover {
        box-shadow: 0 20px 40px var(--strategy-shadow-hover);
    }
    
    .icon-circle.primary {
        background: linear-gradient(135deg, rgba(255, 140, 74, 0.2), rgba(255, 140, 74, 0.08));
    }
    
    .icon-circle.secondary {
        background: linear-gradient(135deg, rgba(255, 163, 102, 0.2), rgba(255, 163, 102, 0.08));
    }
    
    .icon-circle.tertiary {
        background: linear-gradient(135deg, rgba(217, 118, 56, 0.2), rgba(217, 118, 56, 0.08));
    }
    
    .icon-circle.quaternary {
        background: linear-gradient(135deg, rgba(198, 107, 61, 0.2), rgba(198, 107, 61, 0.08));
    }
}
</style>
