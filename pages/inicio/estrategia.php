<section class="section-py landing-strategy" id="landingStrategy">
    <div class="container position-relative">
        
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

        <div class="row g-4 justify-content-center">
            
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
    
    --strategy-bg: #ffffff;
    --strategy-card-bg: #ffffff;
    
    /* AJUSTE: Cores mais escuras para Modo Claro (Acessibilidade + Conforto) */
    --strategy-text: #1a110a; 
    --strategy-text-muted: #453328;
    --strategy-border: rgba(217, 118, 56, 0.15);
    
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
        --strategy-text: #f5ede6; /* Mantido original conforme pedido */
        --strategy-text-muted: #c4b5a8; /* Mantido original conforme pedido */
        --strategy-border: rgba(255, 140, 74, 0.15);
        
        --strategy-shadow: rgba(0, 0, 0, 0.2);
        --strategy-shadow-hover: rgba(255, 140, 74, 0.2);
    }
}

/* Suporte para seletores de tema via atributo (Bootstrap 5.3+) */
[data-bs-theme="light"] {
    --strategy-bg: #ffffff;
    --strategy-card-bg: #ffffff;
    --strategy-text: #1a110a;
    --strategy-text-muted: #453328;
}

[data-bs-theme="dark"] {
    --strategy-bg: #1a1410;
    --strategy-card-bg: #2a1f1a;
    --strategy-text: #f5ede6;
    --strategy-text-muted: #c4b5a8;
}

/* ========================================
   SECÇÃO PRINCIPAL
   ======================================== */

.landing-strategy {
    background: var(--strategy-bg);
    position: relative;
    overflow: hidden;
}

/* ... (Resto do seu CSS permanece o mesmo) ... */

.strategy-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.1), rgba(184, 95, 48, 0.08));
    border: 1px solid var(--strategy-border);
    border-radius: 10px;
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

.strategy-card {
    background: var(--strategy-card-bg);
    border-radius: 5px;
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

.card-icon-wrapper {
    display: flex;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.icon-circle {
    width: 120px;
    height: 120px;
    border-radius: 5%;
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
    border-radius: 5%;
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

.card-accent {
    width: 60px;
    height: 3px;
    margin: 0 auto;
    border-radius: 2px;
    transition: width 0.4s ease;
}

.card-accent.primary { background: var(--strategy-primary); }
.card-accent.secondary { background: var(--strategy-secondary); }
.card-accent.tertiary { background: var(--strategy-tertiary); }
.card-accent.quaternary { background: var(--strategy-quaternary); }

.strategy-card:hover .card-accent {
    width: 80px;
}

@keyframes badgeRotate {
    0%, 100% { transform: rotate(0deg); }
    50% { transform: rotate(180deg); }
}

/* Responsividade e ajustes Dark Mode específicos já inclusos no seu código original */
@media (max-width: 1199px) {
    .strategy-title { font-size: 2rem; }
    .icon-circle { width: 100px; height: 100px; }
    .card-icon { width: 60px; height: 60px; }
}
</style>
