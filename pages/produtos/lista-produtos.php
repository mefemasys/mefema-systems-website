<style>
  /* ========================================
     RESET E BASE
     ======================================== */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    line-height: 1.6;
  }

  /* ========================================
     VARIÁVEIS DOS PRODUTOS - FINAL
     ======================================== */
  :root {
    /* Cores principais (mesmas nos dois modos, só invertidas no dark) */
    --products-primary: #d97638;
    --products-primary-light: #ff8c4a;
    --products-secondary: #c66b3d;
    --products-accent: #b85f30;

    /* MODO CLARO - quente e acolhedor */
    --products-bg: #fdf8f4;           /* Fundo da página */
    --products-card-bg: #fffdfb;       /* Fundo dos cards */
    --products-text: #5a3a28;          /* Texto principal */
    --products-text-secondary: #74523d;
    --products-text-muted: #8a6850;
    --products-border: rgba(217, 118, 56, 0.35);

    --products-shadow: rgba(217, 118, 56, 0.08);
    --products-shadow-hover: rgba(217, 118, 56, 0.2);
  }

  @media (prefers-color-scheme: dark) {
    :root {
      /* Cores principais invertidas para mais vivacidade no dark */
      --products-primary: #ff8c4a;
      --products-primary-light: #ffa366;
      --products-secondary: #d97638;
      --products-accent: #e07a3d;

      /* MODO ESCURO - quente e profundo */
      --products-bg: #12100d;           /* Fundo da página - preto quente */
      --products-card-bg: #1f1814;       /* Fundo dos cards - marrom escuro quente */
      --products-text: #f5ede6;          /* Texto principal - bege claro */
      --products-text-secondary: #d4c5b8;
      --products-text-muted: #9a8d82;
      --products-border: rgba(255, 140, 74, 0.15);

      --products-shadow: rgba(0, 0, 0, 0.4);
      --products-shadow-hover: rgba(255, 140, 74, 0.25);
    }
  }

  /* ========================================
     CONTAINER E GRID
     ======================================== */
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .section-py {
    padding: 80px 0;
  }
  .row {
    display: flex;
    flex-wrap: wrap;
    margin: -15px;
  }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%;
    padding: 15px;
  }

  /* ========================================
     SECÇÃO PRINCIPAL
     ======================================== */
  .landing-products {
    background: var(--products-bg);
  }

  /* ========================================
     CARD DE PRODUTO
     ======================================== */
  .product-card {
    background: var(--products-card-bg);
    border-radius: 6px;
    padding: 2.5rem;
    height: 100%;
    border: 1px solid var(--products-border);
    box-shadow: 0 4px 20px var(--products-shadow);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
  }

  .product-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, var(--products-primary), var(--products-primary-light));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
  }

  .product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 40px var(--products-shadow-hover);
    border-color: var(--products-primary);
  }

  .product-card:hover::before {
    transform: scaleX(1);
  }

  /* ========================================
     CABEÇALHO DO CARD
     ======================================== */
  .product-header {
    display: flex;
    align-items: center;
    gap: 1.25rem;
    margin-bottom: 2rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid var(--products-border);
  }

  .product-icon {
    width: 64px;
    height: 64px;
    min-width: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.15), rgba(217, 118, 56, 0.05));
    border-radius: 4px;
    color: var(--products-primary);
    transition: all 0.4s ease;
  }

  .product-card:hover .product-icon {
    transform: scale(1.1) rotate(5deg);
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.25), rgba(217, 118, 56, 0.1));
  }

  .product-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--products-text);
    margin: 0;
    transition: color 0.3s ease;
  }

  .product-card:hover .product-title {
    color: var(--products-primary);
  }

  /* ========================================
     DESCRIÇÃO DO PRODUTO
     ======================================== */
  .product-description {
    color: var(--products-text-muted);
    font-size: 0.95rem;
    line-height: 1.7;
    margin-bottom: 2rem;
  }

  /* ========================================
     LISTA DE CARACTERÍSTICAS
     ======================================== */
  .product-list {
    list-style: none;
    padding: 0;
    margin: 0 0 2rem 0;
    flex-grow: 1;
  }

  .product-list li {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 0.75rem 0;
    color: var(--products-text-secondary);
    font-size: 0.95rem;
    line-height: 1.6;
    transition: all 0.3s ease;
  }

  .product-list li:hover {
    color: var(--products-text);
    transform: translateX(5px);
  }

  .check-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 24px;
    height: 24px;
    min-width: 24px;
    background: linear-gradient(135deg, var(--products-primary), var(--products-secondary));
    color: white;
    border-radius: 5%;
    font-size: 0.75rem;
    font-weight: bold;
    transition: transform 0.3s ease;
  }

  .product-list li:hover .check-icon {
    transform: scale(1.15);
  }

  /* ========================================
     FOOTER DO CARD (PREÇO E BOTÃO)
     ======================================== */
  .product-footer {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-top: auto;
    padding-top: 1.5rem;
    border-top: 1px solid var(--products-border);
  }

  .product-price {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--products-primary);
    text-align: center;
  }

  .product-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    padding: 1rem 2rem;
    background: transparent;
    border: 2px solid var(--products-primary);
    border-radius: 3px;
    color: var(--products-primary);
    font-weight: 600;
    text-decoration: none;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
  }

  .product-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: var(--products-primary);
    transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: -1;
  }

  .product-btn:hover {
    color: white;
    transform: translateX(5px);
  }

  .product-btn:hover::before {
    width: 100%;
  }

  .product-btn svg {
    transition: transform 0.3s ease;
  }

  .product-btn:hover svg {
    transform: translateX(5px);
  }

  /* ========================================
     RESPONSIVIDADE
     ======================================== */
  @media (max-width: 1199px) {
    .product-card { padding: 2rem; }
    .product-icon { width: 56px; height: 56px; min-width: 56px; }
    .product-title { font-size: 1.35rem; }
  }

  @media (max-width: 991px) {
    .col-lg-6 { flex: 0 0 100%; max-width: 100%; }
    .product-header { flex-direction: column; align-items: flex-start; gap: 1rem; }
    .product-icon { width: 48px; height: 48px; min-width: 48px; }
  }

  @media (max-width: 767px) {
    .section-py { padding: 50px 0; }
    .product-card { padding: 1.75rem; }
    .product-title { font-size: 1.25rem; }
    .product-list li { font-size: 0.9rem; }
    .product-btn { width: 100%; padding: 0.875rem 1.5rem; }
  }

  @media (max-width: 575px) {
    .product-card { padding: 1.5rem; }
    .product-price { font-size: 1.25rem; }
  }

  /* ========================================
     AJUSTES FINAIS PARA DARK MODE (ícones)
     ======================================== */
  @media (prefers-color-scheme: dark) {
    .product-icon {
      background: linear-gradient(135deg, rgba(255, 140, 74, 0.2), rgba(255, 140, 74, 0.08));
    }
    .product-card:hover .product-icon {
      background: linear-gradient(135deg, rgba(255, 140, 74, 0.3), rgba(255, 140, 74, 0.12));
    }
  }
</style>

  <!-- Secção de Produtos - Design Moderno e Fluido -->
  <section class="section-py landing-products" id="landingProducts">
    <div class="container">
      <!-- Grid de Produtos -->
      <div class="row g-4">
        
        <!-- Produto 1: Websites -->
        <div class="col-lg-6">
          <div class="product-card">
            <div class="product-header">
              <div class="product-icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                  <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" stroke="currentColor" stroke-width="2"/>
                </svg>
              </div>
              <h4 class="product-title">Websites Prontos</h4>
            </div>
            <p class="product-description">
              Pacotes completos com design moderno, responsivo e funcionalidades essenciais: institucional, empresarial, e-commerce, landing page, restaurante e mais.
            </p>
            <ul class="product-list">
              <li><span class="check-icon">✓</span> Domínio e hospedagem incluídos</li>
              <li><span class="check-icon">✓</span> SSL, email profissional</li>
              <li><span class="check-icon">✓</span> Painel administrativo</li>
              <li><span class="check-icon">✓</span> Suporte técnico dedicado</li>
            </ul>
            <div class="product-footer">
              <span class="product-price">A partir de 25.000 MT</span>
              <a href="/produtos/websites/" class="product-btn">
                <span>Ver todos os pacotes</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                  <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Produto 2: Sistemas de Gestão -->
        <div class="col-lg-6">
          <div class="product-card">
            <div class="product-header">
              <div class="product-icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="3" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
                  <rect x="14" y="3" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
                  <rect x="3" y="14" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
                  <rect x="14" y="14" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
                </svg>
              </div>
              <h4 class="product-title">Sistemas de Gestão</h4>
            </div>
            <p class="product-description">
              Softwares robustos para automatizar e controlar o seu negócio: facturação AT, stock, CRM, RH, escolar, clínica, hotelaria e ERP.
            </p>
            <ul class="product-list">
              <li><span class="check-icon">✓</span> Certificação AT (quando aplicável)</li>
              <li><span class="check-icon">✓</span> Multi-utilizador e acessos por perfil</li>
              <li><span class="check-icon">✓</span> Relatórios avançados</li>
              <li><span class="check-icon">✓</span> Integrações locais (M-Pesa, etc.)</li>
            </ul>
            <div class="product-footer">
              <span class="product-price">A partir de 45.000 MT</span>
              <a href="/produtos/sistemas-gestao/" class="product-btn">
                <span>Explorar sistemas</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                  <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Produto 3: Apps Móveis -->
        <div class="col-lg-6">
          <div class="product-card">
            <div class="product-header">
              <div class="product-icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="5" y="2" width="14" height="20" rx="2" stroke="currentColor" stroke-width="2"/>
                  <path d="M12 18h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
              </div>
              <h4 class="product-title">Apps Móveis</h4>
            </div>
            <p class="product-description">
              Aplicações nativas ou híbridas prontas para Android e iOS: delivery, táxi, loja mobile, presença empresarial e soluções personalizadas.
            </p>
            <ul class="product-list">
              <li><span class="check-icon">✓</span> Publicação nas lojas (Play Store/App Store)</li>
              <li><span class="check-icon">✓</span> Notificações push</li>
              <li><span class="check-icon">✓</span> Modo offline (quando necessário)</li>
              <li><span class="check-icon">✓</span> Integração com pagamentos móveis</li>
            </ul>
            <div class="product-footer">
              <span class="product-price">A partir de 80.000 MT</span>
              <a href="/produtos/apps-mobile/" class="product-btn">
                <span>Ver aplicações</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                  <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Produto 4: Soluções IA + IoT -->
        <div class="col-lg-6">
          <div class="product-card">
            <div class="product-header">
              <div class="product-icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <circle cx="12" cy="12" r="2" fill="currentColor"/>
                </svg>
              </div>
              <h4 class="product-title">Soluções IA + IoT</h4>
            </div>
            <p class="product-description">
              Produtos inteligentes com Inteligência Artificial e Internet das Coisas: chatbots avançados, automação preditiva, sensores conectados e análise de dados.
            </p>
            <ul class="product-list">
              <li><span class="check-icon">✓</span> Chatbots com IA (WhatsApp, site)</li>
              <li><span class="check-icon">✓</span> Monitorização remota em tempo real</li>
              <li><span class="check-icon">✓</span> Dashboards preditivos</li>
              <li><span class="check-icon">✓</span> Integração com hardware existente</li>
            </ul>
            <div class="product-footer">
              <span class="product-price">Sob consulta</span>
              <a href="/produtos/solucoes-ia-iot/" class="product-btn">
                <span>Saber mais</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                  <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
