<!-- Modo Operandi: Start -->
<section class="section-py landing-modooperandi" id="landingModoOperandi">
  <div class="container position-relative">
    
    <!-- Cabeçalho da Secção -->
    <div class="text-center mb-5 pb-3">
      <div class="modooperandi-badge mx-auto mb-4">
        <span class="badge-icon">◇</span>
        <span class="badge-text">MODO OPERANDI</span>
      </div>
      <h2 class="modooperandi-title mb-4">
        Como Trabalhamos<br>
        <span class="text-gradient">Para o Seu Sucesso</span>
      </h2>
      <p class="modooperandi-subtitle mx-auto">
        Metodologia testada e comprovada que garante resultados excepcionais
      </p>
    </div>

    <!-- Grid de Metodologia -->
    <div class="row g-4 justify-content-center">
      
      <!-- Abordagem Colaborativa -->
      <div class="col-lg-4 col-md-6">
        <div class="modo-card primary-card">
          <div class="card-icon-wrapper">
            <div class="icon-circle primary">
              <img src="assets/img/icons/laptop-charging.png" alt="Abordagem Colaborativa" class="card-icon">
            </div>
          </div>
          <div class="card-content">
            <h5 class="card-title">Abordagem Colaborativa</h5>
            <p class="card-description">
              Trabalhamos em parceria com clientes para entender suas necessidades e entregar soluções personalizadas.
            </p>
            <div class="card-accent primary"></div>
          </div>
        </div>
      </div>

      <!-- Foco em Qualidade -->
      <div class="col-lg-4 col-md-6">
        <div class="modo-card success-card">
          <div class="card-icon-wrapper">
            <div class="icon-circle success">
              <img src="assets/img/icons/transition-up.png" alt="Foco em Qualidade" class="card-icon">
            </div>
          </div>
          <div class="card-content">
            <h5 class="card-title">Foco em Qualidade</h5>
            <p class="card-description">
              Utilizamos metodologias ágeis com controlo rigoroso de qualidade e testes.
            </p>
            <div class="card-accent success"></div>
          </div>
        </div>
      </div>

      <!-- Sustentabilidade -->
      <div class="col-lg-4 col-md-6">
        <div class="modo-card warning-card">
          <div class="card-icon-wrapper">
            <div class="icon-circle warning">
              <img src="assets/img/icons/edit.png" alt="Sustentabilidade" class="card-icon">
            </div>
          </div>
          <div class="card-content">
            <h5 class="card-title">Sustentabilidade</h5>
            <p class="card-description">
              Promovemos soluções escaláveis e de longo prazo, com suporte contínuo.
            </p>
            <div class="card-accent warning"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* ========================================
   VARIÁVEIS MODO OPERANDI
   ======================================== */

:root {
    --modo-primary: #d97638;
    --modo-success: #198754;
    --modo-warning: #ffc107;
    
    --modo-bg: #fdf9f6;
    --modo-card-bg: #fffdfb;
    --modo-text: #5a3a28;
    --modo-text-secondary: #74523d;
    --modo-text-muted: #8a6850;
    --modo-border: rgba(217, 118, 56, 0.35);
    
    --modo-shadow: rgba(217, 118, 56, 0.08);
    --modo-shadow-hover: rgba(217, 118, 56, 0.15);
}

@media (prefers-color-scheme: dark) {
    :root {
        --modo-primary: #ff8c4a;
        --modo-success: #75b798;
        --modo-warning: #ffca2c;
        
        --modo-bg: #1a1410;
        --modo-card-bg: #2a1f1a;
        --modo-text: #f5ede6;
        --modo-text-secondary: #d4c5b8;
        --modo-text-muted: #9a8d82;
        --modo-border: rgba(255, 140, 74, 0.15);
        
        --modo-shadow: rgba(0, 0, 0, 0.2);
        --modo-shadow-hover: rgba(255, 140, 74, 0.2);
    }
}

[data-bs-theme="light"] {
    --modo-bg: #fdf9f6;
    --modo-card-bg: #fffdfb;
    --modo-text: #5a3a28;
    --modo-text-secondary: #74523d;
    --modo-text-muted: #8a6850;
    --modo-border: rgba(217, 118, 56, 0.35);
}

[data-bs-theme="dark"] {
    --modo-bg: #1a1410;
    --modo-card-bg: #2a1f1a;
}

/* ========================================
   SECÇÃO PRINCIPAL
   ======================================== */

.landing-modooperandi {
    background: var(--modo-bg);
    position: relative;
    overflow: hidden;
}

/* ========================================
   CABEÇALHO
   ======================================== */

.modooperandi-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.1), rgba(184, 95, 48, 0.08));
    border: 1px solid var(--modo-border);
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.badge-icon {
    color: var(--modo-primary);
    font-size: 1.25rem;
    animation: badgeRotate 3s ease-in-out infinite;
}

.badge-text {
    color: var(--modo-primary);
    font-weight: 600;
    font-size: 0.875rem;
    letter-spacing: 1.5px;
}

.modooperandi-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--modo-text);
    line-height: 1.2;
}

.text-gradient {
    background: linear-gradient(135deg, var(--modo-primary), #c66b3d);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.modooperandi-subtitle {
    max-width: 700px;
    font-size: 1.1rem;
    color: var(--modo-text-muted);
    line-height: 1.7;
}

/* ========================================
   CARDS DO MODO OPERANDI
   ======================================== */

.modo-card {
    background: var(--modo-card-bg);
    border-radius: 5px;
    padding: 2rem 1.5rem;
    height: 100%;
    border: 1px solid var(--modo-border);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.modo-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--modo-primary), transparent);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.modo-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px var(--modo-shadow-hover);
    border-color: var(--modo-primary);
}

.modo-card:hover::before {
    opacity: 1;
}

/* Cores específicas */
.primary-card:hover {
    border-color: var(--modo-primary);
}

.success-card:hover {
    border-color: var(--modo-success);
}

.success-card::before {
    background: linear-gradient(90deg, transparent, var(--modo-success), transparent);
}

.warning-card:hover {
    border-color: var(--modo-warning);
}

.warning-card::before {
    background: linear-gradient(90deg, transparent, var(--modo-warning), transparent);
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

.modo-card:hover .icon-circle::before {
    width: 110%;
    height: 110%;
    opacity: 0;
}

.icon-circle.primary {
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.15), rgba(217, 118, 56, 0.05));
    color: var(--modo-primary);
}

.icon-circle.success {
    background: linear-gradient(135deg, rgba(25, 135, 84, 0.15), rgba(25, 135, 84, 0.05));
    color: var(--modo-success);
}

.icon-circle.warning {
    background: linear-gradient(135deg, rgba(255, 193, 7, 0.15), rgba(255, 193, 7, 0.05));
    color: var(--modo-warning);
}

.card-icon {
    width: 70px;
    height: 70px;
    object-fit: contain;
    transition: transform 0.4s ease;
}

.modo-card:hover .card-icon {
    transform: scale(1.1) rotate(5deg);
}

/* ========================================
   CONTEÚDO
   ======================================== */

.card-content {
    text-align: center;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--modo-text);
    margin-bottom: 1rem;
    transition: color 0.3s ease;
}

.primary-card:hover .card-title {
    color: var(--modo-primary);
}

.success-card:hover .card-title {
    color: var(--modo-success);
}

.warning-card:hover .card-title {
    color: var(--modo-warning);
}

.card-description {
    font-size: 0.95rem;
    color: var(--modo-text-secondary);
    line-height: 1.6;
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
    background: var(--modo-primary);
}

.card-accent.success {
    background: var(--modo-success);
}

.card-accent.warning {
    background: var(--modo-warning);
}

.modo-card:hover .card-accent {
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
    .modooperandi-title {
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
    .icon-circle {
        width: 90px;
        height: 90px;
    }
    
    .card-icon {
        width: 55px;
        height: 55px;
    }
}

@media (max-width: 767px) {
    .modooperandi-title {
        font-size: 1.75rem;
    }
    
    .modooperandi-subtitle {
        font-size: 1rem;
    }
    
    .modo-card {
        padding: 1.75rem 1.25rem;
    }
    
    .icon-circle {
        width: 80px;
        height: 80px;
    }
    
    .card-icon {
        width: 50px;
        height: 50px;
    }
    
    .card-title {
        font-size: 1.15rem;
    }
    
    .card-description {
        font-size: 0.9rem;
    }
}

@media (max-width: 575px) {
    .badge-text {
        font-size: 0.75rem;
    }
    
    .modooperandi-title {
        font-size: 1.5rem;
    }
    
    .modooperandi-subtitle {
        font-size: 0.95rem;
    }
    
    .icon-circle {
        width: 70px;
        height: 70px;
    }
    
    .card-icon {
        width: 45px;
        height: 45px;
    }
}

/* ========================================
   MODO DARK
   ======================================== */

@media (prefers-color-scheme: dark) {
    .modo-card {
        box-shadow: 0 4px 20px var(--modo-shadow);
    }
    
    .modo-card:hover {
        box-shadow: 0 20px 40px var(--modo-shadow-hover);
    }
    
    .icon-circle.primary {
        background: linear-gradient(135deg, rgba(255, 140, 74, 0.2), rgba(255, 140, 74, 0.08));
    }
    
    .icon-circle.success {
        background: linear-gradient(135deg, rgba(117, 183, 152, 0.2), rgba(117, 183, 152, 0.08));
    }
    
    .icon-circle.warning {
        background: linear-gradient(135deg, rgba(255, 202, 44, 0.2), rgba(255, 202, 44, 0.08));
    }
}
</style>
<!-- Modo Operandi: End -->
