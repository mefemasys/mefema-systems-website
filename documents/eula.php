<?php $pageTitle = "Termos de Uso do Sistema SaaS - MEFEMA Systems"; ?>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="section-py bg-gradient-primary">
  <div class="container">
    <div class="text-center text-white">
      <span class="badge bg-white text-primary mb-3">Sistema de Gestão</span>
      <h1 class="display-4 mb-3">Termos de Uso do Sistema SaaS</h1>
      <p class="lead mb-2">Software como Serviço (SaaS) da MEFEMA Systems, LDA</p>
      <p class="opacity-75">
        <i class="ri-calendar-line me-2"></i>Última Revisão: 13 de Novembro de 2025
        <span class="mx-2">|</span>
        <i class="ri-file-text-line me-2"></i>Versão 1.0
      </p>
    </div>
  </div>
</section>

<!-- Conteúdo Principal -->
<section class="section-py">
  <div class="container">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-lg-3 mb-4 mb-lg-0">
        <div class="card sticky-top" style="top: 100px;">
          <div class="card-body">
            <h6 class="card-title mb-3">Índice</h6>
            <nav class="nav flex-column">
              <a class="nav-link text-muted py-2" href="#aceitacao">
                <i class="ri-checkbox-circle-line me-1"></i>Aceitação
              </a>
              <a class="nav-link text-muted py-2" href="#definicoes">
                <i class="ri-book-open-line me-1"></i>Definições
              </a>
              <a class="nav-link text-muted py-2" href="#licenca">
                <i class="ri-key-2-line me-1"></i>Licença
              </a>
              <a class="nav-link text-muted py-2" href="#propriedade">
                <i class="ri-copyright-line me-1"></i>Propriedade
              </a>
              <a class="nav-link text-muted py-2" href="#responsabilidades">
                <i class="ri-user-settings-line me-1"></i>Responsabilidades
              </a>
              <a class="nav-link text-muted py-2" href="#sla">
                <i class="ri-time-line me-1"></i>Disponibilidade (SLA)
              </a>
              <a class="nav-link text-muted py-2" href="#limitacao">
                <i class="ri-shield-line me-1"></i>Limitação
              </a>
              <a class="nav-link text-muted py-2" href="#rescisao">
                <i class="ri-close-circle-line me-1"></i>Rescisão
              </a>
            </nav>
          </div>
        </div>
      </div>

      <!-- Conteúdo -->
      <div class="col-lg-9">
        <div class="card shadow-sm">
          <div class="card-body p-4 p-lg-5">

            <!-- Aceitação -->
            <div id="aceitacao" class="mb-5">
              <h2 class="mb-4">
                <i class="ri-checkbox-circle-line text-primary me-2"></i>Aceitação dos Termos
              </h2>

              <p class="lead mb-4">
                Este documento estabelece os Termos de Uso que regem a utilização do Sistema de Gestão da MEFEMA Systems, LDA, fornecido na modalidade <strong>Software como Serviço (SaaS)</strong>.
              </p>

              <div class="alert alert-info d-flex align-items-start" role="alert">
                <i class="ri-information-line fs-4 me-3"></i>
                <div>
                  <h6 class="alert-heading mb-2">Acordo Vinculativo</h6>
                  <p class="mb-0">
                    Ao aceder, utilizar ou subscrever o Sistema de Gestão, o Cliente e os seus Utilizadores autorizados concordam em cumprir e estar vinculados a estes Termos.
                  </p>
                </div>
              </div>

              <div class="card bg-warning bg-opacity-10 border-warning mt-3">
                <div class="card-body">
                  <h6 class="text-warning">
                    <i class="ri-alert-line me-2"></i>Condição Essencial
                  </h6>
                  <p class="mb-0">
                    <strong>Se não concordar com estes Termos, não deverá utilizar o Sistema.</strong>
                  </p>
                </div>
              </div>
            </div>

            <hr class="my-5">

            <!-- Definições -->
            <div id="definicoes" class="mb-5">
              <h2 class="mb-4">
                <i class="ri-book-open-line text-primary me-2"></i>Definições
              </h2>

              <div class="accordion" id="accordionDefinicoes">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#def1">
                      <i class="ri-window-line me-2 text-primary"></i>Sistema
                    </button>
                  </h2>
                  <div id="def1" class="accordion-collapse collapse show" data-bs-parent="#accordionDefinicoes">
                    <div class="accordion-body">
                      O software de gestão, as suas funcionalidades, módulos, interfaces e toda a documentação associada, fornecido pela MEFEMA na modalidade SaaS.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#def2">
                      <i class="ri-building-line me-2 text-success"></i>Cliente
                    </button>
                  </h2>
                  <div id="def2" class="accordion-collapse collapse" data-bs-parent="#accordionDefinicoes">
                    <div class="accordion-body">
                      A entidade (pessoa singular ou colectiva) que celebrou um contrato de subscrição ou aquisição com a MEFEMA para o uso do Sistema.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#def3">
                      <i class="ri-user-line me-2 text-info"></i>Utilizador
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
                      <i class="ri-database-2-line me-2 text-warning"></i>Dados do Cliente
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
                      <i class="ri-file-shield-line me-2 text-danger"></i>SLA
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

            <hr class="my-5">

            <!-- Licença -->
            <div id="licenca" class="mb-5">
              <h2 class="mb-4">
                <i class="ri-key-2-line text-primary me-2"></i>Licença de Uso
              </h2>

              <div class="card bg-primary bg-opacity-10 border-primary mb-4">
                <div class="card-body">
                  <h5 class="mb-3">
                    <i class="ri-award-line text-primary me-2"></i>Concessão da Licença
                  </h5>
                  <p class="mb-0">
                    A MEFEMA concede ao Cliente uma licença de uso <strong class="text-primary">limitada, não exclusiva, intransferível e revogável</strong> para aceder e utilizar o Sistema, exclusivamente para as suas operações internas de gestão e pelo período de vigência do Contrato de Subscrição.
                  </p>
                </div>
              </div>

              <h5 class="mb-3">
                <i class="ri-forbid-2-line text-danger me-2"></i>Restrições de Uso
              </h5>
              
              <p class="mb-3">O Cliente e os Utilizadores <strong class="text-danger">NÃO PODEM</strong>:</p>

              <div class="row g-3">
                <div class="col-md-6">
                  <div class="card border-danger h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2">
                        <i class="ri-share-line text-danger fs-4 me-3"></i>
                        <h6 class="mb-0">Sublicenciar ou Transferir</h6>
                      </div>
                      <p class="small text-muted mb-0">
                        Sublicenciar, vender, alugar ou transferir o acesso a terceiros não autorizados
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card border-danger h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2">
                        <i class="ri-code-s-slash-line text-danger fs-4 me-3"></i>
                        <h6 class="mb-0">Modificar ou Descompilar</h6>
                      </div>
                      <p class="small text-muted mb-0">
                        Copiar, modificar, fazer engenharia reversa, descompilar ou desmontar
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card border-danger h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2">
                        <i class="ri-error-warning-line text-danger fs-4 me-3"></i>
                        <h6 class="mb-0">Uso Ilegal</h6>
                      </div>
                      <p class="small text-muted mb-0">
                        Utilizar para fins ilegais, fraudulentos ou que violem direitos de terceiros
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card border-danger h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2">
                        <i class="ri-bug-line text-danger fs-4 me-3"></i>
                        <h6 class="mb-0">Interferência</h6>
                      </div>
                      <p class="small text-muted mb-0">
                        Interferir na integridade ou desempenho do Sistema
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr class="my-5">

            <!-- Propriedade -->
            <div id="propriedade" class="mb-5">
              <h2 class="mb-4">
                <i class="ri-copyright-line text-primary me-2"></i>Propriedade Intelectual
              </h2>

              <div class="row g-4">
                <div class="col-md-6">
                  <div class="card h-100 border-primary">
                    <div class="card-body text-center">
                      <i class="ri-shield-star-line text-primary" style="font-size: 4rem;"></i>
                      <h5 class="mt-3 mb-3">Propriedade do Sistema</h5>
                      <p class="mb-0">
                        O Sistema, incluindo todo o código-fonte, design e documentação, é e permanecerá <strong>propriedade exclusiva da MEFEMA</strong> e dos seus licenciadores.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card h-100 border-success">
                    <div class="card-body text-center">
                      <i class="ri-database-2-line text-success" style="font-size: 4rem;"></i>
                      <h5 class="mt-3 mb-3">Propriedade dos Dados</h5>
                      <p class="mb-0">
                        O Cliente é o <strong>único e exclusivo proprietário</strong> de todos os Dados do Cliente inseridos no Sistema.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="alert alert-success mt-4" role="alert">
                <h6 class="alert-heading">
                  <i class="ri-shield-check-line me-2"></i>Compromisso da MEFEMA
                </h6>
                <p class="mb-0">
                  A MEFEMA actua apenas como <strong>Operador</strong> ou <strong>Subcontratante</strong> no tratamento dos Dados do Cliente. Não acedemos, utilizamos ou divulgamos esses dados, excepto conforme estritamente necessário para fornecer o Serviço, cumprir obrigações legais ou conforme autorizado pelo Cliente.
                </p>
              </div>
            </div>

            <hr class="my-5">

            <!-- Responsabilidades -->
            <div id="responsabilidades" class="mb-5">
              <h2 class="mb-4">
                <i class="ri-user-settings-line text-primary me-2"></i>Responsabilidades do Cliente
              </h2>

              <div class="row g-3">
                <div class="col-12">
                  <div class="card border-start border-warning border-3">
                    <div class="card-body">
                      <h6>
                        <i class="ri-lock-2-line text-warning me-2"></i>Segurança da Conta
                      </h6>
                      <p class="mb-0">
                        O Cliente é responsável por manter a confidencialidade das credenciais de acesso e por todas as actividades que ocorram na sua conta.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="card border-start border-info border-3">
                    <div class="card-body">
                      <h6>
                        <i class="ri-shield-check-line text-info me-2"></i>Legalidade dos Dados
                      </h6>
                      <p class="mb-0">
                        O Cliente garante que possui todos os direitos e autorizações necessários para inserir e utilizar os Dados do Cliente no Sistema e que o uso desses dados não viola quaisquer leis ou direitos de terceiros.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="card border-start border-success border-3">
                    <div class="card-body">
                      <h6>
                        <i class="ri-scales-3-line text-success me-2"></i>Conformidade Legal
                      </h6>
                      <p class="mb-0">
                        O Cliente e os Utilizadores devem utilizar o Sistema em conformidade com todas as leis e regulamentos aplicáveis.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr class="my-5">

            <!-- SLA -->
            <div id="sla" class="mb-5">
              <h2 class="mb-4">
                <i class="ri-time-line text-primary me-2"></i>Disponibilidade e Suporte (SLA)
              </h2>

              <div class="card bg-light">
                <div class="card-body">
                  <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                      <i class="ri-service-line text-primary" style="font-size: 3rem;"></i>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <h5 class="mb-3">Acordo de Nível de Serviço</h5>
                      <p class="mb-3">
                        A MEFEMA envidará esforços comercialmente razoáveis para manter o Sistema disponível e operacional.
                      </p>
                      <div class="alert alert-primary mb-0">
                        <i class="ri-file-list-3-line me-2"></i>
                        Os detalhes sobre o nível de serviço, incluindo a <strong>disponibilidade mínima garantida</strong> e os <strong>tempos de resposta para suporte técnico</strong>, são regidos pelo <strong>SLA anexo ao Contrato de Subscrição</strong>.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr class="my-5">

            <!-- Limitação -->
            <div id="limitacao" class="mb-5">
              <h2 class="mb-4">
                <i class="ri-shield-line text-primary me-2"></i>Limitação de Responsabilidade
              </h2>

              <div class="alert alert-warning" role="alert">
                <h6 class="alert-heading">
                  <i class="ri-information-line me-2"></i>Fornecimento "Tal Como Está"
                </h6>
                <p class="mb-0">
                  O Sistema é fornecido <strong>"tal como está"</strong> (<em>as is</em>). A MEFEMA não garante que o Sistema estará livre de erros ou que operará ininterruptamente.
                </p>
              </div>

              <div class="card border-danger mt-3">
                <div class="card-body">
                  <h6 class="text-danger mb-3">
                    <i class="ri-alert-line me-2"></i>Limite de Responsabilidade
                  </h6>
                  <p class="mb-3">
                    A responsabilidade total da MEFEMA por quaisquer danos será limitada ao montante pago pelo Cliente à MEFEMA nos <strong>doze (12) meses anteriores</strong> ao evento que deu origem à reclamação.
                  </p>
                  <p class="mb-0">
                    A MEFEMA não será responsável por:
                  </p>
                  <ul class="mb-0">
                    <li>Lucros cessantes</li>
                    <li>Perda de dados</li>
                    <li>Danos indirectos</li>
                  </ul>
                </div>
              </div>
            </div>

            <hr class="my-5">

            <!-- Rescisão -->
            <div id="rescisao" class="mb-5">
              <h2 class="mb-4">
                <i class="ri-close-circle-line text-danger me-2"></i>Rescisão
              </h2>

              <div class="card bg-danger bg-opacity-10 border-danger">
                <div class="card-body">
                  <h6 class="text-danger mb-3">Rescisão pela MEFEMA</h6>
                  <p class="mb-3">
                    A MEFEMA pode rescindir ou suspender o acesso do Cliente ao Sistema <strong>imediatamente, sem aviso prévio</strong>, se o Cliente ou qualquer Utilizador violar materialmente estes Termos ou o Contrato de Subscrição.
                  </p>
                  
                  <h6 class="text-danger mb-2">Após a rescisão:</h6>
                  <ol class="mb-0">
                    <li>O Cliente terá um período limitado para exportar os seus Dados</li>
                    <li>Após esse período, a MEFEMA eliminará de forma segura todos os Dados do Cliente</li>
                  </ol>
                </div>
              </div>
            </div>

            <hr class="my-5">

            <!-- Disposições Finais -->
            <div class="mb-4">
              <h2 class="mb-4">
                <i class="ri-file-list-3-line text-primary me-2"></i>Disposições Finais
              </h2>

              <div class="row g-3">
                <div class="col-md-4">
                  <div class="card text-center h-100">
                    <div class="card-body">
                      <i class="ri-scales-3-line text-primary" style="font-size: 2.5rem;"></i>
                      <h6 class="mt-3 mb-2">Lei Aplicável</h6>
                      <p class="small text-muted mb-0">Leis da República de Moçambique</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card text-center h-100">
                    <div class="card-body">
                      <i class="ri-building-2-line text-success" style="font-size: 2.5rem;"></i>
                      <h6 class="mt-3 mb-2">Jurisdição</h6>
                      <p class="small text-muted mb-0">Foro da Cidade de Maputo</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card text-center h-100">
                    <div class="card-body">
                      <i class="ri-file-list-line text-info" style="font-size: 2.5rem;"></i>
                      <h6 class="mt-3 mb-2">Integralidade</h6>
                      <p class="small text-muted mb-0">Acordo integral entre as partes</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="alert alert-info mt-4" role="alert">
                <p class="mb-0">
                  <i class="ri-information-line me-2"></i>
                  Estes Termos, juntamente com o <strong>Contrato de Subscrição</strong> e a <strong>Política de Privacidade</strong>, constituem o acordo integral entre o Cliente e a MEFEMA.
                </p>
              </div>
            </div>

            <!-- Footer -->
            <div class="border-top pt-4 mt-5">
              <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                  <p class="text-muted small mb-0">
                    <strong>MEFEMA Systems, LDA</strong><br>
                    <i class="ri-calendar-check-line me-1"></i>Actualizado em 13 de Novembro de 2025
                  </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                  <a href="privacidade.php" class="btn btn-outline-primary btn-sm me-2">
                    <i class="ri-shield-keyhole-line me-1"></i>Política de Privacidade
                  </a>
                  <a href="eula.php" class="btn btn-outline-success btn-sm">
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

<?php include 'includes/footer.php'; ?>
