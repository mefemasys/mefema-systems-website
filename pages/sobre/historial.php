<!-- Breve Descrição e Historial: Start -->
<section class="section-py landing-about" id="landingAbout">
  <div class="container position-relative">
    
    <!-- Cabeçalho da Secção -->
    <div class="text-center mb-5 pb-3">
      <div class="about-badge mx-auto mb-4">
        <span class="badge-icon">▣</span>
        <span class="badge-text">SOBRE NÓS</span>
      </div>
      <h2 class="about-title mb-4">
        Nossa História e<br>
        <span class="text-gradient">Propósito</span>
      </h2>
      <p class="about-subtitle mx-auto">
        Uma jornada de inovação e compromisso com o desenvolvimento tecnológico em Moçambique
      </p>
    </div>

    <!-- Conteúdo Principal -->
    <div class="row g-4 justify-content-center">
      
      <!-- Card Principal de Descrição -->
      <div class="col-lg-12">
        <div class="about-main-card">
          <div class="card-decoration-left"></div>
          <div class="card-decoration-right"></div>
          
          <div class="about-content">
            <!-- Introdução -->
            <div class="content-section">
              <div class="section-icon">
                <i class="ri-building-4-line"></i>
              </div>
              <div class="section-text">
                <h5 class="section-title">Quem Somos</h5>
                <p class="section-description">
                  A <strong>MEFEMA SYSTEMS, LDA.</strong> é uma sociedade por quotas moçambicana, constituída para atender às necessidades tecnológicas de pequenas e médias empresas (PMEs) e instituições públicas em Moçambique. Nossa jornada começou com a visão de tornar a tecnologia acessível e impactante, promovendo a transformação digital no país.
                </p>
              </div>
            </div>

            <div class="content-divider"></div>

            <!-- Evolução -->
            <div class="content-section">
              <div class="section-icon">
                <i class="ri-line-chart-line"></i>
              </div>
              <div class="section-text">
                <h5 class="section-title">Nossa Evolução</h5>
                <p class="section-description">
                  Desde a nossa fundação, temos nos dedicado ao desenvolvimento de soluções personalizadas, crescendo de uma startup para uma referência em TI, com foco em inovação e impacto social. Com sede em Moçambique, operamos nacionalmente, expandindo nossa presença para províncias chave como <span class="highlight">Sofala</span>, <span class="highlight">Nampula</span>, <span class="highlight">Zambézia</span>, <span class="highlight">Tete</span> e <span class="highlight">Cabo Delgado</span>.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Cards de Destaques -->
      <div class="col-lg-12">
        <div class="row g-4">
          
          <!-- Destaque 1 -->
          <div class="col-md-4">
            <div class="highlight-card">
              <div class="highlight-icon primary">
                <i class="ri-shield-check-line"></i>
              </div>
              <h6 class="highlight-title">Compromisso</h6>
              <p class="highlight-text">Dedicação total à satisfação dos nossos clientes</p>
            </div>
          </div>

          <!-- Destaque 2 -->
          <div class="col-md-4">
            <div class="highlight-card">
              <div class="highlight-icon secondary">
                <i class="ri-lightbulb-flash-line"></i>
              </div>
              <h6 class="highlight-title">Inovação</h6>
              <p class="highlight-text">Soluções criativas que transformam negócios</p>
            </div>
          </div>

          <!-- Destaque 3 -->
          <div class="col-md-4">
            <div class="highlight-card">
              <div class="highlight-icon tertiary">
                <i class="ri-map-pin-line"></i>
              </div>
              <h6 class="highlight-title">Presença Nacional</h6>
              <p class="highlight-text">Cobertura em todo território moçambicano</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* ========================================
   VARIÁVEIS SOBRE NÓS
   ======================================== */

:root {
    --about-primary: #d97638;
    --about-secondary: #c66b3d;
    --about-tertiary: #b85f30;
    
    --about-bg: #fdf9f6;
    --about-card-bg: #fffdfb;
    --about-text: #5a3a28;
    --about-text-secondary: #74523d;
    --about-text-muted: #8a6850;
    --about-border: rgba(217, 118, 56, 0.35);
    
    --about-shadow: rgba(217, 118, 56, 0.08);
    --about-shadow-hover: rgba(217, 118, 56, 0.15);
}

@media (prefers-color-scheme: dark) {
    :root {
        --about-primary: #ff8c4a;
        --about-secondary: #ffa366;
        --about-tertiary: #d97638;
        
        --about-bg: #1a1410;
        --about-card-bg: #2a1f1a;
        --about-text: #f5ede6;
        --about-text-secondary: #d4c5b8;
        --about-text-muted: #9a8d82;
        --about-border: rgba(255, 140, 74, 0.15);
        
        --about-shadow: rgba(0, 0, 0, 0.3);
        --about-shadow-hover: rgba(255, 140, 74, 0.25);
    }
}

[data-bs-theme="light"] {
    --about-bg: #fdf9f6;
    --about-card-bg: #fffdfb;
    --about-text: #5a3a28;
    --about-text-secondary: #74523d;
    --about-text-muted: #8a6850;
    --about-border: rgba(217, 118, 56, 0.35);
}

[data-bs-theme="dark"] {
    --about-bg: #1a1410;
    --about-card-bg: #2a1f1a;
}

/* ========================================
   SECÇÃO PRINCIPAL
   ======================================== */

.landing-about {
    background: var(--about-bg);
    position: relative;
}

/* ========================================
   CABEÇALHO
   ======================================== */

.about-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.1), rgba(184, 95, 48, 0.08));
    border: 1px solid var(--about-border);
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.badge-icon {
    color: var(--about-primary);
    font-size: 1.25rem;
    animation: badgePulse 2s ease-in-out infinite;
}

.badge-text {
    color: var(--about-primary);
    font-weight: 600;
    font-size: 0.875rem;
    letter-spacing: 1.5px;
}

.about-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--about-text);
    line-height: 1.2;
}

.text-gradient {
    background: linear-gradient(135deg, var(--about-primary), var(--about-secondary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.about-subtitle {
    max-width: 700px;
    font-size: 1.1rem;
    color: var(--about-text-muted);
    line-height: 1.7;
}

/* ========================================
   CARD PRINCIPAL
   ======================================== */

.about-main-card {
    background: var(--about-card-bg);
    border-radius: 16px;
    padding: 3rem 2.5rem;
    border: 1px solid var(--about-border);
    box-shadow: 0 4px 24px var(--about-shadow);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
}

.about-main-card:hover {
    box-shadow: 0 8px 32px var(--about-shadow-hover);
}

.card-decoration-left,
.card-decoration-right {
    position: absolute;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    opacity: 0.05;
    pointer-events: none;
}

.card-decoration-left {
    top: -100px;
    left: -100px;
    background: radial-gradient(circle, var(--about-primary) 0%, transparent 70%);
}

.card-decoration-right {
    bottom: -100px;
    right: -100px;
    background: radial-gradient(circle, var(--about-secondary) 0%, transparent 70%);
}

/* ========================================
   CONTEÚDO
   ======================================== */

.about-content {
    position: relative;
    z-index: 2;
}

.content-section {
    display: flex;
    gap: 1.5rem;
    align-items: flex-start;
}

.section-icon {
    flex-shrink: 0;
    width: 64px;
    height: 64px;
    border-radius: 12px;
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.15), rgba(217, 118, 56, 0.05));
    color: var(--about-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    transition: all 0.3s ease;
}

.about-main-card:hover .section-icon {
    transform: scale(1.05) rotate(-5deg);
}

.section-text {
    flex-grow: 1;
}

.section-title {
    font-size: 1.35rem;
    font-weight: 600;
    color: var(--about-text);
    margin-bottom: 1rem;
}

.section-description {
    font-size: 1.05rem;
    color: var(--about-text-secondary);
    line-height: 1.8;
    margin: 0;
}

.section-description strong {
    color: var(--about-primary);
    font-weight: 600;
}

.highlight {
    color: var(--about-primary);
    font-weight: 600;
    position: relative;
}

.content-divider {
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--about-border), transparent);
    margin: 2rem 0;
}

/* ========================================
   CARDS DE DESTAQUE
   ======================================== */

.highlight-card {
    background: var(--about-card-bg);
    border-radius: 12px;
    padding: 2rem 1.5rem;
    border: 1px solid var(--about-border);
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
}

.highlight-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 32px var(--about-shadow-hover);
}

.highlight-icon {
    width: 72px;
    height: 72px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin: 0 auto 1.25rem;
    transition: all 0.3s ease;
}

.highlight-card:hover .highlight-icon {
    transform: scale(1.1) rotate(10deg);
}

.highlight-icon.primary {
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.2), rgba(217, 118, 56, 0.08));
    color: var(--about-primary);
}

.highlight-icon.secondary {
    background: linear-gradient(135deg, rgba(198, 107, 61, 0.2), rgba(198, 107, 61, 0.08));
    color: var(--about-secondary);
}

.highlight-icon.tertiary {
    background: linear-gradient(135deg, rgba(184, 95, 48, 0.2), rgba(184, 95, 48, 0.08));
    color: var(--about-tertiary);
}

.highlight-title {
    font-size: 1.15rem;
    font-weight: 600;
    color: var(--about-text);
    margin-bottom: 0.75rem;
}

.highlight-text {
    font-size: 0.95rem;
    color: var(--about-text-secondary);
    line-height: 1.6;
    margin: 0;
}

/* ========================================
   ANIMAÇÕES
   ======================================== */

@keyframes badgePulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

/* ========================================
   RESPONSIVIDADE
   ======================================== */

@media (max-width: 1199px) {
    .about-title { font-size: 2rem; }
    .about-main-card { padding: 2.5rem 2rem; }
}

@media (max-width: 991px) {
    .content-section {
        flex-direction: column;
        gap: 1rem;
    }
    
    .section-icon {
        width: 56px;
        height: 56px;
        font-size: 1.75rem;
    }
}

@media (max-width: 767px) {
    .about-title { font-size: 1.75rem; }
    .about-subtitle { font-size: 1rem; }
    .about-main-card { padding: 2rem 1.5rem; }
    
    .section-title { font-size: 1.25rem; }
    .section-description { font-size: 1rem; }
    
    .highlight-icon {
        width: 60px;
        height: 60px;
        font-size: 1.75rem;
    }
}

@media (max-width: 575px) {
    .badge-text { font-size: 0.75rem; }
    .about-title { font-size: 1.5rem; }
    .about-subtitle { font-size: 0.95rem; }
    .about-main-card { padding: 1.75rem 1.25rem; }
    
    .section-icon {
        width: 48px;
        height: 48px;
        font-size: 1.5rem;
    }
}

/* ========================================
   MODO DARK
   ======================================== */

@media (prefers-color-scheme: dark) {
    .about-main-card { box-shadow: 0 4px 24px var(--about-shadow); }
    .about-main-card:hover { box-shadow: 0 8px 32px var(--about-shadow-hover); }
    
    .section-icon {
        background: linear-gradient(135deg, rgba(255, 140, 74, 0.2), rgba(255, 140, 74, 0.08));
    }
    
    .highlight-icon.primary {
        background: linear-gradient(135deg, rgba(255, 140, 74, 0.25), rgba(255, 140, 74, 0.1));
    }
    
    .highlight-icon.secondary {
        background: linear-gradient(135deg, rgba(255, 163, 102, 0.25), rgba(255, 163, 102, 0.1));
    }
    
    .highlight-icon.tertiary {
        background: linear-gradient(135deg, rgba(217, 118, 56, 0.25), rgba(217, 118, 56, 0.1));
    }
    
    .card-decoration-left {
        background: radial-gradient(circle, rgba(255, 140, 74, 0.1) 0%, transparent 70%);
    }
    
    .card-decoration-right {
        background: radial-gradient(circle, rgba(255, 163, 102, 0.1) 0%, transparent 70%);
    }
}
</style>
<!-- Breve Descrição e Historial: End -->
