<section class="section-py landing-websites-list" id="websitesList">
    <div class="container">
        
        <!-- Filtros -->
        <div class="filters-wrapper mb-5" data-aos="fade-up">
            <div class="text-center mb-4">
                <h6 class="filter-label">
                    <i class="ri-filter-3-line me-2"></i>
                    Filtrar por Categoria
                </h6>
            </div>
            <div class="filters-buttons">
                <button class="filter-btn active" data-categoria="all">
                    <i class="ri-layout-grid-line"></i>
                    <span>Todos</span>
                </button>
                <button class="filter-btn" data-categoria="Básico">
                    <i class="ri-store-2-line"></i>
                    <span>Básico</span>
                </button>
                <button class="filter-btn" data-categoria="Profissional">
                    <i class="ri-building-line"></i>
                    <span>Profissional</span>
                </button>
                <button class="filter-btn" data-categoria="Marketing">
                    <i class="ri-megaphone-line"></i>
                    <span>Marketing</span>
                </button>
                <button class="filter-btn" data-categoria="Corporativo">
                    <i class="ri-government-line"></i>
                    <span>Corporativo</span>
                </button>
                <button class="filter-btn" data-categoria="Loja Online">
                    <i class="ri-shopping-cart-line"></i>
                    <span>E-commerce</span>
                </button>
                <button class="filter-btn" data-categoria="Especializado">
                    <i class="ri-star-line"></i>
                    <span>Especializado</span>
                </button>
            </div>
        </div>

        <!-- Grid de Websites -->
        <div class="row g-4 mb-5" id="websitesGrid">
            <!-- Conteúdo será carregado via JavaScript -->
        </div>

        <!-- Paginação -->
          <nav class="pagination-wrapper" id="paginationWrapper" style="display: none;">
            <div class="d-flex flex-column align-items-center">
                <div class="pagination-info mb-3">
                    <span class="pagination-text" id="paginationInfo"></span>
                </div>
                <ul class="pagination justify-content-center" id="paginationButtons"></ul>
            </div>
        </nav>

    </div>
</section>
