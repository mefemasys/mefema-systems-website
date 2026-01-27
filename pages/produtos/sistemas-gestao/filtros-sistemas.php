<section class="section-py landing-websites-list" id="sistemasSection">
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
                <button class="filter-btn" data-categoria="Empresarial">
                    <i class="ri-building-line"></i>
                    <span>Empresarial</span>
                </button>
                <button class="filter-btn" data-categoria="Vendas">
                    <i class="ri-shopping-cart-line"></i>
                    <span>Vendas</span>
                </button>
                <button class="filter-btn" data-categoria="Saúde">
                    <i class="ri-hospital-line"></i>
                    <span>Saúde</span>
                </button>
                <button class="filter-btn" data-categoria="Educação">
                    <i class="ri-graduation-cap-line"></i>
                    <span>Educação</span>
                </button>
                <button class="filter-btn" data-categoria="Logística">
                    <i class="ri-truck-line"></i>
                    <span>Logística</span>
                </button>
            </div>
        </div>

        <!-- Grid de Sistemas -->
        <div class="row g-4 mb-5" id="sistemasGrid">
            <!-- Conteúdo carregado via JS para URLs limpas -->
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
