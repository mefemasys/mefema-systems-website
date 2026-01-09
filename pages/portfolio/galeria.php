<style>
  :root {
    --color-bronze: #CD7F32;
    --color-brown: #8B5A2B;
    --color-orange: #FF8C00;
    --bg-light: #ffffff;
    --bg-gallery: #f8f5f0;
    --text-dark: #2d2d2d;
    --border-light: #e5e5e5;
  }

  #portfolioGallery {
    padding: 80px 0;
    background-color: var(--bg-gallery);
  }

  .section-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
  }

  .section-header p {
    font-size: 1.1rem;
    color: #666;
  }

  /* Filtros */
  .filter-controls {
    display: flex;
    justify-content: center;
    gap: 0.75rem;
    flex-wrap: wrap;
    margin-bottom: 3rem;
  }

  .filter-btn {
    padding: 0.6rem 1.5rem;
    border: 2px solid var(--border-light);
    background: var(--bg-light);
    color: var(--text-dark);
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .filter-btn:hover {
    border-color: var(--color-bronze);
    color: var(--color-bronze);
    background: rgba(205, 127, 50, 0.05);
  }

  .filter-btn.active {
    background-color: var(--color-bronze);
    color: white;
    border-color: var(--color-bronze);
  }

  /* Cards */
  .portfolio-card {
    background: var(--bg-light);
    border: 1px solid var(--border-light);
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .portfolio-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
    border-color: var(--color-bronze);
  }

  .card-image {
    height: 220px;
    background: #f5f5f5;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
  }

  .card-image i {
    font-size: 4rem;
    color: var(--color-bronze);
    opacity: 0.15;
  }

  .card-badges {
    position: absolute;
    top: 1rem;
    left: 1rem;
    right: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
  }

  .badge-category {
    background-color: var(--color-bronze);
    color: white;
    padding: 0.4rem 0.9rem;
    font-size: 0.85rem;
    font-weight: 600;
  }

  .badge-rating {
    background: white;
    color: var(--color-orange);
    padding: 0.4rem 0.9rem;
    font-size: 0.85rem;
    font-weight: 600;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

  .card-body {
    padding: 1.5rem;
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .card-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.75rem;
  }

  .card-description {
    font-size: 0.95rem;
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.25rem;
    flex: 1;
  }

  .card-meta {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid var(--border-light);
  }

  .meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9rem;
    color: #666;
  }

  .meta-item i {
    color: var(--color-bronze);
  }

  .card-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.4rem;
    margin-bottom: 1.25rem;
  }

  .tag {
    background: #f5f5f5;
    color: var(--text-dark);
    padding: 0.3rem 0.7rem;
    font-size: 0.8rem;
    border: 1px solid var(--border-light);
  }

  .card-action {
    background-color: var(--color-bronze);
    color: white;
    padding: 0.75rem;
    border: none;
    font-weight: 600;
    transition: all 0.3s ease;
    cursor: pointer;
    width: 100%;
  }

  .card-action:hover {
    background-color: #b36b2a;
    box-shadow: 0 4px 12px rgba(205, 127, 50, 0.3);
  }

  /* Paginação */
  .pagination-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    margin-top: 3rem;
  }

  .pagination-info {
    color: #666;
    font-size: 0.95rem;
  }

  .page-btn {
    width: 40px;
    height: 40px;
    border: 2px solid var(--border-light);
    background: var(--bg-light);
    color: var(--text-dark);
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .page-btn:hover:not(:disabled) {
    border-color: var(--color-bronze);
    color: var(--color-bronze);
  }

  .page-btn.active {
    background-color: var(--color-bronze);
    color: white;
    border-color: var(--color-bronze);
  }

  .page-btn:disabled {
    opacity: 0.3;
    cursor: not-allowed;
  }

  /* Animações */
  .portfolio-item {
    animation: fadeIn 0.5s ease;
  }

  @keyframes fadeIn {
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
    .section-header h2 {
      font-size: 2rem;
    }

    .filter-controls {
      gap: 0.5rem;
    }

    .filter-btn {
      padding: 0.5rem 1rem;
      font-size: 0.9rem;
    }
  }

  @media (prefers-color-scheme: dark) {
    :root {
      --bg-gallery: var(--bg-dark);
      --bg-light: #2d2d2d;
      --text-dark: #f5f5f5;
      --border-light: #404040;
    }

    .card-image {
      background: #252525;
    }

    .tag {
      background: #353535;
      border-color: #404040;
    }
  }
</style>

<section id="portfolioGallery">
  <div class="container">
    <!-- Cabeçalho -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center section-header">
        <h2>Galeria de Projectos</h2>
        <p>Visualize todos os nossos trabalhos organizados por categoria</p>
      </div>
    </div>

    <!-- Filtros -->
    <div class="filter-controls">
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
    <div class="row g-4" id="portfolioGrid"></div>

    <!-- Paginação -->
    <div class="pagination-wrapper">
      <button class="page-btn" id="prevBtn" disabled>
        <i class="ri-arrow-left-line"></i>
      </button>

      <div class="pagination-info">
        <span id="currentPage">1</span> de <span id="totalPages">1</span>
      </div>

      <button class="page-btn" id="nextBtn">
        <i class="ri-arrow-right-line"></i>
      </button>
    </div>
  </div>
</section>

<script>
  // Dados de exemplo – substitui por PHP real no teu projeto
  const portfolioData = [
    {
      title: 'Sistema de Gestão Empresarial',
      description: 'Plataforma web completa para gestão de recursos empresariais com módulos integrados',
      category: 'dev',
      type: 'Desenvolvimento Web',
      client: 'Empresa XYZ',
      date: '2024-01-15',
      rating: '4.8',
      tags: ['Laravel', 'Vue.js', 'MySQL'],
      icon: 'ri-code-box-line'
    },
    {
      title: 'Infraestrutura Cloud AWS',
      description: 'Migração e configuração de infraestrutura empresarial para ambiente cloud',
      category: 'infra',
      type: 'Infraestrutura',
      client: 'Tech Corp',
      date: '2024-02-20',
      rating: '5.0',
      tags: ['AWS', 'Docker', 'Kubernetes'],
      icon: 'ri-server-line'
    },
    {
      title: 'Consultoria em Transformação Digital',
      description: 'Análise e implementação de estratégias de transformação digital',
      category: 'consult',
      type: 'Consultoria',
      client: 'Business Inc',
      date: '2024-03-10',
      rating: '4.9',
      tags: ['Estratégia', 'Inovação', 'Processos'],
      icon: 'ri-lightbulb-line'
    },
    {
      title: 'App Mobile E-commerce',
      description: 'Aplicação mobile nativa para plataforma de comércio electrónico',
      category: 'dev',
      type: 'Desenvolvimento Mobile',
      client: 'Shop Online',
      date: '2024-04-05',
      rating: '4.7',
      tags: ['React Native', 'Node.js', 'MongoDB'],
      icon: 'ri-smartphone-line'
    },
    {
      title: 'Rede Empresarial Segura',
      description: 'Implementação de rede empresarial com segurança avançada',
      category: 'infra',
      type: 'Infraestrutura',
      client: 'Secure Corp',
      date: '2024-05-12',
      rating: '4.9',
      tags: ['Networking', 'Security', 'Firewall'],
      icon: 'ri-shield-line'
    },
    {
      title: 'Auditoria de Sistemas',
      description: 'Auditoria completa de sistemas e processos de TI',
      category: 'consult',
      type: 'Consultoria',
      client: 'Audit Plus',
      date: '2024-06-18',
      rating: '5.0',
      tags: ['Auditoria', 'Compliance', 'ISO'],
      icon: 'ri-file-list-line'
    },
    {
      title: 'Portal Institucional',
      description: 'Website institucional com design moderno e CMS personalizado',
      category: 'dev',
      type: 'Desenvolvimento Web',
      client: 'Instituição ABC',
      date: '2024-07-22',
      rating: '4.8',
      tags: ['WordPress', 'PHP', 'JavaScript'],
      icon: 'ri-global-line'
    },
    {
      title: 'Backup e Disaster Recovery',
      description: 'Solução completa de backup e recuperação de desastres',
      category: 'infra',
      type: 'Infraestrutura',
      client: 'Data Safe',
      date: '2024-08-30',
      rating: '4.9',
      tags: ['Backup', 'Cloud', 'Recovery'],
      icon: 'ri-hard-drive-line'
    },
    {
      title: 'Optimização de Processos',
      description: 'Consultoria para optimização de processos de negócio',
      category: 'consult',
      type: 'Consultoria',
      client: 'Process Pro',
      date: '2024-09-14',
      rating: '4.7',
      tags: ['BPM', 'Lean', 'Automação'],
      icon: 'ri-settings-line'
    }
  ];

  let currentFilter = 'all';
  let currentPage = 1;
  const itemsPerPage = 6;

  function getFilteredData() {
    if (currentFilter === 'all') return portfolioData;
    return portfolioData.filter(item => item.category === currentFilter);
  }

  function renderProjects() {
    const filteredData = getFilteredData();
    const totalPages = Math.ceil(filteredData.length / itemsPerPage);
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const pageData = filteredData.slice(startIndex, endIndex);

    const grid = document.getElementById('portfolioGrid');
    grid.innerHTML = '';

    pageData.forEach((project, index) => {
      const col = document.createElement('div');
      col.className = 'col-lg-4 col-md-6 portfolio-item';
      col.style.animationDelay = `${index * 0.1}s`;

      col.innerHTML = `
        <div class="portfolio-card">
          <div class="card-image">
            <i class="${project.icon}"></i>
            <div class="card-badges">
              <span class="badge-category">
                <i class="${project.icon} me-1"></i>${project.type}
              </span>
              <span class="badge-rating">
                <i class="ri-star-fill"></i> ${project.rating}
              </span>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">${project.title}</h5>
            <p class="card-description">${project.description}</p>

            <div class="card-meta">
              <div class="meta-item">
                <i class="ri-building-line"></i>
                <span><strong>${project.client}</strong></span>
              </div>
              <div class="meta-item">
                <i class="ri-calendar-line"></i>
                <span>${new Date(project.date).toLocaleDateString('pt-PT')}</span>
              </div>
            </div>

            <div class="card-tags">
              ${project.tags.map(tag => `<span class="tag">${tag}</span>`).join('')}
            </div>

            <button class="card-action">
              <i class="ri-arrow-right-line me-2"></i>Ver Detalhes
            </button>
          </div>
        </div>
      `;

      grid.appendChild(col);
    });

    updatePagination(totalPages);
  }

  function updatePagination(totalPages) {
    document.getElementById('currentPage').textContent = currentPage;
    document.getElementById('totalPages').textContent = totalPages;
    document.getElementById('prevBtn').disabled = currentPage === 1;
    document.getElementById('nextBtn').disabled = currentPage === totalPages || totalPages === 0;
  }

  // Eventos
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      currentFilter = btn.dataset.filter;
      currentPage = 1;
      renderProjects();
    });
  });

  document.getElementById('prevBtn').addEventListener('click', () => {
    if (currentPage > 1) {
      currentPage--;
      renderProjects();
      window.scrollTo({ top: document.getElementById('portfolioGallery').offsetTop - 100, behavior: 'smooth' });
    }
  });

  document.getElementById('nextBtn').addEventListener('click', () => {
    const totalPages = Math.ceil(getFilteredData().length / itemsPerPage);
    if (currentPage < totalPages) {
      currentPage++;
      renderProjects();
      window.scrollTo({ top: document.getElementById('portfolioGallery').offsetTop - 100, behavior: 'smooth' });
    }
  });

  // Inicializar
  renderProjects();
</script>
