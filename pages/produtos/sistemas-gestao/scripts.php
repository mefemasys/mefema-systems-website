<script>
// Dados dos sistemas
const sistemasData = <!-- -->
<?php echo json_encode($dados_sistemas['data']); ?>;

// Estado da Aplicação (URLs Limpas)
let state = {
    pagina: 1,
    categoria: 'all',
    itemsPorPagina: 4
};

document.addEventListener('DOMContentLoaded', function() {
    renderizarSistemas();
    configurarFiltros();
    configurarFormularioAquisicao();
});

function filtrarSistemas() {
    if (state.categoria === 'all') return sistemasData;
    return sistemasData.filter(s => s.categoria === state.categoria);
}

function renderizarSistemas() {
    const filtrados = filtrarSistemas();
    const totalItems = filtrados.length;
    const totalPaginas = Math.ceil(totalItems / state.itemsPorPagina);
    const offset = (state.pagina - 1) * state.itemsPorPagina;
    const paginaItems = filtrados.slice(offset, offset + state.itemsPorPagina);
    
    const grid = document.getElementById('sistemasGrid');
    if (filtrados.length === 0) {
        grid.innerHTML = '<div class="col-12 text-center my-5"><p class="text-muted">Nenhum sistema encontrado nesta categoria.</p></div>';
    } else {
        grid.innerHTML = paginaItems.map((sistema, index) => criarCardSistema(sistema, index)).join('');
    }
    
    renderizarPaginacao(totalItems, totalPaginas);
}

function criarCardSistema(sistema, index) {
    return `
        <div class="col-xl-12" data-aos="fade-up" data-aos-delay="${index * 100}">
            <div class="website-card ${sistema.destaque ? 'featured' : ''}">
                ${sistema.destaque ? '<div class="featured-badge"><i class="ri-vip-crown-fill"></i><span>Destaque</span></div>' : ''}
                <div class="card-layout">
                    <div class="screenshots-section">
                        <div id="carousel${sistema.id}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                ${sistema.screenshots.map((img, i) => `
                                    <div class="carousel-item ${i === 0 ? 'active' : ''}">
                                        <img src="${img}" class="d-block w-100" alt="${sistema.nome}">
                                    </div>
                                `).join('')}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel${sistema.id}" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel${sistema.id}" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-header-section">
                            <div class="category-badge badge-${sistema.cor}">${sistema.categoria}</div>
                            <h3 class="website-name">${sistema.nome}</h3>
                            <p class="website-nicho"><i class="ri-focus-3-line"></i>${sistema.nicho}</p>
                        </div>
                        <div class="card-pricing">
                            <div class="pricing-main">
                                <span class="price-label">A partir de</span>
                                <div class="price-amount">
                                    <span class="price-value">${sistema.preco.toLocaleString('pt-MZ')}</span>
                                    <span class="price-currency">MT</span>
                                </div>
                            </div>
                        </div>
                        <p class="card-description">${sistema.descricao}</p>
                        <div class="card-actions">
                            <a href="${sistema.demo_url}" target="_blank" class="btn-action btn-demo"><i class="ri-external-link-line"></i><span>Demo</span></a>
                            <button class="btn-action btn-details" onclick="showSistemaDetails(${sistema.id})"><i class="ri-information-line"></i><span>Detalhes</span></button>
                            <button class="btn-action btn-order" onclick="abrirModalAquisicao(${sistema.id})"><i class="ri-shopping-bag-line"></i><span>Adquirir</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
}

function renderizarPaginacao(totalItems, totalPaginas) {
    const wrapper = document.getElementById('paginationWrapper');
    const info = document.getElementById('paginationInfo');
    const buttons = document.getElementById('paginationButtons');
    
    if (totalPaginas <= 1) {
        wrapper.style.display = 'none';
        return;
    }
    
    wrapper.style.display = 'block';
    info.innerHTML = `Página <strong>${state.pagina}</strong> de <strong>${totalPaginas}</strong> • <strong>${totalItems}</strong> resultados`;
    
    let html = '';
    if (state.pagina > 1) {
        html += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="mudarPagina(${state.pagina - 1})"><i class="ri-arrow-left-s-line"></i></a></li>`;
    }
    
    for (let i = 1; i <= totalPaginas; i++) {
        html += `<li class="page-item ${i === state.pagina ? 'active' : ''}"><a class="page-link" href="javascript:void(0)" onclick="mudarPagina(${i})">${i}</a></li>`;
    }
    
    if (state.pagina < totalPaginas) {
        html += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="mudarPagina(${state.pagina + 1})"><i class="ri-arrow-right-s-line"></i></a></li>`;
    }
    buttons.innerHTML = html;
}

function mudarPagina(p) {
    state.pagina = p;
    renderizarSistemas();
    document.getElementById('sistemasSection').scrollIntoView({ behavior: 'smooth' });
}

function configurarFiltros() {
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            state.categoria = this.dataset.categoria;
            state.pagina = 1;
            renderizarSistemas();
        });
    });
}

function showSistemaDetails(id) {
    const sistema = sistemasData.find(s => s.id === id);
    if (!sistema) return;
    
    document.getElementById('modalSistemaName').innerText = sistema.nome;
    document.getElementById('modalSistemaContent').innerHTML = `
        <div class="row">
            <div class="col-md-12 mb-4">
                <img src="${sistema.screenshots[0]}" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h6><i class="ri-list-check-2 me-2"></i>Módulos Incluídos</h6>
                <ul class="list-unstyled">
                    ${sistema.caracteristicas.map(f => `<li><i class="ri-check-line text-success me-2"></i>${f}</li>`).join('')}
                </ul>
            </div>
            <div class="col-md-6">
                <div class="p-3 bg-light rounded">
                    <h6>Descrição</h6>
                    <p>${sistema.descricao}</p>
                    <hr>
                    <p class="mb-0"><strong>Preço Base:</strong> ${sistema.preco.toLocaleString('pt-MZ')} MT</p>
                </div>
            </div>
        </div>
    `;
    
    document.getElementById('btnModalAcquire').onclick = function() {
        bootstrap.Modal.getInstance(document.getElementById('sistemaDetailsModal')).hide();
        abrirModalAquisicao(sistema.id);
    };
    
    new bootstrap.Modal(document.getElementById('sistemaDetailsModal')).show();
}

function abrirModalAquisicao(id) {
    const sistema = sistemasData.find(s => s.id === id);
    if (!sistema) return;
    
    document.getElementById('acquireSistemaId').value = sistema.id;
    document.getElementById('acquireSistemaName').innerText = sistema.nome;
    
    new bootstrap.Modal(document.getElementById('acquireModal')).show();
}

function configurarFormularioAquisicao() {
    const form = document.getElementById('acquireForm');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const btn = document.getElementById('btnSubmitAcquire');
        const spinner = btn.querySelector('.spinner-border');
        
        btn.disabled = true;
        spinner.classList.remove('d-none');
        
        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());
        data.extras = formData.getAll('extras[]');

        fetch('https://jsonplaceholder.typicode.com/posts', {
            method: 'POST',
            body: JSON.stringify(data),
            headers: { 'Content-type': 'application/json' }
        })
        .then(res => res.json())
        .then(json => {
            console.log('Proposta enviada:', json);
            btn.disabled = false;
            spinner.classList.add('d-none');
            bootstrap.Modal.getInstance(document.getElementById('acquireModal')).hide();
            alert('Solicitação de aquisição enviada com sucesso! A nossa equipa comercial entrará em contacto para apresentar a proposta detalhada.');
            form.reset();
        })
        .catch(err => {
            btn.disabled = false;
            spinner.classList.add('d-none');
            alert('Erro ao enviar solicitação. Tente novamente.');
        });
    });
}
</script>