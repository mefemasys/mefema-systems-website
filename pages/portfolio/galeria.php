<style>
/* Galeria de Projectos - Design Moderno Minimalista */
#portfolioGallery {
  padding: 80px 0;
  background-color: #fafafa;
}

@media (prefers-color-scheme: dark) {
  #portfolioGallery {
    background-color: #0a0a0a;
  }
}

#portfolioGallery .section-header h2 {
  font-size: 2.5rem;
  font-weight: 700;
  color: #1a1a1a;
  margin-bottom: 12px;
}

@media (prefers-color-scheme: dark) {
  #portfolioGallery .section-header h2 {
    color: #ffffff;
  }
}

#portfolioGallery .section-header p {
  color: #666;
  font-size: 1.1rem;
}

@media (prefers-color-scheme: dark) {
  #portfolioGallery .section-header p {
    color: #999;
  }
}

/* Filtros */
.filter-wrapper {
  display: flex;
  justify-content: center;
  gap: 12px;
  flex-wrap: wrap;
  margin-bottom: 50px;
}

.filter-btn {
  background: transparent;
  border: 2px solid #e0e0e0;
  color: #666;
  padding: 10px 24px;
  border-radius: 6px;
  font-weight: 500;
  font-size: 0.95rem;
  cursor: pointer;
  transition: all 0.2s ease;
}

@media (prefers-color-scheme: dark) {
  .filter-btn {
    border-color: #2a2a2a;
    color: #999;
  }
}

.filter-btn:hover {
  border-color: #CD7F32;
  color: #CD7F32;
  background: rgba(205, 127, 50, 0.05);
}

.filter-btn.active {
  background: linear-gradient(135deg, #CD7F32, #FF8C00);
  border-color: transparent;
  color: white;
}

/* Cards de Projecto */
.portfolio-card {
  background: white;
  border: 1px solid #e8e8e8;
  border-radius: 8px;
  overflow: hidden;
  transition: all 0.3s ease;
  height: 100%;
  display: flex;
  flex-direction: column;
}

@media (prefers-color-scheme: dark) {
  .portfolio-card {
    background: #151515;
    border-color: #2a2a2a;
  }
}

.portfolio-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
  border-color: #CD7F32;
}

@media (prefers-color-scheme: dark) {
  .portfolio-card:hover {
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
  }
}

/* Imagem do Projecto */
.portfolio-image {
  height: 220px;
  background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  border-bottom: 1px solid #e8e8e8;
}

@media (prefers-color-scheme: dark) {
  .portfolio-image {
    background: linear-gradient(135deg, #1a1a1a 0%, #0f0f0f 100%);
    border-bottom-color: #2a2a2a;
  }
}

.portfolio-image i {
  font-size: 4rem;
  opacity: 0.15;
  color: #CD7F32;
}

.portfolio-badges {
  position: absolute;
  top: 16px;
  left: 16px;
  right: 16px;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}

.badge-custom {
  background: white;
  color: #1a1a1a;
  padding: 6px 14px;
  border-radius: 4px;
  font-size: 0.85rem;
  font-weight: 600;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

@media (prefers-color-scheme: dark) {
  .badge-custom {
    background: #1a1a1a;
    color: #fff;
  }
}

.badge-rating {
  background: #FF8C00;
  color: white;
}

/* Conteúdo do Card */
.portfolio-body {
  padding: 24px;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.portfolio-body h5 {
  font-size: 1.3rem;
  font-weight: 700;
  color: #1a1a1a;
  margin-bottom: 10px;
}

@media (prefers-color-scheme: dark) {
  .portfolio-body h5 {
    color: #ffffff;
  }
}

.portfolio-body .description {
  color: #666;
  font-size: 0.95rem;
  line-height: 1.6;
  margin-bottom: 20px;
}

@media (prefers-color-scheme: dark) {
  .portfolio-body .description {
    color: #999;
  }
}

.portfolio-info {
  margin-bottom: 20px;
}

.info-item {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 10px;
  color: #666;
  font-size: 0.9rem;
}

@media (prefers-color-scheme: dark) {
  .info-item {
    color: #999;
  }
}

.info-item i {
  color: #CD7F32;
  font-size: 1.1rem;
}

.info-item strong {
  color: #1a1a1a;
}

@media (prefers-color-scheme: dark) {
  .info-item strong {
    color: #fff;
  }
}

/* Tags */
.portfolio-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-bottom: 20px;
}

.tag-item {
  background: #f5f5f5;
  color: #666;
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 0.85rem;
  border: 1px solid #e8e8e8;
}

@media (prefers-color-scheme: dark) {
  .tag-item {
    background: #1a1a1a;
    color: #999;
    border-color: #2a2a2a;
  }
}

/* Botão Ver Detalhes */
.btn-details {
  background: linear-gradient(135deg, #CD7F32, #FF8C00);
  color: white;
  border: none;
  padding: 12px 24px;
  border-radius: 6px;
  font-weight: 600;
  font-size: 0.95rem;
  cursor: pointer;
  transition: all 0.3s ease;
  text-align: center;
  text-decoration: none;
  display: block;
  margin-top: auto;
}

.btn-details:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(205, 127, 50, 0.3);
  color: white;
}

/* Paginação */
.pagination-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
  margin-top: 50px;
}

.pagination-btn {
  background: white;
  border: 1px solid #e8e8e8;
  color: #666;
  padding: 10px 16px;
  border-radius: 6px;
  font-weight: 500;
  cursor: pointer;
  transition: all 0.2s ease;
  min-width: 44px;
  text-align: center;
}

@media (prefers-color-scheme: dark) {
  .pagination-btn {
    background: #151515;
    border-color: #2a2a2a;
    color: #999;
  }
}

.pagination-btn:hover:not(:disabled) {
  border-color: #CD7F32;
  color: #CD7F32;
  background: rgba(205, 127, 50, 0.05);
}

.pagination-btn.active {
  background: linear-gradient(135deg, #CD7F32, #FF8C00);
  border-color: transparent;
  color: white;
}

.pagination-btn:disabled {
  opacity: 0.4;
  cursor: not-allowed;
}

/* Animações */
.portfolio-item {
  animation: fadeInUp 0.5s ease;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Responsivo */
@media (max-width: 768px) {
  #portfolioGallery {
    padding: 60px 0;
  }
  
  #portfolioGallery .section-header h2 {
    font-size: 2rem;
  }
  
  .filter-wrapper {
    gap: 8px;
  }
  
  .filter-btn {
    padding: 8px 16px;
    font-size: 0.9rem;
  }
  
  .portfolio-image {
    height: 180px;
  }
}
</style>

<section id="portfolioGallery">
  <div class="container">
    <!-- Cabeçalho -->
    <div class="section-header text-center mb-5">
      <h2>Galeria de Projectos</h2>
      <p>Visualize todos os nossos trabalhos organizados por categoria</p>
    </div>

    <!-- Filtros -->
    <div class="filter-wrapper">
      <button class="filter-btn active" data-filter="all">
        <i class="ri-layout-grid-line me-2"></i>Todos
      </button>
      <button class="filter-btn" data-filter="dev">
        <i class="ri-code-box-line me-2"></i>Desenvolvimento
      </button>
      <button class="filter-btn" data-filter="infra">
        <i class="ri-server-line me-2"></i>Infraestrutura
      </button>
      <button class="filter-btn" data-filter="consult">
        <i class="ri-lightbulb-line me-2"></i>Consultoria
      </button>
    </div>

    <!-- Grid de Projectos -->
    <div class="row g-4" id="portfolioGrid">
      <!-- -->
<?php foreach ($portfolio_data as $project): 
        $cat = $category_map[$project['category']];
      ?>
        <div class="col-lg-4 col-md-6 portfolio-item" data-category="<!-- -->
<?php echo $project['category']; ?>">
          <div class="portfolio-card">
            <!-- Imagem -->
            <div class="portfolio-image">
              <i class="<!-- -->
<?php echo $cat['icon']; ?>"></i>
              <div class="portfolio-badges">
                <span class="badge-custom"><!-- -->
<?php echo $project['type']; ?></span>
                <span class="badge-custom badge-rating">
                  <i class="ri-star-fill"></i> <!-- -->
<?php echo $project['rating']; ?>
                </span>
              </div>
            </div>

            <!-- Conteúdo -->
            <div class="portfolio-body">
              <h5><!-- -->
<?php echo $project['title']; ?></h5>
              <p class="description"><!-- -->
<?php echo substr($project['description'], 0, 90) . '...'; ?></p>

              <!-- Informações -->
              <div class="portfolio-info">
                <div class="info-item">
                  <i class="ri-building-line"></i>
                  <span><strong><!-- -->
<?php echo $project['client']; ?></strong></span>
                </div>
                <div class="info-item">
                  <i class="ri-calendar-line"></i>
                  <span><!-- -->
<?php echo date('d/m/Y', strtotime($project['date'])); ?></span>
                </div>
              </div>

              <!-- Tags -->
              <div class="portfolio-tags">
                <!-- -->
<?php foreach (array_slice($project['tags'], 0, 3) as $tag): ?>
                  <span class="tag-item"><!-- -->
<?php echo $tag; ?></span>
                <!-- -->
<?php endforeach; ?>
                <!-- -->
<?php if (count($project['tags']) > 3): ?>
                  <span class="tag-item">+<!-- -->
<?php echo count($project['tags']) - 3; ?></span>
                <!-- -->
<?php endif; ?>
              </div>

              <!-- Botão -->
              <a href="#" class="btn-details">
                <i class="ri-arrow-right-line me-2"></i>Ver Detalhes
              </a>
            </div>
          </div>
        </div>
      <!-- -->
<?php endforeach; ?>
    </div>

    <!-- Paginação -->
    <div class="pagination-wrapper" id="paginationControls">
      <button class="pagination-btn" id="prevPage" disabled>
        <i class="ri-arrow-left-line"></i>
      </button>
      <div id="pageNumbers"></div>
      <button class="pagination-btn" id="nextPage">
        <i class="ri-arrow-right-line"></i>
      </button>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const itemsPerPage = 6;
  let currentPage = 1;
  let currentFilter = 'all';
  
  const filterButtons = document.querySelectorAll('.filter-btn');
  const allItems = document.querySelectorAll('.portfolio-item');
  const portfolioGrid = document.getElementById('portfolioGrid');
  const prevBtn = document.getElementById('prevPage');
  const nextBtn = document.getElementById('nextPage');
  const pageNumbersContainer = document.getElementById('pageNumbers');

  // Função para obter itens filtrados
  function getFilteredItems() {
    return Array.from(allItems).filter(item => {
      return currentFilter === 'all' || item.dataset.category === currentFilter;
    });
  }

  // Função para renderizar página
  function renderPage() {
    const filteredItems = getFilteredItems();
    const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;

    // Esconder todos os itens
    allItems.forEach(item => {
      item.style.display = 'none';
    });

    // Mostrar apenas os itens da página actual
    filteredItems.slice(startIndex, endIndex).forEach(item => {
      item.style.display = 'block';
    });

    // Actualizar botões de navegação
    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage === totalPages || totalPages === 0;

    // Renderizar números de página
    renderPageNumbers(totalPages);
  }

  // Função para renderizar números de página
  function renderPageNumbers(totalPages) {
    pageNumbersContainer.innerHTML = '';
    
    for (let i = 1; i <= totalPages; i++) {
      const pageBtn = document.createElement('button');
      pageBtn.className = 'pagination-btn' + (i === currentPage ? ' active' : '');
      pageBtn.textContent = i;
      pageBtn.addEventListener('click', () => {
        currentPage = i;
        renderPage();
        window.scrollTo({ top: document.getElementById('portfolioGallery').offsetTop - 100, behavior: 'smooth' });
      });
      pageNumbersContainer.appendChild(pageBtn);
    }
  }

  // Filtros
  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      filterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      currentFilter = btn.dataset.filter;
      currentPage = 1;
      renderPage();
    });
  });

  // Navegação
  prevBtn.addEventListener('click', () => {
    if (currentPage > 1) {
      currentPage--;
      renderPage();
      window.scrollTo({ top: document.getElementById('portfolioGallery').offsetTop - 100, behavior: 'smooth' });
    }
  });

  nextBtn.addEventListener('click', () => {
    const filteredItems = getFilteredItems();
    const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
    if (currentPage < totalPages) {
      currentPage++;
      renderPage();
      window.scrollTo({ top: document.getElementById('portfolioGallery').offsetTop - 100, behavior: 'smooth' });
    }
  });

  // Inicializar
  renderPage();
});
</script>
