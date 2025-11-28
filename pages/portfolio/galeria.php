<section class="py-5 bg-light" id="portfolioGallery">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <h2 class="display-6 fw-bold mb-3">Galeria de Projectos</h2>
        <p class="text-muted mb-4">Visualize todos os nossos trabalhos organizados por categoria</p>

        <!-- Filtros por Categoria -->
        <div class="d-flex justify-content-center gap-2 flex-wrap">
          <button class="btn btn-outline-primary btn-sm filter-btn active" data-filter="all">
            <i class="ri-layout-grid-line me-2"></i>Todos
          </button>
          <button class="btn btn-outline-primary btn-sm filter-btn" data-filter="dev">
            <i class="ri-code-box-line me-2"></i>Desenvolvimento
          </button>
          <button class="btn btn-outline-primary btn-sm filter-btn" data-filter="infra">
            <i class="ri-server-line me-2"></i>Infra‑estrutura
          </button>
          <button class="btn btn-outline-primary btn-sm filter-btn" data-filter="consult">
            <i class="ri-lightbulb-line me-2"></i>Consultoria
          </button>
        </div>
      </div>
    </div>

    <!-- Grid de Projectos -->
    <div class="row g-4" id="portfolioGrid">
      <?php foreach ($portfolio_data as $project): 
        $cat = $category_map[$project['category']];
      ?>
        <div class="col-lg-4 col-md-6 portfolio-item" data-category="<?php echo $project['category']; ?>">
          <div class="card border-0 shadow-sm h-100 overflow-hidden portfolio-card rounded-4" style="transition: .3s ease;">
            <!-- Ilustração do Projecto -->
            <div class="position-relative overflow-hidden bg-light d-flex align-items-center justify-content-center" style="height: 250px; background: linear-gradient(135deg,#f5f7fa,#c3cfe2);">
              <i class="<?php echo $cat['icon']; ?> fs-1 opacity-25"></i>

              <div class="position-absolute top-0 start-0 w-100 d-flex justify-content-between p-3" style="pointer-events: none;">
                <span class="badge <?php echo $cat['bg']; ?> text-white"><?php echo $project['type']; ?></span>
                <span class="badge bg-warning text-dark">
                  <i class="ri-star-fill"></i> <?php echo $project['rating']; ?>
                </span>
              </div>
            </div>

            <div class="card-body p-4">
              <h5 class="fw-bold mb-2"><?php echo $project['title']; ?></h5>
              <p class="text-muted small mb-3"><?php echo substr($project['description'], 0, 85) . '...'; ?></p>

              <!-- Informações -->
              <div class="mb-3">
                <div class="d-flex align-items-center mb-2">
                  <i class="ri-building-line text-muted me-2"></i>
                  <small class="text-muted"><strong><?php echo $project['client']; ?></strong></small>
                </div>
                <div class="d-flex align-items-center">
                  <i class="ri-calendar-line text-muted me-2"></i>
                  <small class="text-muted"><?php echo date('d/m/Y', strtotime($project['date'])); ?></small>
                </div>
              </div>

              <!-- Etiquetas -->
              <div class="mb-3 d-flex flex-wrap gap-1">
                <?php foreach (array_slice($project['tags'], 0, 3) as $tag): ?>
                  <span class="badge bg-light text-dark border small"><?php echo $tag; ?></span>
                <?php endforeach; ?>
                <?php if (count($project['tags']) > 3): ?>
                  <span class="badge bg-light text-dark border small">+<?php echo count($project['tags']) - 3; ?></span>
                <?php endif; ?>
              </div>

              <a href="#" class="btn btn-sm <?php echo $cat['bg']; ?> text-white w-100">
                <i class="ri-arrow-right-line me-2"></i>Ver Detalhes
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

<!-- Animações e Filtros -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('.filter-btn');
  const items = document.querySelectorAll('.portfolio-item');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;

      items.forEach(item => {
        if (filter === 'all' || item.dataset.category === filter) {
          item.style.display = 'block';
          item.classList.add('animate__animated', 'animate__fadeIn');
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
});
</script>

<style>
.portfolio-card:hover {
  transform: translateY(-6px) scale(1.01);
  box-shadow: 0 1rem 2rem rgba(0,0,0,.12);
}

.filter-btn.active {
  background: var(--bs-primary);
  color: #fff;
}

.portfolio-card {
  transition: transform .25s ease, box-shadow .25s ease;
}
</style>
</section>
