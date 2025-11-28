<style>
  .transition-300 { transition: all 0.3s ease; }
.hover-shadow-lg:hover { 
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.12) !important; 
}
.nav-tabs-clean .nav-link {
  border: none;
  color: var(--bs-body-color);
}
.nav-tabs-clean .nav-link.active {
  border-bottom: 3px solid var(--bs-primary);
  background: transparent;
  color: var(--bs-primary);
  font-weight: 600;
}
.space-y-1 > li + li { margin-top: .5rem; }
</style>
<section class="py-5 py-lg-7" id="produtos">
  <div class="container">

    <!-- Título principal -->
    <div class="row justify-content-center mb-5 mb-6">
      <div class="col-lg-8 text-center">
        <h2 class="display-5 fw-bold mb-3">Produtos & Soluções Digitais</h2>
        <p class="lead text-muted">Desenvolvimento à medida para empresas em Moçambique</p>
      </div>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-tabs nav-tabs-clean justify-content-center mb-6" id="produtosTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active fs-5 px-4 py-3" id="tab-websites" data-bs-toggle="tab" data-bs-target="#websites" type="button">
          <i class="ri-global-line me-2"></i> Websites
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link fs-5 px-4 py-3" id="tab-sistemas" data-bs-toggle="tab" data-bs-target="#sistemas" type="button">
          <i class="ri-database-2-line me-2"></i> Sistemas de Gestão
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link fs-5 px-4 py-3" id="tab-outros" data-bs-toggle="tab" data-bs-target="#outros" type="button">
          <i class="ri-apps-2-line me-2"></i> Outros Produtos
        </button>
      </li>
    </ul>

    <div class="tab-content">

      <!-- ====================== WEBSITES ====================== -->
      <div class="tab-pane fade show active" id="websites">
        <div class="row g-4 g-xl-5">

          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-0 shadow-sm hover-shadow-lg transition-300">
              <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                  <div class="bg-primary bg-opacity-10 text-primary rounded p-3 me-3">
                    <i class="ri-building-4-line fs-3"></i>
                  </div>
                  <h4 class="mb-0 fw-bold">Website Institucional</h4>
                </div>
                <p class="text-muted small">Site corporativo completo, moderno, rápido e optimizado para o Google.</p>
                <ul class="list-unstyled small text-muted mt-3 space-y-1">
                  <li><i class="ri-check-line text-success me-2"></i> Até 10 páginas + blog opcional</li>
                  <li><i class="ri-check-line text-success me-2"></i> Totalmente responsivo</li>
                  <li><i class="ri-check-line text-success me-2"></i> SEO técnico incluído</li>
                  <li><i class="ri-check-line text-success me-2"></i> Hosting + SSL grátis 12 meses</li>
                  <li><i class="ri-check-line text-success me-2"></i> Painel de administração simples</li>
                </ul>
                <div class="mt-4 pt-3 border-top">
                  <strong class="h5">Desde 18.000 MT</strong>
                </div>
              </div>
              <div class="card-footer bg-transparent border-0 text-center pb-4">
                <a href="#contacto" class="btn btn-primary btn-sm px-4">Pedir Orçamento</a>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-0 shadow-sm hover-shadow-lg transition-300">
              <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                  <div class="bg-warning bg-opacity-10 text-warning rounded p-3 me-3">
                    <i class="ri-rocket-line fs-3"></i>
                  </div>
                  <h4 class="mb-0 fw-bold">Landing Page de Conversão</h4>
                </div>
                <p class="text-muted small">Página única focada em captar contactos ou vender um produto/serviço.</p>
                <ul class="list-unstyled small text-muted mt-3 space-y-1">
                  <li><i class="ri-check-line text-success me-2"></i> Design de alta conversão</li>
                  <li><i class="ri-check-line text-success me-2"></i> Integração WhatsApp / Email</li>
                  <li><i class="ri-check-line text-success me-2"></i> Google Analytics + Meta Pixel</li>
                  <li><i class="ri-check-line text-success me-2"></i> Contador, escassez, provas sociais</li>
                </ul>
                <div class="mt-4 pt-3 border-top">
                  <strong class="h5">Desde 9.500 MT</strong>
                </div>
              </div>
              <div class="card-footer bg-transparent border-0 text-center pb-4">
                <a href="#contacto" class="btn btn-outline-primary btn-sm px-4">Solicitar</a>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-0 shadow-sm hover-shadow-lg transition-300">
              <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                  <div class="bg-info bg-opacity-10 text-info rounded p-3 me-3">
                    <i class="ri-community-line fs-3"></i>
                  </div>
                  <h4 class="mb-0 fw-bold">Portal com Área de Membros</h4>
                </div>
                <p class="text-muted small">Para escolas, associações, igrejas, cursos online, etc.</p>
                <ul class="list-unstyled small text-muted mt-3 space-y-1">
                  <li><i class="ri-check-line text-success me-2"></i> Login e registo</li>
                  <li><i class="ri-check-line text-success me-2"></i> Pagamentos M-Pesa</li>
                  <li><i class="ri-check-line text-success me-2"></i> Conteúdo restrito por perfil</li>
                  <li><i class="ri-check-line text-success me-2"></i> Fórum e notificações</li>
                </ul>
                <div class="mt-4 pt-3 border-top">
                  <strong class="h5">Sob orçamento</strong>
                </div>
              </div>
              <div class="card-footer bg-transparent border-0 text-center pb-4">
                <a href="#contacto" class="btn btn-info text-white btn-sm px-4">Falar com Especialista</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Exemplos reais -->
        <div class="mt-7 text-center">
          <p class="text-muted mb-3">Alguns websites já entregues recentemente</p>
          <div class="d-flex flex-wrap justify-content-center gap-4">
            <a href="https://example1.co.mz" target="_blank" class="text-decoration-none text-muted small">▸ Clínica Médica Beira</a>
            <a href="https://example2.co.mz" target="_blank" class="text-decoration-none text-muted small">▸ Associação Comercial de Maputo</a>
            <a href="https://example3.co.mz" target="_blank" class="text-decoration-none text-muted small">▸ Escola Técnica Nampula</a>
            <a href="https://example4.co.mz" target="_blank" class="text-decoration-none text-muted small">▸ Loja Online Tete</a>
          </div>
        </div>
      </div>

      <!-- ====================== SISTEMAS DE GESTÃO ====================== -->
      <div class="tab-pane fade" id="sistemas">
        <div class="row g-4 g-xl-5">
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-0 shadow-sm hover-shadow-lg transition-300 position-relative overflow-hidden">
              <div class="position-absolute top-0 end-0 mt-2 me-2">
                <span class="badge bg-danger text-white small rounded-pill">MAIS PEDIDO</span>
              </div>
              <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                  <div class="bg-danger bg-opacity-10 text-danger rounded p-3 me-3">
                    <i class="ri-file-list-3-line fs-3"></i>
                  </div>
                  <h4 class="mb-0 fw-bold">Sistema de Facturação Certificado AT</h4>
                </div>
                <p class="text-muted small">Software completo de facturação, stock e PDV 100% legal em Moçambique.</p>
                <ul class="list-unstyled small text-muted mt-3 space-y-1">
                  <li><i class="ri-check-line text-success me-2"></i> Certificado pela Autoridade Tributária</li>
                  <li><i class="ri-check-line text-success me-2"></i> Integração M-Pesa & EMIS</li>
                  <li><i class="ri-check-line text-success me-2"></i> Gestão de stock multi-armazém</li>
                  <li><i class="ri-check-line text-success me-2"></i> Relatórios em tempo real</li>
                </ul>
                <div class="mt-4 pt-3 border-top">
                  <strong class="h5">Desde 35.000 MT</strong>
                </div>
              </div>
              <div class="card-footer bg-transparent border-0 text-center pb-4">
                <a href="#contacto" class="btn btn-danger text-white btn-sm px-4">Pedir Demo Grátis</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-0 shadow-sm hover-shadow-lg transition-300">
              <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                  <div class="bg-success bg-opacity-10 text-success rounded p-3 me-3">
                    <i class="ri-group-line fs-3"></i>
                  </div>
                  <h4 class="mb-0 fw-bold">Sistema de Recursos Humanos</h4>
                </div>
                <p class="text-muted small">Processamento salarial, contratos, férias, avaliações.</p>
                <div class="mt-4 pt-3 border-top">
                  <strong class="h5">Sob orçamento</strong>
                </div>
              </div>
              <div class="card-footer bg-transparent border-0 text-center pb-4">
                <a href="#contacto" class="btn btn-success text-white btn-sm px-4">Mais Informação</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Exemplos -->
        <div class="mt-7 text-center">
          <p class="text-muted mb-3">Empresas que já usam o nosso sistema de facturação</p>
          <div class="d-flex flex-wrap justify-content-center gap-4">
            <span class="text-muted small">Minimercado Central • Farmácia Saúde • Restaurante Mar Azul • Loja Moda Jovem • +120 clientes</span>
          </div>
        </div>
      </div>

      <!-- ====================== OUTROS PRODUTOS ====================== -->
      <div class="tab-pane fade" id="outros">
        <div class="row g-4 g-xl-5">
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-0 shadow-sm hover-shadow-lg transition-300">
              <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                  <div class="bg-dark bg-opacity-10 text-dark rounded p-3 me-3">
                    <i class="ri-dashboard-3-line fs-3"></i>
                  </div>
                  <h4 class="mb-0 fw-bold">ERP Simplificado para PMEs</h4>
                </div>
                <p class="text-muted small">Tudo numa única plataforma: finanças, stocks, vendas, relatórios.</p>
                <div class="mt-4 pt-3 border-top">
                  <strong class="h5">Desde 65.000 MT</strong>
                </div>
              </div>
              <div class="card-footer bg-transparent border-0 text-center pb-4">
                <a href="#contacto" class="btn btn-dark text-white btn-sm px-4">Ver Módulos</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-0 shadow-sm hover-shadow-lg transition-300">
              <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                  <div class="bg-purple bg-opacity-10 text-purple rounded p-3 me-3">
                    <i class="ri-customer-service-2-line fs-3"></i>
                  </div>
                  <h4 class="mb-0 fw-bold">CRM de Vendas Avançado</h4>
                </div>
                <p class="text-muted small">Funil de vendas, automação WhatsApp, follow-up, relatórios.</p>
                <div class="mt-4 pt-3 border-top">
                  <strong class="h5">Desde 25.000 MT</strong>
                </div>
              </div>
              <div class="card-footer bg-transparent border-0 text-center pb-4">
                <a href="#contacto" class="btn btn-outline-purple btn-sm px-4">Testar 14 Dias Grátis</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
