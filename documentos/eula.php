<?php 
$pageTitle = "Termos de Uso do Sistema SaaS - Mefema Systems"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>

<style>
  :root {
    --brand-brown: #5D4037;
    --brand-brown-light: #8D6E63;
    --brand-orange: #FF8F00;
    --brand-orange-light: #FFB74D;
    --bg-light: #FFF8F0;
    --border-color: rgba(93, 64, 55, 0.15);
  }

  /* Hero Section */
  .legal-hero {
    background: linear-gradient(135deg, var(--brand-brown) 0%, #3E2723 100%);
    padding: 5rem 0 3rem;
    color: white;
    position: relative;
    overflow: hidden;
  }

  .legal-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(255, 143, 0, 0.15) 0%, transparent 70%);
    border-radius: 50%;
  }

  .legal-hero .badge {
    background: rgba(255, 143, 0, 0.2) !important;
    color: var(--brand-orange-light) !important;
    border: 1px solid rgba(255, 143, 0, 0.3);
  }

  .legal-hero h1 {
    color: white;
    font-weight: 700;
  }

  .legal-hero .opacity-75 {
    color: rgba(255, 255, 255, 0.75) !important;
  }

  /* Sidebar */
  .sidebar-sticky {
    position: sticky;
    top: 100px;
  }

  .sidebar-nav {
   /* background: white;*/
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(93, 64, 55, 0.1);
    border: 1px solid var(--border-color);
  }

  .sidebar-nav .card-title {
    color: var(--brand-brown);
    font-weight: 600;
    border-bottom: 2px solid var(--brand-orange);
    padding-bottom: 0.75rem;
  }

  .sidebar-nav .nav-link {
    color: var(--brand-brown-light);
    transition: all 0.3s ease;
    border-left: 3px solid transparent;
    padding: 0.5rem 1rem;
  }

  .sidebar-nav .nav-link:hover,
  .sidebar-nav .nav-link.active {
    color: var(--brand-orange);
    background: var(--bg-light);
    border-left-color: var(--brand-orange);
    transform: translateX(5px);
  }

  /* Content Card */
  .content-card {
   /* background: white;*/
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(93, 64, 55, 0.1);
    border: 1px solid var(--border-color);
  }

  .content-card h2 {
    color: var(--brand-brown);
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding-bottom: 1rem;
    border-bottom: 3px solid var(--brand-orange);
  }

  .content-card h2 i {
    color: var(--brand-orange);
  }

  .content-card h5,
  .content-card h6 {
    color: var(--brand-brown);
  }

  /* Alert Boxes */
  .alert-brand-info {
    background: var(--bg-light);
    border-left: 4px solid var(--brand-orange);
    border-radius: 8px;
    color: var(--brand-brown);
  }

  .alert-brand-info .alert-heading {
    color: var(--brand-brown);
    font-weight: 600;
  }

  .alert-brand-info i {
    color: var(--brand-orange);
  }

  .alert-brand-warning {
    background: rgba(255, 143, 0, 0.08);
    border-left: 4px solid var(--brand-orange);
    border-radius: 8px;
    color: var(--brand-brown);
  }

  .alert-brand-success {
    background: rgba(93, 64, 55, 0.05);
    border-left: 4px solid var(--brand-brown);
    border-radius: 8px;
    color: var(--brand-brown);
  }

  /* Warning Card */
  .warning-card {
    background: rgba(255, 143, 0, 0.1);
    border: 2px solid var(--brand-orange);
    border-radius: 12px;
    padding: 1.5rem;
  }

  .warning-card h6 {
    color: var(--brand-brown);
    font-weight: 600;
  }

  /* Accordion */
  .accordion-custom .accordion-item {
    border: 1px solid var(--border-color);
    margin-bottom: 0.5rem;
    border-radius: 8px;
    overflow: hidden;
  }

  .accordion-custom .accordion-button {
    background: var(--bg-light);
    color: var(--brand-brown);
    font-weight: 600;
  }

  .accordion-custom .accordion-button:not(.collapsed) {
    background: var(--brand-orange);
    color: white;
  }

  .accordion-custom .accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(255, 143, 0, 0.25);
  }

  .accordion-custom .accordion-button i {
    color: var(--brand-orange);
  }

  .accordion-custom .accordion-button:not(.collapsed) i {
    color: white;
  }

  /* License Card */
  .license-card {
    background: linear-gradient(135deg, rgba(255, 143, 0, 0.1) 0%, rgba(93, 64, 55, 0.05) 100%);
    border: 2px solid var(--brand-orange);
    border-radius: 12px;
    padding: 1.5rem;
  }

  .license-card h5 {
    color: var(--brand-brown);
    font-weight: 600;
    margin-bottom: 1rem;
  }

  .license-card i {
    color: var(--brand-orange);
  }

  /* Restriction Cards */
  .restriction-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
  }

  .restriction-card {
   /* background: white;*/
    border: 1px solid var(--border-color);
    border-left: 4px solid #B71C1C;
    border-radius: 8px;
    padding: 1.25rem;
    transition: all 0.3s ease;
    height: 100%;
  }

  .restriction-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(183, 28, 28, 0.2);
  }

  .restriction-card .card-header {
    display: flex;
    align-items: center;
    margin-bottom: 0.75rem;
  }

  .restriction-card .card-header i {
    color: #B71C1C;
    font-size: 1.8rem;
    margin-right: 1rem;
  }

  .restriction-card .card-header h6 {
    color: var(--brand-brown);
    font-weight: 600;
    margin: 0;
  }

  /* Property Cards */
  .property-card {
   /* background: white;*/
    border: 2px solid var(--brand-orange);
    border-radius: 12px;
    padding: 2rem;
    text-align: center;
    height: 100%;
    transition: all 0.3s ease;
  }

  .property-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(255, 143, 0, 0.2);
  }

  .property-card i {
    color: var(--brand-orange);
    font-size: 4rem;
  }

  .property-card h5 {
    color: var(--brand-brown);
    font-weight: 600;
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  /* Responsibility Cards */
  .responsibility-card {
   /* background: white;*/
    border: 1px solid var(--border-color);
    border-left: 4px solid var(--brand-orange);
    border-radius: 8px;
    padding: 1.25rem;
  }

  .responsibility-card h6 {
    color: var(--brand-brown);
    font-weight: 600;
    margin-bottom: 0.75rem;
  }

  .responsibility-card i {
    color: var(--brand-orange);
  }

  /* SLA Card */
  .sla-card {
    background: var(--bg-light);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 2rem;
  }

  .sla-card h5 {
    color: var(--brand-brown);
    font-weight: 600;
    margin-bottom: 1rem;
  }

  .sla-card i {
    color: var(--brand-orange);
  }

  /* Danger Card */
  .danger-card {
    background: rgba(183, 28, 28, 0.05);
    border: 2px solid #B71C1C;
    border-radius: 12px;
    padding: 1.5rem;
  }

  .danger-card h6 {
    color: #B71C1C;
    font-weight: 600;
    margin-bottom: 1rem;
  }

  /* Final Provisions */
  .provision-card {
   /* background: white;*/
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 1.5rem;
    text-align: center;
    height: 100%;
    transition: all 0.3s ease;
  }

  .provision-card:hover {
    border-color: var(--brand-orange);
    box-shadow: 0 4px 12px rgba(255, 143, 0, 0.2);
  }

  .provision-card i {
    color: var(--brand-orange);
    font-size: 2.5rem;
  }

  .provision-card h6 {
    color: var(--brand-brown);
    font-weight: 600;
    margin-top: 1rem;
    margin-bottom: 0.5rem;
  }

  /* Buttons */
  .btn-brand-primary {
    background: var(--brand-orange);
    border-color: var(--brand-orange);
    color: white;
  }

  .btn-brand-primary:hover {
    background: var(--brand-brown);
    border-color: var(--brand-brown);
    color: white;
  }

  .btn-brand-success {
    background: transparent;
    border: 2px solid var(--brand-brown);
    color: var(--brand-brown);
  }

  .btn-brand-success:hover {
    background: var(--brand-brown);
    border-color: var(--brand-brown);
    color: white;
  }

  /* Divider */
  .divider-brand {
    border-top: 2px solid var(--border-color);
    margin: 3rem 0;
    position: relative;
  }

  .divider-brand::before {
    content: '';
    position: absolute;
    top: -2px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, transparent, var(--brand-orange), transparent);
  }

  @media (max-width: 992px) {
    .sidebar-sticky {
      position: relative;
      top: 0;
    }
  }
</style>

<!-- Hero Section -->
<section class="legal-hero">
  <div class="container position-relative">
    <div class="text-center">
      <span class="badge mb-3 px-3 py-2">
        <i class="ri-cloud-line me-2"></i>Sistema de Gestão
      </span>
      <h1 class="display-4 mb-3">Termos de Uso do Sistema SaaS</h1>
      <p class="lead mb-2">Software como Serviço (SaaS) da Mefema Systems, LDA</p>
      <p class="opacity-75">
        <i class="ri-calendar-line me-2"></i>Última Revisão: 13 de Novembro de 2025
        <span class="mx-2">|</span>
        <i class="ri-file-text-line me-2"></i>Versão 1.0
      </p>
    </div>
  </div>
</section>

<!-- Conteúdo Principal -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-lg-3 mb-4 mb-lg-0">
        <div class="sidebar-sticky">
          <div class="sidebar-nav card">
            <div class="card-body">
              <h6 class="card-title mb-3">Índice</h6>
              <nav class="nav flex-column">
                <a class="nav-link active" href="#aceitacao">
                  <i class="ri-checkbox-circle-line me-1"></i>Aceitação
                </a>
                <a class="nav-link" href="#definicoes">
                  <i class="ri-book-open-line me-1"></i>Definições
                </a>
                <a class="nav-link" href="#licenca">
                  <i class="ri-key-2-line me-1"></i>Licença
                </a>
                <a class="nav-link" href="#propriedade">
                  <i class="ri-copyright-line me-1"></i>Propriedade
                </a>
                <a class="nav-link" href="#responsabilidades">
                  <i class="ri-user-settings-line me-1"></i>Responsabilidades
                </a>
                <a class="nav-link" href="#sla">
                  <i class="ri-time-line me-1"></i>Disponibilidade (SLA)
                </a>
                <a class="nav-link" href="#limitacao">
                  <i class="ri-shield-line me-1"></i>Limitação
                </a>
                <a class="nav-link" href="#rescisao">
                  <i class="ri-close-circle-line me-1"></i>Rescisão
                </a>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <!-- Conteúdo -->
      <div class="col-lg-9">
        <div class="content-card card">
          <div class="card-body p-4 p-lg-5">

            <!-- Aceitação -->
            <div id="aceitacao" class="mb-5">
              <h2>
                <i class="ri-checkbox-circle-line"></i>Aceitação dos Termos
              </h2>

              <p class="lead mb-4">
                Este documento estabelece os Termos de Uso que regem a utilização do Sistema de Gestão da Mefema Systems, LDA, fornecido na modalidade <strong>Software como Serviço (SaaS)</strong>.
              </p>

              <div class="alert-brand-info alert d-flex align-items-start" role="alert">
                <i class="ri-information-line fs-4 me-3"></i>
                <div>
                  <h6 class="alert-heading mb-2">Acordo Vinculativo</h6>
                  <p class="mb-0">
                    Ao aceder, utilizar ou subscrever o Sistema de Gestão, o Cliente e os seus Utilizadores autorizados concordam em cumprir e estar vinculados a estes Termos.
                  </p>
                </div>
              </div>

              <div class="warning-card mt-3">
                <h6>
                  <i class="ri-alert-line me-2"></i>Condição Essencial
                </h6>
                <p class="mb-0">
                  <strong>Se não concordar com estes Termos, não deverá utilizar o Sistema.</strong>
                </p>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Definições -->
            <div id="definicoes" class="mb-5">
              <h2>
                <i class="ri-book-open-line"></i>Definições
              </h2>

              <div class="accordion accordion-custom" id="accordionDefinicoes">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#def1">
                      <i class="ri-window-line me-2"></i>Sistema
                    </button>
                  </h2>
                  <div id="def1" class="accordion-collapse collapse show" data-bs-parent="#accordionDefinicoes">
                    <div class="accordion-body">
                      O software de gestão, as suas funcionalidades, módulos, interfaces e toda a documentação associada, fornecido pela Mefema na modalidade SaaS.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#def2">
                      <i class="ri-building-line me-2"></i>Cliente
                    </button>
                  </h2>
                  <div id="def2" class="accordion-collapse collapse" data-bs-parent="#accordionDefinicoes">
                    <div class="accordion-body">
                      A entidade (pessoa singular ou colectiva) que celebrou um contrato de subscrição ou aquisição com a Mefema para o uso do Sistema.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#def3">
                      <i class="ri-user-line me-2"></i>Utilizador
                    </button>
                  </h2>
                  <div id="def3" class="accordion-collapse collapse" data-bs-parent="#accordionDefinicoes">
                    <div class="accordion-body">
                      Qualquer pessoa autorizada pelo Cliente a aceder e utilizar o Sistema em nome do Cliente.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#def4">
                      <i class="ri-database-2-line me-2"></i>Dados do Cliente
                    </button>
                  </h2>
                  <div id="def4" class="accordion-collapse collapse" data-bs-parent="#accordionDefinicoes">
                    <div class="accordion-body">
                      Todos os dados, informações, ficheiros e conteúdos inseridos, carregados ou gerados pelo Cliente ou pelos Utilizadores no Sistema.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#def5">
                      <i class="ri-file-shield-line me-2"></i>SLA
                    </button>
                  </h2>
                  <div id="def5" class="accordion-collapse collapse" data-bs-parent="#accordionDefinicoes">
                    <div class="accordion-body">
                      Service Level Agreement - Acordo de nível de serviço que define os padrões de disponibilidade e suporte do Sistema, conforme detalhado no Contrato de Subscrição.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Licença -->
            <div id="licenca" class="mb-5">
              <h2>
                <i class="ri-key-2-line"></i>Licença de Uso
              </h2>

              <div class="license-card mb-4">
                <h5>
                  <i class="ri-award-line me-2"></i>Concessão da Licença
                </h5>
                <p class="mb-0">
                  A Mefema concede ao Cliente uma licença de uso <strong>limitada, não exclusiva, intransferível e revogável</strong> para aceder e utilizar o Sistema, exclusivamente para as suas operações internas de gestão e pelo período de vigência do Contrato de Subscrição.
                </p>
              </div>

              <h5 style="color: var(--brand-brown); font-weight: 600; margin-bottom: 1rem;">
                <i class="ri-forbid-2-line me-2" style="color: #B71C1C;"></i>Restrições de Uso
              </h5>
              
              <p class="mb-3">O Cliente e os Utilizadores <strong style="color: #B71C1C;">NÃO PODEM</strong>:</p>

              <div class="restriction-grid">
                <div class="restriction-card">
                  <div class="card-header">
                    <i class="ri-share-line"></i>
                    <h6>Sublicenciar ou Transferir</h6>
                  </div>
                  <p class="small text-muted mb-0">
                    Sublicenciar, vender, alugar ou transferir o acesso a terceiros não autorizados
                  </p>
                </div>

                <div class="restriction-card">
                  <div class="card-header">
                    <i class="ri-code-s-slash-line"></i>
                    <h6>Modificar ou Descompilar</h6>
                  </div>
                  <p class="small text-muted mb-0">
                    Copiar, modificar, fazer engenharia reversa, descompilar ou desmontar
                  </p>
                </div>

                <div class="restriction-card">
                  <div class="card-header">
                    <i class="ri-error-warning-line"></i>
                    <h6>Uso Ilegal</h6>
                  </div>
                  <p class="small text-muted mb-0">
                    Utilizar para fins ilegais, fraudulentos ou que violem direitos de terceiros
                  </p>
                </div>

                <div class="restriction-card">
                  <div class="card-header">
                    <i class="ri-bug-line"></i>
                    <h6>Interferência</h6>
                  </div>
                  <p class="small text-muted mb-0">
                    Interferir na integridade ou desempenho do Sistema
                  </p>
                </div>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Propriedade -->
            <div id="propriedade" class="mb-5">
              <h2>
                <i class="ri-copyright-line"></i>Propriedade Intelectual
              </h2>

              <div class="row g-4">
                <div class="col-md-6">
                  <div class="property-card">
                    <i class="ri-shield-star-line"></i>
                    <h5>Propriedade do Sistema</h5>
                    <p class="mb-0">
                      O Sistema, incluindo todo o código-fonte, design e documentação, é e permanecerá <strong>propriedade exclusiva da Mefema</strong> e dos seus licenciadores.
                    </p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="property-card">
                    <i class="ri-database-2-line"></i>
                    <h5>Propriedade dos Dados</h5>
                    <p class="mb-0">
                      O Cliente é o <strong>único e exclusivo proprietário</strong> de todos os Dados do Cliente inseridos no Sistema.
                    </p>
                  </div>
                </div>
              </div>

              <div class="alert-brand-success alert mt-4" role="alert">
                <h6 class="alert-heading">
                  <i class="ri-shield-check-line me-2"></i>Compromisso da Mefema
                </h6>
                <p class="mb-0">
                  A Mefema actua apenas como <strong>Operador</strong> ou <strong>Subcontratante</strong> no tratamento dos Dados do Cliente. Não acedemos, utilizamos ou divulgamos esses dados, excepto conforme estritamente necessário para fornecer o Serviço, cumprir obrigações legais ou conforme autorizado pelo Cliente.
                </p>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Responsabilidades -->
            <div id="responsabilidades" class="mb-5">
              <h2>
                <i class="ri-user-settings-line"></i>Responsabilidades do Cliente
              </h2>

              <div class="row g-3">
                <div class="col-12">
                  <div class="responsibility-card">
                    <h6>
                      <i class="ri-lock-2-line me-2"></i>Segurança da Conta
                    </h6>
                    <p class="mb-0">
                      O Cliente é responsável por manter a confidencialidade das credenciais de acesso e por todas as actividades que ocorram na sua conta.
                    </p>
                  </div>
                </div>

                <div class="col-12">
                  <div class="responsibility-card">
                    <h6>
                      <i class="ri-shield-check-line me-2"></i>Legalidade dos Dados
                    </h6>
                    <p class="mb-0">
                      O Cliente garante que possui todos os direitos e autorizações necessários para inserir e utilizar os Dados do Cliente no Sistema e que o uso desses dados não viola quaisquer leis ou direitos de terceiros.
                    </p>
                  </div>
                </div>

                <div class="col-12">
                  <div class="responsibility-card">
                    <h6>
                      <i class="ri-scales-3-line me-2"></i>Conformidade Legal
                    </h6>
                    <p class="mb-0">
                      O Cliente e os Utilizadores devem utilizar o Sistema em conformidade com todas as leis e regulamentos aplicáveis.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- SLA -->
            <div id="sla" class="mb-5">
              <h2>
                <i class="ri-time-line"></i>Disponibilidade e Suporte (SLA)
              </h2>

              <div class="sla-card">
                <div class="d-flex align-items-start">
                  <div class="flex-shrink-0">
                    <i class="ri-service-line" style="font-size: 3rem;"></i>
                  </div>
                  <div class="flex-grow-1 ms-4">
                    <h5>Acordo de Nível de Serviço</h5>
                    <p class="mb-3">
                      A Mefema envidará esforços comercialmente razoáveis para manter o Sistema disponível e operacional.
                    </p>
                    <div class="alert-brand-info alert mb-0">
                      <i class="ri-file-list-3-line me-2"></i>
                      Os detalhes sobre o nível de serviço, incluindo a <strong>disponibilidade mínima garantida</strong> e os <strong>tempos de resposta para suporte técnico</strong>, são regidos pelo <strong>SLA anexo ao Contrato de Subscrição</strong>.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Limitação -->
            <div id="limitacao" class="mb-5">
              <h2>
                <i class="ri-shield-line"></i>Limitação de Responsabilidade
              </h2>

              <div class="alert-brand-warning alert" role="alert">
                <h6 class="alert-heading">
                  <i class="ri-information-line me-2"></i>Fornecimento "Tal Como Está"
                </h6>
                <p class="mb-0">
                  O Sistema é fornecido <strong>"tal como está"</strong> (<em>as is</em>). A Mefema não garante que o Sistema estará livre de erros ou que operará ininterruptamente.
                </p>
              </div>

              <div class="danger-card mt-3">
                <h6>
                  <i class="ri-alert-line me-2"></i>Limite de Responsabilidade
                </h6>
                <p class="mb-3">
                  A responsabilidade total da Mefema por quaisquer danos será limitada ao montante pago pelo Cliente à Mefema nos <strong>doze (12) meses anteriores</strong> ao evento que deu origem à reclamação.
                </p>
                <p class="mb-0">
                  A Mefema não será responsável por:
                </p>
                <ul class="mb-0">
                  <li>Lucros cessantes</li>
                  <li>Perda de dados</li>
                  <li>Danos indirectos</li>
                </ul>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Rescisão -->
            <div id="rescisao" class="mb-5">
              <h2>
                <i class="ri-close-circle-line"></i>Rescisão
              </h2>

              <div class="danger-card">
                <h6>Rescisão pela Mefema</h6>
                <p class="mb-3">
                  A Mefema pode rescindir ou suspender o acesso do Cliente ao Sistema <strong>imediatamente, sem aviso prévio</strong>, se o Cliente ou qualquer Utilizador violar materialmente estes Termos ou o Contrato de Subscrição.
                </p>
                
                <h6 style="color: #B71C1C;">Após a rescisão:</h6>
                <ol class="mb-0">
                  <li>O Cliente terá um período limitado para exportar os seus Dados</li>
                  <li>Após esse período, a Mefema eliminará de forma segura todos os Dados do Cliente</li>
                </ol>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Disposições Finais -->
            <div class="mb-4">
              <h2>
                <i class="ri-file-list-3-line"></i>Disposições Finais
              </h2>

              <div class="row g-3">
                <div class="col-md-4">
                  <div class="provision-card">
                    <i class="ri-scales-3-line"></i>
                    <h6>Lei Aplicável</h6>
                    <p class="small text-muted mb-0">Leis da República de Moçambique</p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="provision-card">
                    <i class="ri-building-2-line"></i>
                    <h6>Jurisdição</h6>
                    <p class="small text-muted mb-0">Foro da Cidade de Maputo</p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="provision-card">
                    <i class="ri-file-list-line"></i>
                    <h6>Integralidade</h6>
                    <p class="small text-muted mb-0">Acordo integral entre as partes</p>
                  </div>
                </div>
              </div>

              <div class="alert-brand-info alert mt-4" role="alert">
                <p class="mb-0">
                  <i class="ri-information-line me-2"></i>
                  Estes Termos, juntamente com o <strong>Contrato de Subscrição</strong> e a <strong>Política de Privacidade</strong>, constituem o acordo integral entre o Cliente e a Mefema.
                </p>
              </div>
            </div>

            <!-- Footer -->
            <div class="border-top pt-4 mt-5">
              <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                  <p class="text-muted small mb-0">
                    <strong>Mefema Systems, LDA</strong><br>
                    <i class="ri-calendar-check-line me-1"></i>Actualizado em 13 de Novembro de 2025
                  </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                  <a href="<?php echo BASE_URL; ?>documentos/privacidade" class="btn btn-brand-primary btn-sm me-2">
                    <i class="ri-shield-keyhole-line me-1"></i>Política de Privacidade
                  </a>
                  <a href="<?php echo BASE_URL; ?>documentos/eula" class="btn btn-brand-success btn-sm">
                    <i class="ri-smartphone-line me-1"></i>EULA Mobile
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
// Smooth scroll e highlight da navegação
document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.sidebar-nav .nav-link');
  
  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      navLinks.forEach(l => l.classList.remove('active'));
      this.classList.add('active');
      
      const targetId = this.getAttribute('href');
      const targetSection = document.querySelector(targetId);
      
      if (targetSection) {
        window.scrollTo({
          top: targetSection.offsetTop - 100,
          behavior: 'smooth'
        });
      }
    });
  });

  // Highlight no scroll
  window.addEventListener('scroll', function() {
    let current = '';
    const sections = document.querySelectorAll('[id]');
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      if (window.pageYOffset >= (sectionTop - 150)) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  });
});
</script>

<?php get_part('includes/footer.php'); ?>