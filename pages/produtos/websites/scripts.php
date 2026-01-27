<script>
// Dados dos websites
const websitesData = <!-- -->
<?php echo json_encode($dados_websites['data']); ?>;

// Configuração
const ITEMS_POR_PAGINA = 4;
let paginaActual = 1;
let categoriaActual = 'all';

// Inicializar
document.addEventListener('DOMContentLoaded', function() {
    renderizarWebsites();
    configurarFiltros();
    configurarFormularioEncomenda();
});

// Filtrar websites
function filtrarWebsites() {
    if (categoriaActual === 'all') {
        return websitesData;
    }
    return websitesData.filter(w => w.categoria === categoriaActual);
}

// Renderizar websites
function renderizarWebsites() {
    const websitesFiltrados = filtrarWebsites();
    const totalItems = websitesFiltrados.length;
    const totalPaginas = Math.ceil(totalItems / ITEMS_POR_PAGINA);
    const offset = (paginaActual - 1) * ITEMS_POR_PAGINA;
    const websitesPagina = websitesFiltrados.slice(offset, offset + ITEMS_POR_PAGINA);
    
    // Renderizar grid
    const grid = document.getElementById('websitesGrid');
    if (websitesFiltrados.length === 0) {
        grid.innerHTML = '<div class="col-12 text-center my-5"><p class="text-muted">Nenhum pacote encontrado nesta categoria.</p></div>';
    } else {
        grid.innerHTML = websitesPagina.map((website, index) => criarCardWebsite(website, index)).join('');
    }
    
    // Renderizar paginação
    if (totalPaginas > 1) {
        renderizarPaginacao(totalItems, totalPaginas);
    } else {
        document.getElementById('paginationWrapper').style.display = 'none';
    }
    
    // Scroll suave para o topo da lista
    if (paginaActual > 1) {
        document.getElementById('websitesList').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

// Criar card de website
function criarCardWebsite(website, index) {
    const featuresShow = website.caracteristicas.slice(0, 5);
    const maisFeatures = website.caracteristicas.length - 5;
    
    return `
        <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="${index * 100}">
            <div class="website-card ${website.destaque ? 'featured' : ''}">
                ${website.destaque ? `
                    <div class="featured-badge">
                        <i class="ri-vip-crown-fill"></i>
                        <span>Mais Popular</span>
                    </div>
                ` : ''}
                
                <div class="card-layout">
                    <div class="screenshots-section">
                        <div id="carousel${website.id}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                ${website.screenshots.map((_, i) => `
                                    <button type="button" 
                                            data-bs-target="#carousel${website.id}" 
                                            data-bs-slide-to="${i}" 
                                            class="${i === 0 ? 'active' : ''}">
                                    </button>
                                `).join('')}
                            </div>
                            <div class="carousel-inner">
                                ${website.screenshots.map((screenshot, i) => `
                                    <div class="carousel-item ${i === 0 ? 'active' : ''}">
                                        <img src="${screenshot}" class="d-block w-100" alt="${website.nome}">
                                    </div>
                                `).join('')}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel${website.id}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel${website.id}" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-header-section">
                            <div class="category-badge badge-${website.cor}">
                                ${website.categoria}
                            </div>
                            <h3 class="website-name">${website.nome}</h3>
                            <p class="website-nicho">
                                <i class="ri-focus-3-line"></i>
                                ${website.nicho}
                            </p>
                        </div>

                        <div class="card-pricing">
                            <div class="pricing-main">
                                <span class="price-label">A partir de</span>
                                <div class="price-amount">
                                    <span class="price-value">${website.preco.toLocaleString('pt-MZ')}</span>
                                    <span class="price-currency">MT</span>
                                </div>
                            </div>
                            <div class="pricing-detail">
                                <i class="ri-file-list-3-line"></i>
                                <span>${website.paginas} página${website.paginas > 1 ? 's' : ''}</span>
                            </div>
                        </div>

                        <p class="card-description">${website.descricao}</p>

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
                            <a href="${website.demo_url}" target="_blank" class="btn-action btn-demo">
                                <i class="ri-external-link-line"></i>
                                <span>Ver Demo</span>
                            </a>
                            <button class="btn-action btn-details" onclick="showWebsiteDetails(${website.id})">
                                <i class="ri-information-line"></i>
                                <span>Detalhes</span>
                            </button>
                            <button class="btn-action btn-order" onclick="abrirModalEncomenda(${website.id})">
                                <i class="ri-shopping-bag-line"></i>
                                <span>Encomendar</span>
                            </button>
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
        html += `<li class="page-item"><a class="page-link" href="#" onclick="mudarPagina(1); return false;">1</a></li>`;
        if (start > 2) {
            html += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
        }
    }
    
    for (let i = start; i <= end; i++) {
        html += `
            <li class="page-item ${i === paginaActual ? 'active' : ''}">
                <a class="page-link" href="#" onclick="mudarPagina(${i}); return false;">${i}</a>
            </li>
        `;
    }
    
    if (end < totalPaginas) {
        if (end < totalPaginas - 1) {
            html += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
        }
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
    renderizarWebsites();
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
            renderizarWebsites();
        });
    });
}

// Mostrar detalhes do website (função global)
function showWebsiteDetails(id) {
    const website = websitesData.find(w => w.id === id);
    if (!website) return;
    
    document.getElementById('modalWebsiteName').innerHTML = `
        <i class="ri-window-line me-2"></i>${website.nome}
    `;
    
    let screenshotsHTML = '<div class="modal-screenshots mb-4"><div class="row g-3">';
    website.screenshots.forEach((screenshot, index) => {
        screenshotsHTML += `
            <div class="col-md-6">
                <img src="${screenshot}" class="img-fluid rounded shadow-sm" alt="Screenshot ${index + 1}">
            </div>
        `;
    });
    screenshotsHTML += '</div></div>';
    
    let featuresHTML = '<ul class="list-unstyled row g-2">';
    website.caracteristicas.forEach(feature => {
        featuresHTML += `
            <li class="col-md-6 mb-2">
                <i class="ri-checkbox-circle-fill text-success me-2"></i>${feature}
            </li>
        `;
    });
    featuresHTML += '</ul>';
    
    document.getElementById('modalWebsiteContent').innerHTML = `
        ${screenshotsHTML}
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-information-line me-2"></i>Informações Gerais</h6>
                    <div class="info-item">
                        <span class="info-label">Categoria:</span>
                        <span class="info-value">${website.categoria}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Nicho:</span>
                        <span class="info-value">${website.nicho}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Páginas:</span>
                        <span class="info-value">${website.paginas}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Preço:</span>
                        <span class="info-value text-primary fw-bold">${website.preco.toLocaleString('pt-MZ')} MT</span>
                    </div>
                    <a href="${website.demo_url}" target="_blank" class="btn btn-outline-primary mt-3 w-100">
                        <i class="ri-external-link-line me-2"></i>Ver Demo ao Vivo
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box">
                    <h6 class="fw-bold mb-3"><i class="ri-file-text-line me-2"></i>Descrição</h6>
                    <p>${website.descricao}</p>
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
    
    // Configurar botão de encomenda no modal
    const btnModalOrder = document.getElementById('btnModalOrder');
    btnModalOrder.onclick = function() {
        const modalDetails = bootstrap.Modal.getInstance(document.getElementById('websiteDetailsModal'));
        modalDetails.hide();
        abrirModalEncomenda(website.id);
    };
    
    const modal = new bootstrap.Modal(document.getElementById('websiteDetailsModal'));
    modal.show();
}

// Função para abrir o modal de encomenda
function abrirModalEncomenda(id) {
    const website = websitesData.find(w => w.id === id);
    if (!website) return;
    
    document.getElementById('orderWebsiteId').value = website.id;
    document.getElementById('orderWebsiteName').value = website.nome;
    
    const modal = new bootstrap.Modal(document.getElementById('orderModal'));
    modal.show();
}

// Configurar o envio do formulário
function configurarFormularioEncomenda() {
    const form = document.getElementById('orderForm');
    const btnSubmit = document.getElementById('btnSubmitOrder');
    const spinner = btnSubmit.querySelector('.spinner-border');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Mostrar loading
        btnSubmit.disabled = true;
        spinner.classList.remove('d-none');
        
        // Colectar dados
        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());
        
        // Simular envio para API (Fake API usando JSONPlaceholder ou similar)
        fetch('https://jsonplaceholder.typicode.com/posts', {
            method: 'POST',
            body: JSON.stringify({
                title: 'Nova Encomenda: ' + data.website_id,
                body: JSON.stringify(data),
                userId: 1,
            }),
            headers: {
                'Content-type': 'application/json; charset=UTF-8',
            },
        })
        .then(response => response.json())
        .then(json => {
            console.log('Sucesso:', json);
            
            // Esconder loading
            btnSubmit.disabled = false;
            spinner.classList.add('d-none');
            
            // Fechar modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('orderModal'));
            modal.hide();
            
            // Mostrar feedback (usando alert simples por enquanto)
            alert('Encomenda enviada com sucesso! Entraremos em contacto em breve.');
            form.reset();
        })
        .catch(error => {
            console.error('Erro:', error);
            btnSubmit.disabled = false;
            spinner.classList.add('d-none');
            alert('Ocorreu um erro ao enviar a encomenda. Por favor, tente novamente.');
        });
    });
}
</script>
<!-- Scripts específicos para a página de Websites -->