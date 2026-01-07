<!-- Porque Nos Escolher: Start -->
<section class="section-py landing-whychoose" id="landingWhyChoose">
  <div class="container position-relative">
    
    <!-- Cabeçalho da Secção -->
    <div class="text-center mb-5 pb-3">
      <div class="whychoose-badge mx-auto mb-4">
        <span class="badge-icon">✧</span>
        <span class="badge-text">PORQUE NOS ESCOLHER</span>
      </div>
      <h2 class="whychoose-title mb-4">
        Diferenciais que<br>
        <span class="text-gradient">Fazem a Diferença</span>
      </h2>
      <p class="whychoose-subtitle mx-auto">
        Compromisso com a excelência e inovação que impulsionam o seu sucesso
      </p>
    </div>

    <!-- Grid de Diferenciais -->
    <div class="row g-4 justify-content-center">
      
      <!-- Soluções Personalizadas -->
      <div class="col-lg-4 col-md-6">
        <div class="whychoose-card primary-card">
          <div class="card-glow primary-glow"></div>
          <div class="whychoose-icon-box">
            <div class="icon-background primary-bg"></div>
            <div class="whychoose-icon primary-icon">
              <i class="bx bx-customize"></i>
            </div>
          </div>
          <div class="whychoose-content">
            <h5 class="whychoose-card-title">Soluções Personalizadas</h5>
            <p class="whychoose-description">
              Adaptamos tecnologias aos desafios específicos de Moçambique.
            </p>
            <div class="card-accent primary-accent"></div>
          </div>
          <div class="card-corner"></div>
        </div>
      </div>

      <!-- Equipe Especializada -->
      <div class="col-lg-4 col-md-6">
        <div class="whychoose-card success-card">
          <div class="card-glow success-glow"></div>
          <div class="whychoose-icon-box">
            <div class="icon-background success-bg"></div>
            <div class="whychoose-icon success-icon">
              <i class="bx bx-layer"></i>
            </div>
          </div>
          <div class="whychoose-content">
            <h5 class="whychoose-card-title">Equipe Especializada</h5>
            <p class="whychoose-description">
              Profissionais com experiência em TI e compromisso com a excelência.
            </p>
            <div class="card-accent success-accent"></div>
          </div>
          <div class="card-corner"></div>
        </div>
      </div>

      <!-- Impacto Local -->
      <div class="col-lg-4 col-md-6">
        <div class="whychoose-card info-card">
          <div class="card-glow info-glow"></div>
          <div class="whychoose-icon-box">
            <div class="icon-background info-bg"></div>
            <div class="whychoose-icon info-icon">
              <i class="bx bx-rocket"></i>
            </div>
          </div>
          <div class="whychoose-content">
            <h5 class="whychoose-card-title">Impacto Local</h5>
            <p class="whychoose-description">
              Contribuímos para o desenvolvimento regional com soluções acessíveis e inovadoras.
            </p>
            <div class="card-accent info-accent"></div>
          </div>
          <div class="card-corner"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* ========================================
   VARIÁVEIS PORQUE NOS ESCOLHER
   ======================================== */

:root {
    --whychoose-primary: #d97638;
    --whychoose-success: #198754;
    --whychoose-info: #0dcaf0;
    
    --whychoose-bg: #fdf9f6;
    --whychoose-card-bg: #fffdfb;
    --whychoose-text: #5a3a28;
    --whychoose-text-secondary: #74523d;
    --whychoose-text-muted: #8a6850;
    --whychoose-border: rgba(217, 118, 56, 0.35);
    
    --whychoose-shadow: rgba(217, 118, 56, 0.08);
    --whychoose-shadow-hover: rgba(217, 118, 56, 0.25);
}

@media (prefers-color-scheme: dark) {
    :root {
        --whychoose-primary: #ff8c4a;
        --whychoose-success: #75b798;
        --whychoose-info: #31d2f2;
        
        --whychoose-bg: #1a1410;
        --whychoose-card-bg: #2a1f1a;
        --whychoose-text: #f5ede6;
        --whychoose-text-secondary: #d4c5b8;
        --whychoose-text-muted: #9a8d82;
        --whychoose-border: rgba(255, 140, 74, 0.15);
        
        --whychoose-shadow: rgba(0, 0, 0, 0.3);
        --whychoose-shadow-hover: rgba(255, 140, 74, 0.3);
    }
}

[data-bs-theme="light"] {
    --whychoose-bg: #fdf9f6;
    --whychoose-card-bg: #fffdfb;
    --whychoose-text: #5a3a28;
    --whychoose-text-secondary: #74523d;
    --whychoose-text-muted: #8a6850;
    --whychoose-border: rgba(217, 118, 56, 0.35);
}

[data-bs-theme="dark"] {
    --whychoose-bg: #1a1410;
    --whychoose-card-bg: #2a1f1a;
}

/* ========================================
   SECÇÃO PRINCIPAL
   ======================================== */

.landing-whychoose {
    background: var(--whychoose-bg);
    position: relative;
}

/* ========================================
   CABEÇALHO
   ======================================== */

.whychoose-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.75rem;
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.12), rgba(184, 95, 48, 0.08));
    border: 1px solid var(--whychoose-border);
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.badge-icon {
    color: var(--whychoose-primary);
    font-size: 1rem;
    animation: badgeSparkle 3s ease-in-out infinite;
}

.badge-text {
    color: var(--whychoose-primary);
    font-weight: 600;
    font-size: 0.875rem;
    letter-spacing: 1.5px;
}

.whychoose-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--whychoose-text);
    line-height: 1.2;
}

.text-gradient {
    background: linear-gradient(135deg, var(--whychoose-primary), #c66b3d);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.whychoose-subtitle {
    max-width: 650px;
    font-size: 1.1rem;
    color: var(--whychoose-text-muted);
    line-height: 1.7;
}

/* ========================================
   CARDS
   ======================================== */

.whychoose-card {
    background: var(--whychoose-card-bg);
    border-radius: 16px;
    padding: 2.5rem 2rem;
    border: 1px solid var(--whychoose-border);
    box-shadow: 0 4px 24px var(--whychoose-shadow);
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.whychoose-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    background: linear-gradient(135deg, transparent 0%, rgba(217, 118, 56, 0.02) 100%);
    opacity: 0;
    transition: opacity 0.5s ease;
}

.whychoose-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 16px 48px var(--whychoose-shadow-hover);
}

.whychoose-card:hover::before {
    opacity: 1;
}

/* ========================================
   GLOW EFFECT
   ======================================== */

.card-glow {
    position: absolute;
    top: -50%;
    left: 50%;
    transform: translateX(-50%);
    width: 200%;
    height: 200%;
    border-radius: 50%;
    opacity: 0;
    transition: all 0.6s ease;
    pointer-events: none;
}

.primary-glow {
    background: radial-gradient(circle, rgba(217, 118, 56, 0.15) 0%, transparent 70%);
}

.success-glow {
    background: radial-gradient(circle, rgba(25, 135, 84, 0.15) 0%, transparent 70%);
}

.info-glow {
    background: radial-gradient(circle, rgba(13, 202, 240, 0.15) 0%, transparent 70%);
}

.whychoose-card:hover .card-glow {
    opacity: 1;
    top: -30%;
}

/* ========================================
   ÍCONE BOX
   ======================================== */

.whychoose-icon-box {
    position: relative;
    margin-bottom: 2rem;
    z-index: 2;
}

.icon-background {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 140px;
    height: 140px;
    border-radius: 50%;
    opacity: 0.15;
    transition: all 0.5s ease;
}

.primary-bg { background: var(--whychoose-primary); }
.success-bg { background: var(--whychoose-success); }
.info-bg { background: var(--whychoose-info); }

.whychoose-card:hover .icon-background {
    transform: translate(-50%, -50%) scale(1.2);
    opacity: 0.25;
}

.whychoose-icon {
    width: 120px;
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 4rem;
    position: relative;
    z-index: 2;
    transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.primary-icon {
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.2), rgba(217, 118, 56, 0.08));
    color: var(--whychoose-primary);
}

.success-icon {
    background: linear-gradient(135deg, rgba(25, 135, 84, 0.2), rgba(25, 135, 84, 0.08));
    color: var(--whychoose-success);
}

.info-icon {
    background: linear-gradient(135deg, rgba(13, 202, 240, 0.2), rgba(13, 202, 240, 0.08));
    color: var(--whychoose-info);
}

.whychoose-card:hover .whychoose-icon {
    transform: scale(1.15) rotate(360deg);
}

/* ========================================
   CONTEÚDO
   ======================================== */

.whychoose-content {
    position: relative;
    z-index: 2;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.whychoose-card-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--whychoose-text);
    margin-bottom: 1rem;
    transition: all 0.3s ease;
}

.primary-card:hover .whychoose-card-title { color: var(--whychoose-primary); }
.success-card:hover .whychoose-card-title { color: var(--whychoose-success); }
.info-card:hover .whychoose-card-title { color: var(--whychoose-info); }

.whychoose-description {
    font-size: 1rem;
    color: var(--whychoose-text-secondary);
    line-height: 1.7;
    margin-bottom: 1.5rem;
    flex-grow: 1;
}

/* ========================================
   ACENTO
   ======================================== */

.card-accent {
    width: 60px;
    height: 4px;
    border-radius: 2px;
    margin: 0 auto;
    transition: width 0.4s ease;
}

.primary-accent { background: var(--whychoose-primary); }
.success-accent { background: var(--whychoose-success); }
.info-accent { background: var(--whychoose-info); }

.whychoose-card:hover .card-accent {
    width: 80px;
}

/* ========================================
   CANTO DECORATIVO
   ======================================== */

.card-corner {
    position: absolute;
    top: 0;
    right: 0;
    width: 60px;
    height: 60px;
    overflow: hidden;
}

.card-corner::before {
    content: '';
    position: absolute;
    top: -30px;
    right: -30px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    opacity: 0.1;
    transition: all 0.4s ease;
}

.primary-card .card-corner::before { background: var(--whychoose-primary); }
.success-card .card-corner::before { background: var(--whychoose-success); }
.info-card .card-corner::before { background: var(--whychoose-info); }

.whychoose-card:hover .card-corner::before {
    width: 80px;
    height: 80px;
    top: -40px;
    right: -40px;
    opacity: 0.2;
}

/* ========================================
   ANIMAÇÕES
   ======================================== */

@keyframes badgeSparkle {
    0%, 100% { transform: scale(1) rotate(0deg); opacity: 1; }
    50% { transform: scale(1.1) rotate(180deg); opacity: 0.8; }
}

/* ========================================
   RESPONSIVIDADE
   ======================================== */

@media (max-width: 1199px) {
    .whychoose-title { font-size: 2rem; }
    .whychoose-icon { width: 100px; height: 100px; font-size: 3.5rem; }
    .icon-background { width: 120px; height: 120px; }
    .whychoose-card-title { font-size: 1.35rem; }
}

@media (max-width: 991px) {
    .whychoose-card { padding: 2rem 1.5rem; }
    .whychoose-icon { width: 90px; height: 90px; font-size: 3rem; }
    .icon-background { width: 110px; height: 110px; }
}

@media (max-width: 767px) {
    .whychoose-title { font-size: 1.75rem; }
    .whychoose-subtitle { font-size: 1rem; }
    .whychoose-card { padding: 1.75rem 1.25rem; }
    .whychoose-icon { width: 80px; height: 80px; font-size: 2.5rem; }
    .icon-background { width: 100px; height: 100px; }
    .whychoose-card-title { font-size: 1.25rem; }
    .whychoose-description { font-size: 0.95rem; }
}

@media (max-width: 575px) {
    .badge-text { font-size: 0.75rem; }
    .whychoose-title { font-size: 1.5rem; }
    .whychoose-subtitle { font-size: 0.95rem; }
    .whychoose-icon { width: 70px; height: 70px; font-size: 2.25rem; }
    .icon-background { width: 90px; height: 90px; }
}

/* ========================================
   MODO DARK
   ======================================== */

@media (prefers-color-scheme: dark) {
    .whychoose-card { box-shadow: 0 4px 24px var(--whychoose-shadow); }
    .whychoose-card:hover { box-shadow: 0 16px 48px var(--whychoose-shadow-hover); }
    
    .primary-icon {
        background: linear-gradient(135deg, rgba(255, 140, 74, 0.25), rgba(255, 140, 74, 0.1));
    }
    
    .success-icon {
        background: linear-gradient(135deg, rgba(117, 183, 152, 0.25), rgba(117, 183, 152, 0.1));
    }
    
    .info-icon {
        background: linear-gradient(135deg, rgba(49, 210, 242, 0.25), rgba(49, 210, 242, 0.1));
    }
    
    .primary-glow {
        background: radial-gradient(circle, rgba(255, 140, 74, 0.2) 0%, transparent 70%);
    }
    
    .success-glow {
        background: radial-gradient(circle, rgba(117, 183, 152, 0.2) 0%, transparent 70%);
    }
    
    .info-glow {
        background: radial-gradient(circle, rgba(49, 210, 242, 0.2) 0%, transparent 70%);
    }
}
</style>
<!-- Porque Nos Escolher: End -->
