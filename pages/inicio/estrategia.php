<style>
/* ========================================
   VARIÁVEIS DA ESTRATÉGIA - REFINADAS
   ======================================== */

:root {
    /* Paleta Principal */
    --strategy-primary: #d97638;
    --strategy-secondary: #c66b3d;
    --strategy-tertiary: #b85f30;
    --strategy-quaternary: #8a4a2e;
    
    /* MODO CLARO: Fundo quente e texto castanho-laranja */
    --strategy-bg: #fffaf5;          /* Branco "quente" levemente alaranjado */
    --strategy-card-bg: #ffffff;     /* Card branco para destacar do fundo */
    --strategy-text: #4a2c1a;        /* Castanho profundo (substitui o preto) */
    --strategy-text-muted: #7a5a4a;  /* Castanho médio para descrições */
    --strategy-border: rgba(217, 118, 56, 0.3); /* Borda visível mas suave */
    
    --strategy-shadow: rgba(138, 74, 46, 0.08);
    --strategy-shadow-hover: rgba(138, 74, 46, 0.15);
}

/* Manter o Modo Dark exatamente como estava */
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

/* Suporte para Bootstrap 5 Dark Mode Attribute */
[data-bs-theme="dark"] {
    --strategy-bg: #1a1410;
    --strategy-card-bg: #2a1f1a;
    --strategy-text: #f5ede6;
    --strategy-text-muted: #c4b5a8;
    --strategy-border: rgba(255, 140, 74, 0.15);
}

/* Ajustes de Estilo Adicionais */
.landing-strategy {
    background: var(--strategy-bg);
    padding: 80px 0;
}

.strategy-card {
    background: var(--strategy-card-bg);
    border: 1px solid var(--strategy-border);
    border-radius: 12px; /* Bordas levemente mais arredondadas para conforto */
    padding: 2.5rem 1.5rem;
    transition: all 0.4s ease;
    box-shadow: 0 10px 30px var(--strategy-shadow);
}

.strategy-title {
    color: var(--strategy-text);
    font-weight: 800;
}

.strategy-subtitle {
    color: var(--strategy-text-muted);
}

.card-title {
    color: var(--strategy-text);
    font-weight: 700;
}

.card-description {
    color: var(--strategy-text-muted);
}

.card-description strong {
    color: var(--strategy-primary); /* Destaque em laranja nos negritos */
}

/* Mantendo seus outros estilos de ícones e animações... */
.icon-circle {
    width: 100px;
    height: 100px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.icon-circle.primary { background: rgba(217, 118, 56, 0.1); color: var(--strategy-primary); }
.icon-circle.secondary { background: rgba(198, 107, 61, 0.1); color: var(--strategy-secondary); }
.icon-circle.tertiary { background: rgba(184, 95, 48, 0.1); color: var(--strategy-tertiary); }
.icon-circle.quaternary { background: rgba(138, 74, 46, 0.1); color: var(--strategy-quaternary); }

.card-icon {
    width: 55px;
    height: 55px;
    object-fit: contain;
}

.strategy-card:hover {
    transform: translateY(-10px);
    border-color: var(--strategy-primary);
    box-shadow: 0 20px 40px var(--strategy-shadow-hover);
}
</style>

<section class="landing-strategy" id="landingStrategy">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="strategy-title">
                Transformação Digital<br>
                <span class="text-gradient">Sob Medida para si</span>
            </h2>
            <p class="strategy-subtitle mx-auto">
                Seis pilares essenciais: <strong>M</strong>oderno, <strong>E</strong>specializado, 
                <strong>F</strong>lexível, <strong>E</strong>ficiente, <strong>M</strong>ultifuncional e <strong>A</strong>cessível
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-3">
                <div class="strategy-card">
                    <div class="icon-circle primary">
                        <img src="assets/img/landing-page/especializado.png" class="card-icon">
                    </div>
                    <div class="card-content text-center">
                        <h5 class="card-title">Especialização</h5>
                        <p class="card-description">Soluções <strong>especializadas</strong> para o seu negócio.</p>
                    </div>
                </div>
            </div>
            </div>
    </div>
</section>
