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
     CTA - APENAS LARANJA + BORDER RADIUS MÍNIMO
     ======================================== */
  #produtosCTA {
    padding: 120px 0;
  }

  /* Botão principal - Laranja cheio */
  .btn-cta-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    padding: 1.1rem 2.8rem;
    font-size: 1.15rem;
    font-weight: 700;
    background: var(--products-primary);
    color: white !important;
    border: none;
    border-radius: 4px !important;
    box-shadow: 0 8px 25px rgba(217, 118, 56, 0.35);
    transition: all 0.4s ease;
    text-decoration: none;
  }

  .btn-cta-primary:hover {
    background: var(--products-secondary);
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(217, 118, 56, 0.45);
  }

  .btn-cta-primary i {
    font-size: 1.4rem;
  }

  /* Botão outline - Contorno laranja */
  .btn-cta-outline {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    padding: 1.1rem 2.8rem;
    font-size: 1.15rem;
    font-weight: 700;
    background: transparent;
    color: var(--products-primary) !important;
    border: 2.5px solid var(--products-primary);
    border-radius: 4px !important;
    transition: all 0.4s ease;
    text-decoration: none;
  }

  .btn-cta-outline:hover {
    background: var(--products-primary);
    color: white !important;
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(217, 118, 56, 0.3);
  }

  .btn-cta-outline i {
    font-size: 1.4rem;
  }

  /* ========================================
     MODO ESCURO - LARANJA VIVO + TEXTO CASTANHO CLARO
     ======================================== */
  @media (prefers-color-scheme: dark) {
    .btn-cta-primary {
      background: var(--products-primary-light); /* #ff8c4a */
      box-shadow: 0 8px 25px rgba(255, 140, 74, 0.4);
    }

    .btn-cta-primary:hover {
      background: var(--products-primary);
      box-shadow: 0 12px 30px rgba(255, 140, 74, 0.5);
    }

    .btn-cta-outline {
      color: var(--products-primary-light) !important;
      border-color: var(--products-primary-light);
    }

    .btn-cta-outline:hover {
      background: var(--products-primary-light);
      box-shadow: 0 12px 30px rgba(255, 140, 74, 0.35);
    }
  }

  /* ========================================
     RESPONSIVIDADE
     ======================================== */
  @media (max-width: 768px) {
    #produtosCTA {
      padding: 80px 0;
    }

    #produtosCTA h2 {
      font-size: 2rem;
    }

    .btn-cta-primary,
    .btn-cta-outline {
      width: 100%;
      padding: 1rem 2rem;
      font-size: 1.1rem;
    }
  }
</style>
