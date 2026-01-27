<section class="section-py landing-websites-list" id="appsList">
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
                <button class="filter-btn" data-categoria="Comércio">
                    <i class="ri-shopping-cart-line"></i>
                    <span>Comércio</span>
                </button>
                <button class="filter-btn" data-categoria="Saúde">
                    <i class="ri-heart-pulse-line"></i>
                    <span>Saúde</span>
                </button>
                <button class="filter-btn" data-categoria="Transporte">
                    <i class="ri-taxi-line"></i>
                    <span>Transporte</span>
                </button>
                <button class="filter-btn" data-categoria="Educação">
                    <i class="ri-book-line"></i>
                    <span>Educação</span>
                </button>
                <button class="filter-btn" data-categoria="Social">
                    <i class="ri-team-line"></i>
                    <span>Social</span>
                </button>
                <button class="filter-btn" data-categoria="Negócios">
                    <i class="ri-briefcase-line"></i>
                    <span>Negócios</span>
                </button>
            </div>
        </div>

        <!-- Grid de Apps -->
        <div class="row g-4 mb-5" id="appsGrid">
            <!-- Conteúdo será carregado via JavaScript -->
        </div>

        <!-- Paginação -->
        <nav class="pagination-wrapper" id="paginationWrapper" style="display: none;">
            <div class="pagination-info">
                <span class="pagination-text" id="paginationInfo"></span>
            </div>
            <ul class="pagination" id="paginationButtons"></ul>
        </nav>

    </div>
</section>