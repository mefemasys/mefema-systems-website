<?php 
$pageTitle = "Política de Privacidade - Mefema Systems"; 
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

  .legal-hero .text-muted {
    color: rgba(255, 255, 255, 0.7) !important;
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
    box-shadow: 0 2px 8px rgba(93, 64, 55, 0.1);
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
  .alert-brand {
    background: var(--bg-light);
    border-left: 4px solid var(--brand-orange);
    border-radius: 8px;
    color: var(--brand-brown);
  }

  .alert-brand .alert-heading {
    color: var(--brand-brown);
    font-weight: 600;
  }

  .alert-brand i {
    color: var(--brand-orange);
  }

  /* Info Cards */
  .info-card {
   /* background: white;*/
    border-radius: 8px;
    border: 1px solid var(--border-color);
    transition: all 0.3s ease;
  }

  .info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(93, 64, 55, 0.15);
  }

  .info-card.border-brand {
    border-left: 3px solid var(--brand-orange);
  }

  .info-card h6 {
    color: var(--brand-brown);
    font-weight: 600;
  }

  .info-card i {
    color: var(--brand-orange);
  }

  /* Highlighted Box */
  .highlight-box {
    background: var(--bg-light);
    border: 1px solid var(--brand-orange);
    border-radius: 12px;
    padding: 1.5rem;
  }

  .highlight-box h5 {
    color: var(--brand-brown);
    margin-bottom: 1rem;
  }

  /* Table */
  .table-custom {
    border: 1px solid var(--border-color);
    border-radius: 8px;
    overflow: hidden;
  }

  .table-custom thead {
    background: linear-gradient(135deg, var(--brand-brown) 0%, var(--brand-brown-light) 100%);
    color: white;
  }

  .table-custom tbody tr:hover {
    background: var(--bg-light);
  }

  .badge-brand-primary {
    background: rgba(255, 143, 0, 0.15);
    color: var(--brand-orange);
    border: 1px solid var(--brand-orange);
  }

  .badge-brand-success {
    background: rgba(93, 64, 55, 0.15);
    color: var(--brand-brown);
    border: 1px solid var(--brand-brown);
  }

  /* List Group */
  .list-group-custom .list-group-item {
    border-color: var(--border-color);
    transition: all 0.3s ease;
  }

  .list-group-custom .list-group-item:hover {
    background: var(--bg-light);
    border-left: 3px solid var(--brand-orange);
  }

  .list-group-custom i {
    color: var(--brand-orange);
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

  /* Rights Cards Grid */
  .rights-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
  }

  .right-card {
   /* background: white;*/
    border: 1px solid var(--border-color);
    border-radius: 8px;
    padding: 1.25rem;
    transition: all 0.3s ease;
  }

  .right-card:hover {
    border-color: var(--brand-orange);
    box-shadow: 0 4px 12px rgba(255, 143, 0, 0.2);
  }

  .right-card h6 {
    color: var(--brand-brown);
    font-weight: 600;
    margin-bottom: 0.5rem;
  }

  .right-card i {
    font-size: 1.5rem;
  }

  /* Contact Box */
  .contact-box {
    background: linear-gradient(135deg, var(--bg-light) 0%, white 100%);
    border: 2px solid var(--brand-orange);
    border-radius: 12px;
    padding: 2rem;
  }

  .contact-box ul li {
    padding: 0.5rem 0;
    border-bottom: 1px solid var(--border-color);
  }

  .contact-box ul li:last-child {
    border-bottom: none;
  }

  .contact-box i {
    color: var(--brand-orange);
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

  .btn-brand-outline {
    background: transparent;
    border: 2px solid var(--brand-orange);
    color: var(--brand-orange);
  }

  .btn-brand-outline:hover {
    background: var(--brand-orange);
    border-color: var(--brand-orange);
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
        <i class="ri-shield-check-line me-2"></i>Documentos Legais
      </span>
      <h1 class="display-4 mb-3">Política de Privacidade</h1>
      <p class="lead text-muted mb-2">Mefema Systems, LDA</p>
      <p class="text-muted">
        <i class="ri-calendar-line me-2"></i>Última Revisão: 13 de Novembro de 2025
        <span class="mx-2">|</span>
        <i class="ri-file-text-line me-2"></i>Versão 2.0
      </p>
    </div>
  </div>
</section>

<!-- Conteúdo Principal -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <!-- Sidebar de Navegação -->
      <div class="col-lg-3 mb-4 mb-lg-0">
        <div class="sidebar-sticky">
          <div class="sidebar-nav card">
            <div class="card-body">
              <h6 class="card-title mb-3">Índice</h6>
              <nav class="nav flex-column">
                <a class="nav-link active" href="#introducao">
                  <i class="ri-arrow-right-s-line me-1"></i>Introdução
                </a>
                <a class="nav-link" href="#controlador">
                  <i class="ri-arrow-right-s-line me-1"></i>Controlador de Dados
                </a>
                <a class="nav-link" href="#dados-recolhidos">
                  <i class="ri-arrow-right-s-line me-1"></i>Dados Recolhidos
                </a>
                <a class="nav-link" href="#seguranca">
                  <i class="ri-arrow-right-s-line me-1"></i>Segurança
                </a>
                <a class="nav-link" href="#partilha">
                  <i class="ri-arrow-right-s-line me-1"></i>Partilha de Dados
                </a>
                <a class="nav-link" href="#direitos">
                  <i class="ri-arrow-right-s-line me-1"></i>Direitos do Titular
                </a>
                <a class="nav-link" href="#armazenamento">
                  <i class="ri-arrow-right-s-line me-1"></i>Armazenamento
                </a>
                <a class="nav-link" href="#responsavel">
                  <i class="ri-arrow-right-s-line me-1"></i>Responsável (RPD)
                </a>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <!-- Conteúdo do Documento -->
      <div class="col-lg-9">
        <div class="content-card card">
          <div class="card-body p-4 p-lg-5">
            
            <!-- Introdução -->
            <div id="introducao" class="mb-5">
              <h2>
                <i class="ri-information-line"></i>Introdução e Âmbito
              </h2>
              <p class="mb-3">
                A <strong>Mefema Systems, LDA</strong> assume um compromisso inabalável com a privacidade e a segurança dos dados pessoais dos seus Utilizadores.
              </p>
              <p class="mb-3">
                Esta Política de Privacidade descreve como a Mefema recolhe, utiliza, armazena e protege os dados pessoais submetidos pelos Utilizadores através do nosso website institucional e dos sistemas e aplicações de software que desenvolvemos e operamos.
              </p>
              
              <div class="alert-brand alert d-flex align-items-start" role="alert">
                <i class="ri-shield-check-line fs-4 me-3"></i>
                <div>
                  <h6 class="alert-heading mb-2">Compromisso com as Melhores Práticas</h6>
                  <p class="mb-0">
                    A Mefema compromete-se a adoptar as melhores práticas internacionais de protecção de dados, nomeadamente os princípios da GDPR (União Europeia) e da LGPD (Brasil), alinhados com a legislação moçambicana.
                  </p>
                </div>
              </div>

              <div class="row g-3 mt-3">
                <div class="col-md-6">
                  <div class="info-card card border-brand">
                    <div class="card-body">
                      <h6><i class="ri-focus-3-line me-2"></i>Minimização de Dados</h6>
                      <p class="small mb-0 text-muted">Apenas recolhemos dados estritamente necessários</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-card card border-brand">
                    <div class="card-body">
                      <h6><i class="ri-eye-line me-2"></i>Transparência</h6>
                      <p class="small mb-0 text-muted">Informação clara sobre o tratamento de dados</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-card card border-brand">
                    <div class="card-body">
                      <h6><i class="ri-lock-2-line me-2"></i>Segurança por Desenho</h6>
                      <p class="small mb-0 text-muted">Protecção desde a concepção dos sistemas</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-card card border-brand">
                    <div class="card-body">
                      <h6><i class="ri-settings-3-line me-2"></i>Controlo do Utilizador</h6>
                      <p class="small mb-0 text-muted">Você mantém o controlo sobre os seus dados</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Controlador de Dados -->
            <div id="controlador" class="mb-5">
              <h2>
                <i class="ri-building-line"></i>Controlador de Dados
              </h2>
              <div class="highlight-box">
                <h5 class="mb-3">Mefema Systems, LDA</h5>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2">
                    <i class="ri-map-pin-line me-2"></i>
                    <strong>Sede:</strong> Pemba, Moçambique
                  </li>
                  <li class="mb-2">
                    <i class="ri-mail-line me-2"></i>
                    <strong>Contacto:</strong> contacto@mefemasys.co.mz
                  </li>
                  <li>
                    <i class="ri-file-list-line me-2"></i>
                    <strong>NUIT:</strong> [Número]
                  </li>
                </ul>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Dados Recolhidos -->
            <div id="dados-recolhidos" class="mb-5">
              <h2>
                <i class="ri-database-2-line"></i>Dados Pessoais Recolhidos
              </h2>
              <p class="mb-4">A Mefema adopta uma política de recolha mínima de dados. Recolhemos apenas informações submetidas de forma voluntária:</p>

              <div class="table-responsive">
                <table class="table table-hover table-custom">
                  <thead>
                    <tr>
                      <th>Categoria</th>
                      <th>Exemplos</th>
                      <th>Finalidade</th>
                      <th>Base Legal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>Dados de Identificação</strong></td>
                      <td>Nome, e-mail, username, password</td>
                      <td>Gestão de conta e autenticação</td>
                      <td><span class="badge badge-brand-primary">Execução de Contrato</span></td>
                    </tr>
                    <tr>
                      <td><strong>Dados de Conteúdo/Sistema</strong></td>
                      <td>Dados inseridos nas aplicações</td>
                      <td>Funcionamento dos Serviços</td>
                      <td><span class="badge badge-brand-primary">Execução de Contrato</span></td>
                    </tr>
                    <tr>
                      <td><strong>Dados de Comunicação</strong></td>
                      <td>Mensagens de contacto</td>
                      <td>Suporte e resposta a pedidos</td>
                      <td><span class="badge badge-brand-success">Interesse Legítimo</span></td>
                    </tr>
                    <tr>
                      <td><strong>Dados Técnicos</strong></td>
                      <td>IP, navegador, logs do servidor</td>
                      <td>Segurança e melhoria dos Serviços</td>
                      <td><span class="badge badge-brand-success">Interesse Legítimo</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="alert-brand alert mt-4" role="alert">
                <h6 class="alert-heading">
                  <i class="ri-cookie-line me-2"></i>Cookies e Navegação
                </h6>
                <p class="mb-0">
                  Utilizamos apenas cookies estritamente necessários para o funcionamento técnico (ex: manutenção de sessão). Não utilizamos cookies de terceiros ou de rastreamento para publicidade.
                </p>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Segurança -->
            <div id="seguranca" class="mb-5">
              <h2>
                <i class="ri-shield-keyhole-line"></i>Segurança dos Dados
              </h2>

              <div class="row g-4 mb-4">
                <div class="col-md-6">
                  <div class="highlight-box h-100">
                    <div class="d-flex align-items-center mb-3">
                      <div class="flex-shrink-0">
                        <i class="ri-lock-password-line fs-1"></i>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="mb-0">Cifragem de Conhecimento Zero</h5>
                      </div>
                    </div>
                    <p class="mb-0">
                      Para dados que opte por criptografar, adoptamos um modelo onde a Mefema não possui a chave de cifragem, garantindo que apenas você pode aceder ao conteúdo.
                    </p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="highlight-box h-100">
                    <div class="d-flex align-items-center mb-3">
                      <div class="flex-shrink-0">
                        <i class="ri-customer-service-2-line fs-1"></i>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="mb-0">Acesso para Suporte</h5>
                      </div>
                    </div>
                    <p class="mb-0">
                      Dados privados podem ser acedidos pela Mefema apenas para suporte técnico, melhoria de serviços e estatísticas internas, sob estrito dever de confidencialidade.
                    </p>
                  </div>
                </div>
              </div>

              <h5 class="mb-3">Medidas de Segurança Implementadas:</h5>
              <ul class="list-group list-group-custom">
                <li class="list-group-item">
                  <i class="ri-shield-check-line me-2"></i>
                  <strong>Cifragem em Repouso:</strong> Dados armazenados são cifrados nos servidores
                </li>
                <li class="list-group-item">
                  <i class="ri-shield-check-line me-2"></i>
                  <strong>Cifragem em Trânsito (TLS/SSL):</strong> Comunicação protegida entre dispositivos e servidores
                </li>
                <li class="list-group-item">
                  <i class="ri-shield-check-line me-2"></i>
                  <strong>Controlo de Acesso:</strong> Acesso restrito com autenticação multifactorial
                </li>
                <li class="list-group-item">
                  <i class="ri-shield-check-line me-2"></i>
                  <strong>Segurança de Infraestrutura:</strong> Fornecedores com certificações ISO 27001
                </li>
                <li class="list-group-item">
                  <i class="ri-shield-check-line me-2"></i>
                  <strong>Gestão de Incidentes:</strong> Procedimentos para detecção e notificação de violações
                </li>
              </ul>
            </div>

            <div class="divider-brand"></div>

            <!-- Partilha -->
            <div id="partilha" class="mb-5">
              <h2>
                <i class="ri-share-line"></i>Partilha de Dados
              </h2>

              <div class="alert-brand alert" role="alert">
                <h6 class="alert-heading">
                  <i class="ri-alert-line me-2"></i>Compromisso de Não Partilha Comercial
                </h6>
                <p class="mb-0">
                  A Mefema <strong>não partilha, vende, aluga ou transfere</strong> dados pessoais com terceiros para fins comerciais, marketing ou outros.
                </p>
              </div>

              <h5 class="mb-3">Excepções (circunstâncias estritas):</h5>
              <div class="accordion accordion-custom" id="accordionPartilha">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                      <i class="ri-scales-3-line me-2"></i>Obrigação Legal
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionPartilha">
                    <div class="accordion-body">
                      Se legalmente obrigados por ordem judicial, administrativa ou regulatória válida, apenas na medida do estritamente necessário.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                      <i class="ri-shield-user-line me-2"></i>Protecção de Direitos
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionPartilha">
                    <div class="accordion-body">
                      Quando necessário para proteger direitos, propriedade ou segurança da Mefema, utilizadores ou público.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                      <i class="ri-service-line me-2"></i>Prestadores de Serviços
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionPartilha">
                    <div class="accordion-body">
                      Terceiros que prestam serviços (hosting, pagamentos), contratualmente obrigados a proteger os dados.
                    </div>
                  </div>
                </div>
              </div>

              <div class="alert-brand alert mt-4" role="alert">
                <h6 class="alert-heading">
                  <i class="ri-global-line me-2"></i>Transferência Internacional
                </h6>
                <p class="mb-0">
                  Dados podem ser armazenados fora de Moçambique, com garantias adequadas de protecção através de Cláusulas Contratuais-Tipo (SCCs).
                </p>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Direitos do Titular -->
            <div id="direitos" class="mb-5">
              <h2>
                <i class="ri-user-settings-line"></i>Direitos do Titular dos Dados
              </h2>

              <p class="mb-4">Como titular dos dados, você possui os seguintes direitos:</p>

              <div class="rights-grid">
                <div class="right-card">
                  <h6><i class="ri-eye-line me-2"></i>Direito de Acesso</h6>
                  <p class="small mb-0 text-muted">Confirmar e aceder aos dados que possuímos</p>
                </div>
                <div class="right-card">
                  <h6><i class="ri-edit-line me-2"></i>Direito de Rectificação</h6>
                  <p class="small mb-0 text-muted">Corrigir dados incompletos ou inexactos</p>
                </div>
                <div class="right-card">
                  <h6><i class="ri-delete-bin-line me-2"></i>Direito ao Apagamento</h6>
                  <p class="small mb-0 text-muted">Solicitar eliminação dos seus dados pessoais</p>
                </div>
                <div class="right-card">
                  <h6><i class="ri-pause-circle-line me-2"></i>Limitação do Tratamento</h6>
                  <p class="small mb-0 text-muted">Suspender o tratamento em circunstâncias específicas</p>
                </div>
                <div class="right-card">
                  <h6><i class="ri-folder-transfer-line me-2"></i>Direito à Portabilidade</h6>
                  <p class="small mb-0 text-muted">Receber dados em formato estruturado e legível</p>
                </div>
                <div class="right-card">
                  <h6><i class="ri-close-circle-line me-2"></i>Direito de Oposição</h6>
                  <p class="small mb-0 text-muted">Opor-se ao tratamento baseado em interesse legítimo</p>
                </div>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Armazenamento -->
            <div id="armazenamento" class="mb-5">
              <h2>
                <i class="ri-save-line"></i>Armazenamento e Retenção
              </h2>

              <div class="highlight-box">
                <h6 class="mb-3">Período de Retenção:</h6>
                <ul class="mb-0">
                  <li class="mb-2">
                    <strong>Dados de Identificação:</strong> Apenas pelo período necessário para as finalidades ou exigido por lei
                  </li>
                  <li class="mb-2">
                    <strong>Dados de Conteúdo/Sistema:</strong> Mantidos enquanto a conta estiver activa
                  </li>
                  <li>
                    <strong>Após Encerramento:</strong> Todos os dados são eliminados de forma segura e irreversível
                  </li>
                </ul>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Responsável -->
            <div id="responsavel" class="mb-5">
              <h2>
                <i class="ri-contacts-line"></i>Responsável pela Protecção de Dados
              </h2>

              <div class="contact-box">
                <p class="mb-3">Para questões relacionadas com esta Política ou tratamento de dados pessoais:</p>
                <ul class="list-unstyled mb-0">
                  <li>
                    <i class="ri-user-line me-2"></i>
                    <strong>Nome:</strong> [Nome do RPD]
                  </li>
                  <li>
                    <i class="ri-mail-line me-2"></i>
                    <strong>E-mail:</strong> privacidade@mefemasys.co.mz
                  </li>
                  <li>
                    <i class="ri-phone-line me-2"></i>
                    <strong>Telefone:</strong> +258 86 192 4050
                  </li>
                </ul>
              </div>
            </div>

            <!-- Footer do Documento -->
            <div class="border-top pt-4 mt-5">
              <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                  <p class="text-muted small mb-0">
                    <i class="ri-calendar-check-line me-1"></i>
                    Última actualização: 13 de Novembro de 2025
                  </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                  <a href="<?php echo BASE_URL; ?>documentos/eula" class="btn btn-brand-outline btn-sm me-2">
                    <i class="ri-file-list-line me-1"></i>Ver EULA
                  </a>
                  <a href="<?php echo BASE_URL; ?>documentos/termos-uso" class="btn btn-brand-outline btn-sm">
                    <i class="ri-file-text-line me-1"></i>Termos de Uso
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