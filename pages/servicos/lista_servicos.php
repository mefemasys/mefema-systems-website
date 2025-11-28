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
    min-height: 400px;
    display: flex;
    flex-direction: column;
  }

  /* Corpo do card */
  .card-body {
    flex-grow: 1;
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
</style>

<section class="py-5" id="servicosContent">
  <div class="container">

    <!-- ===================== TABS ===================== -->
    <ul class="nav nav-tabs nav-tabs-clean justify-content-center mb-5" id="servicosTab">
      <li class="nav-item">
        <button class="nav-link active px-4 py-3" data-bs-toggle="tab" data-bs-target="#desenvolvimento" onclick="mudarCategoria('desenvolvimento')">
          <i class="ri-code-box-line me-2"></i>
          Desenvolvimento de Software
        </button>
      </li>

      <li class="nav-item">
        <button class="nav-link px-4 py-3" data-bs-toggle="tab" data-bs-target="#infraestrutura" onclick="mudarCategoria('infraestrutura')">
          <i class="ri-server-line me-2"></i>
          Infraestrutura e Segurança
        </button>
      </li>

      <li class="nav-item">
        <button class="nav-link px-4 py-3" data-bs-toggle="tab" data-bs-target="#consultoria" onclick="mudarCategoria('consultoria')">
          <i class="ri-lightbulb-line me-2"></i>
          Consultoria e Formação
        </button>
      </li>
    </ul>

    <div class="tab-content">

      <!-- ============================================================= -->
      <!-- ===================== DESENVOLVIMENTO ======================= -->
      <!-- ============================================================= -->
      <div class="tab-pane fade show active" id="desenvolvimento">
        
        <div class="row g-4" id="desenvolvimentoContent"></div>

        <!-- PAGINAÇÃO -->
        <nav class="mt-5">
          <ul class="pagination justify-content-center pagination-clean" id="desenvolvimentoPagination"></ul>
        </nav>

        <!-- LISTA DE SERVIÇOS -->
        <div class="mt-5">
          <h5 class="mb-3">Todos os Serviços de Desenvolvimento</h5>
          <ul class="list-group" id="desenvolvimentoList"></ul>
        </div>

      </div>

      <!-- ============================================================= -->
      <!-- ===================== INFRAESTRUTURA ======================== -->
      <!-- ============================================================= -->
      <div class="tab-pane fade" id="infraestrutura">
        
        <div class="row g-4" id="infraestruturaContent"></div>

        <nav class="mt-5">
          <ul class="pagination justify-content-center pagination-clean" id="infraestruturaPagination"></ul>
        </nav>

        <div class="mt-5">
          <h5 class="mb-3">Todos os Serviços de Infraestrutura</h5>
          <ul class="list-group" id="infraestruturaList"></ul>
        </div>

      </div>

      <!-- ============================================================= -->
      <!-- ===================== CONSULTORIA =========================== -->
      <!-- ============================================================= -->
      <div class="tab-pane fade" id="consultoria">
        
        <div class="row g-4" id="consultoriaContent"></div>

        <nav class="mt-5">
          <ul class="pagination justify-content-center pagination-clean" id="consultoriaPagination"></ul>
        </nav>

        <div class="mt-5">
          <h5 class="mb-3">Todos os Serviços de Consultoria</h5>
          <ul class="list-group" id="consultoriaList"></ul>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- Modal de Detalhes -->
<div class="modal fade" id="detalhesModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" id="detalhesContent"></div>
  </div>
</div>

<script>
// Dados dos serviços
const servicos = {
  desenvolvimento: [
    {
      nome: 'Aplicações Web e Móveis',
      descricao: 'Desenvolvimento de aplicações personalizadas, responsivas e intuitivas para web (Progressive Web Apps) e plataformas móveis (Android/iOS).',
      icone: 'ri-smartphone-line',
      cor: 'orange',
      prazo: '2-6 meses',
      garantia: '12 meses',
      modoTrabalho: [
        'Metodologia Ágil (Scrum)',
        'Sprints quinzenais com demos',
        'Testes contínuos (QA)',
        'Implantação progressiva'
      ],
      garantias: [
        'Correcção de bugs sem custos',
        'Actualizações de segurança',
        'Documentação técnica completa',
        'Formação de utilizadores'
      ]
    },
    {
      nome: 'Sistemas ERP Simplificados',
      descricao: 'Sistemas de gestão empresarial adaptados à realidade das PMEs, integrando finanças, stocks, vendas, RH e relatórios.',
      icone: 'ri-dashboard-line',
      cor: 'blue',
      prazo: '3-8 meses',
      garantia: '24 meses',
      modoTrabalho: [
        'Levantamento de requisitos (2 semanas)',
        'Desenvolvimento modular',
        'Testes em ambiente de homologação',
        'Migração de dados assistida'
      ],
      garantias: [
        'Suporte técnico prioritário',
        'Backup automático diário',
        'Personalizações incluídas (até 3)',
        'Formação completa da equipa'
      ]
    },
    {
      nome: 'Plataformas de E-commerce',
      descricao: 'Lojas online completas com catálogo, carrinho, pagamento integrado (M-Pesa, Visa), gestão de encomendas e painel administrativo.',
      icone: 'ri-shopping-cart-line',
      cor: 'green',
      prazo: '1-4 meses',
      garantia: '12 meses',
      modoTrabalho: [
        'Análise de concorrentes',
        'Design responsivo',
        'Integração de pagamentos',
        'Otimização SEO'
      ],
      garantias: [
        'Certificado SSL incluído',
        'Hospedagem por 1 ano',
        'Suporte técnico 24/7',
        'Atualizações de segurança'
      ]
    },
    {
      nome: 'Websites Corporativos',
      descricao: 'Sites institucionais modernos e profissionais com design personalizado e sistema de gestão de conteúdo.',
      icone: 'ri-global-line',
      cor: 'brown',
      prazo: '2-6 semanas',
      garantia: '12 meses',
      modoTrabalho: [
        'Briefing e wireframes',
        'Design personalizado',
        'Desenvolvimento responsivo',
        'Optimização SEO'
      ],
      garantias: [
        'Hospedagem incluída (1 ano)',
        'SSL gratuito',
        'Backups automáticos',
        'Suporte técnico'
      ]
    }
  ],
  infraestrutura: [
    {
      nome: 'Hospedagem em Cloud',
      descricao: 'Infraestrutura escalável em cloud (AWS, Azure, Google Cloud), com alta disponibilidade, backup automático e suporte 24/7.',
      icone: 'ri-cloud-line',
      cor: 'orange',
      prazo: '1-2 semanas',
      garantia: 'SLA 99.9%',
      modoTrabalho: [
        'Avaliação de requisitos',
        'Configuração de infraestrutura',
        'Migração de dados',
        'Monitoramento contínuo'
      ],
      garantias: [
        'Backup automático diário',
        'Disaster recovery',
        'Suporte técnico 24/7',
        'Escalabilidade automática'
      ]
    },
    {
      nome: 'Cibersegurança e Proteção de Dados',
      descricao: 'Implementação de firewalls, detecção de intrusões, encriptação de dados, conformidade GDPR e testes de penetração.',
      icone: 'ri-shield-lock-line',
      cor: 'blue',
      prazo: '2-4 semanas',
      garantia: 'ISO 27001',
      modoTrabalho: [
        'Avaliação de vulnerabilidades',
        'Implementação de controles',
        'Testes de penetração',
        'Monitoramento 24/7'
      ],
      garantias: [
        'Relatório de segurança trimestral',
        'Resposta a incidentes 24/7',
        'Atualizações de segurança',
        'Conformidade regulatória'
      ]
    },
    {
      nome: 'Backup e Recuperação de Dados',
      descricao: 'Soluções completas de backup, armazenamento redundante, recuperação de desastres e testes periódicos de restauração.',
      icone: 'ri-save-line',
      cor: 'green',
      prazo: '1-2 semanas',
      garantia: 'RTO < 4h',
      modoTrabalho: [
        'Análise de dados críticos',
        'Configuração de rotinas automáticas',
        'Testes mensais de restauração',
        'Encriptação de dados'
      ],
      garantias: [
        'Retenção de 30 dias',
        'Armazenamento redundante',
        'Restauração prioritária',
        'Relatórios mensais'
      ]
    }
  ],
  consultoria: [
    {
      nome: 'Estratégia de Transformação Digital',
      descricao: 'Consultoria estratégica para modernização digital, análise de maturidade tecnológica, roadmap de implementação e gestão de mudança.',
      icone: 'ri-line-chart-line',
      cor: 'orange',
      prazo: '4-8 semanas',
      garantia: '3-5 documentos',
      modoTrabalho: [
        'Diagnóstico da situação actual',
        'Workshops com stakeholders',
        'Elaboração de roadmap',
        'Acompanhamento de implementação'
      ],
      garantias: [
        'Relatório executivo detalhado',
        'Plano de acção prioritizado',
        'Análise de ROI',
        '3 sessões de follow-up'
      ]
    },
    {
      nome: 'Auditoria de Sistemas',
      descricao: 'Avaliação completa da infraestrutura de TI, análise de segurança, performance, conformidade e recomendações de melhorias.',
      icone: 'ri-search-eye-line',
      cor: 'blue',
      prazo: '2-4 semanas',
      garantia: 'Completo',
      modoTrabalho: [
        'Inventário de recursos',
        'Testes de segurança',
        'Análise de vulnerabilidades',
        'Relatório com recomendações'
      ],
      garantias: [
        'Relatório técnico completo',
        'Lista de vulnerabilidades',
        'Plano de remediação',
        'Apresentação executiva'
      ]
    },
    {
      nome: 'Gestão de Projectos Tecnológicos',
      descricao: 'Planeamento, coordenação e acompanhamento de projectos de TI, gestão de equipas, controlo de prazos e orçamentos.',
      icone: 'ri-briefcase-line',
      cor: 'green',
      prazo: 'Conforme projecto',
      garantia: 'Ágil/PMI',
      modoTrabalho: [
        'Definição de escopo e cronograma',
        'Reuniões semanais de status',
        'Gestão de riscos e mudanças',
        'Relatórios periódicos'
      ],
      garantias: [
        'Documentação de projecto',
        'Controlo de custos',
        'Gestão de stakeholders',
        'Lições aprendidas'
      ]
    },
    {
      nome: 'Formação Corporativa',
      descricao: 'Capacitação em literacia digital, ferramentas de produtividade, cibersegurança, IA e tecnologias específicas para equipas.',
      icone: 'ri-graduation-cap-line',
      cor: 'brown',
      prazo: '1-5 dias',
      garantia: 'Presencial/Online',
      modoTrabalho: [
        'Avaliação de necessidades',
        'Conteúdo personalizado',
        'Sessões práticas e teóricas',
        'Avaliação de conhecimentos'
      ],
      garantias: [
        'Material didáctico',
        'Certificado de participação',
        'Suporte pós-formação (30 dias)',
        'Sessões de follow-up'
      ]
    }
  ]
};

// Estado da paginação
let paginaAtual = {
  desenvolvimento: 1,
  infraestrutura: 1,
  consultoria: 1
};

const itensPorPagina = 2;

// Função para gerar card de serviço
function gerarCard(servico, index, categoria) {
  return `
    <div class="col-md-6 col-lg-6">
      <div class="card shadow-sm border-0 hover-shadow-lg transition-300 service-card">
        
        <div class="card-body p-4">
          <div class="d-flex align-items-center mb-3">
            <div class="icon-box icon-${servico.cor} me-3">
              <i class="${servico.icone} fs-3"></i>
            </div>
            <h4 class="mb-0 fw-bold">${servico.nome}</h4>
          </div>

          <p class="text-muted small mb-3">
            ${servico.descricao}
          </p>

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
              ${servico.modoTrabalho.slice(0, 2).map(m => `<li class="mb-1"><i class="ri-arrow-right-s-line icon-${servico.cor}"></i> ${m}</li>`).join('')}
            </ul>
          </div>

        </div>

        <div class="card-footer text-center border-0 pb-4">
          <a href="#contacto" class="btn btn-${servico.cor} btn-sm px-4 me-2">Solicitar</a>
          <a href="#" class="btn btn-outline-${servico.cor} btn-sm px-4" onclick="verDetalhes('${categoria}', ${index}); return false;">Detalhes</a>
        </div>

      </div>
    </div>
  `;
}

// Função para renderizar serviços
function renderizarServicos(categoria, pagina) {
  const servicosCategoria = servicos[categoria];
  const inicio = (pagina - 1) * itensPorPagina;
  const fim = inicio + itensPorPagina;
  const servicosPagina = servicosCategoria.slice(inicio, fim);

  const content = document.getElementById(`${categoria}Content`);
  content.innerHTML = servicosPagina.map((s, i) => gerarCard(s, inicio + i, categoria)).join('');
}

// Função para renderizar paginação
function renderizarPaginacao(categoria) {
  const totalPaginas = Math.ceil(servicos[categoria].length / itensPorPagina);
  const paginacao = document.getElementById(`${categoria}Pagination`);
  
  let html = '';
  
  if (paginaAtual[categoria] > 1) {
    html += `<li class="page-item">
      <a class="page-link" href="#" onclick="mudarPagina('${categoria}', ${paginaAtual[categoria] - 1}); return false;">Anterior</a>
    </li>`;
  } else {
    html += `<li class="page-item disabled">
      <span class="page-link">Anterior</span>
    </li>`;
  }
  
  for (let i = 1; i <= totalPaginas; i++) {
    if (i === paginaAtual[categoria]) {
      html += `<li class="page-item active">
        <span class="page-link">${i}</span>
      </li>`;
    } else {
      html += `<li class="page-item">
        <a class="page-link" href="#" onclick="mudarPagina('${categoria}', ${i}); return false;">${i}</a>
      </li>`;
    }
  }
  
  if (paginaAtual[categoria] < totalPaginas) {
    html += `<li class="page-item">
      <a class="page-link" href="#" onclick="mudarPagina('${categoria}', ${paginaAtual[categoria] + 1}); return false;">Próximo</a>
    </li>`;
  } else {
    html += `<li class="page-item disabled">
      <span class="page-link">Próximo</span>
    </li>`;
  }
  
  paginacao.innerHTML = html;
}

// Função para renderizar lista de serviços
function renderizarLista(categoria) {
  const lista = document.getElementById(`${categoria}List`);
  lista.innerHTML = servicos[categoria].map((s, i) => `
    <li class="list-group-item d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="${s.icone} icon-${s.cor} me-3 fs-4"></i>
        <div>
          <strong>${s.nome}</strong>
          <small class="d-block text-muted">${s.descricao.substring(0, 80)}...</small>
        </div>
      </div>
      <a href="#" class="btn btn-sm btn-outline-${s.cor}" onclick="verDetalhes('${categoria}', ${i}); return false;">Ver</a>
    </li>
  `).join('');
}

// Função para mudar página
function mudarPagina(categoria, pagina) {
  paginaAtual[categoria] = pagina;
  renderizarServicos(categoria, pagina);
  renderizarPaginacao(categoria);
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Função para mudar categoria
function mudarCategoria(categoria) {
  renderizarServicos(categoria, paginaAtual[categoria]);
  renderizarPaginacao(categoria);
  renderizarLista(categoria);
}

// Função para ver detalhes
function verDetalhes(categoria, index) {
  const servico = servicos[categoria][index];
  
  const detalhes = `
    <div class="modal-header">
      <h5 class="modal-title">
        <i class="${servico.icone} icon-${servico.cor} me-2"></i>
        ${servico.nome}
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
      <p class="text-muted mb-4">${servico.descricao}</p>
      
      <div class="row g-3 mb-4">
        <div class="col-6">
          <div class="d-flex align-items-center">
            <i class="ri-time-line icon-${servico.cor} me-2"></i>
            <div>
              <small class="text-muted d-block">Prazo Médio</small>
              <strong>${servico.prazo}</strong>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="d-flex align-items-center">
            <i class="ri-shield-check-line icon-green me-2"></i>
            <div>
              <small class="text-muted d-block">Garantia</small>
              <strong>${servico.garantia}</strong>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-light p-3 mb-3 border-start border-3 border-${servico.cor === 'orange' ? 'warning' : servico.cor === 'blue' ? 'primary' : servico.cor === 'green' ? 'success' : 'secondary'}">
        <h6 class="fw-bold mb-2"><i class="ri-tools-line icon-${servico.cor} me-2"></i>Modo de Trabalho</h6>
        <ul class="list-unstyled mb-0">
          ${servico.modoTrabalho.map(m => `<li class="mb-1"><i class="ri-arrow-right-s-line icon-${servico.cor}"></i> ${m}</li>`).join('')}
        </ul>
      </div>

      <div class="bg-light p-3 border-start border-3 border-success">
        <h6 class="fw-bold mb-2"><i class="ri-checkbox-circle-line icon-green me-2"></i>Garantias Incluídas</h6>
        <ul class="list-unstyled mb-0">
          ${servico.garantias.map(g => `<li class="mb-1"><i class="ri-check-line icon-green"></i> ${g}</li>`).join('')}
        </ul>
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

// Inicializar ao carregar
document.addEventListener('DOMContentLoaded', function() {
  mudarCategoria('desenvolvimento');
  mudarCategoria('infraestrutura');
  mudarCategoria('consultoria');
});
</script>
