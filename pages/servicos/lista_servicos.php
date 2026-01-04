<style>
  /* Transições */
  .transition-300 {
    transition: all 0.3s ease;
  }
  /* Hover */
  .hover-shadow-lg:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 35px rgba(0,0,0,0.12) !important;
  }
  /* Sem arredondamentos */
  .card,
  .btn,
  .badge,
  .nav-link {
    border-radius: 0 !important;
  }
  /* Cards reduzidos */
  .service-card {
    min-height: 450px;
    display: flex;
    flex-direction: column;
    background: white;
    overflow: hidden;
    height: 100%;
  }
  /* Corpo do card */
  .card-body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
  }
  /* Ícones */
  .icon-box {
    padding: 12px;
    border: 1px solid #ddd;
  }
  /* Tabs */
  .nav-tabs-clean .nav-link {
    border: none;
    color: var(--bs-body-color);
    font-size: 1rem;
  }
  .nav-tabs-clean .nav-link.active {
    border-bottom: 3px solid var(--bs-primary);
    background: transparent;
    color: var(--bs-primary);
    font-weight: 600;
  }
  /* Paginação */
  .pagination-clean .page-link {
    border: 1px solid #ddd;
    color: #333;
    border-radius: 0 !important;
    cursor: pointer;
  }
  .pagination-clean .page-link:hover {
    background: #f5f5f5;
  }
  .pagination-clean .page-item.active .page-link {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
    color: white;
  }
  /* Cores dos ícones e botões */
  .icon-orange { color: #ff6b35; }
  .icon-blue { color: #004e89; }
  .icon-brown { color: #8b4513; }
  .icon-green { color: #2d6a4f; }
  .btn-orange { background-color: #ff6b35; border-color: #ff6b35; color: white; }
  .btn-orange:hover { background-color: #e55a2b; border-color: #e55a2b; color: white; }
  .btn-blue { background-color: #004e89; border-color: #004e89; color: white; }
  .btn-blue:hover { background-color: #003d6e; border-color: #003d6e; color: white; }
  .btn-brown { background-color: #8b4513; border-color: #8b4513; color: white; }
  .btn-brown:hover { background-color: #723910; border-color: #723910; color: white; }
  .btn-green { background-color: #2d6a4f; border-color: #2d6a4f; color: white; }
  .btn-green:hover { background-color: #245a42; border-color: #245a42; color: white; }
  /* Botões outline */
  .btn-outline-orange { border-color: #ff6b35; color: #ff6b35; }
  .btn-outline-orange:hover { background-color: #ff6b35; color: white; }
  .btn-outline-blue { border-color: #004e89; color: #004e89; }
  .btn-outline-blue:hover { background-color: #004e89; color: white; }
  .btn-outline-brown { border-color: #8b4513; color: #8b4513; }
  .btn-outline-brown:hover { background-color: #8b4513; color: white; }
  .btn-outline-green { border-color: #2d6a4f; color: #2d6a4f; }
  .btn-outline-green:hover { background-color: #2d6a4f; color: white; }

  /* Grid responsivo para os cards */
  @media (min-width: 576px) { .services-grid { --cols: 2; } }
  @media (min-width: 768px) { .services-grid { --cols: 3; } }
  @media (min-width: 1200px) { .services-grid { --cols: 4; } }
  @media (min-width: 1400px) { .services-grid { --cols: 5; } }
  .services-grid {
    display: grid;
    grid-template-columns: repeat(var(--cols), 1fr);
    gap: 1.5rem;
  }

  .empty-state {
    grid-column: 1 / -1;
    padding: 4rem 2rem;
    text-align: center;
    color: #6c757d;
  }
  .empty-state i {
    font-size: 4rem;
    margin-bottom: 1rem;
    opacity: 0.3;
  }
</style>

<section class="py-5" id="servicosContent">
  <div class="container">
    <!-- Filtros -->
    <div class="row mb-4">
      <div class="col-lg-6">
        <input type="text" class="form-control" id="searchInput" placeholder="Pesquisar serviço...">
      </div>
      <div class="col-lg-3 mt-3 mt-lg-0 text-end">
        <button class="btn btn-outline-secondary" id="moreItemsBtn">
          <i class="ri-add-line"></i> Mais serviços
        </button>
      </div>
    </div>

    <!-- TABS -->
    <ul class="nav nav-tabs nav-tabs-clean justify-content-center mb-5" id="servicosTab">
      <li class="nav-item">
        <button class="nav-link active px-4 py-3" data-categoria="all">
          <i class="ri-apps-2-line me-2"></i>Todos
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link px-4 py-3" data-categoria="desenvolvimento">
          <i class="ri-code-box-line me-2"></i>Desenvolvimento
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link px-4 py-3" data-categoria="infraestrutura">
          <i class="ri-server-line me-2"></i>Infraestrutura
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link px-4 py-3" data-categoria="consultoria">
          <i class="ri-lightbulb-line me-2"></i>Consultoria
        </button>
      </li>
    </ul>

    <!-- Conteúdo -->
    <div id="servicosContainer">
      <div class="services-grid grid-cols" id="servicosGrid"></div>
    </div>

    <!-- Paginação única -->
    <nav class="mt-5" id="paginacaoContainer" style="display: none;">
      <ul class="pagination justify-content-center pagination-clean" id="paginacao"></ul>
    </nav>
  </div>
</section>

<!-- Modal de Detalhes -->
<div class="modal fade" id="detalhesModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" id="detalhesContent"></div>
  </div>
</div>

<script>
// Dados dos serviços (expandido para ~18 serviços no total)
const SERVICOS_DATA = {
  all: [], // preenchido com todos
  desenvolvimento: [
    {nome:'Aplicações Web e Móveis',descricao:'Desenvolvimento de aplicações personalizadas, responsivas e intuitivas para web e mobile.',icone:'ri-smartphone-line',cor:'orange',prazo:'2-6 meses',garantia:'12 meses',modoTrabalho:['Metodologia Ágil (Scrum)','Sprints quinzenais com demos','Testes contínuos (QA)','Implantação progressiva'],garantias:['Correcção de bugs sem custos','Actualizações de segurança','Documentação técnica completa','Formação de utilizadores']},
    {nome:'Sistemas ERP Simplificados',descricao:'Sistemas de gestão empresarial adaptados às PMEs com módulos integrados.',icone:'ri-dashboard-line',cor:'blue',prazo:'3-8 meses',garantia:'24 meses',modoTrabalho:['Levantamento de requisitos','Desenvolvimento modular','Testes em homologação','Migração de dados'],garantias:['Suporte prioritário','Backup automático','Personalizações incluídas','Formação completa']},
    {nome:'Plataformas de E-commerce',descricao:'Lojas online completas com pagamentos integrados e painel administrativo.',icone:'ri-shopping-cart-line',cor:'green',prazo:'1-4 meses',garantia:'12 meses',modoTrabalho:['Análise de concorrentes','Design responsivo','Integração de pagamentos','Otimização SEO'],garantias:['SSL incluído','Hospedagem 1 ano','Suporte 24/7','Atualizações de segurança']},
    {nome:'Websites Corporativos',descricao:'Sites institucionais modernos com CMS personalizado.',icone:'ri-global-line',cor:'brown',prazo:'2-6 semanas',garantia:'12 meses',modoTrabalho:['Briefing e wireframes','Design personalizado','Desenvolvimento responsivo','SEO on-page'],garantias:['Hospedagem 1 ano','SSL gratuito','Backups automáticos','Suporte técnico']},
    {nome:'Aplicações Desktop',descricao:'Software desktop robusto com interface moderna e integração offline.',icone:'ri-computer-line',cor:'orange',prazo:'3-7 meses',garantia:'18 meses',modoTrabalho:['Análise detalhada','Prototipagem','Desenvolvimento iterativo','Testes de usabilidade'],garantias:['Manutenção corretiva','Atualizações funcionais','Documentação','Treino']},
    {nome:'Integrações API',descricao:'Conexão segura entre sistemas existentes e serviços externos.',icone:'ri-links-line',cor:'blue',prazo:'2-8 semanas',garantia:'12 meses',modoTrabalho:['Mapeamento de dados','Desenvolvimento de endpoints','Testes de carga','Documentação API'],garantias:['Monitoramento','Atualizações','Segurança OAuth','Suporte']},
  ],
  infraestrutura: [
    {nome:'Hospedagem em Cloud',descricao:'Infraestrutura escalável em AWS, Azure ou Google Cloud com alta disponibilidade.',icone:'ri-cloud-line',cor:'orange',prazo:'1-2 semanas',garantia:'SLA 99.9%',modoTrabalho:['Avaliação de requisitos','Configuração','Migração','Monitoramento'],garantias:['Backup diário','Disaster recovery','Suporte 24/7','Escalabilidade']},
    {nome:'Cibersegurança e Proteção',descricao:'Firewalls, IDS, encriptação e testes de penetração.',icone:'ri-shield-lock-line',cor:'blue',prazo:'2-4 semanas',garantia:'ISO 27001',modoTrabalho:['Avaliação vulnerabilidades','Implementação controles','Penetration testing','Monitoramento 24/7'],garantias:['Relatórios trimestrais','Resposta a incidentes','Atualizações','Conformidade']},
    {nome:'Backup e Recuperação',descricao:'Soluções completas de backup e disaster recovery.',icone:'ri-save-line',cor:'green',prazo:'1-2 semanas',garantia:'RTO < 4h',modoTrabalho:['Análise dados críticos','Rotinas automáticas','Testes mensais','Encriptação'],garantias:['Retenção 30 dias','Redundância','Restauração prioritária','Relatórios']},
    {nome:'Redes e VPN Corporativa',descricao:'Configuração de redes seguras e acesso remoto via VPN.',icone:'ri-router-line',cor:'brown',prazo:'2-5 semanas',garantia:'99.9% uptime',modoTrabalho:['Diagnóstico atual','Projeto de rede','Implementação','Testes de conectividade'],garantias:['Monitoramento','Manutenção','Segurança','Suporte']},
    {nome:'Monitorização de Sistemas',descricao:'Dashboard em tempo real de desempenho e alertas proativos.',icone:'ri-bar-chart-line',cor:'orange',prazo:'1-3 semanas',garantia:'24/7',modoTrabalho:['Instalação agentes','Configuração alertas','Dashboards personalizados','Relatórios'],garantias:['Alertas instantâneos','Relatórios semanais','Intervenção proativa','Integrações']},
  ],
  consultoria: [
    {nome:'Transformação Digital',descricao:'Estratégia completa para modernização tecnológica da empresa.',icone:'ri-line-chart-line',cor:'orange',prazo:'4-8 semanas',garantia:'Roadmap completo',modoTrabalho:['Diagnóstico atual','Workshops','Roadmap','Acompanhamento'],garantias:['Relatório executivo','Plano prioritizado','Análise ROI','Follow-up']},
    {nome:'Auditoria de Sistemas',descricao:'Avaliação completa de TI, segurança e performance.',icone:'ri-search-eye-line',cor:'blue',prazo:'2-4 semanas',garantia:'Relatório completo',modoTrabalho:['Inventário','Testes segurança','Análise vulnerabilidades','Recomendações'],garantias:['Relatório técnico','Lista vulnerabilidades','Plano remediação','Apresentação']},
    {nome:'Gestão de Projectos TI',descricao:'Coordenação profissional de projetos tecnológicos.',icone:'ri-briefcase-line',cor:'green',prazo:'Conforme projeto',garantia:'Ágil/PMI',modoTrabalho:['Definição escopo','Reuniões status','Gestão riscos','Relatórios'],garantias:['Documentação','Controlo custos','Gestão stakeholders','Lições aprendidas']},
    {nome:'Formação Corporativa',descricao:'Cursos personalizados em tecnologias e competências digitais.',icone:'ri-graduation-cap-line',cor:'brown',prazo:'1-5 dias',garantia:'Certificado',modoTrabalho:['Avaliação necessidades','Conteúdo personalizado','Sessões práticas','Avaliação'],garantias:['Material didáctico','Certificado','Suporte 30 dias','Follow-up']},
    {nome:'DevOps e Automação',descricao:'Implementação de pipelines CI/CD e cultura DevOps.',icone:'ri-git-branch-line',cor:'blue',prazo:'4-10 semanas',garantia:'Entrega contínua',modoTrabalho:['Assessment atual','Definição pipeline','Treino equipa','Monitorização'],garantias:['Documentação','Automação testes','Deploy automático','Suporte']},
    {nome:'Análise de Dados e BI',descricao:'Criação de dashboards e relatórios estratégicos.',icone:'ri-pie-chart-line',cor:'green',prazo:'3-6 semanas',garantia:'Dashboards vivos',modoTrabalho:['Levantamento KPIs','Modelagem dados','Desenvolvimento BI','Treino utilizadores'],garantias:['Dashboards interativos','Atualização automática','Exportações','Formação']},
  ]
};

// Preencher "all"
SERVICOS_DATA.all = [
  ...SERVICOS_DATA.desenvolvimento,
  ...SERVICOS_DATA.infraestrutura,
  ...SERVICOS_DATA.consultoria
];

// Estado
const state = {
  categoriaAtual: 'all',
  paginaAtual: 1,
  itensPorPagina: 12,
  servicosFiltrados: []
};

// Render Card
function renderCard(servico) {
  return `
    <div class="card shadow-sm border-0 hover-shadow-lg transition-300 service-card">
      <div class="card-body p-4">
        <div class="d-flex align-items-center mb-3">
          <div class="icon-box icon-${servico.cor} me-3">
            <i class="${servico.icone} fs-3"></i>
          </div>
          <h4 class="mb-0 fw-bold">${servico.nome}</h4>
        </div>
        <p class="text-muted small mb-3 flex-grow-1">${servico.descricao}</p>
        <div class="row g-3 mb-3">
          <div class="col-6">
            <div class="d-flex align-items-center">
              <i class="ri-time-line icon-${servico.cor} me-2"></i>
              <div>
                <small class="text-muted d-block">Prazo</small>
                <strong class="small">${servico.prazo}</strong>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex align-items-center">
              <i class="ri-shield-check-line icon-green me-2"></i>
              <div>
                <small class="text-muted d-block">Garantia</small>
                <strong class="small">${servico.garantia}</strong>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-light p-3 mb-2 border-start border-3 border-${servico.cor === 'orange' ? 'warning' : servico.cor === 'blue' ? 'primary' : servico.cor === 'green' ? 'success' : 'secondary'}">
          <h6 class="fw-bold mb-2 small"><i class="ri-tools-line icon-${servico.cor} me-2"></i>Modo de Trabalho</h6>
          <ul class="list-unstyled mb-0 small">
            ${servico.modoTrabalho.slice(0, 3).map(m => `<li class="mb-1"><i class="ri-arrow-right-s-line icon-${servico.cor}"></i> ${m}</li>`).join('')}
            ${servico.modoTrabalho.length > 3 ? '<li class="text-muted small">+ mais...</li>' : ''}
          </ul>
        </div>
      </div>
      <div class="card-footer text-center border-0 pb-4 bg-transparent">
        <a href="#contacto" class="btn btn-${servico.cor} btn-sm px-4 me-2">Solicitar</a>
        <button class="btn btn-outline-${servico.cor} btn-sm px-4" onclick="verDetalhes('${servico.nome}', event)">Detalhes</button>
      </div>
    </div>
  `;
}

// Filtragem
function aplicarFiltros() {
  let lista = SERVICOS_DATA[state.categoriaAtual] || [];

  const termo = document.getElementById('searchInput').value.toLowerCase().trim();
  if (termo) {
    lista = lista.filter(s => 
      s.nome.toLowerCase().includes(termo) || 
      s.descricao.toLowerCase().includes(termo)
    );
  }

  state.servicosFiltrados = lista;
  state.paginaAtual = 1;
  renderServicos();
}

// Render
function renderServicos() {
  const grid = document.getElementById('servicosGrid');
  const inicio = (state.paginaAtual - 1) * state.itensPorPagina;
  const fim = inicio + state.itensPorPagina;
  const pagina = state.servicosFiltrados.slice(inicio, fim);

  if (state.servicosFiltrados.length === 0) {
    grid.innerHTML = `<div class="empty-state"><i class="ri-inbox-line"></i><h4>Nenhum serviço encontrado</h4><p>Ajuste os filtros ou categoria.</p></div>`;
    document.getElementById('paginacaoContainer').style.display = 'none';
    return;
  }

  grid.innerHTML = pagina.map(renderCard).join('');
  renderPaginacao();
}

function renderPaginacao() {
  const totalPaginas = Math.ceil(state.servicosFiltrados.length / state.itensPorPagina);
  const pag = document.getElementById('paginacao');

  if (totalPaginas <= 1) {
    document.getElementById('paginacaoContainer').style.display = 'none';
    return;
  }
  document.getElementById('paginacaoContainer').style.display = 'block';

  let html = '';
  if (state.paginaAtual > 1) html += `<li class="page-item"><a class="page-link" href="#" data-pag="${state.paginaAtual-1}"><i class="ri-arrow-left-line"></i> Anterior</a></li>`;

  for (let i = 1; i <= totalPaginas; i++) {
    if (i === 1 || i === totalPaginas || Math.abs(i - state.paginaAtual) <= 1) {
      html += `<li class="page-item ${i === state.paginaAtual ? 'active' : ''}"><a class="page-link" href="#" data-pag="${i}">${i}</a></li>`;
    } else if (i === state.paginaAtual - 2 || i === state.paginaAtual + 2) {
      html += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
    }
  }

  if (state.paginaAtual < totalPaginas) html += `<li class="page-item"><a class="page-link" href="#" data-pag="${state.paginaAtual+1}">Próximo <i class="ri-arrow-right-line"></i></a></li>`;

  pag.innerHTML = html;
}

// Detalhes Modal (usando o nome como chave única)
function verDetalhes(nomeServico, event) {
  event.preventDefault();
  let servico = null;
  for (const cat in SERVICOS_DATA) {
    if (cat === 'all') continue;
    servico = SERVICOS_DATA[cat].find(s => s.nome === nomeServico);
    if (servico) break;
  }
  if (!servico) return;

  const detalhes = `
    <div class="modal-header">
      <h5 class="modal-title"><i class="${servico.icone} icon-${servico.cor} me-2"></i>${servico.nome}</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
      <p class="text-muted mb-4">${servico.descricao}</p>
      <div class="row g-3 mb-4">
        <div class="col-6"><div class="d-flex align-items-center"><i class="ri-time-line icon-${servico.cor} me-2"></i><div><small class="text-muted d-block">Prazo Médio</small><strong>${servico.prazo}</strong></div></div></div>
        <div class="col-6"><div class="d-flex align-items-center"><i class="ri-shield-check-line icon-green me-2"></i><div><small class="text-muted d-block">Garantia</small><strong>${servico.garantia}</strong></div></div></div>
      </div>
      <div class="bg-light p-3 mb-3 border-start border-3 border-${servico.cor === 'orange' ? 'warning' : servico.cor === 'blue' ? 'primary' : servico.cor === 'green' ? 'success' : 'secondary'}">
        <h6 class="fw-bold mb-2"><i class="ri-tools-line icon-${servico.cor} me-2"></i>Modo de Trabalho</h6>
        <ul class="list-unstyled mb-0">${servico.modoTrabalho.map(m => `<li class="mb-1"><i class="ri-arrow-right-s-line icon-${servico.cor}"></i> ${m}</li>`).join('')}</ul>
      </div>
      <div class="bg-light p-3 border-start border-3 border-success">
        <h6 class="fw-bold mb-2"><i class="ri-checkbox-circle-line icon-green me-2"></i>Garantias Incluídas</h6>
        <ul class="list-unstyled mb-0">${servico.garantias.map(g => `<li class="mb-1"><i class="ri-check-line icon-green"></i> ${g}</li>`).join('')}</ul>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      <a href="#contacto" class="btn btn-${servico.cor}">Solicitar Orçamento</a>
    </div>
  `;

  document.getElementById('detalhesContent').innerHTML = detalhes;
  const modal = new bootstrap.Modal(document.getElementById('detalhesModal'));
  modal.show();
}

// Eventos
document.addEventListener('DOMContentLoaded', function() {
  // Tabs
  document.querySelectorAll('#servicosTab .nav-link').forEach(tab => {
    tab.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelectorAll('#servicosTab .nav-link').forEach(t => t.classList.remove('active'));
      this.classList.add('active');
      state.categoriaAtual = this.dataset.categoria;
      aplicarFiltros();
    });
  });

  // Busca
  document.getElementById('searchInput').addEventListener('input', aplicarFiltros);

  // Mais itens
  document.getElementById('moreItemsBtn').addEventListener('click', () => {
    state.itensPorPagina += 6;
    renderServicos();
  });

  // Paginação
  document.getElementById('paginacao').addEventListener('click', function(e) {
    e.preventDefault();
    const link = e.target.closest('.page-link');
    if (link && link.dataset.pag) {
      state.paginaAtual = parseInt(link.dataset.pag);
      renderServicos();
      window.scrollTo({top: document.getElementById('servicosContent').offsetTop - 100, behavior: 'smooth'});
    }
  });

  // Inicial
  state.servicosFiltrados = SERVICOS_DATA.all;
  renderServicos();
});
</script>
