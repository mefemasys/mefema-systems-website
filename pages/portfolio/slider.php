<style>
/* Variáveis já definidas no teu CSS anterior – mantidas e usadas aqui */

/* Estilos Específicos do Portfolio Slider - Modernizado */
#portfolioSlider {
  padding: 80px 0;
  background-color: var(--bg-dark);
  overflow: hidden;
}

#portfolioCarousel .carousel-inner {
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
}

#portfolioCarousel .carousel-item {
  transition: transform 0.8s ease, opacity 0.8s ease;
}

/* Imagem Placeholder - Efeito Vidro Moderno */
.portfolio-img-placeholder {
  height: 100%;
  min-height: 500px;
  background: linear-gradient(135deg, 
    rgba(139, 92, 246, 0.1) 0%,   /* toque de accent */
    rgba(59, 130, 246, 0.15) 50%, /* toque de primary */
    rgba(16, 185, 129, 0.1) 100%);
  backdrop-filter: blur(12px);
  border-right: 1px solid var(--border-dark);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
}

.portfolio-img-placeholder::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 30% 30%, rgba(139, 92, 246, 0.2), transparent 70%);
  opacity: 0.6;
}

.portfolio-img-placeholder i {
  font-size: 8rem;
  opacity: 0.15;
  color: var(--color-accent);
}

.portfolio-img-placeholder p {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  color: var(--color-primary);
  font-weight: 600;
  letter-spacing: 2px;
  font-size: 0.9rem;
  text-transform: uppercase;
}

/* Conteúdo do Texto */
.portfolio-content {
  padding: 60px 50px;
  background: var(--bg-dark);
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.portfolio-content .badge {
  background-color: var(--color-accent);
  color: white;
  font-size: 0.95rem;
  padding: 0.6em 1.2em;
  border-radius: 50px;
  box-shadow: 0 4px 15px rgba(139, 92, 246, 0.3);
}

.portfolio-content h2 {
  font-size: 2.8rem;
  font-weight: 800;
  background: linear-gradient(90deg, var(--color-primary), var(--color-accent));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: 20px;
}

.portfolio-content .lead {
  font-size: 1.2rem;
  line-height: 1.7;
  color: var(--text-dark);
  opacity: 0.9;
}

/* Cards de Info (Cliente / Conclusão) */
.info-card {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  border-left: 5px solid var(--color-primary);
  border-radius: 0 12px 12px 0;
  padding: 20px;
  transition: all 0.3s ease;
}

.info-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(59, 130, 246, 0.2);
}

.info-card small {
  color: var(--color-primary);
  font-weight: 700;
  letter-spacing: 1px;
}

/* Botões */
.portfolio-content .btn-primary-custom {
  background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
  border: none;
  padding: 14px 32px;
  border-radius: 50px;
  font-weight: 600;
  box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
  transition: all 0.3s ease;
}

.portfolio-content .btn-primary-custom:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 35px rgba(59, 130, 246, 0.5);
}

.portfolio-content .btn-outline-custom {
  border: 2px solid var(--border-dark);
  color: var(--text-light);
  padding: 14px 32px;
  border-radius: 50px;
  font-weight: 600;
  transition: all 0.3s ease;
}

.portfolio-content .btn-outline-custom:hover {
  background: rgba(255, 255, 255, 0.1);
  border-color: var(--color-primary);
  color: var(--color-primary);
}

/* Indicadores e Controles */
#portfolioCarousel .carousel-indicators button {
  width: 40px;
  height: 4px;
  border-radius: 2px;
  background-color: rgba(139, 92, 246, 0.3);
  opacity: 0.6;
  transition: all 0.3s ease;
}

#portfolioCarousel .carousel-indicators button.active {
  background-color: var(--color-accent);
  opacity: 1;
  width: 60px;
}

#portfolioCarousel .carousel-control-prev,
#portfolioCarousel .carousel-control-next {
  width: 8%;
  opacity: 0;
  transition: opacity 0.4s ease;
}

#portfolioCarousel:hover .carousel-control-prev,
#portfolioCarousel:hover .carousel-control-next {
  opacity: 0.8;
}

#portfolioCarousel .carousel-control-prev-icon,
#portfolioCarousel .carousel-control-next-icon {
  background-color: rgba(0, 0, 0, 0.4);
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-size: 50%;
}

@media (prefers-color-scheme: dark) {
  #portfolioCarousel .carousel-control-prev-icon,
  #portfolioCarousel .carousel-control-next-icon {
    background-color: rgba(255, 255, 255, 0.2);
  }
}

/* Responsivo */
@media (max-width: 991px) {
  .portfolio-content {
    padding: 40px 30px;
    text-align: center;
  }
  .portfolio-content h2 {
    font-size: 2.3rem;
  }
  .portfolio-img-placeholder {
    min-height: 400px;
  }
  .row.g-0 > div {
    order: 2;
  }
  .row.g-0 > div:first-child {
    order: 1;
  }
}
</style>

<section class="py-5" id="portfolioSlider">
  <div class="container-fluid px-0 px-lg-5">
    <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="8000">
      
      <!-- Indicadores -->
      <div class="carousel-indicators mb-0">
        <?php foreach ($portfolio_data as $index => $project): ?>
          <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="<?php echo $index; ?>"
                  class="<?php echo $index === 0 ? 'active' : ''; ?>" aria-label="Slide <?php echo $index + 1; ?>"></button>
        <?php endforeach; ?>
      </div>

      <!-- Itens do Carousel -->
      <div class="carousel-inner">
        <?php foreach ($portfolio_data as $index => $project):
          $cat = $category_map[$project['category']];
        ?>
          <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
            <div class="row g-0 align-items-center">
              
              <!-- Imagem / Placeholder -->
              <div class="col-lg-6">
                <div class="portfolio-img-placeholder">
                  <i class="<?php echo $cat['icon']; ?>"></i>
                  <p>Project Preview</p>
                </div>
              </div>
              
              <!-- Conteúdo -->
              <div class="col-lg-6">
                <div class="portfolio-content">
                  <span class="badge px-4 py-2 mb-4">
                    <i class="<?php echo $cat['icon']; ?> me-2"></i><?php echo $project['type']; ?>
                  </span>
                  <h2><?php echo $project['title']; ?></h2>
                  <p class="lead"><?php echo $project['description']; ?></p>
                  
                  <div class="row g-4 mb-5">
                    <div class="col-md-6">
                      <div class="info-card">
                        <small>Cliente</small>
                        <div class="h5 mb-0 mt-1"><?php echo $project['client']; ?></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-card border-primary">
                        <small>Conclusão</small>
                        <div class="h5 mb-0 mt-1"><?php echo date('M Y', strtotime($project['date'])); ?></div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="d-flex gap-3 flex-wrap justify-content-start">
                    <a href="#contact" class="btn btn-lg btn-primary-custom text-white">
                      Solicitar Orçamento
                    </a>
                    <a href="#" class="btn btn-lg btn-outline-custom">
                      Ver Projeto
                    </a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      
      <!-- Controles -->
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
