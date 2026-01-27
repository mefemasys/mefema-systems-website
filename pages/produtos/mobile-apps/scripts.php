
<script>
// Dados dos apps
const appsData = <!-- -->
<?php echo json_encode($dados_apps['data']); ?>;

// Configuração
const ITEMS_POR_PAGINA = 4;
let paginaActual = 1;
let categoriaActual = 'all';

// Inicializar
document.addEventListener('DOMContentLoaded', function() {
    renderizarApps();
    configurarFiltros();
});

// Filtrar apps
function filtrarApps() {
    if (categoriaActual === 'all') {
        return appsData;
    }
    return appsData.filter(a => a.categoria === categoriaActual);
}

// Renderizar apps
function renderizarApps() {
    const appsFiltrados = filtrarApps();
    const totalItems = appsFiltrados.length;
    const totalPaginas = Math.ceil(totalItems / ITEMS_POR_PAGINA);
    const offset = (paginaActual - 1) * ITEMS_POR_PAGINA;
    const appsPagina = appsFiltrados.slice(offset, offset + ITEMS_POR_PAGINA);
    
    // Renderizar grid
    const grid = document.getElementById('appsGrid');
    grid.innerHTML = appsPagina.map((app, index) => criarCardApp(app, index)).join('');
    
    // Renderizar paginação
    if (totalPaginas > 1) {
        renderizarPaginacao(totalItems, totalPaginas);
    } else {
        document.getElementById('paginationWrapper').style.display = 'none';
    }
    
    // Scroll suave para o topo da lista
    if (paginaActual > 1) {
        document.getElementById('appsList').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

// Criar card de app
function criarCardApp(app, index) {
    const featuresShow = app.caracteristicas.slice(0, 5);
    const maisFeatures = app.caracteristicas.length - 5;
    
    const plataformasIcons = app.plataformas.map(p => {
        if (p === 'Android') return '<i class="ri-google-play-fill"></i>';
        if (p === 'iOS') return '<i class="ri-apple-fill"></i>';
        return '';
    }).join('');
    
    return `
        <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="${index * 100}">
            <div class="website-card ${app.destaque ? 'featured' : ''}">
                ${app.destaque ? `
                    <div class="featured-badge">
                        <i class="ri-vip-crown-fill"></i>
                        <span>Mais Popular</span>
                    </div>
                ` : ''}
                
                <div class="card-layout">
                    <div class="screenshots-section">
                        <div id="carousel${app.id}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                ${app.screenshots.map((_, i) => `
                                    <button type="button" 
                                            data-bs-target="#carousel${app.id}" 
                                            data-bs-slide-to="${i}" 
                                            class="${i === 0 ? 'active' : ''}">
                                    </button>
                                `).join('')}
                            </div>
                            <div class="carousel-inner">
                                ${app.screenshots.map((screenshot, i) => `
                                    <div class="carousel-item ${i === 0 ? 'active' : ''}">
                                        <img src="${screenshot}" class="d-block w-100" alt="${app.nome}">
                                    </div>
                                `).join('')}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel${app.id}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel${app.id}" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-header-section">
                            <div class="category-badge badge-${app.cor}">
                                ${app.categoria}
                            </div>
                            <h3 class="website-name">${app.nome}</h3>
                            <p class="website-nicho">
                                <i class="ri-focus-3-line"></i>
                                ${app.nicho}
                            </p>
                        </div>

                        <div class="card-pricing">
                            <div class="pricing-main">
                                <span class="price-label">A partir de</span>
                                <div class="price-amount">
                                    <span class="price-value">${app.preco.toLocaleString('pt-MZ')}</span>
                                    <span class="price-currency">MT</span>
                                </div>
                            </div>
                            <div class="pricing-detail">
                                ${plataformasIcons}
                                <span>${app.plataformas.join(' + ')}</span>
                            </div>
                        </div>

                        <p class="card-description">${app.descricao}</p>

                        <div class="card-features">
                            <h6 class="features-title">
                                <i class="ri-checkbox-circle-line"></i>
                                Características principais
                            </h6>
                            <ul class="features-list">
                                ${featuresShow.map(feature => `
                                    <li>
                                        <i class="ri-check-line"></i>
                                        <span>${feature}</span>
                                    </li>
                                `).join('')}
                                ${maisFeatures > 0 ? `
                                    <li class="more-features">
                                        <i class="ri-add-circle-line"></i>
                                        <span>Mais ${maisFeatures} funcionalidades</span>
                                    </li>
                                ` : ''}
                            </ul>
                        </div>

                        <div class="card-actions">
                            <a href="${app.demo_url}" target="_blank" class="btn-action btn-demo">
                                <i class="ri-external-link-line"></i>
                                <span>Ver Demo</span>
                            </a>
                            <button class="btn-action btn-details" onclick="showAppDetails(${app.id})">
                                <i class="ri-information-line"></i>
                                <span>Detalhes</span>
                            </button>
                            <a href="#landingContact" class="btn-action btn-order">
                                <i class="ri-shopping-bag-line"></i>
                                <span>Encomendar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
}

// Renderizar paginação
function renderizarPaginacao(totalItems, totalPaginas) {
    const wrapper = document.getElementById('paginationWrapper');
    const info = document.getElementById('paginationInfo');
    const buttons = document.getElementById('paginationButtons');
    
    wrapper.style.display = 'block';
    
    info.innerHTML = `
        Página <strong>${paginaActual}</strong> de <strong>${totalPaginas}</strong>
        <span class="separator">•</span>
        <strong>${totalItems}</strong> ${totalItems === 1 ? 'resultado' : 'resultados'}
    `;
    
    let html = '';
    
    // Botão anterior
    if (paginaActual > 1) {
        html += `
            <li class="page-item">
                <a class="page-link" href="#" onclick="mudarPagina(${paginaActual - 1}); return false;">
                    <i class="ri-arrow-left-s-line"></i>
                    <span class="d-none d-sm-inline">Anterior</span>
                </a>
            </li>
        `;
    }
    
    // Páginas
    const start = Math.max(1, paginaActual - 2);
    const end = Math.min(totalPaginas, paginaActual + 2);
    
    if (start > 1) {
        html += `<li class="page-item"><a class="page-link" href="#" onclick="mudarPagina(${totalPaginas}); return false;">${totalPaginas}</a></li>`;
    }
    
    // Botão próxima
    if (paginaActual < totalPaginas) {
        html += `
            <li class="page-item">
                <a class="page-link" href="#" onclick="mudarPagina(${paginaActual + 1}); return false;">
                    <span class="d-none d-sm-inline">Próxima</span>
                    <i class="ri-arrow-right-s-line"></i>
                </a>
            </li>
        `;
    }
    
    buttons.innerHTML = html;
}

// Mudar página
function mudarPagina(pagina) {
    paginaActual = pagina;
    renderizarApps();
}

// Configurar filtros
function configurarFiltros() {
    const botoesFiltro = document.querySelectorAll('.filter-btn');
    
    botoesFiltro.forEach(botao => {
        botao.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remover active de todos
            botoesFiltro.forEach(b => b.classList.remove('active'));
            
            // Adicionar active ao clicado
            this.classList.add('active');
            
            // Actualizar categoria e resetar página
            categoriaActual = this.dataset.categoria;
            paginaActual = 1;
            
            // Renderizar
            renderizarApps();
        });
    });
}

// Mostrar detalhes do app (função global)
function showAppDetails(id) {
    const app = appsData.find(a => a.id === id);
    if (!app) return;
    
    const plataformasHTML = app.plataformas.map(p => {
        let icon = '';
        if (p === 'Android') icon = '<i class="ri-google-play-fill text-success"></i>';
        if (p === 'iOS') icon = '<i class="ri-apple-fill text-dark"></i>';
        return `<span class="badge bg-light text-dark me-2 mb-2">${icon} ${p}</span>`;
    }).join('');
    
    document.getElementById('modalAppName').innerHTML = `
        <i class="ri-smartphone-line me-2"></i>${app.nome}
    `;
    
    let screenshotsHTML = '<div class="modal-screenshots mb-4"><div class="row g-3">';
    app.screenshots.forEach((screenshot, index) => {
        screenshotsHTML += `
            <div class="col-md-6">
                <img src="${screenshot}" class="img-fluid rounded shadow-sm" alt="Screenshot ${index + 1}">
            </div>
        `;
    });
    screenshotsHTML += '</div></div>';
    
    let featuresHTML = '<ul class="list-unstyled row g-2">';
    app.caracteristicas.forEach(feature => {
        featuresHTML += `
            <li class="col-md-6 mb-2">
                <i class="ri-checkbox-circle-fill text-success me-2"></i>${feature}
            </li>
        `;
    });
    featuresHTML += '</ul>';
    
    document.getElementById('modalAppContent').innerHTML = `
        ${screenshotsHTML}
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-information-line me-2"></i>Informações Gerais</h6>
                    <div class="info-item">
                        <span class="info-label">Categoria:</span>
                        <span class="info-value">${app.categoria}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Nicho:</span>
                        <span class="info-value">${app.nicho}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Plataformas:</span>
                        <div class="info-value">${plataformasHTML}</div>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Preço:</span>
                        <span class="info-value text-primary fw-bold">${app.preco.toLocaleString('pt-MZ')} MT</span>
                    </div>
                    <a href="${app.demo_url}" target="_blank" class="btn btn-outline-primary mt-3 w-100">
                        <i class="ri-external-link-line me-2"></i>Ver Demo ao Vivo
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-file-text-line me-2"></i>Descrição</h6>
                    <p>${app.descricao}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-list-check-2 me-2"></i>Todas as Características</h6>
                    ${featuresHTML}
                </div>
            </div>
        </div>
    `;
    
    const modal = new bootstrap.Modal(document.getElementById('appDetailsModal'));
    modal.show();
}
</script>
