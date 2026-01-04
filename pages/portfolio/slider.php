<section class="py-0 overflow-hidden" id="portfolioSlider">
  <div id="portfolioCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    
    <div class="carousel-indicators mb-4">
      <?php foreach ($portfolio_data as $index => $project): ?>
        <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="<?php echo $index; ?>" 
          class="<?php echo $index === 0 ? 'active' : ''; ?>"></button>
      <?php endforeach; ?>
    </div>

    <div class="carousel-inner">
      <?php foreach ($portfolio_data as $index => $project): 
        $cat = $category_map[$project['category']];
      ?>
        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" data-theme-color="<?php echo $cat['bg']; ?>">
          <div class="row g-0 min-vh-100 align-items-stretch">
            
            <div class="col-lg-6 position-relative bg-light d-flex align-items-center justify-content-center border-end" style="min-height: 400px;">
                <div class="text-center">
                    <i class="<?php echo $cat['icon']; ?> display-1 mb-3 opacity-25"></i>
                    <p class="h4 text-muted">Imagem do Projeto</p>
                </div>
                </div>

            <div class="col-lg-6 d-flex align-items-center bg-white">
              <div class="p-5 p-md-5 w-100">
                <div class="mb-3">
                  <span class="badge <?php echo $cat['bg']; ?> px-3 py-2 mb-3">
                    <i class="<?php echo $cat['icon']; ?> me-2"></i><?php echo $project['type']; ?>
                  </span>
                </div>

                <h2 class="display-5 fw-bold mb-3"><?php echo $project['title']; ?></h2>
                <p class="lead text-muted mb-4"><?php echo $project['description']; ?></p>

                <div class="row g-3 mb-5">
                  <div class="col-sm-6">
                    <div class="bg-light rounded p-3 border-start border-5 <?php echo $cat['border']; ?>">
                      <small class="text-muted d-block uppercase small fw-bold">Cliente</small>
                      <span class="h6 mb-0"><?php echo $project['client']; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="bg-light rounded p-3 border-start border-5 border-success">
                      <small class="text-muted d-block uppercase small fw-bold">Data</small>
                      <span class="h6 mb-0"><?php echo date('d/m/Y', strtotime($project['date'])); ?></span>
                    </div>
                  </div>
                </div>

                <div class="mb-5">
                  <h6 class="fw-bold mb-3 text-uppercase small">Tecnologias:</h6>
                  <div class="d-flex flex-wrap gap-2">
                    <?php foreach ($project['tags'] as $tag): ?>
                      <span class="badge bg-light text-dark border py-2 px-3"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                  </div>
                </div>

                <div class="d-flex flex-column flex-sm-row gap-3">
                  <a href="#landingContact" class="btn btn-lg <?php echo $cat['bg']; ?> text-white px-5 shadow">
                    <i class="ri-mail-line me-2"></i>Solicitar Orçamento
                  </a>
                  <a href="#" class="btn btn-lg btn-outline-dark px-5">
                    <i class="ri-external-link-line me-2"></i>Ver Case
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <button class="carousel-control-prev custom-control" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon shadow-sm" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next custom-control" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon shadow-sm" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>
</section>

<style>
/* Força o slider a ocupar a altura da tela ou pelo menos 600px */
#portfolioCarousel .carousel-item {
    min-height: 80vh;
}

/* Customização das Setas */
.custom-control {
    width: 5%; /* Mais finas para não atrapalhar o conteúdo */
    opacity: 1;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #000; /* Cor padrão */
    padding: 1.5rem;
    border-radius: 50%;
    background-size: 50%;
}

/* Efeito de Hover nas Setas */
.custom-control:hover .carousel-control-prev-icon,
.custom-control:hover .carousel-control-next-icon {
    transform: scale(1.1);
    transition: transform 0.2s ease;
}

/* Ajuste para dispositivos móveis */
@media (max-width: 991.98px) {
    #portfolioCarousel .carousel-item {
        min-height: auto;
    }
    .carousel-control-prev, .carousel-control-next {
        bottom: auto;
        top: 50%;
        transform: translateY(-50%);
        height: 50px;
    }
}

/* Indicadores */
.carousel-indicators [data-bs-target] {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #000;
    margin: 0 5px;
}
</style>
