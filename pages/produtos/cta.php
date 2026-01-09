<section class="section-py" id="produtosCTA">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="fw-bold mb-4">Não Encontrou o Produto Ideal?</h2>
        <p class="text-muted mb-5">
          Podemos desenvolver uma solução à medida das suas necessidades.<br>
          Entre em contacto para um orçamento personalizado.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
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
     CTA - LARANJA DOMINANTE + FUNDO CASTANHO NO DARK
     ======================================== */
  #produtosCTA {
    padding: 100px 0;
    background: var(--products-bg); /* Herda do teu CSS principal */
  }

  #produtosCTA h2 {
    font-size: 2.2rem;
    color: #5a3a28; /* Castanho quente no modo claro */
    font-weight: 800;
  }

  #produtosCTA p {
    font-size: 1.1rem;
    color: #74523d; /* Castanho secundário no modo claro */
  }

  /* Botão principal - Laranja forte com gradiente */
  .btn-cta-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    padding: 1rem 2.5rem;
    font-size: 1.1rem;
    font-weight: 600;
    background: linear-gradient(135deg, #d97638, #c66b3d);
    color: white !important;
    border: none;
    border-radius: 4px !important; /* Pouco radius */
    box-shadow: 0 6px 20px rgba(217, 118, 56, 0.3);
    transition: all 0.4s ease;
    text-decoration: none;
  }

  .btn-cta-primary:hover {
    background: linear-gradient(135deg, #c66b3d, #b85f30);
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(217, 118, 56, 0.4);
  }

  .btn-cta-primary i {
    font-size: 1.3rem;
  }

  /* Botão outline - Contorno laranja */
  .btn-cta-outline {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    padding: 1rem 2.5rem;
    font-size: 1.1rem;
    font-weight: 600;
    background: transparent;
    color: #d97638 !important;
    border: 2px solid #d97638;
    border-radius: 4px !important;
    transition: all 0.4s ease;
    text-decoration: none;
  }

  .btn-cta-outline:hover {
    background: #d97638;
    color: white !important;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(217, 118, 56, 0.25);
  }

  .btn-cta-outline i {
    font-size: 1.3rem;
  }

  /* ========================================
     DARK MODE - FUNDO CASTANHO + TEXTO CASTANHO CLARO
     ======================================== */
  @media (prefers-color-scheme: dark) {
    #produtosCTA {
      background: #2a1f1a; /* Castanho escuro quente (em vez de preto puro) */
    }

    #produtosCTA h2 {
      color: #e8d6c8; /* Castanho claro / bege quente */
    }

    #produtosCTA p {
      color: #c4b5aa; /* Castanho médio claro */
    }

    .btn-cta-primary {
      background: linear-gradient(135deg, #ff8c4a, #e07a3d);
      box-shadow: 0 6px 20px rgba(255, 140, 74, 0.3);
    }

    .btn-cta-primary:hover {
      background: linear-gradient(135deg, #e07a3d, #c66b3d);
      box-shadow: 0 10px 25px rgba(255, 140, 74, 0.4);
    }

    .btn-cta-outline {
      color: #ff8c4a !important;
      border-color: #ff8c4a;
    }

    .btn-cta-outline:hover {
      background: #ff8c4a;
      color: #2a1f1a !important;
      box-shadow: 0 10px 25px rgba(255, 140, 74, 0.3);
    }
  }

  /* Responsividade */
  @media (max-width: 768px) {
    #produtosCTA {
      padding: 80px 0;
    }
    #produtosCTA h2 {
      font-size: 1.8rem;
    }
    .btn-cta-primary,
    .btn-cta-outline {
      width: 100%;
      padding: 1rem 1.5rem;
      font-size: 1rem;
    }
  }
</style>
