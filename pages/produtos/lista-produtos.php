// Configurações
const API_URL = 'https://sua-api.com/api/produtos'; // Substitua quando tiver a API
const itensPorPagina = 2;
let paginaAtual = { websites: 1, sistemas: 1, outros: 1 };
let produtos = { websites: [], sistemas: [], outros: [] };

// --- FUNÇÃO PARA BUSCAR DADOS (O CORAÇÃO DO DINAMISMO) ---
async function buscarProdutos() {
    try {
        // Quando a API existir, use: const response = await fetch(API_URL);
        // Por enquanto, simulamos o atraso da rede e os dados
        const mockData = await simularRespostaAPI(); 
        produtos = mockData;
        
        // Inicializa as abas após carregar os dados
        ['websites', 'sistemas', 'outros'].forEach(cat => mudarCategoria(cat));
    } catch (error) {
        console.error("Erro ao carregar produtos:", error);
    }
}

// --- FUNÇÃO PARA GERAR O CARD (COM DEMO E SLIDER) ---
function gerarCard(produto, index, categoria) {
    const carouselId = `carousel-${categoria}-${index}`;
    
    // Gerar Slides de Screenshots
    const slides = produto.imagens.map((img, i) => `
        <div class="carousel-item ${i === 0 ? 'active' : ''}">
            <img src="${img}" class="d-block w-100" alt="Screenshot" 
                 onclick="abrirPreview('${img}')" style="height:200px; object-fit:cover;">
        </div>
    `).join('');

    return `
        <div class="col-md-6 col-lg-6">
            <div class="card shadow-sm border-0 hover-shadow-lg transition-300 product-card h-100">
                <div id="${carouselId}" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">${slides}</div>
                    ${produto.imagens.length > 1 ? `
                        <button class="carousel-control-prev" type="button" data-bs-target="#${carouselId}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#${carouselId}" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    ` : ''}
                </div>

                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-box icon-${produto.cor} me-3">
                            <i class="${produto.icone} fs-3"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">${produto.nome}</h4>
                    </div>
                    <p class="text-muted small mb-3">${produto.descricao}</p>
                    <ul class="list-unstyled small text-muted mb-4">
                        ${produto.caracteristicas.map(c => `<li><i class="ri-check-line icon-${produto.cor}"></i> ${c}</li>`).join('')}
                    </ul>
                </div>

                <div class="card-footer bg-white border-0 pb-4 d-flex gap-2">
                    <a href="${produto.link_demo}" target="_blank" class="btn btn-outline-dark btn-sm w-50">
                        <i class="ri-external-link-line"></i> Demo
                    </a>
                    <a href="#contacto" class="btn btn-${produto.cor} btn-sm w-50">Orçamento</a>
                </div>
            </div>
        </div>
    `;
}

// --- FUNÇÕES DE APOIO ---

function renderizarProdutos(categoria) {
    const inicio = (paginaAtual[categoria] - 1) * itensPorPagina;
    const fim = inicio + itensPorPagina;
    const lista = produtos[categoria].slice(inicio, fim);
    
    const container = document.getElementById(`${categoria}Content`);
    container.innerHTML = lista.length > 0 
        ? lista.map((p, i) => gerarCard(p, i, categoria)).join('')
        : '<p class="text-center">Nenhum produto encontrado nesta categoria.</p>';
}

function mudarCategoria(categoria) {
    renderizarProdutos(categoria);
    renderizarPaginacao(categoria);
    renderizarLista(categoria);
}

// Simulação de API (Substitua pelos dados Reais da sua API no futuro)
function simularRespostaAPI() {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve({
                websites: [
                    {
                        nome: 'Portal Corporativo',
                        descricao: 'Design moderno com foco em autoridade de marca.',
                        icone: 'ri-global-line',
                        cor: 'orange',
                        link_demo: 'https://exemplo.com/demo1',
                        caracteristicas: ['SEO Avançado', 'Blog Integrado'],
                        imagens: ['https://picsum.photos/400/200?random=1', 'https://picsum.photos/400/200?random=2']
                    }
                ],
                sistemas: [
                    {
                        nome: 'Gestão de Vendas',
                        descricao: 'Controle total de entradas e saídas.',
                        icone: 'ri-dashboard-line',
                        cor: 'blue',
                        link_demo: 'https://exemplo.com/demo2',
                        caracteristicas: ['Relatórios PDF', 'Multi-utilizador'],
                        imagens: ['https://picsum.photos/400/200?random=3']
                    }
                ],
                outros: []
            });
        }, 800);
    });
}

// Inicialização
document.addEventListener('DOMContentLoaded', buscarProdutos);
</script>
