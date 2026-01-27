<?php 
$pageTitle = "Termos de Uso do Website - Mefema Systems"; 
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

  /* Content Card */
  .content-card {
   /* background: white;*/
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(93, 64, 55, 0.1);
    border: 1px solid var(--border-color);
  }

  /* Section Headers */
  .section-header {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 3px solid var(--brand-orange);
  }

  .section-header .avatar {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, rgba(255, 143, 0, 0.15) 0%, rgba(93, 64, 55, 0.15) 100%);
    border-radius: 12px;
  }

  .section-header .avatar i {
    color: var(--brand-orange);
    font-size: 2rem;
  }

  .section-header h2 {
    color: var(--brand-brown);
    font-weight: 700;
    margin: 0;
  }

  /* Alert Boxes */
  .alert-brand-primary {
    background: var(--bg-light);
    border-left: 4px solid var(--brand-orange);
    border-radius: 8px;
    color: var(--brand-brown);
  }

  .alert-brand-primary .alert-heading {
    color: var(--brand-brown);
    font-weight: 600;
  }

  .alert-brand-primary i {
    color: var(--brand-orange);
  }

  .alert-brand-success {
    background: rgba(93, 64, 55, 0.05);
    border-left: 4px solid var(--brand-brown);
    border-radius: 8px;
    color: var(--brand-brown);
  }

  .alert-brand-warning {
    background: rgba(255, 143, 0, 0.08);
    border-left: 4px solid var(--brand-orange);
    border-radius: 8px;
    color: var(--brand-brown);
  }

  .alert-brand-danger {
    background: rgba(183, 28, 28, 0.05);
    border-left: 4px solid #B71C1C;
    border-radius: 8px;
    color: #B71C1C;
  }

  /* Property Card */
  .property-card {
    background: var(--bg-light);
    border: 1px solid var(--brand-orange);
    border-radius: 12px;
    padding: 1.5rem;
  }

  .property-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 0.75rem;
    margin-top: 1rem;
  }

  .property-item {
    display: flex;
    align-items: center;
    padding: 0.5rem;
   /* background: white;*/
    border-radius: 6px;
    border: 1px solid var(--border-color);
  }

  .property-item i {
    font-size: 1.2rem;
    margin-right: 0.5rem;
  }

  /* License Card */
  .license-card {
   /* background: white;*/
    border: 2px solid var(--brand-orange);
    border-radius: 12px;
    padding: 1.5rem;
  }

  .license-card h6 {
    color: var(--brand-brown);
    font-weight: 600;
    margin-bottom: 1rem;
  }

  .license-card ul li {
    padding: 0.5rem 0;
    border-bottom: 1px solid var(--border-color);
  }

  .license-card ul li:last-child {
    border-bottom: none;
  }

  /* Conduct Cards */
  .conduct-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1rem;
  }

  .conduct-card {
   /* background: white;*/
    border: 1px solid var(--border-color);
    border-left: 4px solid #B71C1C;
    border-radius: 8px;
    padding: 1.25rem;
    transition: all 0.3s ease;
    height: 100%;
  }

  .conduct-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(183, 28, 28, 0.2);
  }

  .conduct-card .card-header {
    display: flex;
    align-items: center;
    margin-bottom: 0.75rem;
  }

  .conduct-card .card-header i {
    color: #B71C1C;
    font-size: 1.8rem;
    margin-right: 1rem;
  }

  .conduct-card .card-header h6 {
    color: var(--brand-brown);
    font-weight: 600;
    margin: 0;
  }

  .conduct-card p {
    color: #6c757d;
    margin: 0;
    font-size: 0.9rem;
  }

  /* Info Box */
  .info-box {
   /* background: white;*/
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 1.5rem;
  }

  .info-box h6 {
    color: var(--brand-brown);
    font-weight: 600;
    margin-bottom: 1rem;
  }

  /* Disclaimer Cards */
  .disclaimer-card {
   /* background: white;*/
    border: 2px solid var(--brand-orange);
    border-radius: 12px;
    padding: 1.5rem;
  }

  .disclaimer-card h6 {
    color: var(--brand-brown);
    font-weight: 600;
    margin-bottom: 1rem;
  }

  .disclaimer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 0.75rem;
  }

  .disclaimer-item {
    display: flex;
    align-items: center;
    padding: 0.5rem;
    background: var(--bg-light);
    border-radius: 6px;
  }

  .disclaimer-item i {
    color: #B71C1C;
    margin-right: 0.5rem;
  }

  /* Final Provisions */
  .provision-card {
   /* background: white;*/
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 2rem;
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
    font-size: 3rem;
    margin-bottom: 1rem;
  }

  .provision-card h5 {
    color: var(--brand-brown);
    font-weight: 600;
    margin-bottom: 0.75rem;
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

  /* Subsection Titles */
  .subsection-title {
    color: var(--brand-brown);
    font-weight: 600;
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
  }

  .subsection-title i {
    color: var(--brand-orange);
    margin-right: 0.5rem;
  }
</style>

<!-- Hero Section -->
<section class="legal-hero">
  <div class="container position-relative">
    <div class="text-center">
      <span class="badge mb-3 px-3 py-2">
        <i class="ri-global-line me-2"></i>Website Institucional
      </span>
      <h1 class="display-4 mb-3">Termos de Uso do Website</h1>
      <p class="lead text-muted mb-2">Mefema Systems, LDA</p>
      <p class="text-muted">
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
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="content-card card">
          <div class="card-body p-4 p-lg-5">

            <!-- Aceitação -->
            <div class="mb-5">
              <div class="section-header">
                <div class="avatar me-3">
                  <i class="ri-checkbox-circle-line"></i>
                </div>
                <div>
                  <h2>Aceitação dos Termos</h2>
                </div>
              </div>

              <p class="mb-4">
                Este documento estabelece os Termos de Uso e Condições que regem a utilização do website institucional da Mefema Systems, LDA.
              </p>

              <div class="alert-brand-primary alert d-flex" role="alert">
                <i class="ri-information-line fs-4 me-3"></i>
                <div>
                  <h6 class="alert-heading mb-2">Uso do Website</h6>
                  <p class="mb-0">
                    Ao aceder e utilizar este Website, o Utilizador concorda em cumprir e estar vinculado a estes Termos. <strong>Se não concordar com estes Termos, não deverá utilizar o Website.</strong>
                  </p>
                </div>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Propriedade Intelectual -->
            <div class="mb-5">
              <div class="section-header">
                <div class="avatar me-3">
                  <i class="ri-copyright-line"></i>
                </div>
                <div>
                  <h2>Propriedade Intelectual e Uso do Conteúdo</h2>
                </div>
              </div>

              <h5 class="subsection-title">
                <i class="ri-shield-star-line"></i>Propriedade
              </h5>
              
              <div class="property-card mb-4">
                <p class="mb-0">
                  Todo o conteúdo presente no Website, incluindo, mas não se limitando a:
                </p>
                <div class="property-grid">
                  <div class="property-item">
                    <i class="ri-file-text-line" style="color: var(--brand-orange);"></i>
                    <span class="small">Textos</span>
                  </div>
                  <div class="property-item">
                    <i class="ri-image-line" style="color: var(--brand-orange);"></i>
                    <span class="small">Gráficos e Imagens</span>
                  </div>
                  <div class="property-item">
                    <i class="ri-price-tag-3-line" style="color: var(--brand-orange);"></i>
                    <span class="small">Logótipos</span>
                  </div>
                  <div class="property-item">
                    <i class="ri-layout-line" style="color: var(--brand-orange);"></i>
                    <span class="small">Ícones</span>
                  </div>
                  <div class="property-item">
                    <i class="ri-volume-up-line" style="color: var(--brand-orange);"></i>
                    <span class="small">Clipes de Áudio</span>
                  </div>
                  <div class="property-item">
                    <i class="ri-database-2-line" style="color: var(--brand-orange);"></i>
                    <span class="small">Compilações</span>
                  </div>
                </div>
              </div>

              <div class="alert-brand-success alert" role="alert">
                <i class="ri-shield-check-line me-2"></i>
                É <strong>propriedade da Mefema</strong> ou dos seus fornecedores de conteúdo e está protegido pelas leis de direitos de autor e propriedade intelectual de Moçambique e internacionais.
              </div>

              <h5 class="subsection-title mt-4">
                <i class="ri-key-2-line"></i>Licença de Uso Limitada
              </h5>

              <div class="license-card">
                <p class="mb-3">
                  É concedida ao Utilizador uma licença limitada para aceder e fazer uso <strong>pessoal e não comercial</strong> do Website.
                </p>
                
                <h6 class="text-danger mb-3">
                  <i class="ri-forbid-2-line me-2"></i>Esta licença NÃO permite:
                </h6>
                
                <ul class="list-unstyled mb-0">
                  <li>
                    <i class="ri-close-circle-line text-danger me-2"></i>
                    A revenda ou uso comercial do Website ou do seu conteúdo
                  </li>
                  <li>
                    <i class="ri-close-circle-line text-danger me-2"></i>
                    A recolha e uso de listagens de produtos, descrições ou preços
                  </li>
                  <li>
                    <i class="ri-close-circle-line text-danger me-2"></i>
                    Qualquer uso derivado deste Website ou do seu conteúdo
                  </li>
                  <li>
                    <i class="ri-close-circle-line text-danger me-2"></i>
                    Download ou cópia de informações de conta para benefício de terceiros
                  </li>
                </ul>
              </div>

              <div class="alert-brand-warning alert mt-3" role="alert">
                <i class="ri-alert-line me-2"></i>
                <strong>Importante:</strong> Qualquer uso não autorizado resultará na rescisão imediata da licença concedida pela Mefema.
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Conduta do Utilizador -->
            <div class="mb-5">
              <div class="section-header">
                <div class="avatar me-3">
                  <i class="ri-user-settings-line"></i>
                </div>
                <div>
                  <h2>Conduta do Utilizador</h2>
                </div>
              </div>

              <p class="mb-4">
                O Utilizador concorda em não utilizar o Website de forma que:
              </p>

              <div class="conduct-grid">
                <div class="conduct-card">
                  <div class="card-header">
                    <i class="ri-error-warning-line"></i>
                    <h6>Ilegal ou Fraudulenta</h6>
                  </div>
                  <p>Seja ilegal, fraudulenta ou prejudicial a terceiros</p>
                </div>

                <div class="conduct-card">
                  <div class="card-header">
                    <i class="ri-file-forbid-line"></i>
                    <h6>Violação de Termos</h6>
                  </div>
                  <p>Viole estes Termos ou a Política de Privacidade</p>
                </div>

                <div class="conduct-card">
                  <div class="card-header">
                    <i class="ri-bug-line"></i>
                    <h6>Comprometimento</h6>
                  </div>
                  <p>Prejudique, desactive ou comprometa o Website</p>
                </div>

                <div class="conduct-card">
                  <div class="card-header">
                    <i class="ri-spam-2-line"></i>
                    <h6>Interferência</h6>
                  </div>
                  <p>Interfira no uso e aproveitamento por terceiros</p>
                </div>

                <div class="conduct-card" style="grid-column: 1 / -1;">
                  <div class="card-header">
                    <i class="ri-lock-unlock-line"></i>
                    <h6>Acesso Não Autorizado</h6>
                  </div>
                  <p>Tente obter acesso não autorizado a qualquer parte do Website, contas, sistemas ou redes ligadas</p>
                </div>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Links Terceiros -->
            <div class="mb-5">
              <div class="section-header">
                <div class="avatar me-3">
                  <i class="ri-links-line"></i>
                </div>
                <div>
                  <h2>Links para Websites de Terceiros</h2>
                </div>
              </div>

              <div class="info-box">
                <p class="mb-3">
                  O Website pode conter links para websites de terceiros que não são operados ou controlados pela Mefema.
                </p>

                <div class="alert-brand-warning alert mb-3">
                  <h6 class="alert-heading">
                    <i class="ri-alert-line me-2"></i>Sem Responsabilidade
                  </h6>
                  <p class="mb-0">
                    A Mefema não tem controlo sobre, e não assume qualquer responsabilidade pelo conteúdo, políticas de privacidade ou práticas de quaisquer websites ou serviços de terceiros.
                  </p>
                </div>

                <div class="alert-brand-primary alert mb-0">
                  <h6 class="alert-heading">
                    <i class="ri-information-line me-2"></i>Não é Endosso
                  </h6>
                  <p class="mb-2">
                    A inclusão de qualquer link não implica o endosso da Mefema ao website.
                  </p>
                  <p class="mb-0 small">
                    O Utilizador reconhece e concorda que a Mefema não será responsável, directa ou indirectamente, por qualquer dano ou perda causada ou alegadamente causada por ou em conexão com o uso de tais websites ou serviços.
                  </p>
                </div>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Exclusão de Garantias -->
            <div class="mb-5">
              <div class="section-header">
                <div class="avatar me-3">
                  <i class="ri-shield-line"></i>
                </div>
                <div>
                  <h2>Exclusão de Garantias e Limitação de Responsabilidade</h2>
                </div>
              </div>

              <div class="alert-brand-danger alert" role="alert">
                <h6 class="alert-heading">
                  <i class="ri-alert-line me-2"></i>Fornecimento "Tal Como Está"
                </h6>
                <p class="mb-0">
                  O Website é fornecido <strong>"tal como está"</strong> (<em>as is</em>) e <strong>"conforme disponível"</strong> (<em>as available</em>), sem quaisquer garantias, expressas ou implícitas.
                </p>
              </div>

              <div class="disclaimer-card mt-3 mb-3">
                <h6>
                  <i class="ri-error-warning-line me-2" style="color: var(--brand-orange);"></i>Sem Garantias de:
                </h6>
                <ul class="mb-0">
                  <li>Funcionamento ininterrupto</li>
                  <li>Segurança absoluta</li>
                  <li>Ausência de erros</li>
                </ul>
              </div>

              <div class="disclaimer-card">
                <h6 class="text-danger">
                  <i class="ri-close-circle-line me-2"></i>Isenção de Responsabilidade
                </h6>
                <p class="mb-2">
                  Em nenhuma circunstância a Mefema, os seus directores, funcionários ou agentes serão responsáveis por:
                </p>
                <div class="disclaimer-grid">
                  <div class="disclaimer-item">
                    <i class="ri-close-line"></i>
                    <span class="small">Danos directos ou indirectos</span>
                  </div>
                  <div class="disclaimer-item">
                    <i class="ri-close-line"></i>
                    <span class="small">Perda de lucros</span>
                  </div>
                  <div class="disclaimer-item">
                    <i class="ri-close-line"></i>
                    <span class="small">Perda de dados</span>
                  </div>
                  <div class="disclaimer-item">
                    <i class="ri-close-line"></i>
                    <span class="small">Perdas intangíveis</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="divider-brand"></div>

            <!-- Disposições Finais -->
            <div class="mb-4">
              <div class="section-header">
                <div class="avatar me-3">
                  <i class="ri-file-list-3-line"></i>
                </div>
                <div>
                  <h2>Disposições Finais</h2>
                </div>
              </div>

              <div class="row g-4 mb-4">
                <div class="col-md-6">
                  <div class="provision-card">
                    <i class="ri-scales-3-line"></i>
                    <h5>Lei Aplicável</h5>
                    <p class="text-muted mb-0">
                      Regido pelas leis da República de Moçambique
                    </p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="provision-card">
                    <i class="ri-building-2-line"></i>
                    <h5>Jurisdição</h5>
                    <p class="text-muted mb-0">
                      Foro da Cidade de Maputo
                    </p>
                  </div>
                </div>
              </div>

              <div class="alert-brand-primary alert" role="alert">
                <h6 class="alert-heading">
                  <i class="ri-refresh-line me-2"></i>Alterações aos Termos
                </h6>
                <p class="mb-0">
                  A Mefema reserva-se o direito de alterar estes Termos a qualquer momento. O uso continuado do Website após a publicação de quaisquer alterações constitui a aceitação dessas alterações.
                </p>
              </div>
            </div>

            <!-- Footer do Documento -->
            <div class="border-top pt-4 mt-5">
              <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                  <p class="text-muted small mb-1">
                    <strong>Mefema Systems, LDA</strong>
                  </p>
                  <p class="text-muted small mb-0">
                    <i class="ri-calendar-check-line me-1"></i>
                    Última actualização: 13 de Novembro de 2025
                  </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                  <a href="<?php echo BASE_URL; ?>documentos/privacidade" class="btn btn-brand-outline btn-sm me-2">
                    <i class="ri-shield-keyhole-line me-1"></i>Política de Privacidade
                  </a>
                  <a href="<?php echo BASE_URL; ?>documentos/termos-saas" class="btn btn-brand-success btn-sm me-2">
                    <i class="ri-cloud-line me-1"></i>Termos SaaS
                  </a>
                  <a href="<?php echo BASE_URL; ?>documentos/eula" class="btn btn-brand-outline btn-sm">
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

<?php get_part('includes/footer.php'); ?>