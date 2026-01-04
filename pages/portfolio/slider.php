<style>
/* Cores Personalizadas */
.bg-orange { background-color: #fd7e14 !important; }
.border-orange { border-color: #fd7e14 !important; }
.bg-blue { background-color: #0d6efd !important; }
.border-blue { border-color: #0d6efd !important; }
.bg-brown { background-color: #795548 !important; }
.border-brown { border-color: #795548 !important; }
.bg-green { background-color: #198754 !important; }
.border-green { border-color: #198754 !important; }

/* Ajuste para Ocupar Toda a Tela */
#portfolioSlider {
    padding-left: 0;
    padding-right: 0;
}

/* Customização das Setas (Ajustam ao Tema) */
.carousel-control-prev, .carousel-control-next {
    width: 5%;
    filter: invert(1) grayscale(100); /* Torna as setas visíveis em fundos claros/escuros */
}

/* Efeito de Vidro/Sombra no Card de Imagem */
.img-placeholder {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    transition: all 0.3s ease;
}

/* Responsividade para Full Width */
@media (max-width: 991px) {
    .carousel-item { padding: 0 40px; }
}
</style>

<section class="py-5" id="portfolioSlider">
  <div class="container-fluid px-0">
  
    <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel">
      
      <div class="carousel-indicators mb-0">
        <?php foreach ($portfolio_data as $index => $project): ?>
          <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="<?php echo $index; ?>" 
            class="<?php echo $index === 0 ? 'active' : ''; ?> bg-dark" style="width: 30px; height: 5px;"></button>
        <?php endforeach; ?>
      </div>

      <div class="carousel-inner">
        <?php foreach ($portfolio_data as $index => $project): 
          $cat = $category_map[$project['category']];
        ?>
          <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
            <div class="row g-0 align-items-center"> <div class="col-lg-6">
                <div class="img-placeholder" style="height: 600px; display: flex; align-items: center; justify-content: center;">
                  <div class="text-center">
                    <i class="<?php echo $cat['icon']; ?> display-1 mb-3" style="color: <?php echo $cat['color']; ?>; opacity: 0.2;"></i>
                    <p class="text-uppercase fw-bold ls-1" style="color: <?php echo $cat['color']; ?>">Project Preview</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 p-5">
                <div class="pe-lg-5">
                  <span class="badge <?php echo $cat['bg']; ?> px-4 py-2 mb-4 rounded-pill shadow-sm">
                    <i class="<?php echo $cat['icon']; ?> me-2"></i><?php echo $project['type']; ?>
                  </span>

                  <h2 class="display-5 fw-bold mb-3"><?php echo $project['title']; ?></h2>
                  <p class="lead text-muted mb-5"><?php echo $project['description']; ?></p>

                  <div class="row g-4 mb-5">
                    <div class="col-6">
                      <div class="p-3 border-start border-4 <?php echo $cat['border']; ?> bg-light rounded-end">
                        <small class="text-muted d-block text-uppercase small fw-bold">Cliente</small>
                        <span class="h6 mb-0"><?php echo $project['client']; ?></span>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="p-3 border-start border-4 border-dark bg-light rounded-end">
                        <small class="text-muted d-block text-uppercase small fw-bold">Conclusão</small>
                        <span class="h6 mb-0"><?php echo date('M Y', strtotime($project['date'])); ?></span>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex gap-3">
                    <a href="#contact" class="btn btn-lg <?php echo $cat['bg']; ?> text-white px-5 py-3 shadow">
                      Solicitar Orçamento
                    </a>
                    <a href="#" class="btn btn-lg btn-outline-dark px-5 py-3">
                      Ver Projeto
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon p-4 bg-dark rounded-circle" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon p-4 bg-dark rounded-circle" aria-hidden="true"></span>
      </button>
    </div>
  </div>
</section>
