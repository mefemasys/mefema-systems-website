<section class="py-5" id="portfolioSlider">
  <div class="container">
  
    <!-- Carousel Slider -->
    <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <?php foreach ($portfolio_data as $index => $project): ?>
          <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="<?php echo $index; ?>" 
            class="<?php echo $index === 0 ? 'active' : ''; ?>"></button>
        <?php endforeach; ?>
      </div>

      <div class="carousel-inner">
        <?php foreach ($portfolio_data as $index => $project): 
          $cat = $category_map[$project['category']];
        ?>
          <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
            <div class="row g-4 align-items-center">
              <!-- Imagem do Projeto -->
              <div class="col-lg-6">
                <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 1rem;">
                  <div class="position-relative" style="height: 400px; display: flex; align-items: center; justify-content: center;">
                    <div class="text-center">
                      <i class="<?php echo $cat['icon']; ?> fs-1 mb-3" style="color: rgba(0,0,0,0.1);"></i>
                      <p class="text-muted">Imagem do Projeto</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Detalhes do Projeto -->
              <div class="col-lg-6">
                <div class="mb-3">
                  <span class="badge <?php echo $cat['bg']; ?> px-3 py-2 mb-3">
                    <i class="<?php echo $cat['icon']; ?> me-2"></i><?php echo $project['type']; ?>
                  </span>
                </div>

                <p class="fw-bold mb-3"><?php echo $project['title']; ?></p>

                <p class="text-muted mb-4"><?php echo $project['description']; ?></p>

                <!-- Detalhes do Projeto -->
                <div class="row g-3 mb-4">
                  <div class="col-6">
                    <div class="bg-light rounded p-3 border-start border-5 <?php echo $cat['border']; ?>">
                      <small class="text-muted d-block">Cliente</small>
                      <strong><?php echo $project['client']; ?></strong>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="bg-light rounded p-3 border-start border-5 border-success">
                      <small class="text-muted d-block">Data de Conclusão</small>
                      <strong><?php echo date('d/m/Y', strtotime($project['date'])); ?></strong>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="bg-light rounded p-3 border-start border-5 border-warning">
                      <small class="text-muted d-block">Avaliação</small>
                      <strong>
                        <i class="ri-star-fill text-warning"></i> <?php echo $project['rating']; ?>/5.0
                      </strong>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="bg-light rounded p-3 border-start border-5 border-info">
                      <small class="text-muted d-block">Tecnologias</small>
                      <strong><?php echo count($project['tags']); ?> utilizadas</strong>
                    </div>
                  </div>
                </div>

                <!-- Tags de Tecnologias -->
                <div class="mb-4">
                  <h6 class="fw-bold mb-2">Tecnologias Utilizadas:</h6>
                  <div class="d-flex flex-wrap gap-2">
                    <?php foreach ($project['tags'] as $tag): ?>
                      <span class="badge bg-light text-dark border border-1"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                  </div>
                </div>

                <!-- Botões de Ação -->
                <div class="d-flex gap-2">
                  <a href="#landingContact" class="btn btn-lg <?php echo $cat['bg']; ?> text-white flex-fill">
                    <i class="ri-mail-line me-2"></i>Solicitar Orçamento
                  </a>
                  <a href="#" class="btn btn-lg btn-outline-secondary flex-fill">
                    <i class="ri-external-link-line me-2"></i>Ver Detalhes
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Controles do Carousel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>