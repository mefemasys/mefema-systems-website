<style>
/* ========================================
   VARIÁVEIS DA ESTRATÉGIA - REFINADAS
   ======================================== */

:root {
    --strategy-primary: #d97638;
    --strategy-secondary: #c66b3d;
    --strategy-tertiary: #b85f30;
    --strategy-quaternary: #8a4a2e;
    
    /* NOVO: Fundo castanho-laranja super leve (quase branco) */
    --strategy-bg: #fdfaf8; 
    --strategy-card-bg: #ffffff;
    
    /* NOVO: Texto em tons de Castanho Terroso (Substituindo o preto) */
    --strategy-text: #4a2c1a; 
    --strategy-text-muted: #6b4d3a;
    
    /* NOVO: Bordas visíveis no modo claro */
    --strategy-border: rgba(217, 118, 56, 0.25);
    
    --strategy-shadow: rgba(74, 44, 26, 0.05);
    --strategy-shadow-hover: rgba(217, 118, 56, 0.12);
}

/* ========================================
   MODO DARK - MANTIDO ORIGINAL
   ======================================== */
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

/* Suporte para Bootstrap Dark Theme Selector */
[data-bs-theme="dark"] {
    --strategy-bg: #1a1410;
    --strategy-card-bg: #2a1f1a;
    --strategy-text: #f5ede6;
    --strategy-text-muted: #c4b5a8;
}

/* ========================================
   AJUSTES DE DESIGN
   ======================================== */

.landing-strategy {
    background: var(--strategy-bg);
    padding: 100px 0;
    position: relative;
}

.strategy-card {
    background: var(--strategy-card-bg);
    border-radius: 12px; /* Bordas levemente mais arredondadas para conforto */
    padding: 2.5rem 2rem;
    height: 100%;
    /* Borda visível e suave */
    border: 1.5px solid var(--strategy-border);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 15px var(--strategy-shadow);
}

.strategy-title {
    font-size: 2.8rem;
    font-weight: 800;
    color: var(--strategy-text);
    letter-spacing: -0.5px;
}

.strategy-subtitle {
    color: var(--strategy-text-muted);
    font-weight: 400;
}

.card-title {
    color: var(--strategy-text);
    font-weight: 700;
}

.card-description {
    color: var(--strategy-text-muted);
}

.card-description strong {
    color: var(--strategy-primary); /* Destaque em laranja para os termos chave */
}

/* Badge mais visível */
.strategy-badge {
    background: rgba(217, 118, 56, 0.08);
    border: 1px solid rgba(217, 118, 56, 0.2);
}

/* Efeito Hover nos Cards */
.strategy-card:hover {
    transform: translateY(-10px);
    border-color: var(--strategy-primary);
    box-shadow: 0 20px 40px var(--strategy-shadow-hover);
}
</style>

<section class="landing-strategy" id="landingStrategy">
    <div class="container">
        <div class="text-center mb-5">
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
                            <img src="assets/img/landing-page/especializado.png" class="card-icon">
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
            </div>
    </div>
</section>
