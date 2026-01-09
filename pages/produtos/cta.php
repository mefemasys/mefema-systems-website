<section class="section-py" id="produtosCTA" style="background: var(--products-bg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="fw-bold mb-4" style="color: var(--products-text); font-size: 2.4rem;">
          Não Encontrou o Produto Ideal?
        </h2>
        <p class="mb-5" style="font-size: 1.15rem; color: var(--products-text-secondary); line-height: 1.7;">
          Podemos desenvolver uma solução à medida das suas necessidades.<br>
          Entre em contacto para um orçamento personalizado.
        </p>
        <div class="d-flex gap-4 justify-content-center flex-wrap">
          <a href="#landingContact" class="btn-cta-primary">
            <i class="ri-mail-line me-2"></i>Solicitar Orçamento
          </a>
          <a href="tel:+258840000000" class="btn-cta-outline">
            <i class="ri-phone-line me-2"></i>Ligar Agora
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
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
     VARIÁVEIS DOS PRODUTOS - CORRIGIDAS PARA LIGHT & DARK
     ======================================== */
  :root {
    /* MODO CLARO (padrão) - quente e claro */
    --products-bg: #fdf8f4;                 /* Fundo da página */
    --products-card-bg: #fffdfb;             /* Fundo dos cards */
    --products-text: #5a3a28;                /* Texto principal - castanho quente */
    --products-text-secondary: #74523d;      /* Texto secundário */
    --products-text-muted: #8a6850;          /* Texto muted */
    --products-border: rgba(217, 118, 56, 0.35);
    --products-shadow: rgba(217, 118, 56, 0.08);
    --products-shadow-hover: rgba(217, 118, 56, 0.2);

    /* Cores laranja */
    --products-primary: #d97638;
    --products-primary-light: #ff8c4a;
    --products-secondary: #c66b3d;
  }

  /* MODO ESCURO - ativado apenas quando o sistema estiver em dark */
  @media (prefers-color-scheme: dark) {
    :root {
      --products-bg: #12100d;               /* Fundo da página - preto quente */
      --products-card-bg: #1f1814;           /* Fundo dos cards - castanho escuro quente */
      --products-text: #f5ede6;              /* Texto principal - castanho claro quente */
      --products-text-secondary: #d4c5b8;    /* Texto secundário */
      --products-text-muted: #9a8d82;        /* Texto muted */
      --products-border: rgba(255, 140, 74, 0.15);
      --products-shadow: rgba(0, 0, 0, 0.4);
      --products-shadow-hover: rgba(255, 140, 74, 0.25);

      /* Laranja mais vivo no dark */
      --products-primary: #ff8c4a;
      --products-primary-light: #ffa366;
      --products-secondary: #e07a3d;
    }
  }

  /* ========================================
     APLICAÇÃO DAS VARIÁVEIS
     ======================================== */
  .landing-products {
    background: var(--products-bg);
  }

  .product-card {
    background: var(--products-card-bg);
    color: var(--products-text);
    border: 1px solid var(--products-border);
    box-shadow: 0 4px 20px var(--products-shadow);
  }

  .product-card:hover {
    box-shadow: 0 12px 40px var(--products-shadow-hover);
    border-color: var(--products-primary);
  }

  .product-title,
  .product-list li {
    color: var(--products-text);
  }

  .product-description {
    color: var(--products-text-muted);
  }

  .product-list li {
    color: var(--products-text-secondary);
  }

  .product-icon {
    color: var(--products-primary);
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.15), rgba(217, 118, 56, 0.05));
  }

  @media (prefers-color-scheme: dark) {
    .product-icon {
      background: linear-gradient(135deg, rgba(255, 140, 74, 0.2), rgba(255, 140, 74, 0.08));
    }
    .product-card:hover .product-icon {
      background: linear-gradient(135deg, rgba(255, 140, 74, 0.3), rgba(255, 140, 74, 0.12));
    }
  }

  /* ========================================
     RESTANTE DO TEU CSS (mantido igual)
     ======================================== */
  .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
  .section-py { padding: 80px 0; }
  .row { display: flex; flex-wrap: wrap; margin: -15px; }
  .col-lg-6 { flex: 0 0 50%; max-width: 50%; padding: 15px; }

  /* ... (todo o resto do teu CSS original: .product-card::before, .product-header, .product-icon, .product-title, .product-description, .product-list, .check-icon, .product-footer, .product-price, .product-btn, responsividade, etc.) ... */

  /* Mantém exatamente como tinhas — só garantindo que usam as variáveis corretas */
</style>
