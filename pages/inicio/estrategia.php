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
                            <img src="assets/img/landing-page/especializado.png" alt="Especializado" class="card-icon">
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
                            <img src="assets/img/landing-page/moderno.png" alt="Moderno" class="card-icon">
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
                            <img src="assets/img/landing-page/acessiveis.png" alt="Acessível" class="card-icon">
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
                            <img src="assets/img/landing-page/suporte.png" alt="Suporte" class="card-icon">
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
   VARIÁVEIS DA ESTRATÉGIA - TONS QUENTES
   ======================================== */

:root {
    --strategy-primary: #d97638;
    --strategy-secondary: #c66b3d;
    --strategy-tertiary: #b85f30;
    --strategy-quaternary: #8a4a2e;
    
    /* Fundo: Um branco levemente castanho/alaranjado (Champagne/Creme) */
    --strategy-bg: #fffbf7; 
    --strategy-card-bg: #ffffff;
    
    /* Texto: Castanho profundo com subtom laranja (mais visível e elegante que preto) */
    --strategy-text: #4a2c1a; 
    --strategy-text-muted: #705240;
    
    /* Border: Mais visível no modo claro usando um tom terra suave */
    --strategy-border: #e8dcd0;
    
    --strategy-shadow: rgba(74, 44, 26, 0.05);
    --strategy-shadow-hover: rgba(217, 118, 56, 0.15);
}

/* Suporte para seletores de tema via atributo */
[data-bs-theme="light"] {
    --strategy-bg: #fffbf7;
    --strategy-card-bg: #ffffff;
    --strategy-text: #4a2c1a;
    --strategy-text-muted: #705240;
    --strategy-border: #e8dcd0;
}

/* MODO DARK - Mantido original conforme solicitado */
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

[data-bs-theme="dark"] {
    --strategy-bg: #1a1410;
    --strategy-card-bg: #2a1f1a;
    --strategy-text: #f5ede6;
    --strategy-text-muted: #c4b5a8;
}

/* ========================================
   ESTILIZAÇÃO GERAL
   ======================================== */

.landing-strategy {
    background: var(--strategy-bg);
    position: relative;
    padding: 100px 0;
}

.strategy-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.5rem;
    /* Badge com fundo creme quente */
    background: rgba(217, 118, 56, 0.08);
    border: 1px solid var(--strategy-border);
    border-radius: 10px;
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
    border-radius: 12px;
    padding: 2.5rem 2rem;
    height: 100%;
    border: 1px solid var(--strategy-border);
    transition: all 0.4s ease;
    text-align: center;
}

.strategy-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px var(--strategy-shadow-hover);
    border-color: var(--strategy-primary);
}

.card-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--strategy-text);
    margin-bottom: 1rem;
}

.card-description {
    font-size: 0.95rem;
    color: var(--strategy-text-muted);
    line-height: 1.6;
}

.card-description strong {
    color: var(--strategy-primary); /* Destaque em laranja para os strongs */
}

.icon-circle {
    width: 100px;
    height: 100px;
    margin: 0 auto 1.5rem;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(217, 118, 56, 0.05);
}

.card-icon {
    width: 60px;
    height: 60px;
}

.card-accent {
    width: 40px;
    height: 4px;
    margin: 1.5rem auto 0;
    border-radius: 10px;
}

.card-accent.primary { background: var(--strategy-primary); }
.card-accent.secondary { background: var(--strategy-secondary); }
.card-accent.tertiary { background: var(--strategy-tertiary); }
.card-accent.quaternary { background: var(--strategy-quaternary); }

@keyframes badgeRotate {
    0%, 100% { transform: rotate(0deg); }
    50% { transform: rotate(180deg); }
}

.badge-icon {
    color: var(--strategy-primary);
    animation: badgeRotate 4s linear infinite;
}
</style>
