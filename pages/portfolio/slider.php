<style>
/* Variáveis de Cor - Adaptam automaticamente ao Dark Mode */
:root {
  --color-primary: #3b82f6;
  --color-success: #10b981;
  --color-warning: #f59e0b;
  --color-accent: #8b5cf6; /* substitui o marrom antigo */
  
  --bg-light: #ffffff;
  --bg-dark: #1a1a1a;
  --text-light: #212529;
  --text-dark: #f8f9fa;
  --border-light: #dee2e6;
  --border-dark: #495057;
}

@media (prefers-color-scheme: dark) {
  :root {
    --bg-light: #212529;
    --bg-dark: #121212;
    --text-light: #f8f9fa;
    --text-dark: #e9ecef;
    --border-light: #495057;
    --border-dark: #6c757d;
  }
}

/* Classes Personalizadas Atualizadas */
.bg-primary { background-color: var(--color-primary) !important; }
.border-primary { border-color: var(--color-primary) !important; }
.bg-success { background-color: var(--color-success) !important; }
.border-success { border-color: var(--color-success) !important; }
.bg-warning { background-color: var(--color-warning) !important; }
.border-warning { border-color: var(--color-warning) !important; }
.bg-accent { background-color: var(--color-accent) !important; }
.border-accent { border-color: var(--color-accent) !important; }

/* Ajustes Gerais para Dark Mode */
body {
  background-color: var(--bg-dark);
  color: var(--text-light);
  transition: background-color 0.3s ease, color 0.3s ease;
}

#portfolioSlider {
  padding-left: 0;
  padding-right: 0;
  background-color: var(--bg-dark);
}

/* Indicadores do Carousel */
.carousel-indicators button {
  background-color: var(--text-dark) !important;
  opacity: 0.5;
}
.carousel-indicators button.active {
  opacity: 1;
}

/* Setas do Carousel - Mais elegantes */
.carousel-control-prev, .carousel-control-next {
  width: 6%;
  opacity: 0.8;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
  background-color: rgba(0, 0, 0, 0.6);
  border-radius: 50%;
  width: 50px;
  height: 50px;
  background-size: 60%;
}
@media (prefers-color-scheme: dark) {
  .carousel-control-prev-icon, .carousel-control-next-icon {
    background-color: rgba(255, 255, 255, 0.2);
  }
}

/* Placeholder da Imagem - Efeito vidro no dark mode */
.img-placeholder {
  background: linear-gradient(135deg, 
    rgba(255,255,255,0.05) 0%, 
    rgba(255,255,255,0.1) 100%);
  backdrop-filter: blur(10px);
  border: 1px solid var(--border-dark);
  transition: all 0.4s ease;
  box-shadow: 0 8px 32px rgba(0,0,0,0.2);
}
@media (prefers-color-scheme: light) {
  .img-placeholder {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
  }
}

/* Badges e Botões */
.badge {
  opacity: 0.9;
}
.btn-outline-dark {
  border-color: var(--text-dark);
  color: var(--text-dark);
}
.btn-outline-dark:hover {
  background-color: var(--text-dark);
  color: var(--bg-dark);
}

/* Ajustes de texto */
.text-muted {
  color: #adb5bd !important;
}
.border-start {
  border-left-width: 5px !important;
}

/* Responsividade */
@media (max-width: 991px) {
  .carousel-item { 
    padding: 0 30px; 
  }
  .carousel-control-prev, .carousel-control-next {
    width: 10%;
  }
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
