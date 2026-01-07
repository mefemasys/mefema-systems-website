<!-- Missão e Visão: Start -->
<section class="section-py landing-missaovisao" id="landingMissaoVisao">
  <div class="container position-relative">
    
    <!-- Cabeçalho da Secção -->
    <div class="text-center mb-5 pb-3">
      <div class="missaovisao-badge mx-auto mb-4">
        <span class="badge-icon">◉</span>
        <span class="badge-text">MISSÃO E VISÃO</span>
      </div>
      <h2 class="missaovisao-title mb-4">
        Propósito e<br>
        <span class="text-gradient">Direção</span>
      </h2>
      <p class="missaovisao-subtitle mx-auto">
        Os princípios que guiam a nossa jornada rumo à excelência e inovação
      </p>
    </div>

    <!-- Grid de Missão e Visão -->
    <div class="row g-4 justify-content-center">
      
      <!-- Missão -->
      <div class="col-lg-6">
        <div class="missaovisao-card primary-card">
          <div class="card-icon-wrapper">
            <div class="icon-circle primary">
              <i class="ri-target-line"></i>
            </div>
          </div>
          <div class="card-content">
            <h5 class="card-title">Missão</h5>
            <p class="card-description">
              Fornecer soluções tecnológicas acessíveis e inovadoras para PMEs e instituições públicas em Moçambique, promovendo a eficiência operacional e o crescimento sustentável através da transformação digital.
            </p>
            <div class="card-accent primary"></div>
          </div>
        </div>
      </div>

      <!-- Visão -->
      <div class="col-lg-6">
        <div class="missaovisao-card success-card">
          <div class="card-icon-wrapper">
            <div class="icon-circle success">
              <i class="ri-eye-line"></i>
            </div>
          </div>
          <div class="card-content">
            <h5 class="card-title">Visão</h5>
            <p class="card-description">
              Ser a referência em transformação digital em Moçambique, impulsionando o desenvolvimento económico e social através de tecnologias inteligentes e soluções adaptadas ao contexto local.
            </p>
            <div class="card-accent success"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* ========================================
   VARIÁVEIS MISSÃO E VISÃO
   ======================================== */

:root {
    --missao-primary: #d97638;
    --missao-success: #198754;
    
    --missao-bg: #fdf9f6;
    --missao-card-bg: #fffdfb;
    --missao-text: #5a3a28;
    --missao-text-secondary: #74523d;
    --missao-text-muted: #8a6850;
    --missao-border: rgba(217, 118, 56, 0.35);
    
    --missao-shadow: rgba(217, 118, 56, 0.08);
    --missao-shadow-hover: rgba(217, 118, 56, 0.15);
}

@media (prefers-color-scheme: dark) {
    :root {
        --missao-primary: #ff8c4a;
        --missao-success: #75b798;
        
        --missao-bg: #1a1410;
        --missao-card-bg: #2a1f1a;
        --missao-text: #f5ede6;
        --missao-text-secondary: #d4c5b8;
        --missao-text-muted: #9a8d82;
        --missao-border: rgba(255, 140, 74, 0.15);
        
        --missao-shadow: rgba(0, 0, 0, 0.2);
        --missao-shadow-hover: rgba(255, 140, 74, 0.2);
    }
}

[data-bs-theme="light"] {
    --missao-bg: #fdf9f6;
    --missao-card-bg: #fffdfb;
    --missao-text: #5a3a28;
    --missao-text-secondary: #74523d;
    --missao-text-muted: #8a6850;
    --missao-border: rgba(217, 118, 56, 0.35);
}

[data-bs-theme="dark"] {
    --missao-bg: #1a1410;
    --missao-card-bg: #2a1f1a;
}

/* ========================================
   SECÇÃO PRINCIPAL
   ======================================== */

.landing-missaovisao {
    background: var(--missao-bg);
    position: relative;
    overflow: hidden;
}

/* ========================================
   CABEÇALHO
   ======================================== */

.missaovisao-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.1), rgba(184, 95, 48, 0.08));
    border: 1px solid var(--missao-border);
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.badge-icon {
    color: var(--missao-primary);
    font-size: 1.25rem;
    animation: badgeRotate 3s ease-in-out infinite;
}

.badge-text {
    color: var(--missao-primary);
    font-weight: 600;
    font-size: 0.875rem;
    letter-spacing: 1.5px;
}

.missaovisao-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--missao-text);
    line-height: 1.2;
}

.text-gradient {
    background: linear-gradient(135deg, var(--missao-primary), #c66b3d);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.missaovisao-subtitle {
    max-width: 700px;
    font-size: 1.1rem;
    color: var(--missao-text-muted);
    line-height: 1.7;
}

/* ========================================
   CARDS MISSÃO E VISÃO
   ======================================== */

.missaovisao-card {
    background: var(--missao-card-bg);
    border-radius: 5px;
    padding: 2rem 1.5rem;
    height: 100%;
    border: 1px solid var(--missao-border);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.missaovisao-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--missao-primary), transparent);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.missaovisao-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px var(--missao-shadow-hover);
    border-color: var(--missao-primary);
}

.missaovisao-card:hover::before {
    opacity: 1;
}

/* Cores específicas */
.primary-card:hover {
    border-color: var(--missao-primary);
}

.success-card:hover {
    border-color: var(--missao-success);
}

.success-card::before {
    background: linear-gradient(90deg, transparent, var(--missao-success), transparent);
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
    border-radius: 5%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    transition: all 0.4s ease;
    font-size: 3.5rem;
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

.missaovisao-card:hover .icon-circle {
    transform: scale(1.1) rotate(5deg);
}

.missaovisao-card:hover .icon-circle::before {
    width: 110%;
    height: 110%;
    opacity: 0;
}

.icon-circle.primary {
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.15), rgba(217, 118, 56, 0.05));
    color: var(--missao-primary);
}

.icon-circle.success {
    background: linear-gradient(135deg, rgba(25, 135, 84, 0.15), rgba(25, 135, 84, 0.05));
    color: var(--missao-success);
}

/* ========================================
   CONTEÚDO
   ======================================== */

.card-content {
    text-align: center;
}

.card-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--missao-text);
    margin-bottom: 1rem;
    transition: color 0.3s ease;
}

.primary-card:hover .card-title {
    color: var(--missao-primary);
}

.success-card:hover .card-title {
    color: var(--missao-success);
}

.card-description {
    font-size: 1rem;
    color: var(--missao-text-secondary);
    line-height: 1.7;
    margin-bottom: 1.5rem;
}

/* ========================================
   ACENTO
   ======================================== */

.card-accent {
    width: 60px;
    height: 3px;
    margin: 0 auto;
    border-radius: 2px;
    transition: width 0.4s ease;
}

.card-accent.primary {
    background: var(--missao-primary);
}

.card-accent.success {
    background: var(--missao-success);
}

.missaovisao-card:hover .card-accent {
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
    .missaovisao-title {
        font-size: 2rem;
    }
    
    .icon-circle {
        width: 100px;
        height: 100px;
        font-size: 3rem;
    }
}

@media (max-width: 991px) {
    .missaovisao-card {
        padding: 2rem 1.5rem;
    }
    
    .icon-circle {
        width: 90px;
        height: 90px;
        font-size: 2.75rem;
    }
}

@media (max-width: 767px) {
    .missaovisao-title {
        font-size: 1.75rem;
    }
    
    .missaovisao-subtitle {
        font-size: 1rem;
    }
    
    .missaovisao-card {
        padding: 1.75rem 1.25rem;
    }
    
    .icon-circle {
        width: 80px;
        height: 80px;
        font-size: 2.5rem;
    }
    
    .card-title {
        font-size: 1.35rem;
    }
    
    .card-description {
        font-size: 0.95rem;
    }
}

@media (max-width: 575px) {
    .badge-text {
        font-size: 0.75rem;
    }
    
    .missaovisao-title {
        font-size: 1.5rem;
    }
    
    .missaovisao-subtitle {
        font-size: 0.95rem;
    }
    
    .icon-circle {
        width: 70px;
        height: 70px;
        font-size: 2.25rem;
    }
    
    .card-title {
        font-size: 1.25rem;
    }
    
    .card-description {
        font-size: 0.9rem;
    }
}

/* ========================================
   MODO DARK
   ======================================== */

@media (prefers-color-scheme: dark) {
    .missaovisao-card {
        box-shadow: 0 4px 20px var(--missao-shadow);
    }
    
    .missaovisao-card:hover {
        box-shadow: 0 20px 40px var(--missao-shadow-hover);
    }
    
    .icon-circle.primary {
        background: linear-gradient(135deg, rgba(255, 140, 74, 0.2), rgba(255, 140, 74, 0.08));
    }
    
    .icon-circle.success {
        background: linear-gradient(135deg, rgba(117, 183, 152, 0.2), rgba(117, 183, 152, 0.08));
    }
}
</style>
<!-- Missão e Visão: End -->
